#!/usr/bin/env php

<?php 

// $link = mysql_connect('localhost', 'root', 'root');
$link = mysql_connect($_ENV["DB1_HOST"], $_ENV["DB1_USER"], $_ENV["DB1_PASS"]);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db($_ENV["DB1_NAME"]); 

// $sql = file_get_contents('/Users/jedgalbraith/Sites/framework-demos/codeigniter-install/pagoda/db_setup/test.sql');
$sql = file_get_contents('/pagoda/db_setup/test.sql');

$result = mysql_query($sql);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

mysql_close($link);

?>