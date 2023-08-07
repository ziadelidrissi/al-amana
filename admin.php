<?php

    if (isset($_GET['action']) && $_GET['action'] !== '')
    {
        switch ($_GET['action']) 
        {
            case 'crud':
                crud();
                break;
                
            case 'getAllActivites':
                getAllActivites();
                break;
            case 'crudActivite':
                crud();
                break;
            case "ajouter_activite";
                ajouter_activite();
                break;

            case 'getAllEvenements':
                getAllEvenements();
                break;
            case 'crudEvenement':
                crud();
                break;
            case "ajouter_evenement";
                ajouter_evenement();
                break;

            case 'getAllPhotos':
                getAllPhotos();
                break;
            case 'crudPhoto':
                crud();
                break;
            case "ajouter_photo";
                ajouter_photo();
            break;

            // case 'getAllDons':
            //     getAllDons();
            //     break;
            // case 'crudDon':
            //     crud();
            //     break;

            
            

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