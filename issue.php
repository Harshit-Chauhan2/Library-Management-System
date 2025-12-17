<?php 
include 'db.php'; 
?>
<h2>Issue Book</h2>
<form method="post">
    Book ID: <input name="book">
    Student ID: <input name="student">
    <button name="issue">Issue</button>
</form>
<?php
if(isset($_POST['issue'])){
    mysqli_query($conn, "INSERT INTO issue_books(book_id,student_id,issue_date) VALUES('$_POST[book]','$_POST[student]',CURDATE())");
}
?>