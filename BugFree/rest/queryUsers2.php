<?php
//for test http://127.0.0.1:82/BugFree/rest/test_queryUsers2.php
//http://service.bsteel.com/BugFree1.0/rest/queryUsers2.php?pageIndex=2&pageSize=3
    require_once("include_SetupBug.inc.php");
    require_once("include_FunctionsMain.inc.php");
    
    //$BugID = $_POST['BugID'];//$BugID = '0055571';
    $queryString = request('queryString'); //$UserName = "chenshiming";
    $PageNo = request('pageIndex');//$PageNo=1;
    $PageSize = request('pageSize');
    $type = request('type');
    //$queryString = $_REQUEST['queryString'];
    //$queryString = iconv("UTF-8","GB2312//IGNORE",$queryString);
    $FileList = array();
    if($type=="user"){
        $tt = "";
        if($queryString!=null && $queryString!=""){
            $tt =  " and t.RealName LIKE '%{$queryString}%' OR t.UserName LIKE '%{$queryString}%'";
        }
        $SQL = "SELECT t.UserName userName, t.RealName realName FROM BugUser t  WHERE 1=1 {$tt} ORDER BY UserID DESC ";      
        $FileList["datas"] = getListPageBySql($SQL,$PageNo,$PageSize);
    }else if($type=="projectmodule") {
        $tt = "";
        if($queryString!=null && $queryString!=""){
            $tt =  " and (t1.ProjectName LIKE '%{$queryString}%' OR t2.ModuleName LIKE '%{$queryString}%')";
        }        
        $SQL = "SELECT  CONCAT_WS('',t1.ProjectName,t2.ModuleName) realName, CONCAT_WS(',',t1.ProjectID,t2.ModuleID) userName,t1.ProjectID
            FROM  BugProject t1 LEFT JOIN BugModule t2 ON t1.ProjectID=t2.ProjectID
            where 1=1 {$tt} ORDER BY CONCAT_WS(',',t1.ProjectID,t2.ModuleID)  desc";
        //var_dump($SQL);
        $FileList["datas"] = getListPageBySql($SQL,$PageNo,$PageSize);
    }
    $srModel = array();
    $srModel['resultFlag'] = "0";
    $srModel['resultMessage'] = "";
    $srModel['datas'] = array();
    foreach($FileList['datas'] as $key=>$m){
        $item = array();
        $item['userName'] = $m["userName"];
        $item['realName'] = $m["realName"];
        $srModel['datas'][] = $item;
    }
    echo(json_encode_bm($srModel));

?>