<?php
    class Admin extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        public function get_one($id) {

        }

        public function login($table, $where) {
            return $this->db->get_where($table, $where);
        }
    }