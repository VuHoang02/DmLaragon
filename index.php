<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];
var_dump($uri);
if ($uri === '/'){
    require 'controllers/index.php';
}else if ($uri === '/about'){
    require 'controllers/about.php';
}