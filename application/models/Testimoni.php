<?php
    class Testimoni extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        public function count() {
            return $this->db->query('SELECT * FROM testimoni')->num_rows();
        }

        public function get() {
            return $this->db->order_by('id', 'DESC')->get('testimoni')->result();
        }

        public function get_home_testimoni() {
            
            return $this->db->limit(3,0)->order_by('id', 'DESC')->get('testimoni')->result();
        }

        public function get_gambar($table, $where) {
            return $this->db->get_where($table, $where)->result();
        }

        public function get_one($table, $where) {
            return $this->db->get_where($table, $where);
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