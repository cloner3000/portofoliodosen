<?php
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	require("koneksi.php");

	$sql = $conn->prepare("SELECT keahlian FROM kepegawaian_databaselengkap where  keahlian LIKE ? group by keahlian");
	$sql->bind_param("s",$search_param);
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["keahlian"];
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>
