<?php
    
    class Admin extends CI_Controller {
        
        public function __construct() {
            parent::__construct();
            $this->load->library("session");
            $this->load->helper("url");
            $this->session->set_userdata(array(
                'login' => 'login'
            ));
        }
        
        public function index() {
            $session_id = $this->session->userdata("session_id");
            $login = $this->session->userdata("login");
            if (isset($session_id) && isset($login) && $login != "" && $session_id != "") {
                $this->load->view("admin/admin_template");
            }
            else {
                header("HTTP/1.0 403 Forbidden");
            }
        }
        
    }

?>