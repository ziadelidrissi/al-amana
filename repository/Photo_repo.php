<?php

class Photo_repo extends Connect_bdd 
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllPhotos() 
    {
        function createPhotoObject($query)
        {
            $tmpPhoto = new Photo;
            $tmpPhoto->createPhotoFromQuery($query);

            return ["photo" => $tmpPhoto];
        }

        $sql = "SELECT * FROM Photo";
        $req = $this->bdd->prepare($sql);
        $req->execute();
        $result = $req->fetchAll();

        return array_map("createPhotoObject", $result);
        
    }

    public function insertPhoto(Photo $photo)
    {
        $sql = "INSERT INTO photo SET titre_photo = ?, image_photo = ?";
        $req = $this->bdd->prepare($sql);

        $titre_photo =$photo->getTitrePhoto();
        $image_photo = $photo->getImagePhoto();

        $req->bindParam(1, $titre_photo);
        $req->bindParam(2, $image_photo);
        
        if (!$req->execute())
        {
            return false;
        }
        else
        {
            return true;
        }
    }

}

?>