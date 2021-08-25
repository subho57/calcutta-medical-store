<?php
require dirname(dirname(__FILE__)) . '/include/dbconfig.php';
// Set Cache-Control header
header('Cache-Control: max-age=3600');
// Set Content-Type header
header('Content-Type: application/json; charset=UTF-8');