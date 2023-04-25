
<?php
 include_once ('dbconn.php');
  session_start();
//   echo count($_POST['slno']);
//   $exp = $_POST['work_1_experience_type'];

//   $sr_exp = base64_encode(serialize($exp));



//   echo $sr_exp;


if (isset($_POST['regf_user'])) {


    $personal_email	 = $_SESSION['username'];
    $referee_name_sr	 = base64_encode(serialize($_POST['referee_name']));
    $referee_designation_sr	 = base64_encode(serialize(($_POST['referee_designation'])));
    $referee_organisation_sr	 = base64_encode(serialize(($_POST['referee_organisation'])));
    $referee_address_sr	 = base64_encode(serialize($_POST['referee_address']));
    $referee_country_sr	 = base64_encode(serialize($_POST['referee_country']));
    $referee_state_sr	 = base64_encode(serialize($_POST['referee_state']));
    $referee_pincode_sr	 =  base64_encode(serialize($_POST['referee_pincode']));
    $referee_city_sr	 =  base64_encode(serialize($_POST['referee_city']));
    $referee_email_sr	 =  base64_encode(serialize($_POST['referee_email']));
    $referee_contact_sr	 =  base64_encode(serialize($_POST['referee_contact']));

    // for($i=0 ; $i < count($_POST['slno']); $i++){
    //     // echo $i;
    //     $work_1_experience_type	 = $_POST['work_1_experience_type'][$i];
    //     echo $work_1_experience_type." ";
    // }
$toy=1;

    // for($i; $i < count($_POST['slno']); $i++){

        // echo $_POST['work_1_experience_type'][$i]."re";


// $personal_email	 = $_SESSION['username'];
// $work_1_experience_type	 = $_POST['work_1_experience_type'][$i];
// $work_1_organization_name	 = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['work_1_organization_name'][$i])));
// $work_1_position	 = ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['work_1_position'][$i]))));
// $work_1_from_date	 = mysqli_real_escape_string($conn, $_POST['work_1_from_date'][$i]);
// $work_1_to_date	 = mysqli_real_escape_string($conn, $_POST['work_1_to_date'][$i]);
// $work_1_nature_of_work	 = ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['work_1_nature_of_work'][$i]))));
// $work_1_current_job	 =  $_POST['work_1_current_job'][$i];


$filled_referee = 1;
$mtech_application_category	 = $_SESSION['mtech_application_category'];
$mtech_department	 = $_SESSION['mtech_department'];

// echo $work_1_current_job." hu ". $work_1_experience_type." ji ";
// $id_number	 = mysqli_real_escape_string($conn, $_POST['id_number']);

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



// $app_id="Mtech-2022-".$mtech_application_category."-".$mtech_department."-".$id_number;

$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";

$query = "update mtp_application_info set referee_name ='$referee_name_sr', referee_designation	 ='$referee_designation_sr', referee_organisation	 ='$referee_organisation_sr', referee_address	 ='$referee_address_sr', referee_country	 ='$referee_country_sr', referee_state	 ='$referee_state_sr', referee_city	 ='$referee_city_sr', referee_pincode	 ='$referee_pincode_sr', referee_email	 ='$referee_email_sr', referee_contact	 ='$referee_contact_sr', filled_referee = '$filled_referee', added_updated=NOW() where mtech_application_category ='$mtech_application_category' and mtech_department='$mtech_department' and personal_email='$personal_email'"; 

if (!mysqli_query($conn,$query)) {
        $toy=0;
  }else 
  {
    


}
    // }

    if($toy) header("location: fill_form_declaration.php");
    else    { echo("Error description: " . mysqli_error($conn));
    echo "<br><p style='color:red'>Please take a screenshot of this page and mail to praveenk@iitp.ac.in or pic_auto@iitp.ac.in to resolve issue. </p>"; }
}
?>