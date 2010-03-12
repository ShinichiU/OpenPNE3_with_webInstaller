<?php

/**
 * CommunityCategory form base class.
 *
 * @method CommunityCategory getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCommunityCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'name'                      => new sfWidgetFormInputText(),
      'is_allow_member_community' => new sfWidgetFormInputCheckbox(),
      'tree_key'                  => new sfWidgetFormInputText(),
      'sort_order'                => new sfWidgetFormInputText(),
      'lft'                       => new sfWidgetFormInputText(),
      'rgt'                       => new sfWidgetFormInputText(),
      'level'                     => new sfWidgetFormInputText(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'name'                      => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'is_allow_member_community' => new sfValidatorBoolean(array('required' => false)),
      'tree_key'                  => new sfValidatorInteger(array('required' => false)),
      'sort_order'                => new sfValidatorInteger(array('required' => false)),
      'lft'                       => new sfValidatorInteger(array('required' => false)),
      'rgt'                       => new sfValidatorInteger(array('required' => false)),
      'level'                     => new sfValidatorInteger(array('required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('community_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CommunityCategory';
  }

}
