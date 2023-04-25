<?php 
error_reporting(0);
include_once('dbconn.php');
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
	$id_number="";
    $mtech_application_category = $_SESSION['mtech_application_category'];
    $mtech_department= $_SESSION['mtech_department'];
	$mtech_ex=explode("-",$mtech_department);
	$mtech_code=trim($mtech_ex[1]);
    $personal_email= $_SESSION['username'];
    $mtech_is_your_btech_from_iit = $_SESSION['mtech_is_your_btech_from_iit'];

$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'   LIMIT 1";

		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		// echo "hi". $mtech_application_category . $mtech_department. "</br>";	
		
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

<div style="background-color:black; width:320px; position:fixed; height:110%; margin-right:200px; margin-top:-80px">
        <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
            <ul class="navbar-nav d-flex flex-column mt-5 w-80">
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
                    <h2 style="background-color:orange"><a href="fill_form_referee.php" class="nav-link text-light pl=4">Referee Details</a></h2>
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

<div style="margin-left:290px">
    <center>
        <h1 class="my-5">Hi, Welcome to Teaching Application Form</h1>
    </center>
    <form action="server_referee.php" method="post" onSubmit="alert('Successfully saved')" enctype="multipart/form-data">


    <div class="container">
        
        <br/>
        <form class="form-horizontal" action="#" method="post">
        <h3>Referee</h3>
        <div class="row">
            
            <div class="row" style="width:80%">
                <div class="col-sm-2">
                    <label for="Age">Sl No:</label>
                    <input type="text" class="form-control sl" name="slno[]" value="1" readonly="">
                </div>

                <div class="col-sm-5 pb-4">
                    <label for="exampleAccount"><b>Referee's Name</b></label>
                    <input type="text" class="form-control" id="exampleCtrl" name="referee_name[]" placeholder="" maxlength="100">
                </div>

                <div class="col-sm-5 pb-4">
                        <label for="exampleCtrl"><b>Designation</b></label>
                        <input type="text" class="form-control" id="exampleCtrl" name="referee_designation[]" placeholder="" maxlength="100">
                </div>
            </div>
            <div class="row" style="margin-left:80px; width:80%">            
                <div class="col-sm-6 pb-4">
                        <label for="exampleCtrl"><b>Organisation</b></label>
                        <input type="text" class="form-control" id="exampleCtrl" name="referee_organisation[]" placeholder="" maxlength="100">
                </div>
                <div class="col-sm-6 pb-4">
                        <label for="exampleCtrl"><b>Address</b></label>
                        <input type="text" class="form-control" id="exampleCtrl" name="referee_address[]" placeholder="" maxlength="100">
                </div>
            </div>
            <div class="row" style="margin-left:80px; width:80%">
                <div class="col-sm-6 pb-4">
                        <label for="exampleCtrl"><b>Country</b></label>
                        <input type="text" class="form-control" id="work_1_from_date" name="referee_country[]">
                </div>
                <div class="col-sm-6 pb-4">
                        <label for="exampleCtrl"><b>State</b></label>
                        <input type="text" class="form-control" id="work_1_to_date" name="referee_state[]">
                </div>
            </div>
            <div class="row" style="margin-left:80px; width:80%">
                <div class="col-sm-6 pb-4">
                        <label for="exampleCtrl"><b>Pincode</b></label>
                        <input type="text" class="form-control" id="work_1_from_date" name="referee_pincode[]">
                </div>
                <div class="col-sm-6 pb-4">
                        <label for="exampleCtrl"><b>City</b></label>
                        <input type="text" class="form-control" id="work_1_to_date" name="referee_city[]">
                </div>
            </div>
            <div class="row" style="margin-left:80px; width:80%">
                <div class="col-sm-6 pb-4">
                        <label for="exampleCtrl"><b>Email Id</b></label>
                        <input type="text" class="form-control" id="referee_email" name="referee_email[]">
                </div>
                <div class="col-sm-6 pb-4">
                        <label for="exampleCtrl"><b>Contact Number</b></label>
                        <input type="text" class="form-control" id="referee_contact" name="referee_contact[]">
                </div>
            </div>
        </div>
                   <br/>
                   <br/> 
        <div id="next"></div>
        <br/>

        <button type="button" name="addrow" id="addrow" class="btn btn-success pull-right">Add New Row</button>
    
        <button type="submit" name="regf_user" class="btn btn-info pull-left">Submit</button>
        <br/><br/>
        </form>
    </div>

<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
<script>
$('#addrow').click(function(){
        var length = $('.sl').length;
        var i   = parseInt(length)+parseInt(1);
        // alert(i);
        var str = '<div class="row">'
            
            + '<div class="row" style="width:80%">'
            +'    <div class="col-sm-2">'
            +'        <label for="Age">Sl No:</label>'
            +'        <input type="text" class="form-control sl" name="slno[]" id="slno" value="'+i+'" readonly="">'
            +'    </div>'

            +'    <div class="col-sm-5 pb-4">'
            +'        <label for="exampleAccount"><b>Referees Name</b></label>'
            +'        <input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_organization_name[]" placeholder="(100 char max) Organization Name" maxlength="100">'
            +'    </div>'

            +'    <div class="col-sm-5 pb-4">'
            +'            <label for="exampleCtrl"><b>Designation</b></label>'
            +'            <input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_organization_name[]" placeholder="(100 char max) Organization Name" maxlength="100">'
            +'    </div>'
            +'</div>'
            +'<div class="row" style="margin-left:80px; width:80%">'            
             +'   <div class="col-sm-6 pb-4">'
            +'            <label for="exampleCtrl"><b>Organisation</b></label>'
             +'           <input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_position[]" placeholder="" maxlength="100">'
             +'   </div>'
             +'   <div class="col-sm-6 pb-4">'
             +'           <label for="exampleCtrl"><b>Address</b></label>'
             +'           <input type="text" class="form-control" id="exampleCtrl'+i+'" name="work_1_position[]" placeholder="" maxlength="100">'
             +'   </div>'
            +'</div>'
            +'<div class="row" style="margin-left:80px; width:80%">'
             +'   <div class="col-sm-6 pb-4">'
             +'           <label for="exampleCtrl"><b>Country</b></label>'
             +'           <input type="text" class="form-control" id="work_1_from_date'+i+'" name="work_1_from_date[]">'
             +'   </div>'
             +'   <div class="col-sm-6 pb-4">'
             +'           <label for="exampleCtrl"><b>State</b></label>'
             +'           <input type="text" class="form-control" id="work_1_to_date'+i+'" name="work_1_to_date[]" onfocusout="daysDifference1()">'
             +'   </div>'
            +'</div>'
            +'<div class="row" style="margin-left:80px; width:80%">'
            +'    <div class="col-sm-6 pb-4">'
            +'            <label for="exampleCtrl"><b>Pincode</b></label>'
            +'            <input type="text" class="form-control" id="work_1_from_date'+i+'" name="work_1_from_date[]">'
            +'    </div>'
            +'    <div class="col-sm-6 pb-4">'
            +'            <label for="exampleCtrl"><b>City</b></label>'
            +'            <input type="text" class="form-control" id="work_1_to_date'+i+'" name="work_1_to_date[]" onfocusout="daysDifference1()">'
            +'    </div>'
            +'</div>'
            +'<div class="row" style="margin-left:80px; width:80%">'
            +'    <div class="col-sm-6 pb-4">'
            +'            <label for="exampleCtrl"><b>Email Id</b></label>'
            +'            <input type="text" class="form-control" id="work_1_from_date'+i+'" name="work_1_from_date[]">'
            +'    </div>'
            +'    <div class="col-sm-6 pb-4">'
            +'            <label for="exampleCtrl"><b>Contact Number</b></label>'
            +'            <input type="text" class="form-control" id="work_1_to_date'+i+'" name="work_1_to_date[]" onfocusout="daysDifference1()">'
            +'    </div>'
            +'</div>'
            +'<input type="button" class="btnRemove btn-danger" value="Remove"/>'
        +'</div>';
        var newrow = $('#next').append(str);
        // var newrow = $('#next').append('<div class="row"><h1>Head</h1></div><input type="button" class="btnRemove btn-danger" value="Remove"/>');

        });
     
    // Removing event here
  $('body').on('click','.btnRemove',function() {
       $(this).closest('div').remove()
 
  });
         
</script>

</div>



       
                
                    
                    
                    
	
     

  
    </div>
    </div>
    </div>
    </div>
    <!--/container-->

</body>

</html>

<?php
              
            

?>