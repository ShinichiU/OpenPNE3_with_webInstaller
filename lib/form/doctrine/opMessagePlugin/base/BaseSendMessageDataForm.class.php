<?php

/**
 * SendMessageData form base class.
 *
 * @method SendMessageData getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSendMessageDataForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'member_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => true)),
      'subject'           => new sfWidgetFormTextarea(),
      'body'              => new sfWidgetFormTextarea(),
      'is_deleted'        => new sfWidgetFormInputCheckbox(),
      'is_send'           => new sfWidgetFormInputCheckbox(),
      'thread_message_id' => new sfWidgetFormInputText(),
      'return_message_id' => new sfWidgetFormInputText(),
      'message_type_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MessageType'), 'add_empty' => true)),
      'foreign_id'        => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'member_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'required' => false)),
      'subject'           => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'body'              => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'is_deleted'        => new sfValidatorBoolean(array('required' => false)),
      'is_send'           => new sfValidatorBoolean(array('required' => false)),
      'thread_message_id' => new sfValidatorInteger(array('required' => false)),
      'return_message_id' => new sfValidatorInteger(array('required' => false)),
      'message_type_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MessageType'), 'required' => false)),
      'foreign_id'        => new sfValidatorInteger(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('send_message_data[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SendMessageData';
  }

}
