<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title ?></title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/theme.css">
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	 <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url(); ?>dist/css/bootstrap-theme.min.css" rel="stylesheet">
	<script type="text/javascript">google.load("jquery", "1.3.2");</script>
	
</head>
<body>
	<?php
		$array = [];
		$i = 0;
		foreach ($data as $note): 
		    $array[$i] = array("date"=>$note['noteDate'], "note"=>$note['note']);
		    $i++;
		endforeach;
	?>
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
            <li><a href= "<?php echo site_url('homePage'); ?>">Home</a></p> </li>
            <li><a href = "<?php echo site_url('home'); ?>">Search</a></li>
            <li><a href = "<?php echo site_url('newClient'); ?>">New Client</a></li>
            <p class="navbar-text">
            	<?php  
					if($this->session->logged_in == false){
						redirect(site_url('Login/index'));
					}
					else{
						echo "Logged in as " . $this->session->username . ":";
					}
				?>
            </p> 
            <li><a href= "<?php echo site_url('pages/logout'); ?>"> Log Out </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        
    <h1 class="text-center">Client Notes</h1>
    <h6 class = "text-center">Client number: <?php echo $caseNumber;?></h6>
	<div class="container theme-showcase" role="main">
		<div class="row">
			<div class="col-md-3">
				<form id="select">
					<label for="month" class="col-2 col-form-label">Select Month</label>
					<div class="input-group">
					  <input class="form-control" type="month" id="month">
					  <span class="input-group-btn">
				        <button class="btn btn-default" onclick="selectFunction()" type="button">Search</button>
				      </span>
					</div>
				</form>
			</div>
			<div class="col-md-9">
					  <div class="form-group">
					  	<label for="result"> </label>
					    <select class="form-control" id="result" onchange="noteFunction()">

					    </select>
					  </div>
			</div>
		</div>
		<div class="row">
			<form id="form">

				<div class="form-group">
				    <textarea class="form-control" id="note" name="note" rows="15"></textarea>
				</div>
				<div class="col-md-12">
					<button type="button" class="btn btn-default btn-block" onclick="formFunction()">Create new note with current text</button>
				</div>
			</form>
		</div>
	</div> 
	
	
	<script>
		function formFunction() {
			var form = document.getElementById("form");
			var dataString = "";
			for (var i = 0; i < form.elements.length; i++) {
				dataString += form.elements[i].name + "=" + form.elements[i].value;
				if(i!=form.elements.length-1){
					dataString+="&"
				}
			}
			
			dataString += "&clientID=" + "<?php echo $caseNumber; ?>" + "&noteDate=" + "<?php echo date('Y-m-d'); ?>" ;;

			$.ajax({
				url: '<?php echo site_url('request/addNote'); ?>',
				type: 'POST',
				data: dataString,
				success: function(data) {
					alert(data);
				}
			});
	
		}

		function selectFunction() {
			var form = document.getElementById("select");
			var dataString = form.elements[0].value;
			var array = <?php echo json_encode($array); ?>;

			var result = "";

			for (var i = 0; i < array.length; i++) {
				if(array[i].date.startsWith(dataString)){
					result += "<option value =" + i + ">" + array[i].date + "</option>";
				}
			}		
			document.getElementById("result").innerHTML = result;
			document.getElementById("note").innerHTML = array[document.getElementById("result").value].note;
		}

		function noteFunction(){
			var array = <?php echo json_encode($array); ?>;
			var i = document.getElementById("result").value;
			document.getElementById("note").innerHTML = array[i].note;
		}
	</script>
</body>
</html>