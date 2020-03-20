<?php
$id = @$_GET['id'];
$json2 = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
$data2 = json_decode($json2, true);
$categories = $data2['records'];
if ($id) {
	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id=' . $id);
	$data = json_decode($json, true);
}
?>

<link rel="stylesheet" href="style.css">
<div class="container">
	<form class="" action="pro_create.php" method="POST">
		<input class="form-control col-6 mb-3" type="hidden" name="id" value="<?php echo $id ?>" />
		<input class="form-control col-6 mb-3" type="text" name="name" value="<?php if($id) echo $data['name']?>" placeholder="name"/>
		<input class="form-control col-6 mb-3" type="text" name="description"  value="<?php if($id) echo $data['description']?>" placeholder="description"/>
		<input class="form-control col-6 mb-3" type="text" name="price"  value="<?php if($id) echo $data['price']?>" placeholder="price"/>
		<select name="category" id="" class="form-control">
			<?php foreach ($categories as $category) { ?>
				<option value="<?php echo $category['id'] ?>" <?php if ($id && $category['id'] == $data['category_id']) echo "selected" ?>><?php echo $category['name'] ?></option>
			<?php } ?>
		</select>
		<input class="btn btn-primary" type="submit" name="submit" value="submit"/>
	</form>
</div>
