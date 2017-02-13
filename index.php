<?php

$page = "index.php";

define('WEBROOT', str_replace($page, 'view/template/', $_SERVER['SCRIPT_NAME']));

require_once("model/PDO.php");
require_once('controller/requeteMergeImage.php');
require_once('controller/class/Avatar.php');
$avatar = new Avatar();

    $page = "view/index.php";


    if (isset($_GET['page'])) {
        $page = "view/".$_GET['page'].".php";
    }



include("view/template/index.php");



// if(isset($_SESSION['user'])){



    	// if (file_exists($page)) {
    	// 	if ($page == "view/index.php") {
    	// 		require_once("controller/get_all_articles.php");
    	// 	}
    	// 	if ($page == "view/article.php") {
    	// 		require_once("controller/get_article.php");
    	// 	}
    		// include("view/template/index.php");
    	// }
    	// else {
    	// 	echo("page non trouvée");
    	// }
// }
// else{

// }
