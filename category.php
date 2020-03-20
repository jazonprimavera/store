<?php
$json = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
$list = json_decode($json, true);
$category = $list['records'];

echo @$_POST['category'];
?>
<link rel="stylesheet" href="style.css">
<form method="post" action="">
			<input type="text" name="prod_name" />
			<select name="category">
					<?php foreach($category as $item) { ?>
							<option value="<?php echo $item['name'] ?>" <?php if ($_POST['category'] == $item['name']) echo "selected" ?>><?php echo $item['name'] ?></option>
					<?php } ?>
			</select>
		
			<input type="submit" name="submit" value="submit">
</form>			