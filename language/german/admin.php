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
define('_AM_WGXPIWIK_STATISTICS', "Statistiken");
// There are
define('_AM_WGXPIWIK_THEREARE_SITES', "Es befinden sich <span class='bold'>%s</span> Seiten in der Piwik-Installation");
define('_AM_WGXPIWIK_THEREARE_USERS', "Es befinden sich <span class='bold'>%s</span> Benutzer in der Piwik-Installation");
define('_AM_WGXPIWIK_THEREARE_PERMS', "Es befinden sich <span class='bold'>%s</span> Berechtigungen in der Datenbank");
// ---------------- Admin Files ----------------
// There aren't
define('_AM_WGXPIWIK_THEREARENT_SITES', "Es befinden sich derzeit keine Seiten in der Piwik-Installation");
define('_AM_WGXPIWIK_THEREARENT_USERS', "Es befinden sich derzeit keine Benutzer in der Piwik-Installation");
define('_AM_WGXPIWIK_THEREARENT_PERMS', "Es befinden sich derzeit keine Berechtigungen in der Datenbank");
// ---------------- Admin Files ----------------
// Save/Delete
define('_AM_WGXPIWIK_FORM_OK', "Erfolgreich gespeichert");
define('_AM_WGXPIWIK_FORM_DELETE_OK', "Erfolgreich gelöscht");
define('_AM_WGXPIWIK_FORM_SURE_DELETE', "Wollen sie wirklich löschen: <b><span style='color : Red;'>%s </span></b>");
define('_AM_WGXPIWIK_FORM_SURE_RENEW', "Wollen sie wirklich aktualisieren: <b><span style='color : Red;'>%s </span></b>");

// Elements of Site
define('_AM_WGXPIWIK_SITE_IDSITE', "Piwik Seiten-Id");
define('_AM_WGXPIWIK_SITE_NAME', "Pwik Seiten-Name");

// Elements of User
define('_AM_WGXPIWIK_USER_ALIAS', "User alias");
define('_AM_WGXPIWIK_USER_TOKENAUTH', "Token auth");
define('_AM_WGXPIWIK_USER_SUPERACCESS', "Super access");

// General
define('_AM_WGXPIWIK_FORM_ACTION', "Aktionen");
define('_AM_WGXPIWIK_FORM_EDIT', "Bearbeiten");
define('_AM_WGXPIWIK_FORM_DELETE', "Löschen");
define('_AM_WGXPIWIK_FORM_UPDATE', "Aktualisieren");

define('_AM_WGXPIWIK_MODSET_GOTO', "Gehe zu den Moduleinstellungen");
define('_AM_WGXPIWIK_BLOCKSET_GOTO', "Gehe zu den Blockeinstellungen");

define('_AM_WGXPIWIK_PIWIK_GOTO', "Gehe zur Piwik-Administrationsseite");

// check installation
define('_AM_WGXPIWIK_PIWIK_INSTALL_CHECK', "Überprüfung Installationsverzeichnis Piwik");
define('_AM_WGXPIWIK_PIWIK_INSTALL_PATH', "Installationsverzeichnis '%p'");
define('_AM_WGXPIWIK_PIWIK_INSTALL', "Installieren");
define('_AM_WGXPIWIK_PIWIK_INSTALL_OK_DESC', "Installationsverzeichnis gefunden. Bitte starten sie die Installation von Piwik und kehren sie nach der erfolgreichen Installation wieder zurück zum Modul wgXPiwik.");
define('_AM_WGXPIWIK_PIWIK_INSTALL_NOTOK_DESC', "Kritischer Fehler: <b><span style='color : Red;'>Installationsverzeichnis nicht gefunden!</span></b>");

// current piwik setting
define('_AM_WGXPIWIK_PIWIK_INSTALLATION', "Aktuelle Piwik-Installation");
define('_AM_WGXPIWIK_PIWIK_VERSION', "Piwik-Version");
define('_AM_WGXPIWIK_PIWIK_CONFIG', "Piwik-Konfiguration");
define('_AM_WGXPIWIK_PIWIK_CONFIG_FILE', "Config-Datei");
define('_AM_WGXPIWIK_PIWIK_CONFIG_DBHOST', "Datenbank host");
define('_AM_WGXPIWIK_PIWIK_CONFIG_DBUSER', "Datenbank user");
define('_AM_WGXPIWIK_PIWIK_CONFIG_DB', "Datenbank");
define('_AM_WGXPIWIK_PIWIK_CONFIG_DBPREFIX', "Tabellen-Präfix");

// module settings
define('_AM_WGXPIWIK_MODULE_SETTINGS', "Moduleinstellungen");
define('_AM_WGXPIWIK_PIWIK_TRACKERTYPE', "Tracker-Typ");
define('_AM_WGXPIWIK_PIWIK_TRACKERTYPE_JS', "js-Tracker");
define('_AM_WGXPIWIK_PIWIK_TRACKERTYPE_PHP', "Php-Tracker");
define('_AM_WGXPIWIK_PIWIK_TRACKERTYPE_IMG', "Tracker image");
define('_AM_WGXPIWIK_PIWIK_PERIOD', "Standardperiode");
define('_AM_WGXPIWIK_PIWIK_PERIOD_DESC', "Wählen sie die Standardperiode, die beim Starten von Piwik voreingestellt werden soll");
define('_AM_WGXPIWIK_PIWIK_DATE', "Standarddatum");
define('_AM_WGXPIWIK_PIWIK_DATE_DESC', "Wählen sie das Standarddatum, das beim Starten von Piwik voreingestellt werden soll");

// check block state
define('_AM_WGXPIWIK_BLOCK_SETTINGS', "Überprüfung Status Trackerblock");
define('_AM_WGXPIWIK_BLOCK_SETTINGS_ACTIVATED', "Zum Aktivieren des Trackings müssen sie den Block auf 'sichtbar' einstellen.");
define('_AM_WGXPIWIK_BLOCK_SETTINGS_HIDE', "Wenn sie den Block verstecken wollen, entfernen sie einfach den Blocktitel.");
define('_AM_WGXPIWIK_BLOCK_SETTINGS_ALLSITES', "Um genaue statistische Informationen zu erhalten, wird empfohlen, den Block für alle Seiten zu aktivieren.");
define('_AM_WGXPIWIK_BLOCKSETDEFAULT_GOTO', "Empfohlene Blockeinstellungen setzen");
define('_AM_WGXPIWIK_BLOCKSETDEFAULT_DONE', "Empfohlene Blockeinstellungen erfolgreich gesetzt");
define('_AM_WGXPIWIK_BLOCKSETDEFAULT_ERROR', "Fehler beim Erstellen der empfohlenen Blockeinstellungen");

// permissions
define('_AM_WGXPIWIK_PERMS_LIST', "Liste der Berechtigungen");
define('_AM_WGXPIWIK_PERM_ID', "Berechtigungs-ID");
define('_AM_WGXPIWIK_PERM_GROUPID', "Gruppe");
define('_AM_WGXPIWIK_PERM_PIWIK_LOGIN', "Piwik User");
define('_AM_WGXPIWIK_PERM_PIWIK_LOGIN_DESC', "<br/>Achtung: Aus Sicherheitsgründen ist es niocht erlaubt, einen Super-Access-Benutzer für den Login über iframe zu verwenden");
define('_AM_WGXPIWIK_PERM_WEIGHT', "Reihung");
define('_AM_WGXPIWIK_PERM_EDIT', "Berechtigung bearbeiten");

// ---------------- Admin Others ----------------
define('_AM_WGXPIWIK_MAINTAINEDBY', " wird unterstützt durch <a href='http://wedega.com'>http://wedega.com</a> und <a href='http://xoops.wedega.com'>http://xoops.wedega.com</a>");
// ---------------- End ----------------