<?php

/**
 * MessageTypeTranslation filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMessageTypeTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'body'    => new sfWidgetFormFilterInput(),
      'subject' => new sfWidgetFormFilterInput(),
      'caption' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'info'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'body'    => new sfValidatorPass(array('required' => false)),
      'subject' => new sfValidatorPass(array('required' => false)),
      'caption' => new sfValidatorPass(array('required' => false)),
      'info'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('message_type_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MessageTypeTranslation';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'body'    => 'Text',
      'subject' => 'Text',
      'caption' => 'Text',
      'info'    => 'Text',
      'lang'    => 'Text',
    );
  }
}
