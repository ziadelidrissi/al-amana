<?php

class Evenement
{
    private int $id_evenement;
    private string $titre_evenement;
    private string $description_evenement;
    private string $date_evenement;
    private string $image_evenement;

    public function createEvenementToInsert(int $id_evenement, string $titre_evenement, string $description_evenement, string $date_evenement, string $image_evenement)
    {
        $this->id_evenement = $id_evenement;
        $this->titre_evenement = $titre_evenement;
        $this->description_evenement = $description_evenement;
        $this->date_evenement = $date_evenement;
        $this->image_evenement = $image_evenement;
    }

    public function getIdEvenement() 
    {
        return $this->id_evenement;
    }

    public function getTitreEvenement()
    {
        return $this->titre_evenement;
    }
    public function getDescriptionEvenement()
    {
        return $this->description_evenement;
    }
    public function getDateEvenement()
    {
        return $this->date_evenement;
    }

    public function getImageEvenement() 
    {
        return $this->image_evenement;
    }

    public function createEvenementFromQuery($query)
    {
        if (isset($query['id_evenement']))
        {
            $this->id_evenement = $query['id_evenement'];
        }

        if (isset($query['titre_evenement']))
        {
            $this->titre_evenement = $query['titre_evenement'];
        }

        if (isset($query['description_evenement']))
        {
            $this->description_evenement = $query['description_evenement'];
        }

        if (isset($query['date_evenement']))
        {
            $this->date_evenement = $query['date_evenement'];
        }
        
        if (isset($query['image_evenement']))
        {
            $this->image_evenement = $query['image_evenement'];
        }

    }
}

?>