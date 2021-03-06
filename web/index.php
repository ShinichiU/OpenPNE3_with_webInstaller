<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('pc_frontend', 'prod', false);

if (!opMobileUserAgent::getInstance()->getMobile()->isNonMobile())
{
  $configuration = ProjectConfiguration::getApplicationConfiguration('mobile_frontend', 'prod', false);
}

sfContext::createInstance($configuration)->dispatch();
