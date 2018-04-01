<?php
session_start();
require_once("./lib/util.php");
if (empty($_SESSION['name'])) $name = "";
	else $name = $_SESSION['name'];
if (empty($_SESSION['class'])) $class = "";
	else $class = $_SESSION['class'];
if (empty($_SESSION['tel'])) $tel = "";
	else $tel = $_SESSION['tel'];
if (empty($_SESSION['email'])) $email = "";
	else $email = $_SESSION['email'];
if (empty($_SESSION['work'])) $work = "";
	else $work = $_SESSION['work'];
if (empty($_SESSION['major'])) $major = "";
	else $major = $_SESSION['major'];
if (empty($_SESSION['introduce'])) $introduce = "";
	else $introduce = $_SESSION['introduce'];
if (empty($_SESSION['reason'])) $reason = "";
	else $reason = $_SESSION['reason'];
if (empty($_SESSION['say'])) $say = "";
	else $say = $_SESSION['say'];
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
						<form method="post" action="file.php">
							<div class="row">
								<div class="6u 12u(mobilep)">
									<label for="name">이름</label>
									<input class="text" type="text" name="name" id="name" value="<?=es($name);?>" placeholder="김알쥐" required/>
								</div>
								<div class="6u 12u(mobilep)">
									<label for="class">학번</label>
									<input class="text" type="text" name="class" id="class" value="<?=es($class);?>" placeholder="10000" required/>
								</div>
							</div>
							<div class="row">
								<div class="6u 12u(mobilep)">
									<label for="tel">전화번호</label>
									<input class="text" type="text" name="tel" id="tel" value="<?=es($tel);?>" placeholder="010-0000-0000" required/>
								</div>
								<div class="6u 12u(mobilep)">
									<label for="email">Email</label>
									<input class="email" type="email" name="email" id="email" value="<?=es($email);?>" placeholder="kennen@rrgg.co.kr" required/>
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<label for="subject">지원분야</label>
									<input class="text" type="text" name="work" id="work" value="<?=es($work);?>" placeholder="개발자, 디자이너, 기획자" required/>
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<label for="subject">전공과 관련해 공부한 것이나 할 수 있는 것</label>
									<textarea name="major" id="major" placeholder="없을 경우 적지 않아도 됩니다" rows="2"><?=es($major);?></textarea>
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<label for="subject">자기소개(800자 이내)</label>
									<textarea name="introduce" id="introduce" placeholder="자유롭게 작성해주세요" rows="6" required><?=es($introduce);?></textarea>
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<label for="subject">지원동기(800자 이내)</label>
									<textarea name="reason" id="reason" placeholder="자유롭게 작성해주세요" rows="6" required><?=es($reason);?></textarea>
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<label for="subject">각오(800자 이내)</label>
									<textarea name="say" id="say" placeholder="자유롭게 작성해주세요" rows="6" required><?=es($say);?></textarea>
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" value="다음" /></li>
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