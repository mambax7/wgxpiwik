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
 * @version         $Id: 1.0 perms.php 1 Fri 2016/01/15 17:40:29Z Goffy - Wedega $
 */
include_once XOOPS_ROOT_PATH.'/modules/wgxpiwik/include/common.php';
// Function show block
function b_wgxpiwik_tracker_show($options)
{
    include_once XOOPS_ROOT_PATH.'/modules/wgxpiwik/class/piwik.php';
    
    $wgxpiwik = WgxpiwikHelper::getInstance();
    $piwik_tracker_type = $wgxpiwik->getConfig('piwik_tracker_type');
    $piwikHandler =& $wgxpiwik->getHandler('piwik');
    $sites_list = $piwikHandler->wgxpiwikGetPiwikSites();

    if ($piwik_tracker_type[0] == 3) {      
        // Piwik Image Tracker
        $block  =  '<!-- Piwik Image Tracker -->';
        $block  .= '<img src="' . XOOPS_URL . '/modules/wgxpiwik/piwik/piwik.php?idsite=' . $sites_list[0]['idsite'] . '&amp;rec=1" style="border:0" alt="" />';
        $block  .= '<!-- End Piwik -->';
        
    } else if ($piwik_tracker_type[0] == 2) {
        // php-Tracker
        require_once XOOPS_ROOT_PATH . '/modules/wgxpiwik/PiwikTracker.php';
        PiwikTracker::$URL = XOOPS_URL;
        $block = "";
        
    } else {
        // js-tracker
        $piwikHandler =& $wgxpiwik->getHandler('piwik');
        $sites_list = $piwikHandler->wgxpiwikGetPiwikSites();
        $block  =  '<!-- Piwik -->';
        $block  .= '<script type="text/javascript">';
        $block  .= '   var _paq = _paq || [];';
        $block  .= '   _paq.push(["trackPageView"]);';
        $block  .= '   _paq.push(["enableLinkTracking"]);';
        $block  .= '   (function() {';
        $block  .= '       var u="' . XOOPS_URL . '/modules/wgxpiwik/piwik/";';
        $block  .= '       _paq.push(["setTrackerUrl", u+"piwik.php"]);';
        $block  .= '       _paq.push(["setSiteId", "' . $sites_list[0]['idsite'] . '"]);';
        $block  .= '       var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0];';
        $block  .= '       g.type="text/javascript"; g.async=true; g.defer=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);';
        $block  .= '   })();';
        $block  .= '</script>';
        $block  .= '<noscript><p><img src="' . XOOPS_URL . '/modules/wgxpiwik/piwik/piwik.php?idsite=' . $sites_list[0]['idsite'] . '" style="border:0;" alt="" /></p></noscript>';
        $block  .= '<!-- End Piwik Code -->';
    }

    return $block;
}
