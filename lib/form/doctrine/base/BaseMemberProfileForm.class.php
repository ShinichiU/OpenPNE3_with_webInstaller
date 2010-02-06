<?php

/**
 * MemberProfile form base class.
 *
 * @method MemberProfile getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMemberProfileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'member_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => false)),
      'profile_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Profile'), 'add_empty' => false)),
      'profile_option_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProfileOption'), 'add_empty' => true)),
      'value'             => new sfWidgetFormTextarea(),
      'value_datetime'    => new sfWidgetFormDateTime(),
      'public_flag'       => new sfWidgetFormInputText(),
      'tree_key'          => new sfWidgetFormInputText(),
      'lft'               => new sfWidgetFormInputText(),
      'rgt'               => new sfWidgetFormInputText(),
      'level'             => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'member_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'))),
      'profile_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Profile'))),
      'profile_option_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProfileOption'), 'required' => false)),
      'value'             => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'value_datetime'    => new sfValidatorDateTime(array('required' => false)),
      'public_flag'       => new sfValidatorInteger(array('required' => false)),
      'tree_key'          => new sfValidatorInteger(array('required' => false)),
      'lft'               => new sfValidatorInteger(array('required' => false)),
      'rgt'               => new sfValidatorInteger(array('required' => false)),
      'level'             => new sfValidatorInteger(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('member_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MemberProfile';
  }

}
