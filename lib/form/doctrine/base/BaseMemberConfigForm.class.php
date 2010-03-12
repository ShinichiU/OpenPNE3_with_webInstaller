<?php

/**
 * MemberConfig form base class.
 *
 * @method MemberConfig getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMemberConfigForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'member_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => false)),
      'name'            => new sfWidgetFormInputText(),
      'value'           => new sfWidgetFormTextarea(),
      'value_datetime'  => new sfWidgetFormDateTime(),
      'name_value_hash' => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'member_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'))),
      'name'            => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'value'           => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'value_datetime'  => new sfValidatorDateTime(array('required' => false)),
      'name_value_hash' => new sfValidatorString(array('max_length' => 32)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('member_config[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MemberConfig';
  }

}
