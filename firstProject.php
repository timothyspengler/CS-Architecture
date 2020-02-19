<?php
    header('Access-Control-Allow-Origin: *');
    // header('Access-Control-Allow-Methods: GET, POST');
    header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
    header("Content-Type: application/json");
    // build a PHP variable from JSON sent using POST method
    $v = json_decode(file_get_contents("php://input"));
    echo "Total Employees";
?>
