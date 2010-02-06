<?php

/**
 * ApplicationPersistentData form base class.
 *
 * @method ApplicationPersistentData getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseApplicationPersistentDataForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'application_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Application'), 'add_empty' => false)),
      'member_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => false)),
      'name'           => new sfWidgetFormInputText(),
      'value'          => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'application_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Application'))),
      'member_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'))),
      'name'           => new sfValidatorString(array('max_length' => 128)),
      'value'          => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'ApplicationPersistentData', 'column' => array('application_id', 'member_id', 'name')))
    );

    $this->widgetSchema->setNameFormat('application_persistent_data[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ApplicationPersistentData';
  }

}
