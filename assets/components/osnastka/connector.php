<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
}
else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var Osnastka $Osnastka */
$Osnastka = $modx->getService('osnastka', 'Osnastka', $modx->getOption('osnastka_core_path', null,
        $modx->getOption('core_path') . 'components/osnastka/') . 'model/osnastka/'
);
$modx->lexicon->load('osnastka:default');

// handle request
$corePath = $modx->getOption('osnastka_core_path', null, $modx->getOption('core_path') . 'components/osnastka/');
$path = $modx->getOption('processorsPath', $Osnastka->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));