<!DOCTYPE html>
<head>
	<title>CARI Database Home Page</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/test.css">
</head>

<body>
<h1>CARI Database Home Page</h1>
<?php  
		if($this->session->logged_in == false){
			redirect(site_url('Login/index'));
		}
		else{
			echo "Logged in as " . $this->session->username;
			echo "<br><a href=" . site_url('Login/changePassword') . ">Change password</a>";
			if($this->session->username=="admin"){
				echo "<br><a href=" . site_url('Login/newUser') . ">Create new user</a>";
			}
		}
	?>
<div id="nav">
	
	<a href= "<?php echo site_url('pages/logout'); ?>" class="button buttonHome"> Log Out </a>
	<a href= "<?php echo site_url('newClient'); ?>" class="button buttonHome"> New Client </a>
	<a href= "<?php echo site_url('home'); ?>" class="button buttonHome"> Search Page </a>
	<a href= "<?php echo site_url('stats'); ?>" class="button buttonHome"> Statistics </a>
	<a href= "<?php echo site_url('toFrom'); ?>" class="button buttonHome"> Ranges </a>
	
</div>
</body>

