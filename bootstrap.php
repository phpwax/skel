<?php

use MyApp\Application;


if(isset($_SERVER["ENV"])) $env = $_SERVER["ENV"];
else $env = "production";
$app = new Application($env, true);
$response = $app->handle();
$response->send();