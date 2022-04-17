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
        $(function() {
            $('#header').load("./assets/php/header.php");
        });
    </script>
</head>

<body>
    <!-- Header -->
    <div id="header"></div>
    <!--END OF HEADER-->

    <div class="backstore-navigation-buttons">
        <a href="p7_backstore.php">
            <div class="btn">
                <label for="manageproducts">Manage products</label>
                <input type="button" id="manageproducts" name="manageproducts">
            </div>
        </a>

        <a href="p9_backstoreusers.php">
            <div class="btn">
                <label for="manageusers">Manage users</label>
                <input type="button" id="manageusers" name="manageusers">
            </div>
        </a>

        <a href="p11_backstoreorders.php">
            <div class="btn">
                <label for="manageorders">Manage orders</label>
                <input type="button" id="manageorders" name="manageorders">
            </div>
        </a>
    </div>

    <div>
        <h1 class="bs-header"></br>Product Inventory

            <form action="" class="backstore-forms" id="productBox">
                <p>
                    <input class="bs-checkbox" type="checkbox" name="products[]" value="apple" id="product" onclick="backstoreStyling()" />
                    <label class="bs-form-text"> Apple </label>
                </p>
            </form>

            <form action="" class="backstore-forms" id="productBox">
                <p>
                    <input class="bs-checkbox" type="checkbox" name="products[]" value="Banana" id="product" onclick="backstoreStyling()" />
                    <label class="bs-form-text"> Banana </label>
                </p>
            </form>

            <form action="" class="backstore-forms" id="productBox">
                <p>
                    <input class="bs-checkbox" type="checkbox" name="products[]" value="Cucumber" id="product" onclick="backstoreStyling()" />
                    <label class="bs-form-text"> Cucumber </label>
                </p>
            </form>

        </h1>
    </div>

    <div class="backstore-editing-buttons">
        <a href="p8_addproduct.php">
            <div class="btn">
                <label for="additm">Add product</label>
                <input type="button" id="additm" name="additm">
            </div>
        </a>

        <div class="btn">
            <label for="deleteitm">Delete product</label>
            <input type="button" id="deleteitm" name="deleteitm">
        </div>

        <a href="p8_editproduct.php">
            <div class="btn">

                <label for="edititm">Edit product</label>
                <input type="button" id="edititm" name="edititm">
            </div>
        </a>
    </div>

    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->

        <script src="js/script.js"></script>
</body>

</html>