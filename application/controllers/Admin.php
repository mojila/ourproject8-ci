<?php
    class Admin extends CI_Controller {
        public function __construct() {
            parent::__construct();

            if($this->session->userdata('status') != "logged in") {
                redirect(base_url('auth'));
            }

            $this->load->model('site');
            $this->load->model('product');
            $this->load->model('langganan');
            $this->load->model('category');
            $this->load->model('user');
            $this->load->model('slide');
            $this->load->model('subscribe');
            $this->load->model('promo');
            $this->load->model('testimoni');
        }

        public function index() {
            $data['header'] = array(
                'page_header' => 'Dashboard',
                'description' => 'Pengaturan umum'
            );

            $data['site'] = $this->site->get()->row();

            $data['pelanggan'] = $this->subscribe->count();
            $data['produk'] = $this->product->count();
            $data['pengguna'] = $this->user->count();

            $this->load->view('/admin/header', $data);    
            $this->load->view('/admin/main', $data);
            $this->load->view('/admin/footer');
        }

        public function pengguna() {
            $data['header'] = array(
                'page_header' => 'Pengguna',
                'description' => 'Pengaturan Pengguna'
            );

            $data['site'] = $this->site->get()->row();

            $data['pengguna'] = $this->user->get();

            $this->load->view('/admin/header', $data);    
            $this->load->view('/admin/pengguna', $data);
            $this->load->view('/admin/footer');
        }

        public function slideshow() {
            $data['header'] = array(
                'page_header' => 'Pengaturan Lain',
                'description' => 'Pengaturan Slideshow'
            );

            $data['site'] = $this->site->get()->row();

            $data['slide'] = $this->slide->get();

            $this->load->view('/admin/header', $data);    
            $this->load->view('/admin/slideshow', $data);
            $this->load->view('/admin/footer');
        }
        
        public function promo() {
            $data['header'] = array(
                'page_header' => 'Pengaturan Lain',
                'description' => 'Pengaturan Promo'
            );

            $data['site'] = $this->site->get()->row();

            $data['promo'] = $this->promo->get();

            $this->load->view('/admin/header', $data);    
            $this->load->view('/admin/promo', $data);
            $this->load->view('/admin/footer');
        }

        public function testimoni() {
            $data['header'] = array(
                'page_header' => 'Pengaturan Lain',
                'description' => 'Pengaturan Testimoni'
            );

            $data['site'] = $this->site->get()->row();

            $data['testimoni'] = $this->testimoni->get();

            $this->load->view('/admin/header', $data);    
            $this->load->view('/admin/testimoni', $data);
            $this->load->view('/admin/footer');
        }

        public function edit_pengguna($id) {
            $data['header'] = array(
                'page_header' => 'Pengguna',
                'description' => 'Pengaturan Pengguna'
            );

            $data['site'] = $this->site->get()->row();

            $where = array(
                'id' => $id
            );

            $data['pengguna'] = $this->user->get_one('pengguna', $where)->row();

            $this->load->view('/admin/header', $data);    
            $this->load->view('/admin/edit_pengguna', $data);
            $this->load->view('/admin/footer');
        }

        public function tambah_produk() {
            $data['header'] = array(
                'page_header' => 'Produk',
                'description' => 'Manajemen Produk'
            );

            $data['site'] = $this->site->get()->row();

            $data['kode_produk'] = $this->product->count() + 1;

            $data['kategori'] = $this->category->get();

            $this->load->view('/admin/header', $data);
            $this->load->view('/admin/produk', $data);
            $this->load->view('/admin/footer');   
        }

        public function edit_produk($id) {
            $data['header'] = array(
                'page_header' => 'Produk',
                'description' => 'Manajemen Produk'
            );

            $data['site'] = $this->site->get()->row();

            $data['kategori'] = $this->category->get();            

            $where = array(
                'kode' => $id
            );

            $data['produk'] = $this->product->get_one('produk', $where)->row();

            $where = array(
                'kode_produk' => $id
            );

            $data['gambar_produk'] = $this->product->get_gambar('gambar_produk', $where);            

            $this->load->view('/admin/header', $data);    
            $this->load->view('/admin/edit_produk', $data);
            $this->load->view('/admin/footer');
        }

        public function list_produk() {
            $data['header'] = array(
                'page_header' => 'Produk',
                'description' => 'Manajemen Produk'
            );

            $data['site'] = $this->site->get()->row();

            $data['product'] = $this->product->get_all();

            $this->load->view('/admin/header', $data);
            $this->load->view('/admin/list_produk', $data);
            $this->load->view('/admin/footer');
        }

        public function langganan()
        {
            $data['header'] = array(
                'page_header' => 'Langganan',
                'description' => 'Manajemen Langganan'
            );

            $data['site'] = $this->site->get()->row();

            $data['langganan'] = $this->langganan->get_all();

            $this->load->view('/admin/header', $data);
            $this->load->view('/admin/langganan', $data);
            $this->load->view('/admin/footer');            
        }
    }