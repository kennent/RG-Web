<?php
$result = $_GET['page'];
$reloadURL = "sqlCheck.php?v=".$result."#benri";
header("Location:{$reloadURL}");
exit();
?>