<?php
session_start();
require_once("./lib/util.php");
$errorURL = "error.html";
$resultURL = "result.html";
if (!cken($_SESSION)) {
	header("Location:{$errorURL}");
	exit();
}
$user = "kennen";
$password = "rlawlcks1";
$dbName = "rgform";
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

		<!-- File Upload -->

		<?php
		$skip = false;

		$file_name = $_FILES['portfolio']['name'];
        $file_tmp_name = $_FILES['portfolio']['tmp_name'];
        $savedir = "./portfolio/";
		$temp = iconv("UTF-8", "EUC-KR", $file_name);
		$uploadResult = move_uploaded_file($file_tmp_name,  "$savedir/$temp");
		if ($_FILES['portfolio']['error'] == 4) {
			$skip = true;
		} else if (!$uploadResult && !$skip) {
			header("Location:{$errorURL}");
			exit();
		}
		?>


		<!-- SQL -->

        <?php
		$name = $_SESSION["name"];
		$class = $_SESSION["class"];
		$tel = $_SESSION["tel"];
		$email = $_SESSION["email"];
		$work = $_SESSION["work"];
		$major = $_SESSION["major"];
		$introduce = $_SESSION["introduce"];
		$reason = $_SESSION["reason"];
		$say = $_SESSION["say"];

		$pdo = new PDO($dsn, $user, $password);
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$sql = "INSERT INTO member (name, class, tel, email, work, major, introduce, reason, say) VALUES (:name, :class, :tel, :email, :work, :major, :introduce, :reason, :say)";
		$stm = $pdo->prepare($sql);
		$stm->bindValue(':name', $name, PDO::PARAM_STR);
		$stm->bindValue(':class', $class, PDO::PARAM_STR);
		$stm->bindValue(':tel', $tel, PDO::PARAM_STR);
		$stm->bindValue(':email', $email, PDO::PARAM_STR);
		$stm->bindValue(':work', $work, PDO::PARAM_STR);
		$stm->bindValue(':major', $major, PDO::PARAM_STR);
		$stm->bindValue(':introduce', $introduce, PDO::PARAM_STR);
		$stm->bindValue(':reason', $reason, PDO::PARAM_STR);
		$stm->bindValue(':say', $say, PDO::PARAM_STR);
		$stm->execute();

		session_destroy();
		header("Location:{$resultURL}");
		exit();
		?>

    </body>
</html>