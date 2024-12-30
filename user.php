<?php

class user{
    private $email;
    private $password;

    public function save($email,$password,$conn){
        
        $sql="INSERT INTO users (email , password) VALUES (:email,:password)";
        $stmt=$conn->prepare($sql);
        $stmt->execute([
            ":email"=>$email,
            ":password"=>$password
        ]);

    }
}
?>