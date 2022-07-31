<?php

    include 'config/db.php';

    if(isset($_POST['name']) && isset($_POST['username'])
    && isset($_POST['password']) && isset($_POST['repassword'])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

        $user_data = 'username='. $username. '&name='. $name;

        if(empty($name)){
            header("Location: register.php?error=لطفا نام را وارد کنید.&$user_data");
            exit();
        }else if(empty($username)){
            header("Location: register.php?error=لطفا نام کاربری را وارد کنید.&$user_data");
            exit();
        }else if(empty($password)){
            header("Location: register.php?error=لطفا رمز عبور را وارد کنید.&$user_data");
            exit();
        }else if(empty($repassword)){
            header("Location: register.php?error=لطفا تکرار رمز عبور را وارد کنید.&$user_data");
            exit();
        }else if($password !== $repassword){
            header("Location: register.php?error=رمز عبور و تکرار آن باید برابر باشد.&$user_data");
            exit();
        }else{
            $password = md5($password);

            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                header("location: register.php?error=این نام کاربری قبلا ثبت شده است!&$user_data");
            }else{
                $stmt = "INSERT INTO users(name, username, password)
                    VALUES('$name', '$username', '$password')";
                $res = mysqli_query($conn, $stmt);
                
                if($res){
                    header("Location: register.php?success=ثبت نام با موفقیت انجام شد.");
                }else{
                    header("Location: register.php?error=خطایی رخ داده است!&$user_data");
                }
            }
        }









    }else{
        header("Location: register.php?error");
        exit();
    }