<?php
require_once("./lib/util.php");
$gobackURL = "index.html";
$resultURL = "msgResult.html";
if (!cken($_POST)) {
	header("Location:{$gobackURL}");
	exit();
}
$user = "kennen";
$password = "rlawlcks1";
$dbName = "msgq";
$host = "localhost:3307";
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>

<!DOCTYPE HTML>
<!--
	Directive by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>RG - Republic of Game</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" href="./images/favicon.ico" type="image/x-icon" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body>

        <?php
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];

		$pdo = new PDO($dsn, $user, $password);
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$sql = "INSERT INTO body (name, email, message) VALUES (:name, :email, :message)";
		$stm = $pdo->prepare($sql);
		$stm->bindValue(':name', $name, PDO::PARAM_STR);
		$stm->bindValue(':email', $email, PDO::PARAM_STR);
		$stm->bindValue(':message', $message, PDO::PARAM_STR);
		$stm->execute();

		header("Location:{$resultURL}");
		exit();
		?>
		
    </body>
</html>