<?php session_start(); ?>
<!DocTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fifty Ten</title>

    <!-- boxicon link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- import css -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- favicon (title of page image) -->
    <link rel="icon" href="/images/favicon.JPG" sizes="32x32" type="image/JPG">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integity="sha256-2Kok7Mb0yxpgUVvAk/H32jig0SYS2auk4Pfzbm7uH60=" crossorigin "anonymous"></script>
    <script>
        $(function() {
            $('#footer').load("./assets/php/footer.php");
        });
    </script>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <a href="#home" class="logo"> <i class="bx bxs-cricket-ball"></i> 50/10</a>
        <!-- menu -->
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#aisles" id="aisles-btn">Aisles</a>
            <a href="./about.php">about us</a>
            <a href="./p7_backstore.php">Backstore</a>
        </nav>
        <div class="aisles-menu">
            <a href="./p2_fruitaisle.php">Fruits</a>
            <a href="./p2_VegetablesAisle.php">Vegetables</a>
            <a href="./p2_DairyAisle.php">Dairy</a>
            <a href="./p2_MeatAisle.php">Meat</a>
            <a href="./p2_PastryAisle.php">Pastry</a>
            <a href="./p2_SnacksAisle.php">Snacks</a>
            <a href="./p2_SeafoodAisle.php">Seafood</a>
            <a href="./p2_WaterAisle.php">Drinks</a>
        </div>
        <!-- buttons -->
        <div class="icons">
            <div class='bx bx-menu-alt-right' id="menu-btn"></div>
            <div class='bx bx-search-alt' id="search-btn"></div>
            <div class='bx bx-cart' id="cart-btn"></div>
            <div class='bx bx-log-in-circle' id="log-btn"></div>
        </div>
        <!-- search -->
        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="Search...">
            <label for="search-box" class="bx bx-search-alt"></label>
        </form>
        <!-- cart -->
        <div class="cart">
            <div class="box">
                <i class='bx bx-trash'></i>
                <img src="./images/k.jpg" alt="">
                <div class="content">
                    <h3>Name</h3>
                    <span class="price">price$</span>
                    <span class="quantity">qty: variable</span>
                </div>
            </div>
            <div class="box">
                <i class='bx bx-trash'></i>
                <img src="./images/k.jpg" alt="">
                <div class="content">
                    <h3>name</h3>
                    <span class="price">price$</span>
                    <span class="quantity">qty: variable</span>
                </div>
            </div>
            <div class="total">total: totalPrice$</div>
            <a href="./p4_cart.php" class="btn">Review Items</a>
        </div>

        <!-- login -->

        <form action="" class="login-form">
            <h3>log in</h3>
            <input type="email" placeholder="enter email" class="box">
            <input type="password" placeholder="enter password" class="box">
            <br>
            <a href="https://alzheimer.ca/sites/default/files/documents/alzheimers-disease_getting-a-diagnosis_0.pdf" target="_blank">forgot your password?</a>

            <a href="./p6_signup.php">Create An Account</a>
            <a href="#" class="btn"> Login Now </a>
        </form>
    </header>
    <!--END OF HEADER-->

    <!-- HOME -->
    <div class="home" id="home">
        <div class="home-text">
            <h1 class="section-title">Fresh and bio grocery store</h1>
            <p>Start eating better today by browsing our vast selection of fresh local produce</p>
        </div>
    </div>
    <!-- End of home -->
    <!-- SPECIAL -->
    <section>
        <h1 class="section-title">our <span>featured</span>products !</h1>
        <div class="special">
            <div class="content">
                <div class="featured">
                    <h1>This is how I like my milk</h1>
                    <p>Freshly pressed</p>
                    <div class="f-util">
                        <a href="./p2_DairyAisle.php" class="btn">Try now!</a>
                        <div class="switch">
                            <a href=""><i class='bx bx-chevron-left'></i></a>
                            <a href=""><i class='bx bx-chevron-right'></i></a>
                        </div>
                    </div>
                </div>
                <div class="sale">
                    <h1>50% off</h1>
                    <p>on NUTS</p>
                    <a href="./under construction.php" class="btn">Shop now!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- aisles -->
    <section class="aisles" id="aisles">
        <h1 class="section-title">Our<span>aisles</span></h1>
        <ul class="aisle-group">
            <li class="aisle">
                <a href="./p2_fruitaisle.php">
                    <i class="bx bx-chevron-right icon"></i>
                    <img src="./images/Fruits.jpg" alt="">
                    <h2 class="aisle-text">Fruits</h2>
                </a>
            </li>
            <li class="aisle">
                <a href="./p2_VegetablesAisle.php">
                    <i class="bx bx-chevron-right icon"></i>
                    <img src="./images/vegetables.jpg" alt="">
                    <h2 class="aisle-text">Vegetables </h2>
                </a>
            </li>
            <li class="aisle">
                <a href="./p2_DairyAisle.php">
                    <i class="bx bx-chevron-right icon"></i>
                    <img src="./images/Dairy.jpg" alt="">
                    <h2 class="aisle-text">Dairy</h2>
                </a>
            </li>
            <li class="aisle">
                <a href="./p2_MeatAisle.php">
                    <i class="bx bx-chevron-right icon"></i>
                    <img src="./images/Meat.jpg" alt="">
                    <h2 class="aisle-text">Meat</h2>
                </a>
            </li>
            <li class="aisle">
                <a href="./p2_PastryAisle.php">
                    <i class="bx bx-chevron-right icon"></i>
                    <img src="./images/Pastry.jpg" alt="">
                    <h2 class="aisle-text">Pastry</h2>
                </a>
            </li>
            <li class="aisle">
                <a href="./p2_SnacksAisle.php">
                    <i class="bx bx-chevron-right icon"></i>
                    <img src="./images/Snacks.jpg" alt="">
                    <h2 class="aisle-text">Packaged Goods</h2>
                </a>
            </li>
            <li class="aisle">
                <a href="./p2_SeafoodAisle.php">
                    <i class="bx bx-chevron-right icon"></i>
                    <img src="./images/Seafood.jpg" alt="">
                    <h2 class="aisle-text">Seafood</h2>
                </a>
            </li>
            <li class="aisle">
                <a href="./p2_WaterAisle.php">
                    <i class="bx bx-chevron-right icon"></i>
                    <img src="./images/Water.jpg" alt="">
                    <h2 class="aisle-text">Drinks</h2>
                </a>
            </li>
        </ul>
    </section>

    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->

        <script src="js/script.js"></script>
</body>

</html>