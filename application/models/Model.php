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
                $query = $this->db->get('client');
                return $query->result_array();
			}
			$query = $this->db->get_where('client', array('ID' => $ID));
			return $query->row_array();
		}

		public function getClient($ID)
		{
			$query = $this->db->get_where('client', array('caseNumber' => $ID));
			return $query->row_array();
		}
		
		public function updateClient($array){
			$this->db->update('client', $array, array('caseNumber' => $array['caseNumber']));
			return "Client updated.";
		}

		public function search($array)
		{
			$query = $this->db->get_where('client', $array);
			return $query->result_array();
		}
		
		public function getUserHash($username)
		{
			$query = $this->db->get_where('users', array('username' => $username));
			return $query->row_array();
		}
		
		public function doesUserExist($username)
		{
			$query = $this->db->get_where('users', array('username' => $username));
			if($query->num_rows()>0){
				return true;
			}
			else return false;
		}
		
		public function between($array)
		{
			
			if($array==NULL){
				//echo "Hello <br>";
				return false;
			}
			else{
				//echo $array['minvalueAge'];
				//echo $array['maxvalueAge'];	
				//echo $array['minvalueID'];
				//echo $array['maxvalueID'];				
			}
			
			if ($array['maxvalueAge'] == -1){
				$array['maxvalueAge'] = 100;
			}
			
			$where = $array['age'] . " BETWEEN ".  $array['minvalueAge'] . " AND " . $array['maxvalueAge'] . " AND " . "caseNumber BETWEEN ".  $array['minvalueID'] . " AND " . $array['maxvalueID']
			. " AND " . $array['relationalIndex'] . " BETWEEN ".  $array['minvalueIndex'] . " AND " . $array['maxvalueIndex'];
			$query = $this->db->get_where('client',$where);
			//$whereID = "caseNumber BETWEEN ".  $array['minvalueID'] . " AND " . $array['maxvalueID'];
			//$query = $this->db->get_where('client',$whereID);
			return $query->result_array();
			
		}
		
		public function newUser($array)
		{
			return $this->db->insert('users', $array);
		}

		public function newClient($array)
		{
			if($this->db->get_where('client',array('caseNumber' => $array['caseNumber']))->num_rows()>=1){
				return "Case number already exists in database";
			}
			else{
				$this->db->insert('client', $array);
				return "Client created";
			}
		}
}
