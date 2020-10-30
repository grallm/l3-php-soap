<?php
$client = new SoapClient("../provider/cars.wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));

// getCarsEngineConstructor
if (isset($_GET['constructor']) && isset($_GET['engine'])) {
  echo $client->getCarsEngineConstructor($_GET['constructor'], $_GET['engine']);

// getConstructorCars
} else if (isset($_GET['constructor'])) {
  echo $client->getConstructorCars($_GET['constructor']);

// getAllCars
} else {
  echo $client->getAllCars();
}