<html>
<head>
	<title>Add Product</title>
</head>
 
<body>
	<a href="index.php">Back</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>stock</td>
				<td><input type="INT" name="stock"></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="INT" name="price"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$stock = $_POST['stock'];
		$price = $_POST['price'];
		
		include_once("config.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO product(name_product, stock_product, price_product) VALUES('$name','$stock','$price')");
		
		echo "User added successfully. <a href='index.php'>View Product</a>";
	}
	?>
</body>
</html>