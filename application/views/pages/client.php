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
	<p>Go to toFrom page: 
	<a href = "<?php echo site_url('toFrom'); ?>"> toFrom </a>
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
			" Child In Care: " . $exampleClient['childInCare']. " Advice Appointment Reason: " . $exampleClient['adviceAppointmentReason']  . " Professionals For Advice Appointment: " 
			. $exampleClient['professionalsForAdviceAppointment'] . " Other Trauma Or Incident: " . $exampleClient['otherTraumaOrIncident'] . " Child Protection Reports Made: " . $exampleClient['childProtectionReportsMade']
			. " Linked With Court Accompaniment Services: " . $exampleClient['linkedWithCourtAccompanimentServices'] . " Date File Shredded: " . $exampleClient['dateFileShredded']
			. " Other Comment: " . $exampleClient['otherComment']. "<br>"; 
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
		Referral reason: <select name="referralReason">
		  <option value="" disabled selected>Select...</option>
		  <option value="csa">Childhood Sexual Assault</option>
		  <option value="sexualisedBehaviour">Sexualised Behaviour</option>
		  <option value="other">Other</option>
		</select><br>
		Outcome: <select name = "CSAoutcome">
		  <option value="" disabled selected>Select...</option>
		  <option value="credible">Credible</option>
		  <option value="notCredible">Not Credible</option>
		  <option value="inconclusive">Inconclusive</option>
		</select><br>
		Nature Of Abuse: 
		<select name="natureOfAbuse">
		  <option value="" disabled selected>Select...</option>
		  <option value="physical">Physical</option>
		  <option value="mental">Mental</option>
		</select><br>
		Continuous Or Once Off: 
		<select name="continuousOrOnceOff">
		  <option value="" disabled selected>Select...</option>
		  <option value="continuous">Continuous</option>
		  <option value="onceOff">Once Off</option>
		  <option value="other">Other</option>
		</select><br>
		Alleged Abuser: <input type="text" name="allegedAbuser"><br>
		One or Multiple Abusers: 
		<select name="oneOrMultipleAbusers">
		  <option value="" disabled selected>Select...</option>
		  <option value="one">One</option>
		  <option value="multiple">Multiple</option>
		  <option value="other">Other</option>
		</select><br>
		Abuser Relation To Victim: <input type="text" name="abuserRelationToVictim"><br>
		Peer To Peer Or Adult: 
		<select name="peerToPeerOrAdult">
		  <option value="" disabled selected>Select...</option>
		  <option value="peerToPeer">Peer To Peer</option>
		  <option value="adult">Adult</option>
		  <option value="other">Other</option>
		</select><br>
		Location: <input type="text" name="location"><br>
		Waiting List Start Date: <input type="text" name="waitingListStartDate"><br>
		Therapy Start Date: <input type="text" name="therapyStartDate"><br>
		Returned: 
		<select name="returned">
		  <option value="" disabled selected>Select...</option>
		  <option value=1>Yes</option>
		  <option value=0>No</option>
		</select><br>
		Child in Care: 
		<select name="childInCare">
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
		Other Comment: <input type="text" name="otherComment"><br><br>
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
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
<?php

class model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_test($ID = FALSE)
		{
			if ($ID === FALSE)
			{
                $query = $this->db->get('client');
                return $query->result_array();
			}
			$query = $this->db->get_where('client', array('ID' => $ID));
			return $query->row_array();
		}
		
		public function search($array)
		{
			$query = $this->db->get_where('client', $array);
			return $query->result_array();
		}
		
		public function between($array)
		{
			
			if($array==NULL){
				echo "Hello <br>";
				return false;
			}
			else{
				echo $array['minvalueAge'];
				echo $array['maxvalueAge'];	
				//echo $array['minvalueID'];
				//echo $array['maxvalueID'];				
			}
			
			if ($array['maxvalueAge'] == -1){
				$array['maxvalueAge'] = 100;
			}
			
			$where = $array['age'] . " BETWEEN ".  $array['minvalueAge'] . " AND " . $array['maxvalueAge'] . " AND " . "caseNumber BETWEEN ".  $array['minvalueID'] . " AND " . $array['maxvalueID']
			. " AND " . $array['relationalIndex'] . " BETWEEN ".  $array['minvalueIndex'] . " AND " . $array['maxvalueIndex'];
			$query = $this->db->get_where('client',$where);
			//$whereID = "caseNumber BETWEEN ".  $array['minvalueID'] . " AND " . $array['maxvalueID'];
			//$query = $this->db->get_where('client',$whereID);
			return $query->result_array();
			
		}
		
		public function getUserHash($username)
		{
			$query = $this->db->get_where('users', array('username' => $username));
			return $query->row_array();
		}
		
		public function doesUserExist($username)
		{
			$query = $this->db->get_where('users', array('username' => $username));
			if($query->num_rows()>0){
				return true;
			}
			else return false;
		}
		
		public function newUser($array)
		{
			return $this->db->insert('users', $array);
		}

		public function newClient($array)
		{
			if($this->db->get_where('client',array('caseNumber' => $array['caseNumber']))->num_rows()>=1){
				return "Case number already exists in database";
			}
			else{
				$this->db->insert('client', $array);
				return "Client created";
			}
		}
}

\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\


<?php
class Request extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->model('model');
			$this->load->helper('url_helper');
	}
	
	public function query(){
		$ID = $_POST['caseNumber'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$relationalIndex = $_POST['relationalIndex'];
		$age = $_POST['age'];
		$referrerName = $_POST['referrerName'];
		$referrerAgency = $_POST['referrerAgency'];
		$fatherName = $_POST['fatherName'];
		$motherName = $_POST['motherName'];
		$referralReason = $_POST['referralReason'];
		$CSAoutcome = $_POST['CSAoutcome'];
		$natureOfAbuse = $_POST['natureOfAbuse'];
		$continuousOrOnceOff = $_POST['continuousOrOnceOff'];
		$allegedAbuser = $_POST['allegedAbuser'];
		$oneOrMultipleAbusers = $_POST['oneOrMultipleAbusers'];
		$abuserRelationToVictim = $_POST['abuserRelationToVictim'];
		$peerToPeerOrAdult = $_POST['peerToPeerOrAdult'];
		$location = $_POST['location'];
		$waitingListStartDate = $_POST['waitingListStartDate'];
		$therapyStartDate = $_POST['therapyStartDate'];
		$returned = $_POST['returned'];
		$childInCare = $_POST['childInCare'];
		$adviceAppointmentReason = $_POST['adviceAppointmentReason'];
		$professionalsForAdviceAppointment = $_POST['professionalsForAdviceAppointment'];
		$otherTraumaOrIncident = $_POST['otherTraumaOrIncident'];
		$childProtectionReportsMade = $_POST['childProtectionReportsMade'];
		$linkedWithCourtAccompanimentServices = $_POST['linkedWithCourtAccompanimentServices'];
		$dateFileShredded = $_POST['dateFileShredded'];
	    $otherComment = $_POST['otherComment'];
	
		$array = [];
		if($ID!=null) $array['caseNumber'] = $ID;
		if($firstName!=null) $array['firstName'] = $firstName;
		if($lastName!=null) $array['lastName'] = $lastName;
		if($relationalIndex!=null) $array['relationalIndex'] = $relationalIndex;
		if($age!=null) $array['age'] = $age;
		if($referrerName!=null) $array['referrerName'] = $referrerName;
		if($referrerAgency!=null) $array['referrerAgency'] = $referrerAgency;
		if($fatherName!=null) $array['fatherName'] = $fatherName;
		if($motherName!=null) $array['motherName'] = $motherName;
		if($referralReason!=null) $array['referralReason'] = $referralReason;
		if($CSAoutcome!=null) $array['CSAoutcome'] = $CSAoutcome;
		if($natureOfAbuse!=null) $array['natureOfAbuse'] = $natureOfAbuse;
		if($continuousOrOnceOff!=null) $array['continuousOrOnceOff'] = $continuousOrOnceOff;
		if($allegedAbuser!=null) $array['allegedAbuser'] = $allegedAbuser;
		if($oneOrMultipleAbusers!=null) $array['oneOrMultipleAbusers'] = $oneOrMultipleAbusers;
		if($abuserRelationToVictim!=null) $array['abuserRelationToVictim'] = $abuserRelationToVictim;
		if($peerToPeerOrAdult!=null) $array['peerToPeerOrAdult'] = $peerToPeerOrAdult;
		if($location!=null) $array['location'] = $location;
		if($waitingListStartDate!=null) $array['waitingListStartDate'] = $waitingListStartDate;
		if($therapyStartDate!=null) $array['therapyStartDate'] = $therapyStartDate;
		if($returned!=null) $array['returned'] = $returned;
		if($childInCare!=null) $array['childInCare'] = $childInCare;
		if($adviceAppointmentReason!=null) $array['adviceAppointmentReason'] = $adviceAppointmentReason;
		if($professionalsForAdviceAppointment!=null) $array['professionalsForAdviceAppointment'] = $professionalsForAdviceAppointment;
		if($otherTraumaOrIncident!=null) $array['otherTraumaOrIncident'] = $otherTraumaOrIncident;
		if($childProtectionReportsMade!=null) $array['childProtectionReportsMade'] = $childProtectionReportsMade;
		if($linkedWithCourtAccompanimentServices!=null) $array['linkedWithCourtAccompanimentServices'] = $linkedWithCourtAccompanimentServices;
		if($dateFileShredded!=null) $array['dateFileShredded'] = $dateFileShredded;
		if($otherComment!=null) $array['otherComment'] = $otherComment;


		
		$result = $this->model->search($array);
		foreach ($result as $client): 
			echo "ID: " . $client['caseNumber'] . " First Name: " . $client['firstName'] . " Last Name: " 	. $client['lastName'] . " Relational Index: " 
			. $client['relationalIndex'] . " Age: " . $client['age'] . " Referrer Name: " . $client['referrerName'] . " Referrer Agency: " . $client['referrerAgency'] 
			. " Father Name: " . $client['fatherName'] . " Mother Name: " . $client['motherName'] . " Referral Reason: " . $client['referralReason'] . " CSA outcome: " . $client['CSAoutcome']
			." Nature Of Abuse: " . $client['natureOfAbuse'] ." Continuous Or Once Off: " . $client['continuousOrOnceOff'] ." Alleged Abuser: " . $client['allegedAbuser'] 
			." One Or Multiple Abusers: " . $client['oneOrMultipleAbusers'] ." Abuser Relation To Victim: " . $client['abuserRelationToVictim'] ." Peer To Peer Or Adult: " 
			. $client['peerToPeerOrAdult'] ." Location: " . $client['location'] ." Waiting List Start Date: " . $client['waitingListStartDate']." Therapy Start Date: " . $client['therapyStartDate']
			." Returned: " . $client['returned']." Child In Care: " . $client['childInCare'] ." Advice Appointment Reason: " . $client['adviceAppointmentReason']." professionalsForAdviceAppointment: " 
			. $client['professionalsForAdviceAppointment'] ." Other Trauma Or Incident: " . $client['otherTraumaOrIncident'] ." Child Protection Reports Made: " . $client['childProtectionReportsMade']
			." Linked With Court Accompaniment Services: " . $client['linkedWithCourtAccompanimentServices'] ." Date File Shredded: " . $client['dateFileShredded']
			." Other Comment: " . $client['otherComment']."<br>"; 
		endforeach;
		
	}
	
	public function submit(){
		echo $this->model->newClient($_POST);
	}
	
	public function betweenPlease(){
		echo "hello <br>";
		$minvalue = $_POST['minvalueAge'];
		$maxvalue = $_POST['maxvalueAge'];
		$age = $_POST['age'];
		$array =[];
		if($minvalue!=null) {
			$array['minvalueAge'] = $minvalue;
		}
		else {
			$array['minvalueAge'] = 1;
		}
		if($maxvalue!=null) {
			$array['maxvalueAge'] = $maxvalue;
		}
		else {
			$array['maxvalueAge'] = -1;
		}
		if($age!=null) $array['age'] = $age;
		$minvalueID = $_POST['minvalueID'];
		$maxvalueID = $_POST['maxvalueID'];
		$ID = $_POST['ID'];
		if($minvalueID!=null) $array['minvalueID'] = $minvalueID;
		else $array['minvalueID'] = 1;
		if($maxvalueID!=null) $array['maxvalueID'] = $maxvalueID;
		else $array['maxvalueID'] = 10000000;
		if($ID!=null) $array['ID'] = $ID;
		$minvalueIndex = $_POST['minvalueIndex'];
		$maxvalueIndex = $_POST['maxvalueIndex'];
		$Index = $_POST['relationalIndex'];
		if($minvalueIndex!=null) $array['minvalueIndex'] = $minvalueIndex;
		else $array['minvalueIndex'] = 1;
		if($maxvalueIndex!=null) $array['maxvalueIndex'] = $maxvalueIndex;
		else $array['maxvalueIndex'] = 10000000;
		if($Index!=null) $array['relationalIndex'] = $Index;
		$result = $this->model->between($array);	
		foreach ($result as $client): 
			echo "ID: " . $client['caseNumber'] . " First Name: " . $client['firstName'] . " Last Name: " 	. $client['lastName'] . " Relational Index: " 
			. $client['relationalIndex'] . " Age: " . $client['age'] . " Referrer Name: " . $client['referrerName'] . " Referrer Agency: " . $client['referrerAgency'] 
			. " Father Name: " . $client['fatherName'] . " Mother Name: " . $client['motherName'] . " Referral Reason: " . $client['referralReason'] . " CSA outcome: " . $client['CSAoutcome']
			." Nature Of Abuse: " . $client['natureOfAbuse'] ." Continuous Or Once Off: " . $client['continuousOrOnceOff'] ." Alleged Abuser: " . $client['allegedAbuser'] 
			." One Or Multiple Abusers: " . $client['oneOrMultipleAbusers'] ." Abuser Relation To Victim: " . $client['abuserRelationToVictim'] ." Peer To Peer Or Adult: " 
			. $client['peerToPeerOrAdult'] ." Location: " . $client['location'] ." Waiting List Start Date: " . $client['waitingListStartDate']." Therapy Start Date: " . $client['therapyStartDate']
			." Returned: " . $client['returned']." Child In Care: " . $client['childInCare'] ." Advice Appointment Reason: " . $client['adviceAppointmentReason']." professionalsForAdviceAppointment: " 
			. $client['professionalsForAdviceAppointment'] ." Other Trauma Or Incident: " . $client['otherTraumaOrIncident'] ." Child Protection Reports Made: " . $client['childProtectionReportsMade']
			." Linked With Court Accompaniment Services: " . $client['linkedWithCourtAccompanimentServices'] ." Date File Shredded: " . $client['dateFileShredded']
			." Other Comment: " . $client['otherComment']."<br>"; 
		endforeach;
	}
}
////////////////////////////////////////////////////////


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


/////////////////////////////////////////
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