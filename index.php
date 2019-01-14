<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

use Sinesp\Sinesp;

$veiculo = new Sinesp;
$placa = $_GET['placa'];

try {
    $veiculo->proxy('177.152.174.141', '8888');
    $veiculo->buscar($placa);

    echo '<pre>';
    var_dump($veiculo);
    die();

    if ($veiculo->existe()) {
        print_r($veiculo->dados());
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}