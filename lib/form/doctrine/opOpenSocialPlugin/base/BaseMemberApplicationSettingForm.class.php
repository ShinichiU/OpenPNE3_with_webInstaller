<?php

/**
 * MemberApplicationSetting form base class.
 *
 * @method MemberApplicationSetting getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMemberApplicationSettingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'member_application_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MemberApplication'), 'add_empty' => false)),
      'type'                  => new sfWidgetFormChoice(array('choices' => array('application' => 'application', 'user' => 'user'))),
      'name'                  => new sfWidgetFormInputText(),
      'hash'                  => new sfWidgetFormInputText(),
      'value'                 => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'member_application_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MemberApplication'))),
      'type'                  => new sfValidatorChoice(array('choices' => array('application' => 'application', 'user' => 'user'), 'required' => false)),
      'name'                  => new sfValidatorString(array('max_length' => 255)),
      'hash'                  => new sfValidatorString(array('max_length' => 32)),
      'value'                 => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'MemberApplicationSetting', 'column' => array('')))
    );

    $this->widgetSchema->setNameFormat('member_application_setting[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MemberApplicationSetting';
  }

}
