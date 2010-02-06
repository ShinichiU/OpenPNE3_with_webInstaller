<?php

/**
 * Application form base class.
 *
 * @method Application getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseApplicationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'member_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdditionalMember'), 'add_empty' => true)),
      'url'          => new sfWidgetFormInputText(),
      'height'       => new sfWidgetFormInputText(),
      'scrolling'    => new sfWidgetFormInputCheckbox(),
      'singleton'    => new sfWidgetFormInputCheckbox(),
      'is_active'    => new sfWidgetFormInputCheckbox(),
      'members_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Member')),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'member_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdditionalMember'), 'required' => false)),
      'url'          => new sfValidatorString(array('max_length' => 128)),
      'height'       => new sfValidatorInteger(),
      'scrolling'    => new sfValidatorBoolean(array('required' => false)),
      'singleton'    => new sfValidatorBoolean(array('required' => false)),
      'is_active'    => new sfValidatorBoolean(array('required' => false)),
      'members_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Member', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('application[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Application';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['members_list']))
    {
      $this->setDefault('members_list', $this->object->Members->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveMembersList($con);

    parent::doSave($con);
  }

  public function saveMembersList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['members_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Members->getPrimaryKeys();
    $values = $this->getValue('members_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Members', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Members', array_values($link));
    }
  }

}
