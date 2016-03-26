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
 * @version         $Id: 1.0 sites.php 1 Tue 2016/01/12 23:05:11Z Goffy - Wedega $
 */
include __DIR__ .'/header.php';

// load module css
$GLOBALS['xoTheme']->addStylesheet( WGXPIWIK_URL ."/assets/css/style.css");

// It recovered the value of argument op in URL$ 
$op = XoopsRequest::getString('op', 'list');

// Switch options
switch ($op)
{
	case 'list':
    default:
        
        $templateMain = 'wgxpiwik_admin_sites.tpl';
		
		$GLOBALS['xoopsTpl']->assign('navigation', $adminMenu->addNavigation('sites.php'));
        
        $sites_list = $piwikHandler->wgxpiwikGetPiwikSites();

		
        if ( count($sites_list) == 0) {
             $GLOBALS['xoopsTpl']->assign('error', _AM_WGXPIWIK_THEREARENT_SITES);
        } else {
			$GLOBALS['xoopsTpl']->assign('sites_count', count($sites_list));
			$GLOBALS['xoopsTpl']->append('sites_list', $sites_list);
		}
        
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_url', WGXPIWIK_URL);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_upload_url', WGXPIWIK_UPLOAD_URL);

        break;
}
include __DIR__ .'/footer.php';
