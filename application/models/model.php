<?php

class model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_test($ID = FALSE)
		{
			if ($ID === FALSE)
			{
                $query = $this->db->get('test');
                return $query->result_array();
			}
			$query = $this->db->get_where('test', array('ID' => $ID));
			return $query->row_array();
		}
		
		public function search($array){
			$query = $this->db->get_where('test', $array);
			return $query->result_array();
		}
}