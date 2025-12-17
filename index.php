<?php
session_start();
include 'db.php';
if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = $_POST['password'];
    $q = mysqli_query($conn, "SELECT * FROM admin WHERE username='$u' AND password='$p'");
    if(mysqli_num_rows($q) == 1){
        $_SESSION['admin'] = $u;
        header('location:dashboard.php');
    } else {
        $error = "Invalid Login";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Library Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-header text-center bg-primary text-white">
                            <h4>Library Login</h4>
                        </div>
                        <div class="card-body">
                            <?php 
                            if(isset($error)) 
                                echo "<div class='alert alert-danger'>$error</div>"; 
                            ?>
                            <form method="post">
                                <div class="mb-3">
                                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                    <button name="login" class="btn btn-primary w-100">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>