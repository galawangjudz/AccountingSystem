<?php
    session_destroy();
    foreach ($_SESSION as $key => $value) {
        unset($_SESSION[$key]);
    }

    
    
?>
<script>
window.location.href = "login.php";
</script>