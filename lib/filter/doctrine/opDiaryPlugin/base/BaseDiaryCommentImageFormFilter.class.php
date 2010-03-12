<?php

/**
 * DiaryCommentImage filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDiaryCommentImageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'diary_comment_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DiaryComment'), 'add_empty' => true)),
      'file_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'diary_comment_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DiaryComment'), 'column' => 'id')),
      'file_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('File'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('diary_comment_image_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DiaryCommentImage';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'diary_comment_id' => 'ForeignKey',
      'file_id'          => 'ForeignKey',
    );
  }
}
