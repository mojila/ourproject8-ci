<?php
    class Auth extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('admin');
        }

        public function index() {
            $this->load->view('/admin/login');            
        }

        public function login() {
            $surel = $this->input->post('surel');
            $kata_sandi = $this->input->post('kata_sandi');

            $where = array(
                'surel' => $surel,
                'kata_sandi' => md5($kata_sandi)
            );

            $check = $this->admin->login("pengguna", $where)->num_rows();

            if($check > 0) {
                $res = $this->admin->login("pengguna", $where)->row();
                
                $data_session = array(
                    'id' => $res->id,
                    'nama' => $res->nama,
                    'surel' => $res->surel,
                    'foto' => $res->foto,
                    'role' => "Admin",
                    'status' => "logged in"
                );

                $this->session->set_userdata($data_session);

                redirect(base_url("admin"));
            } else {
                echo "Kombinasi Surel dan Kata Sandi salah. <a href='".base_url('auth')."'>Kembali</a>";
            }
        }

        public function logout() {
            $this->session->sess_destroy();

            redirect(base_url('auth'));
        }
    }