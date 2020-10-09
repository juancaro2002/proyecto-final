<?php
require_once 'core/core.php';

$c = isset($_REQUEST['c'])  ? $_REQUEST['c'] : 'all';

$m = isset($_REQUEST['m'])  ? $_REQUEST['m'] : 'index';


require_once 'controllers/'.$c.'controller.php';
$c=$c.'controller';

$objeto= new $c();
$objeto->$m();




?>

