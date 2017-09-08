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
$Osnastka = $modx->getService('Osnastka', 'Osnastka', $modx->getOption('Osnastka_core_path', null,
        $modx->getOption('core_path') . 'components/Osnastka/') . 'model/Osnastka/'
);
$modx->lexicon->load('Osnastka:default');

// handle request
$corePath = $modx->getOption('Osnastka_core_path', null, $modx->getOption('core_path') . 'components/Osnastka/');
$path = $modx->getOption('processorsPath', $Osnastka->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));