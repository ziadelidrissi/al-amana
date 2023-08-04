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

            case 'getAllEvenements':
                getAllEvenements();
                break;
            case 'crudEvenement':
                crud();
                break;

            case 'getAllPhotos':
                getAllPhotos();
                break;
            case 'crudPhoto':
                crud();
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