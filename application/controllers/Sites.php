<?php
    class Sites extends CI_Controller {
        public function __construct() {
            parent::__construct();
            
            $this->load->model('site');
        }

        public function update_identitas() {
            $id = 1;
            $nama = $this->input->post('nama');
            $deskripsi = $this->input->post('deskripsi');

            $data = array(
                'nama' => $nama,
                'deskripsi' => $deskripsi
            );

            $where = array(
                'id' => $id
            );

            $this->site->update($where, $data, 'situs');
            $this->session->set_flashdata("success", "Identitas Situs Diperbarui");

            redirect(base_url("admin"));
        }

        public function update_logo() {
            $config['upload_path']          = './dist/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 128;
            $config['max_height']           = 128;
            $config['encrypt_name']         = TRUE;
         
            $this->load->library('upload', $config);
         
            if(!$this->upload->do_upload('logo')) {
                $this->session->set_flashdata("error", $this->upload->display_errors());

                redirect(base_url("admin"));                
            } else {
                $id = 1;
                $logo = $this->upload->data('file_name');
                
                $data = array(
                    'logo' => $logo
                );
    
                $where = array(
                    'id' => $id
                );

                $this->site->update($where, $data, 'situs');                
                $this->session->set_flashdata("success", "Logo Diganti");

                redirect(base_url("admin"));
            }
        }

        public function update_tentang() {
            $id = 1;
            $tentang = $this->input->post('tentang');

            $data = array(
                'tentang' => $tentang
            );

            $where = array(
                'id' => $id
            );

            $this->site->update($where, $data, 'situs');
            $this->session->set_flashdata("success", "Keterangan Tentang Situs Di Perbarui");

            redirect(base_url("admin"));
        }
    }