<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>

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
            <form action="become_gurujiphp.php" method="POST" enctype="multipart/form-data">
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
                    <label for="">Email</label><br>
                    <input type="email" name="Email" id="" placeholder="abc@gmail.com" required>
                </div>
                <div class="form-item">
                    <label for="">Upload Your Photo</label><br>
                    <input type="file" name="photo" id="" required>
                </div>
                <div class="form-item">
                    <label for="">District</label><br>
                    <select name="district" id="">
                        <option value="Auragabad">Aurangabad</option>
                    </select>
                </div>
                <div class="form-item">
                    <label for="">Talukas</label><br>
                    <select name="talukas" id="">
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
                    <label for="">Address</label><br>
                    <textarea name="address" id="" rows="5" placeholder="Enter Your Address" required></textarea>
                </div>
                <div class="form-item">
                    <input class="signup-btn" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

</body>

</html>