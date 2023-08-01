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

}

?>