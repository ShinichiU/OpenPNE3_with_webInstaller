<?php

/**
 * CommunityEvent form base class.
 *
 * @method CommunityEvent getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCommunityEventForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'community_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Community'), 'add_empty' => false)),
      'member_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => true)),
      'name'                 => new sfWidgetFormTextarea(),
      'body'                 => new sfWidgetFormTextarea(),
      'event_updated_at'     => new sfWidgetFormDateTime(),
      'open_date'            => new sfWidgetFormDateTime(),
      'open_date_comment'    => new sfWidgetFormTextarea(),
      'area'                 => new sfWidgetFormTextarea(),
      'application_deadline' => new sfWidgetFormDateTime(),
      'capacity'             => new sfWidgetFormInputText(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'community_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Community'))),
      'member_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'required' => false)),
      'name'                 => new sfValidatorString(array('max_length' => 2147483647)),
      'body'                 => new sfValidatorString(array('max_length' => 2147483647)),
      'event_updated_at'     => new sfValidatorDateTime(array('required' => false)),
      'open_date'            => new sfValidatorDateTime(),
      'open_date_comment'    => new sfValidatorString(array('max_length' => 2147483647)),
      'area'                 => new sfValidatorString(array('max_length' => 2147483647)),
      'application_deadline' => new sfValidatorDateTime(array('required' => false)),
      'capacity'             => new sfValidatorInteger(array('required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('community_event[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CommunityEvent';
  }

}
