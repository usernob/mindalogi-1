<?php
// define("BASE_URL", "https://greenie.loca.lt/greenie");
$protocol = "https";
define("BASE_URL", $protocol . "://" . $_SERVER["SERVER_NAME"]);
define("ASSETS", $protocol . "://" . $_SERVER["SERVER_NAME"] . "/public/assets");
define("DB_HOST", "database");
define("DB_USER", "usernob");
define("DB_PASS", "usernob");
define("DB_NAME", "mindalogi");
define("WEB_NAME", "Mindalogi");
