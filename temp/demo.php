<?
	$con = mysql_connect("127.0.0.1", "root", "rooney");
	mysql_select_db("ecw", $con);
	$result = mysql_query("select * from ecw_article");
	if (!$result) {
		echo "您查找的数据不存在";
	} else {
		while ($row = mysql_fetch_array($result))
		{
			echo $row["article_title"]." ".$row["article_author"];
			echo "<br>";
		}
	}
	mysql_close($con);