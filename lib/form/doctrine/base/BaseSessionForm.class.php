<?php

/**
 * Session form base class.
 *
 * @method Session getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSessionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'   => new sfWidgetFormInputHidden(),
      'data' => new sfWidgetFormTextarea(),
      'time' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'data' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'time' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('session[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Session';
  }

}
