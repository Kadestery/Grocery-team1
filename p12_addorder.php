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
    </div>

    <div>
        <h1 class="bs-header"></br>Add an order

            <form action="" class="bs-add">
                <p>
                    <label class="bs-add"> Number Name: </label>
                    <input class="data-entering" type="text" name="itemdata[]" value="" id="ordernumber" />
                </p>
            </form>

            <form action="" class="bs-add">
                <p>
                    <label class="bs-add"> Client Name: </label>
                    <input class="data-entering" type="text" name="itemdata[]" value="" id="clientname" />
                </p>
            </form>

            <form action="" class="bs-add">
                <p>
                    <label class="bs-add"> Balance: </label>
                    <input class="data-entering" type="text" name="itemdata[]" value="" id="orderbalance" />
                </p>
            </form>

        </h1>
    </div>
    <!-- Temporary buttons just loop back to the previous page-->
    <div class="backstore-editing-buttons">
        <a href="p11_backstoreorders.php">
            <div class="btn">
                <label for="saveitm">Save</label>
                <input type="button" id="saveitm" name="saveitm">
            </div>
        </a>

        <a href="p11_backstoreorders.php">
            <div class="btn">
                <label for="cancel">Cancel</label>
                <input type="button" id="cancel" name="cancel">
            </div>
        </a>
    </div>

    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->

        <script src="js/script.js"></script>
</body>

</html>