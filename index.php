<?php
require_once 'core/core.php';

$c = isset($_GET['c']) ? $_GET['c'] : 'all';

$m = isset($_GET['m']) ? $_GET['m'] : 'index';


$c=$c.'Controller';
require_once 'controllers/'.$c.'.php';


$objeto = new $c();
$objeto->$m();






