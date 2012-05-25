<?php

class ContactModel extends NN_Model
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
    
    function getContactInfo()
    {
        $query = sprintf('SELECT contact_info FROM admin;');
        $ret = $this->db->selectQuery($query);
        
        return $ret;
    }
}

#end of contactmodel.php