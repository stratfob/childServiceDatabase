<!DOCTYPE html>
<html lang="en">
<head>
	<title>New User</title>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">google.load("jquery", "1.3.2");</script>
	<link rel="stylesheet" type= "text/css" href = "<?php echo base_url(); ?>css/theme.css">
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
			<li><a href= "<?php echo site_url('homePage'); ?>">Home</a></p> </li>
			<li><a href= "<?php echo site_url('Login/changePassword'); ?>">Change Password</a></p> </li>
            <li><a href = "<?php echo site_url('newClient'); ?>">New Client</a></li>
            <li><a href= "<?php echo site_url('pages/logout'); ?>"> Log Out </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<h1 class="text-center">New User</h1>
	
	<div class="container theme-showcase" role="main">
		<div class="row">
			<form id="newUserForm">		
					<div class="col-md-4">
						<div class="form-group">
						    <label for="username">User Name</label>
						    <input type="text" class="form-control" id="username" name="username" placeholder="username">
						</div>
						<div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control" id="password" name="password" placeholder="password">	
						</div>
						<button type="button" class="button buttonLog" onclick="formFunction()">Login</button>	
					</div>
			</form>	
			
			<p id="result"></p>			
		</div>
	</div> 
	
	
	<script>
		function formFunction() {
			var form = document.getElementById("newUserForm");
			
			var dataString = "username=" + form.elements[0].value + "&password="
				+ form.elements[1].value;

			$.ajax({
				url: '<?php echo site_url('login/makeNewUser'); ?>',
				type: 'POST',
				data: dataString,
				success: function(data) {
					document.getElementById("result").innerHTML = data;
				}
			});
		}
	</script>
</body>
</html>