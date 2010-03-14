<?php

class webinstall
{
  public static function doInstall($dbms, $username, $password, $hostname, $port, $dbname, $sock)
  {
    self::configureDatabase($dbms, $username, $password, $hostname, $port, $dbname, $sock);

    self::buildDb();
  }

  public static function configureDatabase($dbms, $username, $password, $hostname, $port, $dbname, $sock)
  {
    require_once(sfConfig::get('sf_root_dir').'/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine.php');
    $dsn = self::createDSN($dbms, $hostname, $port, $dbname, $sock);

    $file = sfConfig::get('sf_config_dir').'/databases.yml';
    $config = array();

    if (file_exists($file))
    {
      $config = sfYaml::load($file);
    }

    $env = 'all';

    $config[$env]['doctrine'] = array(
      'class' => 'sfDoctrineDatabase',
      'param' => array(
        'dsn'        => $dsn,
        'username'   => $username,
        'encoding'   => 'utf8',
        'attributes' => array(
           Doctrine::ATTR_USE_DQL_CALLBACKS => true,
        ),
      ),
    );

    if ($password)
    {
      $config[$env]['doctrine']['param']['password'] = $password;
    }

    file_put_contents($file, sfYaml::dump($config, 4));
  }

  protected static function createDSN($dbms, $hostname, $port, $dbname, $sock)
  {
    $result = $dbms.':';

    $data = array();

    if ($dbname)
    {
      if ($dbms === 'sqlite')
      {
        $data[] = $dbname;
      }
      else
      {
        $data[] = 'dbname='.$dbname;
      }
    }

    if ($hostname)
    {
      $data[] = 'host='.$hostname;
    }

    if ($port)
    {
      $data[] = 'port='.$port;
    }

    if ($sock)
    {
      $data[] = 'unix_socket='.$sock;
    }

    $result .= implode(';', $data);

    return $result;
  }

  protected function buildDb()
  {
    $_app = 'pc_frontend';
    $_env = 'prod';

    $configuration = ProjectConfiguration::getApplicationConfiguration($_app, $_env, true);
    new sfDatabaseManager($configuration);

    chdir(sfConfig::get('sf_root_dir'));
    $insertSql = new sfDoctrineInsertSqlTask($configuration->getEventDispatcher(), new sfFormatter());
    $insertSql->setConfiguration($configuration);
    $insertSql->run();

    $dataLoad = new sfDoctrineDataLoadTask($configuration->getEventDispatcher(), new sfFormatter());
    $dataLoad->setConfiguration($configuration);
    $dataLoad->run(array(
      'dir_or_file' => dirname(__FILE__).'/../data/fixtures/3.5.0a/',
    ));
  }
}
