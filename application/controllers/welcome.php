<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends LDS_Controller {

    public function index()
    {
        $this->load->view('welcome_message');
    }

}

