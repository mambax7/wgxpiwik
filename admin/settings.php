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
 * @version         $Id: 1.0 settings.php 1 Tue 2016/01/12 23:05:11Z Goffy - Wedega $
 */
 
include __DIR__ . '/header.php';

global $xoopsDB;

require_once WGXPIWIK_PATH . '/piwik/core/Version.php';
use Piwik\Version;

// load module css
$GLOBALS['xoTheme']->addStylesheet( WGXPIWIK_URL . '/assets/css/style.css');

$op   = XoopsRequest::getString('op','none');

// check whether piwik is installed
if ($op == 'none') {
    if (file_exists(WGXPIWIK_PIWIK_CONFIG_INI)) {
        $op = 'list';
    } else {
        $op = 'install';
    }
}

// Switch options
switch ($op)
{
    case 'install':
        $install_file = WGXPIWIK_PATH.'/piwik/index.php';
        if (is_file($install_file)) {
            $wgxpiwik_path_result_desc = str_replace('%p', $install_file, _AM_WGXPIWIK_PIWIK_INSTALL_PATH);
            $wgxpiwik_path_result_img = 'ok.png';
            $wgxpiwik_path_exist = 1;
        } else {
            $wgxpiwik_path_result_img = 'alert.png';
            $wgxpiwik_path_exist = 0;
        }
        
        $templateMain = 'wgxpiwik_admin_piwik_install.tpl';
        $GLOBALS['xoopsTpl']->assign('navigation', $adminMenu->addNavigation('settings.php'));
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_path_exist', $wgxpiwik_path_exist);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_path_result_desc', $wgxpiwik_path_result_desc);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_path_result_img', $wgxpiwik_path_result_img);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_url', WGXPIWIK_URL);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_upload_url', WGXPIWIK_UPLOAD_URL);

        break;
    
    case 'defaultblocksettings':
    
        $sql = 'SELECT * FROM ' . $xoopsDB->prefix('newblocks') . ' WHERE mid = ' . $xoopsModule->getVar('mid');
        $sql = 'SELECT DISTINCT(b.bid), b.*, l.* FROM ' . $xoopsDB->prefix('newblocks') . ' b LEFT JOIN ' . $xoopsDB->prefix('block_module_link');
        $sql .= ' l ON b.bid=l.block_id  WHERE mid = ' . $xoopsModule->getVar('mid');
    
        $result = $xoopsDB->queryF($sql);
        while ($newblock = mysql_fetch_assoc($result)) {
            if ($newblock['func_file'] == 'tracker.php') {
                $isvisible = $newblock['visible'];
                $blocktitle = $newblock['title'];
                $bl_module_id = $newblock['module_id'];
                $block_id = $newblock['block_id'];
            }
        }
        unset($result);
        $errors = 0;
        if ($isvisible == 0  || !$blocktitle == 'a') {
            $sql = 'UPDATE ' . $xoopsDB->prefix('newblocks') . " SET title='', visible=1 WHERE mid = " . $xoopsModule->getVar('mid');
            $result = $xoopsDB->queryF($sql);
            if (!$result == 1) $errors++;
            unset($result);
        }
        if (!$bl_module_id == 0) {
            $sql = 'UPDATE ' . $xoopsDB->prefix('block_module_link') . ' SET module_id=0 WHERE block_id = ' . $block_id;
            $result = $xoopsDB->queryF($sql);
            if (!$result == 1) $errors++;
            unset($result);
        }
        if ($errors == 0) {
            redirect_header('settings.php' , 2, _AM_WGXPIWIK_BLOCKSETDEFAULT_DONE);
        } else {
            redirect_header('settings.php' , 4, _AM_WGXPIWIK_BLOCKSETDEFAULT_ERROR);
        }
        break;
        
    case 'list':

        $templateMain = 'wgxpiwik_admin_settings.tpl';

        $GLOBALS['xoopsTpl']->assign('navigation', $adminMenu->addNavigation('settings.php'));
        
        // get piwik configs
        $wgxpiwik_version = Version::VERSION;
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_version', $wgxpiwik_version);
        
        $wgxpiwik_config              = $piwikHandler->wgxpiwikReadPiwikConfig();
        $wgxpiwik_config_db_img       = $wgxpiwik_config['dbname'] == '-' ? 'alert.png' : 'ok.png';
        $wgxpiwik_config_dbhost_img   = $wgxpiwik_config['host'] == '-' ? 'alert.png' : 'ok.png';
        $wgxpiwik_config_dbuser_img   = $wgxpiwik_config['username'] == '-' ? 'alert.png' : 'ok.png';
        $wgxpiwik_config_dbprefix_img = $wgxpiwik_config['tables_prefix'] == '-' ? 'alert.png' : 'ok.png';
        
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_config_file', WGXPIWIK_PIWIK_CONFIG_INI);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_config_db', $wgxpiwik_config['dbname']);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_config_dbhost', $wgxpiwik_config['host']);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_config_dbuser', $wgxpiwik_config['username']);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_config_dbprefix', $wgxpiwik_config['tables_prefix']);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_config_db_img', $wgxpiwik_config_db_img);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_config_dbhost_img', $wgxpiwik_config_dbhost_img);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_config_dbuser_img', $wgxpiwik_config_dbuser_img);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_config_dbprefix_img', $wgxpiwik_config_dbprefix_img);
        
        // get block state
        $isvisible = 0;
        $sql = 'SELECT * FROM ' . $xoopsDB->prefix('newblocks') . ' WHERE mid = ' . $xoopsModule->getVar('mid');
        $sql = 'SELECT DISTINCT(b.bid), b.*, l.module_id FROM ' . $xoopsDB->prefix('newblocks') . ' b LEFT JOIN ' . $xoopsDB->prefix('block_module_link');
        $sql .= ' l ON b.bid=l.block_id  WHERE mid = ' . $xoopsModule->getVar('mid');
    
        $result = $xoopsDB->queryF($sql);
        while ($newblock = mysql_fetch_assoc($result)) {
            if ($newblock['func_file'] == 'tracker.php') {
                $isvisible = $newblock['visible'];
                $blocktitle = $newblock['title'];
                $bl_module_id = $newblock['module_id'];
            }
        }
        unset($result);
        $wgxpiwik_block_visible_img = ($isvisible == 1) ? '16/ok.png' : '32/alert.png';
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_block_visible_img', $wgxpiwik_block_visible_img);
        $wgxpiwik_block_title_img = ($blocktitle == '') ? '16/ok.png' : '32/alert.png';
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_block_title_img', $wgxpiwik_block_title_img);
        $wgxpiwik_block_allsites_img = ($bl_module_id == 0) ? '16/ok.png' : '32/alert.png';
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_block_allsites_img', $wgxpiwik_block_allsites_img);
        
        $blocksetdefault_url = 'settings.php?op=defaultblocksettings';
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_blocksetdefault_url', $blocksetdefault_url);
        $blockset_url = XOOPS_URL . '/modules/system/admin.php?fct=blocksadmin&op=list&filter=1&selmod=-2&selgrp=-1&selvis=-1&selgen=' . $xoopsModule->getVar('mid');
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_blockset_url', $blockset_url);
        
        // get module settings
        switch ($xoopsModuleConfig['piwik_tracker_type'][0]) {
            case 1:
            default:
                $tracker_type = _AM_WGXPIWIK_PIWIK_TRACKERTYPE_JS;
                break;
            
            case 2:
                $tracker_type = _AM_WGXPIWIK_PIWIK_TRACKERTYPE_PHP;
                break;
            
            case 3:
                $tracker_type = _AM_WGXPIWIK_PIWIK_TRACKERTYPE_IMG;
                break;
        }
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_tracker_type', $tracker_type);
        
        $piwik_period = $xoopsModuleConfig['piwik_period'][0];
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_period', $piwik_period);
        
        $piwik_date = $xoopsModuleConfig['piwik_date'][0];
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_date', $piwik_date);
        
        $modset_url = XOOPS_URL . '/modules/system/admin.php?fct=preferences&op=showmod&mod=' . $xoopsModule->getVar('mid');
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_modset_url', $modset_url);
        
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_url', WGXPIWIK_URL);
        $GLOBALS['xoopsTpl']->assign('wgxpiwik_upload_url', WGXPIWIK_UPLOAD_URL);
        // Table view

        break;
        
    case 'default':
    default:
    
        break;

}
include __DIR__ .'/footer.php';
