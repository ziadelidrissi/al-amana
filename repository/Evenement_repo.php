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

}

?>