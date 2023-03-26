<?php
// define("BASE_URL", "https://greenie.loca.lt/greenie");
define("BASE_URL", $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER["SERVER_NAME"]);
define("ASSETS", $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER["SERVER_NAME"] . "/public/assets");
define("DB_HOST", "127.0.0.1");
define("DB_USER", "usernob");
define("DB_PASS", "usernob");
define("DB_NAME", "mindalogi");
define("WEB_NAME", "Mindalogi");
