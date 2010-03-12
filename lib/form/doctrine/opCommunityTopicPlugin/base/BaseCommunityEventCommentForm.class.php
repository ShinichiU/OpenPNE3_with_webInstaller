<?php

/**
 * CommunityEventComment form base class.
 *
 * @method CommunityEventComment getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCommunityEventCommentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'community_event_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CommunityEvent'), 'add_empty' => false)),
      'member_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => true)),
      'number'             => new sfWidgetFormInputText(),
      'body'               => new sfWidgetFormTextarea(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'community_event_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CommunityEvent'))),
      'member_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'required' => false)),
      'number'             => new sfValidatorInteger(array('required' => false)),
      'body'               => new sfValidatorString(array('max_length' => 2147483647)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('community_event_comment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CommunityEventComment';
  }

}
