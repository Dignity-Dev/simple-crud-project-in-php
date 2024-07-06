<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "UPDATE users SET name='$name', email='$email', age='$age' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>

<form method="post" action="update.php">
    ID: <input type="number" name="id" required><br>
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Age: <input type="number" name="age" required><br>
    <input type="submit" value="Update">
</form>
