<?php
@include 'connect.php';

$id = $_GET['edit'];

if(isset($_POST['update_product'])){

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
        $update = "UPDATE product_db SET name='$product_name',price='$product_price',description='$product_description',options='$product_type',image='$product_image'
        WHERE id = $id ";
        $upload = mysqli_query($conns,$update);
        if($upload){
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
           
        }else{
            $message[] = 'Gagal wir cok';
        }
    }
};


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Pixelify+Sans:wght@400;500;600;700&family=Roboto+Condensed:wght@200&family=Roboto:ital,wght@0,100;1,400;1,900&family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
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

    <?php
    
    $select = mysqli_query($conns, "SELECT * FROM product_db WHERE id =$id");
    while($row = mysqli_fetch_assoc($select)){

    
    
    
    ?>




    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype ="multipart/form-data">
    <h3 class="adds">Added Data</h3>
    <input type="text" placeholder="enter product name"  name="product_name" class="box" value="<?php echo $row['name']; ?>">
    <input type="number" min="0" placeholder="enter product price" value="<?php echo $row['price']; ?>" name="price_name" class="box">
    <input type="text" placeholder="enter product name" value="<?php echo $row['description']; ?>" name="product_description" class="box">
    <label for="">type
    <select type="text" placeholder="yoidd"  name="type_control" value="<?php echo $row['options']; ?>" class="box" >
          <option>ps4</option>
            <option>ps5</option>
            <option>Switch</option>
     </select></label>
            <input type="file" accept="image/png, image/jpg, image/jpeg" name="product_image" class="box">
            <input type="submit" class="btns" name="update_product" value="update here" >
            <a href="tambah.php" class="btn">Go back</a>
    </form>
    <?php }; ?>
    </div>
</body>
</html> 