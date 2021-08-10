<?php
    include 'includes/conn.php';
    $sql = "UPDATE show_result SET display_voterModule = 1, display_resultModule=0";
    mysqli_query($conn, $sql);
    header("location: home.php");
?>