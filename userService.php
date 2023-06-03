<?php
class userService
{
    private $email;
    private $password;
    private $username;
    private $dataUser;
    private $getRole;
    

    public function __construct($email, $password, $username)
    {
        $this->dataUser = [
            (object) [
                'email' => "kafami@students.undip.ac.id",
                'password' => "12345",
                'role' => "Super Admin",
                'username' => "kaffa"
            ],
            (object)
            
            [
                'email' => "radit@students.undip.ac.id",
                'password' => "12345",
                'role' => "User",
                'username' => "alle"
            ]
        ];
        $this->email = $email;
        $this->password = $password;
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function login()
    {
        $user = $this->checkCredentials();
        if ($user) {
            $this->getRole = $user->role;
            return $user->username; 
        } else {
            return false;
        }
    }

    protected function checkCredentials()
    {
        foreach ($this->dataUser as $key => $value) {
            if ($value->email == $this->email && $value->password == $this->password) {
                return $value;
            }
        }
        return false;
    }

    public function getRole()
    {
        return $this->getRole;
    }
    

}