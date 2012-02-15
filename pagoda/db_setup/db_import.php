<?php 

include ('sql_parse.sql');

if (isset($_SERVER['PLATFORM']) && $_SERVER['PLATFORM'] == 'PAGODA') {
  $link = mysql_connect($_SERVER["DB1_HOST"], $_SERVER["DB1_USER"], $_SERVER["DB1_PASS"]);
  if (!$link) {
    die('Could not connect: ' . mysql_error());
  }
  mysql_select_db($_SERVER["DB1_NAME"]);
  $parseObj = new ParseSql('pagoda/db_setup/ci-demo-blog-setup.sql'); 
}
else {
  $link = mysql_connect('localhost', 'root', 'root');
  if (!$link) {
    die('Could not connect: ' . mysql_error());
  }
  mysql_select_db('demo-ci-install-auto'); 
  $parseObj = new ParseSql('ci-demo-blog-setup.sql'); 
}

echo 'sql file parsing: START' . '<br />';

$res      = $parseObj->startParsing(); 

if($res) { 
  echo 'sql file parsing: SUCCESSFUL';
}
else {
  echo 'sql file parsing: FAILED';
}
?>