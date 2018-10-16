<?php
    $pages = preg_grep('~\.(php)$~', scandir(realpath(dirname(__FILE__).'/../templates/content/')."/"));
    foreach($pages as $key=>$page) {
        $pages[$key] = str_replace('.php','',$page);
    }
    array_unshift($pages, "homepage");
    $pages = array_unique($pages);

    if(!empty($_POST)) {
    $page = $_POST["load"];
        if (in_array($page, $pages)) {
            include realpath(dirname(__FILE__)."/../templates/content/")."/".$page.".php";
        }else {
            include realpath(dirname(__FILE__)."/../")."/error.php";
        }       
    }
?>