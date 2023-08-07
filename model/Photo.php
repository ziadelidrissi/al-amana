<?php

class Photo
{
    private int $id_photo;
    private int $id_evenement;
    private string $titre_photo;
    private string $image_photo;

    public function createPhotoToInsert(string $titre_photo, string $image_photo)
    {
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

    public function verifyPhoto($type_image, $taille_image)
    {   
        if (empty($this->titre_photo)) 
        {
            return "Veuillez mettre un titre";
        }
        if (empty($this->image_photo)) 
        {
            return "Veuillez mettre une image";
        }
        if (strlen($this->titre_photo)> 63)
        {
            return "Titre trop long";
        }
        if ($type_image == "wrong")
        {
            return  "Format d'image accepté : .png .webp .jpeg .jpg";
        }
        if (!in_array($type_image,VALID_IMG_TYPE) )
        {
            return  "Format d'image accepté : .png .webp .jpeg .jpg";
        }

        return "true";

    }
}

?>