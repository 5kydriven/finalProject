<?php
    include 'connect.php';
    session_start();
    $id = $_SESSION['id'];

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $oldpass = mysqli_real_escape_string($conn, md5($_POST['currentpass']));
    $newpass = mysqli_real_escape_string($conn, md5($_POST['newpass']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['confirmpass']));

    if(isset($_POST['save'])){
        $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'"));
        $pass = $row['password'];

        if($oldpass != $pass){
            header('location: ../HTML/account.php?error=Current password invalid!');
        } else {
            if($newpass != $cpass){
                header("location: ../user/editAcc.php?error=Password don't match!");
            } else{
                mysqli_query($conn, "UPDATE user SET password = '$newpass', username = '$username' WHERE id = '$id'");
                header('location: ../HTML/account.php?success=Your account has been updated succesfully.');
            }  
        } 
    }

