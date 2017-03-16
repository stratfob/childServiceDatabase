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
	<h1>Home</h1>
	<p>Create new client: 
	<a href = "<?php echo site_url('newClient'); ?>"> New </a>
	</p>
	<p>Go to Search page: 
	<a href = "<?php echo site_url('home'); ?>"> Search </a>
	</p>
	<p><a href= "<?php echo site_url('homePage'); ?>"> Home Page </a></p>
	
	
	<?php 
	echo "All entries in table 'client': <br>";
	foreach ($testData as $exampleClient): 
        echo "ID: " . $exampleClient['caseNumber'] .  " Relational Index: " . $exampleClient['relationalIndex'] . " First Name: " . $exampleClient['firstName'] . " Last Name: " 
			. $exampleClient['lastName'] . " Age: " . $exampleClient['age'] . " Referrer Name: " . $exampleClient['referrerName'] . " Referrer Agency: " . $exampleClient['referrerAgency'] 
			. " Father Name: " . $exampleClient['fatherName']. " Mother Name: " . $exampleClient['motherName'] . " Referral Reason: " . $exampleClient['referralReason'] 
			." CSA Outcome: " . $exampleClient['CSAoutcome'] ." Nature Of Abuse: " . $exampleClient['natureOfAbuse'] ." Continuous or Once Off: " . $exampleClient['continuousOrOnceOff'] 
			." Alleged Abuser: " . $exampleClient['allegedAbuser'] ." One or Multiple Abusers : " . $exampleClient['oneOrMultipleAbusers'] ." Abuser relation To Victim : " 
			. $exampleClient['abuserRelationToVictim']." Peer To Peer or Adult : " . $exampleClient['peerToPeerOrAdult'] ." Location: " . $exampleClient['location']
			." Waiting List Start Date: " . $exampleClient['waitingListStartDate']." Therapy Start Date: " . $exampleClient['therapyStartDate']." Returned: " . $exampleClient['returned'].
			" Child In Care: " . $exampleClient['childInCare']. " Advice Appointment Reason: " . $exampleClient['adviceAppointmentReason']  . " Professionals For Advice Appointment: " 
			. $exampleClient['professionalsForAdviceAppointment'] . " Other Trauma Or Incident: " . $exampleClient['otherTraumaOrIncident'] . " Child Protection Reports Made: " . $exampleClient['childProtectionReportsMade']
			. " Linked With Court Accompaniment Services: " . $exampleClient['linkedWithCourtAccompanimentServices'] . " Date File Shredded: " . $exampleClient['dateFileShredded']
			. " Other Comment: " . $exampleClient['otherComment']. "<br>"; 
	endforeach;
	
	?>
	
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
</html>