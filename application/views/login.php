<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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

	<script type="text/javascript">google.load("jquery", "1.3.2");</script>
</head>
<body>
	<h1 class="text-center">Login</h1>
	
	<div class="container theme-showcase" role="main">
		<div class="row">
			<form id="loginForm">	
			<div class="col-md-4">
			</div>
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
			
					
		</div>
		<div class="panel panel-default">
			<div class="text-center" id = "result"></div>
		</div>
	</div> 
	
	
	
	
	<script>
		function formFunction() {
			var form = document.getElementById("loginForm");
			
			var dataString = "username=" + form.elements[0].value + "&password="+ form.elements[1].value;

			$.ajax({
				url: '<?php echo site_url('login/validate'); ?>',
				type: 'POST',
				data: dataString,
				success: function(data) {
					document.getElementById("result").innerHTML = data;
					if(data=="Logging in..."){
						document.location.href = '<?php echo site_url('HomePage'); ?>';
					}
				}
			});
		}
	</script>
</body>
</html>