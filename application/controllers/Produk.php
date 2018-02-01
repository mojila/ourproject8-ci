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

    public function halaman($halaman)
    {
      $data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'Produk'
      );
      
      $data['promo'] = $this->promo->get_home_promo();
      $data['produk'] = $this->product->get(($halaman * 10) - 10, $halaman * 10);
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

    public function kategori($id) {
      $data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'Produk'
			);

      $where = array(
        'id_kategori' => $id
      );

      $data['promo'] = $this->promo->get_home_promo();
      $data['produk'] = $this->product->get_per_kategori($where);
      $data['jumlah_produk'] = $this->product->count();
      $data['gambar_produk'] = $this->product->get_gambar_all();
      $data['kategori'] = array(
        'item' => $this->category->get(),
        'pilihan' => $id
      );

      $this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('product', $data);
			$this->load->view('footer', $data);
    }

    public function pencarian() {
      $keyword = $this->input->post('keyword');

      $data['situs'] = $this->site->get()->row();
			$data['page'] = array(
				'judul' => 'Produk'
			);

      $data['promo'] = $this->promo->get_home_promo();
      $data['produk'] = $this->product->search($keyword);
      $data['jumlah_produk'] = $this->product->count();
      $data['gambar_produk'] = $this->product->get_gambar_all();
      $data['pencarian'] = array(
        'keyword' => $keyword
      );
      
      $data['kategori'] = array(
        'item' => $this->category->get(),
        'pilihan' => null
      );

      $this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('product', $data);
			$this->load->view('footer', $data);
    }
  }
