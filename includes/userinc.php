<?php 
    require 'connection.php';
    include 'session.php';

    $u = "";
    $user = "";
    
    if (isset($_SESSION['username'])) {
        # code...
        $u = @$_SESSION['username'];
    }
    
    $get_user = $connection->query("SELECT * FROM `user_details` WHERE (username = '{$u}')");
    if ($get_user->num_rows == 1) {
        # code...
        $get = $get_user->fetch_assoc();
        $id = $get['ID'];
        $user = $get['username'];
    }
 ?>