<?php
$directory = "assets/scss";

require "vendor/leafo/scssphp/scss.inc.php";
scss_server::serveFrom($directory);