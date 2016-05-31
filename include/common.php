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
 * @version         $Id: 1.0 common.php 1 Tue 2016/01/12 23:05:12Z Goffy - Wedega $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

if (!defined('WGXPIWIK_MODULE_PATH')) {
    if (!defined('XOOPS_ICONS32_PATH')) define('XOOPS_ICONS32_PATH', XOOPS_ROOT_PATH . '/Frameworks/moduleclasses/icons/32');
    if (!defined('XOOPS_ICONS32_URL'))  define('XOOPS_ICONS32_URL', XOOPS_URL . '/Frameworks/moduleclasses/icons/32');
    define('WGXPIWIK_DIRNAME',          'wgxpiwik');
    define('WGXPIWIK_PATH',             XOOPS_ROOT_PATH . '/modules/' . WGXPIWIK_DIRNAME);
    define('WGXPIWIK_URL',              XOOPS_URL . '/modules/' . WGXPIWIK_DIRNAME);
    define('WGXPIWIK_ICONS_PATH',       WGXPIWIK_PATH . '/assets/icons');
    define('WGXPIWIK_ICONS_URL',        WGXPIWIK_URL . '/assets/icons');
    define('WGXPIWIK_IMAGE_PATH',       WGXPIWIK_PATH . '/assets/images');
    define('WGXPIWIK_IMAGE_URL',        WGXPIWIK_URL . '/assets/images');
    define('WGXPIWIK_UPLOAD_PATH',      XOOPS_UPLOAD_PATH . '/' . WGXPIWIK_DIRNAME);
    define('WGXPIWIK_UPLOAD_URL',       XOOPS_UPLOAD_URL . '/' . WGXPIWIK_DIRNAME);
    define('WGXPIWIK_ADMIN',            WGXPIWIK_URL . '/admin/index.php');
    define('WGXPIWIK_PIWIK_CONFIG_INI', WGXPIWIK_PATH.'/piwik/config/config.ini.php');
    $local_logo = WGXPIWIK_IMAGE_URL . '/wedega.png';

}
// module information
$copyright = "<a href='http://wedega.com' title='Wedega' target='_blank'>
                     <img src='".$local_logo."' alt='Wedega' /></a>";

include_once XOOPS_ROOT_PATH . '/class/xoopsrequest.php';
include_once WGXPIWIK_PATH . '/class/helper.php';
include_once WGXPIWIK_PATH . '/include/functions.php';