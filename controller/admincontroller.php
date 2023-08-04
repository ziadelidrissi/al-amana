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
        $response[] = "<div class='overflow-x-auto'>
                            <table class='table'>
                                <tbody>
                                <tr>
                                    <td>
                                    <div class='flex items-center space-x-3'>
                                        <div class='avatar'>
                                        <div class='mask mask-squircle w-12 h-12'>
                                            <img src='assets/img/".$result['activite']->getImageActivite()."' alt='".$result['activite']->getImageActivite()."' />
                                        </div>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    ".$result['activite']->getTitreActivite()."
                                    <br/>
                                    </td>
                                    <th class='flex flex-col justify-end'>
                                        <button class='mx-auto btn bg-yellow text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>Modifier</button>
                                        <button class='mx-auto btn bg-red-500 text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>Supprimer</button>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>";
    }

    $addBtn[] = "<div class='flex justify-center mt-10'>
                    <button class='mx-auto btn bg-green text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>Ajouter une activité</button>
                </div> ";

    echo json_encode([$response, $addBtn]);
}
function getAllEvenements()
{
    $repo = new Evenement_repo();
    $reqResult = $repo->getAllEvenements();
    $response = [];

    foreach ($reqResult as $result)
    {
        $response[] = "<div class='overflow-x-auto'>
                            <table class='table'>
                                <tbody>
                                <tr>
                                    <td>
                                    <div class='flex items-center space-x-3'>
                                        <div class='avatar'>
                                        <div class='mask mask-squircle w-12 h-12'>
                                            <img src='assets/img/".$result['evenement']->getImageEvenement()."' alt='".$result['evenement']->getImageEvenement()."' />
                                        </div>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                        ".$result['evenement']->getTitreEvenement()."
                                    </td>
                                    <td>
                                        ".$result['evenement']->getDescriptionEvenement()."
                                    </td>
                                    <td>
                                        ".$result['evenement']->getDateEvenement()."
                                    </td>
                                    <th class='flex flex-col justify-end'>
                                        <button class='mx-auto btn bg-yellow text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>Modifier</button>
                                        <button class='mx-auto btn bg-red-500 text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>Supprimer</button>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>";
    }

    $addBtn[] = "<div class='flex justify-center mt-10'>
                    <button class='mx-auto btn bg-green text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>Ajouter un évènement</button>
                </div> ";

    echo json_encode([$response, $addBtn]);
}

function getAllPhotos()
{
    $repo = new Photo_repo();
    $reqResult = $repo->getAllPhotos();
    $response = [];

    foreach ($reqResult as $result)
    {
        $response[] = "<div class='overflow-x-auto'>
                            <table class='table'>
                                <tbody>
                                <tr>
                                    <td>
                                    <div class='flex items-center space-x-3'>
                                        <div class='avatar'>
                                        <div class='mask mask-squircle w-12 h-12'>
                                            <img src='assets/img/".$result['photo']->getImagePhoto()."' alt='".$result['photo']->getImagePhoto()."' />
                                        </div>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                        ".$result['photo']->getTitrePhoto()."
                                    </td>
                                    <th class='flex flex-col justify-end'>
                                        <button class='mx-auto btn bg-yellow text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>Modifier</button>
                                        <button class='mx-auto btn bg-red-500 text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>Supprimer</button>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>";
    }

    $addBtn[] = "<div class='flex justify-center mt-10'>
                    <button class='mx-auto btn bg-green text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>Ajouter une photo</button>
                </div> ";

    echo json_encode([$response, $addBtn]);
}

?>

