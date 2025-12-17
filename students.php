<?php 
include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Students</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h2>Add Student</h2>
        <form method="post">
            <input name="name" placeholder="Name">
            <input name="roll" placeholder="Roll No">
            <button name="add">Add</button>
        </form>
        <?php
        if(isset($_POST['add'])){
            mysqli_query($conn, "INSERT INTO students(name,roll) VALUES('$_POST[name]','$_POST[roll]')");
        }
        ?>
    </body>
</html>
