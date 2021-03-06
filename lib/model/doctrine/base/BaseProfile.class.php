<?php

/**
 * BaseProfile
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property boolean $is_required
 * @property boolean $is_unique
 * @property boolean $is_edit_public_flag
 * @property integer $default_public_flag
 * @property string $form_type
 * @property string $value_type
 * @property boolean $is_disp_regist
 * @property boolean $is_disp_config
 * @property boolean $is_disp_search
 * @property boolean $is_public_web
 * @property string $value_regexp
 * @property string $value_min
 * @property string $value_max
 * @property integer $sort_order
 * @property string $caption
 * @property string $info
 * @property Doctrine_Collection $ProfileOption
 * @property Doctrine_Collection $MemberProfile
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method string              getName()                Returns the current record's "name" value
 * @method boolean             getIsRequired()          Returns the current record's "is_required" value
 * @method boolean             getIsUnique()            Returns the current record's "is_unique" value
 * @method boolean             getIsEditPublicFlag()    Returns the current record's "is_edit_public_flag" value
 * @method integer             getDefaultPublicFlag()   Returns the current record's "default_public_flag" value
 * @method string              getFormType()            Returns the current record's "form_type" value
 * @method string              getValueType()           Returns the current record's "value_type" value
 * @method boolean             getIsDispRegist()        Returns the current record's "is_disp_regist" value
 * @method boolean             getIsDispConfig()        Returns the current record's "is_disp_config" value
 * @method boolean             getIsDispSearch()        Returns the current record's "is_disp_search" value
 * @method boolean             getIsPublicWeb()         Returns the current record's "is_public_web" value
 * @method string              getValueRegexp()         Returns the current record's "value_regexp" value
 * @method string              getValueMin()            Returns the current record's "value_min" value
 * @method string              getValueMax()            Returns the current record's "value_max" value
 * @method integer             getSortOrder()           Returns the current record's "sort_order" value
 * @method string              getCaption()             Returns the current record's "caption" value
 * @method string              getInfo()                Returns the current record's "info" value
 * @method Doctrine_Collection getProfileOption()       Returns the current record's "ProfileOption" collection
 * @method Doctrine_Collection getMemberProfile()       Returns the current record's "MemberProfile" collection
 * @method Profile             setId()                  Sets the current record's "id" value
 * @method Profile             setName()                Sets the current record's "name" value
 * @method Profile             setIsRequired()          Sets the current record's "is_required" value
 * @method Profile             setIsUnique()            Sets the current record's "is_unique" value
 * @method Profile             setIsEditPublicFlag()    Sets the current record's "is_edit_public_flag" value
 * @method Profile             setDefaultPublicFlag()   Sets the current record's "default_public_flag" value
 * @method Profile             setFormType()            Sets the current record's "form_type" value
 * @method Profile             setValueType()           Sets the current record's "value_type" value
 * @method Profile             setIsDispRegist()        Sets the current record's "is_disp_regist" value
 * @method Profile             setIsDispConfig()        Sets the current record's "is_disp_config" value
 * @method Profile             setIsDispSearch()        Sets the current record's "is_disp_search" value
 * @method Profile             setIsPublicWeb()         Sets the current record's "is_public_web" value
 * @method Profile             setValueRegexp()         Sets the current record's "value_regexp" value
 * @method Profile             setValueMin()            Sets the current record's "value_min" value
 * @method Profile             setValueMax()            Sets the current record's "value_max" value
 * @method Profile             setSortOrder()           Sets the current record's "sort_order" value
 * @method Profile             setCaption()             Sets the current record's "caption" value
 * @method Profile             setInfo()                Sets the current record's "info" value
 * @method Profile             setProfileOption()       Sets the current record's "ProfileOption" collection
 * @method Profile             setMemberProfile()       Sets the current record's "MemberProfile" collection
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseProfile extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('profile');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'comment' => 'Serial number',
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 64, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'comment' => 'Identified profile name (ASCII)',
             'length' => '64',
             ));
        $this->hasColumn('is_required', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             'notnull' => true,
             'comment' => 'This is a required',
             ));
        $this->hasColumn('is_unique', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             'notnull' => true,
             'comment' => 'Cannot select duplicate item',
             ));
        $this->hasColumn('is_edit_public_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             'notnull' => true,
             'comment' => 'Settable public flag',
             ));
        $this->hasColumn('default_public_flag', 'integer', 1, array(
             'type' => 'integer',
             'default' => '1',
             'notnull' => true,
             'comment' => 'Default of public flag',
             'length' => '1',
             ));
        $this->hasColumn('form_type', 'string', 32, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'comment' => 'Form type to input/select',
             'length' => '32',
             ));
        $this->hasColumn('value_type', 'string', 32, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'comment' => 'Type of input value',
             'length' => '32',
             ));
        $this->hasColumn('is_disp_regist', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             'notnull' => true,
             'comment' => 'Shows when registeration',
             ));
        $this->hasColumn('is_disp_config', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             'notnull' => true,
             'comment' => 'Shows when edit',
             ));
        $this->hasColumn('is_disp_search', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             'notnull' => true,
             'comment' => 'Shows when searching',
             ));
        $this->hasColumn('is_public_web', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => false,
             'comment' => 'Flag for adding public_flag for publishing to web',
             ));
        $this->hasColumn('value_regexp', 'string', null, array(
             'type' => 'string',
             'comment' => 'Regular expression',
             ));
        $this->hasColumn('value_min', 'string', 32, array(
             'type' => 'string',
             'comment' => 'Minimum value',
             'length' => '32',
             ));
        $this->hasColumn('value_max', 'string', 32, array(
             'type' => 'string',
             'comment' => 'Maximum value',
             'length' => '32',
             ));
        $this->hasColumn('sort_order', 'integer', 4, array(
             'type' => 'integer',
             'comment' => 'Order to sort',
             'length' => '4',
             ));
        $this->hasColumn('caption', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'comment' => 'Item name to show',
             ));
        $this->hasColumn('info', 'string', null, array(
             'type' => 'string',
             'comment' => 'Description',
             ));


        $this->index('name_UNIQUE', array(
             'fields' => 
             array(
              0 => 'name',
             ),
             'type' => 'unique',
             ));
        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
        $this->option('comment', 'Saves input/select items for the member profile');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ProfileOption', array(
             'local' => 'id',
             'foreign' => 'profile_id'));

        $this->hasMany('MemberProfile', array(
             'local' => 'id',
             'foreign' => 'profile_id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'caption',
              1 => 'info',
             ),
             'length' => 5,
             ));
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($i18n0);
        $this->actAs($timestampable0);
    }
}