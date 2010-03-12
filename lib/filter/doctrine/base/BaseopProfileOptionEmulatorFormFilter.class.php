<?php

/**
 * opProfileOptionEmulator filter form base class.
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseopProfileOptionEmulatorFormFilter extends ProfileOptionFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('op_profile_option_emulator_filters[%s]');
  }

  public function getModelName()
  {
    return 'opProfileOptionEmulator';
  }
}
