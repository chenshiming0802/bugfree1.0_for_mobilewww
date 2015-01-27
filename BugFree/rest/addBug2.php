<?php
/**
for test:http://127.0.0.1:82/BugFree/rest/test_addBug2.php
*/
    require_once("include_SetupBug.inc.php");
    require_once("include_FunctionsMain.inc.php");

    $userName = request("userName",null);
    $bugTitle = request("bugTitle",null);
    $notes = request("notes",null);
    $projectId = request("projectId",null);
    $moduleId = request("moduleId",null);
    $assignedTo = request("assignedTo",null);
    $assignedDate = date("Y-m-d H:i:s");

    $bugTitle = htmlspecialchars($bugTitle);
    $notes = htmlspecialchars($notes);

    assertNotNull($userName,"reqired userName!","userName_is_need");
    assertNotNull($bugTitle,"reqired bugTitle!","bugTitle_is_need");
    assertNotNull($projectId,"reqired projectId!","projectId_is_need");
    //assertNotNull($moduleId,"reqired moduleId!","moduleId_is_need");
    assertNotNull($assignedTo,"reqired assignedTo!","assignedTo_is_need");

    $model = getRowBySql("select t.* from BugProject t where t.ProjectID='{$projectId}'");
    $projectName = $model["ProjectName"];

    $model = getRowBySql("select t.* from BugModule t where t.ModuleID='{$projectId}'");
    $moduleName = $model["ModuleName"];
 

    /* Add to table BugInfo。*/
    $SQL = "INSERT INTO BugInfo(ProjectID,ProjectName,ModuleID,ModulePath,
                                BugTitle,BugSeverity,BugType,BugOS,BugStatus,
                                OpenedBy,OpenedDate,OpenedBuild,
                                AssignedTo,AssignedDate,MailTo,
                                LastEditedBy,LastEditedDate) 
            VALUES(
                '{$projectId}',
                '{$projectName}',
                '{$moduleId}',
                '{$moduleName}',
                '{$bugTitle}',
                '3',
                'Others',
                'All',
                'Active', 
                '{$userName}',
                now(),
                '1.0.0',
                '{$assignedTo}',
                '{$assignedDate}',---
                '',
                '{$userName}',
                now()
            )";
    $bugId = insertBySql($SQL);
    $SQL = "INSERT INTO BugHistory(BugID,UserName,Action,FullInfo,ActionDate) 
            VALUES(
                '{$bugId}',
                '{$userName}',
                'Opened',
                '{$notes}',
                now()
            )";
    querySql($SQL);

    $bug = getRowBySql("select t.* from BugInfo t where t.BugID='{$bugId}'");	
    rest_UpdateBugsendSms($bug,$assignedTo,$UserName);//for bsteel sms

    $arrays["resultFlag"] = "0";
    $arrays["resultMessage"] = "";
    $arrays["bugId"] = $bugId;

    $_SESSION["BugUserAclSQL"] = " 1=1 ";
    $Message = rest_bugCreateMailMessage($bugId,"Opened",$notes);
    
    rest_sysMail(array($assignedTo),null,$bugTitle,$Message);
    echo(json_encode($arrays));
    //TODO MAIL and SMS
?>