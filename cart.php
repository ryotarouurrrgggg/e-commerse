<?php
@include 'connect.php';

if(isset($_POST['update_update_btn'])){
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    $update_quantity_query = mysqli_query($conns, "UPDATE `cart` SET quantity ='$update_value' WHERE id ='$update_id'");
    if($update_quantity_query){
        header('location:cart.php');
    };
};

if(isset($_GET['delete'])){
    $remove_id = $_GET['delete'];
    mysqli_query($conns, "DELETE FROM `cart` WHERE id= '$remove_id'");
    
    header('location:cart.php');
};
if(isset($_GET['delete_all'])){
    mysqli_query($conns, "DELETE FROM `cart`");
    header('location:cart.php');
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
};
?>
<header class="header">
    <a href="" class="logo"><img src="image/AFD010B3-4DBA-44AE-9C37-7D1983E0301B-removebg-preview.png" alt="">Game Store</a>
    <form action="" class="search-from">
        <input type="search" placeholder="search here..."
        id="search-box">
        <label for="search-box" class="fas fa-search cari"></label>
    </form>
    <div class="icons">
    <?php
        
        $select_rows = mysqli_query($conns, "SELECT * FROM `cart`");
        $row_count = mysqli_num_rows($select_rows);

        ?>
        <div id="cart-btn" class="fas fa-shopping-cart"><span><?php echo $row_count; ?></span></div>
    </div>
  </header>
  <div class="containerz">
  <section class="shopping-cart">
    <h1 class="head">Shopping cart</h1>
<table>
    <thead>
        <th>Images</th>
        <th>name</th>
        <th>price</th>
        <th>Console</th>
        <th>quantity</th>
        <th>totalprice</th>
        <th>action</th>
    </thead>
    <tbody>
        <?php
        
        $select_cart = mysqli_query($conns, "SELECT * FROM `cart`");
        $grand_total= 0;
        if(mysqli_num_rows($select_cart) > 0){
            while($rows = mysqli_fetch_assoc($select_cart)){

        ?>
        <tr>
            <td class="gambar"><img src="uploaded_img/<?php echo $rows['image'];?>" alt="" width="190rem"></td>
            <td><?php echo $rows['name'];?></td>
            <td>$<?php echo number_format($rows['price']);?></td>
            <td><?php echo $rows['options'];?></td>
            <td><form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype ="multipart/form-data">
            <input type="hidden" name="update_quantity_id" value="<?php echo $rows['id'];?>">
                <input type="number" min="1" name="update_quantity" value="<?php echo $rows['quantity'];?>">
                <input type="submit" value="update" name="update_update_btn" >
            </form></td>
            <td>$<?php echo $sub_total = number_format($rows['price'] * $rows['quantity']);?></td>
            <td><a href="cart.php?delete=<?php echo $rows['id']; ?>" class="btns">delete</a></td>
        </tr>
        <?php
        $grand_total += $sub_total;
            };
        };
        ?>
        <tr class="table-bottom">
            <td><a href="items.php" class="btns">continue shopping</a></td>
            <td colspan="3">grand total</td>
            <td><?php echo $grand_total; ?></td>
            <td><a href="cart.php?delete_all" class="btns">delete all</a></td>
        </tr>
    </tbody>
</table>
  <div class="checkout-btn">
    <a href="checkout.php" class="btns <?= ($grand_total > 1)?'':'disabled'; ?>">Procced to checkout</a>
  </div>
  </section>
  </div>
</body>
</html>