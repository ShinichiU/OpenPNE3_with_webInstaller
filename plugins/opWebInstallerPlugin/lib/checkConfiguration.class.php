<?php

class checkConfiguration
{
  protected static $err = array();
  protected static $has_fatal_error = false;

  /**
   * Checks a configuration.
   */
  protected static function setParams($boolean, $name, $help = '', $fatal = false)
  {
    if ($boolean)
    {
      $type = 'OK';
    }
    else
    {
      $type = $fatal ? 'ERROR' : 'WARNING';
    }

    self::$err[] = array(
      'name' => $name,
      'type'    => $type,
      'help'    => $boolean ? '' : $help,
    );
    if ($fatal && !$boolean)
    {
      self::$has_fatal_error = true;
    }
  }

  public static function getConfiguration()
  {
    return self::$err;
  }

  public static function hasFatalError()
  {
    return self::$has_fatal_error;
  }

  public static function start()
  {
    self::setParams(version_compare(phpversion(), '5.2.4', '>='), sprintf('PHP 5.2.4 以降 (現在の環境：%s)', phpversion()), 'Current version is '.phpversion(), true);
    self::setParams(class_exists('PDO'), 'PDO 拡張モジュール', 'PDO 拡張モジュールをインストールしてください', true);
    if (class_exists('PDO'))
    {
      $drivers = PDO::getAvailableDrivers();
      self::setParams(in_array('mysql',$drivers), 'PDO MYSQL ドライバー', 'PDO MSQL ドライバーをインストールしてください', true);
    }
    self::setParams(class_exists('DomDocument'), 'XML 拡張モジュール', 'XML 拡張モジュールをインストールしてください', true);
    self::setParams(function_exists('gd_info'), 'GD 拡張モジュール', 'GD 拡張モジュールをインストールしてください', true);
    if (function_exists('gd_info'))
    {
      $gds = gd_info();
      self::setParams($gds['GIF Read Support'] && $gds['GIF Create Support'], 'GD gif サポート', 'GD gif サポートをインストールしてください', true);
      self::setParams($gds['JPEG Support'], 'GD jpeg サポート', 'GD jpeg サポートをインストールしてください', false);
      self::setParams($gds['PNG Support'], 'GD png サポート', 'GD png サポートをインストールしてください', true);
    }
    self::setParams(function_exists('mb_strlen'), 'mbstring 拡張モジュール', 'mbstring 拡張モジュールをインストールしてください', true);
    self::setParams(function_exists('preg_replace'), 'PCRE 拡張モジュール', 'PCRE 拡張モジュールをインストールしてください', true);

    self::setParams(function_exists('json_decode'), 'JSON 拡張モジュール', 'JSON 拡張モジュールをインストールしてください', false);
    self::setParams(function_exists('token_get_all'), 'token_get_all()', 'token_get_all() 関数をインストールしてください', false);
    self::setParams(function_exists('mcrypt_cbc'), 'mcrypt 拡張モジュール', 'mcrypt 拡張モジュールをインストールしてください', false);
    $accelerator = 
      (function_exists('apc_store') && ini_get('apc.enabled'))
      ||
      function_exists('eaccelerator_put') && ini_get('eaccelerator.enable')
      ||
      function_exists('xcache_set')
    ;
    self::setParams($accelerator, 'PHP accelerator', 'PHP accelerator をインストールしてください (APC など)', false);
    self::setParams(function_exists('iconv'), 'iconv() 関数', 'iconv() 関数をインストールしてください', false);
    self::setParams(function_exists('utf8_decode'), 'utf8_decode() 関数', 'utf8_decode() 関数をインストールしてください', false);

    self::setParams(!ini_get('short_open_tag'), 'php.ini の short_open_tag set がオフになっているか', 'php.ini でオフにしてください', false);
    self::setParams(!ini_get('magic_quotes_gpc'), 'php.ini の magic_quotes_gpc がオフになっているか', 'php.ini でオフにしてください', false);
    self::setParams(!ini_get('register_globals'), 'php.ini の register_globals がオフになっているか', 'php.ini でオフにしてください', false);
    self::setParams(!ini_get('session.auto_start'), 'php.ini の session.auto_start がオフになっているか', 'php.ini でオフにしてください', false);

    self::setParams(version_compare(phpversion(), '5.2.9', '!='), 'PHP のバージョンは 5.2.9 以外であるか', 'PHP 5.2.9 では array_unique() の後方互換性が失われています. 5.2.10 以降を使ってください [Ticket #6211]', false);

    $dbfile   = OPENPNE3_CONFIG_DIR.'/databases.yml';
    $cachedir = sfConfig::get('sf_root_dir').'/cache/test';
    $logfile  = sfConfig::get('sf_log_dir').'/test';
    $imagedir = sfConfig::get('sf_web_dir').'/cache/test';
    self::setParams(is_writable($dbfile), 'config/databases.yml に書き込み権限があるか', 'ファイルのパーミッションを777にしてください', true);
    self::setParams(file_exists($cachedir) || @mkdir($cachedir, 0777), 'cache ディレクトリに権限があるか', 'cache ディレクトリのパーミッションを777にしてください', true);
    self::setParams(file_exists($logfile) || @touch($logfile, 0777), 'log ディレクトリに権限があるか', 'log ディレクトリのパーミッションを777にしてください', true);
    self::setParams(file_exists($imagedir) || @mkdir($imagedir, 0777), 'web/cache ディレクトリに権限があるか', 'web/cache ディレクトリのパーミッションを777にしてください', true);
  }
}
