<?php
include 'conn.php';
session_start();

if (isset($_POST['submit'])) {
  $email = $_POST['user'];
  $password = $_POST['pass'];

  $email_search = "SELECT * FROM signup WHERE Email='$email'";
  $query = mysqli_query($conn, $email_search);

  $email_count = mysqli_num_rows($query);

  if ($email_count) {
    $password_search = "SELECT * FROM signup WHERE password='$password'";
    $query1 = mysqli_query($conn, $password_search);

    $pass_count = mysqli_num_rows($query1);

    if ($pass_count) {
      $_SESSION['user'] = $email;
      $q = mysqli_fetch_assoc($query);
?>

      <script>
        // alert('login successful')
        location.replace("index.php");
      </script>
    <?php
    } else {
    ?>
      <script>
        alert('password incorrect')
        location.replace("signin.php");
      </script>
    <?php
    }
  } else {
    echo "Invalid email/user name";
    ?>
    <script>
      location.replace("signin.php");
    </script>
<?php
  }
}
?>