
<?php
include 'config.php';
include 'class.movie.php';
header('Content-Type: application/json');
$movie = new movie();
$list=$movie->get_movie();
echo "{\"movie\":";
echo json_encode($list);
echo "}";
?>