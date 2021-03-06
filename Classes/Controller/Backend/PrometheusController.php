<?php
/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace Mfc\Prometheus\Controller\Backend;

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Http\ServerRequest;
use TYPO3\CMS\Core\Http\Response;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class PrometheusController
 * @package Mfc\Prometheus\Controller\Backend
 */
class PrometheusController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{



    /**
     * Display Grafana Dashboard in TYPO3 BE
     *
     */
    public function getGrafanaContentAction()
    {
        $extconfig = $this->getExtConfig();
        $dashboardUrl = $extconfig['grafanaDashboardUrl'];

        echo "
            <iframe  src=\"$dashboardUrl\" width=\"100%\" height=\"100%\" class=\"prometheus\"/>
         ";
    }

    /**
     * Get Extension Config
     *
     * @return array config
     */
    private function getExtConfig()
    {
        $extconfig = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['prometheus']);
        return $extconfig;
    }

}
