<?php

/**
 * MemberProfile filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMemberProfileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'member_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => true)),
      'profile_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Profile'), 'add_empty' => true)),
      'profile_option_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProfileOption'), 'add_empty' => true)),
      'value'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'value_datetime'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'public_flag'       => new sfWidgetFormFilterInput(),
      'tree_key'          => new sfWidgetFormFilterInput(),
      'lft'               => new sfWidgetFormFilterInput(),
      'rgt'               => new sfWidgetFormFilterInput(),
      'level'             => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'member_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Member'), 'column' => 'id')),
      'profile_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Profile'), 'column' => 'id')),
      'profile_option_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProfileOption'), 'column' => 'id')),
      'value'             => new sfValidatorPass(array('required' => false)),
      'value_datetime'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'public_flag'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_key'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lft'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rgt'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'level'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('member_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MemberProfile';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'member_id'         => 'ForeignKey',
      'profile_id'        => 'ForeignKey',
      'profile_option_id' => 'ForeignKey',
      'value'             => 'Text',
      'value_datetime'    => 'Date',
      'public_flag'       => 'Number',
      'tree_key'          => 'Number',
      'lft'               => 'Number',
      'rgt'               => 'Number',
      'level'             => 'Number',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
