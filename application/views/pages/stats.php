<!DOCTYPE html>

<head>
	<title>CARI Statistics</title>
	<link rel="stylesheet" type= "text/css" href = "<?php echo base_url(); ?>css/homecss.css">
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">google.load("jquery", "1.3.2");</script>
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
	
	<form id="toFromForm">
		ID: <br>
		<input type="number" name="ID" placeholder="From"><input type="number" name="toID" placeholder="To"><br>
		Age: <br>
		<input type="number" name="age" placeholder="From"><input type="number" name="toAge" placeholder="To"><br>
		Relational Index: <br>
		<input type="number" name="relationalIndex" placeholder="From"><input type="number" name="toIndex" placeholder="To"><br><br>
	</form> 
	<button onclick="formFunction()">Go</button>
	
	<p id="result"></p>
	
	<script>
		function formFunction() {
			var form = document.getElementById("toFromForm");
			var dataString =  "&" + form.elements[0].name + "=" + form.elements[0].name + "&minvalueID=" + form.elements[0].value + "&maxvalueID=" + form.elements[1].value
							+"&" + form.elements[2].name + "=" + form.elements[2].name + "&minvalueAge=" + form.elements[2].value + "&maxvalueAge=" + form.elements[3].value
							+"&" + form.elements[4].name + "=" + form.elements[4].name + "&minvalueIndex=" + form.elements[4].value + "&maxvalueIndex=" + form.elements[5].value;
			
			$.ajax({
				url: '<?php echo site_url('request/betweenPlease'); ?>',
				type: 'POST',
				data: dataString,
				success: function(data) {
					document.getElementById("result").innerHTML = data;
				}
			});
		}
	</script>
	
</body>

