<?php

date_default_timezone_set("PRC");

include_once 'functions.php';
include_once 'aliyunSDK/openapi.php';
include_once 'autoloader.php';

$patr = new \Services\Patr();
dump($patr);