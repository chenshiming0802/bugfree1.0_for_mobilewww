<html>
<head></head>
<body>
 
<form method="POST" enctype="multipart/form-data"
	action="http://127.0.0.1:8081/service_proxy/service_proxy_withfils2.jsp">
	_SERVICE_:<input type="text" name="_SERVICE_" value="uploadBugFile2.php"><BR>
	bugId:<input type="text" name="bugId" value="0000004"><BR>
	file:<input type="file" name="BugFileName[]"><BR>
	<input type="submit" value="Submit!">
</form>
</html>