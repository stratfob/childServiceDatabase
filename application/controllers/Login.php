<?php
class Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('model');
                $this->load->library('session');
                $this->load->helper('url_helper');
				$this->load->helper('url');
        }

        public function index()
		{
			// load the view
			$this->load->view('login.php');
		}
		
		public function newUser()
		{
			$this->load->view('newUser.php');
		}
		
		
		public function validate()
		{
			
			if($_POST['password']==null||$_POST['username']==null){
				echo "Must enter username and password";
			}
			else{
				$username = $_POST['username'];
				$row = $this->model->getUserHash($username);
				$hash = $row['password'];
				$password = $_POST['password'];
				
				if(password_verify($password, $hash)){
					echo "Logging in...";
					$sessionData = array(
				        'username'  => $username,
				        'logged_in' => TRUE
					);
					$this->session->set_userdata($sessionData);
				}
				else{
					echo "Incorrect username or password";
				}
			}
		}
		
		public function makeNewUser()
		{
			if($_POST['password']==null||$_POST['username']==null){
				echo "Must enter username and password";
			}
			else if($this->model->doesUserExist($_POST['username']))
			{
				echo "User already exists";
			}
			else{
				$username = $_POST['username'];
				$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
				$array = [];
				$array['username'] = $username;
				$array['password'] = $password;
				
				echo $this->model->newUser($array);
			}
		}
}