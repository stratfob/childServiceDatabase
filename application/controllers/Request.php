<?php
class Request extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->model('model');
			$this->load->helper('url_helper');
	}
	
	public function query(){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$thing = $_POST['thing'];
	
		$array = [];
		if($id!=null) $array['ID'] = $id;
		if($name!=null) $array['NAME'] = $name;
		if($thing!=null) $array['THING'] = $thing;
		
		$result = $this->model->search($array);
		foreach ($result as $client): 
			echo "ID: " . $client['ID'] . " NAME: " . $client['NAME'] . " THING: " 
				. $client['THING'] . "<br>"; 
		endforeach;
	}

	public function submit(){
		echo $this->model->newClient($_POST);;
	}
}
