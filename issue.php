<?php 
include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Issue book</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel ="stylesheet">
    </head>
    <body>
        <div class="container mt-4">
            <h2>Issue Book</h2>
            <form method="post" class="row g-3">
                <div class="col-md-4">
                    <input name="book" class="form-control" placeholder="Book ID" required>
                </div>
                <div class="col-md-4">
                    <input name="student" class="form-control" placeholder="Student ID" required>
                </div>
                <div class="col-md-2">
                    <button name="issue" class="btn btn-primary w-100">Issue</button>
                </div>
            </form>

            <?php
            if(isset($_POST['issue'])){
                mysqli_query($conn, "INSERT INTO issue_books(book_id,student_id,issue_date) VALUES('$_POST[book]','$_POST[student]',CURDATE())");
            }
            $res = mysqli_query($conn, "SELECT * FROM issue_books");
            ?>

            <table class="table table-bordered table-striped mt-4">
                <tr>
                    <th>Book ID</th>
                    <th>Student ID</th>
                    <th>Date</th>
                </tr>
                <?php 
                while($r = mysqli_fetch_assoc($res)){ 
                    ?>
                    <tr>
                        <td><?= $r['book_id'] ?></td>
                        <td><?= $r['student_id'] ?></td>
                        <td><?= $r['issue_date'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>