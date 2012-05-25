<?php

class HomeModel extends NN_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->connect();
    }
    
    function __destruct()
    {
        $this->db->disconnect();
    }
    
    function getWelcomeMsg()
    {
        $query = sprintf('SELECT welcome_msg FROM admin;');
        $ret = $this->db->selectQuery($query);
        
        return $ret;
    }
    
    function getProjects()
    {
        $query = sprintf('SELECT name, id FROM projects ORDER BY id DESC LIMIT 0,10;');
        $ret = $this->db->selectQuery($query);
        
        return $ret;
    }
    
    function getPosts()
    {
        $query = sprintf('SELECT p_title, p_id FROM posts ORDER BY p_id DESC LIMIT 0,10;');
        $ret = $this->db->selectQuery($query);
        
        return $ret;
    }
}

#end of homemodel.php