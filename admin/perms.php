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
 * @version         $Id: 1.0 perms.php 1 Fri 2016/01/15 15:13:35Z Goffy - Wedega $
 */
include __DIR__ . '/header.php';
// It recovered the value of argument op in URL$ 
$op     = XoopsRequest::getString('op', 'list');
// Request perm_id
$permId = XoopsRequest::getInt('perm_id', 0);
// Switch options
switch ($op)
{
    case 'list':
    default:
        // add new groupid from xoops groups to table perms
        $sql = "INSERT INTO " . $GLOBALS['xoopsDB']->prefix('mod_wgxpiwik_perms') . " ( perm_groupid, perm_piwik_login ) SELECT groupid, '" . _AM_WGXPIWIK_PERM_NONE . "' FROM " . $GLOBALS['xoopsDB']->prefix('groups'). " LEFT JOIN " . $GLOBALS['xoopsDB']->prefix('mod_wgxpiwik_perms') ." ON " . $GLOBALS['xoopsDB']->prefix('groups') . ".groupid = " . $GLOBALS['xoopsDB']->prefix('mod_wgxpiwik_perms') . ".perm_groupid WHERE (" . $GLOBALS['xoopsDB']->prefix('mod_wgxpiwik_perms') . ".perm_groupid Is Null);";
        $result = $GLOBALS['xoopsDB']->queryF($sql);

        // delete non-existing groupid from xoops groups to table perms
        $sql = 'DELETE ' . $GLOBALS['xoopsDB']->prefix('mod_wgxpiwik_perms') . '.* FROM ' . $GLOBALS['xoopsDB']->prefix('mod_wgxpiwik_perms') . ' LEFT JOIN ' . $GLOBALS['xoopsDB']->prefix('groups') . ' ON ' .$GLOBALS['xoopsDB']->prefix('mod_wgxpiwik_perms') . '.perm_groupid = ' . $GLOBALS['xoopsDB']->prefix('groups') .'.groupid WHERE (((' . $GLOBALS['xoopsDB']->prefix('groups') . '.groupid) Is Null));';
        $result = $GLOBALS['xoopsDB']->queryF($sql);
        
        $sql = 'UPDATE ' . $GLOBALS['xoopsDB']->prefix('mod_wgxpiwik_perms') . ' SET ' . $GLOBALS['xoopsDB']->prefix('mod_wgxpiwik_perms') . '.perm_weight = ' . $GLOBALS['xoopsDB']->prefix('mod_wgxpiwik_perms'). '.perm_id WHERE (' . $GLOBALS['xoopsDB']->prefix('mod_wgxpiwik_perms') .'.perm_weight = 0);';
        $result = $GLOBALS['xoopsDB']->queryF($sql);
        
        $start = XoopsRequest::getInt('start', 0);
        $limit = XoopsRequest::getInt('limit', $wgxpiwik->getConfig('adminpager'));
        $templateMain = 'wgxpiwik_admin_perms.tpl';
        $GLOBALS['xoopsTpl']->assign('navigation', $adminMenu->addNavigation('perms.php'));
        $permsCount = $permsHandler->getCountPerms();
        $permsAll   = $permsHandler->getAllPerms($start, $limit);
        $GLOBALS['xoopsTpl']->assign('perms_count', $permsCount);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_url', WGXPIWIK_URL);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_upload_url', WGXPIWIK_UPLOAD_URL);
        // Table view
        if ($permsCount > 0)
        {
            foreach (array_keys($permsAll) as $i)
            {
                $perm = $permsAll[$i]->getValuesPerms();
                $GLOBALS['xoopsTpl']->append('perms_list', $perm);
                unset($perm);
            }
            if ( $permsCount > $limit ) {
                include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
                $pagenav = new XoopsPageNav($permsCount, $limit, $start, 'start', 'op=list&limit=' . $limit);
                $GLOBALS['xoopsTpl']->assign('pagenav', $pagenav->renderNav(4));
            }
        } else {
            $GLOBALS['xoopsTpl']->assign('error', _AM_WGXPIWIK_THEREARENT_PERMS);
        }
        break;
        
    case 'save':
        if ( !$GLOBALS['xoopsSecurity']->check() ) {
            redirect_header('perms.php', 3, implode(',', $GLOBALS['xoopsSecurity']->getErrors()));
        }
        if (isset($permId)) {
           $permsObj = $permsHandler->get($permId);
        } else {
           $permsObj = $permsHandler->create();
        }
        // Set Vars
        // Set Var perm_groupid
        $permsObj->setVar('perm_groupid', $_POST['perm_groupid']);
        // Set Var perm_piwik_login
        $permsObj->setVar('perm_piwik_login', $_POST['perm_piwik_login']);
        // Set Var perm_weight
        $permsObj->setVar('perm_weight', $_POST['perm_weight']);
        // Insert Data
        if ($permsHandler->insert($permsObj)) {
           redirect_header('perms.php?op=list', 2, _AM_WGXPIWIK_FORM_OK);
        }
        break;
        
    case 'edit':
        $templateMain = 'wgxpiwik_admin_perms.tpl';
        $adminMenu->addItemButton(_AM_WGXPIWIK_PERMS_LIST, 'perms.php', 'list');
        $GLOBALS['xoopsTpl']->assign('navigation', $adminMenu->addNavigation('perms.php'));
        $GLOBALS['xoopsTpl']->assign('buttons', $adminMenu->renderButton());
        // Get Form
        $permsObj = $permsHandler->get($permId);
        $form     = $permsObj->getFormPerms();
        $GLOBALS['xoopsTpl']->assign('form', $form->render());
        break;

}
include __DIR__ .'/footer.php';
