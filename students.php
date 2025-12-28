<?php 
include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Students</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel ="stylesheet">
    </head>
    <body>
        <div class="container mt-4">
            <h2>Add Student</h2>
            <form method="post" class="row g-3">
                    <div class="col-md-4">
                        <input name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-md-4">
                        <input name="roll" class="form-control" placeholder="Roll No" required>
                    </div>
                    <div class="col-md-2">
                        <button name="add" class="btn btn-primary w-100">Add</button>
                    </div>
                </form>

            <?php
            if(isset($_POST['add'])){
                mysqli_query($conn, "INSERT INTO students(name,roll) VALUES('$_POST[name]','$_POST[roll]')");
            }
            $res = mysqli_query($conn, "SELECT * FROM students");
            ?>

            <table class="table table-bordered table-striped mt-4">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll No.</th>
                </tr>
                <?php 
                while($r = mysqli_fetch_assoc($res)){ 
                    ?>
                    <tr>
                        <td><?= $r['id'] ?></td>
                        <td><?= $r['name'] ?></td>
                        <td><?= $r['roll'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>
