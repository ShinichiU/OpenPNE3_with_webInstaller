<?php

/**
 * ActivityImage form base class.
 *
 * @method ActivityImage getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseActivityImageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'activity_data_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ActivityData'), 'add_empty' => false)),
      'mime_type'        => new sfWidgetFormInputText(),
      'uri'              => new sfWidgetFormTextarea(),
      'file_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'add_empty' => true)),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'activity_data_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ActivityData'))),
      'mime_type'        => new sfValidatorString(array('max_length' => 64)),
      'uri'              => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'file_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('activity_image[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ActivityImage';
  }

}
