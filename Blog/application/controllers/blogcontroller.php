<?php

class BlogController extends NN_Controller
{
    function __construct()
    {
        parent::__construct();
        session_start();
    }
    
    function index()
    {
        $this->load->model('blog');
        
        $data = $this->blog->getCategories();
        $data = array_merge($data, $this->blog->getPosts());                              
        
        $this->load->view('blog/header');
        $this->load->view('blog/body', $data);
        $this->load->view('footer');       
    }
    
    function category($name)
    {
        $this->load->model('blog');
        
        $data = $this->blog->getCategories();
        $data = array_merge($data, $this->blog->getCategoryPosts(mysql_real_escape_string($name)));                                              
        
        $this->load->view('blog/header');
        $this->load->view('blog/category', $data);
        $this->load->view('footer');    
    }
    
    function show($id)
    {
        $this->load->model('blog');
        
        $data = $this->blog->getPost(mysql_real_escape_string($id));                                     
        
        $this->load->view('blog/header');
        $this->load->view('blog/post', $data);
        $this->load->view('footer');
    }      
}

#end of blogcontroller.php