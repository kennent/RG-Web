<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>파일 업로드, 다운로드</h1>
    <form method="POST" action="index.php" enctype="multipart/form-data">
        <label for="portfolio">포트폴리오 (선택사항입니다) </label>
        <p>※ 모든 파일을 압축하고, 압축 파일 이름을 "학번_이름"으로 하시기 바랍니다<br>
        ※ 위 사항에 따르지 않을 시 불이익이 있을 수도 있습니다</p>
        <input type="hidden" name="MAX_FILE_SIZE" value="52428800" />
		<input class="file" type="file" name="portfolio" id="portfolio" />
        <input type="submit" value="제출?" />
    </form>
    <?php
        echo PHP_VERSION_ID;
    ?>
    <hr><h1>결과</h1>
    <?php
        $file_name = $_FILES['portfolio']['name'];
        $file_tmp_name = $_FILES['portfolio']['tmp_name'];
        $savedir = "./File/";
        $temp = iconv("UTF-8", "EUC-KR", $file_name);

        if(move_uploaded_file($file_tmp_name,  "$savedir/$temp") == FALSE) {
            print "실패<br>";
            print_r($_FILES);
        } else{
            print ($_FILES['portfolio']['name']);
            print " 를 업로드 했습니다.";
        }
        // $fname = $_FILES['portfolio']['name'];
		// $fsize = $_FILES['portfolio']['size'];
		// $f = $_FILES['portfolio']['tmp_name'];

		// if ($f) {
		// 	move_uploaded_file($_FILES['portfolio']['tmp_name'], "$savedir/$temp" );
		// }
    ?>
</body>
</html>