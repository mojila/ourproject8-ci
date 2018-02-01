<?php
    
    class Langganan extends CI_Model 
    {
        public function __construct() 
        {
            parent::__construct();
        }

        public function get_all(){
            return $this->db->order_by('id', 'DESC')->get('langganan')->result();
        }

        public function update($where, $data) 
        {
            $this->db->where($where);
            $this->db->update('langganan', $data);
        }

        function input($data)
        {
            $this->db->insert('langganan' ,$data);
        }

        function delete($where)
        {
            $this->db->where($where);
            $this->db->delete('langganan');
        }
    }