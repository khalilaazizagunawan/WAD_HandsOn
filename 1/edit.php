<?php
include_once("config.php");

if(isset($_POST['update'])) {	
    $id = $_POST['id_product'];
    $name = $_POST['name_product'];
    $stock = $_POST['stock_product'];
    $price = $_POST['price_product'];

    $stmt = $mysqli->prepare("UPDATE product SET name_product=?, price_product=?, stock_product=? WHERE id_product=?");
    $stmt->bind_param("siii", $name, $price, $stock, $id);
    $stmt->execute();

    header("Location: index.php");
    exit();
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$result = $mysqli->query("SELECT * FROM product WHERE id_product=$id");

if ($result->num_rows > 0) {
    $product_data = $result->fetch_assoc();
    $name = $product_data['name_product'];
    $price = $product_data['price_product'];
    $stock = $product_data['stock_product'];
} else {
    die("Produk tidak ditemukan!");
}
?>

<html>
<head>    
<head>    
    <title>Edit Product Data</title>
</head>

</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_product" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name_product" value="<?php echo $name; ?>"></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="number" name="price_product" value="<?php echo $price; ?>"></td>
            </tr>
            <tr> 
                <td>Stock</td>
                <td><input type="number" name="stock_product" value="<?php echo $stock; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_product" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
