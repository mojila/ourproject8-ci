<?php
    class Product extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        public function count() {
            return $this->db->query('SELECT * FROM produk')->num_rows();
        }

        public function get() {
            return $this->db->get('produk')->result();
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