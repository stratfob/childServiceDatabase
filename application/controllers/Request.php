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
		//echo "hello <br>";
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
