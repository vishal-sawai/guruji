<?php

include 'conn.php';
if (isset($_POST['submit'])) {
    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $Phone = $_POST['phone'];
    $email = $_POST['Email'];
    $Password = $_POST['password'];
    $Dob = $_POST['dob'];
    $Address = $_POST['address'];

    $mysql_qry = "SELECT * FROM signup where Email='$email'";

    $result = mysqli_query($conn, $mysql_qry);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows >= 1) {
        ?>
        <script>
                alert('Email is already Exist')
                location.replace("signin.php");
            </script>
<?php
    } else {
        $mysql_qry = "INSERT into signup(fname, lname, phone, Email, password, dob, address) values
         ('$Fname', '$Lname', '$Phone', '$email', '$Password', '$Dob','$Address')";
        $result = mysqli_query($conn, $mysql_qry);
        if ($result >= 1) {
?>
            <script>
                alert('You have signed up successfully')
                location.replace("signin.php");</script>
<?php
        } else {
            echo "error 504";
        }
    }
}

$conn->close();
?>