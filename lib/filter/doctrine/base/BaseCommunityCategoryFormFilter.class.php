<?php

/**
 * CommunityCategory filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCommunityCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_allow_member_community' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tree_key'                  => new sfWidgetFormFilterInput(),
      'sort_order'                => new sfWidgetFormFilterInput(),
      'lft'                       => new sfWidgetFormFilterInput(),
      'rgt'                       => new sfWidgetFormFilterInput(),
      'level'                     => new sfWidgetFormFilterInput(),
      'created_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'                      => new sfValidatorPass(array('required' => false)),
      'is_allow_member_community' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tree_key'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sort_order'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lft'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rgt'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'level'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('community_category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CommunityCategory';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'name'                      => 'Text',
      'is_allow_member_community' => 'Boolean',
      'tree_key'                  => 'Number',
      'sort_order'                => 'Number',
      'lft'                       => 'Number',
      'rgt'                       => 'Number',
      'level'                     => 'Number',
      'created_at'                => 'Date',
      'updated_at'                => 'Date',
    );
  }
}
