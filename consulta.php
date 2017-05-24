<?php
include('functions.php');
$id=$_GET["id"];


if($resultset=getSQLResultSet("SELECT * FROM `usuarios` WHERE id='$id'")){
	while ($row = $resultset->fetchAll(PDO::FETCH_ASSOC)){
		echo json_encode($row);
	}
}

?>
