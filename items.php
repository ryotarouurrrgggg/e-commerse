<?php
@include 'connect.php';

if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['price_name'];
    $product_type = $_POST['type_control'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1 ;

    $select_cart = mysqli_query($conns, "SELECT * FROM `cart` WHERE name= '$product_name'");

    if(mysqli_num_rows($select_cart) > 0){
        $message[] ='product already add to cart';
    }else{
        $insert_product = mysqli_query($conns, "INSERT INTO `cart` (name,price,options,image,quantity) VALUES('$product_name' ,'$product_price','$product_type','$product_image', '$product_quantity')");
        $message[] ='product already add to cart success';
    }
}
if(isset($_POST['cari'])) {
    $querry = mysqli_query($conns, "SELECT * FROM `product_db` WHERE name  LIKE '%".
    $_POST['cari']."%'"
);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylez.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
<header class="header">
    <a href="" class="logo"><img src="image/AFD010B3-4DBA-44AE-9C37-7D1983E0301B-removebg-preview.png" alt="">Game Store</a>
    <form action="" class="search-from" method="get">
        <input type="search" placeholder="search here..." name=""
        id="search-box">
        <label for="search-box" class="fas fa-search cari"></label>
    </form>

    <div class="icons">
    <?php
        
        $select_rows = mysqli_query($conns, "SELECT * FROM `cart`");
        $row_count = mysqli_num_rows($select_rows);

        ?>
        <div id="cart-btn" class="fas fa-shopping-cart"><a href="cart.php">here</a><span><?php echo $row_count; ?></span></div>
    </div>
  </header>
   <nav class="mavbar">
    <a href="index.php"><i class="fa-solid fa-house"></i>home</a>
    <a href="items.php"><i class="fa-solid fa-compact-disc"></i>product</a>
    <a href="contact.php"><i class="fa-solid fa-phone"></i>contact</a>
    <a href="credits.php"><i class="fa-solid fa-user-secret"></i>credits</a>
   </nav>

   <section class="products">

   <h1 class="head">latest products</h1>
   <div class="box-container">

    <?php
    
    $select = mysqli_query($conns,"SELECT * FROM `product_db`");
    if(mysqli_num_rows($select) > 0) {
    while($row = mysqli_fetch_assoc($select)){

    ?>
    <form action="" method="post">
        <div class="box">
            <img src="uploaded_img/<?php echo $row['image']; ?>" height="250px" width="250px "alt="">
            <h2><?php echo $row['name'];?></h2>
            <h3>$<?php echo $row['price'];?></h3>
            <button class="btnz"><?php echo $row['options'];?></button>
      <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
      <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
      <input type="hidden" name="price_name" value="<?php echo $row['price']; ?>">
      <input type="hidden" name="type_control" value="<?php echo $row['options']; ?>">
        <input type="submit" class="btn" value="add to cart" name="add_to_cart">
        <a href="details.php?id=<?php echo $row['id'] ; ?>" class="btn">Details</a>
        </div>
    </form>
    <?php
    };
    };
    ?>
    </div>

   </section>
</body>
</html>