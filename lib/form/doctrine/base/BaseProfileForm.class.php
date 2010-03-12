<?php

/**
 * Profile form base class.
 *
 * @method Profile getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProfileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'name'                => new sfWidgetFormInputText(),
      'is_required'         => new sfWidgetFormInputCheckbox(),
      'is_unique'           => new sfWidgetFormInputCheckbox(),
      'is_edit_public_flag' => new sfWidgetFormInputCheckbox(),
      'default_public_flag' => new sfWidgetFormInputText(),
      'form_type'           => new sfWidgetFormInputText(),
      'value_type'          => new sfWidgetFormInputText(),
      'is_disp_regist'      => new sfWidgetFormInputCheckbox(),
      'is_disp_config'      => new sfWidgetFormInputCheckbox(),
      'is_disp_search'      => new sfWidgetFormInputCheckbox(),
      'is_public_web'       => new sfWidgetFormInputCheckbox(),
      'value_regexp'        => new sfWidgetFormTextarea(),
      'value_min'           => new sfWidgetFormInputText(),
      'value_max'           => new sfWidgetFormInputText(),
      'sort_order'          => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'name'                => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'is_required'         => new sfValidatorBoolean(array('required' => false)),
      'is_unique'           => new sfValidatorBoolean(array('required' => false)),
      'is_edit_public_flag' => new sfValidatorBoolean(array('required' => false)),
      'default_public_flag' => new sfValidatorInteger(array('required' => false)),
      'form_type'           => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'value_type'          => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'is_disp_regist'      => new sfValidatorBoolean(array('required' => false)),
      'is_disp_config'      => new sfValidatorBoolean(array('required' => false)),
      'is_disp_search'      => new sfValidatorBoolean(array('required' => false)),
      'is_public_web'       => new sfValidatorBoolean(array('required' => false)),
      'value_regexp'        => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'value_min'           => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'value_max'           => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'sort_order'          => new sfValidatorInteger(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Profile', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Profile';
  }

}
