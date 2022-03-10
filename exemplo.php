<?php 

require_once "vendor/autoload.php";


use Dell14\FormacaoPhp\Search;

$busca = new Search;

$resultado = $busca->getAddresFromZipcode('01001010');

print_r($resultado);

?>