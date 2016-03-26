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
 * @version         $Id: 1.0 admin.php 1 Tue 2016/01/12 23:05:12Z Goffy - Wedega $
 */
// ---------------- Admin Index ----------------
define('_AM_WGXPIWIK_STATISTICS', "Statistics");
// There are
define('_AM_WGXPIWIK_THEREARE_SITES', "There are <span class='bold'>%s</span> sites in Piwik installation");
define('_AM_WGXPIWIK_THEREARE_USERS', "There are <span class='bold'>%s</span> users in Piwik installation");
define('_AM_WGXPIWIK_THEREARE_PERMS', "There are <span class='bold'>%s</span> perms in the database");
// ---------------- Admin Files ----------------
// There aren't
define('_AM_WGXPIWIK_THEREARENT_SITES', "There aren't sites in Piwik installation");
define('_AM_WGXPIWIK_THEREARENT_USERS', "There aren't users in Piwik installation");
define('_AM_WGXPIWIK_THEREARENT_PERMS', "There aren't perms in the database");
// ---------------- Admin Files ----------------
// Save/Delete
define('_AM_WGXPIWIK_FORM_OK', "Successfully saved");
define('_AM_WGXPIWIK_FORM_DELETE_OK', "Successfully deleted");
define('_AM_WGXPIWIK_FORM_SURE_DELETE', "Are you sure to delete: <b><span style='color : Red;'>%s </span></b>");
define('_AM_WGXPIWIK_FORM_SURE_RENEW', "Are you sure to update: <b><span style='color : Red;'>%s </span></b>");

// Elements of Site
define('_AM_WGXPIWIK_SITE_IDSITE', "Piwik Site Id");
define('_AM_WGXPIWIK_SITE_NAME', "Pwik Site Name");

// Elements of User
define('_AM_WGXPIWIK_USER_ALIAS', "User alias");
define('_AM_WGXPIWIK_USER_TOKENAUTH', "Token auth");
define('_AM_WGXPIWIK_USER_SUPERACCESS', "Super access");

// General
define('_AM_WGXPIWIK_FORM_ACTION', "Action");
define('_AM_WGXPIWIK_FORM_EDIT', "Modification");
define('_AM_WGXPIWIK_FORM_DELETE', "Clear");
define('_AM_WGXPIWIK_FORM_UPDATE', "Update");

define('_AM_WGXPIWIK_MODSET_GOTO', "Goto Module Settings");
define('_AM_WGXPIWIK_BLOCKSET_GOTO', "Goto Block Settings");

define('_AM_WGXPIWIK_PIWIK_GOTO', "Goto Piwik admin site");

// check installation
define('_AM_WGXPIWIK_PIWIK_INSTALL_CHECK', "Check install path Piwik");
define('_AM_WGXPIWIK_PIWIK_INSTALL_PATH', "Install path '%p'");
define('_AM_WGXPIWIK_PIWIK_INSTALL', "Install");
define('_AM_WGXPIWIK_PIWIK_INSTALL_OK_DESC', "Install path found. Please start installation of Piwik and after installing successfully come back to wgXPiwik module.");
define('_AM_WGXPIWIK_PIWIK_INSTALL_NOTOK_DESC', "Critical failure: <b><span style='color : Red;'>Install path not found!</span></b>");

// current piwik setting
define('_AM_WGXPIWIK_PIWIK_INSTALLATION', "Current Piwik Installation");
define('_AM_WGXPIWIK_PIWIK_VERSION', "Piwik-Version");
define('_AM_WGXPIWIK_PIWIK_CONFIG', "Piwik-Configuration");
define('_AM_WGXPIWIK_PIWIK_CONFIG_FILE', "Config file");
define('_AM_WGXPIWIK_PIWIK_CONFIG_DBHOST', "Database host");
define('_AM_WGXPIWIK_PIWIK_CONFIG_DBUSER', "Database user");
define('_AM_WGXPIWIK_PIWIK_CONFIG_DB', "Database");
define('_AM_WGXPIWIK_PIWIK_CONFIG_DBPREFIX', "Table prefix");

// module settings
define('_AM_WGXPIWIK_MODULE_SETTINGS', "Module settings");
define('_AM_WGXPIWIK_PIWIK_TRACKERTYPE', "Tracker type");
define('_AM_WGXPIWIK_PIWIK_TRACKERTYPE_JS', "js-Tracker");
define('_AM_WGXPIWIK_PIWIK_TRACKERTYPE_PHP', "Php-Tracker");
define('_AM_WGXPIWIK_PIWIK_TRACKERTYPE_IMG', "Tracker image");
define('_AM_WGXPIWIK_PIWIK_PERIOD', "Default period");
define('_AM_WGXPIWIK_PIWIK_PERIOD_DESC', "Define default period, which should be preselected when starting Piwik");
define('_AM_WGXPIWIK_PIWIK_DATE', "Default date");
define('_AM_WGXPIWIK_PIWIK_DATE_DESC', "Define default date, which should be preselected when starting Piwik");

// check block state
define('_AM_WGXPIWIK_BLOCK_SETTINGS', "Check tracker block state");
define('_AM_WGXPIWIK_BLOCK_SETTINGS_ACTIVATED', "For activating the tracking you have to set the tracker block visible.");
define('_AM_WGXPIWIK_BLOCK_SETTINGS_HIDE', "If you want hide the block, only delete the block title.");
define('_AM_WGXPIWIK_BLOCK_SETTINGS_ALLSITES', "In order to get detailed statistics, it is recommended to activate this block for all sites.");
define('_AM_WGXPIWIK_BLOCKSETDEFAULT_GOTO', "Set recommended block settings");
define('_AM_WGXPIWIK_BLOCKSETDEFAULT_DONE', "Recommended block settings successfully updated");
define('_AM_WGXPIWIK_BLOCKSETDEFAULT_ERROR', "Error when updating recommended block settings");

// permissions
define('_AM_WGXPIWIK_PERMS_LIST', "List of perms");
define('_AM_WGXPIWIK_PERM_ID', "Perm ID");
define('_AM_WGXPIWIK_PERM_GROUPID', "Group");
define('_AM_WGXPIWIK_PERM_PIWIK_LOGIN', "Piwik User");
define('_AM_WGXPIWIK_PERM_PIWIK_LOGIN_DESC', "<br/>Attention: for security reason it is not allowed to select a super access user for log in via iframe");
define('_AM_WGXPIWIK_PERM_WEIGHT', "Weighting");
define('_AM_WGXPIWIK_PERM_EDIT', "Edit perm");

// ---------------- Admin Others ----------------
define('_AM_WGXPIWIK_MAINTAINEDBY', " is maintained by ");
// ---------------- End ----------------