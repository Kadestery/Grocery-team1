<?php session_start(); ?>
<!DocTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

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

    <style>
        label {
            display: block;
            padding-left: 15px;
            text-indent: -15px;
        }

        input {
            width: 15px;
            height: 15px;
            padding: 0;
            margin: 0;
            vertical-align: bottom;
            position: relative;
            top: -1px;
        }
    </style>

</head>

<body>
    <!-- Header -->
    <div id="header"></div>
    <!--END OF HEADER-->


    <main>

        <form action="#" method="post">

            <div class="login-container">

                <h1 class="section-title"><span>Sign up</span></h1>

                <input type="text" name="name" placeholder="enter your name"><br>

                <input type="text" name="email" placeholder="enter email"> <br>

                <input type="password" name="pwd" placeholder="enter password"><br>

                <input type="password" name="pwdrepeat" placeholder="enter password again"><br>

                <input type="text" name="postal" placeholder="enter your postal code"><br>

                <a href="./p5_login.php">I already have an account</a><br>

                <a href="#" type="submit" name="operationtype" value="signup" class="login-btn"> Sign up Now </a>
            </div>
        </form>

    </main>


    <!---- Footer --->
    <div id="footer"></div>


    <script src="js/script.js"></script>
</body>

</html>