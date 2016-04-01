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
 * @version         $Id: 1.0 install.php 1 Tue 2016/01/12 23:05:12Z Goffy - Wedega $
 */
//
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// deleting existing piwik config files from module creator
if (file_exists( XOOPS_ROOT_PATH . "/modules/wgxpiwik/piwik/config/config.ini.php")) {
	unlink( XOOPS_ROOT_PATH . "/modules/wgxpiwik/piwik/config/config.ini.php");
}

// Copy base file
$indexFile = XOOPS_UPLOAD_PATH.'/index.html';
$blankFile = XOOPS_UPLOAD_PATH.'/blank.gif';
// Making of "uploads/wgxpiwik" folder
$wgxpiwik = XOOPS_UPLOAD_PATH.'/wgxpiwik';
if(!is_dir($wgxpiwik))
    mkdir($wgxpiwik, 0777);
    chmod($wgxpiwik, 0777);
copy($indexFile, $wgxpiwik.'/index.html');
// Making of sites uploads folder
$sites = $wgxpiwik.'/sites';
if(!is_dir($sites))
    mkdir($sites, 0777);
    chmod($sites, 0777);
copy($indexFile, $sites.'/index.html');
// Making of users uploads folder
$users = $wgxpiwik.'/users';
if(!is_dir($users))
    mkdir($users, 0777);
    chmod($users, 0777);
copy($indexFile, $users.'/index.html');
// Making of settings uploads folder
$settings = $wgxpiwik.'/settings';
if(!is_dir($settings))
    mkdir($settings, 0777);
    chmod($settings, 0777);
copy($indexFile, $settings.'/index.html');
// ---------- Install Footer ---------- //