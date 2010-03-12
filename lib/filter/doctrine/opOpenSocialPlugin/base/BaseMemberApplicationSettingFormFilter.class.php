<?php

/**
 * MemberApplicationSetting filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMemberApplicationSettingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'member_application_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MemberApplication'), 'add_empty' => true)),
      'type'                  => new sfWidgetFormChoice(array('choices' => array('' => '', 'application' => 'application', 'user' => 'user'))),
      'name'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hash'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'value'                 => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'member_application_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MemberApplication'), 'column' => 'id')),
      'type'                  => new sfValidatorChoice(array('required' => false, 'choices' => array('application' => 'application', 'user' => 'user'))),
      'name'                  => new sfValidatorPass(array('required' => false)),
      'hash'                  => new sfValidatorPass(array('required' => false)),
      'value'                 => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('member_application_setting_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MemberApplicationSetting';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'member_application_id' => 'ForeignKey',
      'type'                  => 'Enum',
      'name'                  => 'Text',
      'hash'                  => 'Text',
      'value'                 => 'Text',
    );
  }
}
