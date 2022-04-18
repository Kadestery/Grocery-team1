<?php

if(isset($_POST['login-submit'])){ 
    require 'dbh.php';

    $email = $_POST['email'];
    $password = $_POST['pwd'];

    if(empty($email) || empty($password)){
        header("Location: ../../p5_login.php");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){ 
            header("Location: ../../index.php?error=sqlerror");
            exit();
        }
        else{ 
            mysqli_stmt_bind_param($stmt, "s", $email); 
            mysqli_stmt_execute($stmt); 
            $result = mysqli_stmt_get_result($stmt); 
            if($row = mysqli_fetch_assoc($result)){ 
                $pwdCheck = password_verify($password, $row['pass']);
                if($pwdCheck == false){
                    header("Location: ../../p5_login.php?error=wrongpwd");
                    exit();
                }
                else if($pwdCheck == true){ 
                    session_start();
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['userName'] = $row['name'];
                    $_SESSION['userEmail'] = $row['email'];

                    header("Location: ../../index.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../../p5_login.php?error=wrongpwd");
                    exit();
                }
            }
            else{
                header("Location: ../../p5_login.php?error=emailDNE");
                exit();
            }
        }
    }
}
else {
    header("Location: ../../index.php");
    exit();
}