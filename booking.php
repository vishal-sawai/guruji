<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Page</title>

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

<body class="booking-page">

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
                <a id="NavLink" href="index.php#puja-section">Puja</a>
            </nav>
            <div id="google_translate_element"></div>
        </div>
    </div>

    <!-- booking -->

    <?php
    $pujaname = $_GET['pname'];


    include 'conn.php';

    $query = "SELECT * FROM puja WHERE puja_name = '$pujaname'";
    $data = mysqli_query($conn, $query);
    ?>

    <div class="booking">
        <?php
        if ($data->num_rows > 0) {
            while ($row = $data->fetch_assoc()) {
        ?>
                <div class="booking-info">
                    <div class="about-puja">
                        <h1><?php echo $pujaname ?></h1>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['description']; ?>
                        </p>
                    </div>
                    <div class="puja-samagri">
                        <h1>Puja Samagri</h1>
                        <table>

                            <?php
                            $thestring = $row['samagri'];
                            $thearray = preg_split("/(\s|,\s)/", $thestring);
                            $i = 1;
                            foreach ($thearray as $value) {
                            ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $value ?></td>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </table>
                    </div>
                </div>
        <?php
            }
        }
        ?>
        <!-- Price -->

        <div class="gurujiPrice">
            <h1>Price</h1>
            <h3>With Puja Samagri 7500</h3>
            <h3>Without Puja Samagri 7000</h3>
        </div>

        <!-- Form -->
        <div class="signup-form booking-form" id="book-form">
            <div class="form bform">
                <div class="close-btn">
                    <i class="fa-solid fa-circle-xmark" onclick="close_btn()"></i>
                </div>
                <form action="bookingphp.php" method="post">
                    <div class="form-item name-input">
                        <label for="">Name</label><br>
                        <input type="text" name="fname" id="" class="fname" placeholder="First Name" required>
                        <input type="text" name="lname" id="" placeholder="Last Name" required>
                    </div>
                    <div class="form-item">
                        <label for="">Phone No</label><br>
                        <input type="tel" maxlength="10" minlength="10" name="phone" id="" placeholder="0123456789" required>
                    </div>
                    <div class="form-item">
                        <label for="">District</label><br>
                        <select name="district" id="">
                            <option value="Auragabad">Aurangabad</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="">Talukas</label><br>
                        <select name="taluka" id="">
                            <option value="Auragabad">Aurangabad</option>
                            <option value="Sillod">Sillod</option>
                            <option value="Soegaon">Soegaon</option>
                            <option value="Vaijapur">Vaijapur</option>
                            <option value="Gangapur">Gangapur</option>
                            <option value="Phulambri">Phulambri</option>
                            <option value="Kannad">Kannad</option>
                            <option value="Khultabad">Khultabad</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="">Samagri</label><br>
                        <select name="samagri" id="">
                            <option value="WithSamagri">With Samagri</option>
                            <option value="WithoutSamagri">Without Samagri</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="">Date</label><br>
                        <input type="date" name="date" id="" required>
                    </div>
                    <div class="form-item">
                        <label for="">Time</label><br>
                        <input type="time" name="time" id="" required>
                    </div>
                    <div class="form-item">
                        <?php

                        $query1 = "SELECT * FROM puja WHERE puja_name = '$pujaname'";
                        $data1 = mysqli_query($conn, $query);

                        if ($data->num_rows > 0) {
                            while ($row = $data1->fetch_assoc()) {
                        ?>
                                <input type="hidden" name="pujaname" id="" value="<?php echo $pujaname ?>">
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="form-item">
                        <label for="">Address</label><br>
                        <textarea name="address" id="" row;s="5" placeholder="Enter Your Address" required></textarea>
                    </div>
                    <div class="form-item">
                        <input class="signup-btn" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>



        <!-- booking button -->

        <div class="booking-btn">
            <button onclick="Puja_Book_btn()">Book Now</button>
        </div>
    </div>




</body>

</html>