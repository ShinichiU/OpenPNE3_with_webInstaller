<?php

/**
 * FileBin form base class.
 *
 * @method FileBin getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFileBinForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'file_id'    => new sfWidgetFormInputHidden(),
      'bin'        => new sfWidgetFormTextarea(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'file_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'file_id', 'required' => false)),
      'bin'        => new sfValidatorString(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('file_bin[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FileBin';
  }

}
