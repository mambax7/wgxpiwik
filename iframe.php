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
 * @version         $Id: 1.0 index.php 1 Mon 2016/01/18 09:59:24Z Goffy - Wedega $
 */
require_once  __DIR__ . '/header.php';

$GLOBALS['xoopsOption']['template_main'] = 'wgxpiwik_iframe.tpl';
include_once XOOPS_ROOT_PATH .'/header.php';
// Define Stylesheet

$GLOBALS['xoTheme']->addStylesheet( WGXPIWIK_URL ."/assets/css/style.css");

$piwik_period = $wgxpiwik->getConfig('piwik_period');
$piwik_date   = $wgxpiwik->getConfig('piwik_date');

$sites_list = $piwikHandler->wgxpiwikGetPiwikSites();
$iframe_src = WGXPIWIK_URL . "/piwik/index.php?module=Widgetize&action=iframe&moduleToWidgetize=Dashboard&actionToWidgetize=index&idSite=";
$iframe_src .= $sites_list[0]['idsite'];
$iframe_src .= '&period=' . $piwik_period[0];
$iframe_src .= '&date=' . $piwik_date[0];

$GLOBALS['xoopsTpl']->assign('sites_list', $sites_list);
$GLOBALS['xoopsTpl']->assign('iframe_src', $iframe_src);

// Breadcrumbs
$xoBreadcrumbs[] = array('title' => _MA_WGXPIWIK_INDEX, 'link' => WGXPIWIK_URL . '/index.php');

// keywords
wgxpiwikMetaKeywords($wgxpiwik->getConfig('keywords'));
// description
wgxpiwikMetaDescription(_MA_WGXPIWIK_DESC);
//
$GLOBALS['xoopsTpl']->assign('xoops_mpageurl', WGXPIWIK_URL.'/index.php');
$GLOBALS['xoopsTpl']->assign('xoops_icons32_url', XOOPS_ICONS32_URL);
$GLOBALS['xoopsTpl']->assign('wgxpiwik_upload_url', WGXPIWIK_UPLOAD_URL);
include  __DIR__ . '/footer.php';