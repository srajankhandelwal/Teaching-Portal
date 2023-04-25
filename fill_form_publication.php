<?php 
include_once('dbconn.php');
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || !isset($_SESSION["username"])){
    header("location: index.php");
    exit;
}
    // echo $_SESSION['mtech_application_category'];
	$id_number="";
    
    $mtech_application_category = $_SESSION['mtech_application_category'];
    $mtech_department= $_SESSION['mtech_department'];
	// $mtech_ex=explode("-",$mtech_department);
	// $mtech_code=trim($mtech_ex[1]);
    // $personal_email= mysqli_real_escape_string($conn, $_POST['personal_email']);
    $personal_email=$_SESSION['username'];
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
			$query = "INSERT INTO `mtp_application_info` (`id_number`,`personal_email`,`mtech_application_category`, `mtech_department`, `mtech_is_your_btech_from_iit`) values (NULL,'$personal_email','$mtech_application_category', '$mtech_department','$mtech_is_your_btech_from_iit')"; 
			//echo $query;
			mysqli_query($conn, $query);
			$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";

		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		$id_number=$user['id_number'];
        $filled_info = $user['filled_info'];
        $filled_academic = $user['filled_academic'];
        $filled_experience = $user['filled_experience'];
        $filled_publication = $user['filled_publication'];
        $filled_referee = $user['filled_referee'];
        echo $id_number;
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
                           <script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
<script>
    $('#addrow').click(function(){
        var length = $('.sl').length;
        var i   = parseInt(length)+parseInt(1);
        alert(i);
        var newrow = $('#next').append('<div class="row"><div class="row"><div class="col-sm-1"><label for="Age">Sl No:</label><input type="text" class="form-control sl" name="slno[]" value="'+i+'" readonly=""></div><div class="col-sm-3 pb-2"><label for="exampleAccount"><b>Work Experience Type</b></label><select class="form-control" name="work_1_experience_type[]"><option value="">Select</option><option value="Teaching">Teaching</option><option value="Research">Research</option><option value="Industry">Industry</option><option value="Others">Others</option></select></div><div class="col-sm-4 pb-3"><label for="exampleCtrl"><b>Organization Name</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_organization_name[]" placeholder="(100 char max) Organization Name" maxlength="100"></div><div class="col-sm-4 pb-3"><label for="exampleCtrl"><b>Position</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_position[]" placeholder="(100 char max) Position" maxlength="100"></div></div><div class="row" style="margin-left:50px"><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>From Date</b></label><input type="date" class="form-control" id="work_1_from_date'+i+'" name="work_1_from_date[]"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>To Date</b></label><input type="date" class="form-control" id="work_1_to_date'+i+'" name="work_1_to_date[]" onfocusout="daysDifference1()"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>Nature of Work</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_nature_of_work[]" placeholder="(100 char max) Nature of Work" maxlength="100"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>Current Job</b></label><select class="form-control" name="work_1_current_job[]"><option value="">Select</option><option value="Yes">Yes</option><option value="No">No</option></select></div></div><input type="button" class="btnRemove btn-danger" value="Remove"/></div>');
        // var newrow = $('#next').append('<div class="row"><h1>Head</h1></div><input type="button" class="btnRemove btn-danger" value="Remove"/>');

        });
     
    // Removing event here
  $('body').on('click','.btnRemove',function() {
       $(this).closest('div').remove()
 
  });
</script>

</head>

<body>
<!-- <table align="left">
<tr>
<td><table align="left" border = 4><tr><td><a href="welcome.php"> HOME </a></td></tr></table>
</table>
<table align="right">
<tr>
<td><table align="right" border = 8><tr><td><a href="logout.php">LOGOUT</a></td></tr></table>
</table> -->

<div style="background-color:black; width:320px; position:fixed; height:110%; margin-right:200px; margin-top:-50px">
        <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
            <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                <li class="nav-item w-100">
                    <h2 <?php if($filled_info === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_info.php" class="nav-link text-light pl=4">Personal Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 <?php if($filled_academic === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_payment.php" class="nav-link text-light pl=4">Academic Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 <?php if($filled_experience === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_experience.php" class="nav-link text-light pl=4">Experience Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 style="background-color:orange"><a href="fill_form_publication.php" class="nav-link text-light pl=4">Publication Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 <?php if($filled_referee === '1'){ ?> style="background-color:green" <?php } else { ?> style="background-color:black" <?php } ?>><a href="fill_form_work.php" class="nav-link text-light pl=4">Referee Details</a></h2>
                </li>
                <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 style="background-color:black" ><a href="fill_form_declaration.php" class="nav-link text-light pl=4">Others and Submit</a></h2>
                </li>
                <li class="nav-item w-100">
                    <h4 style="margin-top:65px; color:white"><a href="logout.php" class="nav-link text-red pl=4">LOGOUT</a></h2>
                </li>
            </ul>
        </nav>
</div>

<div style="margin-left:220px">
    <center>
        <h1 class="my-5">Hi, Welcome to Teaching Application Form</h1>
    </center>
    <form action="server_publication.php" method="post" onSubmit="alert('Successfully saved')" enctype="multipart/form-data">
        <div class="container py-5">
            <div class="row">

                <div class="col-md-10 offset-md-1">
                    <span class="anchor" id="formComplex"></span>
					
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Publication Details</Details></h3>
                        </div>
                        <div class="card-body" style="margin-right:-140px; background-color:#D3D3D3">
                            <form class="form" role="form" autocomplete="off">
                                
                                <p>Note: Please provide information on additional Publications and Research by clicking on the check boxes before the sections relevant. You can add multiple information by using the + button at bottom of the section.</p>
                                <br/><p style="color:red">Note: Please write your publications details in proper formate. For e.g. author name, journal name, year, issue, volume, page number.</p>
                        </br/>
                                <h3>Publications</h3>
                              
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
                            <td>Journal Publication  </td>
                            <td><input  type="number" maxlength="3" value="0" data-validation="number" data-validation-optional="true" id="totalPublishedPapper_indian" name="totalPublishedPaper_indian" class="empField2 form-control">
                            </td>
                            <td><input type="number" maxlength="3" value="0" data-validation="number" data-validation-optional="true" id="totalPublishedPapper_international" name="totalPublishedPaper_international" class="empField2 form-control">
                            </td>
                            
                        </tr>
                        <tr>
                            <td>Papers in Conference Proceedings</td>
                            <td><input type="text" maxlength="3" value="0" data-validation="number" onblur="addTotal2(1);" data-validation-optional="true" id="totalConferencePapper_indian" name="totalConferencePaper_indian" class="empField2 form-control">
                            </td>
                            <td><input type="text" maxlength="3" value="0" data-validation="number" onblur="addTotal2(1);" data-validation-optional="true" id="totalConferencePapper_international" name="totalConferencePaper_international" class="empField2 form-control">
                            </td>
                            
                        </tr>
                        <tr>
                            <td>Papers Presented In Conference But Not Published</td>
                            <td><input type="text" maxlength="3" value="0" data-validation="number" onblur="addTotal2(2);" data-validation-optional="true" id="totalpresentedPapper_indian" name="totalpresentedPaper_indian" class="empField2 form-control">
                            </td>
                            <td><input type="text" maxlength="3" value="0" data-validation="number" onblur="addTotal2(2);" data-validation-optional="true" id="totalpresentedPapper_international" name="totalpresentedPaper_international" class="empField2 form-control">
                            </td>
                            
                        </tr>
                    </tbody>
                </table>

                <br/>

                
                    
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Book Chapter</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="publication_book_chapter" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Upload Publication Details / Paper Listing</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file" name="publication_paper_listing" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Total Citations</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="publication_citations" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">H-Index</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text"  name="publication_h_index" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Total Citations Source</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text"  name="publication_citations_source" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">H-Index Source</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text"  name="publication_h_index_source" >
                            </div>
                        </div>
                        <br/>

    
                        
                        <h3>Best 5 Papers (in your opinion)</h3>
                        <table class="table table-hover" border="1" style="border:3px solid black">
                <thead class="bg-teal"> <tr>
                        <th>Author<span style="font-size:19px;font-weight:bold;" class="text-danger"> </span></th>
                        <th>Title <span style="font-size:19px;font-weight:bold;" class="text-danger"> </span></th>
                        <th>Journal / Conference<span style="font-size:19px;font-weight:bold;" class="text-danger"> </span></th>
                        <th>Year<span style="font-size:19px;font-weight:bold;" class="text-danger"> </span></th>
                        <th>Page No.<span style="font-size:19px;font-weight:bold;" class="text-danger"> </span></th>
                        <th>No. of citations<span style="font-size:19px;font-weight:bold;" class="text-danger"> </span></th>
                        <th>Upload Paper<span style="font-size:19px;font-weight:bold;" class="text-danger"> </span></th>
                    </tr>
                </thead>
                <tbody> 
                    
                

                    <tr>
                        <td> <input type="text" maxlength="255" id="author0" data-validation="length" data-validation-length="max255" name="author0" value="" placeholder="Enter Author" class="form-control">   </td> 
                        <td> <input type="text" maxlength="255" id="title0" data-validation="length" data-validation-length="max255" name="title0" value="" placeholder="Enter Title " class="form-control"></td> 
                        <td> <input type="text" maxlength="255" data-validation="length" data-validation-length="max255" name="journal_Conference0" id="journal_Conference0" value="" placeholder="Enter Journal Conference" class="form-control"></td> 
                        <td><div class="input-group date " id="paper_year_div0">
                                <input type="text" id="paper_year0" placeholder="Enter Year." name="paper_year0" value="" class="table-table1 form-control">
                                <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
                            </div></td> 
        <!--                        <td> <input type="text" id="paper_year0" name="paper_year0"  value="" placeholder="Enter Paper  Title "  class="form-control has-help-txt"></td> -->
                        <td> <input type="text" maxlength="10" data-validation="length number" data-validation-length="max100" data-validation-optional="true" id="page_no0" name="page_no0" value="" placeholder="Page No." class="form-control"></td> 
                        <td> <input type="text" maxlength="10" id="citations_no0" data-validation="length number" data-validation-optional="true" data-validation-length="max10" name="citations_no0" value="" class="form-control"></td> 
                        <td> 
                            
                            <div class="input-group">
                                
                                    <input type="text" class="form-control" name="upload_paper0" readonly="" id="upload_paper10">
                                
                                
                                <span class="input-group-btn">
                                    <span class="btn btn-primary btn-file">
                                        Browse…  
                                        <input type="file" id="upload_paper0" name="upload_paper0" accept="application/pdf" onclick="showRemoveButton3(0);">
                                        <input type="hidden" id="upload_paper10" name="upload_paper10" value="" class="table-table1 form-control">
                                    </span>
                                </span>
                            </div>
                         
                    <div id="upload_paper0_file" style="display: none">  <a href="javascript:deleteDegreeFileBestBook(0);" class="btn btn-danger btn-xs"><i class="fa fa-times"></i>Remove</a></div>
                    <div id="spanupload_paper0">
                    </div>
                    <input type="hidden" id="msgupload_paper0" value="1"> 
                    </td> 
                    </tr>
                    
                

                    <tr>
                        <td> <input type="text" maxlength="255" id="author1" data-validation="length" data-validation-length="max255" name="author1" value="" placeholder="Enter Author" class="form-control">   </td> 
                        <td> <input type="text" maxlength="255" id="title1" data-validation="length" data-validation-length="max255" name="title1" value="" placeholder="Enter Title " class="form-control"></td> 
                        <td> <input type="text" maxlength="255" data-validation="length" data-validation-length="max255" name="journal_Conference1" id="journal_Conference1" value="" placeholder="Enter Journal Conference" class="form-control"></td> 
                        <td><div class="input-group date " id="paper_year_div1">
                                <input type="text" id="paper_year1" placeholder="Enter Year." name="paper_year1" value="" class="table-table1 form-control">
                                <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
                            </div></td> 
        <!--                        <td> <input type="text" id="paper_year1" name="paper_year1"  value="" placeholder="Enter Paper  Title "  class="form-control has-help-txt"></td> -->
                        <td> <input type="text" maxlength="10" data-validation="length number" data-validation-length="max100" data-validation-optional="true" id="page_no1" name="page_no1" value="" placeholder="Page No." class="form-control"></td> 
                        <td> <input type="text" maxlength="10" id="citations_no1" data-validation="length number" data-validation-optional="true" data-validation-length="max10" name="citations_no1" value="" class="form-control"></td> 
                        <td> 
                            
                            <div class="input-group">
                                
                                    <input type="text" class="form-control" name="upload_paper1" readonly="" id="upload_paper11">
                                
                                
                                <span class="input-group-btn">
                                    <span class="btn btn-primary btn-file">
                                        Browse…  
                                        <input type="file" id="upload_paper1" name="upload_paper1" accept="application/pdf" onclick="showRemoveButton3(1);">
                                        <input type="hidden" id="upload_paper11" name="upload_paper11" value="" class="table-table1 form-control">
                                    </span>
                                </span>
                            </div>
                         
                    <div id="upload_paper1_file" style="display: none">  <a href="javascript:deleteDegreeFileBestBook(1);" class="btn btn-danger btn-xs"><i class="fa fa-times"></i>Remove</a></div>
                    <div id="spanupload_paper1">
                    </div>
                    <input type="hidden" id="msgupload_paper1" value="1"> 
                    </td> 
                    </tr>
                    
                

                    <tr>
                        <td> <input type="text" maxlength="255" id="author2" data-validation="length" data-validation-length="max255" name="author2" value="" placeholder="Enter Author" class="form-control">   </td> 
                        <td> <input type="text" maxlength="255" id="title2" data-validation="length" data-validation-length="max255" name="title2" value="" placeholder="Enter Title " class="form-control"></td> 
                        <td> <input type="text" maxlength="255" data-validation="length" data-validation-length="max255" name="journal_Conference2" id="journal_Conference2" value="" placeholder="Enter Journal Conference" class="form-control"></td> 
                        <td><div class="input-group date " id="paper_year_div2">
                                <input type="text" id="paper_year2" placeholder="Enter Year." name="paper_year2" value="" class="table-table1 form-control">
                                <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
                            </div></td> 
        <!--                        <td> <input type="text" id="paper_year2" name="paper_year2"  value="" placeholder="Enter Paper  Title "  class="form-control has-help-txt"></td> -->
                        <td> <input type="text" maxlength="10" data-validation="length number" data-validation-length="max100" data-validation-optional="true" id="page_no2" name="page_no2" value="" placeholder="Page No." class="form-control"></td> 
                        <td> <input type="text" maxlength="10" id="citations_no2" data-validation="length number" data-validation-optional="true" data-validation-length="max10" name="citations_no2" value="" class="form-control"></td> 
                        <td> 
                            
                            <div class="input-group">
                                
                                    <input type="text" class="form-control" name="upload_paper2" readonly="" id="upload_paper12">
                                
                                
                                <span class="input-group-btn">
                                    <span class="btn btn-primary btn-file">
                                        Browse…  
                                        <input type="file" id="upload_paper2" name="upload_paper2" accept="application/pdf" onclick="showRemoveButton3(2);">
                                        <input type="hidden" id="upload_paper12" name="upload_paper12" value="" class="table-table1 form-control">
                                    </span>
                                </span>
                            </div>
                         
                    <div id="upload_paper2_file" style="display: none">  <a href="javascript:deleteDegreeFileBestBook(2);" class="btn btn-danger btn-xs"><i class="fa fa-times"></i>Remove</a></div>
                    <div id="spanupload_paper2">
                    </div>
                    <input type="hidden" id="msgupload_paper2" value="1"> 
                    </td> 
                    </tr>
                    
                

                    <tr>
                        <td> <input type="text" maxlength="255" id="author3" data-validation="length" data-validation-length="max255" name="author3" value="" placeholder="Enter Author" class="form-control">   </td> 
                        <td> <input type="text" maxlength="255" id="title3" data-validation="length" data-validation-length="max255" name="title3" value="" placeholder="Enter Title " class="form-control"></td> 
                        <td> <input type="text" maxlength="255" data-validation="length" data-validation-length="max255" name="journal_Conference3" id="journal_Conference3" value="" placeholder="Enter Journal Conference" class="form-control"></td> 
                        <td><div class="input-group date " id="paper_year_div3">
                                <input type="text" id="paper_year3" placeholder="Enter Year." name="paper_year3" value="" class="table-table1 form-control">
                                <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
                            </div></td> 
        <!--                        <td> <input type="text" id="paper_year3" name="paper_year3"  value="" placeholder="Enter Paper  Title "  class="form-control has-help-txt"></td> -->
                        <td> <input type="text" maxlength="10" data-validation="length number" data-validation-length="max100" data-validation-optional="true" id="page_no3" name="page_no3" value="" placeholder="Page No." class="form-control"></td> 
                        <td> <input type="text" maxlength="10" id="citations_no3" data-validation="length number" data-validation-optional="true" data-validation-length="max10" name="citations_no3" value="" class="form-control"></td> 
                        <td> 
                            
                            <div class="input-group">
                                
                                    <input type="text" class="form-control" name="upload_paper3" readonly="" id="upload_paper13">
                                
                                
                                <span class="input-group-btn">
                                    <span class="btn btn-primary btn-file">
                                        Browse…  
                                        <input type="file" id="upload_paper3" name="upload_paper3" accept="application/pdf" onclick="showRemoveButton3(3);">
                                        <input type="hidden" id="upload_paper13" name="upload_paper13" value="" class="table-table1 form-control">
                                    </span>
                                </span>
                            </div>
                         
                    <div id="upload_paper3_file" style="display: none">  <a href="javascript:deleteDegreeFileBestBook(3);" class="btn btn-danger btn-xs"><i class="fa fa-times"></i>Remove</a></div>
                    <div id="spanupload_paper3">
                    </div>
                    <input type="hidden" id="msgupload_paper3" value="1"> 
                    </td> 
                    </tr>
                    
                

                    <tr>
                        <td> <input type="text" maxlength="255" id="author4" data-validation="length" data-validation-length="max255" name="author4" value="" placeholder="Enter Author" class="form-control">   </td> 
                        <td> <input type="text" maxlength="255" id="title4" data-validation="length" data-validation-length="max255" name="title4" value="" placeholder="Enter Title " class="form-control"></td> 
                        <td> <input type="text" maxlength="255" data-validation="length" data-validation-length="max255" name="journal_Conference4" id="journal_Conference4" value="" placeholder="Enter Journal Conference" class="form-control"></td> 
                        <td><div class="input-group date " id="paper_year_div4">
                                <input type="text" id="paper_year4" placeholder="Enter Year." name="paper_year4" value="" class="table-table1 form-control">
                                <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
                            </div></td> 
        <!--                        <td> <input type="text" id="paper_year4" name="paper_year4"  value="" placeholder="Enter Paper  Title "  class="form-control has-help-txt"></td> -->
                        <td> <input type="text" maxlength="10" data-validation="length number" data-validation-length="max100" data-validation-optional="true" id="page_no4" name="page_no4" value="" placeholder="Page No." class="form-control"></td> 
                        <td> <input type="text" maxlength="10" id="citations_no4" data-validation="length number" data-validation-optional="true" data-validation-length="max10" name="citations_no4" value="" class="form-control"></td> 
                        <td> 
                            
                            <div class="input-group">
                                
                                    <input type="text" class="form-control" name="upload_paper4" readonly="" id="upload_paper14">
                                
                                
                                <span class="input-group-btn">
                                    <span class="btn btn-primary btn-file">
                                        Browse…  
                                        <input type="file" id="upload_paper4" name="upload_paper4" accept="application/pdf" onclick="showRemoveButton3(4);">
                                        <input type="hidden" id="upload_paper14" name="upload_paper14" value="" class="table-table1 form-control">
                                    </span>
                                </span>
                            </div>
                         
                    <div id="upload_paper4_file" style="display: none">  <a href="javascript:deleteDegreeFileBestBook(4);" class="btn btn-danger btn-xs"><i class="fa fa-times"></i>Remove</a></div>
                    <div id="spanupload_paper4">
                    </div>
                    <input type="hidden" id="msgupload_paper4" value="1"> 
                    </td> 
                    </tr>
                    
                
<!--                 <input type="text" value='5'/>-->
                
                </tbody>
                <input type="hidden" id="fpcount" class="text" name="fpcount" value="5">
            </table>
  <br/>
  <br/>
  <h4>Books</h4>
  <div class="container">
        
        <br/>
        <form class="form-horizontal" action="#" method="post">
        <div class="row">    
            <div class="row">
                <div class="col-sm-1">
                    <label for="Age">Sl No:</label>
                    <input type="text" class="form-control sl" name="slno[]" id="slno" value="1" readonly="">
                </div>

                <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Designation</b></label>
                            <input type="text" class="form-control" id="exampleAccount" name="books_designation[]" >
                </div>

                <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Organisation</b></label>
                            <input type="text" class="form-control" id="exampleAccount" name="books_organisation[]" >
                            
                </div>
                        
                <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Government of India?</b></label>
                            <select class="form-control" name="books_govt_india[]" id="exampleAccount">
                                <option value="">Select</option>
                                <option value="Teaching">No</option>
                                <option value="Research">Yes</option>
                            </select>

                </div>

         
            </div><br/>

            <div class="row" style="margin-left:50px; width:80%">
                <div class="col-sm-4 pb-4">
                            <label for="exampleCtrl"><b>Department/ Division</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="books_department[]" placeholder="" maxlength="100">
                </div>
                <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>From</b></label>
                            <input type="date" class="form-control" min="0" max="100"  step=".01" id="exampleAccount" name="books_from[]">
                </div>

                <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>To</b></label>
                            <input type="date" class="form-control" min="0" max="100"  step=".01" id="exampleAccount" name="books_to[]" >
                </div>

            </div>
            <div class="form-row mt-4" style="margin-left:50px; width:80%">
                
                <div class="col-sm-3 pb-3">
                    <label for="exampleCtrl"><b>Roles and Responsibilities</b></label>
                    <input type="text" class="form-control" id="exampleCtrl" name="books_roles[]"  maxlength="200">
                </div>
                <div class="col-sm-3 pb-3">
                    <label for="exampleCtrl"><b>Total Emoluments(Annual)</b></label>
                    <input type="text" class="form-control" id="exampleCtrl" name="books_emoluments[]" placeholder="Enter the total pay" maxlength="200">
                </div>

                
            </div>
        </div>
                   <br/>
                   <br/> 
        <div id="next"></div>
        <br/>

        <button type="button" name="addrow" id="addrow" class="btn btn-success pull-right">Add New Row</button>

        <br/><br/>
        </form>
    </div>
            <!-- <div class="row"> -->
                
                
        
        

    
                        <!-- </div> -->
                            </form>
                            <script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
<script>
    $('#addrow').click(function(){
        var length = $('.sl').length;
        var i   = parseInt(length)+parseInt(1);
        alert(i);
        var str = '<div class="row">  '  
          +'  <div class="row">'
           +     '<div class="col-sm-1">'
           +         '<label for="Age">Sl No:</label>'
           +         '<input type="text" class="form-control sl" name="slno[]" value="'+i+'" readonly="">'
        +    '</div>'

         +       '<div class="col-sm-3 pb-3">'
          +                  '<label for="exampleAccount"><b>Designation</b></label>'
          +                  '<input type="text" class="form-control" id="exampleAccount'+i+'" name="books_designation[]" >'
          +     ' </div>'

          +      '<div class="col-sm-3 pb-3">'
          +                  '<label for="exampleCtrl"><b>Organisation</b></label>'
          +                  '<input type="text" class="form-control" id="exampleAccount'+i+'" name="books_organisation[]" >'
                            
           +     '</div>'
                        
           +     '<div class="col-sm-3 pb-3">'
           +                ' <label for="exampleCtrl"><b>Government of India?</b></label>'
            +                '<select class="form-control" name="books_govt_india[]" id="exampleAccount'+i+'">'
            +                    '<option value="">Select</option>'
            +                    '<option value="Teaching">No</option>'
            +                    '<option value="Research">Yes</option>'
            +                '</select>'

            +    '</div>'

         
           + '</div><br/>'

          +  '<div class="row" style="margin-left:50px; width:80%">'
           +   '  <div class="col-sm-4 pb-4">'
        +               ' <label for="exampleCtrl"><b>Department/ Division</b></label>'
          +                  '<input type="text" class="form-control" id="exampleCtrl'+i+'" name="books_department[]" placeholder="(100 char max) Univeristy Name" maxlength="100">'
          +      '</div>'
          +      '<div class="col-sm-3 pb-3">'
          +                  '<label for="exampleAccount"><b>From</b></label>'
           +                 '<input type="date" class="form-control" min="0" max="100"  step=".01" id="exampleAccount'+i+'" name="books_from[]">'
           +    ' </div>'

           +     '<div class="col-sm-3 pb-3">'
            +                '<label for="exampleAccount"><b>To</b></label>'
            +               ' <input type="date" class="form-control" min="0" max="100"  step=".01" id="exampleAccount'+i+'" name="books_to[]" >'
            +    '</div>'

           + '</div>'
           + '<div class="form-row mt-4" style="margin-left:50px; width:80%">'
                
            +    '<div class="col-sm-3 pb-3">'
            +        '<label for="exampleCtrl"><b>Roled and Responsibilities</b></label>'
            +        '<input type="text" class="form-control" id="exampleCtrl'+i+'" name="books_roles[]"  maxlength="200">'
             +  ' </div>'
             +  ' <div class="col-sm-3 pb-3">'
             +      ' <label for="exampleCtrl"><b>Total Emoluments(Annual)</b></label>'
             +    '   <input type="text" class="form-control" id="exampleCtrl'+i+'" name="books_emoluments" placeholder="Enter the total pay" maxlength="200">'
             + ' </div>'

                
           +' </div>'
           +'<input type="button" class="btnRemove btn-danger" value="Remove"/>'
       +' </div>';

        // var newrow = $('#next').append('<div class="row"><div class="row"><div class="col-sm-1"><label for="Age">Sl No:</label><input type="text" class="form-control sl" name="slno[]" value="'+i+'" readonly=""></div><div class="col-sm-3 pb-2"><label for="exampleAccount"><b>Work Experience Type</b></label><select class="form-control" name="work_1_experience_type[]"><option value="">Select</option><option value="Teaching">Teaching</option><option value="Research">Research</option><option value="Industry">Industry</option><option value="Others">Others</option></select></div><div class="col-sm-4 pb-3"><label for="exampleCtrl"><b>Organization Name</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_organization_name[]" placeholder="(100 char max) Organization Name" maxlength="100"></div><div class="col-sm-4 pb-3"><label for="exampleCtrl"><b>Position</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_position[]" placeholder="(100 char max) Position" maxlength="100"></div></div><div class="row" style="margin-left:50px"><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>From Date</b></label><input type="date" class="form-control" id="work_1_from_date'+i+'" name="work_1_from_date[]"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>To Date</b></label><input type="date" class="form-control" id="work_1_to_date'+i+'" name="work_1_to_date[]" onfocusout="daysDifference1()"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>Nature of Work</b></label><input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_nature_of_work[]" placeholder="(100 char max) Nature of Work" maxlength="100"></div><div class="col-sm-3 pb-3"><label for="exampleCtrl"><b>Current Job</b></label><select class="form-control" name="work_1_current_job[]"><option value="">Select</option><option value="Yes">Yes</option><option value="No">No</option></select></div></div><input type="button" class="btnRemove btn-danger" value="Remove"/></div>');
        var newrow = $('#next').append(str);

        });
     
    // Removing event here
  $('body').on('click','.btnRemove',function() {
       $(this).closest('div').remove()
 
  });
</script>
                        </div>
                    </div>

                   <br/> <br/>
                    <center><button type="submit" name="regf_user" class="btn btn-primary">Save and Next</button></center>
                    
                    
                    
	
                </div>

                
            </div>
        </div>        
    </form>
</div>



</body>

</html>

<?php
              
            
       

        
?>

<html><body>
    
</body></html>
<?php


        

        ?>