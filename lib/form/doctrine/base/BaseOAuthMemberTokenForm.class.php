<?php

/**
 * OAuthMemberToken form base class.
 *
 * @method OAuthMemberToken getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOAuthMemberTokenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'oauth_consumer_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Consumer'), 'add_empty' => false)),
      'key_string'        => new sfWidgetFormInputText(),
      'secret'            => new sfWidgetFormInputText(),
      'type'              => new sfWidgetFormChoice(array('choices' => array('request' => 'request', 'access' => 'access'))),
      'is_active'         => new sfWidgetFormInputCheckbox(),
      'callback_url'      => new sfWidgetFormTextarea(),
      'verifier'          => new sfWidgetFormTextarea(),
      'member_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => true)),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'oauth_consumer_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Consumer'))),
      'key_string'        => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'secret'            => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'type'              => new sfValidatorChoice(array('choices' => array('request' => 'request', 'access' => 'access'), 'required' => false)),
      'is_active'         => new sfValidatorBoolean(array('required' => false)),
      'callback_url'      => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'verifier'          => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'member_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'OAuthMemberToken', 'column' => array('key_string', 'secret')))
    );

    $this->widgetSchema->setNameFormat('o_auth_member_token[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OAuthMemberToken';
  }

}
