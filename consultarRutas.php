<?php
include('functions.php');




if($resultset=getSQLResultSet("CALL USP_ruta_S_M()")){

	while ($array = mysqli_fetch_row($resultset)) {
	    $jsonData[] = $array;
	}
echo json_encode($jsonData);

	//while ($row = $resultset->fetch_row(MYSQLI_NUM)){

		//$json = json_encode($row);
		// $json = str_replace('[', '{'.PHP_EOL, $json);
		// $json = str_replace(',', ','.PHP_EOL, $json);
		// $json = str_replace(']', PHP_EOL.'}', $json);
	//	print json_encode($row);


//}
}

?>
