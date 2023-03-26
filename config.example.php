<?php
// define("BASE_URL", "https://greenie.loca.lt/greenie");
$protocol = isset($_SERVER['HTTPS']) ? "https" : "http";
define("BASE_URL", $protocol . "://" . $_SERVER["SERVER_NAME"]);
define("ASSETS", $protocol . "://" . $_SERVER["SERVER_NAME"] . "/public/assets");
define("DB_HOST", "127.0.0.1");
define("DB_USER", "usernob");
define("DB_PASS", "usernob");
define("DB_NAME", "mindalogi");
define("WEB_NAME", "Mindalogi");
