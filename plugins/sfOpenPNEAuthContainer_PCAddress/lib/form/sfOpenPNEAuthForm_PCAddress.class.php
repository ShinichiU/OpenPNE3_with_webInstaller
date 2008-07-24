<?php

/**
 * sfOpenPNEAuthForm_PCAddress represents a form to login.
 *
 * @package    symfony
 * @subpackage user
 * @author     Kousuke Ebihara <ebihara@tejimaya.net>
 */
class sfOpenPNEAuthForm_PCAddress extends sfForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'email' => new sfWidgetFormInput(),
      'password' => new sfWidgetFormInputPassword(),
    ));
  }
}
