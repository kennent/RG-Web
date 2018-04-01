<?php
session_start();
require_once("./lib/util.php");
if (isSet($_POST['name'])) $_SESSION['name'] = $_POST['name'];
if (isSet($_POST['class'])) $_SESSION['class'] = $_POST['class'];
if (isSet($_POST['tel'])) $_SESSION['tel'] = $_POST['tel'];
if (isSet($_POST['email'])) $_SESSION['email'] = $_POST['email'];
if (isSet($_POST['work'])) $_SESSION['work'] = $_POST['work'];
if (isSet($_POST['major'])) $_SESSION['major'] = $_POST['major'];
if (isSet($_POST['introduce'])) $_SESSION['introduce'] = $_POST['introduce'];
if (isSet($_POST['reason'])) $_SESSION['reason'] = $_POST['reason'];
if (isSet($_POST['say'])) $_SESSION['say'] = $_POST['say'];
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

		<!-- Header -->
			<div id="header">
				<!-- <span class="logo icon fa-paper-plane-o"></span> -->
				<!-- <span class="logo icon fa-rg-o"></span> -->
				<image src="./images/croped.png" width="100px" height="100px"></image>
				<h1>지원하기</h1>
			</div>


		<!-- Main -->
			<div id="main">

				
				<div class="box container">
					<section>
						<form method="post" action="data.php" enctype="multipart/form-data">

							<div class="row">
								<div class="12u">
									<label for="portfolio">포트폴리오 (선택사항입니다) </label>
                                    <p>모든 파일을 압축하고, 압축 파일 이름을 "학번_이름"으로 하시기 바랍니다<br>
									첨부할 수 있는 <span style="color:red">파일의 최대 크기는 50Mb</span>입니다<br>
									50Mb가 넘는 파일은 이메일로 제출받고 있습니다<br>
									제출 이메일 : kckyoung11@gmail.com<br>
									<span style="color:red">제출 버튼을 누른 후 조금만 기다려주세요 업로드 진행중입니다</span><br>
                                    ※ 위 사항에 따르지 않을 시 불이익이 있을 수도 있습니다</p>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="102428800" />
									<input class="file" type="file" name="portfolio" id="portfolio" />
								</div>
							</div>

                            <div class="row">
                                <div class="12u">
                                    <ul class="actions">
										<li><a href="form.php"><input type="button" value="이전" /></a>
                                        <li><input type="submit" value="제출하기" /></li>
                                    </ul>
                                </div>
                            </div>

						</form>
					</section>
				</div>
				

			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container 75%">

					<header class="major last">
						<h2>지원서를 작성하는데 문제가 있으신가요?<br>
							궁금한 점이 있으신가요?</h2>
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
						<li>&copy; 2018. Republic of Game.</li><li>Developer: kennen</a></li>
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