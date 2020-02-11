<?php 
include 'config.php';
include 'class.car.php';
header('Content-Type: application/json');
$car = new car();
$list=$car->get_tbl_car();
echo "{\"bag\":";
echo json_encode($list);
echo "}";
?>
