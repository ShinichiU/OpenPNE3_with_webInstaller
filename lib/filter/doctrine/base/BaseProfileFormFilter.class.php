<?php

/**
 * Profile filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProfileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_required'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_unique'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_edit_public_flag' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'default_public_flag' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'form_type'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'value_type'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_disp_regist'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_disp_config'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_disp_search'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_public_web'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'value_regexp'        => new sfWidgetFormFilterInput(),
      'value_min'           => new sfWidgetFormFilterInput(),
      'value_max'           => new sfWidgetFormFilterInput(),
      'sort_order'          => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'                => new sfValidatorPass(array('required' => false)),
      'is_required'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_unique'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_edit_public_flag' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'default_public_flag' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'form_type'           => new sfValidatorPass(array('required' => false)),
      'value_type'          => new sfValidatorPass(array('required' => false)),
      'is_disp_regist'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_disp_config'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_disp_search'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_public_web'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'value_regexp'        => new sfValidatorPass(array('required' => false)),
      'value_min'           => new sfValidatorPass(array('required' => false)),
      'value_max'           => new sfValidatorPass(array('required' => false)),
      'sort_order'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Profile';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'name'                => 'Text',
      'is_required'         => 'Boolean',
      'is_unique'           => 'Boolean',
      'is_edit_public_flag' => 'Boolean',
      'default_public_flag' => 'Number',
      'form_type'           => 'Text',
      'value_type'          => 'Text',
      'is_disp_regist'      => 'Boolean',
      'is_disp_config'      => 'Boolean',
      'is_disp_search'      => 'Boolean',
      'is_public_web'       => 'Boolean',
      'value_regexp'        => 'Text',
      'value_min'           => 'Text',
      'value_max'           => 'Text',
      'sort_order'          => 'Number',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
