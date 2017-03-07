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
			" Child In Care: " . $exampleClient['childInCare']. "<br>"; 
	endforeach;
	
	?>
	
	<form id="testForm">
		ID: <input type="text" name="caseNumber"><br>
		First Name: <input type="text" name="firstName"><br>
		Last Name: <input type="text" name="lastName"><br>
		Relational Index: <input type="text" name="relationalIndex"><br>
		Age: <input type="text" name="age"><br>
		Referrer Name: <input type="text" name="referrerName"><br>
		Referrer Agency: <input type="text" name="referrerAgency"><br>
		Father Name: <input type="text" name="fatherName"><br>
		Mother Name: <input type="text" name="motherName"><br>
		Referral reason: <input type="text" name="referralReason"><br>
		CSA outcome: <input type="text" name="CSAoutcome"><br>
		Nature Of Abuse: <input type="text" name="natureOfAbuse"><br>
		Continuous Or Once Off: <input type="text" name="continuousOrOnceOff"><br>
		Alleged Abuser: <input type="text" name="allegedAbuser"><br>
		One or Multiple Abusers: <input type="text" name="oneOrMultipleAbusers"><br>
		Abuser Relation To Victim: <input type="text" name="abuserRelationToVictim"><br>
		Peer To Peer Or Adult: <input type="text" name="peerToPeerOrAdult"><br>
		Location: <input type="text" name="location"><br>
		Waiting List Start Date: <input type="text" name="waitingListStartDate"><br>
		Therapy Start Date: <input type="text" name="therapyStartDate"><br>
		Returned: <input type="text" name="returned"><br>
		Child In Care: <input type="text" name="childInCare"><br><br>
	</form> 
	<button onclick="formFunction()">Try it</button>
	
	<p id="result"></p>
	
	<script>
		function formFunction() {
			var form = document.getElementById("testForm");
			var dataString = "&caseNumber=" + form.elements[0].value + "&firstName=" + form.elements[1].value + "&lastName=" + form.elements[2].value + "&relationalIndex=" 
			+ form.elements[3].value + "&age=" + form.elements[4].value + "&referrerName=" + form.elements[5].value + "&referrerAgency=" + form.elements[6].value + "&fatherName=" 
			+ form.elements[7].value + "&motherName=" + form.elements[8].value + "&referralReason=" + form.elements[9].value + "&CSAoutcome=" + form.elements[10].value + "&natureOfAbuse=" + 
			form.elements[11].value + "&continuousOrOnceOff=" + form.elements[12].value + "&allegedAbuser=" + form.elements[13].value + "&oneOrMultipleAbusers=" + form.elements[14].value
			+ "&abuserRelationToVictim=" + form.elements[15].value + "&peerToPeerOrAdult=" + form.elements[16].value + "&location=" + form.elements[17].value + "&waitingListStartDate=" + form.elements[18].value
			+ "&therapyStartDate=" + form.elements[19].value + "&returned=" + form.elements[20].value + "&childInCare=" + form.elements[21].value;

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