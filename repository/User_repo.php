<?php

class User_repo extends Connect_bdd 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllUsers() 
    {
        function createUserObject($query)
        {
            $tmpUser = new User;
            $tmpUser->createUserFromQuery($query);

            return ["user" => $tmpUser];
        }

        $sql = "SELECT * FROM user";
        $req = $this->bdd->prepare($sql);
        $req->execute();
        $result = $req->fetchAll();

        return array_map("createUserObject", $result);
        
    }

    public function getUserByEmail(string $email)
    {
        $sql = "SELECT * FROM user WHERE email_user = ?";
        $req = $this->bdd->prepare($sql);
        $req->execute([$email]);

        $tmpUser = $req->fetch();

        return $tmpUser;
    }
}

?>