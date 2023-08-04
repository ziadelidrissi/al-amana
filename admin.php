<?php

    if (isset($_GET['action']) && $_GET['action'] !== '')
    {
        switch ($_GET['action']) 
        {
            default:
                accueil();
                break;
        }
    }
    else 
    {
        accueil();
    }

?>