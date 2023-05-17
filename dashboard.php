<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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

</head>

<?php

include 'conn.php';

$query = "select * from booking";
$data = mysqli_query($conn, $query);

$q = "SELECT * FROM `guruji_profile`";
$d = mysqli_query($conn, $q);
?>


<body class="dashboard">
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
                <a id="NavLink" href="index.php">Home</a>
                <a id="NavLink" href="guruji.php">Guruji</a>
                <a id="NavLink" href="pujaform.php">Add Puja</a>
                <a class="login-btn" id="logout_btn" href="logout.php">Logout</a>
            </nav>
            <div id="google_translate_element"></div>
        </div>

    </div>

    <!-- table -->
    <div class="dashboard-page">
        <div class="dashboard-table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Puja</th>
                    <th>Samagri</th>
                    <th>Address</th>
                    <th>Data</th>
                </tr>
                <?php
                while ($rows = mysqli_fetch_assoc($data)) {

                ?>
                    <tr>
                        <form action="Email.php" method="POST">
                            <td><?php echo $rows['fname'] ?></td>
                            <input type="hidden" value="<?php echo $rows['fname'] ?>" name="fname" />
                            <td><?php echo $rows['phone'] ?></td>
                            <input type="hidden" value="<?php echo $rows['phone'] ?>" name="phone" />
                            <td><?php echo $rows['date'] ?></td>
                            <input type="hidden" value="<?php echo $rows['date'] ?>" name="date" />
                            <td><?php echo $rows['time'] ?></td>
                            <input type="hidden" value="<?php echo $rows['time'] ?>" name="time" />
                            <td><?php echo $rows['pujaname'] ?></td>
                            <input type="hidden" value="<?php echo $rows['pujaname'] ?>" name="pujaname" />
                            <td><?php echo $rows['samagri'] ?></td>
                            <input type="hidden" value="<?php echo $rows['samagri'] ?>" name="samagri" />
                            <td><?php echo $rows['address'] ?></td>
                            <input type="hidden" value="<?php echo $rows['address'] ?>" name="address" />

                            <td><input class="data-send-btn" type="submit" value="SEND" name="sendEmail" /></td>
                        </form>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>



    </div>
</body>

</html>