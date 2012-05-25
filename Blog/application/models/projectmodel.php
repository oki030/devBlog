<?php

class ProjectModel extends NN_Model
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
    
    function getProject($id)
    {
        $query = sprintf("SELECT name, description, category, img_name, added_date, id, source_link, download_link FROM projects WHERE id='".$id."' ORDER BY id DESC");
        $ret = $this->db->selectQuery($query);                
        
        return $ret;
    }
    
    function getProjects()
    {
        $query = sprintf('SELECT name, description, category, img_name, added_date, id, source_link, download_link FROM projects ORDER BY id DESC');
        $ret = $this->db->selectQuery($query);                
        
        return $ret;
    }
    
    function getCategoryProjects($category)
    {
        $query = sprintf("SELECT name, description, category, img_name, added_date, id, source_link, download_link FROM projects WHERE category='".$category."' ORDER BY id DESC");          
        
        $ret = $this->db->selectQuery($query);                
        
        return $ret;
    }
    
    function getCategories()
    {
        $query = sprintf('SELECT DISTINCT category FROM projects');
        $cat = $this->db->selectQuery($query);
        
        $ret = array();
        $ret['count_category'] = array();
        
        foreach($cat['category'] as $value)
        {
            $query = sprintf("SELECT COUNT(category) AS '".$value."' FROM projects WHERE category='".$value."'");
            $ret_c = $this->db->selectQuery($query);
            
            $ret['count_category'][$value] = $ret_c[$value][0];                       
        } 
               
        return $ret;
    }
}

#end of projectmodel.php