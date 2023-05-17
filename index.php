<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Guruji Online</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="image/guruji2.png" type="image/x-icon">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- js -->
    <script src="JS/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ff3c91d27a.js" crossorigin="anonymous"></script>

    <!-- Google Translate -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>

<body>

    <!-- Navbar -->
    <div class="menu">

        <div class="website-logo">
            <img class="m-i" alt="logo" src="image/guruji2.png" />
        </div>

        <div class="menu-button" onclick="menubtn()">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>


        <div id="navbar">
            <nav>
                <a id="NavLink" href="#home">Home</a>
                <a id="NavLink" href="#puja-section">Puja</a>
                <a id="NavLink" href="#about-section">About Us</a>
                <a id="NavLink" href="#Contact-section">Contact</a>

                <?php
                session_start();
                if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                ?>
                    <a class="login-btn" id="logout_btn" href="logout.php">Logout</a>
                <?php } else { ?>
                    <a class="login-btn" id="NavLink" href="signin.php">Sign In</a>
                    <a class="login-btn" id="NavLink" href="admin.php">Admin</a>
            </nav>
            <div id="google_translate_element"></div>
        <?php }

                if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        ?>
            <div class="nav-profile">
                <i class="fa-solid fa-user" onclick="profile_btn()"></i>
                <div class="profile-info">

                    <?php
                    include 'conn.php';
                    $useremail = ($_SESSION['user']);
                    $sq = "SELECT * FROM `signup` WHERE Email = '$useremail'";
                    $query1 = mysqli_query($conn, $sq);
                    while ($x = mysqli_fetch_assoc($query1)) {
                    ?>

                        <h2>&nbsp; <?php echo ($x['fname'] . " " . $x['lname'])  ?> </h2>
                    <?php
                    }
                    ?>
                    <a href="create-profile.php">Become A Guruji</a><br><br>
                    <a class="profile-btn" href="profile.php">Profile</a>
                </div>
            </div>
        <?php } ?>
        </div>
        <div id="google_translate_element"></div>

    </div>

    <!-- Home -->
    <div id="home">
        <div class="guruji">
            <h1>Get Guruji Online</h1>
            <div class="guruji-logo-btn">
                <a href="#puja-section">Booking Puja</a>
            </div>
        </div>
    </div>

    <!-- videos -->

    <div id="videos-section">
        <div class="heading">
            <h1>Videos</h1>
        </div>
        <div class="video-group">
            <div class="video-section-video">
                <video width="400" controls>
                    <source src="videos/puja1.mp4" type="video/mp4">
                    <source src="videos/puja1.mp4" type="video/ogg">
                </video>
            </div>
            <div class="video-section-video">
                <video width="400" controls>
                    <source src="videos/puja2.mp4" type="video/mp4">
                    <source src="videos/puja2.mp4" type="video/ogg">
                </video>
            </div>
            <div class="video-section-video">
                <video width="400" controls>
                    <source src="videos/puja1.mp4" type="video/mp4">
                    <source src="videos/puja1.mp4" type="video/ogg">
                </video>
            </div>
        </div>
    </div>
    <?php
    include 'conn.php';

    $sqlquery = "SELECT * FROM puja";
    $data = $conn->query($sqlquery);
    ?>
    <!-- puja -->
    <div id="puja-section">
        <div class="heading">
            <h1 style="color: white;">Puja</h1>
        </div>
        <div class="puja-main">
            <?php

            if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
            ?>
                    <?php
                    if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                    ?>
                        <a href="booking.php?pname=<?php echo $row['puja_name'] ?>">
                        <?php
                    } else {
                        ?>
                            <a href="http://localhost/guruji/signin.php">
                            <?php
                        }
                            ?>
                            <div class="puja-card">
                                <img src="pujaphoto/<?php echo $row['photo']; ?>" alt="">
                                <div class="puja-title">
                                    <h1><?php echo $row['puja_name'] ?></h1>
                                </div>
                            </div>
                            </a>
                    <?php
                }
            }
                    ?>
        </div>

        <!-- About Get Guruji -->

        <div id="about-section">
            <div class="heading">
                <h1>About Get Guruji</h1>
            </div>
            <div class="about-info">
                <p>
                    ‘Get Guruji’ is a web site which is designed to help people to get guruji for different puja’s easily on this web site and the guruji’s who want to build their network,
                    they can also get help from this web site. With the help of this web site people can register themselves and book appointment of guruji for different poojas according to there requirements.
                    Guruji’s can also register themselves
                </p>
            </div>
        </div>

        <!-- Contact Us -->

        <div id="Contact-section">
            <div class="heading">
                <h1 style="color: white;">Contact Us</h1>
            </div>
            <div class="contact-info">
                <div class="con-info">
                    <h3><i class="fa-solid fa-location-dot con-font"></i>Address</h3>
                    <p>ABC,Auragabad,maharashtra,<br>430255</p>
                </div>
                <div class="con-info">
                    <h3><i class="fa-solid fa-phone con-font"></i>Phone</h3>
                    <p>1234567890,9876543210</p>
                </div>
                <div class="con-info">
                    <h3><i class="fa-solid fa-envelope con-font"></i>Email</h3>
                    <p>getguruji@gmail.com</p>
                </div>
                <div class="con-info">
                    <div class="social-media">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook social-media-icon"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin social-media-icon"></i></i></a>
                        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram social-media-icon"></i></a>
                        <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter social-media-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer">
            <footer>&copy;Get Guruji Online 2022</footer>
        </div>
</body>

</html>