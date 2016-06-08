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
defined('XOOPS_ROOT_PATH') or die('Restricted access');
/*
 * Class Object WgxpiwikPerms
 */
class WgxpiwikPerms extends XoopsObject
{
    /*
    * @var mixed
    */
    private $wgxpiwik = null;

    /*
     * Constructor
     *
     * @param null
     */
    public function __construct()
    {
        $this->wgxpiwik = WgxpiwikHelper::getInstance();
        $this->initVar('perm_id', XOBJ_DTYPE_INT);
        $this->initVar('perm_groupid', XOBJ_DTYPE_INT);
        $this->initVar('perm_piwik_login', XOBJ_DTYPE_TXTBOX);
        $this->initVar('perm_weight', XOBJ_DTYPE_INT);
    }

    /*
    *  @static function &getInstance
    *  @param null
    */
    public static function &getInstance()
    {
        static $instance = false;
        if(!$instance) {
            $instance = new self();
        }
        return $instance;
    }

    /*
     * Get form
     *
     * @param mixed $action
     */
    public function getFormPerms($action = false)
    {
        if($action === false) {
            $action = $_SERVER['REQUEST_URI'];
        }

        // Get Theme Form
        xoops_load('XoopsFormLoader');
        $form = new XoopsThemeForm(_AM_WGXPIWIK_PERM_EDIT, 'form', $action, 'post', true);
        $form->setExtra('enctype="multipart/form-data"');

        // Form group name
        $groups_Handler =& xoops_getModuleHandler('group', 'system');
        $group_obj      = $groups_Handler->get($this->getVar('perm_groupid'));
        $form->addElement( new XoopsFormLabel(_AM_WGXPIWIK_PERM_GROUPID,  $group_obj->getVar('name')));

        // Form Select Piwik User        
        $piwikHandler =& $this->wgxpiwik->getHandler('piwik');
        $piwik_users  =  $piwikHandler->wgxpiwikGetPiwikUsers();
        $perm_piwikuserSelect = new XoopsFormSelect(_AM_WGXPIWIK_PERM_PIWIK_LOGIN . _AM_WGXPIWIK_PERM_PIWIK_LOGIN_DESC, 'perm_piwik_login', $this->getVar('perm_piwik_login'));
        $perm_piwikuserSelect->addOption('', 'none');
        foreach ($piwik_users as $puser)
        {
            $perm_piwikuserSelect->addOption($puser['alias']);
        }
        $form->addElement( $perm_piwikuserSelect, false);
        
        // Form Text PsetHost
        $form->addElement( new XoopsFormText(_AM_WGXPIWIK_PERM_WEIGHT, 'perm_weight', 50, 255, $this->getVar('perm_weight')), true );
        
        // Send
        $form->addElement(new XoopsFormHidden('op', 'save'));
        $form->addElement(new XoopsFormButton('', 'submit', _SUBMIT, 'submit'));
        return $form;
    }

    /**
     * Get Values
     */
    public function getValuesPerms($keys = null, $format = null, $maxDepth = null)
    {
        $groups_Handler = xoops_getModuleHandler('group', 'system');
        $group_obj      = $groups_Handler->get($this->getVar('perm_groupid'));
        
        $ret                 = $this->getValues($keys, $format, $maxDepth);
        $ret['id']           = $this->getVar('perm_id');
        $ret['groupid']      = $this->getVar('perm_groupid');
        $ret['group_name']   = $group_obj->getVar('name');
        $ret['piwik_userid'] = $this->getVar('perm_piwik_login');
        $ret['weight']       = $this->getVar('perm_weight');
        
        unset($group_obj);
        
        return $ret;
    }

    /**
     * Returns an array representation of the object
     *
     * @return array
     **/
    public function toArray()
    {
        $ret = array();
        $vars = $this->getVars();
        foreach (array_keys($vars) as $var) {
            $ret[$var] = $this->getVar($var);
        }
        return $ret;
    }
}

/*
 * Class Object Handler WgxpiwikPerms
 */
class WgxpiwikPermsHandler extends XoopsPersistableObjectHandler
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
        parent::__construct($db, 'mod_wgxpiwik_perms', 'wgxpiwikperms', 'perm_id', 'perm_groupid');
        $this->wgxpiwik = WgxpiwikHelper::getInstance();
    }

    /**
     * @param bool $isNew
     *
     * @return object
     */
    public function &create($isNew = true)
    {
        $temp = parent::create($isNew);
        return $temp;
    }

    /**
     * retrieve a field
     *
     * @param int $i field id
     * @return mixed reference to the {@link TDMCreateFields} object
     */
    public function &get($i = null, $fields = null)
    {
        return parent::get($i, $fields);
    }

    /**
     * get inserted id
     *
     * @param null
     * @return integer reference to the {@link TDMCreateFields} object
     */
    public function &getInsertId()
    {
        return $this->db->getInsertId();
    }

    /**
     * get IDs of objects matching a condition
     *
     * @param  CriteriaElement $criteria {@link CriteriaElement} to match
     * @return array  of object IDs
     */
    public function &getIds(CriteriaElement $criteria = null)
    {
        return parent::getIds($criteria);
    }

    /**
     * insert a new field in the database
     *
     * @param XoopsObject $field reference to the {@link TDMCreateFields} object
     * @param bool   $force
     *
     * @return bool FALSE if failed, TRUE if already present and unchanged or successful
     */
    public function insert(XoopsObject $field, $force = false)
    {
        if (!parent::insert($field, $force)) {
            return false;
        }

        return true;
    }

    /**
     * Get Count Perms
     */
    public function getCountPerms($start = 0, $limit = 0, $sort = 'perm_id ASC, perm_groupid', $order = 'ASC')
    {
        $criteria = new CriteriaCompo();
        $criteria->setSort($sort);
        $criteria->setOrder($order);
        $criteria->setStart($start);
        $criteria->setLimit($limit);
        return $this->getCount($criteria);
    }

    /**
     * Get All Perms
     */
    public function getAllPerms($start = 0, $limit = 0, $sort = 'perm_id ASC, perm_groupid', $order = 'ASC')
    {
        $criteria = new CriteriaCompo();
        $criteria->setSort($sort);
        $criteria->setOrder($order);
        $criteria->setStart($start);
        $criteria->setLimit($limit);
        return $this->getAll($criteria);
    }
}
