
<?php
$json = file_get_contents('https://devicedata.herokuapp.com//json.php'); 

$data = json_decode($json,true);
$list = $data['ID'];
?>
<h1> CARS </h1>
<?php
foreach($list as $value){
    ?>
    <ul>
        <h2><?php echo $value['model'];?></h2>
        <li>description: <?php echo $value['description'];?></li>
        <li>color: <?php echo $value['color'];?></li>
        <li>capacity: <?php echo $value['capacity'];?></li>
    </ul>
 
<?php
}
?>
