<?
	require_once "MyTest.class.php";

	$oMyTest 	= new MyTest();

	$url 		= "http://www.sintegra.es.gov.br/resultado.php"; 
	$http_verb 	= "POST";
	$referer 	= null;
	$params 	= array("botao" => "Consultar", "num_cnpj" => "31.804.115-0002-43");

	$request	= $oMyTest->request($url, 'POST', $referer, $params);	
	$json 		= $oMyTest->myParse($request);

	echo $json;

?>