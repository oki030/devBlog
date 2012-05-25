<?php

class HomeController extends NN_Controller
{
    function __construct()
    {
        parent::__construct();
        session_start();
    }
    
    function index()
    {
        $this->load->model('home');
        
        $data = $this->home->getWelcomeMsg();
        $data = array_merge($data, $this->home->getProjects()); 
        $data = array_merge($data, $this->home->getPosts());               
        
        $this->load->view('home/header');
        $this->load->view('home/body', $data);
        $this->load->view('footer');
    }
}

#end of testcontroller.php