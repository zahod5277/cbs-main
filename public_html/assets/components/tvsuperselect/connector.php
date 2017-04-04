<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';

$corePath = $modx->getOption('core_path') . 'components/tvsuperselect/';

/** @var tvSuperSelect $tvss */
$tvss = $modx->getService('tvsuperselect', 'tvSuperSelect', $corePath . 'model/tvsuperselect/');
$modx->lexicon->load('tvsuperselect:default');

// handle request
$path = $modx->getOption('processorsPath', $tvss->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));