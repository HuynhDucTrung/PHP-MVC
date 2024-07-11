<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>
    <form action="index.php?action=update" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>"><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" value="<?= $product['price'] ?>"><br>
        <input type="submit" value="Submit">
    </form>
    <a href="index.php?action=delete&id=<?= $product['id'] ?>">Delete</a>
    <a href="index.php">Back to Products</a>
</body>

</html>