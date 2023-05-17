<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puja</title>

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

<body class="puja-page">

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
                <a id="NavLink" href="dashboard.php">Dashboard</a>
            </nav>
        </div>

    </div>

    <!-- Profile -->
    <?php
    include 'conn.php';

            $sqlquery = "SELECT * FROM guruji_profile";
            $data = $conn->query($sqlquery);
            ?>

    <div class="guru-profile">
    <?php
        
        if ($data->num_rows > 0) {
            while ($row = $data->fetch_assoc()) {
        ?>
        <div class="profile">
            <div class="profile-card">
                <div>
                <img src="gurujiphoto/<?php echo $row['photo']; ?>" alt="">
                    <h1><?php echo($row['fname']." ".$row['lname']) ?></h1>
                </div>
                <div class="guru-profile-info">
                    <h2>Phone</h2>
                    <p><?php echo $row['phone'] ?></p>
                    <h2>Email</h2>
                    <p><?php echo $row['Email'] ?></p>
                    <h2>Address</h2>
                    <p><?php echo $row['address'] ?></p>
                </div>
            </div>
        </div>
        <?php       }   }    ?>
    </div>

</body>

</html>