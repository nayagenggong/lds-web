<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Page_model extends CI_Model {

    var $table = "page";

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

    function get_by_title($title)
    {
        $this->db->from($this->table);
        $this->db->where('title', $title);
        return $this->db->get()->row();
    }

}

?>
