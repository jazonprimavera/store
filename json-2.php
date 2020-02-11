<style>

    .content{
        display: flex;
        justify-content: center;
    }
	table{
		border: 1px solid black;
		width: 100%;
		text-align: center;
		
	}
	th, td{
		border: 1px solid #ddd;
		padding: 10px;

	}
    tr:nth-child(even) {background-color: pink;}
	a {
		color: #66fcf1;
	}
    .head{
		background-color: #45a29e;
		color: #1f2833;
		font-weight: bold;
	}
</style>


<?php
$json = file_get_contents('https://new-app-json.herokuapp.com/json-1.php');

$data = json_decode($json,true);
$list = $data['pets'];
//$list = $data['pets'][1];


//var_dump($data);
//echo "<pre>";

//print_r($list);
?>
<div class="content">
<h1>Pets</h1>
</div>
<div class="content">
<table border="1px">
    <tr class="head">
        <td>Pet ID</td>
        <td>Pet Name</td>
        <td>Pet Type</td>
        <td>Pet Age</td>
        <td>Pet Color</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['pet_id'];?></td>
        <td><?php echo $value['pet_name'];?></td>
        <td><?php echo $value['pet_breed'];?></td>
        <td><?php echo $value['pet_age'];?></td>
        <td><?php echo $value['pet_color'];?></td>
    </tr>
 
<?php
}
?>
</table>
</div>