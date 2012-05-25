<?php

class ProjectsController extends NN_Controller
{
    function __construct()
    {
        parent::__construct();
        session_start();
    }
    
    function index()
    {
        $this->load->model('project');
        
        $data = $this->project->getCategories();
        $data = array_merge($data, $this->project->getProjects());                              
        
        $this->load->view('projects/header');
        $this->load->view('projects/body', $data);
        $this->load->view('footer'); 
    }
    
    function category($name)
    {
        $this->load->model('project');
        
        $data = $this->project->getCategories();
        $data = array_merge($data, $this->project->getCategoryProjects(mysql_real_escape_string($name)));
        
        $this->load->view('projects/header');
        $this->load->view('projects/category', $data);
        $this->load->view('footer'); 
    }
    
    function show($id)
    {
        $this->load->model('project');
        
        $data = $this->project->getProject(mysql_real_escape_string($id));                                      
        
        $this->load->view('projects/header');
        $this->load->view('projects/project', $data);
        $this->load->view('footer');
    }
}

#end of indexcontroller.php