<?php
    session_start();
    // unset($_SESSION["name"]); not recommended.
    session_destroy();

    header("Location: index.php");

?>