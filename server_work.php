
<?php
 include_once ('dbconn.php');
  session_start();
//   echo count($_POST['slno']);
//   $exp = $_POST['work_1_experience_type'];

//   $sr_exp = base64_encode(serialize($exp));



//   echo $sr_exp;


if (isset($_POST['regf_user'])) {


    $personal_email	 = $_SESSION['username'];
    $work_1_experience_type_sr	 = base64_encode(serialize($_POST['work_1_experience_type']));
    $work_1_organization_name_sr	 = base64_encode(serialize(($_POST['work_1_organization_name'])));
    $work_1_position_sr	 = base64_encode(serialize(($_POST['work_1_position'])));
    $work_1_from_date_sr	 = base64_encode(serialize($_POST['work_1_from_date']));
    $work_1_to_date_sr	 = base64_encode(serialize($_POST['work_1_to_date']));
    $work_1_nature_of_work_sr	 = base64_encode(serialize($_POST['work_1_nature_of_work']));
    $work_1_current_job_sr	 =  base64_encode(serialize($_POST['work_1_current_job']));

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


$filled_work = 1;
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

$query = "update mtp_application_info set work_1_experience_type ='$work_1_experience_type_sr', work_1_organization_name	 ='$work_1_organization_name_sr', work_1_position	 ='$work_1_position_sr', work_1_from_date	 ='$work_1_from_date_sr', work_1_to_date	 ='$work_1_to_date_sr', work_1_nature_of_work	 ='$work_1_nature_of_work_sr', work_1_current_job	 ='$work_1_current_job_sr', filled_work = '$filled_work', added_updated=NOW() where mtech_application_category ='$mtech_application_category' and mtech_department='$mtech_department' and personal_email='$personal_email'"; 

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