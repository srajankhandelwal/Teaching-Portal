<?php
 include_once ('dbconn.php');
 session_start();
  
if (isset($_POST['regf_user'])) {
$personal_title	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['personal_title']))));
$personal_first_name	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['personal_first_name']))));
$personal_middle_name	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['personal_middle_name']))));
$personal_last_name	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['personal_last_name']))));
$personal_gender = mysqli_real_escape_string($conn, $_POST['personal_gender']);
$personal_fathers_name	 = ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['personal_fathers_name']))));
$personal_mothers_name	 = ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['personal_mothers_name']))));
$personal_date_of_birth = mysqli_real_escape_string($conn, $_POST['personal_date_of_birth']);
$personal_birth_category	 = mysqli_real_escape_string($conn, $_POST['personal_birth_category']);
$personal_address	 = (mysqli_real_escape_string($conn, $_POST['personal_address']));
$personal_state	 = mysqli_real_escape_string($conn, $_POST['personal_state']);
$personal_nationality	 = mysqli_real_escape_string($conn, $_POST['personal_nationality']);
$personal_pincode	 = mysqli_real_escape_string($conn, $_POST['personal_pincode']);
$personal_contact	 = mysqli_real_escape_string($conn, $_POST['personal_contact']);
$personal_email	 = strtolower(trim(mysqli_real_escape_string($conn, $_POST['personal_email'])));
$personal_alternative_email	 = strtolower(trim(mysqli_real_escape_string($conn, $_POST['personal_alternative_email'])));
$personal_marital_status = mysqli_real_escape_string($conn, $_POST['personal_marital_status']);
$personal_disable_status = mysqli_real_escape_string($conn, $_POST['personal_disable_status']);

$mtech_application_category	 = $_SESSION['mtech_application_category'];
$mtech_department	 = $_SESSION['mtech_department'];
$filled_info = 1;

$id_number	 = mysqli_real_escape_string($conn, $_POST['id_number']);





$dir1="./Mtech-2022/".$mtech_department."/".$mtech_application_category."/".str_replace(' ', '', $personal_full_name)."_".$id_number."/"; 

if (!file_exists($dir1)) {
    mkdir($dir1, 0777, true);
} 
	
//if(!mkdir($dir1,0777,true))
//{
//echo ('');
//}

// $idproof1 = $dir1.$id_number."_idproof.pdf";    
// $id = move_uploaded_file($_FILES['idproof']['tmp_name'], $idproof1);
// $passport1 = $dir1.$id_number."_photo.jpg";     
// $pass = move_uploaded_file($_FILES['passport']['tmp_name'], $passport1);
// $gate1 = $dir1.$id_number."_gate.pdf";    
// $gt = move_uploaded_file($_FILES['gate']['tmp_name'], $gate1);
// $caste1 = $dir1.$id_number."_caste.pdf";    
// $cast= move_uploaded_file($_FILES['caste']['tmp_name'], $caste1);
// $net1 = $dir1.$id_number."_net.pdf";    
// $net= move_uploaded_file($_FILES['net']['tmp_name'], $net1);
// $paymentreceipt1 = $dir1.$id_number."_paymentreceipt.pdf";    
// $paymentreceipt= move_uploaded_file($_FILES['paymentreceipt']['tmp_name'], $paymentreceipt1);



$app_id="Mtech-2022-".$mtech_application_category."-".$mtech_department."-".$id_number;

$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";

$query = "update mtp_application_info set personal_title='$personal_title', personal_first_name='$personal_first_name', personal_middle_name='$personal_middle_name', personal_last_name='$personal_last_name', personal_gender	 ='$personal_gender', personal_fathers_name	 ='$personal_fathers_name', personal_mothers_name ='$personal_mothers_name', personal_date_of_birth	 ='$personal_date_of_birth', personal_birth_category ='$personal_birth_category', personal_address	 ='$personal_address', personal_state	 ='$personal_state', personal_nationality	 ='$personal_nationality', personal_pincode	 ='$personal_pincode', personal_contact	 ='$personal_contact', personal_email	 ='$personal_email', personal_marital_status	 ='$personal_marital_status', personal_disable_status	 ='$personal_disable_status', app_id='$app_id', filled_info='$filled_info' where mtech_application_category ='$mtech_application_category' and mtech_department='$mtech_department' and personal_email='$personal_email'";

header("location: fill_form_academic.php");
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
	
</head>

<body>
<table align="left">
<tr>
<td><table align="left" border = 4><tr><td><a href="welcome.php"> HOME </a></td></tr></table>
</table>
<table align="right">
<tr>
<td><table align="right" border = 8><tr><td><a href="logout.php">LOGOUT</a></td></tr></table>
</table>

<div style="background-color:black; width:380px; position:fixed; height:110%; margin-right:200px">
<nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
            <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                <li class="nav-item w-100">
                    <h2 style="color:black"><a href="fill_form_info.php" class="nav-link text-light pl=4">Personal Information</a></h2>
                </li>
                <li class="nav-item w-100">
                    <h2 style="color:black"><a href="fill_form_payment.php" class="nav-link text-light pl=4">Payment Info</a></h2>
                </li>
                <li class="nav-item w-100">
                    <h2 style="color:black"><a href="fill_form_education.php" class="nav-link text-light pl=4">Qualification</a></h2>
                </li>
                <li class="nav-item w-100">
                    <h2 style="color:black"><a href="fill_form_gate.php" class="nav-link text-light pl=4">GATE Details</a></h2>
                </li>
                <li class="nav-item w-100">
                    <h2 style="color:black"><a href="fill_form_work.php" class="nav-link text-light pl=4">Work Experience</a></h2>
                </li>
                <li class="nav-item w-100">
                    <h2 style="color:black"><a href="fill_form_declaration.php" class="nav-link text-light pl=4">Declaration</a></h2>
                </li>
            </ul>
        </nav>
</div>
    

</body>

</html>

<?php
// echo $query;



// if (!$mysqli_query($conn, $query)) {
  // echo("Error description: " . mysqli_error($conn));
// }

// echo $query;
if (!mysqli_query($conn,$query)) {
  echo("Error description: " . mysqli_error($conn));
  echo "<br><p style='color:red'>Please take a screenshot of this page and mail to praveenk@iitp.ac.in or pic_auto@iitp.ac.in to resolve issue. </p>";
}else 
{
	echo '<center><b>Personal Information Form submiitted Successfullly<br><br>Application ID:'.$app_id.'</center>';


            
$personal_full_name="";
$app_id="";
$personal_date_of_birth="";
$personal_birth_category="";
// require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
// require '/usr/share/php/libphp-phpmailer/class.smtp.php';
// $mail = new PHPMailer;
// $sql   = "SELECT * FROM mtp_application_info where mtech_application_category ='$mtech_application_category' and mtech_department='$mtech_department' and personal_email='$personal_email'";
//     $query = $conn->query($sql);
    
// if ($query->num_rows == 0)
// {
    
//     echo '<center>Your Information Not found. Please resubmit the form.</center>';
// }
// else 
// {
    
    
//     $row      = $query->fetch_assoc();
//         $app_id  = $row['app_id'];
// $personal_full_name=$row['personal_full_name'];
// $personal_date_of_birth=$row['personal_date_of_birth'];
// $personal_birth_category=$row['personal_birth_category'];

// }
// $mail->setFrom('no-reply@iitp.ac.in');//no-reply@cse.iitp.ac.in
// $mail->addAddress($personal_email); 
// $mail->addBcc("mayankjoin+mtechiitp@gmail.com");

// //$mail->addAddress("praveenpatel.19832008@gmail.com");
// $mail->Subject = 'IIT Patna MTech Application Filled Information';
// $mail->Body ="Dear ".$personal_full_name.", <br> You have filled the following details : <br><br>Application ID:- ".$app_id."<br>Department :- ".$mtech_department."<br>Application Category : ".$mtech_application_category."<br>Date of Birth:".$personal_date_of_birth."<br>Birth Category --> ".$personal_birth_category."<br><br>If above information is not correct, Please re-submit the form.<br>https://www.iitp.ac.in/mtech_admission/mtech/mtech_form/index.php";
// //$mail->AddAttachment("../mess_qr/".$roll.".png");
// $mail->IsSMTP();
// $mail->isHTML(true);
// $mail->SMTPSecure = '';
// $mail->Host = '172.16.1.2'; //'ssl://smtp.gmail.com'; :995/pop3/ssl/novalidate-cert
// $mail->SMTPAuth = false;
// $mail->Port =25;


        // if(!$mail->send())
        // {
        //   echo 'Email is not sent.';
        //   echo 'Email error: ' . $mail->ErrorInfo;
        // }
        // else
        // {
        //   echo '';
        // }

            
}
             

?>

<?php 
}
?>
