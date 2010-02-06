<?php

/**
 * GadgetConfig form base class.
 *
 * @method GadgetConfig getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseGadgetConfigForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'gadget_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gadget'), 'add_empty' => true)),
      'value'      => new sfWidgetFormTextarea(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'gadget_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gadget'), 'required' => false)),
      'value'      => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('gadget_config[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GadgetConfig';
  }

}
