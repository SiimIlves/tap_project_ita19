<?php

class Partners extends Controller
{
    public function __construct()
    {
        $this->pagesModel = $this->model('Partner');
    }

    public function index(){
        $data = array(
            'title' => 'Welcome to KPR project',
            'content' => 'Partners index view is loaded by MVC'
        );
        $this->view('partners/index', $data);
    }
}