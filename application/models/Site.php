<?php
    class Site extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        public function get() {
            return $this->db->get('situs');
        }
    }