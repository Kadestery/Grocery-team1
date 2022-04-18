<?php 

    include('./assets/php/header.php');


?>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="./css/styles.css" rel="stylesheet" type="text/css">
</head>
<body class="login-bg">
        <br><br><br>
        <!--div class="container login border rounded">
        
        
        <form class="form-group" action="assets/php/p5_loginPhp.php" method="post">
                <div class="textbox">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <input class="form-control" type="email" id="loginEmail" name="email" placeholder="Email" onmouseover="this.focus();">
                </div>
                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input class="form-control" type="password" id="loginPass" name="pwd" placeholder="Password" onmouseover="this.focus();"></br>
                </div>
                <div class="form-check pr-0 pt-1">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                    <button href="index.php" class="btn btn-danger mt-2" type="submit" name="login-submit" onclick="emptyLogin();">Sign in</button>
                    <div class="g-signin2 d-flex align-items-center justify-content-center pt-3" data-onsuccess="onSignIn"></div>
            </form>
            <p class="text-center font-weight-bold">Forgot password? <a href="p6-signup.php">Click here</a></p>
            <p class="text-center font-weight-bold">Not a member? <a href="p6-signup.php">Sign up now!</a></p>
        </div-->

    <main>
        <form action="./assets/php/p5_loginPhp.php" method="post">

            <div class="login-container">
                <h1 class="section-title"><span>Log in</span>
                <button style= "font-weight: bold;  font-size: 12pt"type="button" class="btn btn-outline-dark" data-toggle="collapse" data-target="#infoAdmin">Admin Access</button>
                    <div class="collapse" id="infoAdmin">
                        <br>
                        <div  class="alert alert-secondary" role="alert" style="font-size: 10pt;text-transform:lowercase">
                        admin credentials<br>
                        username: admin@5010.com<br>
                        password: admin
                        </div>
                    </div>
                </h1>

                <?php
                if(isset($_GET['error']) && $_GET['error'] == 'wrongpwd') 
                    echo '<p class="text-danger text-center">Incorrect password.</br>Please try again.</p>';
                else if(isset($_GET['error']) && $_GET['error'] == 'emailDNE')
                    echo '<p class="text-danger text-center">Unregistered email.</br>Please try again.</p>';
                ?>
                <div class="textbox">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <input style="text-transform:none" class="form-control" type="email" id="loginEmail" name="email" placeholder="Email" onmouseover="this.focus();">
                </div>
                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input style="text-transform:none" class="form-control" type="password" id="loginPass" name="pwd" placeholder="Password" onmouseover="this.focus();"></br>
                </div>
                <div class="form-check" style="margin-left:20%;">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember" style="padding-right:100px;">Remember Me</label>
                </div>
                <div>
                    <button href="./index.php" class="login-btn" type="submit" name="login-submit" onclick="emptyLogin();">Log in</button>
                </div>
                <br>
                <a style="margin-left:25%" href="https://alzheimer.ca/sites/default/files/documents/alzheimers-disease_getting-a-diagnosis_0.pdf" target="_blank">forgot your password?</a><br>

                <a style="margin-left:25%" href="./p6_signup.php">I don't have an account</a><br>
            </div>
        </form>
    </main>


    <!---- Footer --->
    <div id="footer"></div>
    <!---End Of Footer-->

    <script src="js/script.js"></script>

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script type="text/Javascript" src="js/p5_validation.js"></script>
    <script type="text/Javascript" src="js/p5_login.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>