<?php

class Activite 
{
    private int $id_activite;
    private string $titre_activite;
    private string $image_activite;

    public function createActiviteToInsert(string $titre_activite, string $image_activite)
    {
        $this->titre_activite = $titre_activite;
        $this->image_activite = $image_activite;
    }

    public function getIdActivite() 
    {
        return $this->id_activite;
    }

    public function getTitreActivite()
    {
        return $this->titre_activite;
    }

    public function getImageActivite() 
    {
        return $this->image_activite;
    }

    public function createActiviteFromQuery($query)
    {
        if (isset($query['id_activite']))
        {
            $this->id_activite = $query['id_activite'];
        }

        if (isset($query['titre_activite']))
        {
            $this->titre_activite = $query['titre_activite'];
        }
        
        if (isset($query['image_activite']))
        {
            $this->image_activite = $query['image_activite'];
        }
    }

    public function verifyActivite($type_image, $taille_image)
    {   
        if (empty($this->titre_activite)) 
        {
            return "Veuillez mettre un titre";
        }
        if (empty($this->image_activite)) 
        {
            return "Veuillez mettre une image";
        }
        if (strlen($this->titre_activite)> 63)
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