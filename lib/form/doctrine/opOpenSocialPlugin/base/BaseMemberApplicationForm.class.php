<?php

/**
 * MemberApplication form base class.
 *
 * @method MemberApplication getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMemberApplicationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'member_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => false)),
      'application_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Application'), 'add_empty' => false)),
      'public_flag'    => new sfWidgetFormChoice(array('choices' => array('public' => 'public', 'friends' => 'friends', 'private' => 'private'))),
      'sort_order'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'member_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'))),
      'application_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Application'))),
      'public_flag'    => new sfValidatorChoice(array('choices' => array('public' => 'public', 'friends' => 'friends', 'private' => 'private'), 'required' => false)),
      'sort_order'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('member_application[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MemberApplication';
  }

}
