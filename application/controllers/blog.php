<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog extends LDS_Controller {

    
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('blog/index');
    }

    public function post($content = '')
    {
        $data = array(
            'content' => $content,
        );
        $this->load->view('blog/index', $data);
    }

    public function page()
    {
        $data = array('pages' => $this->page_model->get_all());

        $this->template->load("default",'blog/index', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */