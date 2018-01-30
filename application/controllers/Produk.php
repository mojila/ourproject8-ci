<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  class Produk extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();

      $this->load->model('product');
      $this->load->model('site');
      $this->load->model('promo');
      $this->load->model('category');
    }

    public function index()
    {
      $data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'Produk'
			);

      $data['promo'] = $this->promo->get_home_promo();
      $data['produk'] = $this->product->get(0, 10);
      $data['jumlah_produk'] = $this->product->count();
      $data['gambar_produk'] = $this->product->get_gambar_all();
      $data['kategori'] = array(
        'item' => $this->category->get()
      );

      $this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('product', $data);
			$this->load->view('footer', $data);
    }
  }
