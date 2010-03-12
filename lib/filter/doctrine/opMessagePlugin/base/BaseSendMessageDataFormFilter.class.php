<?php

/**
 * SendMessageData filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSendMessageDataFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'member_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => true)),
      'subject'           => new sfWidgetFormFilterInput(),
      'body'              => new sfWidgetFormFilterInput(),
      'is_deleted'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_send'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'thread_message_id' => new sfWidgetFormFilterInput(),
      'return_message_id' => new sfWidgetFormFilterInput(),
      'message_type_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MessageType'), 'add_empty' => true)),
      'foreign_id'        => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'member_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Member'), 'column' => 'id')),
      'subject'           => new sfValidatorPass(array('required' => false)),
      'body'              => new sfValidatorPass(array('required' => false)),
      'is_deleted'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_send'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'thread_message_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'return_message_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'message_type_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MessageType'), 'column' => 'id')),
      'foreign_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('send_message_data_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SendMessageData';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'member_id'         => 'ForeignKey',
      'subject'           => 'Text',
      'body'              => 'Text',
      'is_deleted'        => 'Boolean',
      'is_send'           => 'Boolean',
      'thread_message_id' => 'Number',
      'return_message_id' => 'Number',
      'message_type_id'   => 'ForeignKey',
      'foreign_id'        => 'Number',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
