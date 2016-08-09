<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * wgXPiwik module for xoops
 *
 * @copyright       The XOOPS Project (http://xoops.org)
 * @license         GPL 2.0 or later
 * @package         wgxpiwik
 * @since           1.0
 * @min_xoops       2.5.7
 * @author          Goffy - Wedega.com - Email:<webmaster@wedega.com> - Website:<http://wedega.com>
 * @version         $Id: 1.0 update.php 1 Tue 2016/01/12 23:05:12Z Goffy - Wedega $
 */
/**
 * @param      $module
 * @param null $prev_version
 *
 * @return bool|null
 */
function xoops_module_update_wgxpiwik(&$module, $prev_version = null)
{

    $ret = null;
     
    if ($prev_version < 106) {
        $ret = update_wgxpiwik_v106($module);
    }
    $errors = $module->getErrors();
    if (!empty($errors)) {
        print_r($errors);
    } 

    
    return $ret;

}

function update_wgxpiwik_v106($module) {
    
	global $xoopsDB; 
    if (tableExists($xoopsDB->prefix('mod_wgxpiwik_perms'))) { 
        $sql    = sprintf('ALTER TABLE '.$xoopsDB->prefix('mod_wgxpiwik_perms').' RENAME '.$xoopsDB->prefix('wgxpiwik_perms')); 
        $result = $xoopsDB->queryF($sql); 
        if (!$result) { 
            echo "<br />Rename table 'mod_wgxpiwik_perms' to 'wgxpiwik_perms' failed";
            $errors++; 
        } 
    }
        return TRUE; 
    }

function tableExists($tablename) 
{ 
    global $xoopsDB; 
    $result=$xoopsDB->queryF("SHOW TABLES LIKE '$tablename'"); 
    return($xoopsDB->getRowsNum($result) > 0); 
} 
