<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SessionsVerify_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->db->reconnect();
        @session_start();
    }

    public function logVer(){



        if(isset($_SESSION['Auth01']) and isset($_SESSION['NAME']) and isset($_SESSION['EMAIL'])
            and isset($_SESSION['PASS']) and isset($_SESSION['ID'])):

            return true;
        else:

            return false;

        endif;


    }



}