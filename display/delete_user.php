<?php
@include_once('connection.php');
$id = $_POST['id'];
$sql = "DELETE FROM users WHERE id='$id'";
$result = $conn->query($sql);
if($result == TRUE){
    header('location: ./index.php');
}
else{
    echo "Error";
}

?>