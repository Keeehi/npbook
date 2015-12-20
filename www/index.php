<?php
    if ( isset($_GET["page"])) {
        switch ($_GET["page"]) {
            case "welcome":
                include "includes/welcome.php";
                break;

            case "upload":
            case "gallery":
                include "includes/layout.php";
                break;
            default:
                include "includes/404.php";
                break;
        }
    } else {
        include "includes/welcome.php";
    }
    
