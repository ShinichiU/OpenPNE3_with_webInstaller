<?php

/**
 * AlbumImage form base class.
 *
 * @method AlbumImage getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAlbumImageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'album_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Album'), 'add_empty' => false)),
      'member_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => false)),
      'file_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'add_empty' => true)),
      'description' => new sfWidgetFormTextarea(),
      'filesize'    => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'album_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Album'))),
      'member_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'))),
      'file_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'required' => false)),
      'description' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'filesize'    => new sfValidatorInteger(),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('album_image[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AlbumImage';
  }

}
