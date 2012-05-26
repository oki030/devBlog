<?php

class AdminModel extends NN_Model
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
    
    function getAdmin()
    {
        $query = sprintf('SELECT username, password FROM admin;');
        $ret = $this->db->selectQuery($query);
        
        return $ret;
    }
    
    function setAdmin($user, $pass)
    {
        $query = sprintf("UPDATE admin SET username='".mysql_real_escape_string($user)."', password='".mysql_real_escape_string($pass)."'");
        $ret = $this->db->Query($query);
                
        return $ret;
    } 
    
    function getWelcomeContact()
    {
        $query = sprintf('SELECT welcome_msg, contact_info FROM admin;');
        $ret = $this->db->selectQuery($query);
        
        return $ret;
    }
    
    function setWelcome($msg)
    {        
        $query = sprintf("UPDATE admin SET welcome_msg='".mysql_real_escape_string($msg)."'");
        $ret = $this->db->Query($query);
                
        return $ret;
    }        
    
    function setContact($msg)
    {
        $query = sprintf("UPDATE admin SET contact_info='".mysql_real_escape_string($msg)."'");
        $ret = $this->db->Query($query);
                
        return $ret;
    }
    
    // Blog
    function deletePost($id)
    {
        $query = sprintf("DELETE FROM posts WHERE p_id='".mysql_real_escape_string($id)."'");
        $ret = $this->db->query($query);
        
        return $ret;
    }
    
    function addPost($title, $content, $category)
    {
        $val = "'".mysql_real_escape_string($title)."','".$content."','".mysql_real_escape_string($category);
        $query = sprintf("INSERT INTO `posts`(`p_title`, `p_content`, `p_category`, `p_added_date`) VALUES (".$val."','".date('y-m-d')."');");
        $ret = $this->db->query($query);
        
        return $ret;
    }
    
    function getPost($id)
    {
        $query = sprintf("SELECT p_title, p_content, p_category, p_added_date, p_id FROM posts WHERE p_id='".mysql_real_escape_string($id)."' ORDER BY p_id DESC");
        $ret = $this->db->selectQuery($query);                
        
        return $ret;
    }
    
    function updatePost($id, $title, $content, $category)
    {
        $query = sprintf("UPDATE posts SET p_title='".mysql_real_escape_string($title)."', p_content='".$content."', p_category='".mysql_real_escape_string($category)."' WHERE p_id='".$id."'");
        $ret = $this->db->Query($query);
                
        return $ret;
    }
    
    // Projects
    function addProject($name, $content, $category, $imgname, $download, $source)
    {
        $val = "'".mysql_real_escape_string($name)."','".$content."','".mysql_real_escape_string($category)."','".mysql_real_escape_string($imgname)."','".mysql_real_escape_string($source)."','".mysql_real_escape_string($download);
        $query = sprintf("INSERT INTO `projects`(`name`, `description`, `category`, `img_name`, `source_link`, `download_link`, `added_date`) VALUES (".$val."','".date('y-m-d')."');");
        $ret = $this->db->query($query);
        
        return $ret;
    }
    
    function getProject($id)
    {
        $query = sprintf("SELECT name, description, category, img_name, added_date, id, source_link, download_link FROM projects WHERE id='".$id."' ORDER BY id DESC");
        $ret = $this->db->selectQuery($query);                
        
        return $ret;
    }
    
    function updateProject($id, $name, $content, $category, $imgname, $download, $source)
    {        
        $query = sprintf("UPDATE projects SET name='".mysql_real_escape_string($name)."', description='".$content."', category='".mysql_real_escape_string($category)."', img_name='".mysql_real_escape_string($imgname)."', source_link='".mysql_real_escape_string($source)."', download_link='".mysql_real_escape_string($download)."', added_date='".date('y-m-d')."' WHERE id='".mysql_real_escape_string($id)."'");
        $ret = $this->db->query($query);
        
        return $ret;
    }
    
    function deleteProject($id)
    {
        $query = sprintf("DELETE FROM projects WHERE id='".mysql_real_escape_string($id)."'");
        $ret = $this->db->query($query);
        
        return $ret;
    }
}

#end of adminmodel.php