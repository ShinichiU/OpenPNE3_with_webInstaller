<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

class openpneWebInstallTask extends openpneInstallTask
{
  protected function configure()
  {
    $this->namespace        = 'openpne';
    $this->name             = 'webInstall';

    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_OPTIONAL, 'The application name', null),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'prod'),
    ));

    $this->addOption('dbms', null, sfCommandOption::PARAMETER_REQUIRED, 'The dbms', 'mysql');
    $this->addOption('username', null, sfCommandOption::PARAMETER_REQUIRED, 'The dbms username', null);
    $this->addOption('password', null, sfCommandOption::PARAMETER_OPTIONAL, 'The dbms user password', '');
    $this->addOption('hostname', null, sfCommandOption::PARAMETER_REQUIRED, 'The dbms hostname', 'localhost');
    $this->addOption('port', null, sfCommandOption::PARAMETER_OPTIONAL, 'The dbms port', '');
    $this->addOption('dbname', null, sfCommandOption::PARAMETER_REQUIRED, 'The database name', null);
    $this->addOption('sock', null, sfCommandOption::PARAMETER_OPTIONAL, 'The socket', null);

    $this->briefDescription = 'Install OpenPNE for web';
    $this->detailedDescription = <<<EOF
The [openpne:webInstall|INFO] task installs and configures OpenPNE.
Call it with:

  [./symfony openpne:webInstall|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    set_time_limit(0);

    $this->doInstall(
      $options['dbms'],
      $options['username'],
      $options['password'],
      $options['hostname'],
      $options['port'],
      $options['dbname'],
      $options['sock'],
      $options
//      array('application' => null, 'env' => 'prod')
    );

    if ($this->params['dbms'] === 'sqlite')
    {
      $this->getFilesystem()->chmod($dbname, 0666);
    }

    $this->publishAssets();

    // _PEAR_call_destructors() causes an E_STRICT error
    error_reporting(error_reporting() & ~E_STRICT);

    $this->logSection('installer', 'installation is completed!');
  }

  protected function doInstall($dbms, $username, $password, $hostname, $port, $dbname, $sock, $options)
  {
    @parent::fixPerms();
    @parent::clearCache();
    parent::configureDatabase($dbms, $username, $password, $hostname, $port, $dbname, $sock, $options);
  }
}
