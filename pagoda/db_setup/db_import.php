<?php 

$link = mysql_connect('localhost', 'root', 'root');
// $link = mysql_connect($_SERVER["DB1_HOST"], $_SERVER["DB1_USER"], $_SERVER["DB1_PASS"]);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db('demo-ci-install-auto'); 
// mysql_select_db($_SERVER["DB1_NAME"]);

// $sql = file_get_contents('/Users/jedgalbraith/Sites/framework-demos/codeigniter-install/pagoda/db_setup/ci-demo-blog-setup.sql');
// // $sql = file_get_contents('pagoda/db_setup/test.sql');

// include ('sql_parse.php');
// // echo $file; die;
// $sql = remove_comments($sql);
// $sql = remove_remarks($sql);
// $sql = split_sql_file($sql);
// echo $sql; die;

// $result = mysql_query($sql);
// if (!$result) {
//     die('Invalid query: ' . mysql_error());
// }

// mysql_close($link);

//Usage of the class 

include ('parse.sql');

$parseObj = new ParseSql('ci-demo-blog-setup.sql'); 
$res      = $parseObj->startParsing(); 

if($res) 
{ 
   echo "<b>Query Executed Successfully.</b>"; 
} 

?>