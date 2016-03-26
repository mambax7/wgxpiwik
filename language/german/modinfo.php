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
define('_MI_WGXPIWIK_DESC', "Dieses Modul implementiert Piwik in ihr Xoops");
// ---------------- Admin Menu ----------------
define('_MI_WGXPIWIK_ADMENU1', "Übersicht");
define('_MI_WGXPIWIK_ADMENU2', "Einstellungen");
define('_MI_WGXPIWIK_ADMENU3', "Piwik-Seiten");
define('_MI_WGXPIWIK_ADMENU4', "Piwik-Benutzer");
define('_MI_WGXPIWIK_ADMENU5', "Berechtigungen");
define('_MI_WGXPIWIK_ABOUT', "Über");
// ---------------- Admin Nav ----------------
define('_MI_WGXPIWIK_ADMIN_PAGER', "Anzahl Listeneinträge Adminseiten");
define('_MI_WGXPIWIK_ADMIN_PAGER_DESC', "Definieren sie die Anzahl der Einträge, die auf Listen im Adminbereich angezeigt werden sollen");
// Submenu

// ---------------- Blocks ----------------
define('_MI_WGXPIWIK_TRACKER_BLOCK', "Tracker");
define('_MI_WGXPIWIK_TRACKER_BLOCK_DESC', "Implementiert einen Tracker in ihrfe Webseite");

// ---------------- Config ----------------
define('_MI_WGXPIWIK_KEYWORDS', "Schlüsselwörter");
define('_MI_WGXPIWIK_KEYWORDS_DESC', "Geben sie bitte die gewünschten Schlüsselwörte an (getrennt durch einen Beistrich)");
define('_MI_WGXPIWIK_PIWIK_TRACKERTYPE', "Tracker-Typ");
define('_MI_WGXPIWIK_PIWIK_TRACKERTYPE_DESC', "Wählen sie bitte den gewünschten Tracker-Typ");
define('_MI_WGXPIWIK_PIWIK_TRACKERTYPE_JS', "js-Tracker");
define('_MI_WGXPIWIK_PIWIK_TRACKERTYPE_PHP', "Php-Tracker");
define('_MI_WGXPIWIK_PIWIK_TRACKERTYPE_IMG', "Tracker image");

define('_MI_WGXPIWIK_PIWIK_PERIOD', "Standardperiode");
define('_MI_WGXPIWIK_PIWIK_PERIOD_DESC', "Wählen sie die Standardperiode, die beim Starten von Piwik voreingestellt werden soll");
define('_MI_WGXPIWIK_PIWIK_PERIOD_DAY', "Tag");
define('_MI_WGXPIWIK_PIWIK_PERIOD_WEEK', "Woche");
define('_MI_WGXPIWIK_PIWIK_PERIOD_MONTH', "Monat");
define('_MI_WGXPIWIK_PIWIK_PERIOD_YEAR', "Jahr");
define('_MI_WGXPIWIK_PIWIK_DATE', "Standarddatum");
define('_MI_WGXPIWIK_PIWIK_DATE_DESC', "Wählen sie das Standarddatum, das beim Starten von Piwik voreingestellt werden soll");
define('_MI_WGXPIWIK_PIWIK_DATE_YESTERDAY', "Gestern");
define('_MI_WGXPIWIK_PIWIK_DATE_TODAY', "Heute");

// ---------------- End ----------------