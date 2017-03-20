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
        
    <h1 class="text-center">Edit Client</h1>


	<div class="container theme-showcase" role="main">
		<div class="row">
			<form id="form">
		
					<div class="col-md-4">
						<div class="form-group">
						    <label for="caseNumber">ID</label>
						    <input type="number" disabled class="form-control" id="caseNumber" name="caseNumber" value="<?php echo $data['caseNumber']?>">
						</div>
						<div class="form-group">
						    <label for="firstName">First Name</label>
						    <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $data['firstName']?>">
						</div>
						<div class="form-group">
						    <label for="lastName">Last Name</label>
						    <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $data['lastName']?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						    <label for="relationalIndex">Relational Index</label>
						    <input type="number" class="form-control" id="relationalIndex" name="relationalIndex" value="<?php echo $data['relationalIndex']?>">
						</div>
						<div class="form-group">
						    <label for="age">Age</label>
						    <input type="number" class="form-control" id="age" name="age" value="<?php echo $data['age']?>">
						</div>
						<div class="form-group">
						    <label for="referrerName">Referrer Name</label>
						    <input type="text" class="form-control" id="referrerName" name="referrerName" value="<?php echo $data['referrerName']?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						    <label for="referrerAgency">Referrer Agency</label>
						    <input type="text" class="form-control" id="referrerAgency" name="referrerAgency" value="<?php echo $data['referrerAgency']?>">
						</div>
						<div class="form-group">
						    <label for="fatherName">Father Name</label>
						    <input type="text" class="form-control" id="fatherName" name="fatherName" value="<?php echo $data['fatherName']?>">
						</div>
						<div class="form-group">
						    <label for="motherName">Mother Name</label>
						    <input type="text" class="form-control" id="motherName" name="motherName" value="<?php echo $data['motherName']?>">
						</div>

					</div>

					<div class="col-md-6">
						<div class="form-group">
						    <label for="referralReason">Referral Reason</label>
						    <select class="form-control" id="referralReason" name = "referralReason">
								<option value="<?php echo $data['referralReason']?>" selected><?php echo $data['referralReason']?></option>
								<option value="csa">Childhood Sexual Assault</option>
								<option value="sexualisedBehaviour">Sexualised Behaviour</option>
								<option value="other">Other</option>
						    </select>
						</div>
						<div class="form-group">
						    <label for="CSAoutcome">CSA Outcome</label>
							<select class="form-control" id="CSAoutcome" name="CSAoutcome">
								<option value="<?php echo $data['CSAoutcome']?>" selected><?php echo $data['CSAoutcome']?></option>
								<option value="credible">Credible</option>
								<option value="notCredible">Not Credible</option>
								<option value="inconclusive">Inconclusive</option>
						    </select>						
						</div>
						<div class="form-group">
						    <label for="natureOfAbuse">Nature Of Abuse</label>
						    <select class="form-control" id="natureOfAbuse" name="natureOfAbuse">
								<option value="<?php echo $data['natureOfAbuse']?>" selected><?php echo $data['natureOfAbuse']?></option>
								<option value="physical">Physical</option>
								<option value="mental">Mental</option>
						    </select>
						</div>
						<div class="form-group">
						    <label for="continuousOrOnceOff">Continuous Or Once Off</label>
						    <select class="form-control" id="continuousOrOnceOff" name="continuousOrOnceOff">
								<option value="<?php echo $data['continuousOrOnceOff']?>" selected><?php echo $data['continuousOrOnceOff']?></option>
								<option value="continuous">Continuous</option>
								<option value="onceOff">Once Off</option>
								<option value="other">Other</option>
						    </select>
						</div>
						<div class="form-group">
						    <label for="allegedAbuser">Alleged Abuser</label>
						    <input type="text" class="form-control" id="allegedAbuser" name="allegedAbuser" value="<?php echo $data['allegedAbuser']?>">
						</div>
						<div class="form-group">
						    <label for="oneOrMultipleAbusers">One Or Multiple Abusers</label>
						    <select class="form-control" id="oneOrMultipleAbusers" name="oneOrMultipleAbusers">
								<option value="<?php echo $data['oneOrMultipleAbusers']?>" selected><?php echo $data['oneOrMultipleAbusers']?></option>
								<option value="one">One</option>
								<option value="multiple">Multiple</option>
								<option value="other">Other</option>
						    </select>
						</div>
						<div class="form-group">
						    <label for="abuserRelationToVictim">Abuser Relation To Victim</label>
						    <input type="text" class="form-control" id="abuserRelationToVictim" name="abuserRelationToVictim" 
						    	value="<?php echo $data['abuserRelationToVictim']?>">
						</div>
						<div class="form-group">
						    <label for="peerToPeerOrAdult">Peer To Peer or Adult</label>
						    <select class="form-control" id="peerToPeerOrAdult" name="peerToPeerOrAdult">
								<option value="<?php echo $data['peerToPeerOrAdult']?>" selected><?php echo $data['peerToPeerOrAdult']?></option>
								<option value="peerToPeer">Peer To Peer</option>
								<option value="adult">Adult</option>
								<option value="other">Other</option>
						    </select>
						</div>
						<div class="form-group">
						    <label for="location">County</label>
						    <input type="text" class="form-control" id="location" name="location" value="<?php echo $data['location']?>">
						</div>
						<div class="form-group">
				            <label for="waitingListStartDate" class="col-2 col-form-label">Waiting List Start Date</label>
							<div class="col-10">
							  <input class="form-control" type="date" id="waitingListStartDate" name="waitingListStartDate" value="<?php echo $data['waitingListStartDate']?>">
							</div>
				        </div>
					    <div class="form-group">
				            <label for="therapyStartDate" class="col-2 col-form-label">Therapy Start Date</label>
							<div class="col-10">
							  <input class="form-control" type="date" id="therapyStartDate" name="therapyStartDate" value="<?php echo $data['therapyStartDate']?>">
							</div>
				        </div>
					</div>
			
					<div class="col-md-6">

						<div class="form-group">
							<label for="returned">Returned</label>
							<select class="form-control" id="returned" name="returned">
								<option value="<?php echo $data['returned']?>" selected><?php echo $data['returned']?></option>
								<option value=1>Yes</option>
								<option value=0>No</option>
							</select>
						</div>
						<div class="form-group">
							<label for="childInCare">Child In Care</label>
							<select class="form-control" id="childInCare" name="childInCare">
								<option value="<?php echo $data['childInCare']?>" selected><?php echo $data['childInCare']?></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<option value="other">Other</option>
							</select>
						</div>
						<div class="form-group">
						    <label for="adviceAppointmentReason">Advice Appointment Reason</label>
						    <textarea class="form-control" id="adviceAppointmentReason" name="adviceAppointmentReason" rows="3"><?php echo $data['adviceAppointmentReason']?>
						    </textarea>
						</div>
						<div class="form-group">
							<label for="professionalsForAdviceAppointment">Professionals For Advice Appointment</label>
							<select class="form-control" id="professionalsForAdviceAppointment" name="professionalsForAdviceAppointment">
								<option value="<?php echo $data['professionalsForAdviceAppointment']?>" selected><?php echo $data['professionalsForAdviceAppointment']?></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<option value="unknown">Unknown</option>
							</select>
						</div>
						<div class="form-group">
						    <label for="otherTraumaOrIncident">Other Trauma Or Incident</label>
						    <textarea class="form-control" id="otherTraumaOrIncident" name="otherTraumaOrIncident" rows="3"><?php echo $data['otherTraumaOrIncident']?>
						    </textarea>
						</div>
						<div class="form-group">
							<label for="childProtectionReportsMade">Child Protection Reports Made</label>
							<select class="form-control" id="childProtectionReportsMade" name="childProtectionReportsMade">
								  <option value="<?php echo $data['childProtectionReportsMade']?>" selected><?php echo $data['childProtectionReportsMade']?></option>
								  <option value="yes">Yes</option>
								  <option value="no">No</option>
								  <option value="unknown">Unknown</option>
							</select>
						</div>
						<div class="form-group">
							<label for="linkedWithCourtAccompanimentServices">Linked With Court Accompaniment Services</label>
							<select class="form-control" id="linkedWithCourtAccompanimentServices" name="linkedWithCourtAccompanimentServices">
								<option value="<?php echo $data['linkedWithCourtAccompanimentServices']?>" selected><?php echo $data['linkedWithCourtAccompanimentServices']?></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<option value="unknown">Unknown</option>
							</select>
						</div>
						<div class="form-group">
				            <label for="dateFileShredded" class="col-2 col-form-label">Date File Shredded</label>
							<div class="col-10">
							  <input class="form-control" type="date" id="dateFileShredded" name="dateFileShredded" value="<?php echo $data['dateFileShredded']?>">
							</div>
				        </div>

						<div class="form-group">
						    <label for="otherComment">Other Comment</label>
						    <textarea class="form-control" id="otherComment" name="otherComment" rows="3"><?php echo $data['otherComment']?>
						    </textarea>
						</div>
					</div>
					<div class="col-md-12">
						<button type="button" class="btn btn-default btn-block" onclick="formFunction()">Submit</button>
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
			
			$.ajax({
				url: '<?php echo site_url('request/updateClient'); ?>',
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