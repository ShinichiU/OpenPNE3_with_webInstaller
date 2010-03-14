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

require_once(dirname(__FILE__).'/checkConfiguration.class.php');
// インストール環境が整っているかのチェック
checkConfiguration::start();
$path = dirname(__FILE__).'/../apps/pc_frontend/modules/setup/templates/';

$configurations = checkConfiguration::getConfiguration();
$requests = new sfWebRequest($this->dispatcher);
require_once(dirname(__FILE__).'/form/opOpenPNESetupForm.class.php');
$form = new opOpenPNESetupForm();

if ($params = $requests->getParameter($form->getName()))
{
  $form->bind($params);
  if (!$form->isValid() && checkConfiguration::hasFatalError())
  {
    require_once($path.'indexSuccess.php');
  }
  else
  {
    require_once($path.'progressSuccess.php');
    chdir(sfConfig::get('sf_root_dir'));
    $sfbin = sfConfig::get('sf_root_dir').'/symfony';
    $options = ' --dbms='.$params['DBMS'].' --username='.$params['username'].' --password='.$params['password'].' --hostname='.$params['hostname'].' --port='.$params['port'].' --dbname='.$params['database'].' --sock='.$params['socket'];
    passthru($sfbin.' openpne:webInstall'.$options, $result1);
    passthru($sfbin.' doctrine:insert-sql', $result2);
    passthru($sfbin.' doctrine:data-load', $result3);
    echo $result1."\n".$result2."\n".$result3."\n";
  }
}
else
{
  require_once($path.'indexSuccess.php');
}
exit;
