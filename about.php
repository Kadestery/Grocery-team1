<?php session_start(); ?>
<!DocTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fifty Ten | About</title>
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
    <!---END OF HEADER-->
    <h1 class="About-header"> ABOUT US</h1>
    <div>
        <div class="About-us-background">

            Hello!
            <br>Thank you for visiting <b>50/10</b>,
            <br>We are a group of students from Concordia University
            <br>studying software engineering,
            <br>trying to make a living off of selling products.
            <br>You make that possible through buying our products!<br>

            <img class="Student-pic" src="/images/Students1.JPG">

        </div>
    </div>

    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->

        <script src="js/script.js"></script>
</body>

</html>