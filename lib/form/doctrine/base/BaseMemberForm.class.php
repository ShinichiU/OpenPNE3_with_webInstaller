<?php

/**
 * Member form base class.
 *
 * @method Member getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMemberForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'name'              => new sfWidgetFormInputText(),
      'invite_member_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => true)),
      'is_login_rejected' => new sfWidgetFormInputCheckbox(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
      'is_active'         => new sfWidgetFormInputCheckbox(),
      'applications_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Application')),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'name'              => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'invite_member_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'required' => false)),
      'is_login_rejected' => new sfValidatorBoolean(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
      'is_active'         => new sfValidatorBoolean(array('required' => false)),
      'applications_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Application', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('member[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Member';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['applications_list']))
    {
      $this->setDefault('applications_list', $this->object->Applications->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveApplicationsList($con);

    parent::doSave($con);
  }

  public function saveApplicationsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['applications_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Applications->getPrimaryKeys();
    $values = $this->getValue('applications_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Applications', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Applications', array_values($link));
    }
  }

}
