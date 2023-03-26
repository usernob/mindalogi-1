<?php
// define("BASE_URL", "https://greenie.loca.lt/greenie");
define("BASE_URL", $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER["SERVER_NAME"]);
define("ASSETS", $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER["SERVER_NAME"] . "/public/assets");
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "mindalogi");
define("WEB_NAME", "Mindalogi");
