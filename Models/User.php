<?php

require_once __DIR__ . '/Person.php';

class User extends Person {



    public $email;
    public $password;

    public function __construct($name, $lastname, $email, $password) 
    {
        $this->email = $email;
        $this->password = $password;
        parent::__construct($name, $lastname);
    }

}