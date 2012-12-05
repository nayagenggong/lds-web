<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class LDS_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_page_by_title()
    {
        return $this->uri->segment(1);
    }

}

