<?php

/**
 * ActivityData filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseActivityDataFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'member_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => true)),
      'in_reply_to_activity_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('InReplyTo'), 'add_empty' => true)),
      'body'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uri'                     => new sfWidgetFormFilterInput(),
      'public_flag'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_pc'                   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_mobile'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'source'                  => new sfWidgetFormFilterInput(),
      'source_uri'              => new sfWidgetFormFilterInput(),
      'foreign_table'           => new sfWidgetFormFilterInput(),
      'foreign_id'              => new sfWidgetFormFilterInput(),
      'created_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'member_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Member'), 'column' => 'id')),
      'in_reply_to_activity_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('InReplyTo'), 'column' => 'id')),
      'body'                    => new sfValidatorPass(array('required' => false)),
      'uri'                     => new sfValidatorPass(array('required' => false)),
      'public_flag'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_pc'                   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_mobile'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'source'                  => new sfValidatorPass(array('required' => false)),
      'source_uri'              => new sfValidatorPass(array('required' => false)),
      'foreign_table'           => new sfValidatorPass(array('required' => false)),
      'foreign_id'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('activity_data_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ActivityData';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'member_id'               => 'ForeignKey',
      'in_reply_to_activity_id' => 'ForeignKey',
      'body'                    => 'Text',
      'uri'                     => 'Text',
      'public_flag'             => 'Number',
      'is_pc'                   => 'Boolean',
      'is_mobile'               => 'Boolean',
      'source'                  => 'Text',
      'source_uri'              => 'Text',
      'foreign_table'           => 'Text',
      'foreign_id'              => 'Number',
      'created_at'              => 'Date',
      'updated_at'              => 'Date',
    );
  }
}
