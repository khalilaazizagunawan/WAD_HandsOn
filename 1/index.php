<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM product ORDER BY id_product DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New Product</a><br/><br/>

<table width='80%' border=1>
<tr>
    <th>Name</th> <th>Stock</th> <th>Price</th> <th>Update</th>
</tr>
<?php  
while($product_data = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td>".$product_data['name_product']."</td>";
    echo "<td>".$product_data['stock_product']."</td>";
    echo "<td>".$product_data['price_product']."</td>";    
    echo "<td><a href='edit.php?id=$product_data[id_product]'>Edit</a> | <a href='delete.php?id=$product_data[id_product]'>Delete</a></td></tr>";        
}
?>
</table>
</body>
</html>
