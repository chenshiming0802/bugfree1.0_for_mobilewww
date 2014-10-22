<?php
/**
 * DB record pager class.
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
 * @version     $Id: Page.class.php,v 1.5 2005/09/01 02:19:33 wwccss Exp $
 */
class Page
{
   /**
    * the object of the ADO class.
    * @var Object
    */
    var $_MyDB;

   /**
    * the total record count.
    * @var int
    */
    var $_RecTotal;
    
   /**
    * the count of the record per page.
    * @var int
    */
    var $_RecPerPage;
    
   /**
    * the total count of pages.
    * @var int
    */
    var $_PageTotal;
    
   /**
    * ID number of current page.
    * @var int
    */
    var $_PageID;
    
   /**
    * the link url.
    * @var string
    */
    var $_URL;
    
   /**
    * the table name to query from.
    * @var string
    */
    var $_TableName;
   
   /**
    * the condition string to query.
    * @var string
    */
    var $_Where;
    
   /**
    * init the class.
    */
    function Init($TableName,$RecTotal="",$RecPerPage=20,$PageID,$URL="",$Where="")
    {
        global $MyDB;
        
        //�������ݿ����Ӷ���
        $this->_MyDB = $MyDB;
        
        //�趨���з�ҳͳ�Ƶı�����
        $this->_TableName = !empty($TableName)?$TableName:die("��ָ������");

        //�趨��ҳ������
        $this->_Where = $Where;
        
        //�趨��¼������
        !empty($RecTotal)?$this->_RecTotal = $RecTotal:$this->getRecTotal();
        
        //Ĭ��ÿҳ��ʾ��¼Ϊ20����
        $this->_RecPerPage = ($RecPerPage > 0)?$RecPerPage:20;
        
        //���÷�ҳ������
        $this->getPageTotal();
        
        //�趨��ǰҳ���š�
        $this->_PageID = ($PageID > 0)?$PageID:$this->getPageTotal();
        
        //�趨URL���ӵ�ַ��
        $this->_URL = !empty($URL)?$URL:$_SERVER["PHP_SELF"];
        
        //�жϱ������ݷ�ʽ�����ԭ����URL��ַ������"?"����ʹ��"&"׷�ӱ�����������ʹ��"?"
        $this->_URL .= !eregi("\?",$this->_URL)?"?":"&";
        
        //���ݼ�¼������
        $this->_URL .= "RecTotal=".$this->_RecTotal."&";
   }
   
   /**
    * ��õ�ǰ��ҳ���š� 
    */
    function getPageID()
    {
        return $this->_PageID;
    }
   
   /**
    * ȡ��ĳһ������ѯ����ļ�¼������
    *
    */
    function getRecTotal()
    {
        $SQL     = "SELECT COUNT(*) AS RecTotal FROM $this->_TableName $this->_Where";
        $DataSet = $this->_MyDB->getRow($SQL);
        if($DataSet["RecTotal"] > 0)
        {
            $this->_RecTotal = $DataSet["RecTotal"];
        }
        else
        {
            $this->_RecTotal = 0;
        }
    }
    
   /**
    * ��÷�ҳ������
    *
    * @return int          ��¼��ҳ������
    */
    function getPageTotal()
    {
        //���÷�ҳ������
        $this->_PageTotal = ceil($this->_RecTotal / $this->_RecPerPage);
        return $this->_PageTotal;
    }
    
   /**
    * ��ʾ��ѯ����ķ�ҳ���ӡ�
    *
    * @return string               ���ص��������֡�
    * @param  int    $SectionMax   ��ҳ�����䳤�ȡ�Ĭ��ֵΪ15������Ϊ������
    * @param  string $Align        ���䷽ʽ��Ĭ��Ϊ���ж��롣left|center|right
    * @param  booble $JsOut        �Ƿ���JS�ű�����ʽ�����
    */
    function Show($SectionMax = 15,$Align="center",$JsOut = false)
    {
        //������ʽ����Ϣ��ͨ��JS�ű�����ʽ���������������ļ��Ķ����ԡ�
        $StyleString = <<<EOT
<script language="JavaScript">
document.write("<style type='text/css'>.Pager {text-decoration: none;font-family: 'Tahoma';font-size: 9pt;}");
document.write(".PagerSmall{font-family: 'Courier New';font-size: 9pt;}");
document.write(".BoldText {font-family: 'Tahoma';font-size: 10pt;color: #CCCCCC;background-color: #003300;}</style>");
</script>
EOT;
        //������ͷ�ͱ�����HTML���롣
        $TableBegin .= "\n<table bgcolor='#999999' border='0' cellspacing='1' cellpadding='0' class='Pager' align='$Align'>\n<tr bgcolor='#E4E4E4' align='center' title='Record:$this->_RecTotal
Page:$this->_PageTotal'> \n";
        $TableEnd   = "</tr>\n</table>\n";
        
        //�������ӷ��š�
        $FirstPage = "<font face='Webdings'>9</font>";
        $EndPage   = "<font face='Webdings'>:</font>";
        $PrePage   = "<font face='Webdings'>7</font>";
        $NextPage  = "<font face='Webdings'>8</font>";
        
        //�ж�SectionMax�Ƿ�������������������������1��
        if($SectionMax % 2 == 0)
        {
            $SectionMax ++;
        }
        
        //����һ�����飬����ֵ��PageTotal�������С�
        $Y = 1;
        for($I=$this->_PageTotal;$I>=1;$I--)
        {
            $PageIdList[$Y] = $I;
            $Y ++;
        }

        //���ҳ������Ϊ�㣬��ֱ���˳���
        if($this->_RecTotal == 0)
        {
            $LinkString = $TableBegin."<td style='font-size:9pt'>Sorry, no record yet</td>\n";
            $LinkString .= $TableEnd;
            return $LinkString;
        }
        
        //������������ʼ��
        $LinkString = $TableBegin;
        
        /**
         * ��ʾ��¼������
         */
        $LinkString .= "<td class='PagerSmall'>Record:$this->_RecTotal</td>";
        
        /**
         * ���ɵ�һҳ�����ӡ�(��Ӧ������ҳ�����һҳ��)
         */
        //��������һҳ��ֻ��ʾ���֣����������ӡ�
        if($this->_PageID == $this->_PageTotal)
        {
            $LinkString .= $this->createTD($FirstPage,"BoldText");
        }
        else
        {
            $LinkString .= $this->createTD($this->Link($FirstPage,$this->_URL."PageID=".$this->_PageTotal));
        }
        
        /**
         * �ж�ǰһҳ�����ӡ�
         */
        //��������һҳ����ֻ��ʾ���֣����������ӡ�
        if($this->_PageID == $this->_PageTotal)
        {
            $LinkString .= $this->createTD($PrePage,"BoldText");
        }
        else
        {
            $LinkString .= $this->createTD($this->Link($PrePage,$this->_URL."PageID=".($this->_PageID + 1)));
        }
        
        /**
         * �����м�ҳ������ӡ�
         */
        //���һҳ�������ʵ�����Ǵ����һҳ��ʼ����15��
        if($this->_PageID == $this->_PageTotal)
        {
            for($I = $this->_PageTotal;$I > ($this->_PageTotal - $SectionMax) and $I > 0;$I --)
            {
                if($I != $this->_PageTotal)
                {
                    $LinkString .= $this->createTD($this->Link($PageIdList[$I],$this->_URL."PageID=".$I));
                }
                else
                {
                    $LinkString .= $this->createTD($PageIdList[$I],"BoldText");
                }
            }
        }
        //��һҳ�����,ʵ���Ǵӵ�һҳ����$SectionMax��
        elseif($this->_PageID == 1)
        {
            if($this->_PageTotal < $SectionMax)
            {
                $PageStart = $this->_PageTotal;
            }
            else
            {
                $PageStart = $SectionMax;
            }
            for($I = $PageStart ; $I >= 1; $I --)
            {
                if($I != 1)
                {
                    $LinkString .= $this->createTD($this->Link($PageIdList[$I],$this->_URL."PageID=".$I));
                }
                else
                {
                    $LinkString .= $this->createTD($PageIdList[$I],"BoldText");
                }
            }
        }
        //�м�ҳ��������
        else
        {
            $PageStart = $this->_PageID + ($SectionMax - 1) /2;
            if($PageStart > $this->_PageTotal)
            {
                $PageStart = $this->_PageTotal;
            }
            $PageEnd = $this->_PageID - ($SectionMax - 1) /2;
            if($PageEnd != $PageStart - $SectionMax)
            {
                $PageEnd = $PageStart - $SectionMax + 1;
            }
            if($PageEnd < 1)
            {
                $PageEnd = 1;
            }
            if($PageStart != $PageEnd + $SectionMax)
            {
                $PageStart = $PageEnd + $SectionMax - 1;
            }
            if($PageStart > $this->_PageTotal)
            {
                $PageStart = $this->_PageTotal;
            }
            for($I = $PageStart;$I >= $PageEnd;$I --)
            {
                if($I != $this->_PageID)
                {
                    $LinkString .= $this->createTD($this->Link($PageIdList[$I],$this->_URL."PageID=".$I));
                }
                else
                {
                    $LinkString .= $this->createTD($PageIdList[$I],"BoldText");
                }
            }
        } 
        
        /**
         * ������һҳ�����ӡ�  
         */
        //����ǵ�һҳ����ֻ��ʾ���֣����������ӡ�
        if($this->_PageID == 1)
        {
             $LinkString .= $this->createTD($NextPage,"BoldText");
        }
        else
        {
            $LinkString .= $this->createTD($this->Link($NextPage,$this->_URL."PageID=".($this->_PageID - 1)));
        }
        
        /**
         * �������һҳ�����ӡ�
         */
        if($this->_PageID == 1)
        {
            $LinkString .= $this->createTD($EndPage,"BoldText");
        }
        else
        {
            $LinkString .= $this->createTD($this->Link($EndPage,$this->_URL."PageID=1"));
        }
        
        /**
         * ��ʾҳ��������
         */
        $LinkString .= "<td class='PagerSmall'>Page:$this->_PageTotal</td>";
        
        $LinkString .= $TableEnd;
        
        //�ж������ʽ��        
        if($JsOut)
        {
            //��LinkString�û��з��ֿ���Ȼ����ѭ������document.write�����������ΪJS�ű�����ʽ��
            $LinkString = explode("\n",$LinkString);
            for($I = 0; $I < count($LinkString);$I ++)
            {
                if(!empty($LinkString[$I]))
                {
                    $LinkString[$I] = 'document.write("'.$LinkString[$I].'")'.";\n";
                }
            }
            $LinkString = join('',$LinkString);
            return $StyleString."<script>\n".$LinkString."</script>";
        }
        else
        {
            return $StyleString.$LinkString;
        }
     }
   
   /**
    * ����SQL��ѯ����Limit����
    *
    * Thanks to lixiaoliang@gmail.com and panzs@supcon.com for their advice of LIMIT -20,20
    * @return string          Limit��䡣
    */
    function Limit()
    {
        //��֤���һҳ����ļ�¼��ΪRecPerPage�����ϲ�����1��������Ϊ�˷�ֹ����limit -20,10�����������
        if($this->_RecTotal < $this->_RecPerPage)
        {
	        $Limit = " LIMIT 0,".$this->_RecTotal;
        }
        elseif($this->_PageID == $this->_PageTotal and $this->_PageTotal != 1)
        {
            $Limit = " LIMIT ".($this->_RecTotal - $this->_RecPerPage).",".$this->_RecPerPage;
        }
        else
        {
            $Limit = " LIMIT ".$this->_RecPerPage * ($this->_PageID - 1).",".$this->_RecPerPage;
        }
        return $Limit;
    }
    
    /**
     * ����<a href="">text</a>��ǡ�
     *
     * @param string $Text	    �������֡�
     * @param string $URL	    ���ӵ�ַ��
     */
     function link($Text,$URL)
     {
         $LinkString = "<A href='".$URL."'>".$Text."</A>";
         return $LinkString;
     }
     
    /**
     * ����TD���롣
     *
     * @param string $Text	    �������֡�
     * @param string $URL	    ���ӵ�ַ��
     * @return string           ���ɵ�TD���롣
     */
     function createTD($Text,$CssStyle="Pager")
     {
        return "<td class='".$CssStyle."' width='20'>$Text</td>\n";
     }
}
?>