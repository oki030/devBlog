<?php

class ContactController extends NN_Controller
{
    function __construct()
    {
        parent::__construct();
        session_start();
    }
    
    function index()
    {
        $this->load->model('contact');
        
        $data = $this->contact->getContactInfo();
        
        $this->load->view('contact/header');
        $this->load->view('contact/body', $data);
        $this->load->view('footer');
    }
}

#end of contactcontroller.php