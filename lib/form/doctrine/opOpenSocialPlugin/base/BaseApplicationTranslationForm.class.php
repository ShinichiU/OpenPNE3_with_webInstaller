<?php

/**
 * ApplicationTranslation form base class.
 *
 * @method ApplicationTranslation getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseApplicationTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'title'              => new sfWidgetFormInputText(),
      'title_url'          => new sfWidgetFormInputText(),
      'description'        => new sfWidgetFormTextarea(),
      'directory_title'    => new sfWidgetFormInputText(),
      'screenshot'         => new sfWidgetFormInputText(),
      'thumbnail'          => new sfWidgetFormInputText(),
      'author'             => new sfWidgetFormInputText(),
      'author_aboutme'     => new sfWidgetFormTextarea(),
      'author_affiliation' => new sfWidgetFormInputText(),
      'author_email'       => new sfWidgetFormInputText(),
      'author_photo'       => new sfWidgetFormInputText(),
      'author_link'        => new sfWidgetFormInputText(),
      'author_quote'       => new sfWidgetFormTextarea(),
      'settings'           => new sfWidgetFormInputText(),
      'views'              => new sfWidgetFormInputText(),
      'lang'               => new sfWidgetFormInputHidden(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'title'              => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'title_url'          => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'description'        => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'directory_title'    => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'screenshot'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'thumbnail'          => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'author'             => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'author_aboutme'     => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'author_affiliation' => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'author_email'       => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'author_photo'       => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'author_link'        => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'author_quote'       => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'settings'           => new sfValidatorPass(array('required' => false)),
      'views'              => new sfValidatorPass(array('required' => false)),
      'lang'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'lang', 'required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('application_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ApplicationTranslation';
  }

}
