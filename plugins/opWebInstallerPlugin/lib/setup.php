<?php
/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * openpne3 setup package
 *
 * @package    OpenPNE
 * @subpackage opWebInstallerPlugin
 * @author     Shinichi Urabe <urabe@tejimaya.com>
 */
//error_reporting(0);

require_once('checkConfiguration.class.php');
// インストール環境が整っているかのチェック
checkConfiguration::start();
$path = dirname(__FILE__).'/../apps/pc_frontend/modules/setup/templates/';

$configurations = checkConfiguration::getConfiguration();
$requests = new sfWebRequest($this->dispatcher);
require_once('form/opOpenPNESetupForm.class.php');
$form = new opOpenPNESetupForm();

if ($params = $requests->getParameter($form->getName()))
{
  $form->bind($params);
  if (!$form->isValid() || checkConfiguration::hasFatalError())
  {
    require_once($path.'indexSuccess.php');
  }
  else
  {
    require_once('webinstall.class.php');
    webinstall::doInstall($params['DBMS'], $params['username'], $params['password'], $params['hostname'], $params['port'], $params['database'], $params['socket']);
    require_once($path.'progressSuccess.php');
  }
}
else
{
  require_once($path.'indexSuccess.php');
}
exit;
