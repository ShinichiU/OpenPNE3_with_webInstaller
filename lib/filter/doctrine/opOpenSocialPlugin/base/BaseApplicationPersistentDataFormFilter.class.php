<?php

/**
 * ApplicationPersistentData filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseApplicationPersistentDataFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'application_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Application'), 'add_empty' => true)),
      'member_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => true)),
      'name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'value'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'application_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Application'), 'column' => 'id')),
      'member_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Member'), 'column' => 'id')),
      'name'           => new sfValidatorPass(array('required' => false)),
      'value'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('application_persistent_data_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ApplicationPersistentData';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'application_id' => 'ForeignKey',
      'member_id'      => 'ForeignKey',
      'name'           => 'Text',
      'value'          => 'Text',
    );
  }
}
