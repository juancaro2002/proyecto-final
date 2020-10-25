<?php

session_start();
session_destroy();
header("location:?c=Index&m=index");

?>