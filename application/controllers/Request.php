<?php
class Request extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->model('model');
			$this->load->helper('url_helper');
	}
	

	public function query(){	
		$array = [];
		if($_POST['caseNumber']!=null) $array['caseNumber'] = $_POST['caseNumber'];
		if($_POST['firstName']!=null) $array['firstName'] = $_POST['firstName'];
		if($_POST['lastName']!=null) $array['lastName'] = $_POST['lastName'];
		if($_POST['relationalIndex']!=null) $array['relationalIndex'] = $_POST['relationalIndex'];
		if($_POST['age']!=null) $array['age'] = $_POST['age'];
		if($_POST['referrerName']!=null) $array['referrerName'] = $_POST['referrerName'];
		if($_POST['referrerAgency']!=null) $array['referrerAgency'] = $_POST['referrerAgency'];
		if($_POST['fatherName']!=null) $array['fatherName'] = $_POST['fatherName'];
		if($_POST['motherName']!=null) $array['motherName'] = $_POST['motherName'];
		if($_POST['location']!=null) $array['location'] = $_POST['location'];
		if($_POST['referralReason']!=null) $array['referralReason'] = $_POST['referralReason'];
		if($_POST['CSAoutcome']!=null) $array['CSAoutcome'] = $_POST['CSAoutcome'];
		if($_POST['natureOfAbuse']!=null) $array['natureOfAbuse'] = $_POST['natureOfAbuse'];
		if($_POST['continuousOrOnceOff']!=null) $array['continuousOrOnceOff'] = $_POST['continuousOrOnceOff'];
		if($_POST['oneOrMultipleAbusers']!=null) $array['oneOrMultipleAbusers'] = $_POST['oneOrMultipleAbusers'];
		if($_POST['peerToPeerOrAdult']!=null) $array['peerToPeerOrAdult'] = $_POST['peerToPeerOrAdult'];
		if($_POST['waitingListStartDate']!=null) $array['waitingListStartDate'] = $_POST['waitingListStartDate'];
		if($_POST['therapyStartDate']!=null) $array['therapyStartDate'] = $_POST['therapyStartDate'];
		if($_POST['returned']!=null) $array['returned'] = $_POST['returned'];
		if($_POST['childInCare']!=null) $array['childInCare'] = $_POST['childInCare'];
		if($_POST['childProtectionReportsMade']!=null) $array['childProtectionReportsMade'] = $_POST['childProtectionReportsMade'];
		if($_POST['linkedWithCourtAccompanimentServices']!=null) $array['linkedWithCourtAccompanimentServices'] = $_POST['linkedWithCourtAccompanimentServices'];
		if($_POST['dateFileShredded']!=null) $array['dateFileShredded'] = $_POST['dateFileShredded'];


		
		$result = $this->model->search($array);

		$id = 1;
		foreach ($result as $client): 
			echo "
				<tr class='clickable' data-toggle='collapse' id='" . $id . "' data-target='." . $id . "collapsed'>
		            <td>" . $client['caseNumber'] . "</td>
		            <td>" . $client['firstName'] . "</td>
		            <td>" . $client['lastName'] . "</td>
		            <td>" . $client['age'] . "</td>
		        </tr>
		        <tr class='collapse out budgets " . $id . "collapsed'>
		            <td>
		            	<a href = 'http://localhost/index.php/pages/edit/" . $client['caseNumber'] . "'>Edit</a> <br>Relational Index: " . $client['relationalIndex'] . 
		            	"<br>Mother Name: " . $client['motherName'] . 
		            	"<br>Nature Of Abuse: " . $client['natureOfAbuse'] ."<br>Peer To Peer Or Adult: ". $client['peerToPeerOrAdult'] .
		            	"<br>Returned: " . $client['returned']."<br>Other Trauma Or Incident: " . $client['otherTraumaOrIncident'] .
		            	"<br>Other Comment: " . $client['otherComment']."
		            </td>
		            <td>
		            	<br>Referrer Name: " . $client['referrerName'] . "<br>Referral Reason: " . $client['referralReason'] . 
		            	"<br>Continuous Or Once Off: " . $client['continuousOrOnceOff'] ."<br>County: " . $client['location'] .
		            	"<br>Child In Care: " . $client['childInCare'] ."<br>Child Protection Reports Made: " . $client['childProtectionReportsMade'].
		            	" 
		            </td>
		            <td>
		            	<br>Referrer Agency: " . $client['referrerAgency'] . "<br>Alleged Abuser: " . $client['allegedAbuser'] .
		            	"<br>Abuser Relation To Victim: " . $client['abuserRelationToVictim'] ."<br>Waiting List Start Date: " . $client['waitingListStartDate'].
		            	"<br>Advice Appointment Reason: " . $client['adviceAppointmentReason']."<br>Linked With Court Accompaniment Services: " . $client['linkedWithCourtAccompanimentServices'] ."
		            </td>
		            <td>
		            	<br>Father Name: " . $client['fatherName'] . "<br>CSA outcome: " . $client['CSAoutcome'] .
		            	"<br>One Or Multiple Abusers: " . $client['oneOrMultipleAbusers'] ."<br>Therapy Start Date: " . $client['therapyStartDate'].
		            	"<br>professionalsForAdviceAppointment: ". $client['professionalsForAdviceAppointment'] ."<br>Date File Shredded: " . $client['dateFileShredded']." 
		            </td>
		        </tr>";
		    $id = $id + 1; 
		endforeach;
	}
	
	public function updateClient(){
		echo $this->model->updateClient($_POST);

	}

	public function submit(){
		echo $this->model->newClient($_POST);
	}
	
	public function betweenPlease(){
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
		$count = 0;
		foreach ($result as $client): 
			echo "ID: " . $client['caseNumber'] . " First Name: " . $client['firstName'] . " Last Name: " 	. $client['lastName'] . " Relational Index: " 
			. $client['relationalIndex'] ."<br>"; 
			$count += 1;
		endforeach;
		echo "There are " . $count . " Clients in this range. <br>";
	}
}
