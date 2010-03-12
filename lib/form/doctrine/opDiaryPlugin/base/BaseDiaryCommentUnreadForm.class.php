<?php

/**
 * DiaryCommentUnread form base class.
 *
 * @method DiaryCommentUnread getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDiaryCommentUnreadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'diary_id'  => new sfWidgetFormInputHidden(),
      'member_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'diary_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'diary_id', 'required' => false)),
      'member_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'))),
    ));

    $this->widgetSchema->setNameFormat('diary_comment_unread[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DiaryCommentUnread';
  }

}
