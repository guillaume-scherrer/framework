<?php
$PDO=NULL;
function connect_to_db(){

	$dbengine='mysql';
	$dbhost='127.0.0.1';
	$dbname='rentree';
	$dbuser='rentree';
	$dbpassword='rentree';

	try{
		$pdo = new PDO("".$dbengine.":host=$dbhost; dbname=$dbname", $dbuser,$dbpassword);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		return $pdo;
	}
	catch(PDOException $e){
		$e->getMessage();
		echo "Une erreur est survenue: $e";
		die();
	}
}

/*require 'getData.php';*/
	function getAll($connection){
		$request = $connection->prepare( "SELECT * FROM `document` WHERE 1");
		$result = $request->execute();
		return $result;
	}
?>