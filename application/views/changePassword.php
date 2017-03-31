<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password</title>
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
			<li><a href= "<?php if($this->session->username=="admin"){
									echo site_url('Login/newUser');
								}; ?>">New User</a></p> </li>
            <li><a href = "<?php echo site_url('newClient'); ?>">New Client</a></li>
            <li><a href= "<?php echo site_url('pages/logout'); ?>"> Log Out </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<h1 class="text-center">Change Password</h1>
	
	<div class="container theme-showcase" role="main">
		<div class="row">
			<form id="form">	
				<div class="col-md-4">
				</div>			
					<div class="col-md-4">
						<div class="form-group">
						    <label for="oldPassword">Current Password</label>
						    <input type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="Current Password">
						</div>
						<div class="form-group">
						    <label for="newPassword">New Password</label>
						    <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">	
						</div>
						<div class="form-group">
						    <label for="confirmPassword">Confirm Password</label>
						    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="New Password">	
						</div>
						<button type="button" class = "btn btn-default btn-lg" onclick="formFunction()">Submit</button>	
					</div>
			</form>	
			
			</div>
				<br><br>
				<div class="alert alert-danger" id = "badresult"></div>
				<div class="alert alert-success" id = "goodresult"></div>
			</div>		
		</div>
	</div> 
	

	
	<script>
		$(".alert").hide();
		function compareNewPasswords(){
			var form = document.getElementById("form");
			if(form.elements[1].value==form.elements[2].value){
				return true;
			}
			else return false;
		}

		function formFunction() {
			var form = document.getElementById("form");

			if(!compareNewPasswords()){
				$('#goodresult').hide();
				$('#badresult').show();
				document.getElementById("badresult").innerHTML = "New passwords do not match";
			}
			else if(form.elements[1].value==""){
				$('#goodresult').hide();
				$('#badresult').show();
				document.getElementById("badresult").innerHTML = "New password cannot be empty";
			}
			else{
				var dataString = "password="+ form.elements[0].value + "&newPassword=" + form.elements[1].value;

				$.ajax({
					url: '<?php echo site_url('login/submitNewPassword'); ?>',
					type: 'POST',
					data: dataString,
					success: function(data) {
						if(data=="Incorrect password"){
							$('#goodresult').hide();
							$('#badresult').show();
							document.getElementById("badresult").innerHTML = data;
						}
						else{
							$('#badresult').hide();
							$('#goodresult').show();
							document.getElementById("goodresult").innerHTML = data;
						}
						
						
					}
				});
			}
		}
	</script>
</body>
</html>