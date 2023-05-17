<?php
if (
    isset($_POST['submit']) && !empty($_POST['user'])
    && !empty($_POST['pass'])
) {

    if (
        $_POST['user'] == 'admin@gmail.com' &&
        $_POST['pass'] == 'admin@1234'
    ) {
?>
        <script>
            // alert('login in successful')
            location.replace("dashboard.php");
        </script>
    <?php

    } else {
    ?>
        <script>
            alert("user id / password is incorrect");
            location.replace("admin.php");
        </script>
<?php
    }
}
?>