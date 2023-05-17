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

</head>

<?php

include 'conn.php';

$query = "select * from booking";
$data = mysqli_query($conn, $query);

$q = "SELECT * FROM `guruji_profile`";
$d = mysqli_query($conn, $q);

?>


<body class="dashboard">

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

        </div>

    </div>


    <!-- table -->
    <div class="dashboard-page">
        <div class="signup-form">
            <div class="form guru-select-form">
                <form method="POST">
                    <div class="form-item">
                        <label for="">Select Guruji</label><br>

                        <select id="" name="iname">
                            <?php

                            while ($x = mysqli_fetch_assoc($d)) {

                            ?>
                                <option value="<?php echo $x['fname'] ?>"><?php echo $x['fname'] . "-" . $x['talukas'] ?></option>
                            <?php
                            }
                            echo '</select>';
                            ?>
                            <div class="form-item">
                                <input type="hidden" value="<?php echo $_POST['fname'] ?>" name="fname" />
                                <input type="hidden" value="<?php echo $_POST['phone'] ?>" name="phone" />
                                <input type="hidden" value="<?php echo $_POST['date'] ?>" name="date" />
                                <input type="hidden" value="<?php echo $_POST['time'] ?>" name="time" />
                                <input type="hidden" value="<?php echo $_POST['pujaname'] ?>" name="pujaname" />
                                <input type="hidden" value="<?php echo $_POST['samagri'] ?>" name="samagri" />
                                <input type="hidden" value="<?php echo $_POST['address'] ?>" name="address" />

                                <input class="signup-btn" type="submit" value="submit" name="submit">
                            </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['submit'])) {


                    $iname = $_POST['iname'];
                    $fname = $_POST['fname'];
                    $phone = $_POST['phone'];
                    $date = $_POST['date'];
                    $time = $_POST['time'];
                    $puja = $_POST['pujaname'];
                    $samagri = $_POST['samagri'];
                    $address = $_POST['address'];

                    $name_search = "SELECT * FROM guruji_profile WHERE fname = '$iname'";
                    $result =  mysqli_query($conn, $name_search);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $e = $row['Email'];


                        $to_email = $e;
                        $subject = "Puja Booking";
                        $body = "hello, Mr. " . $iname . " booked your appointment for " . $puja . " so Please contact with client and be available on time and if you are busy then please contact us at vishalsawai17252@gmail.com
                        Client Information
                        Name: $fname
                        Phone: $phone
                        Date: $date
                        Time: $time
                        Puja: $puja
                        Samagri: $samagri
                        Address: $address
                        ";


                        $headers = "From: vishalsawai17252@gmail.com";


                        if (mail($to_email, $subject, $body, $headers)) {

                ?>

                            <script>
                                alert('Email successfully sent')
                                location.replace("dashboard.php");
                            </script>
                <?php
                        } else {
                            echo "Email sending failed...";
                        }
                    }
                }
                ?>
            </div>
        </div>
        <?php




        ?>





    </div>
</body>

</html>