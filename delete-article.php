<?php
  require("koneksi.php");

// sql to delete a record
$id = $_POST['id'];
$sql = "delete from article where id = '$id'";
if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "0";
}
$conn->close();
?>
