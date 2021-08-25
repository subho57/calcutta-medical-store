<?php
require 'db.php';

$sel = $con->query("select * from code");
$myarray = array();
while ($row = $sel->fetch_assoc()) {
    $myarray[] = $row;
}
$returnArr = array("data" => $myarray, "ResponseCode" => "200", "Result" => "true", "ResponseMsg" => "Country Code List Found!");
echo json_encode($returnArr);
