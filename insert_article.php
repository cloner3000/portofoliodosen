<?php
  require("koneksi.php");

$type = $_POST['type'];
$nip = trim($_POST['nip']);
$title = $_POST['title'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($type == 'Journal'){
  $authors = $_POST['authors'];
  $pdate = $_POST['pdate'];
  $volume = $_POST['volume'];
  $issue = $_POST['issue'];
  $pages = $_POST['pages'];
  $journal = $_POST['journal'];
  $publisher = $_POST['publisher'];
  $sql = "INSERT INTO article (nip,type,title,authors,publication_date,journal,volume,issue,pages,publisher)
  VALUES ('$nip','$type','$title','$authors','$pdate','$journal','$volume','$issue','$pages','$publisher')";
  if ($conn->query($sql) === TRUE) {echo "1";} else {echo "0";}

}elseif ($type == 'Conference') {
  $authors = $_POST['authors'];
  $pdate = $_POST['pdate'];
  $conference = $_POST['conference'];
  $volume = $_POST['volume'];
  $issue = $_POST['issue'];
  $pages = $_POST['pages'];
  $sql = "INSERT INTO article (nip,type,title,authors,publication_date,conference,volume,issue,pages)
  VALUES ('$nip','$type','$title','$authors','$pdate','$conference','$volume','$issue','$pages')";
  if ($conn->query($sql) === TRUE) {echo "1";} else {echo "0";}

} elseif ($type == 'Chapter'){
  $authors = $_POST['authors'];
  $pdate = $_POST['pdate'];
  $book = $_POST['book'];
  $volume = $_POST['volume'];
  $pages = $_POST['pages'];
  $publisher = $_POST['publisher'];
  $sql = "INSERT INTO article (nip,type,title,authors,publication_date,book,volume,pages,publisher)
  VALUES ('$nip','$type','$title','$authors','$pdate','$book','$volume','$pages','$publisher')";
  if ($conn->query($sql) === TRUE) {echo "1";} else {echo "0";}
}elseif ($type == 'Book') {
  $authors = $_POST['authors'];
  $pdate = $_POST['pdate'];
  $volume = $_POST['volume'];
  $pages = $_POST['pages'];
  $sql = "INSERT INTO article (nip,type,title,authors,publication_date,volume,pages)
  VALUES ('$nip','$type','$title','$authors','$pdate','$volume','$pages')";
  if ($conn->query($sql) === TRUE) {echo "1";} else {echo "0";}
}elseif ($type =='Thesis') {
  $authors = $_POST['authors'];
  $pdate = $_POST['pdate'];
  $institution = $_POST['institution'];
  $sql = "INSERT INTO article (nip,type,title,authors,publication_date,institution)
  VALUES ('$nip','$type','$title','$authors','$pdate','$institution')";
  if ($conn->query($sql) === TRUE) {echo "1";} else {echo "0";}
}elseif ($type =='Patent') {
  $investors = $_POST['investors'];
  $pdate = $_POST['pdate'];
  $poffice = $_POST['poffice'];
  $pnumber = $_POST['pnumber'];
  $anumber = $_POST['anumber'];
  $sql = "INSERT INTO article (nip,type,title,investors,publication_date,patent_office,patent_number,application_number)
  VALUES ('$nip','$type','$title','$investors','$pdate','$poffice','$pnumber','$anumber')";
  if ($conn->query($sql) === TRUE) {echo "1";} else {echo "0";}
}elseif ($type == 'Courtcase') {
  $court = $_POST['court'];
  $pdate = $_POST['pdate'];
  $reporter = $_POST['reporter'];
  $docket = $_POST['docket'];
  $sql = "INSERT INTO article (nip,type,title,court,publication_date,reporter,docketid)
  VALUES ('$nip','$type','$title','$court','$pdate','$reporter','$docket')";
  if ($conn->query($sql) === TRUE) {echo "1";} else {echo "0";}
} elseif ($type =='Other'){
  $authors = $_POST['authors'];
  $pdate = $_POST['pdate'];
  $source = $_POST['source'];
  $rnumber = $_POST['rnumber'];
  $sql = "INSERT INTO article (nip,type,title,authors,publication_date,source,report_number)
  VALUES ('$nip','$type','$title','$authors','$pdate','$source','$rnumber')";
  if ($conn->query($sql) === TRUE) {echo "1";} else {echo "0";}
} else{
  echo "0";
}





 ?>
