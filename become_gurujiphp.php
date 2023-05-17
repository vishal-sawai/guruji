<?php

include 'conn.php';

if (isset($_POST['submit'])) {
    $error = array();

   
    $photo = $_FILES["photo"]["name"];
    $tempPhoto = $_FILES["photo"]["tmp_name"];
    $folder = "gurujiphoto/".$photo;


    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $Phone = $_POST['phone'];
    $email = $_POST['Email'];
    $District = $_POST['district'];
    $Taluka = $_POST['talukas'];
    $Address = $_POST['address'];
  
    $mysql_qry = "INSERT INTO `guruji_profile`(`fname`, `lname`, `phone`, `Email`, `photo`, `district`, `talukas`, `address`) VALUES 
    ('$Fname','$Lname','$Phone','$email','$photo','$District','$Taluka','$Address')";

if (move_uploaded_file($tempPhoto, $folder))  {
    mysqli_query($conn, $mysql_qry);
    ?>
    <script>
        alert("Profile is created sussfully");
        location.replace("index.php");
    </script>
<?php
}else{
    ?>
    <script>
    alert("something wrong");
    location.replace("create-profile.php");
</script>
<?php
}
}

?>