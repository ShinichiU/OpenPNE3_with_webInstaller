<?php

/**
 * DiaryComment form base class.
 *
 * @method DiaryComment getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDiaryCommentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'diary_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Diary'), 'add_empty' => false)),
      'member_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => false)),
      'number'     => new sfWidgetFormInputText(),
      'body'       => new sfWidgetFormTextarea(),
      'has_images' => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'diary_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Diary'))),
      'member_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'))),
      'number'     => new sfValidatorInteger(),
      'body'       => new sfValidatorString(array('max_length' => 2147483647)),
      'has_images' => new sfValidatorBoolean(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('diary_comment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DiaryComment';
  }

}
