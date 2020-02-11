<?php 
include 'config.php';
include 'class.bag.php';
header('Content-Type: application/json');
$bag = new bag();
$list=$bag->get_bag();
echo "{\"bag\":";
echo json_encode($list);
echo "}";
?>
