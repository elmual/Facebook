<?php 

mysqli_report(MYSQLI_REPORT_OFF);

$db = @mysqli_connect("localhost", "root", "", "google") or die("MySQL connect failed...");

?>