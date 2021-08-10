<?php
    include 'includes/conn.php';
    $sql = "UPDATE show_result SET display_voterModule = 0, display_resultModule=1";
    mysqli_query($conn, $sql);
    header("location: home.php");
?>