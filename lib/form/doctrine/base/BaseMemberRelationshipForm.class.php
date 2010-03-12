<?php

/**
 * MemberRelationship form base class.
 *
 * @method MemberRelationship getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMemberRelationshipForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'member_id_to'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => false)),
      'member_id_from'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MemberRelatedByMemberIdFrom'), 'add_empty' => false)),
      'is_friend'       => new sfWidgetFormInputCheckbox(),
      'is_friend_pre'   => new sfWidgetFormInputCheckbox(),
      'is_access_block' => new sfWidgetFormInputCheckbox(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'member_id_to'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'))),
      'member_id_from'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MemberRelatedByMemberIdFrom'))),
      'is_friend'       => new sfValidatorBoolean(array('required' => false)),
      'is_friend_pre'   => new sfValidatorBoolean(array('required' => false)),
      'is_access_block' => new sfValidatorBoolean(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'MemberRelationship', 'column' => array('member_id_to', 'member_id_from'))),
        new sfValidatorDoctrineUnique(array('model' => 'MemberRelationship', 'column' => array('member_id_from', 'member_id_to'))),
      ))
    );

    $this->widgetSchema->setNameFormat('member_relationship[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MemberRelationship';
  }

}
