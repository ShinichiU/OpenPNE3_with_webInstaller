<?php

/**
 * Session filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSessionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'data' => new sfWidgetFormFilterInput(),
      'time' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'data' => new sfValidatorPass(array('required' => false)),
      'time' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('session_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Session';
  }

  public function getFields()
  {
    return array(
      'id'   => 'Number',
      'data' => 'Text',
      'time' => 'Text',
    );
  }
}
