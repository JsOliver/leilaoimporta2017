<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('SessionsVerify_Model');
        $this->load->model('Cadastro_Model');
        $this->load->model('Functions_Model');


    }
    public function index()
    {

        $metas = $this->Functions_Model->metas('cogs');

        $dados['cogs'] = str_replace("<(base)>", base_url('assets/'), $metas[0]);
        $dados['logado'] = $this->SessionsVerify_Model->logver();

        $dados['metas'] = $dados['cogs'];

        $this->load->view('site/home', $dados);
    }
}
