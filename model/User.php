<?php

class User
{
    private int $id_user;
    private int $id_role;
    private string $nom_user;
    private string $prenom_user;
    private string $email_user;
    private string $mdp_user;


    public function createUserToSignUp(int $id_user, int $id_role, string $nom_user, string $prenom_user, string $email_user, string $mdp_user)
    {
        $this->id_user = $id_user;
        $this->id_role = $id_role;
        $this->nom_user = $nom_user;
        $this->prenom_user = $prenom_user;
        $this->email_user = $email_user;
        $this->mdp_user = $mdp_user;
    }

    public function getIdUser() 
    {
        return $this->id_user;
    }

    public function getIdRoleUser()
    {
        return $this->id_role;
    }

    public function getNomUser()
    {
        return $this->nom_user;
    }

    public function getPrenomUser()
    {
        return $this->prenom_user;
    }

    public function getEmailUser() 
    {
        return $this->email_user;
    }

    public function getMdpUser() 
    {
        return $this->mdp_user;
    }
    
    public function createUserFromQuery($query)
    {
        if (isset($query['id_user']))
        {
            $this->id_user = $query['id_user'];
        }

        if (isset($query['id_role']))
        {
            $this->id_role = $query['id_role'];
        }

        if (isset($query['nom_user']))
        {
            $this->nom_user = $query['nom_user'];
        }

        if (isset($query['prenom_user']))
        {
            $this->prenom_user = $query['prenom_user'];
        }

        if (isset($query['email_user']))
        {
            $this->email_user = $query['email_user'];
        }

        if (isset($query['mdp_user']))
        {
            $this->mdp_user = $query['mdp_user'];
        }
    }

    public function verifyUserToSignin($password)
    {
        if (!password_verify($password,$this->getMdpUser()))
        {
            return "uncorrectPassword";
        }
        return "True";
    }

    public function connectUser()
    {
        $_SESSION['user'] = $this;
    }

}

?>