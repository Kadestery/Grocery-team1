<?php session_start(); ?>
<!DocTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aisles page</title>

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
        $(function() {
            $('#header').load("./assets/php/header.php");
        });
    </script>
</head>

<body>
    <!-- Header -->
    <div id="header"></div>
    <!--END OF HEADER-->

    <main>
        <!-- product list -->
        <section>
            <h1 class="section-title"><span>Our Fresh Meat</span></h1>


            <!-- the files path will have to be changed -->
            <div class="row">

                <div class="col-4">
                    <div class="product">
                        <a href="./p3_Steak.php">
                            <img src="./images/Steak.jpg" alt="Steak">
                            <h4 class="aisle-text">AAA Angus Steak</h4>
                            <p class="aisle-text">$36.50/kg</p>
                        </a>
                    </div>
                </div>


                <div class="col-4">
                    <div class="product">
                        <a href="./p3_Chicken.php">
                            <img src="./images/Chicken.jpg" alt="Chicken">

                            <h4 class="aisle-text">Whole Chicken</h4>
                            <p class="aisle-text">$13.46/unit</p>
                        </a>
                    </div>
                </div>


                <div class="col-4">
                    <div class="product">
                        <a href="./p3_Ribs.php">
                            <img src="./images/Ribs.jpg" alt="Pork Ribs">
                            <h4 class="aisle-text">Pork Ribs</h4>
                            <p class="aisle-text">$7.49/pack</p>
                        </a>
                    </div>
                </div>



            </div>

        </section>

        <div class="page-btn">
            <h2 class="span1">Page</h2>
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#85943 </span>
        </div>
        </div>

    </main>

    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->


        <script src="js/script.js"></script>
</body>

</html>