<?php

/**
 * BaseMemberApplication
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $member_id
 * @property integer $application_id
 * @property enum $public_flag
 * @property integer $sort_order
 * @property Member $Member
 * @property Application $Application
 * @property Doctrine_Collection $Settings
 * 
 * @method integer             getMemberId()       Returns the current record's "member_id" value
 * @method integer             getApplicationId()  Returns the current record's "application_id" value
 * @method enum                getPublicFlag()     Returns the current record's "public_flag" value
 * @method integer             getSortOrder()      Returns the current record's "sort_order" value
 * @method Member              getMember()         Returns the current record's "Member" value
 * @method Application         getApplication()    Returns the current record's "Application" value
 * @method Doctrine_Collection getSettings()       Returns the current record's "Settings" collection
 * @method MemberApplication   setMemberId()       Sets the current record's "member_id" value
 * @method MemberApplication   setApplicationId()  Sets the current record's "application_id" value
 * @method MemberApplication   setPublicFlag()     Sets the current record's "public_flag" value
 * @method MemberApplication   setSortOrder()      Sets the current record's "sort_order" value
 * @method MemberApplication   setMember()         Sets the current record's "Member" value
 * @method MemberApplication   setApplication()    Sets the current record's "Application" value
 * @method MemberApplication   setSettings()       Sets the current record's "Settings" collection
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseMemberApplication extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('member_application');
        $this->hasColumn('member_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '4',
             ));
        $this->hasColumn('application_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('public_flag', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'public',
              1 => 'friends',
              2 => 'private',
             ),
             'default' => 'public',
             'notnull' => true,
             ));
        $this->hasColumn('sort_order', 'integer', null, array(
             'type' => 'integer',
             ));

        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Member', array(
             'local' => 'member_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Application', array(
             'local' => 'application_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('MemberApplicationSetting as Settings', array(
             'local' => 'id',
             'foreign' => 'member_application_id'));

        $opactivitycascadingbehavior0 = new opActivityCascadingBehavior();
        $this->actAs($opactivitycascadingbehavior0);
    }
}