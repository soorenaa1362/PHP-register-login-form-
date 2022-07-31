<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "MyRegisterLogin";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        echo "در اتصال به پایگاه داده خطایی وجود دارد!";
    }