<?php
 include_once ('dbconn.php');
  session_start();
if (isset($_POST['regf_user'])) {
// $personal_full_name	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['personal_full_name']))));
// $personal_gender = mysqli_real_escape_string($conn, $_POST['personal_gender']);
// $personal_fathers_name	 = ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['personal_fathers_name']))));
// $personal_date_of_birth = mysqli_real_escape_string($conn, $_POST['personal_date_of_birth']);
// $personal_birth_category	 = mysqli_real_escape_string($conn, $_POST['personal_birth_category']);
// $personal_address	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['personal_address'])));
// $personal_state	 = mysqli_real_escape_string($conn, $_POST['personal_state']);
// $personal_nationality	 = mysqli_real_escape_string($conn, $_POST['personal_nationality']);
// $personal_pincode	 = trim(mysqli_real_escape_string($conn, $_POST['personal_pincode']));
// $personal_contact	 = trim(mysqli_real_escape_string($conn, $_POST['personal_contact']));
$personal_email	 = $_SESSION['username'];
// $personal_marital_status	 = mysqli_real_escape_string($conn, $_POST['personal_marital_status']);
// $personal_disable_status	 = mysqli_real_escape_string($conn, $_POST['personal_disable_status']);
$tenth_equi_exam_passed	= mysqli_real_escape_string($conn, $_POST['tenth_equi_exam_passed']);
$tenth_equi_school_name	 =strtoupper(trim(mysqli_real_escape_string($conn, $_POST['tenth_equi_school_name'])));
$tenth_equi_board_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['tenth_equi_board_name'])));
$tenth_equi_passing_year	 = mysqli_real_escape_string($conn, $_POST['tenth_equi_passing_year']);
$tenth_equi_percentage	 = trim(mysqli_real_escape_string($conn, $_POST['tenth_equi_percentage']));
$tenth_equi_out_of	 = mysqli_real_escape_string($conn, $_POST['tenth_equi_out_of']);
$tenth_equi_complete_status	 = mysqli_real_escape_string($conn, $_POST['tenth_equi_complete_status']);
$tenth_equi_notes_if_any	 = strtolower(trim(mysqli_real_escape_string($conn, $_POST['tenth_equi_notes_if_any'])));
$inter_equi_exam_passed	 = mysqli_real_escape_string($conn, $_POST['inter_equi_exam_passed']);
$inter_equi_school_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['inter_equi_school_name'])));
$inter_equi_board_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['inter_equi_board_name'])));
$inter_equi_passing_year	 = mysqli_real_escape_string($conn, $_POST['inter_equi_passing_year']);
$inter_equi_percentage	 = trim(mysqli_real_escape_string($conn, $_POST['inter_equi_percentage']));
$inter_equi_out_of	 = mysqli_real_escape_string($conn, $_POST['inter_equi_out_of']);
$inter_equi_complete_status	 = mysqli_real_escape_string($conn, $_POST['inter_equi_complete_status']);
$inter_equi_notes_if_any	 = strtolower(trim(mysqli_real_escape_string($conn, $_POST['inter_equi_notes_if_any'])));
$ug_exam_passed	 = mysqli_real_escape_string($conn, $_POST['ug_exam_passed']);
$ug_degree_name	 = mysqli_real_escape_string($conn, $_POST['ug_degree_name']);
$ug_discipline	 = mysqli_real_escape_string($conn, $_POST['ug_discipline']);
$ug_college_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['ug_college_name'])));
$ug_univeristy_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['ug_univeristy_name'])));
$ug_passing_year	 = mysqli_real_escape_string($conn, $_POST['ug_passing_year']);
$ug_percentage	 = trim(mysqli_real_escape_string($conn, $_POST['ug_percentage']));
$ug_out_of	 = mysqli_real_escape_string($conn, $_POST['ug_out_of']);
$ug_complete_status	 = mysqli_real_escape_string($conn, $_POST['ug_complete_status']);
$ug_notes_if_any	 = strtolower(trim(mysqli_real_escape_string($conn, $_POST['ug_notes_if_any'])));
$pg_1_exam_passed	 = mysqli_real_escape_string($conn, $_POST['pg_1_exam_passed']);
$pg_1_pg_degree_name	 = mysqli_real_escape_string($conn, $_POST['pg_1_pg_degree_name']);
$pg_1_discipline	 = mysqli_real_escape_string($conn, $_POST['pg_1_discipline']);
$pg_1_college_name = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['pg_1_college_name'])));
$pg_1_univeristy_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['pg_1_univeristy_name'])));
$pg_1_passing_year	 = mysqli_real_escape_string($conn, $_POST['pg_1_passing_year']);
$pg_1_percentage	 = trim(mysqli_real_escape_string($conn, $_POST['pg_1_percentage']));
$pg_1_out_of	 = mysqli_real_escape_string($conn, $_POST['pg_1_out_of']);
$pg_1_complete_status	 = mysqli_real_escape_string($conn, $_POST['pg_1_complete_status']);
$pg_1_notes_if_any	 = strtolower(trim(mysqli_real_escape_string($conn, $_POST['pg_1_notes_if_any'])));
$pg_2_exam_passed	 = mysqli_real_escape_string($conn, $_POST['pg_2_exam_passed']);
$pg_2_pg_degree_name	 = mysqli_real_escape_string($conn, $_POST['pg_2_pg_degree_name']);
$pg_2_discipline	 = mysqli_real_escape_string($conn, $_POST['pg_2_discipline']);
$pg_2_college_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['pg_2_college_name'])));
$pg_2_univeristy_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['pg_2_univeristy_name'])));
$pg_2_passing_year	 = mysqli_real_escape_string($conn, $_POST['pg_2_passing_year']);
$pg_2_percentage	 = trim(mysqli_real_escape_string($conn, $_POST['pg_2_percentage']));
$pg_2_out_of	 = mysqli_real_escape_string($conn, $_POST['pg_2_out_of']);
$pg_2_complete_status	 = mysqli_real_escape_string($conn, $_POST['pg_2_complete_status']);
$pg_2_notes_if_any	 = strtolower(trim(mysqli_real_escape_string($conn, $_POST['pg_2_notes_if_any'])));
$other_exam_passed	 = mysqli_real_escape_string($conn, $_POST['other_exam_passed']);
$other_pg_degree_name	 = mysqli_real_escape_string($conn, $_POST['other_pg_degree_name']);
$other_discipline	 = mysqli_real_escape_string($conn, $_POST['other_discipline']);
$other_college_name	 =strtoupper(trim(mysqli_real_escape_string($conn, $_POST['other_college_name'])));
$other_univeristy_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['other_univeristy_name'])));
$other_passing_year	 = mysqli_real_escape_string($conn, $_POST['other_passing_year']);
$other_percentage	 = trim(mysqli_real_escape_string($conn, $_POST['other_percentage']));
$other_out_of	 = mysqli_real_escape_string($conn, $_POST['other_out_of']);
$other_complete_status	 = mysqli_real_escape_string($conn, $_POST['other_complete_status']);
$other_notes_if_any	 = strtolower(trim(mysqli_real_escape_string($conn, $_POST['other_notes_if_any'])));
$filled_education = 1;
// $work_1_experience_type	 = mysqli_real_escape_string($conn, $_POST['work_1_experience_type']);
// $work_1_organization_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['work_1_organization_name'])));
// $work_1_position	 = ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['work_1_position']))));
// $work_1_from_date	 = mysqli_real_escape_string($conn, $_POST['work_1_from_date']);
// $work_1_to_date	 = mysqli_real_escape_string($conn, $_POST['work_1_to_date']);
// $work_1_experience_duration	 = mysqli_real_escape_string($conn, $_POST['work_1_experience_duration']);
// $work_1_nature_of_work	 = ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['work_1_nature_of_work']))));
// $work_1_current_job	 = mysqli_real_escape_string($conn, $_POST['work_1_current_job']);
// $work_2_experience_type	 = mysqli_real_escape_string($conn, $_POST['work_2_experience_type']);
// $work_2_organization_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['work_2_organization_name'])));
// $work_2_position	 = ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['work_2_position']))));
// $work_2_from_date	 = mysqli_real_escape_string($conn, $_POST['work_2_from_date']);
// $work_2_to_date	 = mysqli_real_escape_string($conn, $_POST['work_2_to_date']);
// $work_2_experience_duration	 = mysqli_real_escape_string($conn, $_POST['work_2_experience_duration']);
// $work_2_nature_of_work	 = ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['work_2_nature_of_work']))));
// $work_2_current_job	 = mysqli_real_escape_string($conn, $_POST['work_2_current_job']);
// $work_3_experience_type	 = mysqli_real_escape_string($conn, $_POST['work_3_experience_type']);
// $work_3_organization_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['work_3_organization_name'])));
// $work_3_position	 = ucwords(trim(strtolower(mysqli_real_escape_string($conn, $_POST['work_3_position']))));
// $work_3_from_date	 = mysqli_real_escape_string($conn, $_POST['work_3_from_date']);
// $work_3_to_date	 = mysqli_real_escape_string($conn, $_POST['work_3_to_date']);
// $work_3_experience_duration	 = mysqli_real_escape_string($conn, $_POST['work_3_experience_duration']);
// $work_3_nature_of_work	 = ucwords(trim(strtolower(mysqli_real_escape_string($conn, $_POST['work_3_nature_of_work']))));
// $work_3_current_job	 = mysqli_real_escape_string($conn, $_POST['work_3_current_job']);
$mtech_application_category	 = $_SESSION['mtech_application_category'];
$mtech_department	 = $_SESSION['mtech_department'];
// echo "iu". $_SESSION['mtech_department'];

// $gate_registration_no	 = strtoupper(mysqli_real_escape_string($conn, $_POST['gate_registration_no']));
// $gate_paper_code	 = mysqli_real_escape_string($conn, $_POST['gate_paper_code']);
// $gate_coap_registration_no	 = strtoupper(mysqli_real_escape_string($conn, $_POST['gate_coap_registration_no']));
// $gate_score_out_of_1000	 = trim(mysqli_real_escape_string($conn, $_POST['gate_score_out_of_1000']));
// $gate_rank	 = trim(mysqli_real_escape_string($conn, $_POST['gate_rank']));
// $gate_valid_from	 = mysqli_real_escape_string($conn, $_POST['gate_valid_from']);
// $gate_valid_upto	 = mysqli_real_escape_string($conn, $_POST['gate_valid_upto']);
// $gate_notes_if_any	 = strtolower(trim(mysqli_real_escape_string($conn, $_POST['gate_notes_if_any'])));
// $payment_method	 = mysqli_real_escape_string($conn, $_POST['payment_method']);
// $payment_reference_number	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['payment_reference_number'])));
// $payment_amount	 = mysqli_real_escape_string($conn, $_POST['payment_amount']);
$id_number	 = mysqli_real_escape_string($conn, $_POST['id_number']);

// if($work_1_from_date == '') $work_1_from_date='0000-01-01';
// if($work_1_to_date == '') $work_1_to_date='0000-01-01';

// if ($work_2_from_date  == '') $work_2_from_date='0000-01-01';
// if ($work_2_to_date == '') $work_2_to_date='0000-01-01';


// if ($work_3_from_date  == '') $work_3_from_date='0000-01-01';
// if ($work_3_to_date == '') $work_3_to_date='0000-01-01';




// $dir1="./Mtech-2022/".$mtech_department."/".$mtech_application_category."/".str_replace(' ', '', $personal_full_name)."_".$id_number."/"; 

// if (!file_exists($dir1)) {
//     mkdir($dir1, 0777, true);
// } 
	
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

$query = "update mtp_application_info set filled_education = '$filled_education', tenth_equi_exam_passed	 ='$tenth_equi_exam_passed', tenth_equi_school_name	 ='$tenth_equi_school_name', tenth_equi_board_name	 ='$tenth_equi_board_name', tenth_equi_passing_year	 ='$tenth_equi_passing_year', tenth_equi_percentage	 ='$tenth_equi_percentage', tenth_equi_out_of	 ='$tenth_equi_out_of', tenth_equi_complete_status	 ='$tenth_equi_complete_status', tenth_equi_notes_if_any	 ='$tenth_equi_notes_if_any', inter_equi_exam_passed	 ='$inter_equi_exam_passed', inter_equi_school_name	 ='$inter_equi_school_name', inter_equi_board_name	 ='$inter_equi_board_name', inter_equi_passing_year	 ='$inter_equi_passing_year', inter_equi_percentage	 ='$inter_equi_percentage', inter_equi_out_of	 ='$inter_equi_out_of', inter_equi_complete_status	 ='$inter_equi_complete_status', inter_equi_notes_if_any	 ='$inter_equi_notes_if_any', ug_exam_passed	 ='$ug_exam_passed', ug_degree_name	 ='$ug_degree_name', ug_discipline	 ='$ug_discipline', ug_college_name	 ='$ug_college_name', ug_univeristy_name	 ='$ug_univeristy_name', ug_passing_year	 ='$ug_passing_year', ug_percentage	 ='$ug_percentage', ug_out_of	 ='$ug_out_of', ug_complete_status	 ='$ug_complete_status', ug_notes_if_any	 ='$ug_notes_if_any', pg_1_exam_passed	 ='$pg_1_exam_passed', pg_1_pg_degree_name	 ='$pg_1_pg_degree_name', pg_1_discipline	 ='$pg_1_discipline', pg_1_college_name	 ='$pg_1_college_name', pg_1_univeristy_name	 ='$pg_1_univeristy_name', pg_1_passing_year	 ='$pg_1_passing_year', pg_1_percentage	 ='$pg_1_percentage', pg_1_out_of	 ='$pg_1_out_of', pg_1_complete_status	 ='$pg_1_complete_status', pg_1_notes_if_any	 ='$pg_1_notes_if_any', pg_2_exam_passed	 ='$pg_2_exam_passed', pg_2_pg_degree_name	 ='$pg_2_pg_degree_name', pg_2_discipline	 ='$pg_2_discipline', pg_2_college_name	 ='$pg_2_college_name', pg_2_univeristy_name	 ='$pg_2_univeristy_name', pg_2_passing_year	 ='$pg_2_passing_year', pg_2_percentage	 ='$pg_2_percentage', pg_2_out_of	 ='$pg_2_out_of', pg_2_complete_status	 ='$pg_2_complete_status', pg_2_notes_if_any	 ='$pg_2_notes_if_any', other_exam_passed	 ='$other_exam_passed', other_pg_degree_name	 ='$other_pg_degree_name', other_discipline	 ='$other_discipline', other_college_name	 ='$other_college_name', other_univeristy_name	 ='$other_univeristy_name', other_passing_year	 ='$other_passing_year', other_percentage	 ='$other_percentage', other_out_of	 ='$other_out_of', other_complete_status	 ='$other_complete_status', other_notes_if_any	 ='$other_notes_if_any', added_updated=NOW() where mtech_application_category ='$mtech_application_category' and mtech_department='$mtech_department' and personal_email='$personal_email'"; 

header("location: fill_form_gate.php");

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
	echo '<center><b>Education Info Form submiitted Successfullly<br><br>Application ID:'.$app_id.'</center>';
  ?>
  <button><a href="fill_form_gate.php" class="nav-link text-light pl=4">Gate Info</a></button>

  <?php

            
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
