<?php
require_once 'core/core.php';

$c = isset($_GET['c']) ? $_GET['c'] : 'all';

$m = isset($_GET['m']) ? $_GET['m'] : 'index';


require_once 'controllers/'.$c.'controller.php';
$c=$c.'controller';

$objeto= new $c();
$objeto->$m();




?>

