<%@ page contentType="text/json;charset=utf-8"%>
<%@ page import="java.util.*"%>
<%@ page import="net.sf.json.*"%>
<%@ page import="org.apache.commons.httpclient.*"%>
<%@ page import="org.apache.commons.httpclient.methods.*"%>
<%@ page import="org.apache.commons.httpclient.methods.multipart.*"%>
<%@ page import="javax.crypto.*"%>
<%@ page import="java.security.*"%>
<%@ page import="java.io.*"%>
<%@ page import="javax.crypto.spec.*"%>
<%@ page import="org.apache.commons.fileupload.*"%>
<%@ page import="org.apache.commons.fileupload.disk.*"%>
<%@ page import="org.apache.commons.fileupload.servlet.*"%>
 
<%!
// ucore1 ADE1C062E16EAB4AACA11F7F89053FFD==>chenshiming
//fileupload test(isDevelopMode=true): http://127.0.0.1:8081/service_proxy/service_proxy_withfils2.jsp?_SERVICE_=uploadBugFile2.php&bugId=0000004   

public static boolean isDevelopMode = false;

	public static String jsonProxyPost(ServletContext servletContext,HttpServletRequest request)
			throws Exception {
		String aesPassword = "73C58BAFE578C59366D8C995CD0B9D6D";	
		request.setCharacterEncoding("utf-8");
		String url = "http://service.bsteel.com/BugFree1.0/rest/";
		if(isDevelopMode){
			url = "http://127.0.0.1:82/BugFree/rest/";//for dev
		}
		Map requestParamMap = getRequestFileItem(servletContext,request);
		Map params = (Map)requestParamMap.get("fieldParams");
		System.out.println("params.params="+params);
		String service = (String)params.get("_SERVICE_");
		/*
		Enumeration en = request.getParameterNames();
		HashMap params = new HashMap();
		while (en.hasMoreElements()) {
			String key = (String) en.nextElement();
			String value = request.getParameter(key);
			params.put(key, value);
		}
		System.out.println("--->"+params);
		*/
		
	
		boolean isLogin = false;
		System.out.println("service="+service);
		if(service.equals("dologin2.php")){isLogin = true;}
		System.out.println("isLogin="+isLogin);
		if(!isLogin){
			String ucore1 = (String)request.getHeader("ucore1");
			if(isDevelopMode){
				ucore1 = "ADE1C062E16EAB4AACA11F7F89053FFD";//for dev
			}
			System.out.println("ucore1="+ucore1);
			if(ucore1!=null){
				byte[] decryptFrom = parseHexStr2Byte(ucore1);
				byte[] decryptResult = decrypt(decryptFrom, aesPassword);
				String sessionUserName = new String(decryptResult);
				params.put("userName",sessionUserName);
			}
		}
		
		String fileFieldName = (String)requestParamMap.get("fileFieldName");
		File file = (File)requestParamMap.get("file");
		params = (HashMap)requestParamMap.get("fieldParams");
 
		System.out.println("url="+url);
		System.out.println("service="+service);
		System.out.println("params="+params);
		String json = jsonProxyPost(url, service, params,fileFieldName,file);
		System.out.println("json result="+json);
		if(isLogin){
			if(json==null){
				return "";
			}
			JSONObject jsonObject = JSONObject.fromObject(json);	   	
		   	String resultFlag = jsonObject.getString("resultFlag");
		   	if(resultFlag!=null && resultFlag.equals("0")){
		   		String sessionUserName = jsonObject.getString("userName");
			   	byte[] encryptResult = encrypt(sessionUserName, aesPassword);
				String encryptResultStr = parseByte2HexStr(encryptResult);	
			   	jsonObject.put("ucore1", encryptResultStr);   
				json = jsonObject.toString();		   	
			}
		}
		return json;
	}


	public static Map getRequestFileItem(ServletContext servletContext,HttpServletRequest request) throws Exception{
		DiskFileItemFactory factory = new DiskFileItemFactory();
		//ServletContext servletContext = this.getServletConfig().getServletContext();
		File repository = (File) servletContext.getAttribute("javax.servlet.context.tempdir");
		factory.setRepository(repository);
		// Create a new file upload handler
		ServletFileUpload upload = new ServletFileUpload(factory);
		// Parse the request
		List items = upload.parseRequest(request);
		
		Map ret = new HashMap();
		Map fieldParams = new HashMap();
		for(int i=0,j=items.size();i<j;i++){
			FileItem item = (FileItem)items.get(i);
			if (item.isFormField()) {
				fieldParams.put(item.getFieldName(),item.getString("UTF-8"));
			}else{
				//文件存储
				String fileName = (item.getName()==null)?""+System.currentTimeMillis():item.getName();

				String tempFileName = repository.getPath()+File.separator+fileName;
				File file = new File(tempFileName);
				System.out.println("tempFileName:"+tempFileName);
				item.write(file);	
				ret.put("fileFieldName", item.getFieldName());
				ret.put("file", file);			
			}
		}
		
		ret.put("fieldParams",fieldParams);
		System.out.println("fieldParams.ret="+ret);
		/*
		if(items!=null && items.get(0)!=null){
			FileItem item = (FileItem)items.get(0);
			String tempFileName = repository.getPath()+File.separator+System.currentTimeMillis();
			File file = new File(tempFileName);
			System.out.println("tempFileName:"+tempFileName);
			item.write(file);	
			ret.put("fileFieldName", item.getFieldName());
			ret.put("file", file);
		}else{
			ret.put("fileFieldName", null);
			ret.put("file", null);
		}
		*/
		return ret;
	}
	
	public static String jsonProxyPost(String url, String service,
			Map params,String fileFieldName,File file) {
		System.out.println("jsonProxyPost:" + url  + service + "  params:" + params+" fileFieldName:"+fileFieldName);
		String returnMessage = null;
		try {
			returnMessage = proxyPost(url, service, params,fileFieldName,file);
		} catch (Exception e) {
			 e.printStackTrace();
			returnMessage = "{\"resultFlag\":\"1\",\"resultMessage\":\"Proxy connect reject!\"}";
		}
		System.out.println("jsonProxy return:"+returnMessage);
		return returnMessage;

	}

	public static String proxyPost(String url, String service, Map params,String fileFieldName,File file)
			throws Exception {
		params = (params==null)?new HashMap():params;
 
		
		String response = null;
		HttpClient client = new HttpClient();
		PostMethod method = new UTF8PostMethod(url + service);

		Iterator it = params.keySet().iterator();
		//NameValuePair[] pairs = new NameValuePair[params.size()];
		Part[] pairs = null;
		int index = 0;
		if(file!=null){
			pairs = new Part[params.size()+1];
			pairs[0] = new FilePart(fileFieldName, file);
			System.out.println(fileFieldName+"==="+file);
			index++;
		}else{
			pairs = new Part[params.size()];
		}
		while (it.hasNext()) {
			String key = (String) it.next();
			String value = (String) params.get(key);
			//pairs[i] = new NameValuePair(key, value);
			pairs[index] = new StringPart(key,value, "UTF-8");
			index++;
		}
//		method.setRequestBody(pairs);
 
		method.setRequestEntity(new MultipartRequestEntity(pairs,method.getParams()));	
		try {
			client.executeMethod(method);
			if (method.getStatusCode() == HttpStatus.SC_OK) {
				response = method.getResponseBodyAsString();
			}
		} finally {
			method.releaseConnection();
		}
		return response;
	}

 static class UTF8PostMethod extends PostMethod{
    public UTF8PostMethod(String url){ 
        super(url);
    }
    public String getRequestCharSet() {
     return "UTF-8";
    }
}	


/*
		String content = "chenshiming0802@163.com";
		String password = "73C58BAFE578C59366D8C995CD0B9D6D";
		// 
		System.out.println("¼ÓÃÜÇ°£º" + content);
		byte[] encryptResult = encrypt(content, password);
		String encryptResultStr = parseByte2HexStr(encryptResult);
		// 
		byte[] decryptFrom = parseHexStr2Byte(encryptResultStr);
		byte[] decryptResult = decrypt(decryptFrom, password);
		System.out.println("½âÃÜºó£º" + new String(decryptResult));
*/
public static byte[] encrypt(String content, String password) {
	try {
		KeyGenerator kgen = KeyGenerator.getInstance("AES");
		kgen.init(128, new SecureRandom(password.getBytes()));
		SecretKey secretKey = kgen.generateKey();
		byte[] enCodeFormat = secretKey.getEncoded();
		SecretKeySpec key = new SecretKeySpec(enCodeFormat, "AES");
		Cipher cipher = Cipher.getInstance("AES");// ´´½¨ÃÜÂëÆ÷
		byte[] byteContent = content.getBytes("utf-8");
		cipher.init(Cipher.ENCRYPT_MODE, key);// ³õÊ¼»¯
		byte[] result = cipher.doFinal(byteContent);
		return result; // ¼ÓÃÜ
	} catch (NoSuchAlgorithmException e) {
		e.printStackTrace();
	} catch (NoSuchPaddingException e) {
		e.printStackTrace();
	} catch (InvalidKeyException e) {
		e.printStackTrace();
	} catch (UnsupportedEncodingException e) {
		e.printStackTrace();
	} catch (IllegalBlockSizeException e) {
		e.printStackTrace();
	} catch (BadPaddingException e) {
		e.printStackTrace();
	}
	return null;
}
public static byte[] decrypt(byte[] content, String password) {
	try {
		KeyGenerator kgen = KeyGenerator.getInstance("AES");
		kgen.init(128, new SecureRandom(password.getBytes()));
		SecretKey secretKey = kgen.generateKey();
		byte[] enCodeFormat = secretKey.getEncoded();
		SecretKeySpec key = new SecretKeySpec(enCodeFormat, "AES");
		Cipher cipher = Cipher.getInstance("AES");// ´´½¨ÃÜÂëÆ÷
		cipher.init(Cipher.DECRYPT_MODE, key);// ³õÊ¼»¯
		byte[] result = cipher.doFinal(content);
		return result; // ¼ÓÃÜ
	} catch (NoSuchAlgorithmException e) {
		e.printStackTrace();
	} catch (NoSuchPaddingException e) {
		e.printStackTrace();
	} catch (InvalidKeyException e) {
		e.printStackTrace();
	} catch (IllegalBlockSizeException e) {
		e.printStackTrace();
	} catch (BadPaddingException e) {
		e.printStackTrace();
	}
	return null;
}
public static byte[] parseHexStr2Byte(String hexStr) {
	if (hexStr.length() < 1)
		return null;
	byte[] result = new byte[hexStr.length() / 2];
	for (int i = 0; i < hexStr.length() / 2; i++) {
		int high = Integer.parseInt(hexStr.substring(i * 2, i * 2 + 1), 16);
		int low = Integer.parseInt(hexStr.substring(i * 2 + 1, i * 2 + 2),
				16);
		result[i] = (byte) (high * 16 + low);
	}
	return result;
}
public static String parseByte2HexStr(byte buf[]) {
	StringBuffer sb = new StringBuffer();
	for (int i = 0; i < buf.length; i++) {
		String hex = Integer.toHexString(buf[i] & 0xFF);
		if (hex.length() == 1) {
			hex = '0' + hex;
		}
		sb.append(hex.toUpperCase());
	}
	return sb.toString();
}
%>
<%
response.setHeader("Access-Control-Allow-Origin","*"); 
response.setHeader("Access-Control-Allow-Methods","POST, GET"); 
response.setHeader("Access-Control-Allow-Headers","ucore1"); 
response.setHeader("Access-Control-Max-Age","1728000"); 
out.println(jsonProxyPost(this.getServletContext(),request));
%>