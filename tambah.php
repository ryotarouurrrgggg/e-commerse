<?php 
@include 'connect.php';

if(isset($_POST['add_product'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['price_name'];
    $product_description = $_POST['product_description'];
    $product_type = $_POST['type_control'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'uploaded_img/'.$product_image;
    
if(empty($product_name)|| empty($product_price)|| empty($product_description)|| empty($product_type)|| empty($product_image)){
     $message[] = 'please fill out all';
    }else{
        $insertz = "INSERT INTO product_db (name, price, description, options, image) VALUES('$product_name', '$product_price', '$product_description', '$product_type', '$product_image')";
        $upload = mysqli_query($conns, $insertz);
        if($upload){
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message[] = 'new product succesfully';
        }else{
            $message[] = 'Gagal wir cok';
        }
    }
};

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conns, "DELETE FROM `product_db` WHERE id = $delete_id");
    if($delete_query){
        header('location:tambah.php');
        $message[] = 'product telah di hapus';
    }else{
        header('location:tambah.php');
        $message[] = 'product gagal di hapus';

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Pixelify+Sans:wght@400;500;600;700&family=Roboto+Condensed:wght@200&family=Roboto:ital,wght@0,100;1,400;1,900&family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link rel="stylesheet" href="stylez.css">
    <title>Document</title>
</head>
<body>
<?php

if(isset($message)){
    foreach($message as $message){
        echo '<span class="message">'.$message.'</span>';
    }
}
?>
    <div class="form">
        <h2><a href="">Game product store</a></h2>
    <button class="add"><i class="fa-solid fa-plus"></i>Add Product</button>
    </div>
    <div class="wrap">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype ="multipart/form-data">
    <h3 class="adds">Added Data</h3>
    <input type="text" placeholder="enter product name" name="product_name" class="box">
    <input type="number" min="0" placeholder="enter product price" name="price_name" class="box">
    <input type="text" placeholder="enter product name" name="product_description" class="box">
    <label for="">type
    <select type="text" placeholder="yoidd"  name="type_control"  class="box" >
          <option>ps4</option>
            <option>ps5</option>
            <option>Switch</option>
     </select></label>
            <input type="file" accept="image/png, image/jpg, image/jpeg" name="product_image" class="box">
            <input type="submit" class="btns" name="add_product" value="Add product here" >
            <a href="items.php" class="btn">Go back</a>
    </form>
    </div>




<div class="product-display">
<table class="product-display-table">

<thead>
    <tr>
        <th>product image</th>
        <th>product name</th>
        <th>product price</th>
        <th>product description</th>
        <th>product type</th>
        <th>update</th>
        <th>Action</th>
    </tr>
</thead>
<?php
 
$select = mysqli_query($conns,"SELECT * FROM `product_db`");
if(mysqli_num_rows($select) > 0) {
    while($row = mysqli_fetch_assoc($select)){

?>
<tr>
        <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100"alt=""></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['options']; ?></td>
        <td><a href="update.php?edit=<?php echo $row['id'] ?>" class="btns"><i class="fas fa-edit"></i> edit </a>
        <td><a href="tambah.php?delete=<?php echo $row['id'] ?>" class="btn"><i class="fas fa-trash"></i> delete </a>
    </td>
    </tr>


<?php };
}

?>
</table>
</div>

   
</body>
</html>