<?
	$con = mysql_connect("127.0.0.1", "root", "rooney");
	mysql_select_db("test", $con);
	$result = mysql_query("SELECT * FROM contact");
	$data = [];
	while ($row = mysql_fetch_array($result))
	{
		$temp['name'] = $row['name'];
		$temp['tel'] = $row['tel'];
		array_push($data, $temp);
	}
	echo json_encode($data);