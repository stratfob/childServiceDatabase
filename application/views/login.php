<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">google.load("jquery", "1.3.2");</script>
	<link rel="stylesheet" type= "text/css" href = "<?php echo base_url(); ?>css/test.css">
</head>
<body>
	<h1>Login</h1>
	
	<form id="loginForm">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
	</form> 
	<button class="button buttonLog" onclick="formFunction()">Enter >></button>
	</br>
	<p id="result"></p>
	
	<script>
		function formFunction() {
			var form = document.getElementById("loginForm");
			
			var dataString = "username=" + form.elements[0].value + "&password="
				+ form.elements[1].value;

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