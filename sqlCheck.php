<?php
require_once("./lib/util.php");
$reloadURL = "sqlCheck.php";
if (!cken($_POST)) {
	header("Location:{$errorURL}");
	exit();
}
$user = "kennen";
$password = "rlawlcks1";
$dbName = "rgform";
$host = "localhost:3307";
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

if(isSet($_GET['v'])) $dataType = $_GET['v'];
else $dataType = "Major";
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
		<style>
			.fixedMenu{
				position: fixed;
				top: 40%;
				left: 0;
				width: 30px;
				height: 130px;
				background-color: rgba(0, 0, 0, 0.5);
				border-radius: 30px;
			}
			.fixedMenu li {
				color: white;
			}
		</style>
	</head>
	<body>

		<!-- Header -->
			<div id="header">
				<!-- <span class="logo icon fa-paper-plane-o"></span> -->
				<!-- <span class="logo icon fa-rg-o"></span> -->
				<image src="./images/croped.png" width="100px" height="100px"></image>
				<h1>Republic of Game</h1>
			</div>

		<!-- Main -->
			<div id="main">

				<header class="major container 75%" id="benri">
					<h2>지원자 명단</h2>
				</header>

					<section>
						<div class="table-wrapper">
							<table class="default">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Tel</th>
										<th>Email</th>
										<!-- <th>Email</th> -->
										<th><?=$dataType?></th>
									</tr>
								</thead>
								<tbody>
                                    <?php
                                    $pdo = new PDO($dsn, $user, $password);
									$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
									$sql = "SELECT * FROM member";
									$stm = $pdo->prepare($sql);
									$stm->execute();
									$info = $stm->fetchAll(PDO::FETCH_ASSOC);

									foreach ($info as $row) {
										echo "<tr>";
										echo "<td style='width:50px'>", es($row['class']), "</td>";
										echo "<td style='width:50px'>", es($row['name']), "</td>";
										echo "<td style='width:100px'>", es($row['tel']), "</td>";
										echo "<td style='width:100px'>", es($row['email']), "</td>";
										if ($dataType === "Major") echo "<td style='width:500px'>", es($row['major']), "</td>";
										if ($dataType === "Introduce") echo "<td style='width:500px'>", es($row['introduce']), "</td>";
										if ($dataType === "Reason") echo "<td style='width:500px'>", es($row['reason']), "</td>";
										if ($dataType === "Say") echo "<td style='width:500px'>", es($row['say']), "</td>";
										echo "</tr>";
									}
                                    ?>
								</tbody>
							</table>
						</div>
					</section>

					<footer>
						<!-- <form method="POST" action="">
								<input type="hidden" name="dataType" value="major" />
								<input type="submit" value="전공 분야" />
						</form>
						<form method="POST" action="">
								<input type="hidden" name="dataType" value="introduce" />
								<input type="submit" value="자기소개" />
						</form>
						<form method="POST" action="">
								<input type="hidden" name="dataType" value="reason" />
								<input type="submit" value="지원 동기" />
						</form>
						<form method="POST" action="">
								<input type="hidden" name="dataType" value="say" />
								<input type="submit" value="각오" />
						</form> -->

						<div class="fixedMenu">
							<ul>
								<label for="one" onclick="location.href='refresh.php?page=Major'"><li>1</li></label>
								<label for="two" onclick="location.href='refresh.php?page=Introduce'"><li>2</li></label>
								<label for="three" onclick="location.href='refresh.php?page=Reason'"><li>3</li></label>
								<label for="four" onclick="location.href='refresh.php?page=Say'"><li>4</li></label>
							</ul>
						</div>
						
					</footer>

			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container 75%">

					<header class="major last">
						<h2>궁금하신점이 있으신가요?</h2>
					</header>

					<p>빠르게 답변해드립니다</p>

					<form method="post" action="msg.php">
						<div class="row">
							<div class="6u 12u(mobilep)">
								<input type="text" name="name" id="name" placeholder="Name" />
							</div>
							<div class="6u 12u(mobilep)">
								<input type="email" name="email" id="email" placeholder="Email" />
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<ul class="actions">
									<li><input type="submit" value="전송하기" /></li>
								</ul>
							</div>
						</div>
					</form>

					<ul class="icons">
						<!-- <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li> -->
						<li><a href="https://www.facebook.com/sunrintrg" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<!-- <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li> -->
						<!-- <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li> -->
						<!-- <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li> -->
						<li><a href="http://blog.naver.com/rgame_st" class="icon fa-rss"><span class="label">Naver Blog</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; 2018. Republic of Game.</li><li>Developer: kennen-chan</a></li>
					</ul>

				</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>