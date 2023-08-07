<?php

define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);

define("MAX_IMG_SIZE", 5 * MB);
// define("MAX_VIDEO_SIZE", 100 * MB);

define("VALID_IMG_TYPE", ["png", "webp", "jpeg"]);
// define("VALID_VIDEO_TYPE", ["mp4", "webm"]);

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
                                        <div class='mask mask-squircle'>
                                            <img class='w-12 h-12' src='assets/img/img_activite/".$result['activite']->getImageActivite()."' alt='".$result['activite']->getImageActivite()."' />
                                        </div>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    ".$result['activite']->getTitreActivite()."
                                    <br/>
                                    </td>
                                    <th class='flex flex-col justify-end'>
                                        <button class='mx-auto btn text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>
                                            <svg width='26' height='26' viewBox='0 0 26 26' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M24.4719 7.38007L22.2209 9.63104C21.9914 9.86053 21.6203 9.86053 21.3908 9.63104L15.9709 4.21112C15.7414 3.98163 15.7414 3.61053 15.9709 3.38104L18.2219 1.13007C19.135 0.21698 20.6193 0.21698 21.5373 1.13007L24.4719 4.06464C25.3898 4.97772 25.3898 6.4621 24.4719 7.38007ZM14.0373 5.31464L1.21503 18.1369L0.179873 24.0695C0.0382717 24.8703 0.736514 25.5637 1.5373 25.4269L7.46991 24.3869L20.2922 11.5646C20.5217 11.3351 20.5217 10.9641 20.2922 10.7346L14.8723 5.31464C14.6379 5.08514 14.2668 5.08514 14.0373 5.31464ZM6.21991 17.0383C5.95136 16.7697 5.95136 16.34 6.21991 16.0715L13.7394 8.55194C14.008 8.28339 14.4377 8.28339 14.7062 8.55194C14.9748 8.8205 14.9748 9.25018 14.7062 9.51874L7.18671 17.0383C6.91815 17.3068 6.48847 17.3068 6.21991 17.0383ZM4.45722 21.1447H6.80097V22.9172L3.65155 23.4689L2.133 21.9504L2.68476 18.801H4.45722V21.1447Z' fill='#C2A83E'/>
                                            </svg>
                                        </button>
                                        <button class='mx-auto btn text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>
                                            <svg width='23' height='26' viewBox='0 0 23 26' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M2.125 23.1563C2.125 23.7779 2.37193 24.374 2.81147 24.8135C3.25101 25.2531 3.84715 25.5 4.46875 25.5H18.5312C19.1529 25.5 19.749 25.2531 20.1885 24.8135C20.6281 24.374 20.875 23.7779 20.875 23.1563V6.75001H2.125V23.1563ZM15.4062 10.6563C15.4062 10.4491 15.4886 10.2503 15.6351 10.1038C15.7816 9.95732 15.9803 9.87501 16.1875 9.87501C16.3947 9.87501 16.5934 9.95732 16.7399 10.1038C16.8864 10.2503 16.9688 10.4491 16.9688 10.6563V21.5938C16.9688 21.801 16.8864 21.9997 16.7399 22.1462C16.5934 22.2927 16.3947 22.375 16.1875 22.375C15.9803 22.375 15.7816 22.2927 15.6351 22.1462C15.4886 21.9997 15.4062 21.801 15.4062 21.5938V10.6563ZM10.7188 10.6563C10.7188 10.4491 10.8011 10.2503 10.9476 10.1038C11.0941 9.95732 11.2928 9.87501 11.5 9.87501C11.7072 9.87501 11.9059 9.95732 12.0524 10.1038C12.1989 10.2503 12.2812 10.4491 12.2812 10.6563V21.5938C12.2812 21.801 12.1989 21.9997 12.0524 22.1462C11.9059 22.2927 11.7072 22.375 11.5 22.375C11.2928 22.375 11.0941 22.2927 10.9476 22.1462C10.8011 21.9997 10.7188 21.801 10.7188 21.5938V10.6563ZM6.03125 10.6563C6.03125 10.4491 6.11356 10.2503 6.26007 10.1038C6.40659 9.95732 6.6053 9.87501 6.8125 9.87501C7.0197 9.87501 7.21841 9.95732 7.36493 10.1038C7.51144 10.2503 7.59375 10.4491 7.59375 10.6563V21.5938C7.59375 21.801 7.51144 21.9997 7.36493 22.1462C7.21841 22.2927 7.0197 22.375 6.8125 22.375C6.6053 22.375 6.40659 22.2927 6.26007 22.1462C6.11356 21.9997 6.03125 21.801 6.03125 21.5938V10.6563ZM21.6562 2.06251H15.7969L15.3379 1.14942C15.2407 0.954215 15.0909 0.79001 14.9054 0.675281C14.72 0.560553 14.5062 0.499852 14.2881 0.500009H8.70703C8.48944 0.499172 8.27602 0.559646 8.09121 0.674503C7.90641 0.789359 7.75769 0.953951 7.66211 1.14942L7.20312 2.06251H1.34375C1.13655 2.06251 0.937836 2.14482 0.791323 2.29133C0.64481 2.43784 0.5625 2.63656 0.5625 2.84376L0.5625 4.40626C0.5625 4.61346 0.64481 4.81217 0.791323 4.95869C0.937836 5.1052 1.13655 5.18751 1.34375 5.18751H21.6562C21.8635 5.18751 22.0622 5.1052 22.2087 4.95869C22.3552 4.81217 22.4375 4.61346 22.4375 4.40626V2.84376C22.4375 2.63656 22.3552 2.43784 22.2087 2.29133C22.0622 2.14482 21.8635 2.06251 21.6562 2.06251Z' fill='red'/>
                                            </svg>
                                        </button>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>";
    }

    $addBtn[] = "<div class='flex justify-center mt-10'>
                    <!-- You can open the modal using ID.showModal() method -->
                    <button class='btn mx-auto bg-green text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg' onclick='my_modal_3.showModal()'>Ajouter une activité</button>
                    <dialog id='my_modal_3' class='modal'>
                        <div method='dialog' class='modal-box'>
                            <button onclick='closeModal()' type='button' class='btn btn-sm btn-circle btn-ghost absolute right-2 top-2'>✕</button>
                            <h3 class='font-bold text-lg'>Formulaire d'ajout d'une activité</h3>
                            <form id='ajouter_activite_form' method='POST' action='?admin=&action=ajouter_activite' enctype='multipart/form-data'>

                                <div id='error-message' class='text-red-800 font-bold'></div>

                                <div class='form-control w-full max-w-xs'>
                                    <label class='label'>
                                        <span class='label-text'>Nom</span>
                                    </label>
                                    <input type='text' name='title' class='input input-bordered w-full max-w-xs' required/>
                                </div>

                                <div class='form-control w-full max-w-xs'>
                                    <label class='label'>
                                        <span class='label-text'>Image</span>
                                    </label>
                                    <input type='file' name='file' class='input input-bordered w-full max-w-xs' required/>
                                </div>

                                <input type='submit' value='Ajouter' class='btn btn-xs bg-green text-white mt-4 sm:btn-sm md:btn-md lg:btn-lg'>

                            </form>
                        </div>
                    </dialog>
                </div>";

    echo json_encode([$response, $addBtn]);
}

function ajouter_activite()
{
    $response = array();

    
    $titre_activite = $_POST['title'] ?? '';
    $image_activite = $_FILES['file']['name'] ?? [];
    $taille_image = $_FILES['file']['size'];
    $tmpPath = $_FILES['file']['tmp_name'];
    
    
    if (isset(explode("/",$_FILES["file"]["type"])[1])){
        $file_type=explode("/",$_FILES["file"]["type"])[1];
    }
    else{
        $file_type="wrong";
    }
    
    $activite = new Activite;
    $activite->createActiviteToInsert($titre_activite,$image_activite);
    $verifyActivite = $activite->verifyActivite($file_type, $taille_image);

    if ($verifyActivite == "true")
    {
        if(move_uploaded_file($tmpPath, "assets/img/img_activite/".$activite->getImageActivite()))
        {
            $repo = new Activite_repo;
            if ($repo->insertActivite($activite))
            {
                $response['success'] = true;
                $response['message'] = "<p class='text-green font-bold'>Activite ajoutée en base de données</p>";
            }
            else
            {
                unlink("assets/img/img_activite/".$activite->getImageActivite());
                $response['success'] = false;
                $response['message'] = "Échec de l'upload de l'image";
            }
        }
        else
        {
            $response['success'] = false;
            $response['message'] = "Échec de l'upload de l'activité";
        }
    }
    else
    {
        $response['success'] = false;
        $response['message'] = $verifyActivite;
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
        $response[] = "<div class='overflow-x-auto'>
                            <table class='table'>
                                <tbody>
                                <tr>
                                    <td>
                                    <div class='flex items-center space-x-3'>
                                        <div class='avatar'>
                                        <div class='mask mask-squircle w-12 h-12'>
                                            <img src='assets/img/img_evenement/".$result['evenement']->getImageEvenement()."' alt='".$result['evenement']->getImageEvenement()."' />
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
                                        <button class='mx-auto btn text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>
                                            <svg width='26' height='26' viewBox='0 0 26 26' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M24.4719 7.38007L22.2209 9.63104C21.9914 9.86053 21.6203 9.86053 21.3908 9.63104L15.9709 4.21112C15.7414 3.98163 15.7414 3.61053 15.9709 3.38104L18.2219 1.13007C19.135 0.21698 20.6193 0.21698 21.5373 1.13007L24.4719 4.06464C25.3898 4.97772 25.3898 6.4621 24.4719 7.38007ZM14.0373 5.31464L1.21503 18.1369L0.179873 24.0695C0.0382717 24.8703 0.736514 25.5637 1.5373 25.4269L7.46991 24.3869L20.2922 11.5646C20.5217 11.3351 20.5217 10.9641 20.2922 10.7346L14.8723 5.31464C14.6379 5.08514 14.2668 5.08514 14.0373 5.31464ZM6.21991 17.0383C5.95136 16.7697 5.95136 16.34 6.21991 16.0715L13.7394 8.55194C14.008 8.28339 14.4377 8.28339 14.7062 8.55194C14.9748 8.8205 14.9748 9.25018 14.7062 9.51874L7.18671 17.0383C6.91815 17.3068 6.48847 17.3068 6.21991 17.0383ZM4.45722 21.1447H6.80097V22.9172L3.65155 23.4689L2.133 21.9504L2.68476 18.801H4.45722V21.1447Z' fill='#C2A83E'/>
                                            </svg>
                                        </button>
                                        <button class='mx-auto btn text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>
                                            <svg width='23' height='26' viewBox='0 0 23 26' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M2.125 23.1563C2.125 23.7779 2.37193 24.374 2.81147 24.8135C3.25101 25.2531 3.84715 25.5 4.46875 25.5H18.5312C19.1529 25.5 19.749 25.2531 20.1885 24.8135C20.6281 24.374 20.875 23.7779 20.875 23.1563V6.75001H2.125V23.1563ZM15.4062 10.6563C15.4062 10.4491 15.4886 10.2503 15.6351 10.1038C15.7816 9.95732 15.9803 9.87501 16.1875 9.87501C16.3947 9.87501 16.5934 9.95732 16.7399 10.1038C16.8864 10.2503 16.9688 10.4491 16.9688 10.6563V21.5938C16.9688 21.801 16.8864 21.9997 16.7399 22.1462C16.5934 22.2927 16.3947 22.375 16.1875 22.375C15.9803 22.375 15.7816 22.2927 15.6351 22.1462C15.4886 21.9997 15.4062 21.801 15.4062 21.5938V10.6563ZM10.7188 10.6563C10.7188 10.4491 10.8011 10.2503 10.9476 10.1038C11.0941 9.95732 11.2928 9.87501 11.5 9.87501C11.7072 9.87501 11.9059 9.95732 12.0524 10.1038C12.1989 10.2503 12.2812 10.4491 12.2812 10.6563V21.5938C12.2812 21.801 12.1989 21.9997 12.0524 22.1462C11.9059 22.2927 11.7072 22.375 11.5 22.375C11.2928 22.375 11.0941 22.2927 10.9476 22.1462C10.8011 21.9997 10.7188 21.801 10.7188 21.5938V10.6563ZM6.03125 10.6563C6.03125 10.4491 6.11356 10.2503 6.26007 10.1038C6.40659 9.95732 6.6053 9.87501 6.8125 9.87501C7.0197 9.87501 7.21841 9.95732 7.36493 10.1038C7.51144 10.2503 7.59375 10.4491 7.59375 10.6563V21.5938C7.59375 21.801 7.51144 21.9997 7.36493 22.1462C7.21841 22.2927 7.0197 22.375 6.8125 22.375C6.6053 22.375 6.40659 22.2927 6.26007 22.1462C6.11356 21.9997 6.03125 21.801 6.03125 21.5938V10.6563ZM21.6562 2.06251H15.7969L15.3379 1.14942C15.2407 0.954215 15.0909 0.79001 14.9054 0.675281C14.72 0.560553 14.5062 0.499852 14.2881 0.500009H8.70703C8.48944 0.499172 8.27602 0.559646 8.09121 0.674503C7.90641 0.789359 7.75769 0.953951 7.66211 1.14942L7.20312 2.06251H1.34375C1.13655 2.06251 0.937836 2.14482 0.791323 2.29133C0.64481 2.43784 0.5625 2.63656 0.5625 2.84376L0.5625 4.40626C0.5625 4.61346 0.64481 4.81217 0.791323 4.95869C0.937836 5.1052 1.13655 5.18751 1.34375 5.18751H21.6562C21.8635 5.18751 22.0622 5.1052 22.2087 4.95869C22.3552 4.81217 22.4375 4.61346 22.4375 4.40626V2.84376C22.4375 2.63656 22.3552 2.43784 22.2087 2.29133C22.0622 2.14482 21.8635 2.06251 21.6562 2.06251Z' fill='red'/>
                                            </svg>
                                        </button>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>";
    }

    $addBtn[] = "<div class='flex justify-center mt-10'>
                    <!-- You can open the modal using ID.showModal() method -->
                    <button class='btn mx-auto bg-green text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg' onclick='my_modal_3.showModal()'>Ajouter un évènement</button>
                    <dialog id='my_modal_3' class='modal'>
                        <div method='dialog' class='modal-box'>
                            <button onclick='closeModal()' type='button' class='btn btn-sm btn-circle btn-ghost absolute right-2 top-2'>✕</button>
                            <h3 class='font-bold text-lg'>Formulaire d'ajout d'un évènement</h3>
                            <form id='ajouter_evenement_form' method='POST' action='?admin=&action=ajouter_evenement' enctype='multipart/form-data'>

                                <div id='error-message' class='text-red-800 font-bold'></div>

                                <div class='form-control w-full max-w-xs'>
                                    <label class='label'>
                                        <span class='label-text'>Titre</span>
                                    </label>
                                    <input type='text' name='title' class='input input-bordered w-full max-w-xs' required/>
                                </div>

                                <div class='form-control w-full max-w-xs'>
                                    <label class='label'>
                                        <span class='label-text'>Description</span>
                                    </label>
                                    <input type='text' name='description' class='input input-bordered w-full max-w-xs' required/>
                                </div>

                                <div class='form-control w-full max-w-xs'>
                                    <label class='label'>
                                        <span class='label-text'>Date</span>
                                    </label>
                                    <input type='datetime-local' name='date' class='input input-bordered w-full max-w-xs' required/>
                                </div>

                                <div class='form-control w-full max-w-xs'>
                                    <label class='label'>
                                        <span class='label-text'>Image</span>
                                    </label>
                                    <input type='file' name='file' class='input input-bordered w-full max-w-xs' required/>
                                </div>


                                <input type='submit' value='Ajouter' class='btn btn-xs bg-green text-white mt-4 sm:btn-sm md:btn-md lg:btn-lg'>

                            </form>
                        </div>
                    </dialog>
                </div>";

    echo json_encode([$response, $addBtn]);
}

function ajouter_evenement()
{
    $response = array();

    
    $titre_evenement = $_POST['title'] ?? '';
    $description_evenement = $_POST['description'] ?? '';
    $date_evenement = $_POST['date'] ?? '';
    $image_evenement = $_FILES['file']['name'] ?? [];
    $taille_image = $_FILES['file']['size'];
    $tmpPath = $_FILES['file']['tmp_name'];
    
    
    if (isset(explode("/",$_FILES["file"]["type"])[1])){
        $file_type=explode("/",$_FILES["file"]["type"])[1];
    }
    else{
        $file_type="wrong";
    }
    
    $evenement = new Evenement;
    $evenement->createEvenementToInsert($titre_evenement, $description_evenement, $date_evenement, $image_evenement);
    $verifyEvenement = $evenement->verifyEvenement($file_type, $taille_image);

    if ($verifyEvenement == "true")
    {
        if(move_uploaded_file($tmpPath, "assets/img/img_evenement/".$evenement->getImageEvenement()))
        {
            $repo = new Evenement_repo;
            if ($repo->insertEvenement($evenement))
            {
                $response['success'] = true;
                $response['message'] = "<p class='text-green font-bold'>Évènement ajoutée en base de données</p>";
            }
            else
            {
                unlink("assets/img/img_evenement/".$evenement->getImageevenement());
                $response['success'] = false;
                $response['message'] = "Échec de l'upload de l'image";
            }
        }
        else
        {
            $response['success'] = false;
            $response['message'] = "Échec de l'upload de l'activité";
        }
    }
    else
    {
        $response['success'] = false;
        $response['message'] = $verifyEvenement;
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
                                        <button class='mx-auto btn text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>
                                            <svg width='26' height='26' viewBox='0 0 26 26' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M24.4719 7.38007L22.2209 9.63104C21.9914 9.86053 21.6203 9.86053 21.3908 9.63104L15.9709 4.21112C15.7414 3.98163 15.7414 3.61053 15.9709 3.38104L18.2219 1.13007C19.135 0.21698 20.6193 0.21698 21.5373 1.13007L24.4719 4.06464C25.3898 4.97772 25.3898 6.4621 24.4719 7.38007ZM14.0373 5.31464L1.21503 18.1369L0.179873 24.0695C0.0382717 24.8703 0.736514 25.5637 1.5373 25.4269L7.46991 24.3869L20.2922 11.5646C20.5217 11.3351 20.5217 10.9641 20.2922 10.7346L14.8723 5.31464C14.6379 5.08514 14.2668 5.08514 14.0373 5.31464ZM6.21991 17.0383C5.95136 16.7697 5.95136 16.34 6.21991 16.0715L13.7394 8.55194C14.008 8.28339 14.4377 8.28339 14.7062 8.55194C14.9748 8.8205 14.9748 9.25018 14.7062 9.51874L7.18671 17.0383C6.91815 17.3068 6.48847 17.3068 6.21991 17.0383ZM4.45722 21.1447H6.80097V22.9172L3.65155 23.4689L2.133 21.9504L2.68476 18.801H4.45722V21.1447Z' fill='#C2A83E'/>
                                            </svg>
                                        </button>
                                        <button class='mx-auto btn text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg'>
                                            <svg width='23' height='26' viewBox='0 0 23 26' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M2.125 23.1563C2.125 23.7779 2.37193 24.374 2.81147 24.8135C3.25101 25.2531 3.84715 25.5 4.46875 25.5H18.5312C19.1529 25.5 19.749 25.2531 20.1885 24.8135C20.6281 24.374 20.875 23.7779 20.875 23.1563V6.75001H2.125V23.1563ZM15.4062 10.6563C15.4062 10.4491 15.4886 10.2503 15.6351 10.1038C15.7816 9.95732 15.9803 9.87501 16.1875 9.87501C16.3947 9.87501 16.5934 9.95732 16.7399 10.1038C16.8864 10.2503 16.9688 10.4491 16.9688 10.6563V21.5938C16.9688 21.801 16.8864 21.9997 16.7399 22.1462C16.5934 22.2927 16.3947 22.375 16.1875 22.375C15.9803 22.375 15.7816 22.2927 15.6351 22.1462C15.4886 21.9997 15.4062 21.801 15.4062 21.5938V10.6563ZM10.7188 10.6563C10.7188 10.4491 10.8011 10.2503 10.9476 10.1038C11.0941 9.95732 11.2928 9.87501 11.5 9.87501C11.7072 9.87501 11.9059 9.95732 12.0524 10.1038C12.1989 10.2503 12.2812 10.4491 12.2812 10.6563V21.5938C12.2812 21.801 12.1989 21.9997 12.0524 22.1462C11.9059 22.2927 11.7072 22.375 11.5 22.375C11.2928 22.375 11.0941 22.2927 10.9476 22.1462C10.8011 21.9997 10.7188 21.801 10.7188 21.5938V10.6563ZM6.03125 10.6563C6.03125 10.4491 6.11356 10.2503 6.26007 10.1038C6.40659 9.95732 6.6053 9.87501 6.8125 9.87501C7.0197 9.87501 7.21841 9.95732 7.36493 10.1038C7.51144 10.2503 7.59375 10.4491 7.59375 10.6563V21.5938C7.59375 21.801 7.51144 21.9997 7.36493 22.1462C7.21841 22.2927 7.0197 22.375 6.8125 22.375C6.6053 22.375 6.40659 22.2927 6.26007 22.1462C6.11356 21.9997 6.03125 21.801 6.03125 21.5938V10.6563ZM21.6562 2.06251H15.7969L15.3379 1.14942C15.2407 0.954215 15.0909 0.79001 14.9054 0.675281C14.72 0.560553 14.5062 0.499852 14.2881 0.500009H8.70703C8.48944 0.499172 8.27602 0.559646 8.09121 0.674503C7.90641 0.789359 7.75769 0.953951 7.66211 1.14942L7.20312 2.06251H1.34375C1.13655 2.06251 0.937836 2.14482 0.791323 2.29133C0.64481 2.43784 0.5625 2.63656 0.5625 2.84376L0.5625 4.40626C0.5625 4.61346 0.64481 4.81217 0.791323 4.95869C0.937836 5.1052 1.13655 5.18751 1.34375 5.18751H21.6562C21.8635 5.18751 22.0622 5.1052 22.2087 4.95869C22.3552 4.81217 22.4375 4.61346 22.4375 4.40626V2.84376C22.4375 2.63656 22.3552 2.43784 22.2087 2.29133C22.0622 2.14482 21.8635 2.06251 21.6562 2.06251Z' fill='red'/>
                                            </svg>
                                        </button>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>";
    }

    $addBtn[] = "<div class='flex justify-center mt-10'>
                    <!-- You can open the modal using ID.showModal() method -->
                    <button class='btn mx-auto bg-green text-white btn-xs sm:btn-sm md:btn-md lg:btn-lg' onclick='my_modal_3.showModal()'>Ajouter une photo</button>
                    <dialog id='my_modal_3' class='modal'>
                        <div method='dialog' class='modal-box'>
                            <button onclick='closeModal()' type='button' class='btn btn-sm btn-circle btn-ghost absolute right-2 top-2'>✕</button>
                            <h3 class='font-bold text-lg'>Formulaire d'ajout d'une photo</h3>
                            <form id='ajouter_photo_form' method='POST' action='?admin=&action=ajouter_photo' enctype='multipart/form-data'>

                                <div id='error-message' class='text-red-800 font-bold'></div>

                                <div class='form-control w-full max-w-xs'>
                                    <label class='label'>
                                        <span class='label-text'>Titre</span>
                                    </label>
                                    <input type='text' name='title' class='input input-bordered w-full max-w-xs' required/>
                                </div>

                                <div class='form-control w-full max-w-xs'>
                                    <label class='label'>
                                        <span class='label-text'>Image</span>
                                    </label>
                                    <input type='file' name='file' class='input input-bordered w-full max-w-xs' required/>
                                </div>

                                <input type='submit' value='Ajouter' class='btn btn-xs bg-green text-white mt-4 sm:btn-sm md:btn-md lg:btn-lg'>

                            </form>
                        </div>
                    </dialog>
                </div>";

    echo json_encode([$response, $addBtn]);
}

function ajouter_photo()
{
    $response = array();

    
    $titre_photo = $_POST['title'] ?? '';
    $image_photo = $_FILES['file']['name'] ?? [];
    $taille_image = $_FILES['file']['size'];
    $tmpPath = $_FILES['file']['tmp_name'];
    
    
    if (isset(explode("/",$_FILES["file"]["type"])[1])){
        $file_type=explode("/",$_FILES["file"]["type"])[1];
    }
    else{
        $file_type="wrong";
    }
    
    $photo = new Photo;
    $photo->createPhotoToInsert($titre_photo,$image_photo);
    $verifyPhoto = $photo->verifyPhoto($file_type, $taille_image);

    if ($verifyPhoto == "true")
    {
        if(move_uploaded_file($tmpPath, "assets/img/img_photo/".$photo->getImagePhoto()))
        {
            $repo = new Photo_repo;
            if ($repo->insertPhoto($photo))
            {
                $response['success'] = true;
                $response['message'] = "<p class='text-green font-bold'>Photo ajoutée en base de données</p>";
            }
            else
            {
                unlink("assets/img/img_photo/".$photo->getImagePhoto());
                $response['success'] = false;
                $response['message'] = "Échec de l'upload de l'image";
            }
        }
        else
        {
            $response['success'] = false;
            $response['message'] = "Échec de l'upload de l'activité";
        }
    }
    else
    {
        $response['success'] = false;
        $response['message'] = $verifyPhoto;
    }

    echo json_encode($response);

}

?>

