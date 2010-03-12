<?php

/**
 * BaseOAuthAdminToken
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property OAuthConsumerInformation $Consumer
 * 
 * @method OAuthConsumerInformation getConsumer() Returns the current record's "Consumer" value
 * @method OAuthAdminToken          setConsumer() Sets the current record's "Consumer" value
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseOAuthAdminToken extends OAuthAbstractToken
{
    public function setTableDefinition()
    {
        parent::setTableDefinition();
        $this->setTableName('o_auth_admin_token');
        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
        $this->option('comment', 'Saves administration tokens of OAuth');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('OAuthConsumerInformation as Consumer', array(
             'local' => 'oauth_consumer_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}