<?php
    class Product extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        public function count() {
            return $this->db->query('SELECT * FROM produk')->num_rows();
        }

        public function get($start, $end) {
            $this->db->limit($end, $start);
            return $this->db->order_by('kode', 'DESC')->get('produk')->result();
        }
        
        public function get_all(){
            return $this->db->order_by('kode', 'DESC')->get('produk')->result();
        }

        public function get_per_kategori($where) {
            return $this->db->order_by('kode', 'DESC')->get_where('produk', $where)->result();
        }

        public function get_gambar($table, $where) {
            return $this->db->get_where($table, $where)->result();
        }

        public function get_gambar_all() {
            return $this->db->get('gambar_produk')->result();
        }

        public function get_hot() {
            $where = array(
                'bintang' => 5    
            );

            return $this->db->order_by('kode', 'DESC')->get_where('produk', $where, 4, 0)->result();
        }

        public function get_one($table, $where) {
            return $this->db->get_where($table, $where);
        }

        public function search($key) {
            return $this->db->query("SELECT * FROM produk WHERE nama LIKE '%$key%'")->result();
        }

        public function update($where, $data, $table) {
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        function input($data,$table){
            $this->db->insert($table,$data);
        }

        function delete($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }
    }