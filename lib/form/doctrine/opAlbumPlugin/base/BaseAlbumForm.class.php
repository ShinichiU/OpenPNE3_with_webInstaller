<?php

/**
 * Album form base class.
 *
 * @method Album getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAlbumForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'member_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => true)),
      'title'       => new sfWidgetFormTextarea(),
      'body'        => new sfWidgetFormTextarea(),
      'public_flag' => new sfWidgetFormInputText(),
      'file_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'add_empty' => true)),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'member_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 2147483647)),
      'body'        => new sfValidatorString(array('max_length' => 2147483647)),
      'public_flag' => new sfValidatorInteger(array('required' => false)),
      'file_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('album[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Album';
  }

}
