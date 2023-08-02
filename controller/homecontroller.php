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

?>