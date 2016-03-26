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
include  __DIR__ . '/header.php';

$GLOBALS['xoopsOption']['template_main'] = 'wgxpiwik_index.tpl';
include_once XOOPS_ROOT_PATH .'/header.php';
// Define Stylesheet
$GLOBALS['xoTheme']->addStylesheet( $style );

/* include_once XOOPS_ROOT_PATH.'/class/xoopsform/grouppermform.php';
$gperm_handler =& xoops_gethandler('groupperm'); */
if (is_object($xoopsUser)) {
    $groups = $xoopsUser->getGroups();
} else {
    $groups = XOOPS_GROUP_ANONYMOUS;
}

$criteria = new CriteriaCompo();
$criteria->add(new Criteria('perm_piwik_login', "", "<>"));
$criteria->setSort('perm_weight');
$criteria->setOrder('ASC');
$permsCount = $permsHandler->getCount($criteria);
$login_name = '';
$users_list = $piwikHandler->wgxpiwikGetPiwikUsers();

if ($permsCount > 0) {
    $permsAll = $permsHandler->getAll($criteria);
	// Get All Perms
	foreach(array_keys($permsAll) as $i)
    {
		// search for first perm, sorted by perm_weight
        if ($login_name == '') {
            $perm_groupid = $permsAll[$i]->getVar('perm_groupid');
            $perm_piwik_login = $permsAll[$i]->getVar('perm_piwik_login');
            if (in_array($perm_groupid, $groups)) {
                $login_name = $perm_piwik_login;
                foreach($users_list as $user)
                {
                    if ($user['login'] == $perm_piwik_login) {
                        $login_pwd = $user['pwd'];
                    }
                }
            } else {
                echo "<br/>not in group ".$perm_groupid;
            }
        }

    }

    $redir_url = WGXPIWIK_URL . "/piwik/index.php?module=Login&action=logme&login=".$login_name."&password=".$login_pwd."&url=".WGXPIWIK_URL."/iframe.php";
    redirect_header($redir_url , 0, '');
    
}

include  __DIR__ . '/footer.php';