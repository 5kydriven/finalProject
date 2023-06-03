<?php
    include '../php/connect.php';
    session_start();
    $id = $_SESSION['id'];
    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user where id = '$id'"));

    if(isset($_GET['logout'])){
        unset($id);
        session_destroy();
        header('location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="icon" href="../icon/bg-transparent.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <!-- Navagation part of the website -->
    <div class="container">  
        <div class="navbar">
            <div class="logo">
                <img src="../icon/bg-transparent.png" height="100px">
                <div class="profile">
                <center>
                    <div class='modal'>
                        <form action="../php/update.php" method="post">
                            <input type="text" name="name" value="<?= $row['name']; ?>">
                            <button name="saveAcc" class="save">Save</button>
                        </form>
                    </div>
                    <div class="edit-display">
                        <label>
                            <?=$row['name'];?>
                        </label>
                        <button class="editbtn">
                            <i class="fa-solid fa-pen-to-square fa-sm"></i>
                        </button>
                    </div>
                </center>
                </div>
            </div>
            
            <!-- <hr> -->
            <nav>
                <a href="user.php">
                    <div class="nav-btn ">
                        <i class="fa-solid fa-house fa-xl"></i> 
                        <p>Home page</p>
                    </div>
                </a>
                <a href="account.php ">
                    <div class="nav-btn active">
                        <i class="fa-solid fa-user fa-xl"></i> 
                        <p>Account Profile</p>
                    </div>
                </a>
            </nav>
            <!-- <hr> -->

            <a class="btn-container" href="account.php?logout=<?= $id ?>">
                <button><i class="fa-solid fa-right-from-bracket fa-xl"></i> Logout</button>
            </a>
        </div>

        <div class="main-acc">
            <h1>Account Settings</h1>
            <h2>Security</h2>
            <div class="main-container">
                <?php if(isset($_GET['error'])) {?>
                <div class="error alert">
                    <strong><?php echo $_GET['error'];?></strong>
                </div>
                <?php } ?>
                <?php if(isset($_GET['success'])) { ?>
                    <div class="error success">
                        <strong><?php echo $_GET['success'];?></strong>
                    </div>
                <?php } ?>
                <form action="../php/account.php" method="post">
                    <div class="field">
                        <div class="field-row">
                            <label>Username</label>
                            <input type="text" name="username" value="<?= $row['username'];?>">
                        </div>
                        <div class="field-row">
                            <label>Current Password</label>
                            <input type="password" name="currentpass" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="field-row">
                            <label>New Password</label>
                            <input type="password" name="newpass" required>
                        </div>
                        <div class="field-row">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmpass" required>
                        </div>
                    </div>
                    <div class="main-btn">
                        <button name="save">Save Changes</button>
                    </div>
                </form>
            </div>
            
        </div>
</body>
<script src="../Javascript/user.js"></script>
</html>