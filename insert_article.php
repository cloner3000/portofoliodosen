<?php
  require("koneksi.php");

$type = $_POST['type'];
$nip = $_POST['nip'];
$title = $_POST['title'];
$authors = $_POST['authors'];
$pdate = $_POST['pdate'];
$journal = $_POST['journal'];
$volume = $_POST['volume'];
$issue = $_POST['issue'];
$pages = $_POST['pages'];
$publisher = $_POST['publisher'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($type == 'Journal'){
  $sql = "INSERT INTO article (nip,type,title,authors,publication_date,journal,volume,issue,pages,publisher)
  VALUES ('$nip','$type','$title','$authors','$pdate','$journal','$volume','$issue','$pages','$publisher')";

  if ($conn->query($sql) === TRUE) {
      echo "1";
  } else {
      echo "0";
  }
}else {
  echo "0";
}





 ?>
