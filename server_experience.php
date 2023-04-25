<?php
 include_once ('dbconn.php');
  session_start();
//   echo count($_POST['slno']);

if (isset($_POST['regf_user'])) {


    $personal_email	 = $_SESSION['username'];

    $experience_history_checked = $_POST['experience_history_checked'];
    // $experience_history_designation = $_POST['experience_history_designation'];
    // $experience_history_organisation = $_POST['experience_history_organisation'];
    // $experience_history_govt = $_POST['experience_history_govt'];
    // $experience_history_department = $_POST['experience_history_department'];
    // $experience_history_from = $_POST['totalpresentedPaper_international'];
    // $experience_history_to = $_POST['experience_history_from'];
    // $experience_history_roles = $_POST['experience_history_roles'];
    // $experience_history_emoluments=$_POST['experience_history_emoluments'];

    $experience_teaching_checked = $_POST['experience_teaching_checked'];
    $experience_teaching_summary = $_POST['experience_teaching_summary'];
    $experience_teaching_details = $_POST['experience_teaching_details'];

    $experience_thesis_checked = $_POST['experience_thesis_checked'];
    $experience_thesis_mtech_indv = $_POST['experience_thesis_mtech_indv'];
    $experience_thesis_mtech_jnt = $_POST['experience_thesis_mtech_jnt'];
    $experience_thesis_ms_indv = $_POST['experience_thesis_ms_indv'];
    $experience_thesis_ms_jnt = $_POST['experience_thesis_ms_jnt'];
    $experience_thesis_msc_indv = $_POST['experience_thesis_msc_indv'];
    $experience_thesis_msc_jnt = $_POST['experience_thesis_msc_jnt'];
    $experience_thesis_phd_indv = $_POST['experience_thesis_phd_indv'];
    $experience_thesis_phd_jnt = $_POST['experience_thesis_phd_jnt'];

    $experience_project_checked = $_POST['experience_project_checked'];
    $experience_proj_gt10_rnd_principal = $_POST['experience_proj_gt10_rnd_principal'];
    $experience_proj_lt10_rnd_principal = $_POST['experience_proj_lt10_rnd_principal'];
    $experience_proj_gt10_rnd_coprincipal = $_POST['experience_proj_gt10_rnd_coprincipal'];
    $experience_proj_lt10_rnd_coprincipal = $_POST['experience_proj_lt10_rnd_coprincipal'];
    $experience_proj_gt10_cons_principal = $_POST['experience_proj_gt10_cons_principal'];
    $experience_proj_lt10_cons_principal = $_POST['experience_proj_lt10_cons_principal'];
    $experience_proj_gt10_cons_coprincipal = $_POST['experience_proj_gt10_cons_coprincipal'];
    $experience_proj_lt10_cons_coprincipal = $_POST['experience_proj_lt10_cons_coprincipal'];
    

    $experience_industrial_checked = $_POST['experience_industrial_checked'];
    $experience_indus_summary = $_POST['experience_indus_summary'];
    $experience_indus_details = $_POST['experience_indus_details'];
   

    $experience_admin_checked = $_POST['experience_admin_checked'];
    $experience_admin_summary = $_POST['experience_admin_summary'];
    $experience_admin_details = $_POST['experience_admin_details'];


    $experience_history_designation_sr	 = base64_encode(serialize($_POST['experience_history_designation']));
    $experience_history_organisation_sr	 = base64_encode(serialize(($_POST['experience_history_organisation'])));
    $experience_history_govt_sr	 = base64_encode(serialize(($_POST['experience_history_govt'])));
    $experience_history_department_sr	 = base64_encode(serialize($_POST['experience_history_department']));
    $experience_history_from_sr	 = base64_encode(serialize($_POST['experience_history_from']));
    $experience_history_to_sr	 = base64_encode(serialize($_POST['experience_history_to']));
    $experience_history_roles_sr	 =  base64_encode(serialize($_POST['experience_history_roles']));
    $experience_history_emoluments_sr	 =  base64_encode(serialize($_POST['experience_history_emoluments']));

   
$toy=1;





$filled_experience = 1;
$mtech_application_category	 = $_SESSION['mtech_application_category'];
$mtech_department	 = $_SESSION['mtech_department'];


// $app_id="Mtech-2022-".$mtech_application_category."-".$mtech_department."-".$id_number;

$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";

$query = "update mtp_application_info set experience_history_checked = '$experience_history_checked',
experience_history_designation = '$experience_history_designation_sr',
experience_history_organisation = '$experience_history_organisation_sr',
experience_history_govt = '$experience_history_govt_sr',
experience_history_department = '$experience_history_department_sr',
experience_history_from = '$experience_history_from_sr',
experience_history_to = '$experience_history_to_sr',
experience_history_roles = '$experience_history_roles_sr',
experience_history_emoluments = '$experience_history_emoluments_sr',

experience_teaching_checked = '$experience_teaching_checked',
experience_teaching_summary = '$experience_teaching_summary',

experience_thesis_checked = '$experience_thesis_checked',
experience_thesis_mtech_indv = '$experience_thesis_mtech_indv',
experience_thesis_mtech_jnt = '$experience_thesis_mtech_jnt',
experience_thesis_ms_indv = '$experience_thesis_ms_indv',
experience_thesis_ms_jnt = '$experience_thesis_ms_jnt',
experience_thesis_msc_indv = '$experience_thesis_msc_indv',
experience_thesis_msc_jnt = '$experience_thesis_msc_jnt',
experience_thesis_phd_indv = '$experience_thesis_phd_indv',
experience_thesis_phd_indv = '$experience_thesis_phd_indv',
experience_thesis_phd_jnt = '$experience_thesis_phd_jnt',

experience_project_checked = '$experience_project_checked',
experience_proj_gt10_rnd_principal = '$experience_proj_gt10_rnd_principal',
experience_proj_lt10_rnd_principal = '$experience_proj_lt10_rnd_principal',
experience_proj_gt10_rnd_coprincipal = '$experience_proj_gt10_rnd_coprincipal',
experience_proj_lt10_rnd_coprincipal = '$experience_proj_lt10_rnd_coprincipal',
experience_proj_gt10_cons_principal = '$experience_proj_gt10_cons_principal',
experience_proj_lt10_cons_principal = '$experience_proj_lt10_cons_principal',
experience_proj_gt10_cons_coprincipal = '$experience_proj_gt10_cons_coprincipal',
experience_proj_lt10_cons_coprincipal = '$experience_proj_lt10_cons_coprincipal',

experience_industrial_checked = '$experience_industrial_checked',
experience_indus_summary = '$experience_indus_summary',
experience_admin_checked = '$experience_admin_checked',
experience_admin_summary = '$experience_admin_summary',
    
 filled_experience = '$filled_experience', added_updated=NOW() where mtech_application_category ='$mtech_application_category' and mtech_department='$mtech_department' and personal_email='$personal_email'"; 

if (!mysqli_query($conn,$query)) {
        $toy=0;
  }else 
  {
    


}
    // }

    if($toy) header("location: fill_form_publication.php");
    else    { echo("Error description: " . mysqli_error($conn));
    echo "<br><p style='color:red'>Please take a screenshot of this page and mail to praveenk@iitp.ac.in or pic_auto@iitp.ac.in to resolve issue. </p>"; }
}
?>