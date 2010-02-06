<?php

/**
 * BannerImage form base class.
 *
 * @method BannerImage getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBannerImageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'file_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'add_empty' => false)),
      'url'        => new sfWidgetFormTextarea(),
      'name'       => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'file_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('File'))),
      'url'        => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('banner_image[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BannerImage';
  }

}
