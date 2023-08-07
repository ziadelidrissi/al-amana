<?php

class Evenement_repo extends Connect_bdd 
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllEvenements() 
    {
        function createEvenementObject($query)
        {
            $tmpEvenement = new Evenement;
            $tmpEvenement->createEvenementFromQuery($query);

            return ["evenement" => $tmpEvenement];
        }

        $sql = "SELECT * FROM evenement";
        $req = $this->bdd->prepare($sql);
        $req->execute();
        $result = $req->fetchAll();

        return array_map("createEvenementObject", $result);
        
    }

    public function insertEvenement(Evenement $evenement)
    {
        $sql = "INSERT INTO evenement SET titre_evenement = ?, description_evenement = ?, date_evenement = ?, image_evenement = ?";
        $req = $this->bdd->prepare($sql);

        $titre_evenement =$evenement->getTitreEvenement();
        $description_evenement =$evenement->getDescriptionEvenement();
        $date_evenement =$evenement->getDateEvenement();
        $image_evenement = $evenement->getImageEvenement();

        $req->bindParam(1, $titre_evenement);
        $req->bindParam(2, $description_evenement);
        $req->bindParam(3, $date_evenement);
        $req->bindParam(4, $image_evenement);
        
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