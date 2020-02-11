
<?php
$json = file_get_contents("https://exe2.herokuapp.com/json.php");

$data = json_decode($json,true);
$list = $data['title'];


?>

<h1>  Movies </h1>

<table border="1px">
    <tr>
        <td>Title</td>
        <td>Director</td>
        <td>Release Date</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['title'];?></td>
        <td><?php echo $value['director'];?></td>
        <td><?php echo $value['release'];?></td>
    </tr>
<?php
}
?>
</table>