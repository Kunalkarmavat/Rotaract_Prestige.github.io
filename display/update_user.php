<?php
@include_once('./connection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id2 = $_POST['id'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql2 = "UPDATE users SET name = '$name', dob = '$dob', email = '$email', password = '$password' WHERE id='$id2'";
    if ($conn->query($sql2) === TRUE) {
        header("location: ./index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form action="update_user.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <input type="text" name="name" id="name" value="<?= $row['name'] ?>">
    <input type="date" name="dob" id="dob" value="<?= $row['dob'] ?>">
    <input type="email" name="email" id="email" value="<?= $row['email'] ?>">
    <input type="password" name="password" id="password" value="<?= $row['password'] ?>">
    <input type="submit" value="Submit">
</form>
