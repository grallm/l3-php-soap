<?php
$dsn = "mysql:host=localhost;dbname=services_soap_cars";
$username = "root";
$password = "root";

// Create connection
$db = new PDO($dsn, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/**
 * Get all cars
 * 
 * @return array All cars found 
 */
function getAllCars() {
  global $db;

  $query = "SELECT * FROM cars";

  $statement = $db->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();

  return json_encode($result);
}

/**
 * Get all cars from a specific constructor
 * 
 * @param constructor Constructor name
 * @return array All cars found 
 */
function getConstructorCars($constructor) {
  global $db;

  $query = "SELECT * FROM cars WHERE constructor = :constructor";

  $statement = $db->prepare($query);
  $statement->bindValue(':constructor', $constructor);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();

  return json_encode($result);
}

/**
 * Get all cars from a specific constructor with a specific engine
 * 
 * @param constructor Constructor name
 * @param enging Engine name
 * @return array All cars found from this constructor and this engine
 */
function getCarsEngineConstructor($constructor, $engine) {
  global $db;

  $query = "SELECT * FROM cars WHERE constructor = :constructor AND engine = :engine";

  $statement = $db->prepare($query);
  $statement->bindValue(':constructor', $constructor);
  $statement->bindValue(':engine', $engine);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();

  return json_encode($result);
}

ini_set("soap.wsdl_cache_enabled", 0);
$server = new SoapServer("cars.wsdl");
$server->addFunction("getAllCars");
$server->addFunction("getConstructorCars");
$server->addFunction("getCarsEngineConstructor");
$server->handle();
?>