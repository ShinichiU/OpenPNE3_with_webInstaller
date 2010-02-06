<?php

/**
 * DiaryImage form base class.
 *
 * @method DiaryImage getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDiaryImageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'diary_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Diary'), 'add_empty' => false)),
      'file_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'add_empty' => false)),
      'number'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'diary_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Diary'))),
      'file_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('File'))),
      'number'   => new sfValidatorInteger(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'DiaryImage', 'column' => array('diary_id', 'number')))
    );

    $this->widgetSchema->setNameFormat('diary_image[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DiaryImage';
  }

}
