<?php
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
        $message="Welcome";
    }else{
        $message="Try again";
    }
    include 'private.html';
fclose($file);
}else{
    include 'index.php';
}
?>