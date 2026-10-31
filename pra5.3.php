<?php

session_start();

if (isset($_SESSION["page_views"])) {
    $_SESSION["page_views"]++;
} else {
    
    $_SESSION["page_views"] = 1;
}


echo "Page Views: " . $_SESSION["page_views"];
?>
