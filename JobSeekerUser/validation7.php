<?php
    session_start();
    if (isset($_POST["new_rsm"])) {
        header("Location: pvacancy.php");
    }
    
?>