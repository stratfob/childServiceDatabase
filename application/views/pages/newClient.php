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
		  <p class="navbar-text">
            	<?php  
					if($this->session->logged_in == false){
						redirect(site_url('Login/index'));
					}
					else{
						echo "Logged in as " . $this->session->username . "";
					}
				?>
            </p> 
            <li><a href= "<?php echo site_url('homePage'); ?>">Home</a></p> </li>
            <li><a href = "<?php echo site_url('home'); ?>">Search</a></li>
            
            <li><a href= "<?php echo site_url('pages/logout'); ?>"> Log Out </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        
    <h1 class="text-center">Create Client</h1>


	<div class="container theme-showcase" role="main">
		<div class="row">
<form id="form">
		
					<div class="col-md-4">
						<div class="form-group">
						    <label for="caseNumber">Client Number</label>
						    <input type="number" class="form-control" id="caseNumber" name="caseNumber">
						</div>
						<div class="form-group">
						    <label for="firstName">First Name</label>
						    <input type="text" class="form-control" id="firstName" name="firstName">
						</div>
						<div class="form-group">
						    <label for="lastName">Last Name</label>
						    <input type="text" class="form-control" id="lastName" name="lastName">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						    <label for="gender">Gender</label>
						    <select class="form-control" id="gender" name = "gender">
								<option value="" disabled selected>Select...</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
						    </select>
						</div>
						<div class="form-group">
						    <label for="age">Age at time of Client Creation</label>
						    <input type="number" class="form-control" id="age" name="age">
						</div>
						<div class="form-group">
						    <label for="referrerName">Referrer Name</label>
						    <input type="text" class="form-control" id="referrerName" name="referrerName">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						    <label for="referrerAgency">Referrer Agency</label>
						    <input type="text" class="form-control" id="referrerAgency" name="referrerAgency">
						</div>
						<div class="form-group">
						    <label for="fatherName">Father Name</label>
						    <input type="text" class="form-control" id="fatherName" name="fatherName">
						</div>
						<div class="form-group">
						    <label for="motherName">Mother Name</label>
						    <input type="text" class="form-control" id="motherName" name="motherName">
						</div>

					</div>

					<div class="col-md-6">
						<div class="form-group">
						    <label for="referralReason">Referral Reason</label>
						    <input type="text" class="form-control" id="referralReason" name="referralReason">
						</div>
						<div class="form-group">
						    <label for="CSAoutcome">Childhood Sexual Assault Outcome</label>
							<select class="form-control" id="CSAoutcome" name="CSAoutcome">
								<option value="" disabled selected>Select...</option>
								<option value="Credible">Credible</option>
								<option value="Not Credible">Not Credible</option>
								<option value="Inconclusive">Inconclusive</option>
						    </select>						
						</div>
						<div class="form-group">
						    <label for="natureOfAbuse">Nature Of Abuse</label>
						    <select class="form-control" id="natureOfAbuse" name="natureOfAbuse">
								<option value="" disabled selected>Select...</option>
								<option value="Physical">Physical</option>
								<option value="Mental">Mental</option>
								<option value="Sexual">Sexual</option>
								<option value="Emotional">Emotional</option>
						    </select>
						</div>
						<div class="form-group">
						    <label for="continuousOrOnceOff">One or more Incidents of Abuse</label>
						    <select class="form-control" id="continuousOrOnceOff" name="continuousOrOnceOff">
								<option value="" disabled selected>Select...</option>
								<option value="One">One</option>
								<option value="More">More</option>
						    </select>
						</div>
						<div class="form-group">
						    <label for="oneOrMultipleAbusers">One Or Multiple Abusers</label>
						    <select class="form-control" id="oneOrMultipleAbusers" name="oneOrMultipleAbusers">
								<option value="" disabled selected>Select...</option>
								<option value="One">One</option>
								<option value="Multiple">Multiple</option>
						    </select>
						</div>
						<div class="form-group">
						    <label for="abuserRelationToVictim">Abuser Relation To Victim</label>
						    <input type="text" class="form-control" id="abuserRelationToVictim" name="abuserRelationToVictim">
						</div>
						<div class="form-group">
						    <label for="peerToPeerOrAdult">Peer To Peer or Adult</label>
						    <select class="form-control" id="peerToPeerOrAdult" name="peerToPeerOrAdult">
								<option value="" disabled selected>Select...</option>
								<option value="Peer To Peer">Peer To Peer</option>
								<option value="Adult">Adult</option>
						    </select>
						</div>
						<div class="form-group">
						    <label for="location">County</label>
						    <input type="text" class="form-control" id="location" name="location">
						</div>
						<div class="form-group">
				            <label for="waitingListStartDate" class="col-2 col-form-label">Waiting List Start Date</label>
							<div class="col-10">
							  <input class="form-control" type="date" id="waitingListStartDate" name="waitingListStartDate">
							</div>
				        </div>
					    <div class="form-group">
				            <label for="therapyStartDate" class="col-2 col-form-label">Therapy Start Date</label>
							<div class="col-10">
							  <input class="form-control" type="date" id="therapyStartDate" name="therapyStartDate">
							</div>
				        </div>
					</div>
			
					<div class="col-md-6">

						<div class="form-group">
							<label for="returned">Previous Client</label>
							<select class="form-control" id="returned" name="returned">
								<option value="" disabled selected>Select...</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>
						<div class="form-group">
							<label for="childInCare">Child In Care</label>
							<select class="form-control" id="childInCare" name="childInCare">
								<option value="" disabled selected>Select...</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>
						<div class="form-group">
						    <label for="appointmentOffered">Appointment Offered</label>
						    <select class="form-control" id="appointmentOffered" name="appointmentOffered">
								  <option value="" disabled selected>Select...</option>
								  <option value="Advice appointment">Advice appointment</option>
								  <option value="Therapy appointment">Therapy appointment</option>
								  <option value="Other">Other</option>
							</select>
						</div>
						<div class="form-group">
							<label for="professionalsForAdviceAppointment">Therapist Name</label>
							<input type="text" class="form-control" id="professionalsForAdviceAppointment" name="professionalsForAdviceAppointment">
						</div>
						<div class="form-group">
							<label for="childProtectionReportsMade">Child Protection Reports Made</label>
							<select class="form-control" id="childProtectionReportsMade" name="childProtectionReportsMade">
								  <option value="" disabled selected>Select...</option>
								  <option value="Yes">Yes</option>
								  <option value="No">No</option>
								  <option value="Unknown">Unknown</option>
							</select>
						</div>
						<div class="form-group">
							<label for="linkedWithCourtAccompanimentServices">Linked With Court Accompaniment Services</label>
							<select class="form-control" id="linkedWithCourtAccompanimentServices" name="linkedWithCourtAccompanimentServices">
								<option value="" disabled selected>Select...</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
								<option value="Unknown">Unknown</option>
							</select>
						</div>
						<div class="form-group">
							<label for="linkedWithForensicAccompanimentServices">Linked With Forensic Accompaniment Services</label>
							<select class="form-control" id="linkedWithForensicAccompanimentServices" name="linkedWithForensicAccompanimentServices">
								<option value="" disabled selected>Select...</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
								<option value="Unknown">Unknown</option>
							</select>
						</div>
						<div class="form-group">
				            <label for="dateFileShredded" class="col-2 col-form-label">Date File Shredded</label>
							<div class="col-10">
							  <input class="form-control" type="date" id="dateFileShredded" name="dateFileShredded">
							</div>
				        </div>

						<div class="form-group">
						    <label for="otherComment">Other Comment</label>
						    <textarea class="form-control" id="otherComment" name="otherComment" rows="3"></textarea>
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
					dataString+="&";
				}
			}			
			dataString += "&dateClientCreated=" + "<?php echo date('Y-m-d'); ?>" ;
			
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