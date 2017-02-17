<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title ?></title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/test.css">
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">google.load("jquery", "1.3.2");</script>
	
</head>
<body>

	<?php  
		if($this->session->logged_in == false){
			redirect(site_url('Login/index'));
		}
		else{
			echo "Logged in as " . $this->session->username;
		}
	?>
	<a href= "<?php echo site_url('pages/logout'); ?>"> Log Out </a>
	<h1>Test</h1>
	<div class="chart"></div>
	
	<?php 
	echo "All entries in table 'test': <br>";
	foreach ($testData as $exampleClient): 
        echo "ID: " . $exampleClient['ID'] . " NAME: " . $exampleClient['NAME'] . " THING: " 
			. $exampleClient['THING'] . "<br>"; 
	endforeach;
	
	echo "<br>Fetching entry with id=1...<br>";
	echo "ID: " . $singleData['ID'] . " NAME: " . $singleData['NAME'] . " THING: " 
			. $singleData['THING'] . "<br><br>";
	?>
	
	<form id="testForm">
		ID: <input type="text" name="id"><br>
		Name: <input type="text" name="name"><br>
		Thing: <input type="text" name="thing"><br><br>
	</form> 
	<button onclick="formFunction()">Try it</button>
	
	<p id="result"></p>
	
	<script>
		function formFunction() {
			var form = document.getElementById("testForm");
			var dataString = "id=" + form.elements[0].value + "&name=" + form.elements[1].value + "&thing=" + 
				form.elements[2].value;

			$.ajax({
				url: '<?php echo site_url('request/query'); ?>',
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