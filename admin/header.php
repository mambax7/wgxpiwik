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
 * @version         $Id: 1.0 header.php 1 Tue 2016/01/12 23:05:11Z Goffy - Wedega $
 */

include dirname(dirname(dirname(__DIR__))) . '/include/cp_header.php';
$thisPath = dirname(__DIR__);
include_once $thisPath . '/include/common.php';
$sysPathIcon16   = '../' . $GLOBALS['xoopsModule']->getInfo('sysicons16');
$sysPathIcon32   = '../' . $GLOBALS['xoopsModule']->getInfo('sysicons32');
$pathModuleAdmin = $GLOBALS['xoopsModule']->getInfo('dirmoduleadmin');
//
$modPathIcon16   = $GLOBALS['xoopsModule']->getInfo('modicons16');
$modPathIcon32   = $GLOBALS['xoopsModule']->getInfo('modicons32');
// Get instance of module
$wgxpiwik     = WgxpiwikHelper::getInstance();
$piwikHandler =& $wgxpiwik->getHandler('piwik');
$permsHandler =& $wgxpiwik->getHandler('perms');
//
$myts = MyTextSanitizer::getInstance();
if (!isset($xoopsTpl) || !is_object($xoopsTpl)) {
    include_once(XOOPS_ROOT_PATH . '/class/template.php');
    $xoopsTpl = new XoopsTpl();
}
// System icons path
$xoopsTpl->assign('sysPathIcon16', $sysPathIcon16);
$xoopsTpl->assign('sysPathIcon32', $sysPathIcon32);
// Local icons path
$xoopsTpl->assign('modPathIcon16', $modPathIcon16);
$xoopsTpl->assign('modPathIcon32', $modPathIcon32);

//Load languages
xoops_loadLanguage('admin');
xoops_loadLanguage('modinfo');
// Local admin menu class
if ( file_exists($GLOBALS['xoops']->path($pathModuleAdmin . '/moduleadmin.php'))){
    include_once $GLOBALS['xoops']->path($pathModuleAdmin . '/moduleadmin.php');
} else {
    redirect_header('../../../admin.php', 5, _AM_MODULEADMIN_MISSING, false);
}
xoops_cp_header();
$adminMenu = new ModuleAdmin();
