<?php 
include_once('dbconn.php');
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

	$id_number="";
    $mtech_application_category = $_SESSION['mtech_application_category'];
    $mtech_department= $_SESSION['mtech_department'];
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
            $user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";

		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		$id_number=$user['id_number'];
        $filled_info = $user['filled_info'];
        $filled_academic = $user['filled_academic'];
        $filled_experience = $user['filled_experience'];
        $filled_publication = $user['filled_publication'];
        $filled_referee = $user['filled_referee'];
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
        $filled_info = $user['filled_info'];
        $filled_academic = $user['filled_academic'];
        $filled_experience = $user['filled_experience'];
        $filled_publication = $user['filled_publication'];
        $filled_referee = $user['filled_referee'];
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
                    <h2 <?php if($filled_academic === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_academic.php" class="nav-link text-light pl=4">Academic Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 <?php if($filled_experience === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_experience.php" class="nav-link text-light pl=4">Experience Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 <?php if($filled_publication === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_publication.php" class="nav-link text-light pl=4">Publication Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 <?php if($filled_referee === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_referee.php" class="nav-link text-light pl=4">Referee Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 style="background-color:orange"><a href="fill_form_declaration.php" class="nav-link text-light pl=4">Others and Submit</a></h2>
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
    <form action="server_declaration.php" method="post" enctype="multipart/form-data">
        <div class="container py-5" style="margin-left:180px">
            <div class="row" >
            <div class="row">
            <div id="checkboxes">
                <input type="checkbox" name="others_awards_checked" id="others_awards_checked" onchange="checkAward()"/> Awards and Recognition<br />

        <!-- <div class="container py-5"> -->
            <div class="row" style="margin-left:20px; border:2px solid black; display:none; width:80%"  id="empl" name="empl">
    
                    <div class="form-row mt-4" style="margin-left:20px; width:80%">
                        <div class="col-sm-1">
                            <label for="Age">Sl No:</label>
                            <input type="text" class="form-control sl" name="slno[]" id="slno" value="1" readonly="">
                        </div>
                        <div class="col-sm-5 pb-3">
                            <label for="exampleAccount"><b>Awards and Recognition</b></label>
                            <input type="text" class="form-control" id="exampleAccount" name="others_awards[]" >
                        </div>


                        <div class="col-sm-4 pb-3">
                            <label for="exampleCtrl"><b>Year</b></label>
                            <input type="text" class="form-control" id="exampleAccount" name="others_awards_year[]" >
                            
                        </div>
                       
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-sm-5 pb-4">
                            <label for="exampleCtrl"><b>Agency</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="others_awards_agency[]" placeholder="(100 char max) Univeristy Name" maxlength="100">
                        </div>
                        
                        <div class="col-sm-5 pb-3">
                            <label for="exampleAccount"><b>Upload Award</b></label>
                            <input type="file" class="form-control" min="0" max="100"  step=".01" id="exampleAccount" name="others_award_upload[]">
                        </div>
                       
                    </div>
                    
                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                
                    <div id="next6"></div>
                

                    <button type="button" name="addrow_hist" id="addrow_hist" class="btn btn-success pull-right">Add New Row</button> 
                            
                <!-- </div>  -->
	
            <!-- </div> -->
        </div>
        </div>
        </div>
    </div>
    <br/>
    <div class="container" style="margin-left:-15px">
    <div class="row">    
            <div class="row">
            <div class="checkboxes">
                <input type="checkbox" id="others_technology_checked" name="others_technology_checked" onchange="checkTechnology()"/> Technologies Developed/Transferred<br />  
            
                <div class="container py-5" id="teach_div" name="teach_div" style="display:none">
                <div class="row">

                <div class="col-md-10 offset-md-1" style="margin-left:10px;  border:3px solid black">
                    <span class="anchor" id="formComplex"></span>
					
                    
                    <div class="form-row mt-4">
                        <div class="col-sm-4 pb-4">
                            <label for="exampleAccount"><b>Developers</b></label>
                            <input type="text" class="form-control" id="exampleAccount" name="others_technology_developer" placeholder="Enter roles and responsibilites" >
                        </div>


                        <div class="col-sm-4 pb-3" style="margin-left:200px">
                            <label for="exampleCtrl"><b>Description</b></label>
                            <input type="text" class="form-control" id="exampleAccount" name="others_technology_description" >
                            
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-sm-4 pb-4">
                            <label for="exampleAccount"><b>Year of Completion</b></label>
                            <input type="text" class="form-control" id="exampleAccount" name="others_technology_completion" placeholder="Enter roles and responsibilites" >
                        </div>


                        <div class="col-sm-4 pb-3" style="margin-left:200px">
                            <label for="exampleCtrl"><b>Upload Details</b></label>
                            <input type="file" class="form-control" id="exampleAccount" name="others_technology_upload" >
                            
                        </div>
                    </div>
                    
                    
                </div>
                </div>
            </div>
        
           
        
        
        </div>
                        </div>
                        </div>     

        
    </div>

    

                

    <!-- </form> -->

    
                    <br/>
        <div class="row">    
            <div class="row">
            <div id="checkboxes">
                <input type="checkbox" id="others_patent_checked" name="others_patent_checked" onchange="checkPatentDiv()">  Patents<br />

                <div class="container" id="exp_div" name="exp_div" style="border:3px solid black; display:none">
                <table id="datatable" class="table table-hover dt-responsive table-condensed" cellspacing="0" width="100%">
                    <thead>
                        <tr class="bg-teal">       
                            <th></th>
                            <th><label style="text-transform: capitalize;">Indian
                                    <span style="font-size:19px;font-weight:bold;" class="text-danger"></span></label></th>     
                            <th><label style="text-transform: capitalize;">International
                                    <span style="font-size:19px;font-weight:bold;" class="text-danger"></span></label></th>  
                     
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Number of Patents Filed </td>
                            <td><input type="text" maxlength="3" value="0" data-validation="number" onblur="addTotal2(0);" data-validation-optional="true" id="others_patent_filed_indian" name="others_patent_filed_indian" class="empField2 form-control">
                            </td>
                            <td><input type="text" maxlength="3" value="0" data-validation="number" onblur="addTotal2(0);" data-validation-optional="true" id="others_patent_filed_international" name="others_patent_filed_international" class="empField2 form-control">
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td>Number of Patents Granted</td>
                            <td><input type="text" maxlength="3" value="0" data-validation="number" onblur="addTotal2(1);" data-validation-optional="true" id="others_patent_granted_indian" name="others_patent_granted_indian" class="empField2 form-control">
                            </td>
                            <td><input type="text" maxlength="3" value="0" data-validation="number" onblur="addTotal2(1);" data-validation-optional="true" id="others_patent_granted_international" name="others_patent_granted_international" class="empField2 form-control">
                            </td>

                            
                        </tr>
                        
                    </tbody>

                </table>
                </div>
            </div>
            </div>
        </div>
                        <br/>


                        <div class="row">    
            <div class="row">
            <div id="checkboxes">
                <input type="checkbox"  id="others_coverletter_checked" name="others_coverletter_checked" onchange="checkCoverLetterDiv();">
            
            Cover Letter<br/>
        

            <div class="container py-5" id="ind_div" name="ind_div" style="display:none">
                <div class="row">

                <div class="col-md-10 offset-md-1" style="margin-left:10px; border:3px solid black">
                    <span class="anchor" id="formComplex"></span>
					
                    
                    <div class="form-row mt-4">
                        <div class="col-sm-4 pb-4">
                            <label for="exampleAccount"><b>Description</b></label>
                            <input type="text" class="form-control" id="others_coverletter_description" name="others_coverletter_description" placeholder="Enter roles and responsibilites" >
                        </div>


                        <div class="col-sm-3 pb-3" style="margin-left:230px">
                            <label for="exampleCtrl"><b>Upload Cover Letter</b></label>
                            <input type="file" class="form-control" id="experience_indus_details" name="experience_indus_details" >
                            
                        </div>
                    </div>
                    
                    
                </div>
                </div>
            </div>
                        </div>
                        </div>
                        </div>
                        
                    <br/>



                    <div class="row">    
            <div class="row">
            
            <h6>Research Plan</h6><br/>
        

            <div class="container py-5" id="ind_div" name="ind_div">
                <div class="row">

                <div class="col-md-10 offset-md-1" style="margin-left:10px; border:3px solid black">
                    <span class="anchor" id="formComplex"></span>
					
                    
                    <div class="form-row mt-4">
                        <div class="col-sm-4 pb-4">
                            <label for="exampleAccount"><b>Description</b></label>
                            <input type="text" class="form-control" id="others_research_description" name="others_research_description" placeholder="Enter roles and responsibilites" >
                        </div>


                        <div class="col-sm-3 pb-3" style="margin-left:230px">
                            <label for="exampleCtrl"><b>Upload Cover Letter</b></label>
                            <input type="file" class="form-control" id="experience_indus_details" name="experience_indus_details" >
                            
                        </div>
                    </div>
                    
                    
                </div>
                </div>
            </div>
                        </div>
                        </div>
                        
                    <br/>



                        <div class="row">    
            <div class="row">
            
               
            
            <h6>Teaching Preference/Interest</h6><br/>
        

            <div class="container py-5" id="ind_div" name="ind_div">
                <div class="row">

                <div class="col-md-10 offset-md-1" style="margin-left:10px; border:3px solid black">
                    <span class="anchor" id="formComplex"></span>
					
                    
                    <div class="form-row mt-4">
                        <div class="col-sm-4 pb-4">
                            <label for="exampleAccount"><b>Description</b></label>
                            <input type="text" class="form-control" id="others_interest_description" name="others_interest_description" placeholder="Enter roles and responsibilites" >
                        </div>


                        <div class="col-sm-3 pb-3" style="margin-left:230px">
                            <label for="exampleCtrl"><b>Upload Cover Letter</b></label>
                            <input type="file" class="form-control" id="experience_indus_details" name="experience_indus_details" >
                            
                        </div>
                    </div>
                    
                    
                </div>
                </div>
            </div>
                        </div>
                        </div>
                       
                        
                    <br/>
                        <div class="row">    
            <div class="row">
            <div id="checkboxes">
                    <input type="checkbox" id="others_resume_checked" name="others_resume_checked" onchange="checkResumeDiv();">

                    Other Activities/Resume
            

             <div class="container py-5" id="adm_div" name="adm_div" style="display:none">
            <div class ="row" >
                <div class="col-md-10 offset-md-1" style="margin-left:10px; border:3px solid black">
                    <span class="anchor" id="formComplex"></span>
					
                    
                    <div class="form-row mt-4">
                        <div class="col-sm-4 pb-4">
                            <label for="exampleAccount"><b>Summary</b></label>
                            <input type="text" class="form-control" id="others_resume_summary" name="others_resume_summary" placeholder="Enter roles and responsibilites" >
                        </div>


                        <div class="col-sm-3 pb-3" style="margin-left:230px">
                            <label for="exampleCtrl"><b>Upload Further Details</b></label>
                            <input type="file" class="form-control" id="experience_admin_details" name="experience_admin_details" >
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            </div> 
            </div>

        </div>
        <script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
<script>

$('#addrow').click(function(){
        var length = $('.sl').length;
        var i   = parseInt(length)+parseInt(1);
        // alert(i);
        var newrow = $('#next').append('<div class="row"><div class="row"><div class="col-sm-1"><label for="Age">Sl No:</label><input type="text" class="form-control sl" name="slno[]" value="'+i+'" readonly=""></div><div class="col-sm-3 pb-2"><label for="exampleAccount"><b>Work Experience Type</b></label><select class="form-control" name="work_1_experience_type[]"><option value="">Select</option><option value="Teaching">Teaching</option><option value="Research">Research</option><option value="Industry">Industry</option><option value="Others">Others</option></select></div><div class="col-sm-4 pb-3"><label for="exampleCtrl"><b>Organization Name</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_organization_name[]" placeholder="(100 char max) Organization Name" maxlength="100"></div><div class="col-sm-4 pb-3"><label for="exampleCtrl"><b>Position</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_position[]" placeholder="(100 char max) Position" maxlength="100"></div></div><div class="row" style="margin-left:50px"><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>From Date</b></label><input type="date" class="form-control" id="work_1_from_date'+i+'" name="work_1_from_date[]"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>To Date</b></label><input type="date" class="form-control" id="work_1_to_date'+i+'" name="work_1_to_date[]" onfocusout="daysDifference1()"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>Nature of Work</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_nature_of_work[]" placeholder="(100 char max) Nature of Work" maxlength="100"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>Current Job</b></label><select class="form-control" name="work_1_current_job[]"><option value="">Select</option><option value="Yes">Yes</option><option value="No">No</option></select></div></div><input type="button" class="btnRemove btn-danger" value="Remove"/></div>');
        // var newrow = $('#next').append('<div class="row"><h1>Head</h1></div><input type="button" class="btnRemove btn-danger" value="Remove"/>');

        });

$('#addrow_hist').click(function(){
    var length = $('.sl').length;
    var i   = parseInt(length)+parseInt(1);
    // alert(i);
    // var newrow = $('#next6').append('<div class="row"><div class="row"><div class="col-sm-1"><label for="Age">Sl No:</label><input type="text" class="form-control sl" name="slno[]" value="'+i+'" readonly=""></div><div class="col-sm-3 pb-2"><label for="exampleAccount"><b>Work Experience Type</b></label><select class="form-control" name="work_1_experience_type[]"><option value="">Select</option><option value="Teaching">Teaching</option><option value="Research">Research</option><option value="Industry">Industry</option><option value="Others">Others</option></select></div><div class="col-sm-4 pb-3"><label for="exampleCtrl"><b>Organization Name</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_organization_name[]" placeholder="(100 char max) Organization Name" maxlength="100"></div><div class="col-sm-4 pb-3"><label for="exampleCtrl"><b>Position</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_position[]" placeholder="(100 char max) Position" maxlength="100"></div></div><div class="row" style="margin-left:50px"><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>From Date</b></label><input type="date" class="form-control" id="work_1_from_date'+i+'" name="work_1_from_date[]"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>To Date</b></label><input type="date" class="form-control" id="work_1_to_date'+i+'" name="work_1_to_date[]" onfocusout="daysDifference1()"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>Nature of Work</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_nature_of_work[]" placeholder="(100 char max) Nature of Work" maxlength="100"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>Current Job</b></label><select class="form-control" name="work_1_current_job[]"><option value="">Select</option><option value="Yes">Yes</option><option value="No">No</option></select></div></div><input type="button" class="btnRemove btn-danger" value="Remove"/></div>');
    var newrow = $('#next6').append('<div class="row" style="margin-left:20px">'
    
   +' <div class="form-row mt-4" style="margin-left:20px; width:80%">'
   +'     <div class="col-sm-1">'
   +'         <label for="Age">Sl No:</label>'
   +'         <input type="text" class="form-control sl" name="slno[]" value="'+i+'" readonly="">'
   +'     </div>'
   +'     <div class="col-sm-5 pb-3">'
   +'         <label for="exampleAccount"><b>Awards and Recognition</b></label>'
   +'         <input type="text" class="form-control" id="exampleAccount'+i+'" name="others_awards[]" >'
   +'     </div>'


   +'     <div class="col-sm-4 pb-3">'
   +'         <label for="exampleCtrl"><b>Year</b></label>'
   +'         <input type="text" class="form-control" id="exampleAccount'+i+'" name="others_awards_year[]" >'
            
   +'     </div>'
       
   +' </div>'
   +' <div class="form-row mt-4">'
   +'     <div class="col-sm-5 pb-4">'
   +'         <label for="exampleCtrl"><b>Agency</b></label>'
   +'         <input type="text" class="form-control" id="exampleCtrl'+i+'" name="others_awards_agency[]" placeholder="(100 char max) Univeristy Name" maxlength="100">'
   +'     </div>'
        
   +'     <div class="col-sm-5 pb-3">'
   +'         <label for="exampleAccount"><b>Upload Award</b></label>'
   +'         <input type="file" class="form-control" min="0" max="100"  step=".01" id="exampleAccount'+i+'" name="others_award_upload[]">'
   +'     </div>'
       
   +' </div>'
    
  +'  <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />'
  +'  </hr>'
  +'  <input type="button" class="btnRemove btn-danger" value="Remove"/></div>'
            
+'</div>');

});

$('body').on('click','.btnRemove',function() {
       $(this).closest('div').remove()
 
  });


    $('#industrial_experience').click(function(){
        
        var newrow = $('#next6').append('<div class="container py-5"><div class="row"><div class="col-md-10 offset-md-1" style="border:3px solid black"><span class="anchor" id="formComplex"></span><div class="form-row mt-4"><div class="col-sm-4 pb-4"><label for="exampleAccount"><b>Summary Of Experience</b></label><input type="text" class="form-control" id="exampleAccount" name="pg_1_exam_passed" placeholder="Enter roles and responsibilites" ></div><div class="col-sm-3 pb-3" style="margin-left:230px"><label for="exampleCtrl"><b>Upload Further Details</b></label><input type="file" class="form-control" id="exampleAccount" name="pg_1_exam_passed" ></div></div></div></div></div>');

    });





function checkAward() {
    $('#empl').toggle(); 
}

function checkTechnology() {
    $('#teach_div').toggle();
}

function checkThesis() {
    $('#thesis_div').toggle();
}

function checkPatentDiv() {
    $('#exp_div').toggle();
}

function checkCoverLetterDiv() {
    $('#ind_div').toggle();
}

function checkResumeDiv() {
    $('#adm_div').toggle();
}


         
</script>
                

                
            </div>
 

                <div class="col-md-10 offset-md-1">
                    <span class="anchor" id="formComplex"></span>
					
                    <div class="form-group">
                        <center>
                            <p>
                            <h1>Declaration:</h1><br>
                            <h2>You can't edit this form later!!</h2><br></p>
                        </center>

                        <label><input type="checkbox" value="" checked required> I hereby declare that the entries made in this application form are correct to the best of my knowledge and belief. If selected for admission, I promise to abide by the rules and regulations of the Institute. The Institute shall have the right to take any action it deems fit, including expulsion, against me at any time after my admission, if it is found that any information furnished by me is incorrect. I note that the decision of the Institute is final in regard to selection for admission and assignment to a particular department and field of study. </label>
                    </div>
					
					
                    <div class="form-group">
                        <center>
                            <p>
                            <h1>Important:</h1><br>
                            
                        </center>

                        <label>  You should receive an email with the title <b>"M.Tech Application Filled Information" </b>in your_inbox from: no-reply@iitp.ac.in after submitting the form.
Please check you Spam, All Mail, folders.
 </label>
                    </div>
					
                    <br>
                    <input type="hidden"  name="mtech_application_category" value="<?php echo $mtech_application_category; ?>">
                    <input type="hidden"  name="mtech_department" value="<?php echo $mtech_department; ?>">
                    
                    <input type="hidden"  name="id_number" value="<?php echo $id_number; ?>">
                       

                   
                    <center><button type="submit" name="regf_user" class="btn btn-primary">Submit</button></center>
                    
                    
                    
	
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