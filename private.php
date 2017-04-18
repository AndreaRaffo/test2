
<?php
session_start();
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MyPage</title>
</head>

<?php
echo "<script>
alert('$message');
</script>";
$_SESSION['name'] = $_POST["name"];
print_r($_SESSION);
?>

<body>
</body>
</html>
