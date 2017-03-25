<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password</title>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">google.load("jquery", "1.3.2");</script>
	<link rel="stylesheet" type= "text/css" href = "<?php echo base_url(); ?>css/test.css">
</head>
<body>
	<h1>Change Password</h1>
	
	<form id="form">
		Current Password: <input type="password" name="oldPassword"><br>
		New Password: <input type="password" name="newPassword"><br>
		Confirm New Password: <input type="password" name="confirmPassword"><br>
	</form> 
	<button class="button buttonLog" onclick="formFunction()">Enter</button>
	</br>
	<p id="result"></p>
	<a href='<?php echo site_url (); ?>'> Back to Login </a>
	
	<script>

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
				document.getElementById("result").innerHTML = "New passwords do not match";
			}
			else if(form.elements[1].value==""){
				document.getElementById("result").innerHTML = "New password cannot be empty";
			}
			else{
				var dataString = "password="+ form.elements[0].value + "&newPassword=" + form.elements[1].value;

				$.ajax({
					url: '<?php echo site_url('login/submitNewPassword'); ?>',
					type: 'POST',
					data: dataString,
					success: function(data) {
						document.getElementById("result").innerHTML = data;
					}
				});
			}
		}
	</script>
</body>
</html>