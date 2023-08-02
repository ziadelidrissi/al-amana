<?php

class Photo
{
    private int $id_photo;
    private int $id_evenement;
    private string $titre_photo;
    private string $image_photo;

    public function createPhotoToInsert(int $id_photo, int $id_evenement, string $titre_photo, string $image_photo)
    {
        $this->id_photo = $id_photo;
        $this->id_evenement = $id_evenement;
        $this->titre_photo = $titre_photo;
        $this->image_photo = $image_photo;
    }

    public function getIdPhoto() 
    {
        return $this->id_photo;
    }

    function getIdEvenementPhoto()
    {
        return $this->id_evenement;
    }

    public function getTitrePhoto()
    {
        return $this->titre_photo;
    }

    public function getImagePhoto() 
    {
        return $this->image_photo;
    }

    public function createPhotoFromQuery($query)
    {
        if (isset($query['id_photo']))
        {
            $this->id_photo = $query['id_photo'];
        }

        if (isset($query['id_evenement']))
        {
            $this->id_evenement = $query['id_evenement'];
        }

        if (isset($query['titre_photo']))
        {
            $this->titre_photo = $query['titre_photo'];
        }
        
        if (isset($query['image_photo']))
        {
            $this->image_photo = $query['image_photo'];
        }
    }
}

?>