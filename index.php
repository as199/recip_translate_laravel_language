<?php


use Atpro\Translate\service\TranslateService;

require_once 'vendor/autoload.php';
ini_set('max_execution_time', 300000000);

$from = 'en';
 $to = ['fr','es','it', 'de'];


$tr = new TranslateService();

try {
    $tr->translateOld('./lang/en','./lang', $from, $to);

} catch (ErrorException $e) {
    die($e->getMessage());
}


