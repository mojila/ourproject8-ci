<?php
    class Slideshow extends CI_Controller {
        public function __construct() {
            parent::__construct();
            
            $this->load->model('slide');
        }

        public function update() {
            $config['upload_path']          = './dist/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = TRUE;
         
            $this->load->library('upload', $config);

            $judul_1 = $this->input->post('judul_slide_1');
            $keterangan_1 = $this->input->post('keterangan_slide_1');
            $link_1 = $this->input->post('link_slide_1');

            $where = array(
                'nomor' => 1
            );

            $data = array(
                'judul' => $judul_1,
                'keterangan' => $keterangan_1,
                'link' => $link_1
            );

            $this->slide->update($where, $data, 'slide_show');            

            $judul_2 = $this->input->post('judul_slide_2');
            $keterangan_2 = $this->input->post('keterangan_slide_2');
            $link_2 = $this->input->post('link_slide_2');

            $where = array(
                'nomor' => 2
            );

            $data = array(
                'judul' => $judul_2,
                'keterangan' => $keterangan_2,
                'link' => $link_2
            );

            $this->slide->update($where, $data, 'slide_show');

            if($this->upload->do_upload('gambar_slide_1')){
                $gambar = $this->upload->data('file_name'); 

                $where = array(
                    'nomor' => 1
                );

                $data = array(
                    'gambar' => $gambar
                );

                $this->slide->update($where, $data, 'slide_show');
            }

            if($this->upload->do_upload('gambar_slide_2')){
                $gambar = $this->upload->data('file_name'); 

                $where = array(
                    'nomor' => 2
                );

                $data = array(
                    'gambar' => $gambar
                );

                $this->slide->update($where, $data, 'slide_show');
            }

            $this->session->set_flashdata("success", "Berhasil Diedit");

            redirect(base_url('admin/slideshow'));
        }
    }