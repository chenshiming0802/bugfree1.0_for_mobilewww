<?php
/**
 * Admin Index file of BugFree system.
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
 * @version     $Id: index.php,v 1.2 2005/09/01 07:16:15 wwccss Exp $
 */

/**
 * Init BugFree system.
 */
require_once("../Include/SetupBug.inc.php");

/**
 * Judge whether the user is an admin user.
 */
bugJudgeAdminUser();

// Display the template file.
$TPL->display("Admin/Index.tpl");
?>