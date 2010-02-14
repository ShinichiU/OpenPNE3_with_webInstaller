<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * opOpenPNESetupForm form.
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Shinichi Urabe <urabe@tejimaya.com>
 */
class opOpenPNESetupForm extends sfForm
{
  protected $DBRMS = array(
    'mysql'  => 'MySQL',
  );

  public function configure()
  {
    $this->setWidgets(array(
      'DBMS'     => new sfWidgetFormChoice(array('choices' => $this->DBRMS)),
      'username' => new sfWidgetFormInputText(),
      'password' => new sfWidgetFormInputPassword(),
      'database' => new sfWidgetFormInputText(),
      'hostname' => new sfWidgetFormInputText(array('default' => 'localhost')),
      'port' => new sfWidgetFormInputText(),
      'socket'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'DBMS'     => new sfValidatorChoice(array('choices' => array_keys($this->DBRMS))),
      'username' => new sfValidatorString(),
      'password' => new sfValidatorString(array('required' => false)),
      'database' => new sfValidatorString(),
      'hostname' => new sfValidatorRegex(array('pattern' => '/^[\w\d\.\-]+$/')),
      'port'     => new sfValidatorInteger(array('required' => false)),
      'socket'   => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('setup[%s]');
  }
}
