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
		if($_POST['gender']!=null) $array['gender'] = $_POST['gender'];
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
		if($_POST['professionalsForAdviceAppointment']!=null) $array['professionalsForAdviceAppointment'] = $_POST['professionalsForAdviceAppointment'];
		if($_POST['waitingListStartDate']!=null) $array['waitingListStartDate'] = $_POST['waitingListStartDate'];
		if($_POST['therapyStartDate']!=null) $array['therapyStartDate'] = $_POST['therapyStartDate'];
		if($_POST['returned']!=null) $array['returned'] = $_POST['returned'];
		if($_POST['childInCare']!=null) $array['childInCare'] = $_POST['childInCare'];
		if($_POST['childProtectionReportsMade']!=null) $array['childProtectionReportsMade'] = $_POST['childProtectionReportsMade'];
		if($_POST['linkedWithCourtAccompanimentServices']!=null) $array['linkedWithCourtAccompanimentServices'] = $_POST['linkedWithCourtAccompanimentServices'];
		if($_POST['linkedWithForensicAccompanimentServices']!=null) $array['linkedWithForensicAccompanimentServices'] = $_POST['linkedWithForensicAccompanimentServices'];
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
		            <td><a href='http://localhost/index.php/pages/edit/" . $client['caseNumber'] . "'>Edit</a></td>
		            <td><a href='http://localhost/index.php/pages/notes/" . $client['caseNumber'] . "'>Client notes</a></td>
		        </tr>
		        <tr class='collapse out budgets " . $id . "collapsed'>
		            <td colspan='6'>
		            	<br>Gender: " . $client['gender'] .
		            	"<br>Mother name: " . $client['motherName'] . 
		            	"<br>Father name: " . $client['fatherName'] . 
		            	"<br>Therapist name: ". $client['professionalsForAdviceAppointment'] .
		            	"<br>Previous client: " . $client['returned'].
		            	"<br>Nature of abuse: " . $client['natureOfAbuse'] .
		            	"<br>Peer to peer or adult: ". $client['peerToPeerOrAdult'] .
		            	"<br>Referrer name: " . $client['referrerName'] . 
		            	"<br>Referrer agency: " . $client['referrerAgency'] .		            	
		            	"<br>Referral reason: " . $client['referralReason'] . 
		            	"<br>One or more incidents of abuse: " . $client['continuousOrOnceOff'] .
		            	"<br>Abuser relation to victim: " . $client['abuserRelationToVictim'] .		            	
		            	"<br>County: " . $client['location'] .
		            	"<br>Child in care: " . $client['childInCare'] ."<br>Child Protection Reports Made: " . $client['childProtectionReportsMade'].
		            	"<br>Linked with court accompaniment aervices: " . $client['linkedWithCourtAccompanimentServices'] .
		            	"<br>Linked with forensic accompaniment aervices: " . $client['linkedWithForensicAccompanimentServices'] .
		            	"<br>Childhood sexual assault outcome: " . $client['CSAoutcome'] .
		            	"<br>One or multiple abusers: " . $client['oneOrMultipleAbusers'] .
		            	"<br>Waiting list start date: " . $client['waitingListStartDate'].		            	
		            	"<br>Therapy start date: " . $client['therapyStartDate'].
		            	"<br>Date sile shredded: " . $client['dateFileShredded'].
		            	"<br>Date client created in database: " . $client['dateClientCreated'].
		            	"<br>Other Comment: " . $client['otherComment']."
		            </td>
		        </tr>";
		    $id = $id + 1; 
		endforeach;
	}
	
	public function updateClient(){
		echo $this->model->updateClient($_POST);

	}

	public function addNote(){
		echo $this->model->newNote($_POST);
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
