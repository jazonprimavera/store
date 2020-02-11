
<?php
$json = file_get_contents('https://jazon.herokuapp.com//json.php'); 

$data = json_decode($json,true);
$list = $data['bag'];
?>
<h1> PRODUCTS </h1>
<?php
foreach($list as $value){
    ?>
    <ul>
        <h2><?php echo $value['brand'];?></h2>
        <li>description: <?php echo $value['description'];?></li>
        <li>capacity: <?php echo $value['capacity'];?></li>
        <li>color: <?php echo $value['color'];?></li>
    </ul>
 
<?php
}
?>
