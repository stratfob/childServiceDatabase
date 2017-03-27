<!DOCTYPE html>
<head>
	<title>CARI Database Home Page</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/theme.css">
	 <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url(); ?>dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
            <p class="navbar-text">
            	<?php  
					if($this->session->logged_in == false){
						redirect(site_url('Login/index'));
					}
					else{
						echo "Logged in as " . $this->session->username . "";
					}
					
				?>
            </p>
			<li><a href= "<?php if($this->session->username=="admin"){
									echo site_url('Login/newUser');
								}; ?>">New User</a></p> </li>
			<li><a href= "<?php echo site_url('Login/changePassword'); ?>">Change Password</a></p> </li>
            <li><a href = "<?php echo site_url('newClient'); ?>">New Client</a></li>
            <li><a href= "<?php echo site_url('pages/logout'); ?>"> Log Out </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
<h1 class="text-center">CARI Database Home Page</h1>

					

<div id="nav">
	
	<div class="container theme-showcase" role="main">
		<div class="container">
			<a class = "btn btn-primary btn-block" href= "<?php echo site_url('newClient'); ?>" > New Client </a>
			<a class = "btn btn-primary btn-block" href= "<?php echo site_url('home'); ?>" > Search Page </a>
			
		</div>
	</div>
</div>
</body>

