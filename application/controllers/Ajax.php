<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {


    public function index()
    {
        $this->load->view('site/home');
    }
}
