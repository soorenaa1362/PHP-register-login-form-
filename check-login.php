<?php

    session_start();

    include 'config/db.php';

    if(isset($_POST['username']) && isset($_POST['password'])){

        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        $user_data = 'username='. $username;

        if(empty($username)){
            header("Location: index.php?error=لطفا نام کاربری را وارد کنید.&$user_data");
            exit();
        }else if(empty($password)){
            header("Location: index.php?error=لطفا رمز عبور را وارد کنید.&$user_data");
            exit();
        }else{
            $password = md5($password);

            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);

                if($row['username'] === $username && $row['password'] === $password){
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['username'] = $row['username'];

                    header("Location: home.php");
                    exit();
                }
            }
            
        } 
    
    }else{
        header("Location: index.php?error");
        exit();
    }