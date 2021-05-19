<?php

class Partners extends Controller
{
    public function __construct()
    {
        $this->pagesModel = $this->model('Partner');
    }

    public function index(){
        $partners => $this->pagesModel->getPartners();
        $data = array(
            'title' => 'Koostööpartnerid'
            'partners' => $partners
        );
        $this->view('partners/index', $data);
    }
    public function show($id){
        $partner = $this->partnerModel->getPartner($id);
        $data = array(
            'partner' => $partner
        );
        $this->view('partners/show', $data);
    }
}