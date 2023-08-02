<?php

    require_once('controller/homecontroller.php');

    if (isset($_GET['action'])) 
    {
        switch($_GET['action'])
        {
            case 'accueil':
                accueil();
                break;
            case 'galerie':
                galerie();
                break;
            case 'evenements':
                evenements();
                break;
            case 'en_savoir_plus':
                en_savoir_plus();
                break;
            case 'adherez':
                adherez();
                break;
            case 'mentions_legales':
                mentions_legales();
                break;
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

test