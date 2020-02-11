<?php 
include 'config.php';
include 'class.car.php';
header('Content-Type: application/json');
$car = new car();
$list=$car->get_ID();
echo "{\"ID\":";
echo json_encode($list);
echo "}";
?>
