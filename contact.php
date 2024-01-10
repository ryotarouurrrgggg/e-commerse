<?php

@include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="stylez.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
<header class="header">
    <a href="" class="logo"><img src="image/AFD010B3-4DBA-44AE-9C37-7D1983E0301B-removebg-preview.png" alt="">Game Store</a>
    <form action="" class="search-from">
        <input type="search" placeholder="search here..."
        id="search-box">
        <label for="search-box" class="fas fa-search cari"></label>
    </form>
    <div class="icons">
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
    </div>
  </header>
   <nav class="mavbar">
    <a href="index.php"><i class="fa-solid fa-house"></i>home</a>
    <a href="items.php"><i class="fa-solid fa-compact-disc"></i></i>product</a>
    <a href="contact.php"><i class="fa-solid fa-phone"></i>contact</a>
    <a href="credits.php"><i class="fa-solid fa-user-secret"></i>credits</a>
   </nav>
    <div class="container1">
    <div class="container2">
        <div class="container3">
        <h2 class="headin">Contact us</h2>
        <div class="imgcontact">
            <img src="image/AFD010B3-4DBA-44AE-9C37-7D1983E0301B-removebg-preview.png" alt="">
            <p>The Wolves</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4682075505257!2d107.38631567589327!3d-6.4622124935293535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690cb580178b3b%3A0x7b11445698d6fdb2!2sG9QQ%2B4H6%2C%20Karanganyar%2C%20Kec.%20Klari%2C%20Karawang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1704799600294!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <div class="contact-alamat">
        <i class="fa-solid fa-location-dot"></i>
        <p>G9QQ+ Karanganyar,Karawang,JawaBarat</p>
        </div>
        <div class="contact-hp">
        <i class="fa-brands fa-whatsapp"></i>
        <p>085863610696</p>
        </div>
        <div class="contact-ig">
        <i class="fa-brands fa-instagram"></i>
        <a href="https://www.instagram.com/arul.haruhisa?igsh=MTRpbTZid2lndHAzNg==">
          instagram</a>
        </div>
        </div>
    </div>
    </div>
</body>
</html>