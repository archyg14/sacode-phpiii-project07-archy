<?php
    session_start();
    // reset variable
    session_unset();
    // berhentikan session
    session_destroy();

    header('location:index.php');
?>