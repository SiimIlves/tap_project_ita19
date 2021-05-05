<?php

class User extends controller {

    /**
     * User constructor.
     */
    public function __construct()
    {
        $usersModel = $this->model('User');
    }

    public function register(){
        $this->view('users/register');
    }
    public function login(){
        $this->view('users/login');
    }
}
