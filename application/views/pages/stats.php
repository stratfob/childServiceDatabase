<!DOCTYPE html>

<head>
	<title>CARI Statistics</title>
	<link rel="stylesheet" type= "text/css" href = "<?php echo base_url(); ?>css/homecss.css">
</head>

<body>
	<div id="navigation">
		
		<?php  
			if($this->session->logged_in == false){
				redirect(site_url('Login/index'));
			}
			else{
				echo "Logged in as " . $this->session->username;
			}
		?>
		<h1>Statistics</h1>
		<p>
		<a href= "<?php echo site_url('homePage'); ?>"> Home Page </a></p>
		<p><a href = "<?php echo site_url('home'); ?>"> Search </a></p>
		<p>
		<a href= "<?php echo site_url('pages/logout'); ?>"> Log Out </a></p>
	</div>
	
</body>

