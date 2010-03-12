<?php

/**
 * ApplicationInvite form base class.
 *
 * @method ApplicationInvite getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseApplicationInviteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'application_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Application'), 'add_empty' => false)),
      'to_member_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ToMember'), 'add_empty' => false)),
      'from_member_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FromMember'), 'add_empty' => false)),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'application_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Application'))),
      'to_member_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ToMember'))),
      'from_member_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FromMember'))),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('application_invite[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ApplicationInvite';
  }

}
