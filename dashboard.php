<?php 
session_start(); 
if(!isset($_SESSION['admin'])) 
    header('location:index.php'); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand">Library Management System</span>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </nav>

        <div class="container mt-4">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow text-center">
                        <div class="card-body">
                            <h5>Books</h5>
                            <a href="books.php" class="btn btn-primary">Manage Books</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow text-center">
                        <div class="card-body">
                            <h5>Students</h5>
                            <a href="students.php" class="btn btn-success">Manage Students</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow text-center">
                        <div class="card-body">
                            <h5>Issue Books</h5>
                            <a href="issue.php" class="btn btn-warning">Issue Books</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>