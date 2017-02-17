<!DOCTYPE html>
<html lang="en">
<head>
	<title>New User</title>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">google.load("jquery", "1.3.2");</script>
	
</head>
<body>
	<h1>New User</h1>
	
	<form id="newUserForm">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
	</form> 
	<button onclick="formFunction()">Create</button>
	
	<p id="result"></p>
	
	<a href='<?php echo site_url (); ?>'> Back to Login </a>
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