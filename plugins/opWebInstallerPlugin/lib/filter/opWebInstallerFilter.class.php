<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * opWebInstallerFilter
 *
 * @package    OpenPNE
 * @subpackage filter
 * @author     Shinichi Urane <urabe@tejimaya.com>
 */
class opWebInstallerFilter extends sfFilter
{
  /**
   * Executes this filter.
   *
   * @param sfFilterChain $filterChain A sfFilterChain instance
   */
  public function execute($filterChain)
  {
    $filterChain->execute();
  }
}
