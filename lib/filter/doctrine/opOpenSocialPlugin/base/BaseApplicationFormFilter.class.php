<?php

/**
 * Application filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseApplicationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'member_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdditionalMember'), 'add_empty' => true)),
      'url'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'height'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'scrolling'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'singleton'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_active'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'members_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Member')),
    ));

    $this->setValidators(array(
      'member_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AdditionalMember'), 'column' => 'id')),
      'url'          => new sfValidatorPass(array('required' => false)),
      'height'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'scrolling'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'singleton'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_active'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'members_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Member', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('application_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addMembersListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query->leftJoin('r.MemberApplication MemberApplication')
          ->andWhereIn('MemberApplication.member_id', $values);
  }

  public function getModelName()
  {
    return 'Application';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'member_id'    => 'ForeignKey',
      'url'          => 'Text',
      'height'       => 'Number',
      'scrolling'    => 'Boolean',
      'singleton'    => 'Boolean',
      'is_active'    => 'Boolean',
      'members_list' => 'ManyKey',
    );
  }
}
