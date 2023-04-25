<?php
 include_once ('dbconn.php');
  session_start();
  error_reporting(0);
if (isset($_POST['regf_user'])) {
  // echo $_POST['others_awards'][1];

$personal_email	 = $_SESSION['username'];
$others_awards_checked = $_POST['others_awards_checked'];
$others_awards_sr = base64_encode(serialize($_POST['others_awards']));
$others_awards_year_sr = base64_encode(serialize($_POST['others_awards_year']));
$others_awards_agency_sr = base64_encode(serialize($_POST['others_awards_agency']));

$others_technology_checked = $_POST['others_technology_checked'];
$others_technology_developer = $_POST['others_technology_developer'];
$others_technology_description = $_POST['others_technology_description'];
$others_technology_completion = $_POST['others_technology_completion'];

$others_patent_checked = $_POST['others_patent_checked'];
$others_patent_filed_indian = $_POST['others_patent_filed_indian'];
$others_patent_filed_international = $_POST['others_patent_filed_international'];
$others_patent_granted_indian = $_POST['others_patent_granted_indian'];
$others_patent_granted_international = $_POST['others_patent_granted_international'];

$others_coverletter_checked = $_POST['others_coverletter_checked'];
$others_coverletter_description = $_POST['others_coverletter_description'];

$others_research_description= $_POST['others_research_description'];

$others_interest_description= $_POST['others_interest_description'];

$others_resume_checked= $_POST['others_resume_checked'];
$others_resume_summary= $_POST['others_resume_summary'];




$mtech_application_category	 = $_SESSION['mtech_application_category'];
$mtech_department	 = $_SESSION['mtech_department'];

$id_number	 = mysqli_real_escape_string($conn, $_POST['id_number']);


$app_id="Mtech-2022-".$mtech_application_category."-".$mtech_department."-".$id_number;

$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";

$query = "update mtp_application_info set 
others_awards_checked = '$others_awards_checked',
others_awards = '$others_awards_sr',
others_awards_year = '$others_awards_year_sr',
others_awards_agency = '$others_awards_agency_sr',

others_technology_checked = '$others_technology_checked',
others_technology_developer = '$others_technology_developer',
others_technology_description = '$others_technology_description',
others_technology_completion = '$others_technology_completion',

others_patent_checked = '$others_patent_checked',
others_patent_filed_indian = '$others_patent_filed_indian',
others_patent_filed_international = '$others_patent_filed_international',
others_patent_granted_indian = '$others_patent_granted_indian',
others_patent_granted_international = '$others_patent_granted_international',

others_coverletter_checked = '$others_coverletter_checked',
others_coverletter_description = '$others_coverletter_description',

others_research_description= '$others_research_description',

others_interest_description= '$others_interest_description',

others_resume_checked= '$others_resume_checked',
others_resume_summary= '$others_resume_summary', filled_status=1, added_updated=NOW() where mtech_application_category ='$mtech_application_category' and mtech_department='$mtech_department' and personal_email='$personal_email'"; 

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
	echo '<center><b>Congratulations! Application Form submiitted successfullly<br><br>Application ID:'.$app_id.'</center>';
  ?>
<br/><br/>
  <center><button type="submit"><a href="welcome.php" class="btn btn-primary">HOME</a></button></center>
  
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
