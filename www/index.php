<?php




	$html_class = '';
    $content = $_REQUEST['content'];

    include_once "inc/config.inc.php";

    $nextpage = 'inc/' . $content . '.inc.php';

    // CHECK IF NEXT PAGE EXISTS
    if ($content && file_exists($nextpage)) {

        // IF SITEMAP DON'T SEND HEADER AND FOOTERS:
        if ($content == 'sitemap') {
            include ($nextpage);

        // FOR FILES THAT NEED HEADERS & FOOTERS:
        } else {
            
            // SET ERROR HEADER BEFORE HEADER
            if ($error404) header('HTTP/1.0 404 Not Found');

            // GET DOCUMENT HEAD
            include ('inc/head.inc.php');

            // IF ERROR SHOW ERROR FILE
            if ($error404) {
                include ('inc/error404.inc.php');

            // ELSE INCLUDE MAIN PAGE FILE
            } else { 
                include ('inc/header.inc.php');
                include ($nextpage);
            }

            // INCLUDE FOOTER
            include('inc/footer.inc.php');

        }

    // ELSE IS AN ERROR IF FILE DOES NOT EXIST
    } else if ($content){
        header('HTTP/1.0 404 Not Found');

        include ('inc/head.inc.php');
        include ('inc/header.inc.php');
        include ('inc/error404.inc.php');
        include('inc/footer.inc.php');
    
    // Landing Home Page
    } else {
        include ('inc/head.inc.php');
        include ('inc/header.inc.php');
        include ('inc/main.inc.php');
        include('inc/footer.inc.php');
    }


?>
