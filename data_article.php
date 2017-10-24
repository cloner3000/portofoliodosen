<?php
  require("koneksi.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from article";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $display = "";
     $i = 1;
  while($row = $result->fetch_assoc()) {
     $no = $i++;
     $display .="
        <tr>
            <td>$no</td>
            <td>" . $row["type"]. "</td>
            <td>" . $row["title"]. "</td>
       </tr>
         ";
  }
  echo $display;
} else {
    echo "Data not available";
}


 ?>
