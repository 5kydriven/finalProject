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
    <title>Homepage</title>
    <link rel="icon" href="../icon/bg-transparent.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body id="body">
    
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
                            <button name="save" class="save">Save</button>
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
                
                <a href="user.php" class="nav-link">
                    <div class="nav-btn active">
                        <i class="fa-solid fa-house fa-xl"></i> 
                        <p>Home page</p>
                    </div>
                </a>
                
                <a href="account.php">
                    <div class="nav-btn">
                        <i class="fa-solid fa-user fa-xl"></i> 
                        <p>Account Profile</p>
                    </div>
                </a>
                
            <div class="indicator"></div>
            </nav>
            <!-- <hr> -->

            <a class="btn-container" href="user.php?logout=<?= $id ?>">
                <button><i class="fa-solid fa-right-from-bracket fa-xl"></i> Logout</button>
            </a>
        </div>

        <!-- Contents of the website -->
        <div class="main">
            <div class="mandate box">
                <div class="box-left boxes ">
                    <img src="../images/cpsu.jpg" height="150px" width="269px">
                </div>
                <div class="box-right boxes ">
                    <h1>Mandate</h1><br>
                    <p>The University shall primary provide advanced education, higher technological professional instruction and training in agriculture/fisheries, animal science, forestry, education, computer studies, engineering, arts and sciences and other relevant field of study. It shall also promote and undertake research, extension services and provide progressive leadership in its area of specialization.</p>
                </div> 
            </div>
            <div class="philosophy box">
                <div class="box-left boxes ">
                    <h1>Philosophy</h1><br>
                    <p>Decent, affordable education for sustainable productivity and global competitiveness under an atmosphere of academic freedom.</p>
                </div> 
                <div class="box-right  boxes ">
                    <img src="../images/philosophy.jfif" height="150px" width="269px">
                </div>         
            </div>
            <div class="mission box">
                <div class="box-left boxes ">
                    <img src="../images/mission.png" height="150px" width="269px">
                </div>
                <div class="box-right boxes ">
                    <h1>Mission</h1><br>
                    <p>CPSU is commited to produce competent graduates who can generate and extend leading technologies in multi-disciplinary areas beneficial to the community.</p>
                </div>
            </div>
            <div class="vision box">               
                <div class="box-left boxes">
                    <h1>Vision</h1><br>
                    <p>CPSU as the leading technology-driven multi-disciplinary University by 2030.</p>
                </div>
                <div class="box-right boxes">
                    <img src="../images/vission.jfif" height="150px" width="269px">
                </div>
            </div>
            <div class="goal box">
                <div class="box-left boxes">
                    <img src="../images/goal.jfif" height="150px" width="269px">
                </div>
                <div class="box-right boxes">
                    <h1>Goal</h1><br>
                    <p>To provide efficient, Quality, Technology-driven and Gender-Sensitive Products and Service.</p>
                </div>
            </div>
            <div class="objectives box">
                <h1 class="objective-contents">Objectives</h1>
                <ul>
                    <li class="objective-contents">Offer quality and relevant undergraduate degree programs and related courses technical education programs and related courses in agricultural and forestry through the utilization of appropriate information and technology and other innovations in agriculture</li>
                    <li class="objective-contents">Undertake extension programs and services that facilitate the faster transfer of agricultural technology, foster leadership and promote self-reliance among the less privileged but mentally fit in countryside.</li>
                    <li class="objective-contents">Conduct researches to support instruction, extension and production endeavors, create new knowledge and enhance the quality of life of the marginalized sector.</li>
                    <li class="objective-contents">Strengthen programs in forestry, agribusiness, crop and animal productions in order to equip students with competencies, values and skills, vital in a constantly changing environment.</li>
                    <li class="objective-contents">Continue establishing linkages with locall, national and international agencies to support the four main functions of the University.</li>
                    <li class="objective-contents">Teach and implement the lasting values of organic agriculture through the symbolic relationship of farm livestock and crops.</li>
                </ul>
            </div>
        </div>
    </div>
</body>
<script src="../Javascript/user.js"></script>
</html>