<?php
class User extends DB{

    private $nombre;
    private $username;

    public function userExists($user, $pass){
        $md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM users WHERE email = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);
        
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM users WHERE email = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser){
            $this->nombre = $currentUser['nombre'];
            $this->nombre = $currentUser['email'];
        }
    }
}

?>