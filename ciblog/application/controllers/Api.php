<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use application\libraries\REST_Controller;
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

class Api extends REST_Controller {

    function posts_get()
    {
        $data = array('returned: '. $this->get('id'));
        $this->response($data);

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }
}
