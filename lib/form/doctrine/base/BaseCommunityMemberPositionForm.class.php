<?php

/**
 * CommunityMemberPosition form base class.
 *
 * @method CommunityMemberPosition getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCommunityMemberPositionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'community_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Community'), 'add_empty' => false)),
      'member_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => false)),
      'community_member_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CommunityMember'), 'add_empty' => false)),
      'name'                => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'community_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Community'))),
      'member_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'))),
      'community_member_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CommunityMember'))),
      'name'                => new sfValidatorString(array('max_length' => 32)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'CommunityMemberPosition', 'column' => array('community_member_id', 'name')))
    );

    $this->widgetSchema->setNameFormat('community_member_position[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CommunityMemberPosition';
  }

}
