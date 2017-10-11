<?
	$name = $_GET['name'];
	$tel = $_GET['tel'];

	$obj = [
		name => $name,
		tel => $tel
	];
	echo json_encode($obj);