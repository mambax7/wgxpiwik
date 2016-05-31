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
 * @version         $Id: 1.0 xoops_version.php 1 Tue 2016/01/12 23:05:13Z Goffy - Wedega $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');
//
//$dirname = basename(__DIR__);
// ------------------- Informations ------------------- //
$modversion = array(
    'name'                  => _MI_WGXPIWIK_NAME,
    'version'               => '1.03',
    'description'           => _MI_WGXPIWIK_DESC,
    'author'                => 'Goffy - Wedega.com',
    'author_mail'           => 'webmaster@wedega.com',
    'author_website_url'    => 'http://wedega.com',
    'author_website_name'   => 'XOOPS on Wedega',
    'credits'               => 'Goffy - Wedega',
    'license'               => 'GPL 2.0 or later',
    'license_url'           => 'www.gnu.org/licenses/gpl-2.0.html/',
    'help'                  => 'page=help',
    //
    'release_info'          => 'release_info',
    'release_file'          => XOOPS_URL . '/modules/wgxpiwik/docs/release_info file',
    'release_date'          => '2016/03/26',
    //
    'manual'                => 'link to manual file',
    'manual_file'           => XOOPS_URL . '/modules/wgxpiwik/docs/install.txt',
    'min_php'               => '5.3',
    'min_xoops'             => '2.5.7',
    'min_admin'             => '1.1',
    'min_db'                => array('mysql' => '5.0.7', 'mysqli' => '5.0.7'),
    'image'                 => 'assets/images/wgxpiwik_logo.png',
    'dirname'               => 'wgxpiwik',
    // Frameworks
    'dirmoduleadmin'        => 'Frameworks/moduleclasses/moduleadmin',
    'sysicons16'            => '../../Frameworks/moduleclasses/icons/16',
    'sysicons32'            => '../../Frameworks/moduleclasses/icons/32',
    // Local path icons
    'modicons16'            => 'assets/icons/16',
    'modicons32'            => 'assets/icons/32',
    //About
    'demo_site_url'         => 'http://xoops.wedega.com',
    'demo_site_name'        => 'XOOPS on Wedega',
    'support_url'           => '',
    'support_name'          => '',
    'module_website_url'    => '',
    'module_website_name'   => '',
    'release'               => '2016/03/26',
    'module_status'         => 'Beta 1',
    // Admin system menu
    'system_menu'           => 1,
    // Admin things
    'hasAdmin'              => 1,
    'adminindex'            => 'admin/index.php',
    'adminmenu'             => 'admin/menu.php',
    // Main things
    'hasMain'               => 1,
    // Install/Update
    'onInstall'             => 'include/install.php',
    'onUpdate'              => 'include/update.php'
);
// ------------------- Templates ------------------- //
// Admin
$modversion['templates'][] = array('file' => 'wgxpiwik_admin_about.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgxpiwik_admin_header.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgxpiwik_admin_index.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgxpiwik_admin_piwik_install.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgxpiwik_admin_settings.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgxpiwik_admin_sites.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgxpiwik_admin_users.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgxpiwik_admin_perms.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgxpiwik_admin_footer.tpl', 'description' => '', 'type' => 'admin');
// User
$modversion['templates'][] = array('file' => 'wgxpiwik_header.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgxpiwik_iframe.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgxpiwik_breadcrumbs.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgxpiwik_footer.tpl', 'description' => '');
// ------------------- Mysql ------------------- //
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
// Tables
$modversion['tables'][1] = 'mod_wgxpiwik_perms';

// ------------------- Submenu ------------------- //


// ------------------- Blocks ------------------- //
$modversion['blocks'][] = array(
    'file'        => 'tracker.php',
    'name'        => _MI_WGXPIWIK_TRACKER_BLOCK,
    'title'       => '',
    'description' => _MI_WGXPIWIK_TRACKER_BLOCK_DESC,
    'show_func'   => 'b_wgxpiwik_tracker_show',
    'edit_func'   => '',
    'options'     => '',
    'template'    => 'wgxpiwik_block_tracker.tpl');

// ------------------- Config ------------------- //
$modversion['config'][] = array(
    'name'        => 'keywords',
    'title'       => '_MI_WGXPIWIK_KEYWORDS',
    'description' => '_MI_WGXPIWIK_KEYWORDS_DESC',
    'formtype'    => 'textbox',
    'valuetype'   => 'text',
    'default'     => 'wgxpiwik, piwik, wedega');

$modversion['config'][] = array(
    'name'        => 'piwik_tracker_type',
    'title'       => '_MI_WGXPIWIK_PIWIK_TRACKERTYPE',
    'description' => '_MI_WGXPIWIK_PIWIK_TRACKERTYPE_DESC',
    'formtype'    => 'select',
    'valuetype'   => 'array',
    'default'     => 1,
    'options'     => array(_MI_WGXPIWIK_PIWIK_TRACKERTYPE_JS => 1, _MI_WGXPIWIK_PIWIK_TRACKERTYPE_IMG => 3));
    
$modversion['config'][] = array(
    'name'        => 'piwik_period',
    'title'       => '_MI_WGXPIWIK_PIWIK_PERIOD',
    'description' => '_MI_WGXPIWIK_PIWIK_PERIOD_DESC',
    'formtype'    => 'select',
    'valuetype'   => 'array',
    'default'     => 'month',
    'options'     => array(_MI_WGXPIWIK_PIWIK_PERIOD_DAY => 'day', _MI_WGXPIWIK_PIWIK_PERIOD_WEEK=> 'week', _MI_WGXPIWIK_PIWIK_PERIOD_MONTH => 'month', _MI_WGXPIWIK_PIWIK_PERIOD_YEAR => 'year'));
    
$modversion['config'][] = array(
    'name'        => 'piwik_date',
    'title'       => '_MI_WGXPIWIK_PIWIK_DATE',
    'description' => '_MI_WGXPIWIK_PIWIK_DATE_DESC',
    'formtype'    => 'select',
    'valuetype'   => 'array',
    'default'     => 'yesterday',
    'options'     => array(_MI_WGXPIWIK_PIWIK_DATE_YESTERDAY => 'yesterday', _MI_WGXPIWIK_PIWIK_DATE_TODAY => 'today'));
        