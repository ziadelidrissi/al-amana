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

            return ["Photo" => $tmpPhoto];
        }

        $sql = "SELECT * FROM Photo";
        $req = $this->bdd->prepare($sql);
        $req->execute();
        $result = $req->fetchAll();

        return array_map("createPhotoObject", $result);
        
    }

}

?>