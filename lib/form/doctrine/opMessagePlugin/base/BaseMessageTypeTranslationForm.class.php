<?php

/**
 * MessageTypeTranslation form base class.
 *
 * @method MessageTypeTranslation getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMessageTypeTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'body'    => new sfWidgetFormTextarea(),
      'subject' => new sfWidgetFormTextarea(),
      'caption' => new sfWidgetFormTextarea(),
      'info'    => new sfWidgetFormTextarea(),
      'lang'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'body'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'subject' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'caption' => new sfValidatorString(array('max_length' => 2147483647)),
      'info'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'lang'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'lang', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('message_type_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MessageTypeTranslation';
  }

}
