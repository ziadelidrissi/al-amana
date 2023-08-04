<?php

function crud()
{
    if (!empty($_SESSION) && $_SESSION['user']->getIdRoleUser() === 1)
    {
        include('view/crud.php');
    }
    else
    {
        accueil();
    }
}

function getAllActivites()
{
    $repo = new Activite_repo();
    $reqResult = $repo->getAllActivites();
    $response = [];

    foreach ($reqResult as $result)
    {
        $response[] = "<div>Nom : ".$result['activite']->getTitreActivite()."</div>";
    }

    echo json_encode($response);
}
function getAllEvenements()
{
    $repo = new Evenement_repo();
    $reqResult = $repo->getAllEvenements();
    $response = [];

    foreach ($reqResult as $result)
    {
        $response[] = "<div>Nom : ".$result['evenement']->getTitreEvenement()."</div>";
    }

    echo json_encode($response);
}
function getAllPhotos()
{
    $repo = new Photo_repo();
    $reqResult = $repo->getAllPhotos();
    $response = [];

    foreach ($reqResult as $result)
    {
        $response[] = "<div>Nom : ".$result['photo']->getTitrePhoto()."</div>";
    }

    echo json_encode($response);
}

?>

