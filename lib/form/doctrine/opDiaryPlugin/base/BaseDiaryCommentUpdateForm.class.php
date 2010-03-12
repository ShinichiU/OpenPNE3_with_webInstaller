<?php

/**
 * DiaryCommentUpdate form base class.
 *
 * @method DiaryCommentUpdate getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDiaryCommentUpdateForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'diary_id'             => new sfWidgetFormInputHidden(),
      'member_id'            => new sfWidgetFormInputHidden(),
      'last_comment_time'    => new sfWidgetFormDateTime(),
      'my_last_comment_time' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'diary_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'diary_id', 'required' => false)),
      'member_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'member_id', 'required' => false)),
      'last_comment_time'    => new sfValidatorDateTime(),
      'my_last_comment_time' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('diary_comment_update[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DiaryCommentUpdate';
  }

}
