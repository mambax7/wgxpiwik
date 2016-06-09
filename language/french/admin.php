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
define('_AM_WGXPIWIK_STATISTICS', "Statistiques");
// There are
define('_AM_WGXPIWIK_THEREARE_SITES', "Il y a <span class='bold'>%s</span> sites dans l'installation Piwik");
define('_AM_WGXPIWIK_THEREARE_USERS', "Il y a <span class='bold'>%s</span> utilisateurs dans l'installation Piwik");
define('_AM_WGXPIWIK_THEREARE_PERMS', "Il y a <span class='bold'>%s</span> permissions dans la base de données");
// ---------------- Admin Files ----------------
// There aren't
define('_AM_WGXPIWIK_THEREARENT_SITES', "Il n'y a pas de sites dans l'installation Piwik");
define('_AM_WGXPIWIK_THEREARENT_USERS', "Il n'y a pas d'utilisateurs dans l'installation Piwik");
define('_AM_WGXPIWIK_THEREARENT_PERMS', "Il n'y a pas de permissions dans la base de données");
// ---------------- Admin Files ----------------
// Save/Delete
define('_AM_WGXPIWIK_FORM_OK', "Sauvegardé avec succès");
define('_AM_WGXPIWIK_FORM_DELETE_OK', "Effacé avec succès");
define('_AM_WGXPIWIK_FORM_SURE_DELETE', "Etes-vous sûr d'effacer : <b><span style='color : Red;'>%s </span></b>");
define('_AM_WGXPIWIK_FORM_SURE_RENEW', "Etes-vous sûr de mettre à jour : <b><span style='color : Red;'>%s </span></b>");

// Elements of Site
define('_AM_WGXPIWIK_SITE_IDSITE', "ID de site Piwik");
define('_AM_WGXPIWIK_SITE_NAME', "Nom de site Pwik");

// Elements of User
define('_AM_WGXPIWIK_USER_ALIAS', "Alias d'utilisateur");
define('_AM_WGXPIWIK_USER_TOKENAUTH', "Token auth");
define('_AM_WGXPIWIK_USER_SUPERACCESS', "Super accès");

// General
define('_AM_WGXPIWIK_FORM_ACTION', "Action");
define('_AM_WGXPIWIK_FORM_EDIT', "Modification");
define('_AM_WGXPIWIK_FORM_DELETE', "Vider");
define('_AM_WGXPIWIK_FORM_UPDATE', "Mettre à jour");

define('_AM_WGXPIWIK_MODSET_GOTO', "Aller aux paramètres du module");
define('_AM_WGXPIWIK_BLOCKSET_GOTO', "Aller aux paramètres du block");

define('_AM_WGXPIWIK_PIWIK_GOTO', "Aller à l'administration Piwik du site");

// check installation
define('_AM_WGXPIWIK_PIWIK_INSTALL_CHECK', "Vérifier le chemin d'installation de Piwik");
define('_AM_WGXPIWIK_PIWIK_INSTALL_PATH', "Chemin d'installation '%p'");
define('_AM_WGXPIWIK_PIWIK_INSTALL', "Installer");
define('_AM_WGXPIWIK_PIWIK_INSTALL_OK_DESC', "Chemin d'installation trouvé. Merci de lancer l'installation de Piwik et de revenir à wgXPiwik ensuite.");
define('_AM_WGXPIWIK_PIWIK_INSTALL_NOTOK_DESC', "Erreur critique : <b><span style='color : Red;'>Chemin d'installation non trouvé !</span></b>");

// current piwik setting
define('_AM_WGXPIWIK_PIWIK_INSTALLATION', "Installation actuelle de Piwik");
define('_AM_WGXPIWIK_PIWIK_VERSION', "Version de Piwik");
define('_AM_WGXPIWIK_PIWIK_CONFIG', "Configuration de Piwik");
define('_AM_WGXPIWIK_PIWIK_CONFIG_FILE', "Fichier de configuration");
define('_AM_WGXPIWIK_PIWIK_CONFIG_DBHOST', "Serveur de la base de données");
define('_AM_WGXPIWIK_PIWIK_CONFIG_DBUSER', "Utilisateur de la base de données");
define('_AM_WGXPIWIK_PIWIK_CONFIG_DB', "Base de données");
define('_AM_WGXPIWIK_PIWIK_CONFIG_DBPREFIX', "Préfixe de table");

// module settings
define('_AM_WGXPIWIK_MODULE_SETTINGS', "Paramètres du module");
define('_AM_WGXPIWIK_PIWIK_TRACKERTYPE', "Type de tracker");
define('_AM_WGXPIWIK_PIWIK_TRACKERTYPE_JS', "Tracker JS");
define('_AM_WGXPIWIK_PIWIK_TRACKERTYPE_PHP', "Tracker PHP");
define('_AM_WGXPIWIK_PIWIK_TRACKERTYPE_IMG', "Tracker image");
define('_AM_WGXPIWIK_PIWIK_PERIOD', "Période par défaut");
define('_AM_WGXPIWIK_PIWIK_PERIOD_DESC', "Définissez la période par défaut, qui sera pré-sélectionnéeau démarrage de Piwik");
define('_AM_WGXPIWIK_PIWIK_DATE', "Date par défaut");
define('_AM_WGXPIWIK_PIWIK_DATE_DESC', "Définissez la date par défaut, qui sera pré-sélectionnée au démarrage de Piwik");

// check block state
define('_AM_WGXPIWIK_BLOCK_SETTINGS', "Check tracker block state");
define('_AM_WGXPIWIK_BLOCK_SETTINGS_ACTIVATED', "For activating the tracking you have to set the tracker block visible.");
define('_AM_WGXPIWIK_BLOCK_SETTINGS_HIDE', "If you want hide the block, only delete the block title.");
define('_AM_WGXPIWIK_BLOCK_SETTINGS_ALLSITES', "In order to get detailed statistics, it is recommended to activate this block for all sites.");
define('_AM_WGXPIWIK_BLOCKSETDEFAULT_GOTO', "Set recommended block settings");
define('_AM_WGXPIWIK_BLOCKSETDEFAULT_DONE', "Recommended block settings successfully updated");
define('_AM_WGXPIWIK_BLOCKSETDEFAULT_ERROR', "Error when updating recommended block settings");

// permissions
define('_AM_WGXPIWIK_PERMS_LIST', "Liste des permissions");
define('_AM_WGXPIWIK_PERM_ID', "ID permission");
define('_AM_WGXPIWIK_PERM_GROUPID', "Groupe");
define('_AM_WGXPIWIK_PERM_PIWIK_LOGIN', "Utilisateur Piwik");
define('_AM_WGXPIWIK_PERM_PIWIK_LOGIN_DESC', "<br/>Attention : pour des raions de sécurité il n'est pas autorisé de sélectionner un accès super-utilisateur pour la connexion via iframe");
define('_AM_WGXPIWIK_PERM_WEIGHT', "Poids");
define('_AM_WGXPIWIK_PERM_EDIT', "Editer les permission");

// ---------------- Admin Others ----------------
define('_AM_WGXPIWIK_MAINTAINEDBY', " est maintenu par <a href='http://wedega.com'>http://wedega.com</a> et <a href='http://xoops.wedega.com'>http://xoops.wedega.com</a>");
// ---------------- End ----------------