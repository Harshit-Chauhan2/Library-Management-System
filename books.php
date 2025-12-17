<?php 
include 'db.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Books</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-4">
            <h3>Add Book</h3>
            <form method="post" class="row g-3">
                <div class="col-md-4">
                    <input name="book" class="form-control" placeholder="Book Name" required>
                </div>
                <div class="col-md-4">
                    <input name="author" class="form-control" placeholder="Author" required>
                </div>
                <div class="col-md-2">
                    <input name="qty" class="form-control" placeholder="Qty" required>
                </div>
                <div class="col-md-2">
                    <button name="add" class="btn btn-primary w-100">Add</button>
                </div>
            </form>

            <?php
            if(isset($_POST['add'])){
                mysqli_query($conn, "INSERT INTO books(book_name,author,quantity) VALUES('$_POST[book]','$_POST[author]','$_POST[qty]')");
            }
            $res = mysqli_query($conn, "SELECT * FROM books");
            ?>

            <table class="table table-bordered table-striped mt-4">
                <tr>
                    <th>ID</th>
                    <th>Book</th>
                    <th>Author</th>
                    <th>Qty</th>
                </tr>
                <?php 
                while($r = mysqli_fetch_assoc($res)){ 
                    ?>
                    <tr>
                        <td><?= $r['id'] ?></td>
                        <td><?= $r['book_name'] ?></td>
                        <td><?= $r['author'] ?></td>
                        <td><?= $r['quantity'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>