<?php
use core\Router;
use core\Request;
require_once "vendor/autoload.php";

require 'core/bootsrap.php';
Router::load('app/routes.php')
->direct(Request::uri(),Request::method());


 