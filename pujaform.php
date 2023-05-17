<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Puja</title>

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


    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function() {
            null
        };
    </script>

    <!-- Google Translate -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
        form {
            border: 2px solid black;
            width: 80%;
            margin: 20px 10% 0 10%;
        }

        #pname {
            width: 50%;
            border: 1px solid black;
            margin-left: 10%;
            margin-top: 7%;
        }

        #des {
            width: 80%;
            border: 1px solid black;
            margin-left: 10%;
        }

        #sam {
            width: 80%;
            border: 1px solid black;
            margin-left: 10%;

        }

        #file {

            border: 1px solid black;
            margin-left: 10%;
            margin-bottom: 5%;
        }

        #sub {
            border: 1px solid black;
            margin-left: 10%;
            margin-bottom: 5%;
        }

        h2 {
            padding-top: 100px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="menu" style="background-color: skyblue;">

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
                <a id="NavLink" href="dashboard.php">Dashboard</a>
            </nav>
            <div id="google_translate_element"></div>
        </div>

    </div>

    <center>
        <h2>Add Puja on site</h2>
    </center>
    <form action="" method="POST" enctype="multipart/form-data">
        <input id="pname" type="text" placeholder="Puja Name" name="pname" required> <br><br>
        <textarea id="des" name="info" id="" cols="30" rows="7" placeholder="Description" required></textarea><br><br>
        <textarea id="sam" name="samagri" id="" cols="30" rows="7" placeholder="Samagri" required></textarea><br><br>
        <input type="file" id="file" name="file" placeholder="puja photo"><br><br>
        <input type="submit" name="submit" id="sub">
    </form>
</body>

</html>
<?php

include 'conn.php';

if (isset($_POST['submit'])) {
    $error = array();


    $photo = $_FILES["file"]["name"];
    $tempPhoto = $_FILES["file"]["tmp_name"];
    $folder = "pujaphoto/" . $photo;

    $pname = $_POST['pname'];
    $description = $_POST['info'];
    $samagri = $_POST['samagri'];

    $mysql_qry = "INSERT INTO `puja`(`puja_name`, `description`, `samagri`, `photo`) VALUES 
    ('$pname','$description','$samagri','$photo')";

    if (move_uploaded_file($tempPhoto, $folder)) {
        mysqli_query($conn, $mysql_qry);
?>
        <script>
            alert("Puja Added");
            location.replace("pujaform.php");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Puja not Added");
            location.replace("pujaform.php");
        </script>
<?php
    }
}

?>