
<?php

if(isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["username"]) && isset($_POST["mail"]) && isset($_POST["password"])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $text = $username . ";" . $password . "\n";
  $fp = fopen('data.txt', 'a+');

    if(fwrite($fp, $text))  {
        echo 'saved';
    }
fclose ($fp);    
}
else{
	include 'index.php';
}
?>

