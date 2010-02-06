<?php

/**
 * NotificationMailTranslation form base class.
 *
 * @method NotificationMailTranslation getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseNotificationMailTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'title'    => new sfWidgetFormInputText(),
      'template' => new sfWidgetFormTextarea(),
      'lang'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'title'    => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'template' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'lang'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'lang', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notification_mail_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotificationMailTranslation';
  }

}
