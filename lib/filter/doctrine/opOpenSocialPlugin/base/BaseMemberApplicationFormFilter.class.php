<?php

/**
 * MemberApplication filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMemberApplicationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'member_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => true)),
      'application_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Application'), 'add_empty' => true)),
      'public_flag'    => new sfWidgetFormChoice(array('choices' => array('' => '', 'public' => 'public', 'friends' => 'friends', 'private' => 'private'))),
      'sort_order'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'member_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Member'), 'column' => 'id')),
      'application_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Application'), 'column' => 'id')),
      'public_flag'    => new sfValidatorChoice(array('required' => false, 'choices' => array('public' => 'public', 'friends' => 'friends', 'private' => 'private'))),
      'sort_order'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('member_application_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MemberApplication';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'member_id'      => 'ForeignKey',
      'application_id' => 'ForeignKey',
      'public_flag'    => 'Enum',
      'sort_order'     => 'Number',
    );
  }
}
