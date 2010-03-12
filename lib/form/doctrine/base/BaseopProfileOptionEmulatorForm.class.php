<?php

/**
 * opProfileOptionEmulator form base class.
 *
 * @method opProfileOptionEmulator getObject() Returns the current form's model object
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseopProfileOptionEmulatorForm extends ProfileOptionForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('op_profile_option_emulator[%s]');
  }

  public function getModelName()
  {
    return 'opProfileOptionEmulator';
  }

}
