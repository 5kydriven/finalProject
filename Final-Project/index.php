<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/bg-transparent.png" type="image/x-icon">
    <title>Sign in</title>
    <!-- ! css file -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="bgAnimation" id="bgAnimation">
        <div class="backgroundAmim">
            
        </div>
    </div>
    <!-- <div class="container"> -->
      <div class="login-box">
        <div class="logo">
            <img src="icon/bg-transparent.png" height="100px" width="100px" >
            <h3>Information Assurance<br> And Security</h3>
        </div>
        <form action="php/verify.php" method="post">
          <?php if (isset($_GET['error'])) { ?>
            <div class="error">
                <strong><?php echo $_GET['error']; ?></strong>
            </div>
          <?php } ?>
          <div class="user-box top">
            <input type="text" name="username" required>
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required>
            <label>Password</label>
          </div>
          <!-- <div class="footer">
            <p>Don't have an account? <a href="register.html"><strong>Sign up</strong></a></p>
          </div> -->
          
          <button  class="btn" name="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <p>Login</p>
          </button>
          
        </form>
      </div>
    <!-- </div> -->
  </body>
<script src="Javascript/index.js"></script>
</html>