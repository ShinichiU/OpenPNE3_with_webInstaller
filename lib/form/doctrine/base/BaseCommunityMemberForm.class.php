<?php

/**
 * CommunityMember form base class.
 *
 * @method CommunityMember getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCommunityMemberForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'community_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Community'), 'add_empty' => false)),
      'member_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => false)),
      'is_pre'                 => new sfWidgetFormInputCheckbox(),
      'is_receive_mail_pc'     => new sfWidgetFormInputCheckbox(),
      'is_receive_mail_mobile' => new sfWidgetFormInputCheckbox(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'community_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Community'))),
      'member_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'))),
      'is_pre'                 => new sfValidatorBoolean(array('required' => false)),
      'is_receive_mail_pc'     => new sfValidatorBoolean(array('required' => false)),
      'is_receive_mail_mobile' => new sfValidatorBoolean(array('required' => false)),
      'created_at'             => new sfValidatorDateTime(),
      'updated_at'             => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('community_member[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CommunityMember';
  }

}
