<?php 
include_once('dbconn.php');
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$id_number="";
$mtech_application_category = $_SESSION['mtech_application_category'];
$mtech_department=$_SESSION['mtech_department'];
// $mtech_ex=explode("-",$mtech_department);
// $mtech_code=trim($mtech_ex[1]);
$personal_email= $_SESSION['username'];
    // $personal_email= mysqli_real_escape_string($conn, $_POST['personal_email']);
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
			// //echo $query;
			// mysqli_query($conn, $query);
			$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";

		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		$id_number=$user['id_number'];
        $filled_info = $user['filled_info'];
        $filled_academic = $user['filled_academic'];
        $filled_experience = $user['filled_experience'];
        $filled_publication = $user['filled_publication'];
        $filled_referee = $user['filled_referee'];
        // echo $filled_info. $filled_payment;
		}
			}

		// Finally, register user if there are no errors in the form
		else {
			// $query = "INSERT INTO `mtp_application_info` (`id_number`,`personal_email`,`mtech_application_category`, `mtech_department`, `mtech_is_your_btech_from_iit`) values (NULL,'$personal_email','$mtech_application_category', '$mtech_department','$mtech_is_your_btech_from_iit')"; 
			//echo $query;
			// mysqli_query($conn, $query);
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

<div style="background-color:black; width:320px; position:fixed; height:110%; margin-right:70%; margin-top:-50px">
        <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
            <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                <li class="nav-item w-100"> 
                    <h2 <?php if($filled_info === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a class="nav-link text-light pl=4">Personal Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 style="background-color:orange"><a href="fill_form_payment.php" class="nav-link text-light pl=4">Academic Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 <?php if($filled_experience === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_education.php" class="nav-link text-light pl=4">Experience Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 <?php if($filled_publication === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_gate.php" class="nav-link text-light pl=4">Publication Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 <?php if($filled_referee === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_work.php" class="nav-link text-light pl=4">Referee Details</a></h2>
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
        <h1 class="my-5">Hi, Welcome to Teaching Application Form</h1>
    </center>
    <form action="server_academic.php" method="post" onSubmit="alert('Successfully saved')" enctype="multipart/form-data">
        <div class="container py-5" style="margin-left:130px">
            <form class="form-horizontal" action="#" method="post">
            <h3>Academic Record(starting from Bachelors)</h3>
            <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
            <div class="row">
                    
                    <div class="form-row mt-4">
                        <div class="col-sm-1">
                            <label for="Age">Sl No:</label>
                            <input type="text" class="form-control sl" name="slno[]" id="slno" value="1" readonly="">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Exam Passed</b></label>
                            <input type="text" class="form-control" id="exampleAccount" name="academic_exam_passed[]" >
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Degree Name</b></label>
                            <select class="form-control" name="academic_degree_name[]">
                                <option value="">Select </option>
                                <option value="5 year BS-MS Dual Degree Programme" >5 year BS-MS Dual Degree Programme</option>
                                <option value="5 year Integrated M.Sc" >5 year Integrated M.Sc</option>
                                <option value="5 year dual degree B.E. and M.E.." >5 year dual degree B.E. and M.E..</option>
                                <option value="5 year dual degree B.Tech and M.Tech" >5 year dual degree B.Tech and M.Tech</option>
                                <option value="Integrated M.Sc-Ph.D" >Integrated M.Sc-Ph.D</option>
                                <option value="Integrated MA" >Integrated MA</option>
                                <option value="Integrated MBA" >Integrated MBA</option>
                                <option value="Integrated MCA WITH BCA" >Integrated MCA WITH BCA</option>
                                <option value="LLM" >LLM</option>
                                <option value="M-Pharma" >M-Pharma</option>
                                <option value="M.Com" >M.Com</option>
                                <option value="M.D.S." >M.D.S.</option>
                                <option value="M.DES" >M.DES</option>
                                <option value="M.Ed." >M.Ed.</option>
                                <option value="M.E." >M.E.</option>
                                <option value="M.Phil.">M.Phil.</option>
                                <option value="M.Sc" >M.Sc</option>
                                <option value="M.Tech" >M.Tech</option>
                                <option value="MA">MA</option>
                                <option value="MBA" >MBA</option>
                                <option value="MBBS" >MBBS</option>
                                <option value="MBEM" >MBEM</option>
                                <option value="MBS" >MBS</option>
                                <option value="MCA" >MCA</option>
                                <option value="MPMIR" >MPMIR</option>
                                <option value="MPS" >MPS</option>
                                <option value="MS">MS</option>
                                <option value="MSW" >MSW</option>
                                <option value="PGDABM" p>PGDABM</option>
                                <option value="PGDHHM" p>PGDHHM</option>
                                <option value="PGDM" >PGDM</option>
                                <option value="PGDRD" >PGDRD</option>
                                <option value="PGDT" >PGDT</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div>

                        <div class="col-sm-5 pb-5">
                            <label for="exampleCtrl"><b>Subject/Area of Specialization</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="academic_subject[]" placeholder="" maxlength="100">
                            </select>
                        </div>
                    
                    </div>
                    <div class="form-row mt-4" style="width:80%">
                        <div class="col-sm-3 pb-4">
                            <label for="exampleCtrl"><b>University/Institute</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="academic_institute[]" placeholder="(100 char max) Univeristy Name" maxlength="100">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Passing Year</b></label>
                            <select class="form-control" name="academic_passing_year[]">
                                <option value="">Select</option>
                                <?php
                                $y = date("Y", strtotime("+8 HOURS"));
                                for ($year = 1950; $y >= $year; $y--) {
                                    echo "<option value = '" . $y . "'>" . $y . "</option>";
                                }
                                ?>
                            </select>
                        </div>


                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Percentage/CGPA</b></label>
                            <input type="number" class="form-control" min="0" max="100"  step=".01" id="exampleAccount" name="academic_cgpa[]" placeholder="Percentage/CGPA">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Out of</b></label>
                            <select class="form-control" name="academic_out_of[]">
                                <option value=''>Select</option>
                                <option value="100">100</option>
                                <option value="10">10</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mt-4" style="width:80%">
                        <div class="col-sm-4 pb-3">
                            <label for="exampleCtrl"><b>Complete Status</b></label>
                            <select class="form-control" name="academic_complete_status[]">
                                <option value=''>Select</option>
                                <option value="Completed">Completed</option>
                                <option value="Ongoing">Ongoing</option>
                            </select>
                        </div>
                        <div class="col-sm-4 pb-3">
                            <label for="exampleCtrl"><b>Notes If Any</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="academic_notes[]" placeholder="(200 char max) Notes If Any" maxlength="200">
                        </div>
                    </div>
                    
                    <br/>
                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <!-- </div> -->
            </div> 
            <div id="next"></div>
            <br/>

            <button type="button" name="addrow" id="addrow" class="btn btn-success pull-right">Add New Row</button> 
                            <br/>
                    
	
        </div>
                <br/> <br/>
                <div class="col-md-10 offset-md-1" style="margin-top:5px">
                    <div class="col-sm-6 pb-6">
                            <label for="exampleAccount"><b>Area of Specialisation</b></label>
                            <input type="text" class="form-control" id="personal_specialisation" name="academic_specialisation" placeholder="Specialisation">
                    </div>
                    <div class="col-sm-6 pb-6">
                            <label for="exampleCtrl"><b>Current Topic of Research</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="academic_topic_of_research"  maxlength="200">
                    </div>
                    <br/>
                    <center><button style="align:center" type="submit" name="regf_user" class="btn btn-primary">Save and Next</button><center>
                </div>

                

    </form>
    </div>

    <script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
<script>
$('#addrow').click(function(){
        var length = $('.sl').length;
        var i   = parseInt(length)+parseInt(1);
        // alert(i);

        var newrow = $('#next').append('<div class="row"><div class="form-row mt-4"><div class="col-sm-1"><label for="Age">Sl No:</label><input type="text" class="form-control sl" name="slno[]" id="slno" value="'+i+'" readonly=""></div><div class="col-sm-3 pb-3"><label for="exampleAccount"><b>Exam Passed</b></label><input type="text" class="form-control" id="exampleAccount'+i+'" name="academic_exam_passed[]"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>Degree Name</b></label><select class="form-control" name="academic_degree_name[]"><option value="">Select </option></select></div><div class="col-sm-5 pb-5"><label for="exampleCtrl"><b>Subject/Area of Specialization</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="academic_subject[]" placeholder="(100 char max) College Name" maxlength="100"></select></div></div><div class="form-row mt-4" style="width:80%"><div class="col-sm-4 pb-4"><label for="exampleCtrl"><b>University/Institute</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="academic_institute[]" placeholder="(100 char max) Univeristy Name" maxlength="100"></div><div class="col-sm-2 pb-3"><label for="exampleCtrl"><b>Passing Year</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="academic_passing_year[]" placeholder="(100 char max) Univeristy Name" maxlength="100"></div><div class="col-sm-3 pb-3"><label for="exampleAccount"><b>Percentage/CGPA</b></label><input type="number" class="form-control" min="0" max="100"  step=".01" id="exampleAccount'+i+'" name="academic_cgpa[]" placeholder="Percentage/CGPA"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>Out of</b></label><select class="form-control" name="academic_out_of[]"><option value="100">100</option><option value="10">10</option><option value="4">4</option></select></div></div><div class="form-row mt-4" style="width:80%"><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>Complete Status</b></label><select class="form-control" name="academic_complete_status[]"><option value="Completed">Completed</option><option value="Ongoing">Ongoing</option></select></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>Notes If Any</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="academic_notes[]" placeholder="(200 char max) Notes If Any" maxlength="200"></div></div><input type="button" class="btnRemove btn-danger" value="Remove"/></div>');

        });
     
    // Removing event here
  $('body').on('click','.btnRemove',function() {
       $(this).closest('div').remove()
 
  });
         
</script>

</div>

    </div>
   

</body>

</html>

<?php
              
            
        
?>