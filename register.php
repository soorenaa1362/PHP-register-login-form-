<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>صفحه ورود</title>
</head>
<body>
    <div class="container pt-2">
        <div class="row pt-4">
            <div class="col-md-4"></div>
            <div class="col-md-4">                
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <h5 class="text-center">فرم ثبت نام</h5>
                    <?php if(isset($_GET['error'])){ ?>
                        <p class="alert alert-danger">
                            <?php echo($_GET['error']); ?>
                        </p>
                    <?php } ?>
                    <?php if(isset($_GET['success'])){ ?>
                        <p class="alert alert-success">
                            <?php echo($_GET['success']); ?>
                        </p>
                    <?php } ?>
                    <div class="card-body">
                        <form action="check-register.php" method="post">                            
                            <label for="Name">نام</label>
                            <?php if(isset($_GET['name'])){ ?>
                                <input type="text" name="name" 
                                    value="<?= $_GET['name'] ?>" 
                                    class="form-control mt-2">
                            <?php }else{ ?>
                                <input type="text" name="name" class="form-control mt-2">
                            <?php } ?>
                            <br>
                            
                            <label for="Username">نام کاربری</label>
                            <?php if(isset($_GET['username'])){ ?>
                                <input type="text" name="username" 
                                    value="<?= $_GET['username'] ?>" 
                                    class="form-control mt-2">
                            <?php }else{ ?>
                                <input type="text" name="username" class="form-control mt-2">
                            <?php } ?>
                            <br>
                            <label for="Password">رمز عبور</label>
                            <input type="password" name="password" class="form-control mt-2">
                            <br>
                            <label for="Repassword">تکرار رمز عبور</label>
                            <input type="password" name="repassword" class="form-control mt-2">
                            <br>
                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-grow-1 bd-highlight">
                                    <a href="index.php">قبلا ثبت نام کردم .</a>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <button type="submit" class="btn btn-primary">ثبت نام</button>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>