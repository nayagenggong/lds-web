<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends LDS_Controller {

    var $page;

    public function __construct()
    {
        parent::__construct();
        $this->page = $this->page_model->get_by_title($this->get_page_by_title());
    }

    public function index()
    {
        $data = array('contents' => $this->content_model->get_by_page($this->page), 'page' => $this->page);
        $this->template->load('home', 'index', $data);
    }

    public function update_description()
    {
        $content = (object) array('id' => $this->input->post('id'), 'description' => $this->input->post('description'));

        if ($this->content_model->save_or_update($content))
        {
            echo json_encode(array('msg' => "update success"));
        } else
        {
            echo json_encode(array('msg' => "update failed"));
        }
    }

    public function upload_image()
    {
        $status = "";
        $msg = "";
        $file_element_name = $this->input->post('file_element_id');
        $image = NULL;

        if ($status != "error")
        {
            $config['upload_path'] = './images/content/';
            $config['allowed_types'] = 'gif|jpg|png|doc|txt';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            } else
            {
                $data = (object) $this->upload->data();
                $image = (object) array(
                            'id' => $this->input->post('id'),
                            'filename' => $data->file_name,
                            'original_name' => $data->orig_name,
                            'location' => $config['upload_path'],
                            'content_id' => $this->input->post('content_id'));

                if ($this->image_model->save_or_update($image))
                {
                    $status = "success";
                    $msg = "File successfully uploaded";
                } else
                {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }

        echo json_encode(array('status' => $status, 'msg' => $msg, 'img_path' => $image->location . $image->filename));
    }

}

