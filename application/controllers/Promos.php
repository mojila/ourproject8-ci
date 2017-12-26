<?php
    class Promos extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->model('promo');
        }

        public function tambah() {
            $config['upload_path']          = './dist/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = TRUE;
         
            $this->load->library('upload', $config);

            $judul = $this->input->post('judul');

            if($this->upload->do_upload('gambar_promo')){
                $gambar = $this->upload->data('file_name');

                $data = array(
                    'gambar' => $gambar,
                    'judul' => $judul
                );

                $this->promo->input($data, 'promo');

                $this->session->set_flashdata("success", "Berhasil Ditambahkan");

                redirect(base_url('admin/promo'));
            }

            $this->session->set_flashdata("error", "Gagal Ditambahkan");

            redirect(base_url('admin/promo'));
        }

        public function hapus($id) {
            $where = array('id' => $id);

            $this->promo->delete($where, 'promo');

            $this->session->set_flashdata("success", "Berhasil Dihapus");
            
            redirect(base_url('admin/promo'));
        }
    }