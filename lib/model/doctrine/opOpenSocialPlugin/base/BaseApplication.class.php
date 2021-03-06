<?php

/**
 * BaseApplication
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $member_id
 * @property string $url
 * @property integer $height
 * @property boolean $scrolling
 * @property boolean $singleton
 * @property boolean $is_active
 * @property string $title
 * @property string $title_url
 * @property string $description
 * @property string $directory_title
 * @property string $screenshot
 * @property string $thumbnail
 * @property string $author
 * @property string $author_aboutme
 * @property string $author_affiliation
 * @property string $author_email
 * @property string $author_photo
 * @property string $author_link
 * @property string $author_quote
 * @property array $settings
 * @property array $views
 * @property Member $AdditionalMember
 * @property Doctrine_Collection $Members
 * @property Doctrine_Collection $MemberApplication
 * @property Doctrine_Collection $ApplicationInvite
 * @property Doctrine_Collection $PersistentDatas
 * 
 * @method integer             getMemberId()           Returns the current record's "member_id" value
 * @method string              getUrl()                Returns the current record's "url" value
 * @method integer             getHeight()             Returns the current record's "height" value
 * @method boolean             getScrolling()          Returns the current record's "scrolling" value
 * @method boolean             getSingleton()          Returns the current record's "singleton" value
 * @method boolean             getIsActive()           Returns the current record's "is_active" value
 * @method string              getTitle()              Returns the current record's "title" value
 * @method string              getTitleUrl()           Returns the current record's "title_url" value
 * @method string              getDescription()        Returns the current record's "description" value
 * @method string              getDirectoryTitle()     Returns the current record's "directory_title" value
 * @method string              getScreenshot()         Returns the current record's "screenshot" value
 * @method string              getThumbnail()          Returns the current record's "thumbnail" value
 * @method string              getAuthor()             Returns the current record's "author" value
 * @method string              getAuthorAboutme()      Returns the current record's "author_aboutme" value
 * @method string              getAuthorAffiliation()  Returns the current record's "author_affiliation" value
 * @method string              getAuthorEmail()        Returns the current record's "author_email" value
 * @method string              getAuthorPhoto()        Returns the current record's "author_photo" value
 * @method string              getAuthorLink()         Returns the current record's "author_link" value
 * @method string              getAuthorQuote()        Returns the current record's "author_quote" value
 * @method array               getSettings()           Returns the current record's "settings" value
 * @method array               getViews()              Returns the current record's "views" value
 * @method Member              getAdditionalMember()   Returns the current record's "AdditionalMember" value
 * @method Doctrine_Collection getMembers()            Returns the current record's "Members" collection
 * @method Doctrine_Collection getMemberApplication()  Returns the current record's "MemberApplication" collection
 * @method Doctrine_Collection getApplicationInvite()  Returns the current record's "ApplicationInvite" collection
 * @method Doctrine_Collection getPersistentDatas()    Returns the current record's "PersistentDatas" collection
 * @method Application         setMemberId()           Sets the current record's "member_id" value
 * @method Application         setUrl()                Sets the current record's "url" value
 * @method Application         setHeight()             Sets the current record's "height" value
 * @method Application         setScrolling()          Sets the current record's "scrolling" value
 * @method Application         setSingleton()          Sets the current record's "singleton" value
 * @method Application         setIsActive()           Sets the current record's "is_active" value
 * @method Application         setTitle()              Sets the current record's "title" value
 * @method Application         setTitleUrl()           Sets the current record's "title_url" value
 * @method Application         setDescription()        Sets the current record's "description" value
 * @method Application         setDirectoryTitle()     Sets the current record's "directory_title" value
 * @method Application         setScreenshot()         Sets the current record's "screenshot" value
 * @method Application         setThumbnail()          Sets the current record's "thumbnail" value
 * @method Application         setAuthor()             Sets the current record's "author" value
 * @method Application         setAuthorAboutme()      Sets the current record's "author_aboutme" value
 * @method Application         setAuthorAffiliation()  Sets the current record's "author_affiliation" value
 * @method Application         setAuthorEmail()        Sets the current record's "author_email" value
 * @method Application         setAuthorPhoto()        Sets the current record's "author_photo" value
 * @method Application         setAuthorLink()         Sets the current record's "author_link" value
 * @method Application         setAuthorQuote()        Sets the current record's "author_quote" value
 * @method Application         setSettings()           Sets the current record's "settings" value
 * @method Application         setViews()              Sets the current record's "views" value
 * @method Application         setAdditionalMember()   Sets the current record's "AdditionalMember" value
 * @method Application         setMembers()            Sets the current record's "Members" collection
 * @method Application         setMemberApplication()  Sets the current record's "MemberApplication" collection
 * @method Application         setApplicationInvite()  Sets the current record's "ApplicationInvite" collection
 * @method Application         setPersistentDatas()    Sets the current record's "PersistentDatas" collection
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseApplication extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('application');
        $this->hasColumn('member_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => '4',
             ));
        $this->hasColumn('url', 'string', 128, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '128',
             ));
        $this->hasColumn('height', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('scrolling', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => false,
             ));
        $this->hasColumn('singleton', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => true,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => true,
             ));
        $this->hasColumn('title', 'string', 128, array(
             'type' => 'string',
             'length' => '128',
             ));
        $this->hasColumn('title_url', 'string', 128, array(
             'type' => 'string',
             'length' => '128',
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('directory_title', 'string', 128, array(
             'type' => 'string',
             'length' => '128',
             ));
        $this->hasColumn('screenshot', 'string', 128, array(
             'type' => 'string',
             'length' => '128',
             ));
        $this->hasColumn('thumbnail', 'string', 128, array(
             'type' => 'string',
             'length' => '128',
             ));
        $this->hasColumn('author', 'string', 128, array(
             'type' => 'string',
             'length' => '128',
             ));
        $this->hasColumn('author_aboutme', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('author_affiliation', 'string', 128, array(
             'type' => 'string',
             'length' => '128',
             ));
        $this->hasColumn('author_email', 'string', 128, array(
             'type' => 'string',
             'length' => '128',
             ));
        $this->hasColumn('author_photo', 'string', 128, array(
             'type' => 'string',
             'length' => '128',
             ));
        $this->hasColumn('author_link', 'string', 128, array(
             'type' => 'string',
             'length' => '128',
             ));
        $this->hasColumn('author_quote', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('settings', 'array', null, array(
             'type' => 'array',
             ));
        $this->hasColumn('views', 'array', null, array(
             'type' => 'array',
             ));

        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Member as AdditionalMember', array(
             'local' => 'member_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('Member as Members', array(
             'refClass' => 'MemberApplication',
             'local' => 'application_id',
             'foreign' => 'member_id'));

        $this->hasMany('MemberApplication', array(
             'local' => 'id',
             'foreign' => 'application_id'));

        $this->hasMany('ApplicationInvite', array(
             'local' => 'id',
             'foreign' => 'application_id'));

        $this->hasMany('ApplicationPersistentData as PersistentDatas', array(
             'local' => 'id',
             'foreign' => 'application_id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'title',
              1 => 'title_url',
              2 => 'description',
              3 => 'directory_title',
              4 => 'screenshot',
              5 => 'thumbnail',
              6 => 'author',
              7 => 'author_aboutme',
              8 => 'author_affiliation',
              9 => 'author_email',
              10 => 'author_photo',
              11 => 'author_link',
              12 => 'author_quote',
              13 => 'settings',
              14 => 'views',
              15 => 'version',
             ),
             'length' => 5,
             ));
        $timestampable1 = new Doctrine_Template_Timestampable();
        $i18n0->addChild($timestampable1);
        $this->actAs($i18n0);
    }
}