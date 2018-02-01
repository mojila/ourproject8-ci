<?php
    class Subscribers extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->model('langganan');
        }

        public function hapus($id) {
            $where = array(
                'id' => $id
            );

            $this->langganan->delete($where);

            $this->session->set_flashdata("success", "Berhasil Dihapus");            
            
            redirect(base_url('admin/langganan'));            
        }
    }