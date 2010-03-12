<?php

/**
 * Diary form base class.
 *
 * @method Diary getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDiaryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'member_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => false)),
      'title'       => new sfWidgetFormTextarea(),
      'body'        => new sfWidgetFormTextarea(),
      'public_flag' => new sfWidgetFormInputText(),
      'is_open'     => new sfWidgetFormInputCheckbox(),
      'has_images'  => new sfWidgetFormInputCheckbox(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'member_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'))),
      'title'       => new sfValidatorString(array('max_length' => 2147483647)),
      'body'        => new sfValidatorString(array('max_length' => 2147483647)),
      'public_flag' => new sfValidatorInteger(array('required' => false)),
      'is_open'     => new sfValidatorBoolean(array('required' => false)),
      'has_images'  => new sfValidatorBoolean(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('diary[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Diary';
  }

}
