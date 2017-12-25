<?php
    class Admin extends CI_Controller {
        public function __construct() {
            parent::__construct();

            if($this->session->userdata('status') != "logged in") {
                redirect(base_url('auth'));
            }

            $this->load->model('site');
            $this->load->model('product');
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

        public function tambah_produk() {
            $data['header'] = array(
                'page_header' => 'Produk',
                'description' => 'Manajemen Produk'
            );

            $data['site'] = $this->site->get()->row();

            $data['kode_produk'] = $this->product->count() + 1;

            $this->load->view('/admin/header', $data);    
            $this->load->view('/admin/produk', $data);
            $this->load->view('/admin/footer');   
        }

        public function list_produk() {
            $data['header'] = array(
                'page_header' => 'Produk',
                'description' => 'Manajemen Produk'
            );

            $data['site'] = $this->site->get()->row();

            $data['product'] = $this->product->get();

            $this->load->view('/admin/header', $data);    
            $this->load->view('/admin/list_produk', $data);
            $this->load->view('/admin/footer');
        }
    }