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
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/*
 * Class Object Handler 
 */
class WgxpiwikPiwikHandler extends XoopsPersistableObjectHandler
{
    /*
    * @var mixed
    */
    private $wgxpiwik = null;    
    
    /*
     * Constructor
     *
     * @param string $db
     */
    public function __construct(&$db)
    {

    }

    function wgxpiwikReadPiwikConfig() 
    {
        // read the config from piwik config file 'piwik/config/config.ini.php'
        // set default values
        $wgxpiwik_config['dbname']              = '-';
        $wgxpiwik_config['host']                = '-';
        $wgxpiwik_config['username']            = '-';
        $wgxpiwik_config['tables_prefix']       = '-';
        $wgxpiwik_config['enable_framed_pages'] = '0';
        
        if (file_exists(WGXPIWIK_PIWIK_CONFIG_INI)) {
            $options = array();
            $handle = fopen(WGXPIWIK_PIWIK_CONFIG_INI, 'r');
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    // process the line read.
                    if (strpos($line, '=') > 0) {
                        $options = explode('=', $line);
                        $wgxpiwik_config[trim($options[0])] = str_replace('"', '', trim($options[1]));
                    }
                }
                fclose($handle);
            } 
        }
        
        return $wgxpiwik_config;
    }

    function wgxpiwikGetPiwikSites() 
    {
        global $xoopsDB;
        
        $wgxpiwik_config = $this->wgxpiwikReadPiwikConfig();
        
        $sql = 'SELECT * FROM ' . $wgxpiwik_config['tables_prefix'] . 'site;';
        $sites_list = array();
        $i = 0;
        $result = $xoopsDB->queryF($sql);
        if($result) {
            while ($site_item = mysql_fetch_assoc($result)) {
                $i++;
                $sites_list[] = array($i,'idsite' => $site_item['idsite'], 'name' => $site_item['name']);
            }
        }
        return $sites_list;
    }


    function wgxpiwikGetPiwikUsers() 
    {
        global $xoopsDB;
        
        $wgxpiwik_config = $this->wgxpiwikReadPiwikConfig();
        
        $sql = 'SELECT * FROM ' . $wgxpiwik_config['tables_prefix'] . 'user;';
        $users_list = array();
        $i = 0;
        $result = $xoopsDB->queryF($sql);
        if($result) {
            while ($user_item = mysql_fetch_assoc($result)) {
                $i++;
                $users_list[] = array($i,'login' => $user_item['login'], 'pwd' => $user_item['password'], 'alias' => $user_item['alias'], 'token_auth' => $user_item['token_auth'], 'superuser_access' => $user_item['superuser_access']);
            }
        }
        return $users_list;   
    }

}

