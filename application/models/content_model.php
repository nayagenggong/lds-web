<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Content_model extends CI_Model {

    var $table = "content";

    function __construct()
    {
        parent::__construct();
    }

    function get_all()
    {
        $this->db->from($this->table);
        $this->db->order_by('sequence', 'asc');
        return $this->db->get()->result();
    }

    /**
     * 
     * @param type $page
     * @param type $group
     * @return type
     */
    function get_by_page($page, $group = TRUE)
    {
        $this->db->select('content.*', FALSE);
        $this->db->select('image.filename,image.location, image.id AS image_id', FALSE);
        $this->db->from($this->table);
        $this->db->join('image', 'image.content_id=content.id', 'left');
        $this->db->where('page_id', $page->id);
        if ($group)
        {
            $this->db->group_by('content.id');
        }
        //log_message('info', $this->db->last_query());
        return $this->db->get()->result();
    }

    function save_or_update($content)
    {
       // $this->db->trans_start();


        $this->db->where('id', $content->id);
        if ($this->db->update($this->table, $content))
            return TRUE;

       // $this->db->trans_complete();
        return FALSE;
    }

}

?>
