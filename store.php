<?php
require_once('connect.php');
if($_REQUEST["text"]){
	$text = $_REQUEST["text"];
	$ipa = $_REQUEST["ipadd"];
	$query0 = mysql_query("SELECT * FROM tdata WHERE tval = '".$text."'");
	if(mysql_num_rows($query0)){
		$row = mysql_fetch_array($query0);
		$id = $row["id"];
		$cnt = $row["coun"];
		$query2 = "UPDATE tdata SET coun=".++$cnt." WHERE id=".$id;
	} else{
		$query2 = "INSERT INTO tdata(tval,ipa) VALUES('".$text."','".$ipa."')";
	}

	$query1 = mysql_query($query2);
	if($query1){
		echo "done";
		return true;
	} else{
		echo "fail";
		return false;
	}
}
?>