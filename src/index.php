<?php 
require '../vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandLer;
$logger = new Logger('nomedocanal');
$logger->pushHandler(new StreamHandLer(__DIR__.'/App.log',logger::DEBUG));
$logger->info('Este e uma string de info, Jubileu');
$logger->warning('Isso e um warnstring');
$logger->error('Esta e uma msg de erro, cinco guerreiros');

$variable = array(1,17,"hello",null);
var_dump($variable);