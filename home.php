<?php
    session_start();
?>

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
    <div class="container pt-5">
        <div class="row pt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="text-center">سلام . <?php echo($_SESSION['name']); ?></h1>
                <a href="logout.php">خروج</a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>