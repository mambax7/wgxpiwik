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
 * @version         $Id: 1.0 menu.php 1 Tue 2016/01/12 21:02:36Z Goffy - Wedega $
 */
$dirname = basename(dirname(__DIR__)) ;
$module_handler =& xoops_gethandler('module');
$xoopsModule =& XoopsModule::getByDirname($dirname);
$moduleInfo =& $module_handler->get($xoopsModule->getVar('mid'));
$sysPathIcon32 = $moduleInfo->getInfo('sysicons32');
$i = 1;
$adminmenu[$i]['title'] = _MI_WGXPIWIK_ADMENU1;
$adminmenu[$i]['link'] = 'admin/index.php';
$adminmenu[$i]['icon'] = $sysPathIcon32.'/dashboard.png';
++$i;
$adminmenu[$i]['title'] = _MI_WGXPIWIK_ADMENU2;
$adminmenu[$i]['link'] = 'admin/settings.php';
$adminmenu[$i]['icon'] = 'assets/icons/32/settings.png';
++$i;
$adminmenu[$i]['title'] = _MI_WGXPIWIK_ADMENU3;
$adminmenu[$i]['link'] = 'admin/sites.php';
$adminmenu[$i]['icon'] = 'assets/icons/32/sites.png';
++$i;
$adminmenu[$i]['title'] = _MI_WGXPIWIK_ADMENU4;
$adminmenu[$i]['link'] = 'admin/users.php';
$adminmenu[$i]['icon'] = 'assets/icons/32/users.png';
++$i;
$adminmenu[$i]['title'] = _MI_WGXPIWIK_ADMENU5;
$adminmenu[$i]['link'] = 'admin/perms.php';
$adminmenu[$i]['icon'] = 'assets/icons/32/permissions.png';
++$i;
$adminmenu[$i]['title'] = _MI_WGXPIWIK_ABOUT;
$adminmenu[$i]['link']  = 'admin/about.php';
$adminmenu[$i]['icon'] = $sysPathIcon32.'/about.png';
unset( $i );