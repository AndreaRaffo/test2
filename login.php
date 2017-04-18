<?php
session_start();
if(isset($_POST["name"]) && isset($_POST["password"])){
	
   $file = fopen('data.txt', 'r');
    $good=false;
    while(!feof($file)){
			$line = fgets($file);
			list($user, $pass) = explode(';', $line);
			if(trim($user) == $_POST['name'] && trim($pass) == $_POST['password']){
        	$good=true;
			break;
		}
	}

    if($good){
		$_SESSION['name'] = $_POST["name"];
		header("Location: private.php");
    }else{
		echo "<script> alert('$message'); </script>";
		header("Location: index.php");
    }
fclose($file);
}else{
    header("Location: index.php");
}
?>