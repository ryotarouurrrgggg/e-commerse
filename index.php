<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="stylez.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400;600;700&family=Roboto+Condensed:wght@200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Pixelify+Sans:wght@400;500;600;700&family=Roboto+Condensed:wght@200&family=Roboto:ital,wght@0,100;1,400;1,900&family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Pixelify+Sans:wght@400;500;700&display=swap" rel="stylesheet">
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
    <!-- slider -->
    <div class="slider">
        <div class="list">
            <div class="item active">
                <img src="image/re.jpg" alt="">
                <div class="content">
                    <img src="image/logore-removebg-preview.png" alt="">
                    <p class="p2"><span>aquaria</span><span><i class="fa-brands fa-playstation" style="--clr:crimson"></i>PS5,PS4 </span><span><i class="fa-brands fa-xbox" style="--clr:green"></i>Xbox One, Xbox Series X/S</span><span>Survival Horor</span><span>18+</span></p>
                    <h2>Sinopsis</h2>
                    <p>"Years after the tragic events of Resident Evil 7 biohazard, Ethan Winters has started over with his wife Mia, finally living in peace and putting the past behind them. However, Chris Redfield, the legendary hero from previous Resident Evil games, suddenly disrupts their life, throwing a devastated Ethan into a new and twisted nightmare in search of answers.</p>
                </div>
            </div> 
            <div class="item ">
                <img src="image/sword_art_online_alicization_lycoris.jpg" alt="">
                <div class="content">
                    <img src="image/saologo-removebg-preview.png" alt="">
                    <p class="p1"><span>Aquaria</span><span><i class="fa-brands fa-playstation" style="--clr:crimson"></i>PS5,PS4 </span> <span></span><span><i class="fa-brands fa-xbox" style="--clr:green"></i>Xbox One, Xbox Series X/S</span><span>Role-Playing</span><span>13+</span></p>
                    <h2>sinopsis</h2>
                    <p id="p1">Taking a different path than the original Sword Art Online anime, SWORD ART ONLINE Last Recollection will follow Kirito as he prepares to face a challenge like no other: the Underworld War. The gate to the Dark Territory cracks open, ready to unleash its terror upon the Human Realm, when a mysterious Dark Knight named Dorothy flies in with a mission for Kirito and his friends. They will once again have to fight to protect this world.</p>
                </div>
            </div> 
            <div class="item">
                <img src="image/fifs.jpeg" alt="">
                <div class="content">
                    <img src="image/logofifa-removebg-preview.png" alt="">
                    <p class="p3"><span>Fifa</span><span><i class="fa-brands fa-playstation" style="--clr:crimson"></i>PS5,PS4 </span> <span></span><span><i class="fa-brands fa-xbox" style="--clr:green"></i>Xbox One, Xbox Series X/S</span><span><i class="fa-solid fa-gamepad" style="--clr:black"></i></span>Nitendo<span><i class="fa-brands fa-windows" style="--clr:darkblue"></i>Microsoft Windows</span><span>Sport</span><span>13+</span></p>
                    <h2>sinopsis</h2>
                    <p>FIFA 23 adalah permainan video sepak bola yang diterbitkan oleh EA Sports. Ini adalah seri ke-30 dari seri FIFA yang dikembangkan oleh EA Sports, seri terakhir di bawah bendera FIFA, dan dirilis di seluruh dunia pada tanggal 30 September 2022 untuk Nintendo Switch, PlayStation 4, PlayStation 5, Windows, Xbox One, dan Xbox Series X/S.</p>
                </div>
            </div> 
            <div class="item">
                <img src="image/elite-four_cynthia02.jpg" alt="">
                <div class="content" id="content">
                    <img src="image/logo-removebg-preview.png" id="g4">
                    <p class="p4"><span>Pokemon</span><span>
                    <img src="image/Nintendo_Switch_Logo.svg" id="p4">Nitendo Switch </span> <span></span><span>Openworld</span><span>Role-Playing</span><span>11+</span></p>
                    <h2>sinopsis</h2>
                    <p>Brilliant Diamond and Shining Pearl tell the same story of a kid going on an adventure to catalog monsters before accidentally becoming the strongest fighter in the region and taking down an overt death cult with weird hair  you know, standard Pokémon stuff. There are no earth-shattering surprises, even after you beat the Elite Four and unlock the National Dex, and for the time being the Pokémon roster is limited to just the Pokémon that were available in Diamond, Pearl, and Platinum back in the day, so don’t expect newer favorites like Corviknight, Wooloo, or Toxtricity.</p>
                </div>
            </div> 
            <div class="item">
                <img src="image/swords.jpg" alt="">
                <div class="content" id="content">
                    <img src="image/sword_logo-removebg-preview.png" id="p4a">
                    <p class="p4"><span>Pokemon</span><span><img src="image/Nintendo_Switch_Logo.svg" id="p4">Nitendo Switch </span> <span></span><span>Openworld</span><span>Role-Playing</span><span>13+</span></p>
                    <h2>sinopsis</h2>
                    <p>Kisah utamanya relatif sederhana dan berkisar pada dua Pokémon legendaris misterius, perjalananmu menuju gelar juara, dan upaya Tim Yell yang jahat untuk memperlambat kemajuanmu. Pokémon Sword / Shield menampung ratusan Pokémon untuk kamu dapatkan di Poké-hunt, puluhan di antaranya baru. Selain Pokémon baru ini, ada beberapa Galarian Form dari Pokémon yang ada, seperti Galarian Meowth atau Galarian Zigzagoon, yang tidak hanya mengubah penampilan mereka tetapi juga merupakan varian yang sama sekali baru.</p>
                </div>
            </div> 
            </div> 
        </div>  
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div> 
    </div>
   
    
    <!-- thumbnail -->
    <div class="thumbnail">
        <div class="item active">
            <img src="image/recd-removebg-preview.png" alt="">
            <div class="content"></div>
        </div>
        <div class="item">
            <img src="image/cd_sao-removebg-preview.png" alt="">
            <div class="content"></div>
        </div>
        <div class="item"><img src="image/fifa-removebg-preview.png" alt="">
            <div class="content"></div>
        </div>
        <div class="item"><img src="image/OIP.jpeg" alt="">
            <div class="content"></div>
        </div>
        <div class="item"><img src="image/sword_cd-removebg-preview.png" alt="">
            <div class="content"></div>
        </div>
   
    </div>
    </div>
    <main>
        <article>
            <!-- banner hero -->
            <section class="section hero" id="home" aria-label="home">
                <div class="containerz">
                    <h1 class="heading">Game by<span>Genres</span><i class="fa-solid fa-otter"></i></h1>
                    <ul class="hero-list">
                        <li>
                        <div class="herocard">
                            <figure class="card-banner img-holder" style="--width:285; --height:406;">
                            <img src="banner/survival.jpg" width="285" height="406" alt="ArtDocoHome" class="img-cover" id="img1">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="#" class="card-title" style="--clr:#7C1010">SURVIVAL</a>
                                </h3>
                                <p class="card-text">Games</p>
                                <button  href="items.php" class="btns">view now </button > 
                            </div>
                        </div>
                    </li> 
                    <li class="colspan-2">
                        <div class="herocard">
                            <figure class="card-banner img-holder" style="--width:580; --height:409;"id="img3">
                            <img src="banner/gta.jpg" width="580" height="409" alt="gta games" class="img-cover" >
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="#" class="card-title" style="--clr:#F3FE00">ACTION</a>
                                </h3>
                                <p class="card-text">Games</p>
                                <button  href="items.php" class="btns">view now</button > 
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="herocard">
                            <figure class="card-banner img-holder" style="--width:285; --height:396;">
                            <img src="banner/openworld.jpg" width="285" height="396" alt="pokemon games" class="img-cover" id="img2">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="#" class="card-title" style="--clr:#2E4053">OPEN WORLD</a>
                                </h3>
                                <p class="card-text">Games</p>
                                
                                <button  href="items.php" class="btns">view now </button > 
                            </div>
                        </div>
                    </li>
                    <li class="colspan-2">
                        <div class="herocard">
                            <figure class="card-banner img-holder" style="--width:580; --height:403;">
                            <img src="banner/fifa.jpeg" width="580" height="403" alt="fifa games" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="#" class="card-title" style="--clr:#2980B9">SPORT</a>
                                </h3>
                                <p class="card-text">Games</p>
                                <button  href="items.php" class="btns">view now </button > 
                            </div>
                        </div>
                    </li>
                    <li class="colspan-2">
                        <div class="herocard">
                            <figure class="card-banner img-holder" style="--width:580; --height:403;">
                            <img src="banner/cod.webp" width="580" height="403" alt="cod games" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <h3>
                                <a href="#" class="card-title" style="--clr:#16A085">MMORPG</a>
                                </h3>
                                <p class="card-text">Games</p>
                                <button href="items.php" class="btns">view now</button> 
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>

            </section>
        </article>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="java.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>