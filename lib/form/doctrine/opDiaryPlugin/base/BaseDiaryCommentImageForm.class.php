<?php

/**
 * DiaryCommentImage form base class.
 *
 * @method DiaryCommentImage getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDiaryCommentImageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'diary_comment_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DiaryComment'), 'add_empty' => false)),
      'file_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'diary_comment_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DiaryComment'))),
      'file_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('File'))),
    ));

    $this->widgetSchema->setNameFormat('diary_comment_image[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DiaryCommentImage';
  }

}
