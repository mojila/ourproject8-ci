<?php
    class Site extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        public function get() {
            return $this->db->get('situs');
        }

        public function update($where, $data, $table) {
            $this->db->where($where);
            $this->db->update($table, $data);
        }
    }