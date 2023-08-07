<?php

class Activite_repo extends Connect_bdd 
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllActivites() 
    {
        function createActiviteObject($query)
        {
            $tmpActivite = new Activite;
            $tmpActivite->createActiviteFromQuery($query);

            return ["activite" => $tmpActivite];
        }

        $sql = "SELECT * FROM activite";
        $req = $this->bdd->prepare($sql);
        $req->execute();
        $result = $req->fetchAll();

        return array_map("createActiviteObject", $result);
        
    }

    public function insertActivite(Activite $activite)
    {
        $sql = "INSERT INTO activite SET titre_activite = ?, image_activite = ?";
        $req = $this->bdd->prepare($sql);

        $titre_activite =$activite->getTitreActivite();
        $image_activite = $activite->getImageActivite();

        $req->bindParam(1, $titre_activite);
        $req->bindParam(2, $image_activite);
        
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