
<?php
 include_once ('dbconn.php');
  session_start();
//   echo count($_POST['slno']);
//   $exp = $_POST['work_1_experience_type'];

//   $sr_exp = base64_encode(serialize($exp));



//   echo $sr_exp;


if (isset($_POST['regf_user'])) {


    $personal_email	 = $_SESSION['username'];
    // echo ($_POST['academic_exam_passed'][1]);
    $academic_exam_passed_sr	 = base64_encode(serialize($_POST['academic_exam_passed']));
    $academic_degree_name_sr	 = base64_encode(serialize(($_POST['academic_degree_name'])));
    $academic_subject_sr	 = base64_encode(serialize(($_POST['academic_subject'])));
    $academic_institute_sr	 = base64_encode(serialize($_POST['academic_institute']));
    $academic_passing_year_sr	 = base64_encode(serialize($_POST['academic_passing_year']));
    $academic_cgpa_sr	 = base64_encode(serialize($_POST['academic_cgpa']));
    $academic_out_of_sr	 =  base64_encode(serialize($_POST['academic_out_of']));
    $academic_complete_status_sr	 =  base64_encode(serialize($_POST['academic_complete_status']));
    $academic_notes_sr	 =  base64_encode(serialize($_POST['academic_notes']));

$toy=1;




$filled_academic = 1;
$mtech_application_category	 = $_SESSION['mtech_application_category'];
$mtech_department	 = $_SESSION['mtech_department'];




// $app_id="Mtech-2022-".$mtech_application_category."-".$mtech_department."-".$id_number;

$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";


$query = "update mtp_application_info set academic_exam_passed ='$academic_exam_passed_sr', academic_degree_name	 ='$academic_degree_name_sr', academic_subject	 ='$academic_subject_sr', academic_institute	 ='$academic_institute_sr', academic_passing_year	 ='$academic_passing_year_sr', academic_cgpa	 ='$academic_cgpa_sr', academic_out_of	 ='$academic_out_of_sr', academic_complete_status	 ='$academic_complete_status_sr', academic_notes	 ='$academic_notes_sr',filled_academic = '$filled_academic', added_updated=NOW() where mtech_application_category ='$mtech_application_category' and mtech_department='$mtech_department' and personal_email='$personal_email'"; 


if (!mysqli_query($conn,$query)) {
        $toy=0;
  }else 
  {
    


}
    // }

    if($toy) header("location: fill_form_experience.php");
    else    { echo("Error description: " . mysqli_error($conn));
    echo "<br><p style='color:red'>Please take a screenshot of this page and mail to praveenk@iitp.ac.in or pic_auto@iitp.ac.in to resolve issue. </p>"; }
}
?>