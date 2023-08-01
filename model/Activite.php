<?php

class Activite 
{
    private int $id_activite;
    private string $titre_activite;
    private string $image_activite;

    public function createActiviteToInsert(int $id_activite, string $titre_activite, string $image_activite)
    {
        $this->id_activite = $id_activite;
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
}

?>