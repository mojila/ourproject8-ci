<?php
    class Users extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->model('user');
        }

        public function tambah() {
            $nama = $this->input->post('nama');
            $surel = $this->input->post('surel');
            $kata_sandi = $this->input->post('kata_sandi');

            $data = array(
                'nama' => $nama,
                'surel' => $surel,
                'kata_sandi' => md5($kata_sandi)
            );

            $this->user->input($data, 'pengguna');

            $this->session->set_flashdata("success", "Pengguna Ditambahkan");

            redirect(base_url('admin/pengguna'));
        }

        public function edit() {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $surel = $this->input->post('surel');
            $kata_sandi = $this->input->post('kata_sandi');

            if($kata_sandi != '') {
                $data = array(
                    'nama' => $nama,
                    'surel' => $surel,
                    'kata_sandi' => md5($kata_sandi)
                );
            } else {
                $data = array(
                    'nama' => $nama,
                    'surel' => $surel
                );
            }

            $where = array(
                'id' => $id
            );

            $this->user->update($where, $data, 'pengguna');

            $this->session->set_flashdata("success", "Berhasil Diedit");            

            redirect(base_url('admin/pengguna'));
        }

        public function hapus($id) {
            $where = array(
                'id' => $id
            );

            $this->user->delete($where, 'pengguna');

            $this->session->set_flashdata("success", "Berhasil Dihapus");            
            
            redirect(base_url('admin/pengguna'));            
        }
    }