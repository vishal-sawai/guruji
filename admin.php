<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

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

<body class="signup">
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

    <!-- Form -->
    <div class="signup-form">
        <div class="form">
            <form action="adminlogin.php" method="post" onsubmit="this.submit(); this.reset(); return false;">
                <div class="form-item">
                    <label for="">Email</label><br>
                    <input type="email" name="user" id="" placeholder="abc@gmail.com" required>
                </div>
                <div class="form-item">
                    <label for="">Password</label><br>
                    <input type="password" name="pass" id="" placeholder="Enter Password" required>
                </div>
                <div class="form-item">
                    <input class="signup-btn" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

</body>

</html>