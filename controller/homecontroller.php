<?php

include('repository/config/Connect_bdd.php');

include('model/Activite.php');
include('model/Evenement.php');
include('model/Photo.php');
include('model/User.php');

include('repository/Activite_repo.php');
include('repository/Evenement_repo.php');
include('repository/Photo_repo.php');
include('repository/User_repo.php');

function accueil()
{
    include('view/accueil.php');
}

function galerie()
{
    include('view/galerie.php');
}

function evenements()
{
    include('view/evenements.php');
}

function en_savoir_plus()
{
    include('view/en_savoir_plus.php');
}

function adherez()
{
    include('view/adherez.php');
}

function mentions_legales()
{
    include('view/mentions_legales.php');
}

function connexion()
{
    if(!isset($_SESSION['user'])) 
    {
        include ('view/connexion.php');
    }
    else
    {
        header("Location:?action=accueil");
    }
}

function connexion_traitement()
{

    $response = array();

    if (empty($_POST['email']) OR empty($_POST['password']) )
    {
        $response['error'] = true;
        $response['message'] = 'Champs manquants';
    } 
    else
    {
        $repo = new User_repo;
        $tmpUser = $repo->getUserByEmail($_POST['email']);
        $user = new User;

        if ($tmpUser)
        {
            $user->createUserFromQuery($tmpUser);
            $isOk = $user->verifyUserToSignIn($_POST['password']);
            
            if ($isOk == "True" )
            {
                $user->connectUser();
                $response['success'] = true;
            }
            else 
            {
                $response['error'] = true;
                $response['message'] = 'Email ou mot de passe incorrect';
            }
        }
        else 
        {
            $response['error'] = true;
            $response['message'] = 'Email ou mot de passe incorrect';
        }

    }
    
    echo json_encode($response);
    
}

function deconnexion()
{
    session_destroy();
    header('Location: ?action=accueil');
}

?>