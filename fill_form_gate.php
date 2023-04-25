<?php 
include_once('dbconn.php');
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || !isset($_SESSION["username"])){
    header("location: index.php");
    exit;
}

	$id_number="";
    $mtech_application_category = $_SESSION['mtech_application_category'];
    $mtech_department=$_SESSION['mtech_department'];
	// $mtech_ex=explode("-",$mtech_department);
	// $mtech_code=trim($mtech_ex[1]);
    $personal_email= $_SESSION['username'];
    $mtech_is_your_btech_from_iit = $_SESSION['mtech_is_your_btech_from_iit'];

$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'   LIMIT 1";

		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
			
		
		if ($user) { // if user exists
			if($user['filled_status']==1)
		{
            
			exit('Already registered');
           
		}
		else{
			// $id_number=$user['id_number'];
            // $query = "INSERT INTO `mtp_application_info` (`id_number`,`personal_email`,`mtech_application_category`, `mtech_department`, `mtech_is_your_btech_from_iit`) values (NULL,'$personal_email','$mtech_application_category', '$mtech_department','$mtech_is_your_btech_from_iit')"; 
			//echo $query;
			// mysqli_query($conn, $query);
			$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";

		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		$id_number=$user['id_number'];
        $filled_info = $user['filled_info'];
        $filled_payment = $user['filled_payment'];
        $filled_education = $user['filled_education'];
		}
			}

		// Finally, register user if there are no errors in the form
		else {
			$query = "INSERT INTO `mtp_application_info` (`id_number`,`personal_email`,`mtech_application_category`, `mtech_department`, `mtech_is_your_btech_from_iit`) values (NULL,'$personal_email','$mtech_application_category', '$mtech_department','$mtech_is_your_btech_from_iit')"; 
			//echo $query;
			mysqli_query($conn, $query);
			$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";

		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		$id_number=$user['id_number'];
		}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>IITP mtech Application Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://parsleyjs.org/src/parsley.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="http://parsleyjs.org/dist/parsley.min.js" type="text/javascript"></script>
	
	<script>
	
	 function daysDifference1() {
         //define two variables and fetch the input from HTML form
         var dateI1 = document.getElementById("work_1_from_date").value;
         var dateI2 = document.getElementById("work_1_to_date").value;

        //define two date object variables to store the date values
         var date1 = new Date(dateI1);
         var date2 = new Date(dateI2);
		 var diff_date =  date2 - date1;
		 var num_years = diff_date/31536000000;
var num_months = (diff_date % 31536000000)/2628000000;
var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;

		 document.getElementById("work_1_experience_duration").value =  Math.floor(num_years) + " Years, " +Math.floor(num_months)+" months," + Math.floor(num_days)+" days";
                           }
						   
						  function daysDifference2() {
         //define two variables and fetch the input from HTML form
         var dateI1 = document.getElementById("work_2_from_date").value;
         var dateI2 = document.getElementById("work_2_to_date").value;

        //define two date object variables to store the date values
         var date1 = new Date(dateI1);
         var date2 = new Date(dateI2);
		 var diff_date =  date2 - date1;
		 var num_years = diff_date/31536000000;
var num_months = (diff_date % 31536000000)/2628000000;
var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;

		 document.getElementById("work_2_experience_duration").value =  Math.floor(num_years) + " Years, " +Math.floor(num_months)+" months," + Math.floor(num_days)+" days";
                           }
						 function daysDifference3() {
         //define two variables and fetch the input from HTML form
         var dateI1 = document.getElementById("work_3_from_date").value;
         var dateI2 = document.getElementById("work_3_to_date").value;

        //define two date object variables to store the date values
         var date1 = new Date(dateI1);
         var date2 = new Date(dateI2);
		 var diff_date =  date2 - date1;
		 var num_years = diff_date/31536000000;
var num_months = (diff_date % 31536000000)/2628000000;
var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;

		 document.getElementById("work_3_experience_duration").value =  Math.floor(num_years) + " Years, " +Math.floor(num_months)+" months," + Math.floor(num_days)+" days";
                           }
						   </script>
</head>

<body>


<div style="background-color:black; width:320px; position:fixed; height:110%; margin-right:200px; margin-top:-50px">
<nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
            <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                <li class="nav-item w-100">
                    <h2 <?php if($filled_info === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:yellow" <?php } ?>><a class="nav-link text-light pl=4">Personal Information</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 <?php if($filled_payment === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_payment.php" class="nav-link text-light pl=4">Payment Info</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 <?php if($filled_education === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_education.php" class="nav-link text-light pl=4">Qualification</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 style="background-color:orange"><a href="fill_form_gate.php" class="nav-link text-light pl=4">GATE Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 <?php if($filled_work === '1'){ ?> style="backgroud-color:green" <?php } else { ?> style="background-color:black" <?php } ?> ><a href="fill_form_work.php" class="nav-link text-light pl=4">Work Experience</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 style="color:black"><a href="fill_form_declaration.php" class="nav-link text-light pl=4">Declaration</a></h2>
                </li>
                <li class="nav-item w-100">
                    <h4 style=" margin-top:45px"><a href="logout.php" class="nav-link text-red pl=4">LOGOUT</a></h2>
                </li>
            </ul>
        </nav>
</div>
<div style="margin-left:220px">
    <center>
        <h1 class="my-5">Hi, Welcome to M.Tech Registration Form</h1>
    </center>
    <form action="server_gate.php" method="post" onSubmit="alert('Successfully saved')" enctype="multipart/form-data">
        <div class="container py-5">
            <div class="row">

                <div class="col-md-10 offset-md-1">
                    <span class="anchor" id="formComplex"></span>
					
                    
                    <p>
                    <h1>Gate exam info</h1><br>
                    If you are applying the following category :<br>
                    SPONSORED / PART-TIME category, then GATE score is  <b>not</b> mandatory. In such case fill the  </b> the following default values. If you have  <b>not</b> given GATE exam then also <b>fill</b> the following default values. <br><br>

                    1. Registration No. (11 digits) : 10000000000<br>
                    2. Gate Score out of 1000 : 0<br>
                    3. Gate Rank : 0<br>
					4. Gate coap registration no. : COAP00000000<br>
                    5. Gate Paper Code : Not Applicable (NA)<br>
                    6. Gate Valid From : 01-01-2000<br>
                    7. Valid Upto : 01-01-2000
                    </p>
                    <h4>Important Info:</h4>
                    <h6>1. If your gate registration number is CS20S61226031 then enter ONLY 20S61226031 </h6>
					<h6>2. COAP Format: COAP12345678</h6>
                       <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>GATE Registration No.*</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" pattern="^[1-9][0-9][a-zA-Z0-9]{9}$" title="If your gate registration number is CS20S61226031 then enter ONLY 20S61226031" placeholder="Registration No." name="gate_registration_no" required>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Gate Paper Code*</b></label>
                            <select class="form-control" name="gate_paper_code" required>
                                <option value="">Select</option>
                                <option value="Aerospace Engineering (AE)">Aerospace Engineering (AE)</option>
                                <option value="Agricultural Engineering (AG)">Agricultural Engineering (AG)</option>
                                <option value="Architecture and Planning (AR)">Architecture and Planning (AR)</option>
                                <option value="Biomedical (BM)">Biomedical (BM)</option>
                                <option value="Biotechnology (BT)">Biotechnology (BT)</option>
                                <option value="Chemical Engineering (CH)">Chemical Engineering (CH)</option>
                                <option value="Chemistry (CY)">Chemistry (CY)</option>
                                <option value="Civil Engineering (CE)">Civil Engineering (CE)</option>
                                <option value="Computer Science and Information Technology (CS)">Computer Science and Information Technology (CS)</option>
                                <option value="Ecology and Evolution (EY)">Ecology and Evolution (EY)</option>
                                <option value="Electrical Engineering (EE)">Electrical Engineering (EE)</option>
                                <option value="Electronics and Communication Engineering (EC)">Electronics and Communication Engineering (EC)</option>
                                <option value="Engineering Sciences (XE)">Engineering Sciences (XE)</option>
                                <option value="Environmental Science and Engineering (ES)">Environmental Science and Engineering (ES)</option>
								<option value="Geomatics Engineering (GE)">Geomatics Engineering (GE)</option>
                                <option value="Geology and Geophysics (GG)">Geology and Geophysics (GG)</option>
                                <option value="Humanities and Social Sciences (XH)">Humanities and Social Sciences (XH)</option>
                                <option value="Instrumentation Engineering (IN)">Instrumentation Engineering (IN)</option>
                                <option value="Life Sciences (XL)">Life Sciences (XL)</option>
                                <option value="Mathematics (MA)">Mathematics (MA)</option>
                                <option value="Mechanical Engineering (ME)">Mechanical Engineering (ME)</option>
                                <option value="Metallurgical Engineering (MT)">Metallurgical Engineering (MT)</option>
                                <option value="Mining Engineering (MN)">Mining Engineering (MN)</option>
                                <option value="Petroleum Engineering (PE)">Petroleum Engineering (PE)</option>
                                <option value="Physics (PH)">Physics (PH)</option>
                                <option value="Production and Industrial Engineering (PI)">Production and Industrial Engineering (PI)</option>
                                <option value="Statistics (ST)">Statistics (ST)</option>
                                <option value="Textile Engineering and Fiber Science (TF)">Textile Engineering and Fiber Science (TF)</option>
                                <option value="Not Applicable (NA)">Not Applicable (NA)</option>

                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>COAP registration no.*</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="gate_coap_registration_no" title="COAP Format: COAP12345678"  pattern="^COAP[0-9]{8}$" placeholder="COAP registration no." required>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Gate Score out of 1000*</b></label>
                            <input type="number" class="form-control" max="1000" id="exampleCtrl" name="gate_score_out_of_1000" placeholder="Gate Score out of 1000" required>
                        </div>

                    </div>

                    <!-- <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />  -->
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Gate Rank*</b></label>
                            <input type="number" min="0"  class="form-control" id="exampleCtrl" name="gate_rank" placeholder="Gate Rank" required>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Gate Valid From*</b></label>
                            <input type="date" class="form-control" id="exampleCtrl" name="gate_valid_from" required>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Valid Upto*</b></label>
                            <input type="date" class="form-control" id="exampleCtrl" name="gate_valid_upto" required>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Notes If Any</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" placeholder="Notes If Any" name="gate_notes_if_any" maxlength="200">
                        </div>

                    </div>
                    					
					<hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
					<h4 style="color:#A31260 ;"> Upload documents </h4>
  <div class="m-5"><p><h4>Note:</h4> You can use these Scanning Apps for scanning documents and converting to pdf. Links are provided below </p></div>
  <div class="list-group m-5">
  <a href="https://play.google.com/store/apps/details?id=com.microsoft.office.officelens&view=zertifikate&hl=en_NZ" class="list-group-item list-group-item-action" target="_blank" rel="noopener">Microsoft Office Lens</a>
  <a href="https://play.google.com/store/apps/details?id=com.adobe.scan.android&hl=en_NZ" class="list-group-item list-group-item-action" target="_blank" rel="noopener">Adobe Scan</a>
  <a href="https://www.ilovepdf.com/" class="list-group-item list-group-item-action" target="_blank" rel="noopener">I Love Pdf (For pdf tools and merging)</a>
  </div>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Id Proof* (only pdf)</b></label>
                            <input type="file" class="form-control" id="idproof" name="idproof" accept="application/pdf" required>
                        </div>
						<div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Personal Photo* (only jpg)</b></label>
                            <input type="file" class="form-control" id="passport" name="passport" accept="image/jpeg" required>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Caste (only pdf)</b></label>
                            <input type="file" class="form-control" id="caste" name="caste" accept="application/pdf">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Gate score (only pdf)</b></label>
                            <input type="file" class="form-control" id="gate" name="gate" accept="application/pdf">
                        </div>
                       
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Payment Receipt* (only pdf)</b></label>
                            <input type="file" class="form-control" id="paymentreceipt" name="paymentreceipt" accept="application/pdf" required>
                        </div>
                        
                    </div>
					<hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                    <center><button type="submit" name="regf_user" class="btn btn-primary">Save and Next</button></center>
                    
                    
                    
	
                </div>
    </form>
    </div>

    </div>
    <!--/row-->


    </div>
    <!--/col-->
    </div>
    <!--/row-->

    </div>
    </div>
    </div>
    </div>
    <!--/container-->

</body>

</html>

<?php
              
            
        
?>