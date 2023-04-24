<?php

require_once(__DIR__ . "/util/DotEnv.php");

$dot = new DotEnv(__DIR__ . '/.env');
$dot->load();

echo getenv('DB_HOST').'<br/>';
echo getenv('DB_USERNAME').'<br/>';
echo getenv('DB_PASSWORD').'<br/>';
echo getenv('DB_NAME').'<br/>';
?>