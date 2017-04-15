<?php
if(isset($_POST["name"]) && isset($_POST["password"])){
	echo "<script>
alert('$message');
</script>";
    $f=fopen("data.txt","a");
    fputs($f,$_POST["name"].";".$_POST["password"]."\r\n");
    fclose($f);
}else{
    include 'index.php';
}
?>