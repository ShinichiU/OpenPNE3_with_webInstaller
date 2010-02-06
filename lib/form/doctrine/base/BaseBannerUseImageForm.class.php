<?php

/**
 * BannerUseImage form base class.
 *
 * @method BannerUseImage getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBannerUseImageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'banner_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Banner'), 'add_empty' => false)),
      'banner_image_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BannerImage'), 'add_empty' => false)),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'banner_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Banner'))),
      'banner_image_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('BannerImage'))),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('banner_use_image[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BannerUseImage';
  }

}
