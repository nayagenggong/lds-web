<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Image_model extends CI_Model {

    var $table = "image";

    function __construct()
    {
        parent::__construct();
    }

    function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    function save_or_update($image)
    {

        if (!isset($image->id) || empty($image->id))
        {
            $image = array(
                'filename' => $image->filename,
                'location' => $image->location,
                'original_name' => $image->original_name,
                'content_id' => $image->content_id
            );

            if ($this->db->insert($this->table, $image))
            {
                return true;
            }
        } else
        {
            $this->delete_local_image($image);
            $this->db->where('id', $image->id);
            if ($this->db->update($this->table, $image))
            {

                return true;
            }
        }
        return false;
    }

    function delete_local_image($image)
    {
        $filename = $this->get_by_id($image->id)->filename;
        if (!is_null($filename))
        {
            unlink('./images/content/' . $filename);
        }
    }

}

?>
