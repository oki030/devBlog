<?php

class AdminController extends NN_Controller
{
    function __construct()
    {
        parent::__construct();
        session_start();
    }
    
    function index()
    {                
        if (empty($_SESSION['admin']))
        {            
            $this->login();            
        }
        else
        {
            $this->load->model('admin');
            $data = $this->admin->getWelcomeContact();                       
            
            $this->load->view('admin/header');
            $this->load->view('admin/body', $data);
            $this->load->view('footer');
        }
    }
    
    function login()
    {                
        if (isset($_POST['user']) && isset($_POST['pass']))
        {                           
            $this->load->model('admin');
            $data = $this->admin->getAdmin();
            
            if (isset($data['username'][0]) && isset($data['password'][0]))
            {
                if ( ($_POST['user'] == $data['username'][0]) && ($_POST['pass'] == $data['password'][0]) )
                {
                    $_SESSION['admin'] = 'logon';                                                                            
                    
                    header('Location: '.returnURL('admin'));
                    
                    return;                   
                }
            }                                                                                                                  
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/login');
        $this->load->view('footer');                        
    }
    
    function logout()
    {        
        unset($_SESSION['admin']);
        
        header('Location: '.returnURL('admin'));        
    }        
    
    function setWelcome()
    {
        // is it admin or user
        if (empty($_SESSION['admin']))
        {
            header('Location: '.returnURL('admin'));
            return;
        }        
        
        $data = array();
        $data['error'] = '<br/>Error';
        
        if (isset($_POST['content']))
        {
            $this->load->model('admin');
            $this->admin->setWelcome($_POST['content']);
            $data['error'] = '<br/>Successfully saved!';
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/report', $data);
        $this->load->view('footer');                                               
    }       
    
    function setContact()
    {
        // is it admin or user
        if (empty($_SESSION['admin']))
        {
            header('Location: '.returnURL('admin'));
            return;
        }        
        
        $data = array();
        $data['error'] = '<br/>Error';
        
        if (isset($_POST['content']))
        {
            $this->load->model('admin');
            $this->admin->setContact($_POST['content']);
            $data['error'] = '<br/>Successfully saved!';
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/report', $data);
        $this->load->view('footer');                                               
    }
    
    function setUserPass()
    {
        // is it admin or user
        if (empty($_SESSION['admin']))
        {
            header('Location: '.returnURL('admin'));
            return;
        }        
        
        $this->load->model('admin');
        $data = $this->admin->getAdmin();
        $data['error'] = '<br/> Successfully updated.';
        
        if (isset($_POST['user']))
        {   
            if ($_POST['olduser'] == $data['username'][0])
            {
                $this->admin->setAdmin($_POST['user'], $data['password'][0]);   
            }
            else
            {
                $data['error'] = '<br/> Error: Old username is not correct!';
            }            
        }
        
        if (isset($_POST['pass']))
        {
            if ($_POST['oldpass'] == $data['password'][0])
            {
                $this->admin->setAdmin($data['username'][0], $_POST['pass']);   
            }
            else
            {
                $data['error'] = '<br/> Error: Old password is not correct!';
            }
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/report', $data);
        $this->load->view('footer');                                               
    }
    
    // Blog actions
    function saveNewPost()
    {
        // is it admin or user
        if (empty($_SESSION['admin']))
        {
            header('Location: '.returnURL('admin'));
            return;
        }
        
        $data = array();
        $data['error'] = '<br/>Error';
        
        if (isset($_POST['content']))
        {
            $this->load->model('admin');
            $this->admin->addPost($_POST['title'], $_POST['content'], $_POST['category']);
            $data['error'] = '<br/>Successfully added!';
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/report', $data);
        $this->load->view('footer');
    }
    
    function editPost($id)
    {
        // is it admin or user
        if (empty($_SESSION['admin']))
        {
            header('Location: '.returnURL('admin'));
            return;
        }
        
        $this->load->model('admin');
        $data = $this->admin->getPost($id);
        
        $this->load->view('admin/header');
        $this->load->view('blog/edit', $data);
        $this->load->view('footer');
    }
    
    function updatePost()
    {
        // is it admin or user
        if (empty($_SESSION['admin']))
        {
            header('Location: '.returnURL('admin'));
            return;
        }
        
        $this->load->model('admin');
        $this->admin->updatePost($_POST['id'], $_POST['title'], $_POST['content'], $_POST['category']);
        
        header('Location: '.returnURL('blog'));
    }
    
    function deletePost($id)
    {
        // is it admin or user
        if (empty($_SESSION['admin']))
        {
            header('Location: '.returnURL('admin'));
            return;
        }
        
        $this->load->model('admin');
        $this->admin->deletePost($id);
        
        header('Location: '.returnURL('blog'));
    }
    
    // Projects actions    
    function saveNewProject()
    {
         // is it admin or user
        if (empty($_SESSION['admin']))
        {
            header('Location: '.returnURL('admin'));
            return;
        }
        
        $data = array();
        $data['error'] = '<br/>Error';
        
        if (isset($_POST['content']))
        {
            $this->load->model('admin');
            $this->admin->addProject($_POST['name'], $_POST['content'], $_POST['category'], '', $_POST['download'], $_POST['source']);
            $data['error'] = '<br/>Successfully added!';
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/report', $data);
        $this->load->view('footer');
    }
    
    function updateProject()
    {
        // is it admin or user
        if (empty($_SESSION['admin']))
        {
            header('Location: '.returnURL('admin'));
            return;
        }
        
        $this->load->model('admin');
        $this->admin->updateProject($_POST['id'], $_POST['name'], $_POST['content'], $_POST['category'], '', $_POST['download'], $_POST['source']);
        
        header('Location: '.returnURL('projects'));
    }
    
    function deleteProject($id)
    {
        // is it admin or user
        if (empty($_SESSION['admin']))
        {
            header('Location: '.returnURL('admin'));
            return;
        }
        
        $this->load->model('admin');
        $this->admin->deleteProject($id);
        
        header('Location: '.returnURL('projects'));
    }
    
    function editProject($id)
    {
        // is it admin or user
        if (empty($_SESSION['admin']))
        {
            header('Location: '.returnURL('admin'));
            return;
        }
        
        $this->load->model('admin');
        $data = $this->admin->getProject($id);
        
        $this->load->view('admin/header');
        $this->load->view('projects/edit', $data);
        $this->load->view('footer');
    }
}

#end of admincontroller.php