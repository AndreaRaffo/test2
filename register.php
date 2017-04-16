<?php
if(isset($_POST["name"]) && isset($_POST["password"])){
    $f=fopen("data.txt","a") or die("Unable to open file!");
	$data = $_POST["name"].";".$_POST["password"]."\r\n";
	fwrite($f,$data);
    fclose($f);
}else{
    include 'index.php';
}
?>