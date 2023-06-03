<?php
    session_start();
    include 'connect.php';
    $id = $_SESSION['id'];

    $name = $_POST['name'];

    if(isset($_POST['save'])){
        mysqli_query($conn, "UPDATE user SET name ='$name' WHERE $id");
        header("location: ../HTML/user.php");
    }

    if(isset($_POST['saveAcc'])){
        mysqli_query($conn, "UPDATE user SET name ='$name' WHERE $id");
        header("location: ../HTML/account.php");
    }
