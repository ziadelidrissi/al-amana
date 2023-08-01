<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    include('repository/config/Connect_bdd.php');
    include('repository/Activite_repo');
    include('model/Activite.php');
    include('repository/Evenement_repo.php');
    include('model/Evenement.php');
    include('repository/Photo_repo.php');
    include('model/Photo.php');
    include('repository/User_repo.php');
    include('model/User.php');


    echo "ACTIVITES";
    $repo_activites = new Activite_repo();
    $activites = $repo_activites->getAllActivites();
    var_dump($activites);


    echo "EVENEMENTS";
    $repo_evenements = new Evenement_repo();
    $evenements = $repo_evenements->getAllEvenements();
    var_dump($evenements);


    echo "PHOTOS";
    $repo_photos = new Photo_repo();
    $photos = $repo_photos->getAllPhotos();
    var_dump($photos);

    echo "USERS";
    $repo_users = new User_repo();
    $users = $repo_users->getAllUsers();
    var_dump($users);

    ?>


</body>
</html>