<?php
    class Admin extends CI_Controller {
        public function __construct() {
            parent::__construct();

            if($this->session->userdata('status') != "logged in") {
                redirect(base_url('auth'));
            }

            $this->load->model('site');
        }

        public function index() {
            $data['header'] = array(
                'page_header' => 'Dashboard',
                'description' => 'Pengaturan umum'
            );

            $data['site'] = $this->site->get()->row();

            $this->load->view('/admin/header', $data);    
            $this->load->view('/admin/main', $data);
            $this->load->view('/admin/footer');    
        }
    }