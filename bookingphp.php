<?php
include 'conn.php';

$fname =  $_POST['fname'];
$lname = $_POST['lname'];
$phone =  $_POST['phone'];
$district = $_POST['district'];
$taluka = $_POST['taluka'];
$samagri = $_POST['samagri'];
$date = $_POST['date'];
$time = $_POST['time'];
$address = $_POST['address'];
$puja = $_POST['pujaname'];


$sql = "INSERT INTO booking (fname, lname, phone, district, taluka, samagri, date, time, address, pujaname) VALUES ('$fname', 
            '$lname','$phone','$district','$taluka','$samagri','$date','$time','$address','$puja')";


if (mysqli_query($conn, $sql)) {
?>
    <script>
        alert('Puja booking is successfully guruji will conatact with you');
        location.replace("index.php");
    </script>
<?php
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
mysqli_close($conn);
?>