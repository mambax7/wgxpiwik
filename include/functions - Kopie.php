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
 * @version         $Id: 1.0 functions.php 1 Tue 2016/01/12 21:02:36Z Goffy - Wedega $
 */

function wgxpiwik_CleanVars( &$global, $key, $default = '', $type = 'int' ) {
    switch ( $type ) {
        case 'string':
            $ret = ( isset( $global[$key] ) ) ? filter_var( $global[$key], FILTER_SANITIZE_MAGIC_QUOTES ) : $default;
            break;
        case 'int': default:
            $ret = ( isset( $global[$key] ) ) ? filter_var( $global[$key], FILTER_SANITIZE_NUMBER_INT ) : $default;
            break;
    }
    if ( $ret === false ) {
        return $default;
    }
    return $ret;
}

function wgxpiwikMetaKeywords($content)
{
    global $xoopsTpl, $xoTheme;
    $myts =& MyTextSanitizer::getInstance();
    $content= $myts->undoHtmlSpecialChars($myts->displayTarea($content));
    if(isset($xoTheme) && is_object($xoTheme)) {
        $xoTheme->addMeta( 'meta', 'keywords', strip_tags($content));
    } else {    // Compatibility for old Xoops versions
        $xoopsTpl->assign('xoops_meta_keywords', strip_tags($content));
    }
}

function wgxpiwikMetaDescription($content)
{
    global $xoopsTpl, $xoTheme;
    $myts =& MyTextSanitizer::getInstance();
    $content = $myts->undoHtmlSpecialChars($myts->displayTarea($content));
    if(isset($xoTheme) && is_object($xoTheme)) {
        $xoTheme->addMeta( 'meta', 'description', strip_tags($content));
    } else {    // Compatibility for old Xoops versions
        $xoopsTpl->assign('xoops_meta_description', strip_tags($content));
    }
}

function wgxpiwikReadPiwikConfig() 
{
    // read the config from piwik config file 'piwik/config/config.ini.php'
    // set default values
    $wgxpiwik_config["dbname"] = "-";
    $wgxpiwik_config["host"] = "-";
    $wgxpiwik_config["username"] = "-";
    $wgxpiwik_config["tables_prefix"] = "-";
    $wgxpiwik_config["enable_framed_pages"] = "0";
    
    $options = array();
    $handle = fopen(WGXPIWIK_PIWIK_CONFIG_INI, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            // process the line read.
            if (strpos($line, "=") > 0) {
                $options = explode("=", $line);
                $wgxpiwik_config[trim($options[0])] = str_replace('"', '', trim($options[1]));
            }
        }
        fclose($handle);
    } 
    
    return $wgxpiwik_config;
}

function wgxpiwikGetPiwikSites() 
{
    global $xoopsDB;
    
    $wgxpiwik_config = wgxpiwikReadPiwikConfig();
    
    $sql = "SELECT * FROM " . $wgxpiwik_config["tables_prefix"] . "site;";
    $sites_list = array();
    while ($site_item = mysql_fetch_assoc($result)) {
        $i++;
        $sites_list[] = array($i,"idsite" => $site_item["idsite"], "name" => $site_item["name"]);
    }
    return $sites_list;
    
}