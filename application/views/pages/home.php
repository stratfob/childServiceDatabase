<!DOCTYPE html>
<html lang="en">
<head>
	<title>Search CARI</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/homecss.css">
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
	<div id ="navigation">
		<h1>Search Page</h1>
		<a href= "<?php echo site_url('pages/logout'); ?>"> Log Out </a>
		<p>
		<a href= "<?php echo site_url('homePage'); ?>"> Home Page </a></p> 
		<p><a href = "<?php echo site_url('newClient'); ?>"> New Client</a>
		</p>
		<p>
		<a href= "<?php echo site_url('stats'); ?>"> Statistics </a></p>
	</div>

	
	
	<form id="testForm">
		<div class= "container">
			<div id="person">
				ID: <input type="text" name="caseNumber"><br>
				First Name: <input type="text" name="firstName"><br>
				Last Name: <input type="text" name="lastName"><br>
				Relational Index: <input type="text" name="relationalIndex"><br>
				Age: <input type="text" name="age"><br>
				Referrer Name: <input type="text" name="referrerName"><br>
				Referrer Agency: <input type="text" name="referrerAgency"><br>
				Father Name: <input type="text" name="fatherName"><br>
				Mother Name: <input type="text" name="motherName"><br>
				
			</div>
			<div id="case">
				Referral reason: <select name="referralReason">
			<option value="" disabled selected>Select...</option>
			<option value="csa">Childhood Sexual Assault</option>
			<option value="sexualisedBehaviour">Sexualised Behaviour</option>
			<option value="other">Other</option>
			</select><br>
				CSA outcome: <select name = "CSAoutcome">
			<option value="" disabled selected>Select...</option>
			<option value="credible">Credible</option>
			<option value="notCredible">Not Credible</option>
			<option value="inconclusive">Inconclusive</option>
			</select><br>
				Nature Of Abuse: <select name="natureOfAbuse">
			<option value="" disabled selected>Select...</option>
			<option value="physical">Physical</option>
			<option value="mental">Mental</option>
			</select><br>
				Continuous Or Once Off: <select name="continuousOrOnceOff">
			<option value="" disabled selected>Select...</option>
			<option value="continuous">Continuous</option>
			<option value="onceOff">Once Off</option>
			<option value="other">Other</option>
			</select><br>
				Alleged Abuser: <input type="text" name="allegedAbuser"><br>
				One or Multiple Abusers: <select name="oneOrMultipleAbusers">
			<option value="" disabled selected>Select...</option>
			<option value="one">One</option>
			<option value="multiple">Multiple</option>
			<option value="other">Other</option>
			</select><br>
				Abuser Relation To Victim: <input type="text" name="abuserRelationToVictim"><br>
				Peer To Peer Or Adult: <select name="peerToPeerOrAdult">
			<option value="" disabled selected>Select...</option>
			<option value="peerToPeer">Peer To Peer</option>
			<option value="adult">Adult</option>
			<option value="other">Other</option>
			</select><br>
				Location: <input type="text" name="location"><br>
				
			</div>
			<div id="therapy">
				Waiting List Start Date: <input type="text" name="waitingListStartDate"><br>
				Therapy Start Date: <input type="text" name="therapyStartDate"><br>
				Returned: <select name="returned">
			<option value="" disabled selected>Select...</option>
			<option value=1>Yes</option>
			<option value=0>No</option>
			</select><br>
				Child In Care: <select name="childInCare">
			<option value="" disabled selected>Select...</option>
			<option value="yes">Yes</option>
			<option value="no">No</option>
			<option value="other">Other</option>
			</select><br>
				Advice Appointment Reason: <input type="text" name="adviceAppointmentReason"><br>
				Professionals For Advice Appointment: 
			<select name="professionalsForAdviceAppointment">
			<option value="" disabled selected>Select...</option>
			<option value="yes">Yes</option>
			<option value="no">No</option>
			<option value="unknown">Unknown</option>
			</select><br>
			Other Trauma Or Incident: <input type="text" name="otherTraumaOrIncident"><br>
		Child Protection Reports Made: 
		<select name="childProtectionReportsMade">
		  <option value="" disabled selected>Select...</option>
		  <option value="yes">Yes</option>
		  <option value="no">No</option>
		  <option value="unknown">Unknown</option>
		</select><br>
		Linked With Court Accompaniment Services: 
		<select name="linkedWithCourtAccompanimentServices">
		  <option value="" disabled selected>Select...</option>
		  <option value="yes">Yes</option>
		  <option value="no">No</option>
		  <option value="unknown">Unknown</option>
		</select><br>
		Date File Shredded: <input type="text" name="dateFileShredded"><br>
		Other Comment: <input type="text" name="otherComment"><br>
			</div>
		</div>
	</form> 
	<button class="button" onclick="formFunction()">Search >></button>
	
	<p id="result"></p>
	
	<script>
		function formFunction() {
			var form = document.getElementById("testForm");
			var dataString = "&caseNumber=" + form.elements[0].value + "&firstName=" + form.elements[1].value + "&lastName=" + form.elements[2].value + "&relationalIndex=" 
			+ form.elements[3].value + "&age=" + form.elements[4].value + "&referrerName=" + form.elements[5].value + "&referrerAgency=" + form.elements[6].value + "&fatherName=" 
			+ form.elements[7].value + "&motherName=" + form.elements[8].value + "&referralReason=" + form.elements[9].value + "&CSAoutcome=" + form.elements[10].value + "&natureOfAbuse=" + 
			form.elements[11].value + "&continuousOrOnceOff=" + form.elements[12].value + "&allegedAbuser=" + form.elements[13].value + "&oneOrMultipleAbusers=" + form.elements[14].value
			+ "&abuserRelationToVictim=" + form.elements[15].value + "&peerToPeerOrAdult=" + form.elements[16].value + "&location=" + form.elements[17].value + "&waitingListStartDate=" + form.elements[18].value
			+ "&therapyStartDate=" + form.elements[19].value + "&returned=" + form.elements[20].value + "&childInCare=" + form.elements[21].value + "&adviceAppointmentReason=" + form.elements[22].value
			+ "&professionalsForAdviceAppointment=" + form.elements[23].value + "&otherTraumaOrIncident=" + form.elements[24].value + "&childProtectionReportsMade=" + form.elements[25].value + 
			"&linkedWithCourtAccompanimentServices=" + form.elements[26].value + "&dateFileShredded=" + form.elements[27].value+ "&otherComment=" + form.elements[28].value;

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