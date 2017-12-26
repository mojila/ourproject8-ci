<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {
		public function __construct() {
			parent::__construct();

            $this->load->model('site');
            $this->load->model('slide');
            $this->load->model('product');
            $this->load->model('promo');
            $this->load->model('testimoni');
            $this->load->model('category');
		}

		public function index() {
			$data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'Home'
			);

			$data['slide'] = $this->slide->get();
			$data['hot_produk'] = $this->product->get_hot();
			$data['gambar_produk'] = $this->product->get_gambar_all();
			$data['promo'] = $this->promo->get_home_promo();
			$data['testimoni'] = $this->testimoni->get_home_testimoni();

			$this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('home', $data);
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

		public function product_detail($id) {
			$data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'Product Detail'
			);

			$this->load->view('head', $data);
			$this->load->view('nav', $data);			
			$this->load->view('detail');
			$this->load->view('footer');
		}

		public function search() {
			$data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'Product'
			);

			$key = $this->input->post('keyword');

			$data['jumlah'] = $this->product->search($key)->num_rows();
			$data['product'] = $this->product->search($key)->result();
			$data['gambar_produk'] = $this->product->get_gambar_all();
			$data['kategori'] = $this->category->get();
			
			$this->load->view('head', $data);
			$this->load->view('nav', $data);			
			$this->load->view('product', $data);
			$this->load->view('footer');
		}

		public function product() {
			$data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'Product'
			);
			
			$data['jumlah'] = $this->product->count();			
			$data['product'] = $this->product->get();
			$data['gambar_produk'] = $this->product->get_gambar_all();
			$data['kategori'] = $this->category->get();

			$this->load->view('head', $data);
			$this->load->view('nav', $data);			
			$this->load->view('product', $data);
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
