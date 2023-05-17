<?php

session_start();

session_destroy();

?>
<script>
    location.replace("index.php");
    alert("logout successful");
</script>
<?php