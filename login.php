<?php
if(isset($_POST["name"]) && isset($_POST["password"])){
	
	$file = fopen('data.txt', 'a');
	fwrite($f,'Hello;123');
    fclose($f);
	include('index.php');
	
/*    $file = fopen('data.txt', 'r');
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
        $message="Welcome";
		include 'private.php';
    }else{
        $message="Try again";
		echo "<script> alert('$message'); </script>";
		include('index.php');
    }
fclose($file);*/
}else{
    include 'index.php';
}
?>