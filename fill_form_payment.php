<?php 
include_once('dbconn.php');
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
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
		// echo $user;
		
		if ($user) { // if user exists
			if($user['filled_status']==1)
		{
            
			exit('Already registered');
           
		}
		else{
            // echo "23";
			$id_number=$user['id_number'];
            $user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";

		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		$id_number=$user['id_number'];
        $filled_info = $user['filled_info'];
        // echo $filled_info;
		}
			}

		// Finally, register user if there are no errors in the form
		else {
            // echo "2333";
		// 	$query = "INSERT INTO `mtp_application_info` (`id_number`,`personal_email`,`mtech_application_category`, `mtech_department`, `mtech_is_your_btech_from_iit`) values (NULL,'$personal_email','$mtech_application_category', '$mtech_department','$mtech_is_your_btech_from_iit')"; 
		// 	//echo $query;
		// 	mysqli_query($conn, $query);
		// 	$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";

		// $result = mysqli_query($conn, $user_check_query);
		// $user = mysqli_fetch_assoc($result);
		// $id_number=$user['id_number'];
        // $filled_info = $user['filled_info'];

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
                <hr style="width: 100%; color: white; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 style="background-color:orange; color:green"><a href="fill_form_payment.php" class="nav-link text-light pl=4">Payment Info</a></h2>
                </li><hr style="width: 100%; color: white; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 style="color:black"><a href="fill_form_education.php" class="nav-link text-light pl=4">Qualification</a></h2>
                </li><hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 style="color:black"><a href="fill_form_gate.php" class="nav-link text-light pl=4">GATE Details</a></h2>
                </li><hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 style="color:black"><a href="fill_form_work.php" class="nav-link text-light pl=4">Work Experience</a></h2>
                </li><hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                <li class="nav-item w-100">
                    <h2 style="color:black"><a href="fill_form_declaration.php" class="nav-link text-light pl=4">Declaration</a></h2>
                </li>
                <li class="nav-item w-100">
                    <h4 style="margin-top:45px"><a href="logout.php" class="nav-link text-red pl=4">LOGOUT</a></h2>
                </li>
            </ul>
        </nav>
</div>

<div style="margin-left:220px">
    <center>
        <h1 class="my-5">Hi, Welcome to M.Tech Registration Form</h1>
    </center>
    <form action="server_payment.php" method="post" onSubmit="alert('Successfully saved')" enctype="multipart/form-data">
        <div class="container py-5">
            <div class="row">

                <div class="col-md-10 offset-md-1">
                    <span class="anchor" id="formComplex"></span>
					
                    <p>
					<hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                
                    <h1>Payment info</h1>

                    Go to Payment and put the Payment Reference No. after successful Payment!!<br>
					<br>
					<p style="color:red;">Save the PDF of the transaction, you need to attach later.!!.</p>

                    Payment Amount<br><br>

                    1. General/EWS/OBC-NCL (Male): Rs. 300<br>
                    2. General/EWS/OBC-NCL (Female): Rs. 150<br>
                    3. SC/ST/PwD (Male): Rs. 150<br>
                    4. SC/ST/PwD (Female): Rs. 150<br>
                    </p>
                    <p>Link for payment: <a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=595859" target="_blank">https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=595859</a></p>
                    <div class="form-row mt-3">
                        <div class="col-sm-4 pb-4">
                            <label for="exampleAccount"><b>Payment Method*</b></label>
                            <select class="form-control" name="payment_method" required>
                                <option value=''>Select</option>
                                <option value="SBI Collect">SBI Collect</option>
                            </select>
                        </div>
                        <div class="col-sm-4 pb-4">
                            <label for="exampleCtrl"><b>Payment Reference Number*</b></label>
                            <input type="text" class="form-control" id="usr" name="payment_reference_number" placeholder="(100 char max) payment_reference_number" maxlength="100" required>
                        </div>
                        <div class="col-sm-4 pb-4">
                            <label for="exampleCtrl"><b>Amount*</b></label>
                            <select class="form-control" name="payment_amount" required>
                                <option value="">Select</option>
                                <option value="150">150</option>
                                <option value="300">300</option>
                            </select>
                        </div>
                        

                    </div>
                    <center><button type="submit" name="regf_user" class="btn btn-primary">Save and Next</button></center>
                    
                    
                    
	
                </div>
    
    </div>

    </div>
    <!--/row-->
    </form>

    </div>
    <!--/col-->
    

</body>

</html>

<?php
              
            
        
?>