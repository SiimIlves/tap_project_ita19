<?php


class Users extends Controller
{

    /**
     * Users constructor.
     */
    public function __construct()
    {
        $usersModel = $this->model('User');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = array(
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password' => ''
                if(emtpy($data['name'])){
                    $data['name_err'] = "please enter the name";
                }
                if(emtpy($data['name'])){
                    $data['email_err'] = "please enter the email";
                } else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                    $data['email_err'] = "please enter a valid email";
                } else if($this->usersModel->findUserByEmail($data['email'])){
                    $data['email_err'] = 'Email is already taken';
                }
                if(emtpy($data['name'])){
                    $data['password_err'] = "please enter a password";
                } else if(strlen($data['password'])<6) {
                    $data['password_err'] = 'Password must consist of at least 6 characters.';
                }
                if(emtpy($data['name'])){
                    $data['confirm_password_err'] = "please confirm the password";
                } else if(strlen($data['confirm_password'])<6) {
                    $data['confirm_password_err'] = 'Password must consist of at least 6 characters.';
                } else if($data[password] !== $data['confirm_password']){
                    $data['confirm_password_err'] = 'Passwords do not match';
                }
            );
            print_r($data);
        } else {
            $this->view('users/register');
        }
    }

    public function login()
    {
        $this->view('users/login');
    }
}