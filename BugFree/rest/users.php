<?php
    require_once("include_SetupBug.inc.php");
    require_once("include_FunctionsMain.inc.php");
    
    $BugID = $_POST['BugID'];//$BugID = '0055571';
    $queryString = $_POST['queryString']; //$UserName = "chenshiming";
    $PageNo = $_POST['PageNo'];$PageNo=1;
    $type = $_POST['type'];
    //$PageSize = $_POST['PageSize'];
    $PageSize =20;
    if(type=="user"){
        $tt = "";
        if($queryString!=null && $queryString!=""){
            $tt =  " and t.RealName LIKE '%{$queryString}%' OR t.UserName LIKE '%{$queryString}%'";
        }
        $SQL = "SELECT t.UserName, t.RealName FROM BugUser t  WHERE 1=1 {$tt} ORDER BY UserID DESC ";      
        $FileList["datas"] = getListPageBySql($SQL,$PageNo,$PageSize);
    }else if(type=="projectmodule") {
        $tt = "";
        if($queryString!=null && $queryString!=""){
            $tt =  " and (t1.ProjectName LIKE '%{$queryString}%' OR t2.ModuleName LIKE '%{$queryString}%')";
        }        
        $SQL = "SELECT  CONCAT_WS('',t1.ProjectName,t2.ModuleName) userName , CONCAT_WS(',',t1.ProjectID,t2.ModuleID)  realName ,t1.ProjectID
            FROM  bugproject t1 LEFT JOIN bugmodule t2 ON t1.ProjectID=t2.ProjectID
            where 1=1 {$tt} ORDER BY CONCAT_WS(',',t1.ProjectID,t2.ModuleID)  desc"
        $FileList["datas"] = getListPageBySql($SQL,$PageNo,$PageSize);
    }    
    echo(json_encode_bm($FileList));

?>