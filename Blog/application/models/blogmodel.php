<?php

class BlogModel extends NN_Model
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
    
    function getPost($id)
    {
        $query = sprintf("SELECT p_title, p_content, p_category, p_added_date, p_id FROM posts WHERE p_id='".mysql_real_escape_string($id)."' ORDER BY p_id DESC");
        $ret = $this->db->selectQuery($query);                
        
        return $ret;
    }
    
    function getPosts()
    {
        $query = sprintf('SELECT p_title, p_content, p_category, p_added_date, p_id FROM posts ORDER BY p_id DESC');
        $ret = $this->db->selectQuery($query);                
        
        return $ret;
    }
    
    function getCategoryPosts($category)
    {
        $query = sprintf("SELECT p_title, p_content, p_category, p_added_date, p_id FROM posts WHERE p_category='".$category."' ORDER BY p_id DESC");          
        
        $ret = $this->db->selectQuery($query);                
        
        return $ret;
    }
    
    function getCategories()
    {
        $query = sprintf('SELECT DISTINCT p_category FROM posts');
        $cat = $this->db->selectQuery($query);
        
        $ret = array();
        $ret['count_category'] = array();
        
        foreach($cat['p_category'] as $value)
        {
            $query = sprintf("SELECT COUNT(p_category) AS '".$value."' FROM posts WHERE p_category='".$value."'");
            $ret_c = $this->db->selectQuery($query);
            
            $ret['count_category'][$value] = $ret_c[$value][0];                       
        } 
               
        return $ret;
    }
}

#end of blogmodel.php