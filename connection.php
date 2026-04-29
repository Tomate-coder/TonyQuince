<?php

function connection(){
    $host = "localhost";
    $user = "dev_user";
    $pass = "User*2026";

    $bd = "TonyQuince";

    $connect = mysqli_connect($host,$user,$pass,$bd);

    mysqli_select_db($connect,$bd);

    return $connect;
};

?>