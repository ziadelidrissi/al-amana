<?php

    require_once('controller/homecontroller.php');

    session_start();

    if ( isset($_GET['action']) && $_GET['action'] !== '') 
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
            case 'connexion':
                connexion();
                break;
            case 'connexion_traitement':
                connexion_traitement();
                break;
            case 'deconnexion':
                deconnexion();
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