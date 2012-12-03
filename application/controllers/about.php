<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class About extends LDS_Controller {

    public function index()
    {
        $this->template->load('default', 'pages/about');
    }

}

