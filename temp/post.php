<?
	$name = $_POST['name'];
	$tel = $_POST['tel'];

	$obj = [
		name => $name,
		tel => $tel
	];
	echo json_encode($obj);