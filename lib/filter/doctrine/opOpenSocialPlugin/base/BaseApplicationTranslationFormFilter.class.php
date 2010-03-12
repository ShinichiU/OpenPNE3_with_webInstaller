<?php

/**
 * ApplicationTranslation filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseApplicationTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'              => new sfWidgetFormFilterInput(),
      'title_url'          => new sfWidgetFormFilterInput(),
      'description'        => new sfWidgetFormFilterInput(),
      'directory_title'    => new sfWidgetFormFilterInput(),
      'screenshot'         => new sfWidgetFormFilterInput(),
      'thumbnail'          => new sfWidgetFormFilterInput(),
      'author'             => new sfWidgetFormFilterInput(),
      'author_aboutme'     => new sfWidgetFormFilterInput(),
      'author_affiliation' => new sfWidgetFormFilterInput(),
      'author_email'       => new sfWidgetFormFilterInput(),
      'author_photo'       => new sfWidgetFormFilterInput(),
      'author_link'        => new sfWidgetFormFilterInput(),
      'author_quote'       => new sfWidgetFormFilterInput(),
      'settings'           => new sfWidgetFormFilterInput(),
      'views'              => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'              => new sfValidatorPass(array('required' => false)),
      'title_url'          => new sfValidatorPass(array('required' => false)),
      'description'        => new sfValidatorPass(array('required' => false)),
      'directory_title'    => new sfValidatorPass(array('required' => false)),
      'screenshot'         => new sfValidatorPass(array('required' => false)),
      'thumbnail'          => new sfValidatorPass(array('required' => false)),
      'author'             => new sfValidatorPass(array('required' => false)),
      'author_aboutme'     => new sfValidatorPass(array('required' => false)),
      'author_affiliation' => new sfValidatorPass(array('required' => false)),
      'author_email'       => new sfValidatorPass(array('required' => false)),
      'author_photo'       => new sfValidatorPass(array('required' => false)),
      'author_link'        => new sfValidatorPass(array('required' => false)),
      'author_quote'       => new sfValidatorPass(array('required' => false)),
      'settings'           => new sfValidatorPass(array('required' => false)),
      'views'              => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('application_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ApplicationTranslation';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'title'              => 'Text',
      'title_url'          => 'Text',
      'description'        => 'Text',
      'directory_title'    => 'Text',
      'screenshot'         => 'Text',
      'thumbnail'          => 'Text',
      'author'             => 'Text',
      'author_aboutme'     => 'Text',
      'author_affiliation' => 'Text',
      'author_email'       => 'Text',
      'author_photo'       => 'Text',
      'author_link'        => 'Text',
      'author_quote'       => 'Text',
      'settings'           => 'Text',
      'views'              => 'Text',
      'lang'               => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}
