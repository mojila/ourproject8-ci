<?php
    class Testimonials extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->model('testimoni');
        }

        public function tambah() {
            $config['upload_path']          = './dist/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = TRUE;
         
            $this->load->library('upload', $config);

            $nama = $this->input->post('nama');
            $isi = $this->input->post('isi');

            if($this->upload->do_upload('foto_testimoni')){
                $foto = $this->upload->data('file_name');

                $data = array(
                    'nama' => $nama,
                    'isi' => $isi,
                    'foto' => $foto
                );

                $this->testimoni->input($data, 'testimoni');

                $this->session->set_flashdata("success", "Berhasil Ditambahkan");

                redirect(base_url('admin/testimoni'));
            }

            $this->session->set_flashdata("error", "Gagal Ditambahkan");

            redirect(base_url('admin/testimoni'));
        }

        public function hapus($id) {
            $where = array('id' => $id);

            $this->testimoni->delete($where, 'testimoni');

            $this->session->set_flashdata("success", "Berhasil Dihapus");
            
            redirect(base_url('admin/testimoni'));
        }
    }