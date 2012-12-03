<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends LDS_Controller {

    public function index()
    {
        $data = array("test" => "1234");
        $this->template->load('home', 'index', $data);
    }

}
