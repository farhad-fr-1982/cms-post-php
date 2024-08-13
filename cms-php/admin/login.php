<?php
if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   if ($username == "admin" && $password == "pass") {
    session_start();
    $_SESSION["user"] = "admin";
    header("Location:index.php");
   }
}
?>


<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10; url="<?php echo $_SERVER['PHP_SELF']; ?>">
    <title>ورود</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5" style="max-width: 600px;">
        <div class="login-form">
        <form action="login.php" method="post">
                <div class="form-field mb-4">
                    <input class="form-control" type="text" name="username" id="" placeholder="نام کاربری">
                </div>
                <div class="form-field mb-4">
                    <input class="form-control" type="password" name="password" id="" placeholder="کلمه عبور">
                </div>
                <div class="form-field mb-4">
                    <input class="btn btn-primary" type="submit" value="ورود" name="login">
                </div>
            </form>

        </div>
    </div>
</body>
</html>