<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title ?></title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/homecss.css">
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">google.load("jquery", "1.3.2");</script>
	
</head>
<body>
	<div id="nav">
	<?php  
		if($this->session->logged_in == false){
			redirect(site_url('Login/index'));
		}
		else{
			echo "Logged in as " . $this->session->username;
		}
	?>
	
		<h1>Create New Client</h1>
		<p><a href= "<?php echo site_url('pages/logout'); ?>"> Log Out </a></p>
		<p><a href= "<?php echo site_url('homePage'); ?>"> Home Page </a></p>
		Search for Clients: 
		<p><a href = "<?php echo site_url('home'); ?>"> Search </a></p>
	</div>

	<form id="form">
	<div class="container">
		<div id="person">
			Case Number: <br>
			<input type="number" name="caseNumber" placeholder="Case Number"><br>
			Relation Number: <br>
			<input type="number" name="relationalIndex" placeholder="Relation Number"><br>
			First Name: <br>
			<input type="text" name="firstName" placeholder="First Name"><br>
			Last Name: <br>
			<input type="text" name="lastName" placeholder="Last Name"><br>
			Age: <br>
			<input type="number" name="age" placeholder="Age"><br>
			Referrer Name: <br>
			<input type="text" name="referrerName" placeholder="Referrer Name"><br>
			Referrer Agency: <br>
			<input type="text" name="referrerAgency" placeholder="Referrer Agency"><br>
			Name of Father: <br>
			<input type="text" name="fatherName" placeholder="Name of Father"><br>
			Name of Mother: <br>
			<input type="text" name="motherName" placeholder="Name of Mother"><br> 
			Referral Reason: <br>
			<select name="referralReason">
			<option value="" disabled selected>Select...</option>
			<option value="csa">Childhood Sexual Assault</option>
			<option value="sexualisedBehaviour">Sexualised Behaviour</option>
			<option value="other">Other</option>
			</select><br>
			Outcome: <br>
			<select name = "CSAoutcome">
			<option value="" disabled selected>Select...</option>
			<option value="credible">Credible</option>
			<option value="notCredible">Not Credible</option>
			<option value="inconclusive">Inconclusive</option>
			</select><br>
		</div>
		<div id="case">
			
			Nature Of Abuse: <br>
			<select name="natureOfAbuse">
			<option value="" disabled selected>Select...</option>
			<option value="">Options go here</option>
			</select><br>
			Continuous Or Once Off: <br>
			<select name="continuousOrOnceOff">
			<option value="" disabled selected>Select...</option>
			<option value="continuous">Continuous</option>
			<option value="onceOff">Once Off</option>
			<option value="other">Other</option>
			</select><br>
			Alleged Abuser: <br>
			<input type="text" name="allegedAbuser" placeholder="Alleged Abuser"><br>
			One or Multiple Abusers: <br>
			<select name="oneOrMultipleAbusers">
			<option value="" disabled selected>Select...</option>
			<option value="one">One</option>
			<option value="onceOff">Multiple</option>
			<option value="other">Other</option>
			</select><br>
			Abuser Relation to Victim: <br>
			<input type="text" name="abuserRelationToVictim" placeholder="Abuser Relation To Victim"><br>
			Peer To Peer Or Adult: <br>
			<select name="peerToPeerOrAdult">
			<option value="" disabled selected>Select...</option>
			<option value="peerToPeer">Peer To Peer</option>
			<option value="adult">Adult</option>
			<option value="other">Other</option>
			</select><br>
			Location: <br>
			<input type="text" name="location" placeholder="Location"><br>
			Waiting List Start Date: <br>
			<input type="date" name="waitingListStartDate"><br>
			Therapy Start Date: <br>
			<input type="date" name="therapyStartDate"><br>
			Returned: <br>
			<select name="returned">
			<option value="" disabled selected>Select...</option>
			<option value=1>Yes</option>
			<option value=0>No</option>
			</select><br>
		</div>
		<div id="therapy">
			
			Child in Care: <br>
			<select name="childInCare">
			<option value="" disabled selected>Select...</option>
			<option value="yes">Yes</option>
			<option value="no">No</option>
			<option value="other">Other</option>
			</select><br>
			Advice Appointment Reason: <br>
			<input type="text" name="adviceAppointmentReason" placeholder="Appointment Reason"><br>
			Professionals For Advice Appointment: <br>
			<select name="professionalsForAdviceAppointment">
			<option value="" disabled selected>Select...</option>
			<option value="yes">Yes</option>
			<option value="no">No</option>
			<option value="unknown">Unknown</option>
			</select><br>
			Other Trauma or Incident: <br>
			<textarea name="otherTraumaOrIncident" rows = 4 cols = 45></textarea><br>
			Child Protection Reports Made: <br>
			<select name="childProtectionReportsMade">
			<option value="" disabled selected>Select...</option>
			<option value="yes">Yes</option>
			<option value="no">No</option>
			<option value="unknown">Unknown</option>
			</select><br>
			Linked With Court Accompaniment Services: <br>
			<select name="linkedWithCourtAccompanimentServices">
			<option value="" disabled selected>Select...</option>
			<option value="yes">Yes</option>
			<option value="no">No</option>
			<option value="unknown">Unknown</option>
			</select><br>
			Date File Shredded: <br>
			<input type="date" name="dateFileShredded" placeholder=""><br>
			Other Comment:<br>
			<textarea name="otherComment" rows = 4 cols = 45></textarea><br>
			<button class="button" onclick="formFunction()">Create >></button>
		</div>
		</div>
	</form> 
	
	
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
			
			$.ajax({
				url: '<?php echo site_url('request/submit'); ?>',
				type: 'POST',
				data: dataString,
				success: function(data) {
					alert(data);
				}
			});
	
		}
	</script>
</body>
</html>