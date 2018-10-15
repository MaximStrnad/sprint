<?php
$pages = preg_grep('~\.(php)$~', scandir(dirname(__FILE__).'/templates/pages/'));
foreach($pages as $key=>$page) {
    $pages[$key] = str_replace('.php','',$page);
}
require dirname(__FILE__)."/templates/layout.php";
?>