<?php
/**
 * The English language file of BugFree system.
 *
 * BugFree is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * BugFree is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with BugFree; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @link        http://bugfree.1zsoft.com
 * @package     BugFree
 * @version     $Id: Chinese.php,v 1.41 2005/10/06 12:12:43 wwccss Exp $
 */

/* Language and charset, don't change. */
$BugConfig["Language"] = "Chinese";
$BugConfig["Charset"]  = "GB2312";

/* BugFree team info. Dont't change. */
$BugConfig["RnDTeam"]  = "����ԴBugFree�з�С��";
$BugConfig["HomePage"] = "http://bugfree.1zsoft.com";
$BugConfig["Title"]    = "����Դ|BugFree -- ��Դ���������Web�ľ����Bug����ϵͳ���汾�� " . $BugConfig["Version"];

/* Define css style list. */
$BugConfig["StyleList"]["Default"] = "Default";
$BugConfig["StyleList"]["Blue"]    = "Blue";

/* Define the length of the title to show in result list window and user control window. */
$BugConfig["QueryTitleLength"]   = 45;    // Used in QueryBug.php
$BugConfig["ControlTitleLength"] = 30;    // Used in UserControl.php

/* The fields of BugInfo table. */
$BugConfig["BugFields"] = array
(
    "BugID"          => "Bug���",
    "ProjectID"      => "��Ŀ���",
    "ProjectName"    => "��Ŀ��",
    "ModuleID"       => "ģ����",
    "ModulePath"     => "ģ��·��",
    "BugTitle"       => "Bug ����",
    "BugSeverity"    => "���س̶�",
    "BugType"        => "Bug ����",
    "BugOS"          => "����ϵͳ",
    "BugStatus"      => "Bug ״̬",
    "LinkID"         => "���Bug",
    "MailTo"         => "���͸�",
    "OpenedBy"       => "��˭����",
    "OpenedDate"     => "��������",
    "OpenedBuild"    => "����ʱBuild",
    "AssignedTo"     => "ָ�ɸ�",
    "AssignedDate"   => "ָ������",
    "ResolvedBy"     => "��˭���",
    "Resolution"     => "�������",
    "ResolvedBuild"  => "���ʱBuild",
    "ResolvedDate"   => "�������",
    "ClosedBy"       => "��˭�ر�",
    "ClosedDate"     => "�ر�����",
    "LastEditedBy"   => "�����˭�༭",
    "LastEditedDate" => "���༭����"
);

/* The fields used to query in QueryBug.php.(Note: the field will be displayed in the order you defined here). */
$BugConfig["QueryField"] = array
(
   "ProjectName"    => $BugConfig["BugFields"]["ProjectName"],
   "ModulePath"     => $BugConfig["BugFields"]["ModulePath"],
   "BugID"          => $BugConfig["BugFields"]["BugID"],
   "OpenedBy"       => $BugConfig["BugFields"]["OpenedBy"],
   "AssignedTo"     => $BugConfig["BugFields"]["AssignedTo"],
   "BugTitle"       => $BugConfig["BugFields"]["BugTitle"],
   "BugStatus"      => $BugConfig["BugFields"]["BugStatus"],
   "BugSeverity"    => $BugConfig["BugFields"]["BugSeverity"],
   "BugType"        => $BugConfig["BugFields"]["BugType"],
   "BugOS"          => $BugConfig["BugFields"]["BugOS"],
   "OpenedDate"     => $BugConfig["BugFields"]["OpenedDate"],
   "AssignedDate"   => $BugConfig["BugFields"]["AssignedDate"],
   "ResolvedBy"     => $BugConfig["BugFields"]["ResolvedBy"],
   "Resolution"     => $BugConfig["BugFields"]["Resolution"],
   "ResolvedDate"   => $BugConfig["BugFields"]["ResolvedDate"],
   "ClosedBy"       => $BugConfig["BugFields"]["ClosedBy"],
   "ClosedDate"     => $BugConfig["BugFields"]["ClosedDate"],
   "LastEditedBy"   => $BugConfig["BugFields"]["LastEditedBy"],
   "LastEditedDate" => $BugConfig["BugFields"]["LastEditedDate"],
   "LinkID"         => $BugConfig["BugFields"]["LinkID"],
   "MailTo"         => $BugConfig["BugFields"]["MailTo"],
   "OpenedBuild"    => $BugConfig["BugFields"]["OpenedBuild"],
   "ResolvedBuild"  => $BugConfig["BugFields"]["ResolvedBuild"],
);

/* And Or list. */
$BugConfig["AndOr"] = array("And" => "����","Or"  => "����");

/* Operators. */
$BugConfig["Operators"] = array
(
   "="     =>  "����",
   "!="    =>  "������",
   ">"     =>  "����",
   "<"     =>  "С��",
   "LIKE"  =>  "����",
   "UNDER" =>  "��ĳ·����"
);

/* Severity. */
$BugConfig["Severitys"] = array
(
   3 => 3,
   1 => 1,
   2 => 2,
   4 => 4,
);

/* Define the OS list. */
$BugConfig["BugOS"] = array
(
   "All"     => "ȫ��",
   "WinXP"   => "Windows XP",
   "Win2000" => "Windows 2000",
   "WinNT"   => "Windows NT",
   "Win98"   => "Windows 98",
   "Linux"   => "Linux",
   "Unix"    => "Unix",
   "Others"  => "����",
);

/* Define the types. */
$BugConfig["Types"] = array
(
  "CodeError"    => "�������",
  "Interface"    => "�����Ż�",
  "DesignChange" => "��Ʊ��",
  "NewFeature"   => "��������",
  "CheckData"    => "����У��",
  "TrackThings"  => "�������",
  "Others"       => "����"
);

/* Define the status. */
$BugConfig["Status"] = array
(
    "Active"   => "Active",
    "Resolved" => "Resolved",
    "Closed"   => "Closed"
);

/* Define the Resolution. */
$BugConfig["Resolutions"] = array
(
    ""             => "",
    "By Design"    => "By Design",
    "Duplicate"    => "Duplicate",
    "External"     => "External",
    "Fixed"        => "Fixed",
    "Not Repro"    => "Not Repro",
    "Postponed"    => "Postponed",
    "Will not Fix" => "Won't Fix"
);

/* The error message to display when a user not logged in. */
$BugConfig["Message"] =  array
(
    "NotLogin"     => "����û�е�¼��ϵͳ��\\n�����ȵ�¼ BugFree!",
    "ErrorLogin"   => "�����û��������벻��ȷ��\\n����������!",
    "NoPriv"       => "�����ڻ�û�з���BugFree��Ȩ�ޣ�����ϵϵͳ����ԱΪ������Ȩ�ޡ�",
);

/*-------------------------- TEMPLATE VARIABLES ------------------------------------------*/

/* Setting of common */
$TplConfig["Common"]["ListSign"]                 = "<font color='blue'>��</font>";

/* Setting of Login.php */
$TplConfig["Login"]["LoginTitle"]                = "��ӭʹ�� BugFree";
$TplConfig["Login"]["BugUserName"]               = "�û���:";
$TplConfig["Login"]["BugUserPWD"]                = "����:";
$TplConfig["Login"]["ButtonLogin"]               = "��¼ BugFree (L)";
$TplConfig["Login"]["SelectLang"]                = "����:";
$TplConfig["Login"]["SelectStyle"]               = "��ʽ:";

/* Setting of index.php */
$TplConfig["Index"]["NotSupportFrame"]           = "���ź������������֧�� Frame���������ȸ���������İ汾��";
$TplConfig["Index"]["WarnningTitle"]              = "ϵͳ���棡";
$TplConfig["Index"]["WarnningContent"]            = <<<EOT
<ul>
  <li>ϵͳ������BugFree��Ŀ¼�������Install.php����upgrade.php�������BugFree�Ѿ���װ��ϣ��뽫�˳���ɾ���������Ƶ�����Ŀ¼������������ȫ��������⣡</li>
  <li>ϵͳͬʱ��ʾ���������ʹ����BugFree�Ķ�ʱ����������޸�ShellĿ¼��Ȩ�ޣ���ֹ���˷��ʣ����߽�ShellĿ¼�Ƶ���վĿ¼֮�⡣</li>
</ul>
EOT;

/* Setting of ListModule.php.php */
$TplConfig["ListModule"]["QueryOrNew"]           = "<B><span class='PanelTitle'>�л���ѯ�ʹ���</span></B>";
$TplConfig["ListModule"]["QueryMode"]            = "��ѯģʽ";
$TplConfig["ListModule"]["NewMode"]              = "���� Bug";
$TplConfig["ListModule"]["SelectProject"]        = "<B><span class='PanelTitle'>��Ŀ��ģ���б�</span></B>";
$TplConfig["ListModule"]["ProjectDoc"]           = "��Ŀ�ĵ�";
$TplConfig["ListModule"]["ProjectPlan"]          = "��Ŀ����";

/* Setting of UserControl.php */
$TplConfig["UserControl"]["Latest5AssignedToMe"] = "<B><span class='PanelTitle'>���5��ָ�ɸ��ҵ� Bug</span></B>";
$TplConfig["UserControl"]["Latest5OpenedByMe"]   = "<B><span class='PanelTitle'>���5�����Ҵ����� Bug</span></B>";
$TplConfig["UserControl"]["UserQuery"]           = "<B><span class='PanelTitle'>���Զ���Ĳ�ѯ����</span></B>";
$TplConfig["UserControl"]["ExecuteUserQuery"]    = "��ѯ (X)";
$TplConfig["UserControl"]["ShareUserQuery"]      = "���� (M)";
$TplConfig["UserControl"]["DeleteUserQuery"]     = "ɾ�� (D)";

/* Setting of QueryBugForm.php */
$TplConfig["QueryBugForm"]["Help"]               = "ʹ�ð���";
$TplConfig["QueryBugForm"]["CheckUpdate"]        = "������";
$TplConfig["QueryBugForm"]["EasySoftHomePage"]   = "����Դ��վ";
$TplConfig["QueryBugForm"]["BugFreeHomePage"]    = "BugFree��վ";
$TplConfig["QueryBugForm"]["BugFreeService"]     = "����֧��";
$TplConfig["QueryBugForm"]["Report"]             = "ͳ��";
$TplConfig["QueryBugForm"]["Admin"]              = "��̨����";
$TplConfig["QueryBugForm"]["EditSelfInfo"]       = "�༭�ҵ���Ϣ";
$TplConfig["QueryBugForm"]["LogOut"]             = "�˳�";
$TplConfig["QueryBugForm"]["QueryTitle"]         = "��ѡ����Ĳ�ѯ����";
$TplConfig["QueryBugForm"]["AutoComplete"]       = "�Զ����";
$TplConfig["QueryBugForm"]["QueryGroup1"]        = "��һ��";
$TplConfig["QueryBugForm"]["QueryGroup2"]        = "�ڶ���";
$TplConfig["QueryBugForm"]["GroupAnd"]           = "����";
$TplConfig["QueryBugForm"]["GroupOr"]            = "����";
$TplConfig["QueryBugForm"]["ExecuteQueryBTN"]    = "���ڲ�ѯ (Q)";
$TplConfig["QueryBugForm"]["SaveQueryBTN"]       = "�����ѯ (S)";
$TplConfig["QueryBugForm"]["ResetQueryBTN"]      = "���ò�ѯ (I)";
$TplConfig["QueryBugForm"]["CustomSetBTN"]       = "�Զ�����ʾ (C)";
$TplConfig["QueryBugForm"]["AllFieldsTitle"]     = "�����ֶ�";
$TplConfig["QueryBugForm"]["FieldsToShowTitle"]  = "Ҫ��ʾ���ֶ�";
$TplConfig["QueryBugForm"]["FieldsAddBTN"]       = ">>";
$TplConfig["QueryBugForm"]["FieldsDelBTN"]       = "<<";
$TplConfig["QueryBugForm"]["FieldsDefaultBTN"]   = "Ĭ��>>";
$TplConfig["QueryBugForm"]["DefaultFields"]      = array
(
   "BugID"        => $BugConfig["BugFields"]["BugID"],
   "BugSeverity"  => $BugConfig["BugFields"]["BugSeverity"],
   "BugTitle"     => $BugConfig["BugFields"]["BugTitle"],
   "OpenedBy"     => $BugConfig["BugFields"]["OpenedBy"],
   "AssignedTo"   => $BugConfig["BugFields"]["AssignedTo"],
   "ResolvedBy"   => $BugConfig["BugFields"]["ResolvedBy"],
   "Resolution"   => $BugConfig["BugFields"]["Resolution"]
);

/* Setting of QueryBug.php */
$TplConfig["QueryBug"]["ExportHtmlTable"]        = "ȫ������";
$TplConfig["QueryBug"]["BugSeverity"]            = "���س̶�";
$TplConfig["QueryBug"]["BugID"]                  = "Bug ���";
$TplConfig["QueryBug"]["BugTitle"]               = "Bug ����";
$TplConfig["QueryBug"]["OpenedBy"]               = "��˭����";
$TplConfig["QueryBug"]["AssignedTo"]             = "ָ�ɸ�";
$TplConfig["QueryBug"]["ResolvedBy"]             = "��˭���";
$TplConfig["QueryBug"]["BugStatus"]              = "״̬";
$TplConfig["QueryBug"]["OpenedByMe"]             = "���Ҵ���";
$TplConfig["QueryBug"]["AssignedToMe"]           = "ָ�ɸ���";
$TplConfig["QueryBug"]["ResolvedByMe"]           = "���ҽ��";
$TplConfig["QueryBug"]["Resolution"]             = "�������";
$TplConfig["QueryBug"]["OrderASC"]               = "��";
$TplConfig["QueryBug"]["OrderDESC"]              = "��";

/* Setting of AddBugForm.php */
$TplConfig["AddBugForm"]["AddTitle"]             = "�����½�һ�� Bug";
$TplConfig["AddBugForm"]["ProjectModule"]        = "��Ŀ��ģ��";
$TplConfig["AddBugForm"]["BugTitle"]             = "Bug ����";
$TplConfig["AddBugForm"]["BugBuild"]             = "Build �汾";
$TplConfig["AddBugForm"]["NewBugBuild"]          = "����Build";
$TplConfig["AddBugForm"]["TypeAndOSAndSeverity"] = "���͡� ����ϵͳ�����س̶�";
$TplConfig["AddBugForm"]["BugUserList"]          = "�����û��б�";
$TplConfig["AddBugForm"]["AssignedAndMailTo"]    = "ָ�ɡ�����֪ͨ";
$TplConfig["AddBugForm"]["AssignedToTitle"]      = "ָ�ɸ�";
$TplConfig["AddBugForm"]["AssignedToAddBTN"]     = "<<";
$TplConfig["AddBugForm"]["AssignedToDelBTN"]     = ">>";
$TplConfig["AddBugForm"]["MailToTitle"]          = "����֪ͨ";
$TplConfig["AddBugForm"]["MailToAddBTN"]         = ">>";
$TplConfig["AddBugForm"]["MailToDelBTN"]         = "<<";
$TplConfig["AddBugForm"]["BugDesc"]              = "Bug ����";
$TplConfig["AddBugForm"]["BugDescTemplate"]      = "[����]\n1.\n2.\n3.\n[���]\n\n[����]\n\n[��ע]";
$TplConfig["AddBugForm"]["BugFiles"]             = "����ļ�";
$TplConfig["AddBugForm"]["SetFileName"]          = "��ʾ����";
$TplConfig["AddBugForm"]["SelectFile"]           = "ѡ���ļ�";
$TplConfig["AddBugForm"]["NewBug"]               = "���� Bug (N)";

/* Setting of AddBug.php */
$TplConfig["AddBug"]["FillNeededInfo"]           = "����д��Ҫ����Ϣ!";
$TplConfig["AddBug"]["ErrorEmptyTitle"]          = "����: Bug ���ⲻ��Ϊ��!";
$TplConfig["AddBug"]["ErrorTitleLength"]         = "���󣺱��ⳤ�ȳ���ϵͳ�趨��";
$TplConfig["AddBug"]["ErrorEmptyBuild"]          = "����: Build�汾�Ų���Ϊ��";
$TplConfig["AddBug"]["ErrorExceedSize"]          = "�������ߴ�!";
$TplConfig["AddBug"]["CantCreateDIR"]            = "���ܴ���Ŀ¼!";
$TplConfig["AddBug"]["CantCopyFile"]             = "���ܿ����ļ�!";
$TplConfig["AddBug"]["HaveBeenAdded"]            = "�Ѿ�������ˡ�";
$TplConfig["AddBug"]["ErrorOccuring"]            = "����һЩ����: ";
$TplConfig["AddBug"]["CorrectError"]             = "�����κδ�����༭ Bug��\\n��������ϵ����ϵͳ����Ա��";

/* Setting of BugInfo.php */

$TplConfig["BugInfo"]["ProjectAndModuleTitle"]   = "<B><span class='PanelTitle'>��Ŀ : ģ��</span></B>";
$TplConfig["BugInfo"]["ProjectAndModulePath"]    = "��Ŀ : ģ��";
$TplConfig["BugInfo"]["BugTitle"]                = "Bug ����";
$TplConfig["BugInfo"]["BugID"]                   = "Bug ���";

$TplConfig["BugInfo"]["BugStatusTitle"]          = "<B><span class='PanelTitle'>Bug ״̬</span></B>";
$TplConfig["BugInfo"]["BugType"]                 = "����";
$TplConfig["BugInfo"]["BugOS"]                   = "����ϵͳ";
$TplConfig["BugInfo"]["BugSeverity"]             = "���س̶�";
$TplConfig["BugInfo"]["BugStatus"]               = "״̬";
$TplConfig["BugInfo"]["AssignedTo"]              = "ָ�ɸ�";
$TplConfig["BugInfo"]["AssignedDate"]            = "ָ������";
$TplConfig["BugInfo"]["LastEditedBy"]            = "�����˭�޸�";
$TplConfig["BugInfo"]["LastEditedDate"]          = "����޸�����";

$TplConfig["BugInfo"]["MailToTitle"]             = "<B><span class='PanelTitle'>����֪ͨ</span></B>";
$TplConfig["BugInfo"]["BugFilesTitle"]           = "<B><span class='PanelTitle'>����</span></B>";

$TplConfig["BugInfo"]["OpenedTitle"]             = "<B><span class='PanelTitle'>����</span></B>";
$TplConfig["BugInfo"]["OpenedBy"]                = "��˭����";
$TplConfig["BugInfo"]["OpenedDate"]              = "��������";
$TplConfig["BugInfo"]["OpenedBuild"]             = "���� Build";

$TplConfig["BugInfo"]["ResolvedTitle"]           = "<B><span class='PanelTitle'>���</span></B>";
$TplConfig["BugInfo"]["ResolvedBy"]              = "��˭���";
$TplConfig["BugInfo"]["ResolvedDate"]            = "�������";
$TplConfig["BugInfo"]["ResolvedBuild"]           = "��� Build";
$TplConfig["BugInfo"]["Resolution"]              = "�������";

$TplConfig["BugInfo"]["ClosedTitle"]             = "<B><span class='PanelTitle'>�ر�</span></B>";
$TplConfig["BugInfo"]["ClosedBy"]                = "��˭�ر�";
$TplConfig["BugInfo"]["ClosedDate"]              = "�ر�����";

$TplConfig["BugInfo"]["LinksTitle"]              = "<B><span class='PanelTitle'>��� Bug</span></B>";

$TplConfig["BugInfo"]["ActionTitle"]             = "<B><span class='PanelTitle'>����</span></B>";
$TplConfig["BugInfo"]["EditBTN"]                 = "�༭ Bug (E)";
$TplConfig["BugInfo"]["ResolveBTN"]              = "��� Bug (R)";
$TplConfig["BugInfo"]["CloseBTN"]                = "�ر� Bug (C)";
$TplConfig["BugInfo"]["ActivateBTN"]             = "���� Bug (A)";
$TplConfig["BugInfo"]["GoToQueryBTN"]            = "�����б� (B)";
$TplConfig["BugInfo"]["HistoryTitle"]            = "<B><span class='PanelTitle'>��ʷ</span></B>";

/* Setting of EditBugForm.php, (most items use the same setting of BugInfo.php)*/
$TplConfig["EditBugForm"]["MailTo"]              = "����֪ͨ";
$TplConfig["EditBugForm"]["LinkID"]              = "��� Bug";
$TplConfig["EditBugForm"]["On"]                  = "��";
$TplConfig["EditBugForm"]["AddFileTitle"]        = "<B><span class='PanelTitle'>��Ӹ���</span></B>";
$TplConfig["EditBugForm"]["DescriptionTitle"]    = "<B><span class='PanelTitle'>����</span></B>";
$TplConfig["EditBugForm"]["Description"]         = "����";
$TplConfig["EditBugForm"]["ActionTitle"]         = "<B><span class='PanelTitle'>����</span></B>";
$TplConfig["EditBugForm"]["UpdateBTN"]           = "���� Bug ��Ϣ (U)";

/* Setting of UpdateBug.php */
$TplConfig["UpdateBug"]["FillNeededInfo"]        = "����д��Ҫ����Ϣ!";
$TplConfig["UpdateBug"]["ErrorEmptyTitle"]       = "����: Bug ���ⲻ��Ϊ��!";
$TplConfig["UpdateBug"]["ErrorTitleLength"]      = "���󣺱��ⳤ�ȳ���ϵͳ�趨��";
$TplConfig["UpdateBug"]["ErrorExceedSize"]       = "�������ߴ�!";
$TplConfig["UpdateBug"]["CantCreateDIR"]         = "���ܴ���Ŀ¼!";
$TplConfig["UpdateBug"]["CantCopyFile"]          = "���ܿ����ļ�!";
$TplConfig["UpdateBug"]["HaveBeenUpdated"]       = "�Ѿ���������!";
$TplConfig["UpdateBug"]["ErrorOccuring"]         = "����һЩ����: ";
$TplConfig["UpdateBug"]["CorrectError"]          = "�����κδ�����༭ Bug��\\n��������ϵ����ϵͳ����Ա��";

/* Setting of ResolveBug.php */
$TplConfig["ResolveBug"]["NotAssignedToMe"]      = "��� Bug û��ָ�ɸ��㣡\\n������ȷ������ť����� Bug ָ�ɸ��㲢���֮; \\n������ȡ������ť���ء�";
$TplConfig["ResolveBug"]["ResolveTitle"]         = "<B><span class='PanelTitle'>���</span></B>";
$TplConfig["ResolveBug"]["Resolution"]           = "�������";
$TplConfig["ResolveBug"]["LinkID"]               = "��� Bug";
$TplConfig["ResolveBug"]["ResolvedBuild"]        = "��� Build";
$TplConfig["ResolveBug"]["NewBugBuild"]          = "����Build";
$TplConfig["ResolveBug"]["DescriptionTitle"]     = "<B><span class='PanelTitle'>����</span></B>";
$TplConfig["ResolveBug"]["Description"]          = "��ϸ��Ϣ";
$TplConfig["ResolveBug"]["HistoryTitle"]         = "<B><span class='PanelTitle'>��ʷ</span></B>";
$TplConfig["ResolveBug"]["AddFileTitle"]         = "<B><span class='PanelTitle'>��Ӹ���</span></B>";
$TplConfig["ResolveBug"]["ActionTitle"]          = "<B><span class='PanelTitle'>����</span></B>";
$TplConfig["ResolveBug"]["ResolveBTN"]           = "����� (R)";
$TplConfig["ResolveBug"]["MustSetResolution"]    = "��ָ���������!";
$TplConfig["ResolveBug"]["MustSetlLinkID"]       = "��ָ����ص� Bug ���!";
$TplConfig["ResolveBug"]["HaveBeenResolved"]     = "�Ѿ�������ˡ�";

/* Setting of CloseBug.php */
$TplConfig["CloseBug"]["NotOpenedByMe"]          = "��� Bug �������㴴���ġ�\\n������ȷ������ť�ر�����\\n������ȡ������ť���ء�";
$TplConfig["CloseBug"]["SureToCloseIt"]          = "��ͬ����� Bug �Ľ��������\\n������ȷ������ť�ر�����\\n������ȡ������ť���ء�";
$TplConfig["CloseBug"]["DescriptionTitle"]       = "<B><span class='PanelTitle'>����</span></B>";
$TplConfig["CloseBug"]["Description"]            = "��ϸ��Ϣ";
$TplConfig["CloseBug"]["ActionTitle"]            = "<B><span class='PanelTitle'>����</span></B>";
$TplConfig["CloseBug"]["CloseBTN"]               = "�ر��� (C)";
$TplConfig["CloseBug"]["HistoryTitle"]           = "<B><span class='PanelTitle'>��ʷ</span></B>";
$TplConfig["CloseBug"]["HaveBeenClosed"]         = "�Ѿ����ر��ˡ�";

/* Setting of ActivateBug.php */
$TplConfig["ActivateBug"]["AssignTitle"]         = "<B><span class='PanelTitle'>ָ��</span></B>";
$TplConfig["ActivateBug"]["AssignTo"]            = "ָ�ɸ�";
$TplConfig["ActivateBug"]["DescriptionTitle"]    = "<B><span class='PanelTitle'>����</span></B>";
$TplConfig["ActivateBug"]["Description"]         = "��ϸ��Ϣ";
$TplConfig["ActivateBug"]["HistoryTitle"]        = "<B><span class='PanelTitle'>��ʷ</span></B>";
$TplConfig["ActivateBug"]["AddFileTitle"]        = "<B><span class='PanelTitle'>��Ӹ���</span></B>";
$TplConfig["ActivateBug"]["ActionTitle"]         = "<B><span class='PanelTitle'>����</span></B>";
$TplConfig["ActivateBug"]["ActivateBTN"]         = "������ (A)";
$TplConfig["ActivateBug"]["HaveBeenActivated"]   = "�Ѿ��������ˡ�";

/* Setting of SaveQuery.php */
$TplConfig["SaveQuery"]["QueryTitle"]            = "��ѯ����";
$TplConfig["SaveQuery"]["SaveQueryBTN"]          = "�����ѯ (S)";
$TplConfig["SaveQuery"]["MustSetQueryTitle"]     = "����д���⡣";
$TplConfig["SaveQuery"]["ThereisSameTitle"]      = "���Ѿ����������Զ����ѯ������! ������һ����ͬ�����֡�";
$TplConfig["SaveQuery"]["HaveBeenSaved"]         = "�����ѯ�Ѿ��������ˡ�";

/* Setting of DelQuery.php */
$TplConfig["DelQuery"]["SureToDelIt"]            = "��ȷ��ɾ������Զ����ѯ��\\n������ȷ������ťɾ������\\n������ȡ������ť���ء�";
$TplConfig["DelQuery"]["HaveBeenDeled"]          = "�����ѯ�Ѿ���ɾ����";

/* Setting of Logout.php */
$TplConfig["Logout"]["SureToLogout"]             = "��ȷ���˳���\\n������ȷ������ť�˳���\\n������ȡ������ť���ء�";

/* Setting of JudgeAdmin. note: JudgeAdmin is  a function in FunctionsMain.inc.php */
$TplConfig["JudgeAdmin"]["NotAdminUser"]         = "�����߱�����ԱȨ�ޡ�";

/* Setting of NoticeBug.php */
$TplConfig["NoticeBug"]["Subject"]               = "ĿǰΪָֹ�ɸ�����Bug����";
$TplConfig["NoticeBug"]["Notes"]                 = <<<EOT
<ul>
  <li>���ָ�ɸ����Bug״̬��Resolved���뾡����֤���رա����㲻ͬ����ⷨ���뼤���Bug��</li>
  <li>���ָ�ɸ����Bug״̬��Active���뾡��������ע�ͣ�Ȼ��ָ�ɸ��ܹ������Bug���ˣ�</li>
  <li>���ò�׼��ô���Bug���뾡��������ע�ͣ�Ȼ��ָ�ɸ�����Ŀ/ģ��ĸ����ˡ�</li>
</ul>
EOT;
$TplConfig["NoticeBug"]["BugID"]                 = "Bug ���";
$TplConfig["NoticeBug"]["BugTitle"]              = "Bug ����";
$TplConfig["NoticeBug"]["OpenedBy"]              = "��˭����";
$TplConfig["NoticeBug"]["AssignedTo"]            = "ָ�ɸ�";
$TplConfig["NoticeBug"]["BugStatus"]             = "״̬";
$TplConfig["NoticeBug"]["Resolution"]            = "�������";
$TplConfig["NoticeBug"]["LastEditedDate"]        = "���༭����";
$TplConfig["NoticeBug"]["ProjectName"]           = "��Ŀ��";

/* Setting of BugStat.php */
$TplConfig["StatBug"]["BugStatTitle"]            = "Bug ͳ��";
$TplConfig["StatBug"]["OpenedBy"]                = "��˭����";
$TplConfig["StatBug"]["Total"]                   = "�ܼ�";

/* Setting of JudgeAdmin. note: JudgeAdmin is  a function in FunctionsMain.inc.php */
$TplConfig["JudgeAdmin"]["NotAdminUser"]         = "�����߱�����ԱȨ�ޡ�";

/* Setting of Admin/AdminMenu.php. */
$TplConfig["AdminMenu"]["AdminUserTitle"]        = "<span class='PanelTitle'>�û����û������</span>";
$TplConfig["AdminMenu"]["ListGroup"]             = "���/ά������";
$TplConfig["AdminMenu"]["AddGroup"]              = "����µķ���";
$TplConfig["AdminMenu"]["ListUser"]              = "���/ά���û�";
$TplConfig["AdminMenu"]["AdminProjectAndModule"] = "<span class='PanelTitle'>��Ŀ��ģ��Ĺ���</span>";
$TplConfig["AdminMenu"]["MangeProject"]          = "ά�� ";
$TplConfig["AdminMenu"]["AddProject"]            = "�½���Ŀ";
$TplConfig["AdminMenu"]["ProjectDoc"]            = "��Ŀ�ĵ�";
$TplConfig["AdminMenu"]["ProjectPlan"]           = "��Ŀ����";
$TplConfig["AdminMenu"]["AdminHelpTitle"]        = "<span class='PanelTitle'>����</span>";

/* Setting of Admin/ListBugUser.php. */
$TplConfig["ListBugUser"]["UserList"]            = "�����û��б�";
$TplConfig["ListBugUser"]["UserName"]            = "�û���";
$TplConfig["ListBugUser"]["RealName"]            = "��ʵ����";
$TplConfig["ListBugUser"]["Password"]            = "����";
$TplConfig["ListBugUser"]["Email"]               = "Email";
$TplConfig["ListBugUser"]["GroupName"]           = "����";
$TplConfig["ListBugUser"]["AdminMode"]           = "����ģʽ";
$TplConfig["ListBugUser"]["EditUser"]            = "�༭";
$TplConfig["ListBugUser"]["DelUser"]             = "ɾ��";
$TplConfig["ListBugUser"]["AddUserTitle"]        = "���һ���û�";
$TplConfig["ListBugUser"]["AddUserBTN"]          = "���(A)";

/* Setting of Admin/AddBugUser.php. */
$TplConfig["AddBugUser"]["ErrorWrongEmail"]      = "��Ч��Email��ַ��";
$TplConfig["AddBugUser"]["ErrorEmptyValue"]      = "��������б�Ҫ����Ŀ��";
$TplConfig["AddBugUser"]["ErrorSameUserName"]    = "������˼���Ѿ����������û��ˡ�";
$TplConfig["AddBugUser"]["Success"]              = "�Ѿ���ӳɹ��ˡ�";

/* Setting of Admin/DelBugUser.php. */
$TplConfig["DelBugUser"]["ConfirmInfo"]          = "��ȷ��ɾ������û���\\n�뵥����ȷ������ťɾ���û���\\n�뵥����ȡ������ť���ء�";
$TplConfig["DelBugUser"]["ErrorDelSelf"]         = "�㲻��ɾ�����Ը���!";
$TplConfig["DelBugUser"]["Success"]              = " �Ѿ���ɾ���ˡ�";

/* Setting of Admin/ListBugGroup.php. */
$TplConfig["ListBugGroup"]["GroupList"]           = "���з����б�";
$TplConfig["ListBugGroup"]["GroupID"]             = "���";
$TplConfig["ListBugGroup"]["GroupName"]           = "��������";
$TplConfig["ListBugGroup"]["GroupUser"]           = "�����û�";
$TplConfig["ListBugGroup"]["GroupACL"]            = "����Ȩ��";
$TplConfig["ListBugGroup"]["AdminMode"]           = "����ģʽ";
$TplConfig["ListBugGroup"]["EditGroup"]           = "�༭";
$TplConfig["ListBugGroup"]["DelGroup"]            = "ɾ��";
$TplConfig["ListBugGroup"]["AddGroupTitle"]       = "ά������";
$TplConfig["ListBugGroup"]["GroupUserAddBTN"]     = ">>";
$TplConfig["ListBugGroup"]["GroupUserDelBTN"]     = "<<";
$TplConfig["ListBugGroup"]["GroupACLAddBTN"]      = ">>";
$TplConfig["ListBugGroup"]["GroupACLDelBTN"]      = "<<";
$TplConfig["ListBugGroup"]["ManageGroupBTN"]      = "����(S)";

/* Setting of Admin/AddBugGroup.php. */
$TplConfig["ManageBugGroup"]["ErrorEmptyValue"]   = "����д���б�Ҫ����Ŀ��";
$TplConfig["ManageBugGroup"]["ErrorSameGroupName"]= "������˼���Ѿ��������ķ����ˡ�";
$TplConfig["ManageBugGroup"]["ErrorGroupID"]      = "��ָ�������š�";
$TplConfig["ManageBugGroup"]["Success"]           = "����ɹ���";

/* Setting of Admin/DelBugGroup.php. */
$TplConfig["DelBugGroup"]["ConfirmInfo"]          = "��ȷ��ɾ������û�����\\n�뵥����ȷ������ťɾ���û���\\n�뵥����ȡ������ť���ء�";
$TplConfig["DelBugGroup"]["ErrorGroupID"]         = "��ָ�������ţ�";
$TplConfig["DelBugGroup"]["Success"]              = "�Ѿ���ɾ���ˡ�";

/* Setting of EditSelfInfo.php. */
$TplConfig["EditSelfInfo"]["EditSelfInfoTitle"]   = "�༭������Ϣ";
$TplConfig["EditSelfInfo"]["RealName"]            = "��ʵ����";
$TplConfig["EditSelfInfo"]["Password"]            = "����";
$TplConfig["EditSelfInfo"]["PasswordNote"]        = "(�������򲻱�)";
$TplConfig["EditSelfInfo"]["Email"]               = "Email";
$TplConfig["EditSelfInfo"]["EditBTN"]             = "�༭(E)";
$TplConfig["EditSelfInfo"]["ErrorWrongEmail"]     = "��Ч��Email��ַ";
$TplConfig["EditSelfInfo"]["ErrorEmptyValue"]     = "����д���б�Ҫ����Ϣ��";
$TplConfig["EditSelfInfo"]["Success"]             = "��������Ϣ�Ѿ������¡�";

/* Setting of ManageProject.php. */
$TplConfig["ManageProject"]["ManageProjectTitle"] = "������Ŀ";
$TplConfig["ManageProject"]["ManageMode"]         = "����ģʽ";
$TplConfig["ManageProject"]["Edit"]               = "�༭��ǰ��Ŀ";
$TplConfig["ManageProject"]["Add"]                = "���һ������Ŀ";
$TplConfig["ManageProject"]["ProjectName"]        = "��Ŀ��";
$TplConfig["ManageProject"]["ProjectDoc"]         = "��Ŀ�ĵ�";
$TplConfig["ManageProject"]["ProjectPlan"]        = "��Ŀ�ƻ�";
$TplConfig["ManageProject"]["ManageProjectBTN"]   = "�ύ(S)";
$TplConfig["ManageProject"]["AddModuleTitle"]     = "���һ��ģ��";
$TplConfig["ManageProject"]["ParentModule"]       = "��ģ��";
$TplConfig["ManageProject"]["ModuleName"]         = "ģ����";
$TplConfig["ManageProject"]["ManageModuleBTN"]    = "���(A)";
$TplConfig["ManageProject"]["ErrorEmptyName"]     = "����д��Ŀ����";
$TplConfig["ManageProject"]["SuccessUpdated"]     = " �Ѿ������¡�";
$TplConfig["ManageProject"]["SuccessAdded"]       = " �Ѿ������롣";

/* Setting of ManageModule.php. */
$TplConfig["ManageModule"]["ManageModuleTitle"]  = "����ģ��";
$TplConfig["ManageModule"]["ManageMode"]         = "����ģʽ";
$TplConfig["ManageModule"]["Edit"]               = "�༭��ǰģ��";
$TplConfig["ManageModule"]["Add"]                = "���һ���µ���ģ��";
$TplConfig["ManageModule"]["ProjectName"]        = "��Ŀ��";
$TplConfig["ManageModule"]["ParentModule"]       = "��ģ��";
$TplConfig["ManageModule"]["ModuleName"]         = "ģ����";
$TplConfig["ManageModule"]["ManageModuleBTN"]    = "�ύ(S)";
$TplConfig["ManageModule"]["ErrorEmptyName"]     = "����дģ������";
$TplConfig["ManageModule"]["ErrorParentID"]      = "��ģ�鲻�ܺ͵�ǰģ����ͬ��";
$TplConfig["ManageModule"]["SuccessUpdated"]     = " �Ѿ������¡�";
$TplConfig["ManageModule"]["SuccessAdded"]       = " �Ѿ������롣";

/* Setting of Install.php. */
$TplConfig["Install"]["InstallTitle"]            = "BugFree��װ����";
$TplConfig["Install"]["BugDBTitle"]              = <<<EOT
1�����ô洢Bug���ݵ����ݿ����<br />
<div align="left">
  BugFree������һ���򵥵��û���֤��������ʹ�����������û���<span class="RedText">��ʱ������������ 2 �������</span>�� �������Ӧ�û������Ѿ����˵�������PHPӦ�ó��򣬱�����̳�ȵȣ�
  ��Ҳ����ѡ��ʹ�����ǵ��û���֤�������֤��<span class="RedText">��ʱ����Ҫ�Ե� 2 ��������á�</span></div>
EOT;

$TplConfig["Install"]["BugDBHost"]               = "���ݿ��������ַ";
$TplConfig["Install"]["BugDBUser"]               = "���ݿ��û���";
$TplConfig["Install"]["BugDBPassword"]           = "���ݿ�����";
$TplConfig["Install"]["BugDBDatabase"]           = "Bug���ݱ����ڵ����ݿ���";
$TplConfig["Install"]["CreateBugDB"]             = "�������ݿ�";

$TplConfig["Install"]["UserDBTitle"]             = <<<EOT
2�������û���֤�����ڵ����ݿ�<br />
<span class="RedText">�������Ҫ���õ������������֤ϵͳ����ָ����Ӧ�����ݿ����Ӳ���</span>
EOT;

$TplConfig["Install"]["UserDBHost"]              = "���ݿ��������ַ";
$TplConfig["Install"]["UserDBUser"]              = "���ݿ��û���";
$TplConfig["Install"]["UserDBPassword"]          = "���ݿ�����";
$TplConfig["Install"]["UserDBDatabase"]          = "�û���֤�����ڵ����ݿ���";

$TplConfig["Install"]["UserTableTitle"]          = <<<EOT
3�������û���֤���Ӧ���ֶ�<br />
<div align="left">
�������ʹ��BugFree�������֤ϵͳ������Ҫ�����漸������޸ġ������ʹ�õ������ĳ��������֤������Ҫ����ʵ����������޸ģ�
������������phpbb��̳Ϊ����
</div>
EOT;

$TplConfig["Install"]["TableName"]               = "�û���֤����(phpbb:phpbb_users)";
$TplConfig["Install"]["UserName"]                = "�û�����Ӧ���ֶ���(phpbb:username)";
$TplConfig["Install"]["RealName"]                = "��ʵ������Ӧ���ֶ���(phpbb:username)";
$TplConfig["Install"]["UserPassword"]            = "�����Ӧ���ֶ���(phpbb:user_password)";
$TplConfig["Install"]["Email"]                   = "Email��Ӧ���ֶ���(phpbb:user_email)";
$TplConfig["Install"]["EncryptType"]             = "������ܷ�ʽ(phpbb:md5)";

$TplConfig["Install"]["MailTitle"]               = <<<EOT
4��BugFree�ʼ����ܲ�������<br />
�����ѡ���ķ��ŷ�ʽΪSMTP��ʽ����Ҫ����smtp�������ĵ�ַ�����smtp��������Ҫ��֤������Ҫ�趨�û���������
EOT;
$TplConfig["Install"]["FromAddress"]             = "BugFree���ĸ������ַ���з���";
$TplConfig["Install"]["FromName"]                = "BugFree��ʲô�ƺ����з���";
$TplConfig["Install"]["SendMethod"]              = "BugFree�Զ����ŵķ�ʽ";
$TplConfig["Install"]["SmtpHost"]                = "SMTP��������ַ";
$TplConfig["Install"]["SmtpAuth"]                = "SMTP�������Ƿ���Ҫ��֤";
$TplConfig["Install"]["SmtpUserName"]            = "SMTP�������û���";
$TplConfig["Install"]["SmtpPassword"]            = "SMTP����������";

$TplConfig["Install"]["OtherTitle"]              = "5����������";
$TplConfig["Install"]["UploadDirectory"]         = "�ϴ��������Ŀ¼����Ŀ¼����ɶ���д";
$TplConfig["Install"]["MaxFileSize"]             = "�ϴ������������ߴ磬��λ�ֽ�";

$TplConfig["Install"]["AdminTitle"]              = "6����Ϊ����Ա";
$TplConfig["Install"]["AdminUserName"]           = "����Ա�û���";
$TplConfig["Install"]["AdminRealName"]           = "����Ա�ƺ�";
$TplConfig["Install"]["AdminUserEmail"]          = "����Ա����";
$TplConfig["Install"]["AdminUserPassword"]       = "����Ա����";

$TplConfig["Install"]["SubmitButton"]            = "���������ļ�(���ֹ�����Ϊ$BugConfig[ScriptDir]/Include/ConfigBug.inc.php)";

$TplConfig["Install"]["ErrorBugDB"]              = "BugFree���ݿ�: ";
$TplConfig["Install"]["ErrorCreateBugDB"]        = "BugFree���ݿⴴ��ʧ��: ";
$TplConfig["Install"]["ErrorUserDB"]             = "�û���֤���ݿ�: ";
$TplConfig["Install"]["ErrorUserTable"]          = "�û���֤��: ";
$TplConfig["Install"]["ErrorWritable"]           = " ����ɶ���д��ִ��(o=rwx)";
$TplConfig["Install"]["ErrorSmtpAuth"]           = "Smtp��������Ҫ��֤������ָ���û���������";
$TplConfig["Install"]["ErrorAdminUserInfo"]      = "��ָ������Ա���û��������䡢����";
$TplConfig["Install"]["ErrorCreateAdminUser"]    = "����Ա����ʧ��";

/* Setting of Upgrade.php. */
$TplConfig["Upgrade"]["UpgradeTitle"]            = "�˳��򽫰�����������BugFree1.0�汾";
$TplConfig["Upgrade"]["UpgradeNote"]             = <<<EOT
<strong>1. ����֮ǰ��Ҫ���ֹ�ִ������������</strong>
<ol>
  <li>���������ڵĳ�������ݡ�</li>
  <li>�������µ�BugFree���򣬽�ѹ����</li>
  <li>�޸�Include/ConfigBug.inc.php�е���Ӧ������<br />
      ��Ҳ����ͨ����װ���������������ļ���<strong>������Ҫע����ǣ���Ҫ�ٴ������ݿ��ˡ�</strong><br />
      <a href="install.php">��װ����>>></a>
  </li>
</ol>
<strong>2. ִ������������֮�󣬵����ҳ��ġ��������ݿ⡱ ��ť�������Զ����±�ṹ��</strong>
<ol>
  <li>����BugGroup��</li>
  <li>�޸�BugUser������UserID�Ĵ洢�ռ䡣</li>
</ol>
<strong>3. ִ������³���֮���Թ���Ա��ݵ���ϵͳ�������û��飬Ϊ�û�������Ӧ��Ȩ�ޡ�</strong>
EOT;
$TplConfig["Upgrade"]["Upgraded"]                = "���ݿ��Ѿ����£����Թ���Ա��ݽ��룬����Ȩ�ޣ�<a href='Login.php'>��¼>>></a>";
$TplConfig["Upgrade"]["UpgradeBTN"]              = "�������ݿ�";
$TplConfig["Upgrade"]["Success"]                 = "���ݿ������ɹ������Թ���Ա��ݽ��룬����Ȩ�ޣ�";
?>