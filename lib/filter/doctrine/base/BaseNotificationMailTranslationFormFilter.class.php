<?php

/**
 * NotificationMailTranslation filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseNotificationMailTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'template' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'    => new sfValidatorPass(array('required' => false)),
      'template' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notification_mail_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotificationMailTranslation';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'title'    => 'Text',
      'template' => 'Text',
      'lang'     => 'Text',
    );
  }
}
