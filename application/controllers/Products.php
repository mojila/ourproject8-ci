<?php
    class Products extends CI_Controller {
        public function __construct(){
            parent::__construct();

            $this->load->model('product');
            $this->load->model('category');
        }

        public function edit() {
            $config['upload_path']          = './dist/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = TRUE;
         
            $this->load->library('upload', $config);

            $kode = $this->input->post('kode');
            $nama = $this->input->post('nama');
            $id_kategori = $this->input->post('id_kategori');
            $bintang = $this->input->post('bintang');
            $variasi = $this->input->post('variasi');
            $minimal_order = $this->input->post('minimal_order');
            $keterangan = $this->input->post('keterangan');
            $ukuran = $this->input->post('ukuran');

            $data = array(
                'nama' => $nama,
                'id_kategori' => $id_kategori,
                'bintang' => $bintang,
                'keterangan' => $keterangan,
                'ukuran' => $ukuran,
                'variasi' => $variasi,
                'minimal_order' => $minimal_order
            );

            $where = array(
                'kode' => $kode
            );

            $this->product->update($where, $data, 'produk');

            if($this->upload->do_upload('gambar_produk_1')){
                $nama = $this->upload->data('file_name');
                
                $data = array(
                    'file' => $nama
                );

                $where = array(
                    'kode_produk' => $kode,
                    'urutan' => 1
                );

                $this->product->update($where, $data, 'gambar_produk');                
            }

            if($this->upload->do_upload('gambar_produk_2')){
                $nama = $this->upload->data('file_name');
                
                $data = array(
                    'file' => $nama
                );

                $where = array(
                    'kode_produk' => $kode,
                    'urutan' => 2
                );

                $this->product->update($where, $data, 'gambar_produk');                
            }

            if($this->upload->do_upload('gambar_produk_3')){
                $nama = $this->upload->data('file_name');
                
                $data = array(
                    'file' => $nama
                );

                $where = array(
                    'kode_produk' => $kode,
                    'urutan' => 3
                );

                $this->product->update($where, $data, 'gambar_produk');                
            }

            if($this->upload->do_upload('gambar_produk_4')){
                $nama = $this->upload->data('file_name');
                
                $data = array(
                    'file' => $nama
                );

                $where = array(
                    'kode_produk' => $kode,
                    'urutan' => 4
                );

                $this->product->update($where, $data, 'gambar_produk');                
            }

            $this->session->set_flashdata("success", "Berhasil Diedit");

            redirect(base_url('admin/list_produk'));
        }

        public function tambah() {
            $config['upload_path']          = './dist/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = TRUE;
         
            $this->load->library('upload', $config);

            $kode = $this->input->post('kode');
            $nama = $this->input->post('nama');
            $id_kategori = $this->input->post('id_kategori');
            $bintang = $this->input->post('bintang');
            $variasi = $this->input->post('variasi');
            $minimal_order = $this->input->post('minimal_order');
            $keterangan = $this->input->post('keterangan');
            $ukuran = $this->input->post('ukuran');

            $data = array(
                'kode' => $kode,
                'nama' => $nama,
                'id_kategori' => $id_kategori,
                'bintang' => $bintang,
                'keterangan' => $keterangan,
                'ukuran' => $ukuran,
                'variasi' => $variasi,
                'minimal_order' => $minimal_order
            );

            $this->product->input($data, 'produk');

            if($this->upload->do_upload('gambar_produk_1')){
                $nama = $this->upload->data('file_name');
                
                $data = array(
                    'kode_produk' => $kode,
                    'file' => $nama,
                    'urutan' => 1
                );

                $this->product->input($data, 'gambar_produk');
            }

            if($this->upload->do_upload('gambar_produk_2')){
                $nama = $this->upload->data('file_name');
                
                $data = array(
                    'kode_produk' => $kode,
                    'file' => $nama,
                    'urutan' => 2
                );

                $this->product->input($data, 'gambar_produk');
            }

            if($this->upload->do_upload('gambar_produk_3')){
                $nama = $this->upload->data('file_name');
                
                $data = array(
                    'kode_produk' => $kode,
                    'file' => $nama,
                    'urutan' => 3
                );

                $this->product->input($data, 'gambar_produk');
            }

            if($this->upload->do_upload('gambar_produk_4')){
                $nama = $this->upload->data('file_name');
                
                $data = array(
                    'kode_produk' => $kode,
                    'file' => $nama,
                    'urutan' => 4
                );

                $this->product->input($data, 'gambar_produk');
            }

            $this->session->set_flashdata("success", "Berhasil Ditambahkan");

            redirect(base_url('admin/list_produk'));
        }

        public function hapus($kode) {
            $where = array('kode' => $kode);

            $this->product->delete($where, 'produk');

            $where = array('kode_produk' => $kode);

            $this->product->delete($where, 'gambar_produk');

            $this->session->set_flashdata("success", "Berhasil Dihapus");
            
            redirect(base_url('admin/list_produk'));
        }

        public function tambah_kategori() {
            $nama = $this->input->post('nama_kategori');

            $data = array(
                'nama' => $nama
            );

            $this->category->input($data, 'kategori');
            
            $this->session->set_flashdata("success", "Berhasil Ditambahkan");
            
            redirect(base_url('admin/tambah_produk'));
        }

        public function hapus_kategori() {
            $id = $this->input->post('id_kategori_hapus');
            
            $where = array('id' => $id);

            $this->category->delete($where, 'kategori');

            $this->session->set_flashdata("success", "Kategori Berhasil Dihapus");
            
            redirect(base_url('admin/tambah_produk'));
        }
        public function edit_tambah_kategori() {
            $kode = $this->input->post('kode');
            $nama = $this->input->post('nama_kategori');

            $data = array(
                'nama' => $nama
            );

            $this->category->input($data, 'kategori');
            
            $this->session->set_flashdata("success", "Berhasil Ditambahkan");
            
            redirect(base_url('admin/edit_produk/'.$kode));
        }

        public function edit_hapus_kategori() {
            $kode = $this->input->post('kode');            
            $id = $this->input->post('id_kategori_hapus');
            
            $where = array('id' => $id);

            $this->category->delete($where, 'kategori');

            $this->session->set_flashdata("success", "Kategori Berhasil Dihapus");
            
            redirect(base_url('admin/edit_produk/'.$kode));
        }
    }