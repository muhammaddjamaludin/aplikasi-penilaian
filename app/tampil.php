<?php 
if (!isset($_POST['tampil'])) {
    $store=$_POST['store'];
    $rating=$_POST['rating'];
    $komen=$_POST['komen'];
}

    echo"$store <br>"; 
    echo"$rating <br>";
    echo"$komen <br>";
?>