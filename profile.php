<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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


</head>

<body class="gurujiprofilepage">
    <!-- navbar -->
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
                <a id="NavLink" href="index.php">Home</a>
            </nav>
            <div id="google_translate_element"></div>
        </div>
    </div>

    <!-- guruju Profile -->

    <?php
    session_start();
    include 'conn.php';
    $useremail = ($_SESSION['user']);
    $sq = "SELECT * FROM `signup` WHERE Email = '$useremail'";
    $query1 = mysqli_query($conn, $sq);
    ?>

    <div class="gurujiprofile">
        <div class="gurujiprofilediv">
            <?php while ($x = mysqli_fetch_assoc($query1)) { ?>
                <div class="profileCard">
                    <div class="profileCard1">
                        <img src="image/profile.png" alt="">
                    </div>
                    <div class="profileCard2">
                        <div>
                            <h1>Name</h1>
                            <p> <?php echo ($x['fname'] . " " . $x['lname']) ?> </p>
                        </div>
                        <div>
                            <h1>Email</h1>
                            <p> <?php echo $x['Email'] ?></p>
                        </div>
                        <div>
                            <h1>Phone</h1>
                            <p> <?php echo $x['phone'] ?></p>
                        </div>
                        <div>
                            <h1>DOB</h1>
                            <p> <?php echo $x['dob'] ?> </p>
                        </div>
                        <div>
                            <h1>Address</h1>
                            <p> <?php echo $x['address'] ?></p>
                        </div>
                    </div>
                </div>
        </div>
    <?php } ?>
    </div>

</body>

</html>