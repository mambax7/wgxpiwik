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
 * @version         $Id: 1.0 modinfo.php 1 Tue 2016/01/12 23:05:11Z Goffy - Wedega $
 */
// ---------------- Admin Main ----------------
define('_MI_WGXPIWIK_NAME', "wgXPiwik");
define('_MI_WGXPIWIK_DESC', "This module implements piwik to your xoops");
// ---------------- Admin Menu ----------------
define('_MI_WGXPIWIK_ADMENU1', "Dashboard");
define('_MI_WGXPIWIK_ADMENU2', "Settings");
define('_MI_WGXPIWIK_ADMENU3', "Piwik-Sites");
define('_MI_WGXPIWIK_ADMENU4', "Piwik-Users");
define('_MI_WGXPIWIK_ADMENU5', "Permissions");
define('_MI_WGXPIWIK_ABOUT', "About");
// ---------------- Admin Nav ----------------
define('_MI_WGXPIWIK_ADMIN_PAGER', "Admin pager");
define('_MI_WGXPIWIK_ADMIN_PAGER_DESC', "Admin per page list");
// Submenu

// ---------------- Blocks ----------------
define('_MI_WGXPIWIK_TRACKER_BLOCK', "Tracker");
define('_MI_WGXPIWIK_TRACKER_BLOCK_DESC', "Implements a tracker to your website");

// ---------------- Config ----------------
define('_MI_WGXPIWIK_KEYWORDS', "Keywords");
define('_MI_WGXPIWIK_KEYWORDS_DESC', "Insert here the keywords (separate by comma)");
define('_MI_WGXPIWIK_PIWIK_TRACKERTYPE', "Tracker type");
define('_MI_WGXPIWIK_PIWIK_TRACKERTYPE_DESC', "Select the type of tracker");
define('_MI_WGXPIWIK_PIWIK_TRACKERTYPE_JS', "js-Tracker");
define('_MI_WGXPIWIK_PIWIK_TRACKERTYPE_PHP', "Php-Tracker");
define('_MI_WGXPIWIK_PIWIK_TRACKERTYPE_IMG', "Tracker image");

define('_MI_WGXPIWIK_PIWIK_PERIOD', "Default period");
define('_MI_WGXPIWIK_PIWIK_PERIOD_DESC', "Define default period, which should be preselected when starting Piwik");
define('_MI_WGXPIWIK_PIWIK_PERIOD_DAY', "day");
define('_MI_WGXPIWIK_PIWIK_PERIOD_WEEK', "week");
define('_MI_WGXPIWIK_PIWIK_PERIOD_MONTH', "month");
define('_MI_WGXPIWIK_PIWIK_PERIOD_YEAR', "year");
define('_MI_WGXPIWIK_PIWIK_DATE', "Default date");
define('_MI_WGXPIWIK_PIWIK_DATE_DESC', "Define default date, which should be preselected when starting Piwik");
define('_MI_WGXPIWIK_PIWIK_DATE_YESTERDAY', "yesterday");
define('_MI_WGXPIWIK_PIWIK_DATE_TODAY', "today");

// ---------------- End ----------------