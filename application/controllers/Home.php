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
				'judul' => 'Home'
			);

			$this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('home');
			$this->load->view('footer');
		}

		public function about() {
			$data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'About'
			);

			$this->load->view('head', $data);
			$this->load->view('nav', $data);			
			$this->load->view('about');
			$this->load->view('footer');
		}

		public function product() {
			$data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'Product'
			);

			$this->load->view('head', $data);
			$this->load->view('nav', $data);			
			$this->load->view('product');
			$this->load->view('footer');
		}

		public function galery() {
			$data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'Galery'
			);

			$this->load->view('head', $data);
			$this->load->view('nav', $data);			
			$this->load->view('galeri');
			$this->load->view('footer');
		}

		public function promo() {
			$data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'Promo'
			);

			$this->load->view('head', $data);
			$this->load->view('nav', $data);			
			$this->load->view('promo');
			$this->load->view('footer');
		}
		public function order() {
			$data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'How To Order'
			);

			$this->load->view('head', $data);
			$this->load->view('nav', $data);			
			$this->load->view('order');
			$this->load->view('footer');
		}
	}
