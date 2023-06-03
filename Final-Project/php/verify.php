<?php
    session_start();
        if(isset($_POST['submit'])){
            include('connect.php');
    
            $username = $_POST['username'];
            $password = md5($_POST['password']);
    
            $sql = "SELECT * FROM user WHERE username=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "error";
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($result);
                $pass = $row['password'];
                $_SESSION['id'] = $row['id'];
                if($password != $pass){
                    header('location: ../index.php?error=Incorrect username or password!');
                    exit();
                } else {
                    header('location: ../HTML/user.php');
                    exit();
                }
            }
        } else {
            header('location: login.html');
            exit();
        }