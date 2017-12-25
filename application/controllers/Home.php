<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {
		public function __construct() {
			parent::__construct();

            $this->load->model('site');
		}

		public function index() {
			$data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'Beranda'
			);

			$this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('home');
			$this->load->view('footer');
		}
	}
