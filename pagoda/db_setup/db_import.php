<?php 

include ('sql_parse.php');

$link = mysql_connect($_SERVER["DB1_HOST"], $_SERVER["DB1_USER"], $_SERVER["DB1_PASS"]);
if (!$link) {
  die('Could not connect: ' . mysql_error());
}
mysql_select_db($_SERVER["DB1_NAME"]);
$parseObj = new ParseSql('pagoda/db_setup/ci-demo-blog-setup.sql'); 

// echo 'sql file parse: START' . '<br />';

$res      = $parseObj->startParsing(); 

if($res) { 
  // echo 'sql file parse: SUCCESSFUL';
}
else {
  // echo 'sql file parse: FAILED';
}
?>