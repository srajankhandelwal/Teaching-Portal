<?php 
include_once('dbconn.php');
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
echo "hi";

if($_GET["app_id"]!=null)
{
$app_id=$_GET["app_id"];
$sql   = "SELECT * FROM `mtp_application_info` WHERE `app_id`='$app_id'  LIMIT 1";
        $query = $conn->query($sql);
                $row = $query->fetch_assoc();
                        
$personal_full_name	= $row['personal_full_name'];
$personal_gender	 = $row['personal_gender'];
$personal_fathers_name	 = $row['personal_fathers_name'];
$personal_date_of_birth	 = $row['personal_date_of_birth'];
$personal_birth_category	 = $row['personal_birth_category'];
$personal_address	 = $row['personal_address'];
$personal_state	 = $row['personal_state'];
$personal_nationality	 = $row['personal_nationality'];
$personal_pincode	 = $row['personal_pincode'];
$personal_contact	 = $row['personal_contact'];
$personal_email	 = $row['personal_email'];
$personal_marital_status	 = $row['personal_marital_status'];
$personal_disable_status	 = $row['personal_disable_status'];
$tenth_equi_exam_passed	 = $row['tenth_equi_exam_passed'];
$tenth_equi_school_name	 = $row['tenth_equi_school_name'];
$tenth_equi_board_name	 = $row['tenth_equi_board_name'];
$tenth_equi_passing_year	 = $row['tenth_equi_passing_year'];
$tenth_equi_percentage	 = $row['tenth_equi_percentage'];
$tenth_equi_out_of	 = $row['tenth_equi_out_of'];
$tenth_equi_complete_status	 = $row['tenth_equi_complete_status'];
$tenth_equi_notes_if_any	 = $row['tenth_equi_notes_if_any'];
$inter_equi_exam_passed	 = $row['inter_equi_exam_passed'];
$inter_equi_school_name	 = $row['inter_equi_school_name'];
$inter_equi_board_name	 = $row['inter_equi_board_name'];
$inter_equi_passing_year	 = $row['inter_equi_passing_year'];
$inter_equi_percentage	 = $row['inter_equi_percentage'];
$inter_equi_out_of	 = $row['inter_equi_out_of'];
$inter_equi_complete_status	 = $row['inter_equi_complete_status'];
$inter_equi_notes_if_any	 = $row['inter_equi_notes_if_any'];
$ug_exam_passed	 = $row['ug_exam_passed'];
$ug_degree_name	 = $row['ug_degree_name'];                             
$ug_discipline	 = $row['ug_discipline'];
$ug_college_name	 = $row['ug_college_name'];
$ug_univeristy_name	 = $row['ug_univeristy_name'];
$ug_passing_year	 = $row['ug_passing_year'];
$ug_percentage	 = $row['ug_percentage'];
$ug_out_of	 = $row['ug_out_of'];
$ug_complete_status	 = $row['ug_complete_status'];
$ug_notes_if_any	 = $row['ug_notes_if_any'];
$pg_1_exam_passed	 = $row['pg_1_exam_passed'];
$pg_1_pg_degree_name	 = $row['pg_1_pg_degree_name'];
$pg_1_discipline	 = $row['pg_1_discipline'];
$pg_1_college_name	 = $row['pg_1_college_name'];
$pg_1_univeristy_name	 = $row['pg_1_univeristy_name'];
$pg_1_passing_year	 = $row['pg_1_passing_year'];
$pg_1_percentage	 = $row['pg_1_percentage'];
$pg_1_out_of	 = $row['pg_1_out_of'];
$pg_1_complete_status	 = $row['pg_1_complete_status'];
$pg_1_notes_if_any	 = $row['pg_1_notes_if_any'];
$pg_2_exam_passed	 = $row['pg_2_exam_passed'];
$pg_2_pg_degree_name	 = $row['pg_2_pg_degree_name'];
$pg_2_discipline	 = $row['pg_2_discipline'];
$pg_2_college_name	 = $row['pg_2_college_name'];
$pg_2_univeristy_name	 = $row['pg_2_univeristy_name'];
$pg_2_passing_year	 = $row['pg_2_passing_year'];
$pg_2_percentage	 = $row['pg_2_percentage'];
$pg_2_out_of	 = $row['pg_2_out_of'];
$pg_2_complete_status	 = $row['pg_2_complete_status'];
$pg_2_notes_if_any	 = $row['pg_2_notes_if_any'];
$other_exam_passed	 = $row['other_exam_passed'];
$other_pg_degree_name	 = $row['other_pg_degree_name'];
$other_discipline	 = $row['other_discipline'];
$other_college_name	 = $row['other_college_name'];
$other_univeristy_name	 = $row['other_univeristy_name'];
$other_passing_year	 = $row['other_passing_year'];
$other_percentage	 = $row['other_percentage'];
$other_out_of	 = $row['other_out_of'];
$other_complete_status	 = $row['other_complete_status'];
$other_notes_if_any	 = $row['other_notes_if_any'];
$work_1_experience_type	 = $row['work_1_experience_type'];
$work_1_organization_name	 = $row['work_1_organization_name'];
$work_1_position	 = $row['work_1_position'];
$work_1_from_date	 = $row['work_1_from_date'];
$work_1_to_date	 = $row['work_1_to_date'];
$work_1_nature_of_work	 = $row['work_1_nature_of_work'];
$work_1_current_job	 = $row['work_1_current_job'];
$mtech_application_category	 = $row['mtech_application_category'];
$mtech_department	 = $row['mtech_department'];
$mtech_is_your_btech_from_iit	 = $row['mtech_is_your_btech_from_iit'];
$gate_registration_no	 = $row['gate_registration_no'];
$gate_paper_code	 = $row['gate_paper_code'];
$gate_coap_registration_no	 = $row['gate_coap_registration_no'];
$gate_score_out_of_1000	 = $row['gate_score_out_of_1000'];
$gate_rank	 = $row['gate_rank'];
$gate_valid_from	 = $row['gate_valid_from'];
$gate_valid_upto	 = $row['gate_valid_upto'];
$gate_notes_if_any	 = $row['gate_notes_if_any'];
$payment_method	 = $row['payment_method'];
$payment_reference_number	 = $row['payment_reference_number'];
$payment_amount	 = $row['payment_amount'];




$work_1_experience_type_dc = unserialize(base64_decode($work_1_experience_type));
$work_1_organization_name_dc = unserialize(base64_decode($work_1_organization_name));
$work_1_position_dc = unserialize(base64_decode($work_1_position));
$work_1_from_date_dc = unserialize(base64_decode($work_1_from_date));
$work_1_to_date_dc = unserialize(base64_decode($work_1_to_date));
$work_1_nature_of_work_dc = unserialize(base64_decode($work_1_nature_of_work));
$work_1_current_job_dc = unserialize(base64_decode($work_1_current_job));

$cnt_work = count($work_1_experience_type_dc);

// echo count($work_1_experience_type_dc);

						?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
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
<td><table align="right" border = 4><tr><td><a href="logout.php">LOGOUT</a></td></tr></table>
</table>
    <center>
        <h5 class="my-5"> Application ID: <?php echo $app_id; ?></h5>
    </center>
    <form action="server.php">
        <div class="container py-5">
            <div class="row">
                <!--/col-->
                <div class="col-md-8 offset-md-2">

                    <!-- form user info -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Personal Information</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Full Name*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+" value="<?php echo $personal_full_name; ?>" name="personal_full_name" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Gender*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="personal_gender" disabled>
                                            <option value="">Select</option>
                                            <option value="Male" <?php if($personal_gender=="Male") echo 'selected="selected"'; ?>>Male</option>
<option value="Female" <?php if($personal_gender=="Female") echo 'selected="selected"'; ?>>Female</option>
<option value="Transgender" <?php if($personal_gender=="Transgender") echo 'selected="selected"'; ?>>Transgender</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Father's Name*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+" value="<?php echo $personal_fathers_name; ?>" name="personal_fathers_name" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Date of Birth*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="date" value="<?php echo $personal_date_of_birth; ?>" name="personal_date_of_birth" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Birth Category*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="personal_birth_category" disabled>
                                            <option value="">Select</option>
                                            <option value="General" <?php if($personal_birth_category=="General") echo 'selected="selected"'; ?>>General/OBC(Creamy layer)</option>
<option value="EWS" <?php if($personal_birth_category=="EWS") echo 'selected="selected"'; ?>>Economically Weaker Section</option>
<option value="OBC" <?php if($personal_birth_category=="OBC_NCL") echo 'selected="selected"'; ?>>OBC(Non Creamy)</option>
<option value="SC" <?php if($personal_birth_category=="SC") echo 'selected="selected"'; ?>>Scheduled Caste</option>
<option value="ST" <?php if($personal_birth_category=="ST") echo 'selected="selected"'; ?>>Scheduled Tribes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Address*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="<?php echo $personal_address; ?>" name="personal_address" disabled maxlength="500">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">State*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="personal_state" disabled>
                                            <option value="">Select</option>
											<option value="Andhra Pradesh" <?php if($personal_state=="Andhra Pradesh") echo 'selected="selected"'; ?>>Andhra Pradesh</option>
                                             <option value="Andaman and Nicobar Islands" <?php if($personal_state=="Andaman and Nicobar Islands") echo 'selected="selected"'; ?>>Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh" <?php if($personal_state=="Arunachal Pradesh") echo 'selected="selected"'; ?>>Arunachal Pradesh</option>
<option value="Assam" <?php if($personal_state=="Assam") echo 'selected="selected"'; ?>>Assam</option>
<option value="Bihar" <?php if($personal_state=="Bihar") echo 'selected="selected"'; ?>>Bihar</option>
<option value="Chandigarh" <?php if($personal_state=="Chandigarh") echo 'selected="selected"'; ?>>Chandigarh</option>
<option value="Chhattisgarh" <?php if($personal_state=="Chhattisgarh") echo 'selected="selected"'; ?>>Chhattisgarh</option>
<option value="Dadar and Nagar Haveli" <?php if($personal_state=="Dadar and Nagar Haveli") echo 'selected="selected"'; ?>>Dadar and Nagar Haveli</option>
<option value="Daman and Diu" <?php if($personal_state=="Daman and Diu") echo 'selected="selected"'; ?>>Daman and Diu</option>
<option value="Delhi" <?php if($personal_state=="Delhi") echo 'selected="selected"'; ?>>Delhi</option>
<option value="Lakshadweep" <?php if($personal_state=="Lakshadweep") echo 'selected="selected"'; ?>>Lakshadweep</option>
<option value="Puducherry" <?php if($personal_state=="Puducherry") echo 'selected="selected"'; ?>>Puducherry</option>
<option value="Goa" <?php if($personal_state=="Goa") echo 'selected="selected"'; ?>>Goa</option>
<option value="Gujarat" <?php if($personal_state=="Gujarat") echo 'selected="selected"'; ?>>Gujarat</option>
<option value="Haryana" <?php if($personal_state=="Haryana") echo 'selected="selected"'; ?>>Haryana</option>
<option value="Himachal Pradesh" <?php if($personal_state=="Himachal Pradesh") echo 'selected="selected"'; ?>>Himachal Pradesh</option>
<option value="Jammu and Kashmir" <?php if($personal_state=="Jammu and Kashmir") echo 'selected="selected"'; ?>>Jammu and Kashmir</option>
<option value="Jharkhand" <?php if($personal_state=="Jharkhand") echo 'selected="selected"'; ?>>Jharkhand</option>
<option value="Karnataka" <?php if($personal_state=="Karnataka") echo 'selected="selected"'; ?>>Karnataka</option>
<option value="Kerala" <?php if($personal_state=="Kerala") echo 'selected="selected"'; ?>>Kerala</option>
<option value="Madhya Pradesh" <?php if($personal_state=="Madhya Pradesh") echo 'selected="selected"'; ?>>Madhya Pradesh</option>
<option value="Maharashtra" <?php if($personal_state=="Maharashtra") echo 'selected="selected"'; ?>>Maharashtra</option>
<option value="Manipur" <?php if($personal_state=="Manipur") echo 'selected="selected"'; ?>>Manipur</option>
<option value="Meghalaya" <?php if($personal_state=="Meghalaya") echo 'selected="selected"'; ?>>Meghalaya</option>
<option value="Mizoram" <?php if($personal_state=="Mizoram") echo 'selected="selected"'; ?>>Mizoram</option>
<option value="Nagaland" <?php if($personal_state=="Nagaland") echo 'selected="selected"'; ?>>Nagaland</option>
<option value="Odisha" <?php if($personal_state=="Odisha") echo 'selected="selected"'; ?>>Odisha</option>
<option value="Punjab" <?php if($personal_state=="Punjab") echo 'selected="selected"'; ?>>Punjab</option>
<option value="Rajasthan" <?php if($personal_state=="Rajasthan") echo 'selected="selected"'; ?>>Rajasthan</option>
<option value="Sikkim" <?php if($personal_state=="Sikkim") echo 'selected="selected"'; ?>>Sikkim</option>
<option value="Tamil Nadu" <?php if($personal_state=="Tamil Nadu") echo 'selected="selected"'; ?>>Tamil Nadu</option>
<option value="Telangana" <?php if($personal_state=="Telangana") echo 'selected="selected"'; ?>>Telangana</option>
<option value="Tripura" <?php if($personal_state=="Tripura") echo 'selected="selected"'; ?>>Tripura</option>
<option value="Uttar Pradesh" <?php if($personal_state=="Uttar Pradesh") echo 'selected="selected"'; ?>>Uttar Pradesh</option>
<option value="Uttarakhand" <?php if($personal_state=="Uttarakhand") echo 'selected="selected"'; ?>>Uttarakhand</option>
<option value="West Bengal" <?php if($personal_state=="West Bengal") echo 'selected="selected"'; ?>>West Bengal</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nationality*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="personal_nationality" disabled>
                                            <option value="">Select</option>
                                           <option value="Albania" <?php if($personal_nationality=="Albania") echo 'selected="selected"'; ?>>Albania</option>
<option value="Algeria" <?php if($personal_nationality=="Algeria") echo 'selected="selected"'; ?>>Algeria</option>
<option value="American Samoa" <?php if($personal_nationality=="American Samoa") echo 'selected="selected"'; ?>>American Samoa</option>
<option value="Andorra" <?php if($personal_nationality=="Andorra") echo 'selected="selected"'; ?>>Andorra</option>
<option value="Angola" <?php if($personal_nationality=="Angola") echo 'selected="selected"'; ?>>Angola</option>
<option value="Anguilla" <?php if($personal_nationality=="Anguilla") echo 'selected="selected"'; ?>>Anguilla</option>
<option value="Antigua & Barbuda" <?php if($personal_nationality=="Antigua & Barbuda") echo 'selected="selected"'; ?>>Antigua & Barbuda</option>
<option value="Argentina" <?php if($personal_nationality=="Argentina") echo 'selected="selected"'; ?>>Argentina</option>
<option value="Armenia" <?php if($personal_nationality=="Armenia") echo 'selected="selected"'; ?>>Armenia</option>
<option value="Aruba" <?php if($personal_nationality=="Aruba") echo 'selected="selected"'; ?>>Aruba</option>
<option value="Australia" <?php if($personal_nationality=="Australia") echo 'selected="selected"'; ?>>Australia</option>
<option value="Austria" <?php if($personal_nationality=="Austria") echo 'selected="selected"'; ?>>Austria</option>
<option value="Azerbaijan" <?php if($personal_nationality=="Azerbaijan") echo 'selected="selected"'; ?>>Azerbaijan</option>
<option value="Bahamas" <?php if($personal_nationality=="Bahamas") echo 'selected="selected"'; ?>>Bahamas</option>
<option value="Bahrain" <?php if($personal_nationality=="Bahrain") echo 'selected="selected"'; ?>>Bahrain</option>
<option value="Bangladesh" <?php if($personal_nationality=="Bangladesh") echo 'selected="selected"'; ?>>Bangladesh</option>
<option value="Barbados" <?php if($personal_nationality=="Barbados") echo 'selected="selected"'; ?>>Barbados</option>
<option value="Belarus" <?php if($personal_nationality=="Belarus") echo 'selected="selected"'; ?>>Belarus</option>
<option value="Belgium" <?php if($personal_nationality=="Belgium") echo 'selected="selected"'; ?>>Belgium</option>
<option value="Belize" <?php if($personal_nationality=="Belize") echo 'selected="selected"'; ?>>Belize</option>
<option value="Benin" <?php if($personal_nationality=="Benin") echo 'selected="selected"'; ?>>Benin</option>
<option value="Bermuda" <?php if($personal_nationality=="Bermuda") echo 'selected="selected"'; ?>>Bermuda</option>
<option value="Bhutan" <?php if($personal_nationality=="Bhutan") echo 'selected="selected"'; ?>>Bhutan</option>
<option value="Bolivia" <?php if($personal_nationality=="Bolivia") echo 'selected="selected"'; ?>>Bolivia</option>
<option value="Bonaire" <?php if($personal_nationality=="Bonaire") echo 'selected="selected"'; ?>>Bonaire</option>
<option value="Bosnia & Herzegovina" <?php if($personal_nationality=="Bosnia & Herzegovina") echo 'selected="selected"'; ?>>Bosnia & Herzegovina</option>
<option value="Botswana" <?php if($personal_nationality=="Botswana") echo 'selected="selected"'; ?>>Botswana</option>
<option value="Brazil" <?php if($personal_nationality=="Brazil") echo 'selected="selected"'; ?>>Brazil</option>
<option value="British Indian Ocean Ter" <?php if($personal_nationality=="British Indian Ocean Ter") echo 'selected="selected"'; ?>>British Indian Ocean Ter</option>
<option value="Brunei" <?php if($personal_nationality=="Brunei") echo 'selected="selected"'; ?>>Brunei</option>
<option value="Bulgaria" <?php if($personal_nationality=="Bulgaria") echo 'selected="selected"'; ?>>Bulgaria</option>
<option value="Burkina Faso" <?php if($personal_nationality=="Burkina Faso") echo 'selected="selected"'; ?>>Burkina Faso</option>
<option value="Burundi" <?php if($personal_nationality=="Burundi") echo 'selected="selected"'; ?>>Burundi</option>
<option value="Cambodia" <?php if($personal_nationality=="Cambodia") echo 'selected="selected"'; ?>>Cambodia</option>
<option value="Cameroon" <?php if($personal_nationality=="Cameroon") echo 'selected="selected"'; ?>>Cameroon</option>
<option value="Canada" <?php if($personal_nationality=="Canada") echo 'selected="selected"'; ?>>Canada</option>
<option value="Canary Islands" <?php if($personal_nationality=="Canary Islands") echo 'selected="selected"'; ?>>Canary Islands</option>
<option value="Cape Verde" <?php if($personal_nationality=="Cape Verde") echo 'selected="selected"'; ?>>Cape Verde</option>
<option value="Cayman Islands" <?php if($personal_nationality=="Cayman Islands") echo 'selected="selected"'; ?>>Cayman Islands</option>
<option value="Central African Republic" <?php if($personal_nationality=="Central African Republic") echo 'selected="selected"'; ?>>Central African Republic</option>
<option value="Chad" <?php if($personal_nationality=="Chad") echo 'selected="selected"'; ?>>Chad</option>
<option value="Channel Islands" <?php if($personal_nationality=="Channel Islands") echo 'selected="selected"'; ?>>Channel Islands</option>
<option value="Chile" <?php if($personal_nationality=="Chile") echo 'selected="selected"'; ?>>Chile</option>
<option value="China" <?php if($personal_nationality=="China") echo 'selected="selected"'; ?>>China</option>
<option value="Christmas Island" <?php if($personal_nationality=="Christmas Island") echo 'selected="selected"'; ?>>Christmas Island</option>
<option value="Cocos Island" <?php if($personal_nationality=="Cocos Island") echo 'selected="selected"'; ?>>Cocos Island</option>
<option value="Colombia" <?php if($personal_nationality=="Colombia") echo 'selected="selected"'; ?>>Colombia</option>
<option value="Comoros" <?php if($personal_nationality=="Comoros") echo 'selected="selected"'; ?>>Comoros</option>
<option value="Congo" <?php if($personal_nationality=="Congo") echo 'selected="selected"'; ?>>Congo</option>
<option value="Cook Islands" <?php if($personal_nationality=="Cook Islands") echo 'selected="selected"'; ?>>Cook Islands</option>
<option value="Costa Rica" <?php if($personal_nationality=="Costa Rica") echo 'selected="selected"'; ?>>Costa Rica</option>
<option value="Cote DIvoire" <?php if($personal_nationality=="Cote DIvoire") echo 'selected="selected"'; ?>>Cote DIvoire</option>
<option value="Croatia" <?php if($personal_nationality=="Croatia") echo 'selected="selected"'; ?>>Croatia</option>
<option value="Cuba" <?php if($personal_nationality=="Cuba") echo 'selected="selected"'; ?>>Cuba</option>
<option value="Curacao" <?php if($personal_nationality=="Curacao") echo 'selected="selected"'; ?>>Curacao</option>
<option value="Cyprus" <?php if($personal_nationality=="Cyprus") echo 'selected="selected"'; ?>>Cyprus</option>
<option value="Czech Republic" <?php if($personal_nationality=="Czech Republic") echo 'selected="selected"'; ?>>Czech Republic</option>
<option value="Denmark" <?php if($personal_nationality=="Denmark") echo 'selected="selected"'; ?>>Denmark</option>
<option value="Djibouti" <?php if($personal_nationality=="Djibouti") echo 'selected="selected"'; ?>>Djibouti</option>
<option value="Dominica" <?php if($personal_nationality=="Dominica") echo 'selected="selected"'; ?>>Dominica</option>
<option value="Dominican Republic" <?php if($personal_nationality=="Dominican Republic") echo 'selected="selected"'; ?>>Dominican Republic</option>
<option value="East Timor" <?php if($personal_nationality=="East Timor") echo 'selected="selected"'; ?>>East Timor</option>
<option value="Ecuador" <?php if($personal_nationality=="Ecuador") echo 'selected="selected"'; ?>>Ecuador</option>
<option value="Egypt" <?php if($personal_nationality=="Egypt") echo 'selected="selected"'; ?>>Egypt</option>
<option value="El Salvador" <?php if($personal_nationality=="El Salvador") echo 'selected="selected"'; ?>>El Salvador</option>
<option value="Equatorial Guinea" <?php if($personal_nationality=="Equatorial Guinea") echo 'selected="selected"'; ?>>Equatorial Guinea</option>
<option value="Eritrea" <?php if($personal_nationality=="Eritrea") echo 'selected="selected"'; ?>>Eritrea</option>
<option value="Estonia" <?php if($personal_nationality=="Estonia") echo 'selected="selected"'; ?>>Estonia</option>
<option value="Ethiopia" <?php if($personal_nationality=="Ethiopia") echo 'selected="selected"'; ?>>Ethiopia</option>
<option value="Falkland Islands" <?php if($personal_nationality=="Falkland Islands") echo 'selected="selected"'; ?>>Falkland Islands</option>
<option value="Faroe Islands" <?php if($personal_nationality=="Faroe Islands") echo 'selected="selected"'; ?>>Faroe Islands</option>
<option value="Fiji" <?php if($personal_nationality=="Fiji") echo 'selected="selected"'; ?>>Fiji</option>
<option value="Finland" <?php if($personal_nationality=="Finland") echo 'selected="selected"'; ?>>Finland</option>
<option value="France" <?php if($personal_nationality=="France") echo 'selected="selected"'; ?>>France</option>
<option value="French Guiana" <?php if($personal_nationality=="French Guiana") echo 'selected="selected"'; ?>>French Guiana</option>
<option value="French Polynesia" <?php if($personal_nationality=="French Polynesia") echo 'selected="selected"'; ?>>French Polynesia</option>
<option value="French Southern Ter" <?php if($personal_nationality=="French Southern Ter") echo 'selected="selected"'; ?>>French Southern Ter</option>
<option value="Gabon" <?php if($personal_nationality=="Gabon") echo 'selected="selected"'; ?>>Gabon</option>
<option value="Gambia" <?php if($personal_nationality=="Gambia") echo 'selected="selected"'; ?>>Gambia</option>
<option value="Georgia" <?php if($personal_nationality=="Georgia") echo 'selected="selected"'; ?>>Georgia</option>
<option value="Germany" <?php if($personal_nationality=="Germany") echo 'selected="selected"'; ?>>Germany</option>
<option value="Ghana" <?php if($personal_nationality=="Ghana") echo 'selected="selected"'; ?>>Ghana</option>
<option value="Gibraltar" <?php if($personal_nationality=="Gibraltar") echo 'selected="selected"'; ?>>Gibraltar</option>
<option value="Great Britain" <?php if($personal_nationality=="Great Britain") echo 'selected="selected"'; ?>>Great Britain</option>
<option value="Greece" <?php if($personal_nationality=="Greece") echo 'selected="selected"'; ?>>Greece</option>
<option value="Greenland" <?php if($personal_nationality=="Greenland") echo 'selected="selected"'; ?>>Greenland</option>
<option value="Grenada" <?php if($personal_nationality=="Grenada") echo 'selected="selected"'; ?>>Grenada</option>
<option value="Guadeloupe" <?php if($personal_nationality=="Guadeloupe") echo 'selected="selected"'; ?>>Guadeloupe</option>
<option value="Guam" <?php if($personal_nationality=="Guam") echo 'selected="selected"'; ?>>Guam</option>
<option value="Guatemala" <?php if($personal_nationality=="Guatemala") echo 'selected="selected"'; ?>>Guatemala</option>
<option value="Guinea" <?php if($personal_nationality=="Guinea") echo 'selected="selected"'; ?>>Guinea</option>
<option value="Guyana" <?php if($personal_nationality=="Guyana") echo 'selected="selected"'; ?>>Guyana</option>
<option value="Haiti" <?php if($personal_nationality=="Haiti") echo 'selected="selected"'; ?>>Haiti</option>
<option value="Hawaii" <?php if($personal_nationality=="Hawaii") echo 'selected="selected"'; ?>>Hawaii</option>
<option value="Honduras" <?php if($personal_nationality=="Honduras") echo 'selected="selected"'; ?>>Honduras</option>
<option value="Hong Kong" <?php if($personal_nationality=="Hong Kong") echo 'selected="selected"'; ?>>Hong Kong</option>
<option value="Hungary" <?php if($personal_nationality=="Hungary") echo 'selected="selected"'; ?>>Hungary</option>
<option value="Iceland" <?php if($personal_nationality=="Iceland") echo 'selected="selected"'; ?>>Iceland</option>
<option value="Indonesia" <?php if($personal_nationality=="Indonesia") echo 'selected="selected"'; ?>>Indonesia</option>
<option value="India" <?php if($personal_nationality=="India") echo 'selected="selected"'; ?>>India</option>
<option value="Iran" <?php if($personal_nationality=="Iran") echo 'selected="selected"'; ?>>Iran</option>
<option value="Iraq" <?php if($personal_nationality=="Iraq") echo 'selected="selected"'; ?>>Iraq</option>
<option value="Ireland" <?php if($personal_nationality=="Ireland") echo 'selected="selected"'; ?>>Ireland</option>
<option value="Isle of Man" <?php if($personal_nationality=="Isle of Man") echo 'selected="selected"'; ?>>Isle of Man</option>
<option value="Israel" <?php if($personal_nationality=="Israel") echo 'selected="selected"'; ?>>Israel</option>
<option value="Italy" <?php if($personal_nationality=="Italy") echo 'selected="selected"'; ?>>Italy</option>
<option value="Jamaica" <?php if($personal_nationality=="Jamaica") echo 'selected="selected"'; ?>>Jamaica</option>
<option value="Japan" <?php if($personal_nationality=="Japan") echo 'selected="selected"'; ?>>Japan</option>
<option value="Jordan" <?php if($personal_nationality=="Jordan") echo 'selected="selected"'; ?>>Jordan</option>
<option value="Kazakhstan" <?php if($personal_nationality=="Kazakhstan") echo 'selected="selected"'; ?>>Kazakhstan</option>
<option value="Kenya" <?php if($personal_nationality=="Kenya") echo 'selected="selected"'; ?>>Kenya</option>
<option value="Kiribati" <?php if($personal_nationality=="Kiribati") echo 'selected="selected"'; ?>>Kiribati</option>
<option value="Korea North" <?php if($personal_nationality=="Korea North") echo 'selected="selected"'; ?>>Korea North</option>
<option value="Korea South" <?php if($personal_nationality=="Korea South") echo 'selected="selected"'; ?>>Korea South</option>
<option value="Kuwait" <?php if($personal_nationality=="Kuwait") echo 'selected="selected"'; ?>>Kuwait</option>
<option value="Kyrgyzstan" <?php if($personal_nationality=="Kyrgyzstan") echo 'selected="selected"'; ?>>Kyrgyzstan</option>
<option value="Laos" <?php if($personal_nationality=="Laos") echo 'selected="selected"'; ?>>Laos</option>
<option value="Latvia" <?php if($personal_nationality=="Latvia") echo 'selected="selected"'; ?>>Latvia</option>
<option value="Lebanon" <?php if($personal_nationality=="Lebanon") echo 'selected="selected"'; ?>>Lebanon</option>
<option value="Lesotho" <?php if($personal_nationality=="Lesotho") echo 'selected="selected"'; ?>>Lesotho</option>
<option value="Liberia" <?php if($personal_nationality=="Liberia") echo 'selected="selected"'; ?>>Liberia</option>
<option value="Libya" <?php if($personal_nationality=="Libya") echo 'selected="selected"'; ?>>Libya</option>
<option value="Liechtenstein" <?php if($personal_nationality=="Liechtenstein") echo 'selected="selected"'; ?>>Liechtenstein</option>
<option value="Lithuania" <?php if($personal_nationality=="Lithuania") echo 'selected="selected"'; ?>>Lithuania</option>
<option value="Luxembourg" <?php if($personal_nationality=="Luxembourg") echo 'selected="selected"'; ?>>Luxembourg</option>
<option value="Macau" <?php if($personal_nationality=="Macau") echo 'selected="selected"'; ?>>Macau</option>
<option value="Macedonia" <?php if($personal_nationality=="Macedonia") echo 'selected="selected"'; ?>>Macedonia</option>
<option value="Madagascar" <?php if($personal_nationality=="Madagascar") echo 'selected="selected"'; ?>>Madagascar</option>
<option value="Malaysia" <?php if($personal_nationality=="Malaysia") echo 'selected="selected"'; ?>>Malaysia</option>
<option value="Malawi" <?php if($personal_nationality=="Malawi") echo 'selected="selected"'; ?>>Malawi</option>
<option value="Maldives" <?php if($personal_nationality=="Maldives") echo 'selected="selected"'; ?>>Maldives</option>
<option value="Mali" <?php if($personal_nationality=="Mali") echo 'selected="selected"'; ?>>Mali</option>
<option value="Malta" <?php if($personal_nationality=="Malta") echo 'selected="selected"'; ?>>Malta</option>
<option value="Marshall Islands" <?php if($personal_nationality=="Marshall Islands") echo 'selected="selected"'; ?>>Marshall Islands</option>
<option value="Martinique" <?php if($personal_nationality=="Martinique") echo 'selected="selected"'; ?>>Martinique</option>
<option value="Mauritania" <?php if($personal_nationality=="Mauritania") echo 'selected="selected"'; ?>>Mauritania</option>
<option value="Mauritius" <?php if($personal_nationality=="Mauritius") echo 'selected="selected"'; ?>>Mauritius</option>
<option value="Mayotte" <?php if($personal_nationality=="Mayotte") echo 'selected="selected"'; ?>>Mayotte</option>
<option value="Mexico" <?php if($personal_nationality=="Mexico") echo 'selected="selected"'; ?>>Mexico</option>
<option value="Midway Islands" <?php if($personal_nationality=="Midway Islands") echo 'selected="selected"'; ?>>Midway Islands</option>
<option value="Moldova" <?php if($personal_nationality=="Moldova") echo 'selected="selected"'; ?>>Moldova</option>
<option value="Monaco" <?php if($personal_nationality=="Monaco") echo 'selected="selected"'; ?>>Monaco</option>
<option value="Mongolia" <?php if($personal_nationality=="Mongolia") echo 'selected="selected"'; ?>>Mongolia</option>
<option value="Montserrat" <?php if($personal_nationality=="Montserrat") echo 'selected="selected"'; ?>>Montserrat</option>
<option value="Morocco" <?php if($personal_nationality=="Morocco") echo 'selected="selected"'; ?>>Morocco</option>
<option value="Mozambique" <?php if($personal_nationality=="Mozambique") echo 'selected="selected"'; ?>>Mozambique</option>
<option value="Myanmar" <?php if($personal_nationality=="Myanmar") echo 'selected="selected"'; ?>>Myanmar</option>
<option value="Nambia" <?php if($personal_nationality=="Nambia") echo 'selected="selected"'; ?>>Nambia</option>
<option value="Nauru" <?php if($personal_nationality=="Nauru") echo 'selected="selected"'; ?>>Nauru</option>
<option value="Nepal" <?php if($personal_nationality=="Nepal") echo 'selected="selected"'; ?>>Nepal</option>
<option value="Netherland Antilles" <?php if($personal_nationality=="Netherland Antilles") echo 'selected="selected"'; ?>>Netherland Antilles</option>
<option value="Netherlands (Holland, Europe)" <?php if($personal_nationality=="Netherlands (Holland, Europe)") echo 'selected="selected"'; ?>>Netherlands (Holland, Europe)</option>
<option value="Nevis" <?php if($personal_nationality=="Nevis") echo 'selected="selected"'; ?>>Nevis</option>
<option value="New Caledonia" <?php if($personal_nationality=="New Caledonia") echo 'selected="selected"'; ?>>New Caledonia</option>
<option value="New Zealand" <?php if($personal_nationality=="New Zealand") echo 'selected="selected"'; ?>>New Zealand</option>
<option value="Nicaragua" <?php if($personal_nationality=="Nicaragua") echo 'selected="selected"'; ?>>Nicaragua</option>
<option value="Niger" <?php if($personal_nationality=="Niger") echo 'selected="selected"'; ?>>Niger</option>
<option value="Nigeria" <?php if($personal_nationality=="Nigeria") echo 'selected="selected"'; ?>>Nigeria</option>
<option value="Niue" <?php if($personal_nationality=="Niue") echo 'selected="selected"'; ?>>Niue</option>
<option value="Norfolk Island" <?php if($personal_nationality=="Norfolk Island") echo 'selected="selected"'; ?>>Norfolk Island</option>
<option value="Norway" <?php if($personal_nationality=="Norway") echo 'selected="selected"'; ?>>Norway</option>
<option value="Oman" <?php if($personal_nationality=="Oman") echo 'selected="selected"'; ?>>Oman</option>
<option value="Pakistan" <?php if($personal_nationality=="Pakistan") echo 'selected="selected"'; ?>>Pakistan</option>
<option value="Palau Island" <?php if($personal_nationality=="Palau Island") echo 'selected="selected"'; ?>>Palau Island</option>
<option value="Palestine" <?php if($personal_nationality=="Palestine") echo 'selected="selected"'; ?>>Palestine</option>
<option value="Panama" <?php if($personal_nationality=="Panama") echo 'selected="selected"'; ?>>Panama</option>
<option value="Papua New Guinea" <?php if($personal_nationality=="Papua New Guinea") echo 'selected="selected"'; ?>>Papua New Guinea</option>
<option value="Paraguay" <?php if($personal_nationality=="Paraguay") echo 'selected="selected"'; ?>>Paraguay</option>
<option value="Peru" <?php if($personal_nationality=="Peru") echo 'selected="selected"'; ?>>Peru</option>
<option value="Philippines" <?php if($personal_nationality=="Philippines") echo 'selected="selected"'; ?>>Philippines</option>
<option value="Pitcairn Island" <?php if($personal_nationality=="Pitcairn Island") echo 'selected="selected"'; ?>>Pitcairn Island</option>
<option value="Poland" <?php if($personal_nationality=="Poland") echo 'selected="selected"'; ?>>Poland</option>
<option value="Portugal" <?php if($personal_nationality=="Portugal") echo 'selected="selected"'; ?>>Portugal</option>
<option value="Puerto Rico" <?php if($personal_nationality=="Puerto Rico") echo 'selected="selected"'; ?>>Puerto Rico</option>
<option value="Qatar" <?php if($personal_nationality=="Qatar") echo 'selected="selected"'; ?>>Qatar</option>
<option value="Republic of Montenegro" <?php if($personal_nationality=="Republic of Montenegro") echo 'selected="selected"'; ?>>Republic of Montenegro</option>
<option value="Republic of Serbia" <?php if($personal_nationality=="Republic of Serbia") echo 'selected="selected"'; ?>>Republic of Serbia</option>
<option value="Reunion" <?php if($personal_nationality=="Reunion") echo 'selected="selected"'; ?>>Reunion</option>
<option value="Romania" <?php if($personal_nationality=="Romania") echo 'selected="selected"'; ?>>Romania</option>
<option value="Russia" <?php if($personal_nationality=="Russia") echo 'selected="selected"'; ?>>Russia</option>
<option value="Rwanda" <?php if($personal_nationality=="Rwanda") echo 'selected="selected"'; ?>>Rwanda</option>
<option value="St Barthelemy" <?php if($personal_nationality=="St Barthelemy") echo 'selected="selected"'; ?>>St Barthelemy</option>
<option value="St Eustatius" <?php if($personal_nationality=="St Eustatius") echo 'selected="selected"'; ?>>St Eustatius</option>
<option value="St Helena" <?php if($personal_nationality=="St Helena") echo 'selected="selected"'; ?>>St Helena</option>
<option value="St Kitts-Nevis" <?php if($personal_nationality=="St Kitts-Nevis") echo 'selected="selected"'; ?>>St Kitts-Nevis</option>
<option value="St Lucia" <?php if($personal_nationality=="St Lucia") echo 'selected="selected"'; ?>>St Lucia</option>
<option value="St Maarten" <?php if($personal_nationality=="St Maarten") echo 'selected="selected"'; ?>>St Maarten</option>
<option value="St Pierre & Miquelon" <?php if($personal_nationality=="St Pierre & Miquelon") echo 'selected="selected"'; ?>>St Pierre & Miquelon</option>
<option value="St Vincent & Grenadines" <?php if($personal_nationality=="St Vincent & Grenadines") echo 'selected="selected"'; ?>>St Vincent & Grenadines</option>
<option value="Saipan" <?php if($personal_nationality=="Saipan") echo 'selected="selected"'; ?>>Saipan</option>
<option value="Samoa" <?php if($personal_nationality=="Samoa") echo 'selected="selected"'; ?>>Samoa</option>
<option value="Samoa American" <?php if($personal_nationality=="Samoa American") echo 'selected="selected"'; ?>>Samoa American</option>
<option value="San Marino" <?php if($personal_nationality=="San Marino") echo 'selected="selected"'; ?>>San Marino</option>
<option value="Sao Tome & Principe" <?php if($personal_nationality=="Sao Tome & Principe") echo 'selected="selected"'; ?>>Sao Tome & Principe</option>
<option value="Saudi Arabia" <?php if($personal_nationality=="Saudi Arabia") echo 'selected="selected"'; ?>>Saudi Arabia</option>
<option value="Senegal" <?php if($personal_nationality=="Senegal") echo 'selected="selected"'; ?>>Senegal</option>
<option value="Seychelles" <?php if($personal_nationality=="Seychelles") echo 'selected="selected"'; ?>>Seychelles</option>
<option value="Sierra Leone" <?php if($personal_nationality=="Sierra Leone") echo 'selected="selected"'; ?>>Sierra Leone</option>
<option value="Singapore" <?php if($personal_nationality=="Singapore") echo 'selected="selected"'; ?>>Singapore</option>
<option value="Slovakia" <?php if($personal_nationality=="Slovakia") echo 'selected="selected"'; ?>>Slovakia</option>
<option value="Slovenia" <?php if($personal_nationality=="Slovenia") echo 'selected="selected"'; ?>>Slovenia</option>
<option value="Solomon Islands" <?php if($personal_nationality=="Solomon Islands") echo 'selected="selected"'; ?>>Solomon Islands</option>
<option value="Somalia" <?php if($personal_nationality=="Somalia") echo 'selected="selected"'; ?>>Somalia</option>
<option value="South Africa" <?php if($personal_nationality=="South Africa") echo 'selected="selected"'; ?>>South Africa</option>
<option value="Spain" <?php if($personal_nationality=="Spain") echo 'selected="selected"'; ?>>Spain</option>
<option value="Sri Lanka" <?php if($personal_nationality=="Sri Lanka") echo 'selected="selected"'; ?>>Sri Lanka</option>
<option value="Sudan" <?php if($personal_nationality=="Sudan") echo 'selected="selected"'; ?>>Sudan</option>
<option value="Suriname" <?php if($personal_nationality=="Suriname") echo 'selected="selected"'; ?>>Suriname</option>
<option value="Swaziland" <?php if($personal_nationality=="Swaziland") echo 'selected="selected"'; ?>>Swaziland</option>
<option value="Sweden" <?php if($personal_nationality=="Sweden") echo 'selected="selected"'; ?>>Sweden</option>
<option value="Switzerland" <?php if($personal_nationality=="Switzerland") echo 'selected="selected"'; ?>>Switzerland</option>
<option value="Syria" <?php if($personal_nationality=="Syria") echo 'selected="selected"'; ?>>Syria</option>
<option value="Tahiti" <?php if($personal_nationality=="Tahiti") echo 'selected="selected"'; ?>>Tahiti</option>
<option value="Taiwan" <?php if($personal_nationality=="Taiwan") echo 'selected="selected"'; ?>>Taiwan</option>
<option value="Tajikistan" <?php if($personal_nationality=="Tajikistan") echo 'selected="selected"'; ?>>Tajikistan</option>
<option value="Tanzania" <?php if($personal_nationality=="Tanzania") echo 'selected="selected"'; ?>>Tanzania</option>
<option value="Thailand" <?php if($personal_nationality=="Thailand") echo 'selected="selected"'; ?>>Thailand</option>
<option value="Togo" <?php if($personal_nationality=="Togo") echo 'selected="selected"'; ?>>Togo</option>
<option value="Tokelau" <?php if($personal_nationality=="Tokelau") echo 'selected="selected"'; ?>>Tokelau</option>
<option value="Tonga" <?php if($personal_nationality=="Tonga") echo 'selected="selected"'; ?>>Tonga</option>
<option value="Trinidad & Tobago" <?php if($personal_nationality=="Trinidad & Tobago") echo 'selected="selected"'; ?>>Trinidad & Tobago</option>
<option value="Tunisia" <?php if($personal_nationality=="Tunisia") echo 'selected="selected"'; ?>>Tunisia</option>
<option value="Turkey" <?php if($personal_nationality=="Turkey") echo 'selected="selected"'; ?>>Turkey</option>
<option value="Turkmenistan" <?php if($personal_nationality=="Turkmenistan") echo 'selected="selected"'; ?>>Turkmenistan</option>
<option value="Turks & Caicos Is" <?php if($personal_nationality=="Turks & Caicos Is") echo 'selected="selected"'; ?>>Turks & Caicos Is</option>
<option value="Tuvalu" <?php if($personal_nationality=="Tuvalu") echo 'selected="selected"'; ?>>Tuvalu</option>
<option value="Uganda" <?php if($personal_nationality=="Uganda") echo 'selected="selected"'; ?>>Uganda</option>
<option value="United Kingdom" <?php if($personal_nationality=="United Kingdom") echo 'selected="selected"'; ?>>United Kingdom</option>
<option value="Ukraine" <?php if($personal_nationality=="Ukraine") echo 'selected="selected"'; ?>>Ukraine</option>
<option value="United Arab Emirates" <?php if($personal_nationality=="United Arab Emirates") echo 'selected="selected"'; ?>>United Arab Emirates</option>
<option value="United nationalitys of America" <?php if($personal_nationality=="United nationalitys of America") echo 'selected="selected"'; ?>>United nationalitys of America</option>
<option value="Uruguay" <?php if($personal_nationality=="Uruguay") echo 'selected="selected"'; ?>>Uruguay</option>
<option value="Uzbekistan" <?php if($personal_nationality=="Uzbekistan") echo 'selected="selected"'; ?>>Uzbekistan</option>
<option value="Vanuatu" <?php if($personal_nationality=="Vanuatu") echo 'selected="selected"'; ?>>Vanuatu</option>
<option value="Vatican City nationality" <?php if($personal_nationality=="Vatican City nationality") echo 'selected="selected"'; ?>>Vatican City nationality</option>
<option value="Venezuela" <?php if($personal_nationality=="Venezuela") echo 'selected="selected"'; ?>>Venezuela</option>
<option value="Vietnam" <?php if($personal_nationality=="Vietnam") echo 'selected="selected"'; ?>>Vietnam</option>
<option value="Virgin Islands (Brit)" <?php if($personal_nationality=="Virgin Islands (Brit)") echo 'selected="selected"'; ?>>Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)" <?php if($personal_nationality=="Virgin Islands (USA)") echo 'selected="selected"'; ?>>Virgin Islands (USA)</option>
<option value="Wake Island" <?php if($personal_nationality=="Wake Island") echo 'selected="selected"'; ?>>Wake Island</option>
<option value="Wallis & Futana Is" <?php if($personal_nationality=="Wallis & Futana Is") echo 'selected="selected"'; ?>>Wallis & Futana Is</option>
<option value="Yemen" <?php if($personal_nationality=="Yemen") echo 'selected="selected"'; ?>>Yemen</option>
<option value="Zaire" <?php if($personal_nationality=="Zaire") echo 'selected="selected"'; ?>>Zaire</option>
<option value="Zambia" <?php if($personal_nationality=="Zambia") echo 'selected="selected"'; ?>>Zambia</option>
<option value="Zimbabwe" <?php if($personal_nationality=="Zimbabwe") echo 'selected="selected"'; ?>>Zimbabwe</option>/option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Pincode*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="^[0-9]{6}$" value="<?php echo $personal_pincode; ?>" name="personal_pincode" disabled maxlength="6">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Contact*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="<?php echo $personal_contact; ?>" pattern="[4-9]{1}[0-9]{9}" maxlength="10" name="personal_contact" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" value="<?php echo $personal_email; ?>" name="personal_email" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Marital Status*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="personal_marital_status" disabled>
                                            <option value="">Select</option>
                                           <option value="Married" <?php if($personal_marital_status=="Married") echo 'selected="selected"'; ?>>Married</option>
<option value="Unmarried" <?php if($personal_marital_status=="Unmarried") echo 'selected="selected"'; ?>>Unmarried</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Disable Status*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="personal_disable_status" disabled>
                                            <option value="">Select</option>
                                            <option value="Yes" <?php if($personal_disable_status=="Yes") echo 'selected="selected"'; ?>>Yes</option>
<option value="No" <?php if($personal_disable_status=="No") echo 'selected="selected"'; ?>>No</option>
                                        </select>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->

                </div>
                <!--/col-->

                <div class="col-md-10 offset-md-1">
                    <span class="anchor" id="formComplex"></span>
                    <hr class="my-5">
                    </hr>
                    <h3>Academic Qualification </h3>

                    <!-- form complex example -->
                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                    <p></p>

                    <h4 style="color:#A31260 ;">10th/equivalent</h4>

                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Exam Passed</b></label>
                            <input type="text" class="form-control" id="exampleAccount" placeholder="10th/equivalent" disabled="disabled" name="tenth_equi_exam_passed">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>School Name*</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" value="<?php echo $tenth_equi_school_name; ?>" name="tenth_equi_school_name" disabled maxlength="200">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Board Name*</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" value="<?php echo $tenth_equi_board_name; ?>" name="tenth_equi_board_name" disabled maxlength="200">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Passing Year*</b></label>
                            <select class="form-control" name="tenth_equi_passing_year" disabled>
                                <option value="">Select</option>
                                <?php
                                $y = date("Y", strtotime("+8 HOURS"));
                                for ($year = 1950; $y >= $year; $y--) {
                                    if($tenth_equi_passing_year==$y)
				echo "<option value = '".$y."' selected='selected'>".$y."</option>";
			else
			echo "<option value = '".$y."'>".$y."</option>";
                                }
                                ?>
                            </select>
                        </div>

                    </div>

                    <!-- <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />  -->
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Percentage/CGPA*</b></label>
                            <input type="number" class="form-control" id="exampleAccount" value="<?php echo $tenth_equi_percentage; ?>" name="tenth_equi_percentage" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Out of*</b></label>
                            <select class="form-control"  disabled name="tenth_equi_out_of">
                                <option value=''>Select</option>
                                <option value="100" <?php if($tenth_equi_out_of=="100") echo 'selected="selected"'; ?>>100</option>
<option value="10" <?php if($tenth_equi_out_of=="10") echo 'selected="selected"'; ?>>10</option>
<option value="4" <?php if($tenth_equi_out_of=="4") echo 'selected="selected"'; ?>>4</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Complete Status*</b></label>
                            <select class="form-control" name="tenth_equi_complete_status" disabled>
                                <option value=''>Select</option>
                                <option value="Completed" <?php if($tenth_equi_complete_status="Completed") echo 'selected="selected"'; ?>>Completed</option>
<option value="Ongoing" <?php if($tenth_equi_complete_status=="Ongoing") echo 'selected="selected"'; ?>>Ongoing</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Notes If Any</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" value="<?php echo $tenth_equi_notes_if_any; ?>" name="tenth_equi_notes_if_any" maxlength="200" disabled>
                        </div>
                    </div>

                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>

                    <h4 style="color:#A31260 ;">12th/equivalent</h4>

                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Exam Passed</b></label>
                            <input type="text" class="form-control" id="exampleAccount" placeholder="12th/Equivalent" name="inter_equi_exam_passed" disabled="disabled">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>School Name*</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" value="<?php echo $inter_equi_school_name; ?>" name="inter_equi_school_name" disabled maxlength="200">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Board Name*</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" value="<?php echo $inter_equi_board_name; ?>" name="inter_equi_board_name" disabled maxlength="200">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Passing Year*</b></label>
                            <select class="form-control" name="inter_equi_passing_year" disabled>
                                <option value="">Select</option>
                                <?php
                                $y = date("Y", strtotime("+8 HOURS"));
                                $y = $y + 2;  // Added since gate valid for 3 years
                                for ($year = 1950; $y >= $year; $y--) {
                                           if($inter_equi_passing_year==$y)
				echo "<option value = '".$y."' selected='selected'>".$y."</option>";
			else
			echo "<option value = '".$y."'>".$y."</option>";
                                }
                                ?>
                            </select>
                        </div>

                    </div>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Percentage/CGPA*</b></label>
                            <input type="number" class="form-control" id="exampleAccount" value="<?php echo $inter_equi_percentage; ?>" name="inter_equi_percentage" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Out of*</b></label>
                            <select class="form-control" name="inter_equi_out_of" disabled>
                                <option value=''>Select</option>
                                <option value="100" <?php if($inter_equi_out_of=="100") echo 'selected="selected"'; ?>>100</option>
<option value="10" <?php if($inter_equi_out_of=="10") echo 'selected="selected"'; ?>>10</option>
<option value="4" <?php if($inter_equi_out_of=="4") echo 'selected="selected"'; ?>>4</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Complete Status*</b></label>
                            <select class="form-control" name="inter_equi_complete_status" disabled>
                                <option value=''>Select</option>
                                <option value="Completed" <?php if($inter_equi_complete_status=="Completed") echo 'selected="selected"'; ?>>Completed</option>
<option value="Ongoing" <?php if($inter_equi_complete_status=="Ongoing") echo 'selected="selected"'; ?>>Ongoing</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Notes If Any</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="inter_equi_notes_if_any" value="<?php echo $inter_equi_notes_if_any; ?>" disabled>
                        </div>
                    </div>
                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>


                    <h4 style="color:#A31260 ;">Undergraduate</h4>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Exam Passed</b></label>
                            <input type="number" class="form-control" id="exampleAccount" name="ug_exam_passed" placeholder="Undergraduate" disabled="disabled">
                        </div>


                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>UG Degree Name*</b></label>
                            <select class="form-control" name="ug_degree_name" disabled>
                                <option value="">Select </option>
                                <option value="5 year BS-MS Dual Degree Programme" <?php if($ug_degree_name=="5 year BS-MS Dual Degree Programme") echo 'selected="selected"'; ?>>5 year BS-MS Dual Degree Programme</option>
<option value="5 year Integrated M.Sc" <?php if($ug_degree_name=="5 year Integrated M.Sc") echo 'selected="selected"'; ?>>5 year Integrated M.Sc</option>
<option value="5 year dual degree B.E. and M.E.." <?php if($ug_degree_name=="5 year dual degree B.E. and M.E..") echo 'selected="selected"'; ?>>5 year dual degree B.E. and M.E..</option>
<option value="5 year dual degree B.Tech and M.Tech" <?php if($ug_degree_name=="5 year dual degree B.Tech and M.Tech") echo 'selected="selected"'; ?>>5 year dual degree B.Tech and M.Tech</option>
<option value="A level" <?php if($ug_degree_name=="A level") echo 'selected="selected"'; ?>>A level</option>
<option value="A.I.S." <?php if($ug_degree_name=="A.I.S.") echo 'selected="selected"'; ?>>A.I.S.</option>
<option value="ALCCS" <?php if($ug_degree_name=="ALCCS") echo 'selected="selected"'; ?>>ALCCS</option>
<option value="AMIE" <?php if($ug_degree_name=="AMIE") echo 'selected="selected"'; ?>>AMIE</option>
<option value="AMIETE" <?php if($ug_degree_name=="AMIETE") echo 'selected="selected"'; ?>>AMIETE</option>
<option value="B-Pharma" <?php if($ug_degree_name=="B-Pharma") echo 'selected="selected"'; ?>>B-Pharma</option>
<option value="B.A.M.S" <?php if($ug_degree_name=="B.A.M.S") echo 'selected="selected"'; ?>>B.A.M.S</option>
<option value="B.ARCH" <?php if($ug_degree_name=="B.ARCH") echo 'selected="selected"'; ?>>B.ARCH</option>
<option value="B.Com" <?php if($ug_degree_name=="B.Com") echo 'selected="selected"'; ?>>B.Com</option>
<option value="B.D.S." <?php if($ug_degree_name=="B.D.S.") echo 'selected="selected"'; ?>>B.D.S.</option>
<option value="B.E." <?php if($ug_degree_name=="B.E.") echo 'selected="selected"'; ?>>B.E.</option>
<option value="B.EL.ED" <?php if($ug_degree_name=="B.EL.ED") echo 'selected="selected"'; ?>>B.EL.ED</option>
<option value="B.Ed" <?php if($ug_degree_name=="B.Ed") echo 'selected="selected"'; ?>>B.Ed</option>
<option value="B.Sc" <?php if($ug_degree_name=="B.Sc") echo 'selected="selected"'; ?>>B.Sc</option>
<option value="B.Tech" <?php if($ug_degree_name=="B.Tech") echo 'selected="selected"'; ?>>B.Tech</option>
<option value="BA" <?php if($ug_degree_name=="BA") echo 'selected="selected"'; ?>>BA</option>
<option value="BCA" <?php if($ug_degree_name=="BCA") echo 'selected="selected"'; ?>>BCA</option>
<option value="CA" <?php if($ug_degree_name=="CA") echo 'selected="selected"'; ?>>CA</option>
<option value="IETE" <?php if($ug_degree_name=="IETE") echo 'selected="selected"'; ?>>IETE</option>
<option value="Integrated M.Sc-Ph.D" <?php if($ug_degree_name=="Integrated M.Sc-Ph.D") echo 'selected="selected"'; ?>>Integrated M.Sc-Ph.D</option>
<option value="Integrated MA" <?php if($ug_degree_name=="Integrated MA") echo 'selected="selected"'; ?>>Integrated MA</option>
<option value="Integrated MBA" <?php if($ug_degree_name=="Integrated MBA") echo 'selected="selected"'; ?>>Integrated MBA</option>
<option value="Integrated MCA with BCA" <?php if($ug_degree_name=="Integrated MCA with BCA") echo 'selected="selected"'; ?>>Integrated MCA with BCA</option>
<option value="LLB" <?php if($ug_degree_name=="LLB") echo 'selected="selected"'; ?>>LLB</option>
<option value="OTHER" <?php if($ug_degree_name=="OTHER") echo 'selected="selected"'; ?>>OTHER</option>
                            </select>
                        </div>

                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Discipline*</b></label>
                            <select class="form-control" name="ug_discipline" disabled>
                                <option value="">Select </option>
                                <option value="Account and finance" <?php if($ug_discipline=="Account and finance") echo 'selected="selected"'; ?>>Account and finance</option>
<option value="Accountancy" <?php if($ug_discipline=="Accountancy") echo 'selected="selected"'; ?>>Accountancy</option>
<option value="Actuarial Science" <?php if($ug_discipline=="Actuarial Science") echo 'selected="selected"'; ?>>Actuarial Science</option>
<option value="Advanced Biochemistry" <?php if($ug_discipline=="Advanced Biochemistry") echo 'selected="selected"'; ?>>Advanced Biochemistry</option>
<option value="Advanced Manufacturing" <?php if($ug_discipline=="Advanced Manufacturing") echo 'selected="selected"'; ?>>Advanced Manufacturing</option>
<option value="Advanced Zoology and Biotechnology" <?php if($ug_discipline=="Advanced Zoology and Biotechnology") echo 'selected="selected"'; ?>>Advanced Zoology and Biotechnology</option>
<option value="Advertising Management and Public Relations" <?php if($ug_discipline=="Advertising Management and Public Relations") echo 'selected="selected"'; ?>>Advertising Management and Public Relations</option>
<option value="Aerodynamics" <?php if($ug_discipline=="Aerodynamics") echo 'selected="selected"'; ?>>Aerodynamics</option>
<option value="Aeronautical Engineering" <?php if($ug_discipline=="Aeronautical Engineering") echo 'selected="selected"'; ?>>Aeronautical Engineering</option>
<option value="Aeronautical Science" <?php if($ug_discipline=="Aeronautical Science") echo 'selected="selected"'; ?>>Aeronautical Science</option>
<option value="Aeronautical" <?php if($ug_discipline=="Aeronautical") echo 'selected="selected"'; ?>>Aeronautical</option>
<option value="Aerospace Engineering" <?php if($ug_discipline=="Aerospace Engineering") echo 'selected="selected"'; ?>>Aerospace Engineering</option>
<option value="Aerospace Propulsion" <?php if($ug_discipline=="Aerospace Propulsion") echo 'selected="selected"'; ?>>Aerospace Propulsion</option>
<option value="Aerospace" <?php if($ug_discipline=="Aerospace") echo 'selected="selected"'; ?>>Aerospace</option>
<option value="Agricultural Biotechnology" <?php if($ug_discipline=="Agricultural Biotechnology") echo 'selected="selected"'; ?>>Agricultural Biotechnology</option>
<option value="Agricultural Botany" <?php if($ug_discipline=="Agricultural Botany") echo 'selected="selected"'; ?>>Agricultural Botany</option>
<option value="Agricultural Economics and Business Management" <?php if($ug_discipline=="Agricultural Economics and Business Management") echo 'selected="selected"'; ?>>Agricultural Economics and Business Management</option>
<option value="Agricultural Economics" <?php if($ug_discipline=="Agricultural Economics") echo 'selected="selected"'; ?>>Agricultural Economics</option>
<option value="Agricultural Engineering" <?php if($ug_discipline=="Agricultural Engineering") echo 'selected="selected"'; ?>>Agricultural Engineering</option>
<option value="Agricultural Extension Education" <?php if($ug_discipline=="Agricultural Extension Education") echo 'selected="selected"'; ?>>Agricultural Extension Education</option>
<option value="Agricultural Microbiology" <?php if($ug_discipline=="Agricultural Microbiology") echo 'selected="selected"'; ?>>Agricultural Microbiology</option>
<option value="Agricultural Physics" <?php if($ug_discipline=="Agricultural Physics") echo 'selected="selected"'; ?>>Agricultural Physics</option>
<option value="Agricultural Statistics" <?php if($ug_discipline=="Agricultural Statistics") echo 'selected="selected"'; ?>>Agricultural Statistics</option>
<option value="Agricultural" <?php if($ug_discipline=="Agricultural") echo 'selected="selected"'; ?>>Agricultural</option>
<option value="Agriculture Chemistry and Soil Science" <?php if($ug_discipline=="Agriculture Chemistry and Soil Science") echo 'selected="selected"'; ?>>Agriculture Chemistry and Soil Science</option>
<option value="Agriculture and Food Engineering" <?php if($ug_discipline=="Agriculture and Food Engineering") echo 'selected="selected"'; ?>>Agriculture and Food Engineering</option>
<option value="Agriculture" <?php if($ug_discipline=="Agriculture") echo 'selected="selected"'; ?>>Agriculture</option>
<option value="Agro-meteorology" <?php if($ug_discipline=="Agro-meteorology") echo 'selected="selected"'; ?>>Agro-meteorology</option>
<option value="Agroforestry" <?php if($ug_discipline=="Agroforestry") echo 'selected="selected"'; ?>>Agroforestry</option>
<option value="Agronomy" <?php if($ug_discipline=="Agronomy") echo 'selected="selected"'; ?>>Agronomy</option>
<option value="Air Armament" <?php if($ug_discipline=="Air Armament") echo 'selected="selected"'; ?>>Air Armament</option>
<option value="Airlines Tourism and Hospitality Management" <?php if($ug_discipline=="Airlines Tourism and Hospitality Management") echo 'selected="selected"'; ?>>Airlines Tourism and Hospitality Management</option>
<option value="Alloy Technology" <?php if($ug_discipline=="Alloy Technology") echo 'selected="selected"'; ?>>Alloy Technology</option>
<option value="Anaesthesia Technology" <?php if($ug_discipline=="Anaesthesia Technology") echo 'selected="selected"'; ?>>Anaesthesia Technology</option>
<option value="Analytical Chemistry" <?php if($ug_discipline=="Analytical Chemistry") echo 'selected="selected"'; ?>>Analytical Chemistry</option>
<option value="Anatomy" <?php if($ug_discipline=="Anatomy") echo 'selected="selected"'; ?>>Anatomy</option>
<option value="Animal Biotechnology" <?php if($ug_discipline=="Animal Biotechnology") echo 'selected="selected"'; ?>>Animal Biotechnology</option>
<option value="Animal Nutrition" <?php if($ug_discipline=="Animal Nutrition") echo 'selected="selected"'; ?>>Animal Nutrition</option>
<option value="Animal Science" <?php if($ug_discipline=="Animal Science") echo 'selected="selected"'; ?>>Animal Science</option>
<option value="Animation Filmmaking" <?php if($ug_discipline=="Animation Filmmaking") echo 'selected="selected"'; ?>>Animation Filmmaking</option>
<option value="Animation and Visual Effects" <?php if($ug_discipline=="Animation and Visual Effects") echo 'selected="selected"'; ?>>Animation and Visual Effects</option>
<option value="Animation" <?php if($ug_discipline=="Animation") echo 'selected="selected"'; ?>>Animation</option>
<option value="Anthropology" <?php if($ug_discipline=="Anthropology") echo 'selected="selected"'; ?>>Anthropology</option>
<option value="Apparel Technology and Management" <?php if($ug_discipline=="Apparel Technology and Management") echo 'selected="selected"'; ?>>Apparel Technology and Management</option>
<option value="Apparel and Textiles" <?php if($ug_discipline=="Apparel and Textiles") echo 'selected="selected"'; ?>>Apparel and Textiles</option>
<option value="Applications of Mathematics" <?php if($ug_discipline=="Applications of Mathematics") echo 'selected="selected"'; ?>>Applications of Mathematics</option>
<option value="Applied Biology" <?php if($ug_discipline=="Applied Biology") echo 'selected="selected"'; ?>>Applied Biology</option>
<option value="Applied Biotechnology" <?php if($ug_discipline=="Applied Biotechnology") echo 'selected="selected"'; ?>>Applied Biotechnology</option>
<option value="Applied Chemistry" <?php if($ug_discipline=="Applied Chemistry") echo 'selected="selected"'; ?>>Applied Chemistry</option>
<option value="Applied Econometrics and Business Forecasting" <?php if($ug_discipline=="Applied Econometrics and Business Forecasting") echo 'selected="selected"'; ?>>Applied Econometrics and Business Forecasting</option>
<option value="Applied Economics" <?php if($ug_discipline=="Applied Economics") echo 'selected="selected"'; ?>>Applied Economics</option>
<option value="Applied Electronics and Instrumentation" <?php if($ug_discipline=="Applied Electronics and Instrumentation") echo 'selected="selected"'; ?>>Applied Electronics and Instrumentation</option>
<option value="Applied Electronics" <?php if($ug_discipline=="Applied Electronics") echo 'selected="selected"'; ?>>Applied Electronics</option>
<option value="Applied Fisheries and Aquaculture" <?php if($ug_discipline=="Applied Fisheries and Aquaculture") echo 'selected="selected"'; ?>>Applied Fisheries and Aquaculture</option>
<option value="Applied Genetics" <?php if($ug_discipline=="Applied Genetics") echo 'selected="selected"'; ?>>Applied Genetics</option>
<option value="Applied Geography" <?php if($ug_discipline=="Applied Geography") echo 'selected="selected"'; ?>>Applied Geography</option>
<option value="Applied Geology" <?php if($ug_discipline=="Applied Geology") echo 'selected="selected"'; ?>>Applied Geology</option>
<option value="Applied Geophysics" <?php if($ug_discipline=="Applied Geophysics") echo 'selected="selected"'; ?>>Applied Geophysics</option>
<option value="Applied Mathematics and Computing" <?php if($ug_discipline=="Applied Mathematics and Computing") echo 'selected="selected"'; ?>>Applied Mathematics and Computing</option>
<option value="Applied Mathematics" <?php if($ug_discipline=="Applied Mathematics") echo 'selected="selected"'; ?>>Applied Mathematics</option>
<option value="Applied Mechanics" <?php if($ug_discipline=="Applied Mechanics") echo 'selected="selected"'; ?>>Applied Mechanics</option>
<option value="Applied Microbiology" <?php if($ug_discipline=="Applied Microbiology") echo 'selected="selected"'; ?>>Applied Microbiology</option>
<option value="Applied Nutrition" <?php if($ug_discipline=="Applied Nutrition") echo 'selected="selected"'; ?>>Applied Nutrition</option>
<option value="Applied Optics" <?php if($ug_discipline=="Applied Optics") echo 'selected="selected"'; ?>>Applied Optics</option>
<option value="Applied Physics" <?php if($ug_discipline=="Applied Physics") echo 'selected="selected"'; ?>>Applied Physics</option>
<option value="Applied Plant Science" <?php if($ug_discipline=="Applied Plant Science") echo 'selected="selected"'; ?>>Applied Plant Science</option>
<option value="Applied Psychology" <?php if($ug_discipline=="Applied Psychology") echo 'selected="selected"'; ?>>Applied Psychology</option>
<option value="Applied Science" <?php if($ug_discipline=="Applied Science") echo 'selected="selected"'; ?>>Applied Science</option>
<option value="Applied Statistics and Informatics" <?php if($ug_discipline=="Applied Statistics and Informatics") echo 'selected="selected"'; ?>>Applied Statistics and Informatics</option>
<option value="Applied Zoology" <?php if($ug_discipline=="Applied Zoology") echo 'selected="selected"'; ?>>Applied Zoology</option>
<option value="Aqua Cultural" <?php if($ug_discipline=="Aqua Cultural") echo 'selected="selected"'; ?>>Aqua Cultural</option>
<option value="Aquaculture" <?php if($ug_discipline=="Aquaculture") echo 'selected="selected"'; ?>>Aquaculture</option>
<option value="Aqualogy" <?php if($ug_discipline=="Aqualogy") echo 'selected="selected"'; ?>>Aqualogy</option>
<option value="Aquatic Biology and Fisheries" <?php if($ug_discipline=="Aquatic Biology and Fisheries") echo 'selected="selected"'; ?>>Aquatic Biology and Fisheries</option>
<option value="Architectural Engineering" <?php if($ug_discipline=="Architectural Engineering") echo 'selected="selected"'; ?>>Architectural Engineering</option>
<option value="Architecture Urban Design" <?php if($ug_discipline=="Architecture Urban Design") echo 'selected="selected"'; ?>>Architecture Urban Design</option>
<option value="Architecture" <?php if($ug_discipline=="Architecture") echo 'selected="selected"'; ?>>Architecture</option>
<option value="Artificial Intelligence and Machine Learning" <?php if($ug_discipline=="Artificial Intelligence and Machine Learning") echo 'selected="selected"'; ?>>Artificial Intelligence and Machine Learning</option>
<option value="Artificial Intelligence" <?php if($ug_discipline=="Artificial Intelligence") echo 'selected="selected"'; ?>>Artificial Intelligence</option>
<option value="Assistant Engineer" <?php if($ug_discipline=="Assistant Engineer") echo 'selected="selected"'; ?>>Assistant Engineer</option>
<option value="Astronomy and Space Physics" <?php if($ug_discipline=="Astronomy and Space Physics") echo 'selected="selected"'; ?>>Astronomy and Space Physics</option>
<option value="Astronomy" <?php if($ug_discipline=="Astronomy") echo 'selected="selected"'; ?>>Astronomy</option>
<option value="Astrophysics" <?php if($ug_discipline=="Astrophysics") echo 'selected="selected"'; ?>>Astrophysics</option>
<option value="Athletic Training" <?php if($ug_discipline=="Athletic Training") echo 'selected="selected"'; ?>>Athletic Training</option>
<option value="Audio Speech Therapy" <?php if($ug_discipline=="Audio Speech Therapy") echo 'selected="selected"'; ?>>Audio Speech Therapy</option>
<option value="Audiology and Speech Language Pathology" <?php if($ug_discipline=="Audiology and Speech Language Pathology") echo 'selected="selected"'; ?>>Audiology and Speech Language Pathology</option>
<option value="Audiology and Speech Rehabilitation" <?php if($ug_discipline=="Audiology and Speech Rehabilitation") echo 'selected="selected"'; ?>>Audiology and Speech Rehabilitation</option>
<option value="Audiology" <?php if($ug_discipline=="Audiology") echo 'selected="selected"'; ?>>Audiology</option>
<option value="Automobile Engineer" <?php if($ug_discipline=="Automobile Engineer") echo 'selected="selected"'; ?>>Automobile Engineer</option>
<option value="Automobile Engineering" <?php if($ug_discipline=="Automobile Engineering") echo 'selected="selected"'; ?>>Automobile Engineering</option>
<option value="Automobile" <?php if($ug_discipline=="Automobile") echo 'selected="selected"'; ?>>Automobile</option>
<option value="Automobile/Automotive" <?php if($ug_discipline=="Automobile/Automotive") echo 'selected="selected"'; ?>>Automobile/Automotive</option>
<option value="Automotive Engineering" <?php if($ug_discipline=="Automotive Engineering") echo 'selected="selected"'; ?>>Automotive Engineering</option>
<option value="Automotive" <?php if($ug_discipline=="Automotive") echo 'selected="selected"'; ?>>Automotive</option>
<option value="Aviation" <?php if($ug_discipline=="Aviation") echo 'selected="selected"'; ?>>Aviation</option>
<option value="Avionics" <?php if($ug_discipline=="Avionics") echo 'selected="selected"'; ?>>Avionics</option>
<option value="Bacteriology" <?php if($ug_discipline=="Bacteriology") echo 'selected="selected"'; ?>>Bacteriology</option>
<option value="Banking and Finance" <?php if($ug_discipline=="Banking and Finance") echo 'selected="selected"'; ?>>Banking and Finance</option>
<option value="Beauty Cosmetology" <?php if($ug_discipline=="Beauty Cosmetology") echo 'selected="selected"'; ?>>Beauty Cosmetology</option>
<option value="Big Data Analytics" <?php if($ug_discipline=="Big Data Analytics") echo 'selected="selected"'; ?>>Big Data Analytics</option>
<option value="Bio Mineral Processing" <?php if($ug_discipline=="Bio Mineral Processing") echo 'selected="selected"'; ?>>Bio Mineral Processing</option>
<option value="Bio Mineral" <?php if($ug_discipline=="Bio Mineral") echo 'selected="selected"'; ?>>Bio Mineral</option>
<option value="Bio Pharmaceutical Technology" <?php if($ug_discipline=="Bio Pharmaceutical Technology") echo 'selected="selected"'; ?>>Bio Pharmaceutical Technology</option>
<option value="Bio-informatics" <?php if($ug_discipline=="Bio-informatics") echo 'selected="selected"'; ?>>Bio-informatics</option>
<option value="Bio-textiles" <?php if($ug_discipline=="Bio-textiles") echo 'selected="selected"'; ?>>Bio-textiles</option>
<option value="BioInformatics" <?php if($ug_discipline=="BioInformatics") echo 'selected="selected"'; ?>>BioInformatics</option>
<option value="Biochemical" <?php if($ug_discipline=="Biochemical") echo 'selected="selected"'; ?>>Biochemical</option>
<option value="Biochemistry" <?php if($ug_discipline=="Biochemistry") echo 'selected="selected"'; ?>>Biochemistry</option>
<option value="Biodiversity and Conservation" <?php if($ug_discipline=="Biodiversity and Conservation") echo 'selected="selected"'; ?>>Biodiversity and Conservation</option>
<option value="Bioinformatics" <?php if($ug_discipline=="Bioinformatics") echo 'selected="selected"'; ?>>Bioinformatics</option>
<option value="Biological Science" <?php if($ug_discipline=="Biological Science") echo 'selected="selected"'; ?>>Biological Science</option>
<option value="Biological Sciences" <?php if($ug_discipline=="Biological Sciences") echo 'selected="selected"'; ?>>Biological Sciences</option>
<option value="Biology" <?php if($ug_discipline=="Biology") echo 'selected="selected"'; ?>>Biology</option>
<option value="Biomaterials and Tissue Engineering" <?php if($ug_discipline=="Biomaterials and Tissue Engineering") echo 'selected="selected"'; ?>>Biomaterials and Tissue Engineering</option>
<option value="Biomedical Engineering" <?php if($ug_discipline=="Biomedical Engineering") echo 'selected="selected"'; ?>>Biomedical Engineering</option>
<option value="Biomedical Genetics" <?php if($ug_discipline=="Biomedical Genetics") echo 'selected="selected"'; ?>>Biomedical Genetics</option>
<option value="Biomedical Science" <?php if($ug_discipline=="Biomedical Science") echo 'selected="selected"'; ?>>Biomedical Science</option>
<option value="Biomedical Sciences" <?php if($ug_discipline=="Biomedical Sciences") echo 'selected="selected"'; ?>>Biomedical Sciences</option>
<option value="Biomedical" <?php if($ug_discipline=="Biomedical") echo 'selected="selected"'; ?>>Biomedical</option>
<option value="Biophysics" <?php if($ug_discipline=="Biophysics") echo 'selected="selected"'; ?>>Biophysics</option>
<option value="Bioprocess Technology" <?php if($ug_discipline=="Bioprocess Technology") echo 'selected="selected"'; ?>>Bioprocess Technology</option>
<option value="Bioresource Management" <?php if($ug_discipline=="Bioresource Management") echo 'selected="selected"'; ?>>Bioresource Management</option>
<option value="Bioscience" <?php if($ug_discipline=="Bioscience") echo 'selected="selected"'; ?>>Bioscience</option>
<option value="Biostatistics" <?php if($ug_discipline=="Biostatistics") echo 'selected="selected"'; ?>>Biostatistics</option>
<option value="Biotech Engineering" <?php if($ug_discipline=="Biotech Engineering") echo 'selected="selected"'; ?>>Biotech Engineering</option>
<option value="Biotechnology Engineering" <?php if($ug_discipline=="Biotechnology Engineering") echo 'selected="selected"'; ?>>Biotechnology Engineering</option>
<option value="Biotechnology" <?php if($ug_discipline=="Biotechnology") echo 'selected="selected"'; ?>>Biotechnology</option>
<option value="Biotechnology" <?php if($ug_discipline=="Biotechnology") echo 'selected="selected"'; ?>>Biotechnology</option>
<option value="Botany hons" <?php if($ug_discipline=="Botany hons") echo 'selected="selected"'; ?>>Botany hons</option>
<option value="Botany" <?php if($ug_discipline=="Botany") echo 'selected="selected"'; ?>>Botany</option>
<option value="Business Administration Finance" <?php if($ug_discipline=="Business Administration Finance") echo 'selected="selected"'; ?>>Business Administration Finance</option>
<option value="Business Administration Human Resource" <?php if($ug_discipline=="Business Administration Human Resource") echo 'selected="selected"'; ?>>Business Administration Human Resource</option>
<option value="Business Administration Information Tech." <?php if($ug_discipline=="Business Administration Information Tech.") echo 'selected="selected"'; ?>>Business Administration Information Tech.</option>
<option value="Business Administration Marketing" <?php if($ug_discipline=="Business Administration Marketing") echo 'selected="selected"'; ?>>Business Administration Marketing</option>
<option value="Business Administration" <?php if($ug_discipline=="Business Administration") echo 'selected="selected"'; ?>>Business Administration</option>
<option value="CAD CAM" <?php if($ug_discipline=="CAD CAM") echo 'selected="selected"'; ?>>CAD CAM</option>
<option value="CAD/CAM" <?php if($ug_discipline=="CAD/CAM") echo 'selected="selected"'; ?>>CAD/CAM</option>
<option value="Cardiac Perfusion" <?php if($ug_discipline=="Cardiac Perfusion") echo 'selected="selected"'; ?>>Cardiac Perfusion</option>
<option value="Cardiovascular Technology" <?php if($ug_discipline=="Cardiovascular Technology") echo 'selected="selected"'; ?>>Cardiovascular Technology</option>
<option value="Cell and Molecular Biology" <?php if($ug_discipline=="Cell and Molecular Biology") echo 'selected="selected"'; ?>>Cell and Molecular Biology</option>
<option value="Ceramic Engineering" <?php if($ug_discipline=="Ceramic Engineering") echo 'selected="selected"'; ?>>Ceramic Engineering</option>
<option value="Ceramic" <?php if($ug_discipline=="Ceramic") echo 'selected="selected"'; ?>>Ceramic</option>
<option value="Chemical Engineering" <?php if($ug_discipline=="Chemical Engineering") echo 'selected="selected"'; ?>>Chemical Engineering</option>
<option value="Chemical Sciences" <?php if($ug_discipline=="Chemical Sciences") echo 'selected="selected"'; ?>>Chemical Sciences</option>
<option value="Chemical" <?php if($ug_discipline=="Chemical") echo 'selected="selected"'; ?>>Chemical</option>
<option value="Chemistry hons" <?php if($ug_discipline=="Chemistry hons") echo 'selected="selected"'; ?>>Chemistry hons</option>
<option value="Chemistry" <?php if($ug_discipline=="Chemistry") echo 'selected="selected"'; ?>>Chemistry</option>
<option value="Chief Engineer" <?php if($ug_discipline=="Chief Engineer") echo 'selected="selected"'; ?>>Chief Engineer</option>
<option value="Chief" <?php if($ug_discipline=="Chief") echo 'selected="selected"'; ?>>Chief</option>
<option value="Child Guidance and Family Counselling" <?php if($ug_discipline=="Child Guidance and Family Counselling") echo 'selected="selected"'; ?>>Child Guidance and Family Counselling</option>
<option value="Child Health Nursing" <?php if($ug_discipline=="Child Health Nursing") echo 'selected="selected"'; ?>>Child Health Nursing</option>
<option value="Cinematography" <?php if($ug_discipline=="Cinematography") echo 'selected="selected"'; ?>>Cinematography</option>
<option value="Civil Engineering" <?php if($ug_discipline=="Civil Engineering") echo 'selected="selected"'; ?>>Civil Engineering</option>
<option value="Civil Science" <?php if($ug_discipline=="Civil Science") echo 'selected="selected"'; ?>>Civil Science</option>
<option value="Civil" <?php if($ug_discipline=="Civil") echo 'selected="selected"'; ?>>Civil</option>
<option value="Clinical Laboratory Science" <?php if($ug_discipline=="Clinical Laboratory Science") echo 'selected="selected"'; ?>>Clinical Laboratory Science</option>
<option value="Clinical Microbiology" <?php if($ug_discipline=="Clinical Microbiology") echo 'selected="selected"'; ?>>Clinical Microbiology</option>
<option value="Clinical Nutrition" <?php if($ug_discipline=="Clinical Nutrition") echo 'selected="selected"'; ?>>Clinical Nutrition</option>
<option value="Clinical Psychology" <?php if($ug_discipline=="Clinical Psychology") echo 'selected="selected"'; ?>>Clinical Psychology</option>
<option value="Clinical Research and Regulatory Affairs" <?php if($ug_discipline=="Clinical Research and Regulatory Affairs") echo 'selected="selected"'; ?>>Clinical Research and Regulatory Affairs</option>
<option value="Clinical Research" <?php if($ug_discipline=="Clinical Research") echo 'selected="selected"'; ?>>Clinical Research</option>
<option value="Clothing and Textiles" <?php if($ug_discipline=="Clothing and Textiles") echo 'selected="selected"'; ?>>Clothing and Textiles</option>
<option value="Cloud Computing" <?php if($ug_discipline=="Cloud Computing") echo 'selected="selected"'; ?>>Cloud Computing</option>
<option value="Co-operation and BankingCo-Operative Management" <?php if($ug_discipline=="Co-operation and BankingCo-Operative Management") echo 'selected="selected"'; ?>>Co-operation and BankingCo-Operative Management</option>
<option value="Coastal and Disaster Management" <?php if($ug_discipline=="Coastal and Disaster Management") echo 'selected="selected"'; ?>>Coastal and Disaster Management</option>
<option value="Cognitive Science" <?php if($ug_discipline=="Cognitive Science") echo 'selected="selected"'; ?>>Cognitive Science</option>
<option value="Commerce Accountancy" <?php if($ug_discipline=="Commerce Accountancy") echo 'selected="selected"'; ?>>Commerce Accountancy</option>
<option value="Commerce Accounting and Finance" <?php if($ug_discipline=="Commerce Accounting and Finance") echo 'selected="selected"'; ?>>Commerce Accounting and Finance</option>
<option value="Commerce Computer Applications" <?php if($ug_discipline=="Commerce Computer Applications") echo 'selected="selected"'; ?>>Commerce Computer Applications</option>
<option value="Commerce Finance" <?php if($ug_discipline=="Commerce Finance") echo 'selected="selected"'; ?>>Commerce Finance</option>
<option value="Commerce" <?php if($ug_discipline=="Commerce") echo 'selected="selected"'; ?>>Commerce</option>
<option value="Communication Design" <?php if($ug_discipline=="Communication Design") echo 'selected="selected"'; ?>>Communication Design</option>
<option value="Communication Media for Children" <?php if($ug_discipline=="Communication Media for Children") echo 'selected="selected"'; ?>>Communication Media for Children</option>
<option value="Communication Systems" <?php if($ug_discipline=="Communication Systems") echo 'selected="selected"'; ?>>Communication Systems</option>
<option value="Communication" <?php if($ug_discipline=="Communication") echo 'selected="selected"'; ?>>Communication</option>
<option value="Communications Engineering" <?php if($ug_discipline=="Communications Engineering") echo 'selected="selected"'; ?>>Communications Engineering</option>
<option value="Community Health Nursing" <?php if($ug_discipline=="Community Health Nursing") echo 'selected="selected"'; ?>>Community Health Nursing</option>
<option value="Computational Biology" <?php if($ug_discipline=="Computational Biology") echo 'selected="selected"'; ?>>Computational Biology</option>
<option value="Computer Animation and Visual Effects" <?php if($ug_discipline=="Computer Animation and Visual Effects") echo 'selected="selected"'; ?>>Computer Animation and Visual Effects</option>
<option value="Computer Applications" <?php if($ug_discipline=="Computer Applications") echo 'selected="selected"'; ?>>Computer Applications</option>
<option value="Computer Communication" <?php if($ug_discipline=="Computer Communication") echo 'selected="selected"'; ?>>Computer Communication</option>
<option value="Computer Engineering" <?php if($ug_discipline=="Computer Engineering") echo 'selected="selected"'; ?>>Computer Engineering</option>
<option value="Computer Integrated Manufacturing" <?php if($ug_discipline=="Computer Integrated Manufacturing") echo 'selected="selected"'; ?>>Computer Integrated Manufacturing</option>
<option value="Computer Network and Information Security" <?php if($ug_discipline=="Computer Network and Information Security") echo 'selected="selected"'; ?>>Computer Network and Information Security</option>
<option value="Computer Network" <?php if($ug_discipline=="Computer Network") echo 'selected="selected"'; ?>>Computer Network</option>
<option value="Computer Science Engineering" <?php if($ug_discipline=="Computer Science Engineering") echo 'selected="selected"'; ?>>Computer Science Engineering</option>
<option value="Computer Science Technology" <?php if($ug_discipline=="Computer Science Technology") echo 'selected="selected"'; ?>>Computer Science Technology</option>
<option value="Computer Science and Engineering" <?php if($ug_discipline=="Computer Science and Engineering") echo 'selected="selected"'; ?>>Computer Science and Engineering</option>
<option value="Computer Science and Technology" <?php if($ug_discipline=="Computer Science and Technology") echo 'selected="selected"'; ?>>Computer Science and Technology</option>
<option value="Computer Science" <?php if($ug_discipline=="Computer Science") echo 'selected="selected"'; ?>>Computer Science</option>
<option value="Computer Technology" <?php if($ug_discipline=="Computer Technology") echo 'selected="selected"'; ?>>Computer Technology</option>
<option value="Computer" <?php if($ug_discipline=="Computer") echo 'selected="selected"'; ?>>Computer</option>
<option value="Conservation Biology" <?php if($ug_discipline=="Conservation Biology") echo 'selected="selected"'; ?>>Conservation Biology</option>
<option value="Constitutional Law" <?php if($ug_discipline=="Constitutional Law") echo 'selected="selected"'; ?>>Constitutional Law</option>
<option value="Construction Engineering" <?php if($ug_discipline=="Construction Engineering") echo 'selected="selected"'; ?>>Construction Engineering</option>
<option value="Construction Management" <?php if($ug_discipline=="Construction Management") echo 'selected="selected"'; ?>>Construction Management</option>
<option value="Construction Technology" <?php if($ug_discipline=="Construction Technology") echo 'selected="selected"'; ?>>Construction Technology</option>
<option value="Construction and Management" <?php if($ug_discipline=="Construction and Management") echo 'selected="selected"'; ?>>Construction and Management</option>
<option value="Control Systems" <?php if($ug_discipline=="Control Systems") echo 'selected="selected"'; ?>>Control Systems</option>
<option value="Control and Instrumentation" <?php if($ug_discipline=="Control and Instrumentation") echo 'selected="selected"'; ?>>Control and Instrumentation</option>
<option value="Corporate Law" <?php if($ug_discipline=="Corporate Law") echo 'selected="selected"'; ?>>Corporate Law</option>
<option value="Costume Design and Fashion" <?php if($ug_discipline=="Costume Design and Fashion") echo 'selected="selected"'; ?>>Costume Design and Fashion</option>
<option value="Counseling Psychology" <?php if($ug_discipline=="Counseling Psychology") echo 'selected="selected"'; ?>>Counseling Psychology</option>
<option value="Counselling" <?php if($ug_discipline=="Counselling") echo 'selected="selected"'; ?>>Counselling</option>
<option value="Criminal Justice" <?php if($ug_discipline=="Criminal Justice") echo 'selected="selected"'; ?>>Criminal Justice</option>
<option value="Criminal Law" <?php if($ug_discipline=="Criminal Law") echo 'selected="selected"'; ?>>Criminal Law</option>
<option value="Criminology and Criminal Justice" <?php if($ug_discipline=="Criminology and Criminal Justice") echo 'selected="selected"'; ?>>Criminology and Criminal Justice</option>
<option value="Criminology" <?php if($ug_discipline=="Criminology") echo 'selected="selected"'; ?>>Criminology</option>
<option value="Cyber Law and Information Security" <?php if($ug_discipline=="Cyber Law and Information Security") echo 'selected="selected"'; ?>>Cyber Law and Information Security</option>
<option value="Cyber Security" <?php if($ug_discipline=="Cyber Security") echo 'selected="selected"'; ?>>Cyber Security</option>
<option value="Dairy Engineering" <?php if($ug_discipline=="Dairy Engineering") echo 'selected="selected"'; ?>>Dairy Engineering</option>
<option value="Dairy Science" <?php if($ug_discipline=="Dairy Science") echo 'selected="selected"'; ?>>Dairy Science</option>
<option value="Dairy Technology" <?php if($ug_discipline=="Dairy Technology") echo 'selected="selected"'; ?>>Dairy Technology</option>
<option value="Data Analytics" <?php if($ug_discipline=="Data Analytics") echo 'selected="selected"'; ?>>Data Analytics</option>
<option value="Data Mining and Warehousing" <?php if($ug_discipline=="Data Mining and Warehousing") echo 'selected="selected"'; ?>>Data Mining and Warehousing</option>
<option value="Data Science" <?php if($ug_discipline=="Data Science") echo 'selected="selected"'; ?>>Data Science</option>
<option value="Dental Surgery" <?php if($ug_discipline=="Dental Surgery") echo 'selected="selected"'; ?>>Dental Surgery</option>
<option value="Design and Manufacturing" <?php if($ug_discipline=="Design and Manufacturing") echo 'selected="selected"'; ?>>Design and Manufacturing</option>
<option value="Design" <?php if($ug_discipline=="Design") echo 'selected="selected"'; ?>>Design</option>
<option value="Development Communications" <?php if($ug_discipline=="Development Communications") echo 'selected="selected"'; ?>>Development Communications</option>
<option value="Development Studies" <?php if($ug_discipline=="Development Studies") echo 'selected="selected"'; ?>>Development Studies</option>
<option value="Dietetics" <?php if($ug_discipline=="Dietetics") echo 'selected="selected"'; ?>>Dietetics</option>
<option value="Digital Communication and Networking" <?php if($ug_discipline=="Digital Communication and Networking") echo 'selected="selected"'; ?>>Digital Communication and Networking</option>
<option value="Digital Communication" <?php if($ug_discipline=="Digital Communication") echo 'selected="selected"'; ?>>Digital Communication</option>
<option value="Digital Electronics and Communication Systems" <?php if($ug_discipline=="Digital Electronics and Communication Systems") echo 'selected="selected"'; ?>>Digital Electronics and Communication Systems</option>
<option value="Digital Electronics and Communication" <?php if($ug_discipline=="Digital Electronics and Communication") echo 'selected="selected"'; ?>>Digital Electronics and Communication</option>
<option value="Digital Filmmaking" <?php if($ug_discipline=="Digital Filmmaking") echo 'selected="selected"'; ?>>Digital Filmmaking</option>
<option value="Digital System and Signal Processing" <?php if($ug_discipline=="Digital System and Signal Processing") echo 'selected="selected"'; ?>>Digital System and Signal Processing</option>
<option value="Digital Systems and Computer Electronics" <?php if($ug_discipline=="Digital Systems and Computer Electronics") echo 'selected="selected"'; ?>>Digital Systems and Computer Electronics</option>
<option value="Disaster Mitigation" <?php if($ug_discipline=="Disaster Mitigation") echo 'selected="selected"'; ?>>Disaster Mitigation</option>
<option value="Dot Multimedia" <?php if($ug_discipline=="Dot Multimedia") echo 'selected="selected"'; ?>>Dot Multimedia</option>
<option value="Drug Chemistry" <?php if($ug_discipline=="Drug Chemistry") echo 'selected="selected"'; ?>>Drug Chemistry</option>
<option value="E-Learning Technology" <?php if($ug_discipline=="E-Learning Technology") echo 'selected="selected"'; ?>>E-Learning Technology</option>
<option value="Earth Science and Resource Management" <?php if($ug_discipline=="Earth Science and Resource Management") echo 'selected="selected"'; ?>>Earth Science and Resource Management</option>
<option value="Earth Science" <?php if($ug_discipline=="Earth Science") echo 'selected="selected"'; ?>>Earth Science</option>
<option value="Earth Sciences" <?php if($ug_discipline=="Earth Sciences") echo 'selected="selected"'; ?>>Earth Sciences</option>
<option value="Earth System Science" <?php if($ug_discipline=="Earth System Science") echo 'selected="selected"'; ?>>Earth System Science</option>
<option value="Earthquake" <?php if($ug_discipline=="Earthquake") echo 'selected="selected"'; ?>>Earthquake</option>
<option value="Eco Restoration" <?php if($ug_discipline=="Eco Restoration") echo 'selected="selected"'; ?>>Eco Restoration</option>
<option value="Ecology and Environmental Science" <?php if($ug_discipline=="Ecology and Environmental Science") echo 'selected="selected"'; ?>>Ecology and Environmental Science</option>
<option value="Ecology" <?php if($ug_discipline=="Ecology") echo 'selected="selected"'; ?>>Ecology</option>
<option value="Economics and Finance" <?php if($ug_discipline=="Economics and Finance") echo 'selected="selected"'; ?>>Economics and Finance</option>
<option value="Economics" <?php if($ug_discipline=="Economics") echo 'selected="selected"'; ?>>Economics</option>
<option value="Ecotourism" <?php if($ug_discipline=="Ecotourism") echo 'selected="selected"'; ?>>Ecotourism</option>
<option value="Education" <?php if($ug_discipline=="Education") echo 'selected="selected"'; ?>>Education</option>
<option value="Electrical Devices and Power Systems" <?php if($ug_discipline=="Electrical Devices and Power Systems") echo 'selected="selected"'; ?>>Electrical Devices and Power Systems</option>
<option value="Electrical Engineering" <?php if($ug_discipline=="Electrical Engineering") echo 'selected="selected"'; ?>>Electrical Engineering</option>
<option value="Electrical and Electronics Engineering" <?php if($ug_discipline=="Electrical and Electronics Engineering") echo 'selected="selected"'; ?>>Electrical and Electronics Engineering</option>
<option value="Electrical and Electronics" <?php if($ug_discipline=="Electrical and Electronics") echo 'selected="selected"'; ?>>Electrical and Electronics</option>
<option value="Electrical power system" <?php if($ug_discipline=="Electrical power system") echo 'selected="selected"'; ?>>Electrical power system</option>
<option value="Electrical" <?php if($ug_discipline=="Electrical") echo 'selected="selected"'; ?>>Electrical</option>
<option value="Electro Chemistry" <?php if($ug_discipline=="Electro Chemistry") echo 'selected="selected"'; ?>>Electro Chemistry</option>
<option value="Electronic Media" <?php if($ug_discipline=="Electronic Media") echo 'selected="selected"'; ?>>Electronic Media</option>
<option value="Electronic Science" <?php if($ug_discipline=="Electronic Science") echo 'selected="selected"'; ?>>Electronic Science</option>
<option value="Electronics Engineer" <?php if($ug_discipline=="Electronics Engineer") echo 'selected="selected"'; ?>>Electronics Engineer</option>
<option value="Electronics Engineering" <?php if($ug_discipline=="Electronics Engineering") echo 'selected="selected"'; ?>>Electronics Engineering</option>
<option value="Electronics and Communication" <?php if($ug_discipline=="Electronics and Communication") echo 'selected="selected"'; ?>>Electronics and Communication</option>
<option value="Electronics and Communications Engineering" <?php if($ug_discipline=="Electronics and Communications Engineering") echo 'selected="selected"'; ?>>Electronics and Communications Engineering</option>
<option value="Electronics and Electrical" <?php if($ug_discipline=="Electronics and Electrical") echo 'selected="selected"'; ?>>Electronics and Electrical</option>
<option value="Electronics and Instrumentation" <?php if($ug_discipline=="Electronics and Instrumentation") echo 'selected="selected"'; ?>>Electronics and Instrumentation</option>
<option value="Electronics and Telecommunication" <?php if($ug_discipline=="Electronics and Telecommunication") echo 'selected="selected"'; ?>>Electronics and Telecommunication</option>
<option value="Electronics and Telecommunications" <?php if($ug_discipline=="Electronics and Telecommunications") echo 'selected="selected"'; ?>>Electronics and Telecommunications</option>
<option value="Electronics" <?php if($ug_discipline=="Electronics") echo 'selected="selected"'; ?>>Electronics</option>
<option value="Embedded System Technologies" <?php if($ug_discipline=="Embedded System Technologies") echo 'selected="selected"'; ?>>Embedded System Technologies</option>
<option value="Embedded System and VLSI Design" <?php if($ug_discipline=="Embedded System and VLSI Design") echo 'selected="selected"'; ?>>Embedded System and VLSI Design</option>
<option value="Embedded Systems" <?php if($ug_discipline=="Embedded Systems") echo 'selected="selected"'; ?>>Embedded Systems</option>
<option value="Endocrinology" <?php if($ug_discipline=="Endocrinology") echo 'selected="selected"'; ?>>Endocrinology</option>
<option value="Energy Systems" <?php if($ug_discipline=="Energy Systems") echo 'selected="selected"'; ?>>Energy Systems</option>
<option value="Energy" <?php if($ug_discipline=="Energy") echo 'selected="selected"'; ?>>Energy</option>
<option value="Engineering Physics" <?php if($ug_discipline=="Engineering Physics") echo 'selected="selected"'; ?>>Engineering Physics</option>
<option value="English" <?php if($ug_discipline=="English") echo 'selected="selected"'; ?>>English</option>
<option value="Entomology" <?php if($ug_discipline=="Entomology") echo 'selected="selected"'; ?>>Entomology</option>
<option value="Entrepreneurship" <?php if($ug_discipline=="Entrepreneurship") echo 'selected="selected"'; ?>>Entrepreneurship</option>
<option value="Environment and Solid Waste Management" <?php if($ug_discipline=="Environment and Solid Waste Management") echo 'selected="selected"'; ?>>Environment and Solid Waste Management</option>
<option value="Environmental Engineering" <?php if($ug_discipline=="Environmental Engineering") echo 'selected="selected"'; ?>>Environmental Engineering</option>
<option value="Environmental Management" <?php if($ug_discipline=="Environmental Management") echo 'selected="selected"'; ?>>Environmental Management</option>
<option value="Environmental Science and Ecology" <?php if($ug_discipline=="Environmental Science and Ecology") echo 'selected="selected"'; ?>>Environmental Science and Ecology</option>
<option value="Environmental Science and Technology" <?php if($ug_discipline=="Environmental Science and Technology") echo 'selected="selected"'; ?>>Environmental Science and Technology</option>
<option value="Environmental Science" <?php if($ug_discipline=="Environmental Science") echo 'selected="selected"'; ?>>Environmental Science</option>
<option value="Environmental Studies" <?php if($ug_discipline=="Environmental Studies") echo 'selected="selected"'; ?>>Environmental Studies</option>
<option value="Environmental and Climate Change Management" <?php if($ug_discipline=="Environmental and Climate Change Management") echo 'selected="selected"'; ?>>Environmental and Climate Change Management</option>
<option value="Environmental" <?php if($ug_discipline=="Environmental") echo 'selected="selected"'; ?>>Environmental</option>
<option value="Epidemiology" <?php if($ug_discipline=="Epidemiology") echo 'selected="selected"'; ?>>Epidemiology</option>
<option value="Excavation" <?php if($ug_discipline=="Excavation") echo 'selected="selected"'; ?>>Excavation</option>
<option value="Executive Engineer" <?php if($ug_discipline=="Executive Engineer") echo 'selected="selected"'; ?>>Executive Engineer</option>
<option value="Executive" <?php if($ug_discipline=="Executive") echo 'selected="selected"'; ?>>Executive</option>
<option value="Extension and Communication" <?php if($ug_discipline=="Extension and Communication") echo 'selected="selected"'; ?>>Extension and Communication</option>
<option value="Fabric and Apparel Designing" <?php if($ug_discipline=="Fabric and Apparel Designing") echo 'selected="selected"'; ?>>Fabric and Apparel Designing</option>
<option value="Fashion Design and Technology" <?php if($ug_discipline=="Fashion Design and Technology") echo 'selected="selected"'; ?>>Fashion Design and Technology</option>
<option value="Fashion Design" <?php if($ug_discipline=="Fashion Design") echo 'selected="selected"'; ?>>Fashion Design</option>
<option value="Fashion Designing" <?php if($ug_discipline=="Fashion Designing") echo 'selected="selected"'; ?>>Fashion Designing</option>
<option value="Fashion Management" <?php if($ug_discipline=="Fashion Management") echo 'selected="selected"'; ?>>Fashion Management</option>
<option value="Fashion Promotion and Styling" <?php if($ug_discipline=="Fashion Promotion and Styling") echo 'selected="selected"'; ?>>Fashion Promotion and Styling</option>
<option value="Fashion Technology" <?php if($ug_discipline=="Fashion Technology") echo 'selected="selected"'; ?>>Fashion Technology</option>
<option value="Fashion and Apparel Design" <?php if($ug_discipline=="Fashion and Apparel Design") echo 'selected="selected"'; ?>>Fashion and Apparel Design</option>
<option value="Fashion and Textile Merchandising" <?php if($ug_discipline=="Fashion and Textile Merchandising") echo 'selected="selected"'; ?>>Fashion and Textile Merchandising</option>
<option value="Fermentation and Microbial Technology" <?php if($ug_discipline=="Fermentation and Microbial Technology") echo 'selected="selected"'; ?>>Fermentation and Microbial Technology</option>
<option value="Filmmaking" <?php if($ug_discipline=="Filmmaking") echo 'selected="selected"'; ?>>Filmmaking</option>
<option value="Finance" <?php if($ug_discipline=="Finance") echo 'selected="selected"'; ?>>Finance</option>
<option value="Financial Computing" <?php if($ug_discipline=="Financial Computing") echo 'selected="selected"'; ?>>Financial Computing</option>
<option value="Financial Economics and Administration" <?php if($ug_discipline=="Financial Economics and Administration") echo 'selected="selected"'; ?>>Financial Economics and Administration</option>
<option value="Financial Mathematics" <?php if($ug_discipline=="Financial Mathematics") echo 'selected="selected"'; ?>>Financial Mathematics</option>
<option value="Fire Protection Engineering" <?php if($ug_discipline=="Fire Protection Engineering") echo 'selected="selected"'; ?>>Fire Protection Engineering</option>
<option value="Fire Safety and Hazard Management" <?php if($ug_discipline=="Fire Safety and Hazard Management") echo 'selected="selected"'; ?>>Fire Safety and Hazard Management</option>
<option value="Fisheries Science" <?php if($ug_discipline=="Fisheries Science") echo 'selected="selected"'; ?>>Fisheries Science</option>
<option value="Floriculture and Landscaping" <?php if($ug_discipline=="Floriculture and Landscaping") echo 'selected="selected"'; ?>>Floriculture and Landscaping</option>
<option value="Fluid Dynamics" <?php if($ug_discipline=="Fluid Dynamics") echo 'selected="selected"'; ?>>Fluid Dynamics</option>
<option value="Fluids" <?php if($ug_discipline=="Fluids") echo 'selected="selected"'; ?>>Fluids</option>
<option value="Food Biotechnology" <?php if($ug_discipline=="Food Biotechnology") echo 'selected="selected"'; ?>>Food Biotechnology</option>
<option value="Food Chain Management" <?php if($ug_discipline=="Food Chain Management") echo 'selected="selected"'; ?>>Food Chain Management</option>
<option value="Food Nutrition" <?php if($ug_discipline=="Food Nutrition") echo 'selected="selected"'; ?>>Food Nutrition</option>
<option value="Food Process" <?php if($ug_discipline=="Food Process") echo 'selected="selected"'; ?>>Food Process</option>
<option value="Food Processing Technology" <?php if($ug_discipline=="Food Processing Technology") echo 'selected="selected"'; ?>>Food Processing Technology</option>
<option value="Food Quality Assurance" <?php if($ug_discipline=="Food Quality Assurance") echo 'selected="selected"'; ?>>Food Quality Assurance</option>
<option value="Food Science and Nutrition" <?php if($ug_discipline=="Food Science and Nutrition") echo 'selected="selected"'; ?>>Food Science and Nutrition</option>
<option value="Food Science and Quality Control" <?php if($ug_discipline=="Food Science and Quality Control") echo 'selected="selected"'; ?>>Food Science and Quality Control</option>
<option value="Food Science and Technology" <?php if($ug_discipline=="Food Science and Technology") echo 'selected="selected"'; ?>>Food Science and Technology</option>
<option value="Food Science" <?php if($ug_discipline=="Food Science") echo 'selected="selected"'; ?>>Food Science</option>
<option value="Food Sciences" <?php if($ug_discipline=="Food Sciences") echo 'selected="selected"'; ?>>Food Sciences</option>
<option value="Food Technology" <?php if($ug_discipline=="Food Technology") echo 'selected="selected"'; ?>>Food Technology</option>
<option value="Food and Nutrition" <?php if($ug_discipline=="Food and Nutrition") echo 'selected="selected"'; ?>>Food and Nutrition</option>
<option value="Foreign Service" <?php if($ug_discipline=="Foreign Service") echo 'selected="selected"'; ?>>Foreign Service</option>
<option value="Foreign Trade Management" <?php if($ug_discipline=="Foreign Trade Management") echo 'selected="selected"'; ?>>Foreign Trade Management</option>
<option value="Forensic Science and Criminology" <?php if($ug_discipline=="Forensic Science and Criminology") echo 'selected="selected"'; ?>>Forensic Science and Criminology</option>
<option value="Forensic Science" <?php if($ug_discipline=="Forensic Science") echo 'selected="selected"'; ?>>Forensic Science</option>
<option value="Forensic Sciences" <?php if($ug_discipline=="Forensic Sciences") echo 'selected="selected"'; ?>>Forensic Sciences</option>
<option value="Forestry" <?php if($ug_discipline=="Forestry") echo 'selected="selected"'; ?>>Forestry</option>
<option value="Fruit Science" <?php if($ug_discipline=="Fruit Science") echo 'selected="selected"'; ?>>Fruit Science</option>
<option value="Game Design and Development" <?php if($ug_discipline=="Game Design and Development") echo 'selected="selected"'; ?>>Game Design and Development</option>
<option value="Gaming" <?php if($ug_discipline=="Gaming") echo 'selected="selected"'; ?>>Gaming</option>
<option value="Garment Manufacturing Technology" <?php if($ug_discipline=="Garment Manufacturing Technology") echo 'selected="selected"'; ?>>Garment Manufacturing Technology</option>
<option value="Garment Production and Export Management" <?php if($ug_discipline=="Garment Production and Export Management") echo 'selected="selected"'; ?>>Garment Production and Export Management</option>
<option value="Gemology" <?php if($ug_discipline=="Gemology") echo 'selected="selected"'; ?>>Gemology</option>
<option value="General Biotechnology" <?php if($ug_discipline=="General Biotechnology") echo 'selected="selected"'; ?>>General Biotechnology</option>
<option value="General" <?php if($ug_discipline=="General") echo 'selected="selected"'; ?>>General</option>
<option value="Genetics Engineering" <?php if($ug_discipline=="Genetics Engineering") echo 'selected="selected"'; ?>>Genetics Engineering</option>
<option value="Genetics and Plant Breeding" <?php if($ug_discipline=="Genetics and Plant Breeding") echo 'selected="selected"'; ?>>Genetics and Plant Breeding</option>
<option value="Genetics" <?php if($ug_discipline=="Genetics") echo 'selected="selected"'; ?>>Genetics</option>
<option value="Genomics and Proteomics" <?php if($ug_discipline=="Genomics and Proteomics") echo 'selected="selected"'; ?>>Genomics and Proteomics</option>
<option value="Genomics" <?php if($ug_discipline=="Genomics") echo 'selected="selected"'; ?>>Genomics</option>
<option value="Geography" <?php if($ug_discipline=="Geography") echo 'selected="selected"'; ?>>Geography</option>
<option value="Geoinformatics" <?php if($ug_discipline=="Geoinformatics") echo 'selected="selected"'; ?>>Geoinformatics</option>
<option value="Geological Engineering" <?php if($ug_discipline=="Geological Engineering") echo 'selected="selected"'; ?>>Geological Engineering</option>
<option value="Geological Sciences" <?php if($ug_discipline=="Geological Sciences") echo 'selected="selected"'; ?>>Geological Sciences</option>
<option value="Geology" <?php if($ug_discipline=="Geology") echo 'selected="selected"'; ?>>Geology</option>
<option value="Geomatics Engineering" <?php if($ug_discipline=="Geomatics Engineering") echo 'selected="selected"'; ?>>Geomatics Engineering</option>
<option value="Geophysics" <?php if($ug_discipline=="Geophysics") echo 'selected="selected"'; ?>>Geophysics</option>
<option value="Geotechnical" <?php if($ug_discipline=="Geotechnical") echo 'selected="selected"'; ?>>Geotechnical</option>
<option value="Global Warming Reduction" <?php if($ug_discipline=="Global Warming Reduction") echo 'selected="selected"'; ?>>Global Warming Reduction</option>
<option value="Graphics and Multimedia" <?php if($ug_discipline=="Graphics and Multimedia") echo 'selected="selected"'; ?>>Graphics and Multimedia</option>
<option value="Green Business" <?php if($ug_discipline=="Green Business") echo 'selected="selected"'; ?>>Green Business</option>
<option value="Green Technology" <?php if($ug_discipline=="Green Technology") echo 'selected="selected"'; ?>>Green Technology</option>
<option value="Habitat and Population Studies" <?php if($ug_discipline=="Habitat and Population Studies") echo 'selected="selected"'; ?>>Habitat and Population Studies</option>
<option value="Hardware and Networking" <?php if($ug_discipline=="Hardware and Networking") echo 'selected="selected"'; ?>>Hardware and Networking</option>
<option value="Health Safety and Environmental" <?php if($ug_discipline=="Health Safety and Environmental") echo 'selected="selected"'; ?>>Health Safety and Environmental</option>
<option value="Health Science and Nutrition" <?php if($ug_discipline=="Health Science and Nutrition") echo 'selected="selected"'; ?>>Health Science and Nutrition</option>
<option value="Health and Yoga Therapy" <?php if($ug_discipline=="Health and Yoga Therapy") echo 'selected="selected"'; ?>>Health and Yoga Therapy</option>
<option value="Heat Power" <?php if($ug_discipline=="Heat Power") echo 'selected="selected"'; ?>>Heat Power</option>
<option value="Herbal Science" <?php if($ug_discipline=="Herbal Science") echo 'selected="selected"'; ?>>Herbal Science</option>
<option value="Hindi" <?php if($ug_discipline=="Hindi") echo 'selected="selected"'; ?>>Hindi</option>
<option value="History" <?php if($ug_discipline=="History") echo 'selected="selected"'; ?>>History</option>
<option value="Home Management" <?php if($ug_discipline=="Home Management") echo 'selected="selected"'; ?>>Home Management</option>
<option value="Home Science" <?php if($ug_discipline=="Home Science") echo 'selected="selected"'; ?>>Home Science</option>
<option value="Horticulture" <?php if($ug_discipline=="Horticulture") echo 'selected="selected"'; ?>>Horticulture</option>
<option value="Hospital Administration" <?php if($ug_discipline=="Hospital Administration") echo 'selected="selected"'; ?>>Hospital Administration</option>
<option value="Hospitality Management" <?php if($ug_discipline=="Hospitality Management") echo 'selected="selected"'; ?>>Hospitality Management</option>
<option value="Hospitality Studies" <?php if($ug_discipline=="Hospitality Studies") echo 'selected="selected"'; ?>>Hospitality Studies</option>
<option value="Hospitality and Hotel Administration" <?php if($ug_discipline=="Hospitality and Hotel Administration") echo 'selected="selected"'; ?>>Hospitality and Hotel Administration</option>
<option value="Hospitality and Tourism Studies" <?php if($ug_discipline=="Hospitality and Tourism Studies") echo 'selected="selected"'; ?>>Hospitality and Tourism Studies</option>
<option value="Hospitality and Tourism" <?php if($ug_discipline=="Hospitality and Tourism") echo 'selected="selected"'; ?>>Hospitality and Tourism</option>
<option value="Hospitality" <?php if($ug_discipline=="Hospitality") echo 'selected="selected"'; ?>>Hospitality</option>
<option value="Hotel Management and Catering" <?php if($ug_discipline=="Hotel Management and Catering") echo 'selected="selected"'; ?>>Hotel Management and Catering</option>
<option value="Hotel Management and Culinary Arts" <?php if($ug_discipline=="Hotel Management and Culinary Arts") echo 'selected="selected"'; ?>>Hotel Management and Culinary Arts</option>
<option value="Hotel Management" <?php if($ug_discipline=="Hotel Management") echo 'selected="selected"'; ?>>Hotel Management</option>
<option value="Hotel and Catering Management" <?php if($ug_discipline=="Hotel and Catering Management") echo 'selected="selected"'; ?>>Hotel and Catering Management</option>
<option value="Human Development" <?php if($ug_discipline=="Human Development") echo 'selected="selected"'; ?>>Human Development</option>
<option value="Human Genetics" <?php if($ug_discipline=="Human Genetics") echo 'selected="selected"'; ?>>Human Genetics</option>
<option value="Human Physiology" <?php if($ug_discipline=="Human Physiology") echo 'selected="selected"'; ?>>Human Physiology</option>
<option value="Hydrochemistry" <?php if($ug_discipline=="Hydrochemistry") echo 'selected="selected"'; ?>>Hydrochemistry</option>
<option value="Hydrology" <?php if($ug_discipline=="Hydrology") echo 'selected="selected"'; ?>>Hydrology</option>
<option value="Illumination Technology and Design" <?php if($ug_discipline=="Illumination Technology and Design") echo 'selected="selected"'; ?>>Illumination Technology and Design</option>
<option value="Industrial Biotechnology" <?php if($ug_discipline=="Industrial Biotechnology") echo 'selected="selected"'; ?>>Industrial Biotechnology</option>
<option value="Industrial Chemistry" <?php if($ug_discipline=="Industrial Chemistry") echo 'selected="selected"'; ?>>Industrial Chemistry</option>
<option value="Industrial Engineering" <?php if($ug_discipline=="Industrial Engineering") echo 'selected="selected"'; ?>>Industrial Engineering</option>
<option value="Industrial Mathematics" <?php if($ug_discipline=="Industrial Mathematics") echo 'selected="selected"'; ?>>Industrial Mathematics</option>
<option value="Industrial Microbiology" <?php if($ug_discipline=="Industrial Microbiology") echo 'selected="selected"'; ?>>Industrial Microbiology</option>
<option value="Industrial Science" <?php if($ug_discipline=="Industrial Science") echo 'selected="selected"'; ?>>Industrial Science</option>
<option value="Industrial and Management" <?php if($ug_discipline=="Industrial and Management") echo 'selected="selected"'; ?>>Industrial and Management</option>
<option value="Industrial and Production Engineering" <?php if($ug_discipline=="Industrial and Production Engineering") echo 'selected="selected"'; ?>>Industrial and Production Engineering</option>
<option value="Industrial" <?php if($ug_discipline=="Industrial") echo 'selected="selected"'; ?>>Industrial</option>
<option value="Information Science" <?php if($ug_discipline=="Information Science") echo 'selected="selected"'; ?>>Information Science</option>
<option value="Information Security and Cyber Forensics" <?php if($ug_discipline=="Information Security and Cyber Forensics") echo 'selected="selected"'; ?>>Information Security and Cyber Forensics</option>
<option value="Information Security" <?php if($ug_discipline=="Information Security") echo 'selected="selected"'; ?>>Information Security</option>
<option value="Information Systems" <?php if($ug_discipline=="Information Systems") echo 'selected="selected"'; ?>>Information Systems</option>
<option value="Information Technology Engineering" <?php if($ug_discipline=="Information Technology Engineering") echo 'selected="selected"'; ?>>Information Technology Engineering</option>
<option value="Information Technology and Management" <?php if($ug_discipline=="Information Technology and Management") echo 'selected="selected"'; ?>>Information Technology and Management</option>
<option value="Information Technology" <?php if($ug_discipline=="Information Technology") echo 'selected="selected"'; ?>>Information Technology</option>
<option value="Information and Communication Technology" <?php if($ug_discipline=="Information and Communication Technology") echo 'selected="selected"'; ?>>Information and Communication Technology</option>
<option value="Inorganic Chemistry" <?php if($ug_discipline=="Inorganic Chemistry") echo 'selected="selected"'; ?>>Inorganic Chemistry</option>
<option value="Instrumentation Engineering" <?php if($ug_discipline=="Instrumentation Engineering") echo 'selected="selected"'; ?>>Instrumentation Engineering</option>
<option value="Instrumentation Technology" <?php if($ug_discipline=="Instrumentation Technology") echo 'selected="selected"'; ?>>Instrumentation Technology</option>
<option value="Instrumentation and Control Engineering" <?php if($ug_discipline=="Instrumentation and Control Engineering") echo 'selected="selected"'; ?>>Instrumentation and Control Engineering</option>
<option value="Instrumentation and Control" <?php if($ug_discipline=="Instrumentation and Control") echo 'selected="selected"'; ?>>Instrumentation and Control</option>
<option value="Instrumentation" <?php if($ug_discipline=="Instrumentation") echo 'selected="selected"'; ?>>Instrumentation</option>
<option value="Integrated Biotechnology" <?php if($ug_discipline=="Integrated Biotechnology") echo 'selected="selected"'; ?>>Integrated Biotechnology</option>
<option value="Intellectual Property Rights" <?php if($ug_discipline=="Intellectual Property Rights") echo 'selected="selected"'; ?>>Intellectual Property Rights</option>
<option value="Intelligent System" <?php if($ug_discipline=="Intelligent System") echo 'selected="selected"'; ?>>Intelligent System</option>
<option value="Interior Architecture and Design" <?php if($ug_discipline=="Interior Architecture and Design") echo 'selected="selected"'; ?>>Interior Architecture and Design</option>
<option value="Interior Design" <?php if($ug_discipline=="Interior Design") echo 'selected="selected"'; ?>>Interior Design</option>
<option value="Jewellery Design" <?php if($ug_discipline=="Jewellery Design") echo 'selected="selected"'; ?>>Jewellery Design</option>
<option value="Journalism and Mass Communication" <?php if($ug_discipline=="Journalism and Mass Communication") echo 'selected="selected"'; ?>>Journalism and Mass Communication</option>
<option value="Journalism" <?php if($ug_discipline=="Journalism") echo 'selected="selected"'; ?>>Journalism</option>
<option value="Knitwear Design" <?php if($ug_discipline=="Knitwear Design") echo 'selected="selected"'; ?>>Knitwear Design</option>
<option value="LLB" <?php if($ug_discipline=="LLB") echo 'selected="selected"'; ?>>LLB</option>
<option value="Landscape Architectur" <?php if($ug_discipline=="Landscape Architectur") echo 'selected="selected"'; ?>>Landscape Architectur</option>
<option value="Law" <?php if($ug_discipline=="Law") echo 'selected="selected"'; ?>>Law</option>
<option value="Leather Technology" <?php if($ug_discipline=="Leather Technology") echo 'selected="selected"'; ?>>Leather Technology</option>
<option value="Life Science" <?php if($ug_discipline=="Life Science") echo 'selected="selected"'; ?>>Life Science</option>
<option value="Life Sciences" <?php if($ug_discipline=="Life Sciences") echo 'selected="selected"'; ?>>Life Sciences</option>
<option value="Limnology and Fisheries" <?php if($ug_discipline=="Limnology and Fisheries") echo 'selected="selected"'; ?>>Limnology and Fisheries</option>
<option value="Live Stock Production and Management" <?php if($ug_discipline=="Live Stock Production and Management") echo 'selected="selected"'; ?>>Live Stock Production and Management</option>
<option value="Machine Design" <?php if($ug_discipline=="Machine Design") echo 'selected="selected"'; ?>>Machine Design</option>
<option value="Management and Information Technology" <?php if($ug_discipline=="Management and Information Technology") echo 'selected="selected"'; ?>>Management and Information Technology</option>
<option value="Manufacturing Science and Engineering" <?php if($ug_discipline=="Manufacturing Science and Engineering") echo 'selected="selected"'; ?>>Manufacturing Science and Engineering</option>
<option value="Manufacturing Technology" <?php if($ug_discipline=="Manufacturing Technology") echo 'selected="selected"'; ?>>Manufacturing Technology</option>
<option value="Manufacturing" <?php if($ug_discipline=="Manufacturing") echo 'selected="selected"'; ?>>Manufacturing</option>
<option value="Marine Biotechnology" <?php if($ug_discipline=="Marine Biotechnology") echo 'selected="selected"'; ?>>Marine Biotechnology</option>
<option value="Marine Engineering" <?php if($ug_discipline=="Marine Engineering") echo 'selected="selected"'; ?>>Marine Engineering</option>
<option value="Marine Geophysics" <?php if($ug_discipline=="Marine Geophysics") echo 'selected="selected"'; ?>>Marine Geophysics</option>
<option value="Marine Science" <?php if($ug_discipline=="Marine Science") echo 'selected="selected"'; ?>>Marine Science</option>
<option value="Marine" <?php if($ug_discipline=="Marine") echo 'selected="selected"'; ?>>Marine</option>
<option value="Marketing" <?php if($ug_discipline=="Marketing") echo 'selected="selected"'; ?>>Marketing</option>
<option value="Mass Communication Advertising and Journalism" <?php if($ug_discipline=="Mass Communication Advertising and Journalism") echo 'selected="selected"'; ?>>Mass Communication Advertising and Journalism</option>
<option value="Mass Communication and Journalism" <?php if($ug_discipline=="Mass Communication and Journalism") echo 'selected="selected"'; ?>>Mass Communication and Journalism</option>
<option value="Mass Communication" <?php if($ug_discipline=="Mass Communication") echo 'selected="selected"'; ?>>Mass Communication</option>
<option value="Material Science and Engineering" <?php if($ug_discipline=="Material Science and Engineering") echo 'selected="selected"'; ?>>Material Science and Engineering</option>
<option value="Material Science and" <?php if($ug_discipline=="Material Science and") echo 'selected="selected"'; ?>>Material Science and</option>
<option value="Materials Science" <?php if($ug_discipline=="Materials Science") echo 'selected="selected"'; ?>>Materials Science</option>
<option value="Maternity Nursing" <?php if($ug_discipline=="Maternity Nursing") echo 'selected="selected"'; ?>>Maternity Nursing</option>
<option value="Mathematical Ecology and Environment Studies" <?php if($ug_discipline=="Mathematical Ecology and Environment Studies") echo 'selected="selected"'; ?>>Mathematical Ecology and Environment Studies</option>
<option value="Mathematical Science" <?php if($ug_discipline=="Mathematical Science") echo 'selected="selected"'; ?>>Mathematical Science</option>
<option value="Mathematics and Computing" <?php if($ug_discipline=="Mathematics and Computing") echo 'selected="selected"'; ?>>Mathematics and Computing</option>
<option value="Mathematics hons" <?php if($ug_discipline=="Mathematics hons") echo 'selected="selected"'; ?>>Mathematics hons</option>
<option value="Mathematics" <?php if($ug_discipline=="Mathematics") echo 'selected="selected"'; ?>>Mathematics</option>
<option value="Maths and Computer Applications" <?php if($ug_discipline=="Maths and Computer Applications") echo 'selected="selected"'; ?>>Maths and Computer Applications</option>
<option value="Maths and Statistics" <?php if($ug_discipline=="Maths and Statistics") echo 'selected="selected"'; ?>>Maths and Statistics</option>
<option value="Mechanical Engineer" <?php if($ug_discipline=="Mechanical Engineer") echo 'selected="selected"'; ?>>Mechanical Engineer</option>
<option value="Mechanical Engineering" <?php if($ug_discipline=="Mechanical Engineering") echo 'selected="selected"'; ?>>Mechanical Engineering</option>
<option value="Mechanical" <?php if($ug_discipline=="Mechanical") echo 'selected="selected"'; ?>>Mechanical</option>
<option value="Mechatronics Engineering" <?php if($ug_discipline=="Mechatronics Engineering") echo 'selected="selected"'; ?>>Mechatronics Engineering</option>
<option value="Mechatronics" <?php if($ug_discipline=="Mechatronics") echo 'selected="selected"'; ?>>Mechatronics</option>
<option value="Media Graphics and Animation" <?php if($ug_discipline=="Media Graphics and Animation") echo 'selected="selected"'; ?>>Media Graphics and Animation</option>
<option value="Media Technology" <?php if($ug_discipline=="Media Technology") echo 'selected="selected"'; ?>>Media Technology</option>
<option value="Medical Anatomy" <?php if($ug_discipline=="Medical Anatomy") echo 'selected="selected"'; ?>>Medical Anatomy</option>
<option value="Medical Biochemistry" <?php if($ug_discipline=="Medical Biochemistry") echo 'selected="selected"'; ?>>Medical Biochemistry</option>
<option value="Medical Biotechnology" <?php if($ug_discipline=="Medical Biotechnology") echo 'selected="selected"'; ?>>Medical Biotechnology</option>
<option value="Medical Imaging Technology" <?php if($ug_discipline=="Medical Imaging Technology") echo 'selected="selected"'; ?>>Medical Imaging Technology</option>
<option value="Medical Lab Technology" <?php if($ug_discipline=="Medical Lab Technology") echo 'selected="selected"'; ?>>Medical Lab Technology</option>
<option value="Medical Microbiology" <?php if($ug_discipline=="Medical Microbiology") echo 'selected="selected"'; ?>>Medical Microbiology</option>
<option value="Medical Physics" <?php if($ug_discipline=="Medical Physics") echo 'selected="selected"'; ?>>Medical Physics</option>
<option value="Medical Radiation Physics" <?php if($ug_discipline=="Medical Radiation Physics") echo 'selected="selected"'; ?>>Medical Radiation Physics</option>
<option value="Medical Radiography and Imaging Technology" <?php if($ug_discipline=="Medical Radiography and Imaging Technology") echo 'selected="selected"'; ?>>Medical Radiography and Imaging Technology</option>
<option value="Medical Surgical Nursing" <?php if($ug_discipline=="Medical Surgical Nursing") echo 'selected="selected"'; ?>>Medical Surgical Nursing</option>
<option value="Medical Technology" <?php if($ug_discipline=="Medical Technology") echo 'selected="selected"'; ?>>Medical Technology</option>
<option value="Medicinal Chemistry" <?php if($ug_discipline=="Medicinal Chemistry") echo 'selected="selected"'; ?>>Medicinal Chemistry</option>
<option value="Medicinal Plants" <?php if($ug_discipline=="Medicinal Plants") echo 'selected="selected"'; ?>>Medicinal Plants</option>
<option value="Mental Health Nursing" <?php if($ug_discipline=="Mental Health Nursing") echo 'selected="selected"'; ?>>Mental Health Nursing</option>
<option value="Mental Health" <?php if($ug_discipline=="Mental Health") echo 'selected="selected"'; ?>>Mental Health</option>
<option value="Metallurgical Engineering" <?php if($ug_discipline=="Metallurgical Engineering") echo 'selected="selected"'; ?>>Metallurgical Engineering</option>
<option value="Meteorology" <?php if($ug_discipline=="Meteorology") echo 'selected="selected"'; ?>>Meteorology</option>
<option value="Microbiology and Immunology" <?php if($ug_discipline=="Microbiology and Immunology") echo 'selected="selected"'; ?>>Microbiology and Immunology</option>
<option value="Microbiology" <?php if($ug_discipline=="Microbiology") echo 'selected="selected"'; ?>>Microbiology</option>
<option value="Microelectronic Engineering" <?php if($ug_discipline=="Microelectronic Engineering") echo 'selected="selected"'; ?>>Microelectronic Engineering</option>
<option value="Microelectronics and Advanced Communication" <?php if($ug_discipline=="Microelectronics and Advanced Communication") echo 'selected="selected"'; ?>>Microelectronics and Advanced Communication</option>
<option value="Microelectronics and VLSI Design" <?php if($ug_discipline=="Microelectronics and VLSI Design") echo 'selected="selected"'; ?>>Microelectronics and VLSI Design</option>
<option value="Military Science" <?php if($ug_discipline=="Military Science") echo 'selected="selected"'; ?>>Military Science</option>
<option value="Mineral" <?php if($ug_discipline=="Mineral") echo 'selected="selected"'; ?>>Mineral</option>
<option value="Mining Engineer" <?php if($ug_discipline=="Mining Engineer") echo 'selected="selected"'; ?>>Mining Engineer</option>
<option value="Mining Engineering" <?php if($ug_discipline=="Mining Engineering") echo 'selected="selected"'; ?>>Mining Engineering</option>
<option value="Mining" <?php if($ug_discipline=="Mining") echo 'selected="selected"'; ?>>Mining</option>
<option value="Molecular Biology and Biochemistry" <?php if($ug_discipline=="Molecular Biology and Biochemistry") echo 'selected="selected"'; ?>>Molecular Biology and Biochemistry</option>
<option value="Molecular Biology and Genetic Engineering" <?php if($ug_discipline=="Molecular Biology and Genetic Engineering") echo 'selected="selected"'; ?>>Molecular Biology and Genetic Engineering</option>
<option value="Molecular Biology and Human Genetics" <?php if($ug_discipline=="Molecular Biology and Human Genetics") echo 'selected="selected"'; ?>>Molecular Biology and Human Genetics</option>
<option value="Molecular Biology" <?php if($ug_discipline=="Molecular Biology") echo 'selected="selected"'; ?>>Molecular Biology</option>
<option value="Molecular Medicine" <?php if($ug_discipline=="Molecular Medicine") echo 'selected="selected"'; ?>>Molecular Medicine</option>
<option value="Motorsport Engineering" <?php if($ug_discipline=="Motorsport Engineering") echo 'selected="selected"'; ?>>Motorsport Engineering</option>
<option value="Multimedia Technology" <?php if($ug_discipline=="Multimedia Technology") echo 'selected="selected"'; ?>>Multimedia Technology</option>
<option value="Multimedia and Animation" <?php if($ug_discipline=="Multimedia and Animation") echo 'selected="selected"'; ?>>Multimedia and Animation</option>
<option value="Multimedia" <?php if($ug_discipline=="Multimedia") echo 'selected="selected"'; ?>>Multimedia</option>
<option value="Museology" <?php if($ug_discipline=="Museology") echo 'selected="selected"'; ?>>Museology</option>
<option value="NGO Management" <?php if($ug_discipline=="NGO Management") echo 'selected="selected"'; ?>>NGO Management</option>
<option value="Nano Science and Technology" <?php if($ug_discipline=="Nano Science and Technology") echo 'selected="selected"'; ?>>Nano Science and Technology</option>
<option value="Nano Sciences and Technology" <?php if($ug_discipline=="Nano Sciences and Technology") echo 'selected="selected"'; ?>>Nano Sciences and Technology</option>
<option value="NanoTechnology" <?php if($ug_discipline=="NanoTechnology") echo 'selected="selected"'; ?>>NanoTechnology</option>
<option value="Nanotechnology Engineering" <?php if($ug_discipline=="Nanotechnology Engineering") echo 'selected="selected"'; ?>>Nanotechnology Engineering</option>
<option value="Natural Resource Management" <?php if($ug_discipline=="Natural Resource Management") echo 'selected="selected"'; ?>>Natural Resource Management</option>
<option value="Naturopathy and Yogic Science" <?php if($ug_discipline=="Naturopathy and Yogic Science") echo 'selected="selected"'; ?>>Naturopathy and Yogic Science</option>
<option value="Nautical Science" <?php if($ug_discipline=="Nautical Science") echo 'selected="selected"'; ?>>Nautical Science</option>
<option value="Naval Architecture and Ocean Engineering" <?php if($ug_discipline=="Naval Architecture and Ocean Engineering") echo 'selected="selected"'; ?>>Naval Architecture and Ocean Engineering</option>
<option value="Naval Engineering" <?php if($ug_discipline=="Naval Engineering") echo 'selected="selected"'; ?>>Naval Engineering</option>
<option value="Nematology" <?php if($ug_discipline=="Nematology") echo 'selected="selected"'; ?>>Nematology</option>
<option value="Network Protocol Design" <?php if($ug_discipline=="Network Protocol Design") echo 'selected="selected"'; ?>>Network Protocol Design</option>
<option value="Neural Networks" <?php if($ug_discipline=="Neural Networks") echo 'selected="selected"'; ?>>Neural Networks</option>
<option value="Neuroscience" <?php if($ug_discipline=="Neuroscience") echo 'selected="selected"'; ?>>Neuroscience</option>
<option value="Nuclear Engineering" <?php if($ug_discipline=="Nuclear Engineering") echo 'selected="selected"'; ?>>Nuclear Engineering</option>
<option value="Nuclear Medicine Technology" <?php if($ug_discipline=="Nuclear Medicine Technology") echo 'selected="selected"'; ?>>Nuclear Medicine Technology</option>
<option value="Nuclear Physics" <?php if($ug_discipline=="Nuclear Physics") echo 'selected="selected"'; ?>>Nuclear Physics</option>
<option value="Nuclear" <?php if($ug_discipline=="Nuclear") echo 'selected="selected"'; ?>>Nuclear</option>
<option value="Nursing" <?php if($ug_discipline=="Nursing") echo 'selected="selected"'; ?>>Nursing</option>
<option value="Nutrition and Dietetics" <?php if($ug_discipline=="Nutrition and Dietetics") echo 'selected="selected"'; ?>>Nutrition and Dietetics</option>
<option value="Nutrition and Food Processing" <?php if($ug_discipline=="Nutrition and Food Processing") echo 'selected="selected"'; ?>>Nutrition and Food Processing</option>
<option value="Nutrition" <?php if($ug_discipline=="Nutrition") echo 'selected="selected"'; ?>>Nutrition</option>
<option value="Obstetrics and Gynecological Nursing" <?php if($ug_discipline=="Obstetrics and Gynecological Nursing") echo 'selected="selected"'; ?>>Obstetrics and Gynecological Nursing</option>
<option value="Occupational Therapy" <?php if($ug_discipline=="Occupational Therapy") echo 'selected="selected"'; ?>>Occupational Therapy</option>
<option value="Ocean and Marine Engineering" <?php if($ug_discipline=="Ocean and Marine Engineering") echo 'selected="selected"'; ?>>Ocean and Marine Engineering</option>
<option value="Oceanography" <?php if($ug_discipline=="Oceanography") echo 'selected="selected"'; ?>>Oceanography</option>
<option value="Olericulture" <?php if($ug_discipline=="Olericulture") echo 'selected="selected"'; ?>>Olericulture</option>
<option value="Operation Research and Computer Applications" <?php if($ug_discipline=="Operation Research and Computer Applications") echo 'selected="selected"'; ?>>Operation Research and Computer Applications</option>
<option value="Operation Theatre Technology" <?php if($ug_discipline=="Operation Theatre Technology") echo 'selected="selected"'; ?>>Operation Theatre Technology</option>
<option value="Operational Research" <?php if($ug_discipline=="Operational Research") echo 'selected="selected"'; ?>>Operational Research</option>
<option value="Optical" <?php if($ug_discipline=="Optical") echo 'selected="selected"'; ?>>Optical</option>
<option value="Optometry" <?php if($ug_discipline=="Optometry") echo 'selected="selected"'; ?>>Optometry</option>
<option value="Organic Chemistry" <?php if($ug_discipline=="Organic Chemistry") echo 'selected="selected"'; ?>>Organic Chemistry</option>
<option value="Orthopedics" <?php if($ug_discipline=="Orthopedics") echo 'selected="selected"'; ?>>Orthopedics</option>
<option value="Osteopathy" <?php if($ug_discipline=="Osteopathy") echo 'selected="selected"'; ?>>Osteopathy</option>
<option value="Paediatric Nursing" <?php if($ug_discipline=="Paediatric Nursing") echo 'selected="selected"'; ?>>Paediatric Nursing</option>
<option value="Paper Engineering" <?php if($ug_discipline=="Paper Engineering") echo 'selected="selected"'; ?>>Paper Engineering</option>
<option value="Paramedical" <?php if($ug_discipline=="Paramedical") echo 'selected="selected"'; ?>>Paramedical</option>
<option value="Pathology" <?php if($ug_discipline=="Pathology") echo 'selected="selected"'; ?>>Pathology</option>
<option value="Perfusion Technology" <?php if($ug_discipline=="Perfusion Technology") echo 'selected="selected"'; ?>>Perfusion Technology</option>
<option value="Petroleum Engineering" <?php if($ug_discipline=="Petroleum Engineering") echo 'selected="selected"'; ?>>Petroleum Engineering</option>
<option value="Petroleum Geology" <?php if($ug_discipline=="Petroleum Geology") echo 'selected="selected"'; ?>>Petroleum Geology</option>
<option value="Petroleum Technology" <?php if($ug_discipline=="Petroleum Technology") echo 'selected="selected"'; ?>>Petroleum Technology</option>
<option value="Petroleum" <?php if($ug_discipline=="Petroleum") echo 'selected="selected"'; ?>>Petroleum</option>
<option value="Pharmaceutical Chemistry" <?php if($ug_discipline=="Pharmaceutical Chemistry") echo 'selected="selected"'; ?>>Pharmaceutical Chemistry</option>
<option value="Pharmaceutical Technology" <?php if($ug_discipline=="Pharmaceutical Technology") echo 'selected="selected"'; ?>>Pharmaceutical Technology</option>
<option value="Pharmaceutical" <?php if($ug_discipline=="Pharmaceutical") echo 'selected="selected"'; ?>>Pharmaceutical</option>
<option value="Pharmacology" <?php if($ug_discipline=="Pharmacology") echo 'selected="selected"'; ?>>Pharmacology</option>
<option value="Pharmacy" <?php if($ug_discipline=="Pharmacy") echo 'selected="selected"'; ?>>Pharmacy</option>
<option value="Photography" <?php if($ug_discipline=="Photography") echo 'selected="selected"'; ?>>Photography</option>
<option value="Photonics" <?php if($ug_discipline=="Photonics") echo 'selected="selected"'; ?>>Photonics</option>
<option value="Physical Chemistry" <?php if($ug_discipline=="Physical Chemistry") echo 'selected="selected"'; ?>>Physical Chemistry</option>
<option value="Physical Education" <?php if($ug_discipline=="Physical Education") echo 'selected="selected"'; ?>>Physical Education</option>
<option value="Physical Oceanography" <?php if($ug_discipline=="Physical Oceanography") echo 'selected="selected"'; ?>>Physical Oceanography</option>
<option value="Physical Sciences" <?php if($ug_discipline=="Physical Sciences") echo 'selected="selected"'; ?>>Physical Sciences</option>
<option value="Physical Therapy" <?php if($ug_discipline=="Physical Therapy") echo 'selected="selected"'; ?>>Physical Therapy</option>
<option value="Physician Assistant" <?php if($ug_discipline=="Physician Assistant") echo 'selected="selected"'; ?>>Physician Assistant</option>
<option value="Physics" <?php if($ug_discipline=="Physics") echo 'selected="selected"'; ?>>Physics</option>
<option value="Physiology" <?php if($ug_discipline=="Physiology") echo 'selected="selected"'; ?>>Physiology</option>
<option value="Physiotherapy" <?php if($ug_discipline=="Physiotherapy") echo 'selected="selected"'; ?>>Physiotherapy</option>
<option value="Phytomedical Science and Technology" <?php if($ug_discipline=="Phytomedical Science and Technology") echo 'selected="selected"'; ?>>Phytomedical Science and Technology</option>
<option value="Pipeline" <?php if($ug_discipline=="Pipeline") echo 'selected="selected"'; ?>>Pipeline</option>
<option value="Planning" <?php if($ug_discipline=="Planning") echo 'selected="selected"'; ?>>Planning</option>
<option value="PlanningUrban and Regional Planning" <?php if($ug_discipline=="PlanningUrban and Regional Planning") echo 'selected="selected"'; ?>>PlanningUrban and Regional Planning</option>
<option value="Plant Biochemistry" <?php if($ug_discipline=="Plant Biochemistry") echo 'selected="selected"'; ?>>Plant Biochemistry</option>
<option value="Plant Biology and Plant Biotechnology" <?php if($ug_discipline=="Plant Biology and Plant Biotechnology") echo 'selected="selected"'; ?>>Plant Biology and Plant Biotechnology</option>
<option value="Plant Pathology" <?php if($ug_discipline=="Plant Pathology") echo 'selected="selected"'; ?>>Plant Pathology</option>
<option value="Plant Science" <?php if($ug_discipline=="Plant Science") echo 'selected="selected"'; ?>>Plant Science</option>
<option value="Podiatry" <?php if($ug_discipline=="Podiatry") echo 'selected="selected"'; ?>>Podiatry</option>
<option value="Political Science" <?php if($ug_discipline=="Political Science") echo 'selected="selected"'; ?>>Political Science</option>
<option value="Politics" <?php if($ug_discipline=="Politics") echo 'selected="selected"'; ?>>Politics</option>
<option value="Pollution Control" <?php if($ug_discipline=="Pollution Control") echo 'selected="selected"'; ?>>Pollution Control</option>
<option value="Polymer Science" <?php if($ug_discipline=="Polymer Science") echo 'selected="selected"'; ?>>Polymer Science</option>
<option value="Polymer Technology" <?php if($ug_discipline=="Polymer Technology") echo 'selected="selected"'; ?>>Polymer Technology</option>
<option value="Post-harvest Technology" <?php if($ug_discipline=="Post-harvest Technology") echo 'selected="selected"'; ?>>Post-harvest Technology</option>
<option value="Poultry Production" <?php if($ug_discipline=="Poultry Production") echo 'selected="selected"'; ?>>Poultry Production</option>
<option value="Power Electronics and Drives" <?php if($ug_discipline=="Power Electronics and Drives") echo 'selected="selected"'; ?>>Power Electronics and Drives</option>
<option value="Power Electronics and Systems" <?php if($ug_discipline=="Power Electronics and Systems") echo 'selected="selected"'; ?>>Power Electronics and Systems</option>
<option value="Power Electronics" <?php if($ug_discipline=="Power Electronics") echo 'selected="selected"'; ?>>Power Electronics</option>
<option value="Power Engineering" <?php if($ug_discipline=="Power Engineering") echo 'selected="selected"'; ?>>Power Engineering</option>
<option value="Power System" <?php if($ug_discipline=="Power System") echo 'selected="selected"'; ?>>Power System</option>
<option value="Power Systems and Power Electronics" <?php if($ug_discipline=="Power Systems and Power Electronics") echo 'selected="selected"'; ?>>Power Systems and Power Electronics</option>
<option value="Power Systems" <?php if($ug_discipline=="Power Systems") echo 'selected="selected"'; ?>>Power Systems</option>
<option value="Process Control and Instrumentation" <?php if($ug_discipline=="Process Control and Instrumentation") echo 'selected="selected"'; ?>>Process Control and Instrumentation</option>
<option value="Process Metallurgy" <?php if($ug_discipline=="Process Metallurgy") echo 'selected="selected"'; ?>>Process Metallurgy</option>
<option value="Process" <?php if($ug_discipline=="Process") echo 'selected="selected"'; ?>>Process</option>
<option value="Product Design and Manufacturing" <?php if($ug_discipline=="Product Design and Manufacturing") echo 'selected="selected"'; ?>>Product Design and Manufacturing</option>
<option value="Product Design" <?php if($ug_discipline=="Product Design") echo 'selected="selected"'; ?>>Product Design</option>
<option value="Production / Production Technology" <?php if($ug_discipline=="Production / Production Technology") echo 'selected="selected"'; ?>>Production / Production Technology</option>
<option value="Production Engineer" <?php if($ug_discipline=="Production Engineer") echo 'selected="selected"'; ?>>Production Engineer</option>
<option value="Production Engineering" <?php if($ug_discipline=="Production Engineering") echo 'selected="selected"'; ?>>Production Engineering</option>
<option value="Production Technology" <?php if($ug_discipline=="Production Technology") echo 'selected="selected"'; ?>>Production Technology</option>
<option value="Production and Industrial Engineering" <?php if($ug_discipline=="Production and Industrial Engineering") echo 'selected="selected"'; ?>>Production and Industrial Engineering</option>
<option value="Production and Industrial" <?php if($ug_discipline=="Production and Industrial") echo 'selected="selected"'; ?>>Production and Industrial</option>
<option value="Production" <?php if($ug_discipline=="Production") echo 'selected="selected"'; ?>>Production</option>
<option value="Prosthetic and Orthotics" <?php if($ug_discipline=="Prosthetic and Orthotics") echo 'selected="selected"'; ?>>Prosthetic and Orthotics</option>
<option value="Prosthodontics" <?php if($ug_discipline=="Prosthodontics") echo 'selected="selected"'; ?>>Prosthodontics</option>
<option value="Psychiatric Nursing" <?php if($ug_discipline=="Psychiatric Nursing") echo 'selected="selected"'; ?>>Psychiatric Nursing</option>
<option value="Psychological Counselling" <?php if($ug_discipline=="Psychological Counselling") echo 'selected="selected"'; ?>>Psychological Counselling</option>
<option value="Psychology" <?php if($ug_discipline=="Psychology") echo 'selected="selected"'; ?>>Psychology</option>
<option value="Public Health" <?php if($ug_discipline=="Public Health") echo 'selected="selected"'; ?>>Public Health</option>
<option value="Public Safety" <?php if($ug_discipline=="Public Safety") echo 'selected="selected"'; ?>>Public Safety</option>
<option value="Radiography" <?php if($ug_discipline=="Radiography") echo 'selected="selected"'; ?>>Radiography</option>
<option value="Radiologic Technology" <?php if($ug_discipline=="Radiologic Technology") echo 'selected="selected"'; ?>>Radiologic Technology</option>
<option value="Radiology" <?php if($ug_discipline=="Radiology") echo 'selected="selected"'; ?>>Radiology</option>
<option value="Real-Time Interactive Simulation" <?php if($ug_discipline=="Real-Time Interactive Simulation") echo 'selected="selected"'; ?>>Real-Time Interactive Simulation</option>
<option value="Regenerative Medicine" <?php if($ug_discipline=="Regenerative Medicine") echo 'selected="selected"'; ?>>Regenerative Medicine</option>
<option value="Reliability" <?php if($ug_discipline=="Reliability") echo 'selected="selected"'; ?>>Reliability</option>
<option value="Remote Sensing and GIS" <?php if($ug_discipline=="Remote Sensing and GIS") echo 'selected="selected"'; ?>>Remote Sensing and GIS</option>
<option value="Renewable Energy" <?php if($ug_discipline=="Renewable Energy") echo 'selected="selected"'; ?>>Renewable Energy</option>
<option value="Researcher" <?php if($ug_discipline=="Researcher") echo 'selected="selected"'; ?>>Researcher</option>
<option value="Resource Management" <?php if($ug_discipline=="Resource Management") echo 'selected="selected"'; ?>>Resource Management</option>
<option value="Respiratory Therapy" <?php if($ug_discipline=="Respiratory Therapy") echo 'selected="selected"'; ?>>Respiratory Therapy</option>
<option value="Robotics Engineering" <?php if($ug_discipline=="Robotics Engineering") echo 'selected="selected"'; ?>>Robotics Engineering</option>
<option value="Robotics" <?php if($ug_discipline=="Robotics") echo 'selected="selected"'; ?>>Robotics</option>
<option value="Rubber Technology" <?php if($ug_discipline=="Rubber Technology") echo 'selected="selected"'; ?>>Rubber Technology</option>
<option value="Rural Development" <?php if($ug_discipline=="Rural Development") echo 'selected="selected"'; ?>>Rural Development</option>
<option value="Rural Health" <?php if($ug_discipline=="Rural Health") echo 'selected="selected"'; ?>>Rural Health</option>
<option value="Science and Technology Communication" <?php if($ug_discipline=="Science and Technology Communication") echo 'selected="selected"'; ?>>Science and Technology Communication</option>
<option value="Seed Science and Technology" <?php if($ug_discipline=="Seed Science and Technology") echo 'selected="selected"'; ?>>Seed Science and Technology</option>
<option value="Sericulture" <?php if($ug_discipline=="Sericulture") echo 'selected="selected"'; ?>>Sericulture</option>
<option value="Service Industry Management" <?php if($ug_discipline=="Service Industry Management") echo 'selected="selected"'; ?>>Service Industry Management</option>
<option value="Signal Processing" <?php if($ug_discipline=="Signal Processing") echo 'selected="selected"'; ?>>Signal Processing</option>
<option value="Social Sciences" <?php if($ug_discipline=="Social Sciences") echo 'selected="selected"'; ?>>Social Sciences</option>
<option value="Software Developer" <?php if($ug_discipline=="Software Developer") echo 'selected="selected"'; ?>>Software Developer</option>
<option value="Software Engineer" <?php if($ug_discipline=="Software Engineer") echo 'selected="selected"'; ?>>Software Engineer</option>
<option value="Software Engineering" <?php if($ug_discipline=="Software Engineering") echo 'selected="selected"'; ?>>Software Engineering</option>
<option value="Software System" <?php if($ug_discipline=="Software System") echo 'selected="selected"'; ?>>Software System</option>
<option value="Software" <?php if($ug_discipline=="Software") echo 'selected="selected"'; ?>>Software</option>
<option value="Soil Science and Agricultural Chemistry" <?php if($ug_discipline=="Soil Science and Agricultural Chemistry") echo 'selected="selected"'; ?>>Soil Science and Agricultural Chemistry</option>
<option value="Soil Science" <?php if($ug_discipline=="Soil Science") echo 'selected="selected"'; ?>>Soil Science</option>
<option value="Soil Water Conservation" <?php if($ug_discipline=="Soil Water Conservation") echo 'selected="selected"'; ?>>Soil Water Conservation</option>
<option value="Soil and Water Conservation" <?php if($ug_discipline=="Soil and Water Conservation") echo 'selected="selected"'; ?>>Soil and Water Conservation</option>
<option value="Speech Therapy" <?php if($ug_discipline=="Speech Therapy") echo 'selected="selected"'; ?>>Speech Therapy</option>
<option value="Speech-Language Pathology" <?php if($ug_discipline=="Speech-Language Pathology") echo 'selected="selected"'; ?>>Speech-Language Pathology</option>
<option value="Sports Management" <?php if($ug_discipline=="Sports Management") echo 'selected="selected"'; ?>>Sports Management</option>
<option value="Sports Science" <?php if($ug_discipline=="Sports Science") echo 'selected="selected"'; ?>>Sports Science</option>
<option value="Statistics" <?php if($ug_discipline=="Statistics") echo 'selected="selected"'; ?>>Statistics</option>
<option value="Stem Cell and Tissue Engineering" <?php if($ug_discipline=="Stem Cell and Tissue Engineering") echo 'selected="selected"'; ?>>Stem Cell and Tissue Engineering</option>
<option value="Structural Engineering" <?php if($ug_discipline=="Structural Engineering") echo 'selected="selected"'; ?>>Structural Engineering</option>
<option value="Structural" <?php if($ug_discipline=="Structural") echo 'selected="selected"'; ?>>Structural</option>
<option value="Sugar Technology" <?php if($ug_discipline=="Sugar Technology") echo 'selected="selected"'; ?>>Sugar Technology</option>
<option value="Surgery" <?php if($ug_discipline=="Surgery") echo 'selected="selected"'; ?>>Surgery</option>
<option value="Sustainability and Design Engineering" <?php if($ug_discipline=="Sustainability and Design Engineering") echo 'selected="selected"'; ?>>Sustainability and Design Engineering</option>
<option value="Sustainable Development" <?php if($ug_discipline=="Sustainable Development") echo 'selected="selected"'; ?>>Sustainable Development</option>
<option value="System Administration and Networking" <?php if($ug_discipline=="System Administration and Networking") echo 'selected="selected"'; ?>>System Administration and Networking</option>
<option value="System and Network Administration" <?php if($ug_discipline=="System and Network Administration") echo 'selected="selected"'; ?>>System and Network Administration</option>
<option value="Systems Engineering" <?php if($ug_discipline=="Systems Engineering") echo 'selected="selected"'; ?>>Systems Engineering</option>
<option value="Technology Management" <?php if($ug_discipline=="Technology Management") echo 'selected="selected"'; ?>>Technology Management</option>
<option value="Telecommunication Engineering" <?php if($ug_discipline=="Telecommunication Engineering") echo 'selected="selected"'; ?>>Telecommunication Engineering</option>
<option value="Telecommunication" <?php if($ug_discipline=="Telecommunication") echo 'selected="selected"'; ?>>Telecommunication</option>
<option value="Textile Design" <?php if($ug_discipline=="Textile Design") echo 'selected="selected"'; ?>>Textile Design</option>
<option value="Textile Engineering" <?php if($ug_discipline=="Textile Engineering") echo 'selected="selected"'; ?>>Textile Engineering</option>
<option value="Textile Technology" <?php if($ug_discipline=="Textile Technology") echo 'selected="selected"'; ?>>Textile Technology</option>
<option value="Textile" <?php if($ug_discipline=="Textile") echo 'selected="selected"'; ?>>Textile</option>
<option value="Thermal / Thermal Power" <?php if($ug_discipline=="Thermal / Thermal Power") echo 'selected="selected"'; ?>>Thermal / Thermal Power</option>
<option value="Thermal Power" <?php if($ug_discipline=="Thermal Power") echo 'selected="selected"'; ?>>Thermal Power</option>
<option value="Thermal" <?php if($ug_discipline=="Thermal") echo 'selected="selected"'; ?>>Thermal</option>
<option value="Tool Engineering" <?php if($ug_discipline=="Tool Engineering") echo 'selected="selected"'; ?>>Tool Engineering</option>
<option value="Tool" <?php if($ug_discipline=="Tool") echo 'selected="selected"'; ?>>Tool</option>
<option value="Tourism and Hospitality Management" <?php if($ug_discipline=="Tourism and Hospitality Management") echo 'selected="selected"'; ?>>Tourism and Hospitality Management</option>
<option value="Tourism and Hotel Management" <?php if($ug_discipline=="Tourism and Hotel Management") echo 'selected="selected"'; ?>>Tourism and Hotel Management</option>
<option value="Tourism" <?php if($ug_discipline=="Tourism") echo 'selected="selected"'; ?>>Tourism</option>
<option value="Toxicology" <?php if($ug_discipline=="Toxicology") echo 'selected="selected"'; ?>>Toxicology</option>
<option value="Transportation Engineering" <?php if($ug_discipline=="Transportation Engineering") echo 'selected="selected"'; ?>>Transportation Engineering</option>
<option value="Transportation" <?php if($ug_discipline=="Transportation") echo 'selected="selected"'; ?>>Transportation</option>
<option value="VFX" <?php if($ug_discipline=="VFX") echo 'selected="selected"'; ?>>VFX</option>
<option value="VLSI Design / VLSI Technology" <?php if($ug_discipline=="VLSI Design / VLSI Technology") echo 'selected="selected"'; ?>>VLSI Design / VLSI Technology</option>
<option value="VLSI Design and Embedded System" <?php if($ug_discipline=="VLSI Design and Embedded System") echo 'selected="selected"'; ?>>VLSI Design and Embedded System</option>
<option value="VLSI Design" <?php if($ug_discipline=="VLSI Design") echo 'selected="selected"'; ?>>VLSI Design</option>
<option value="VLSI System Design" <?php if($ug_discipline=="VLSI System Design") echo 'selected="selected"'; ?>>VLSI System Design</option>
<option value="VLSI Technology" <?php if($ug_discipline=="VLSI Technology") echo 'selected="selected"'; ?>>VLSI Technology</option>
<option value="Veterinary Medicine" <?php if($ug_discipline=="Veterinary Medicine") echo 'selected="selected"'; ?>>Veterinary Medicine</option>
<option value="Veterinary Microbiology" <?php if($ug_discipline=="Veterinary Microbiology") echo 'selected="selected"'; ?>>Veterinary Microbiology</option>
<option value="Veterinary Parasitology" <?php if($ug_discipline=="Veterinary Parasitology") echo 'selected="selected"'; ?>>Veterinary Parasitology</option>
<option value="Veterinary Pharmacology and Toxicology" <?php if($ug_discipline=="Veterinary Pharmacology and Toxicology") echo 'selected="selected"'; ?>>Veterinary Pharmacology and Toxicology</option>
<option value="Veterinary Physiology" <?php if($ug_discipline=="Veterinary Physiology") echo 'selected="selected"'; ?>>Veterinary Physiology</option>
<option value="Veterinary Public Health" <?php if($ug_discipline=="Veterinary Public Health") echo 'selected="selected"'; ?>>Veterinary Public Health</option>
<option value="Veterinary Science" <?php if($ug_discipline=="Veterinary Science") echo 'selected="selected"'; ?>>Veterinary Science</option>
<option value="Veterinary Sciences" <?php if($ug_discipline=="Veterinary Sciences") echo 'selected="selected"'; ?>>Veterinary Sciences</option>
<option value="Virology" <?php if($ug_discipline=="Virology") echo 'selected="selected"'; ?>>Virology</option>
<option value="Visual Communication" <?php if($ug_discipline=="Visual Communication") echo 'selected="selected"'; ?>>Visual Communication</option>
<option value="Visual Effects Filmmaking" <?php if($ug_discipline=="Visual Effects Filmmaking") echo 'selected="selected"'; ?>>Visual Effects Filmmaking</option>
<option value="Visual Media" <?php if($ug_discipline=="Visual Media") echo 'selected="selected"'; ?>>Visual Media</option>
<option value="Water Management" <?php if($ug_discipline=="Water Management") echo 'selected="selected"'; ?>>Water Management</option>
<option value="Water Resources" <?php if($ug_discipline=="Water Resources") echo 'selected="selected"'; ?>>Water Resources</option>
<option value="Welding Technology" <?php if($ug_discipline=="Welding Technology") echo 'selected="selected"'; ?>>Welding Technology</option>
<option value="Wildlife Sciences" <?php if($ug_discipline=="Wildlife Sciences") echo 'selected="selected"'; ?>>Wildlife Sciences</option>
<option value="Wireless Communication Technology" <?php if($ug_discipline=="Wireless Communication Technology") echo 'selected="selected"'; ?>>Wireless Communication Technology</option>
<option value="Wood Science and Technology" <?php if($ug_discipline=="Wood Science and Technology") echo 'selected="selected"'; ?>>Wood Science and Technology</option>
<option value="Yoga and Management" <?php if($ug_discipline=="Yoga and Management") echo 'selected="selected"'; ?>>Yoga and Management</option>
<option value="Yoga" <?php if($ug_discipline=="Yoga") echo 'selected="selected"'; ?>>Yoga</option>
<option value="Zoology" <?php if($ug_discipline=="Zoology") echo 'selected="selected"'; ?>>Zoology</option>
<option value="OTHER" <?php if($ug_discipline=="OTHER") echo 'selected="selected"'; ?>>OTHER</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>College Name*</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="ug_college_name" value="<?php echo $ug_college_name; ?>" disabled maxlength="200">
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>University Name*</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="ug_univeristy_name" value="<?php echo $ug_univeristy_name; ?>" disabled maxlength="200">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Passing Year*</b></label>
                            <select class="form-control" name="ug_passing_year" disabled>
                                <option value="">Select</option>
                                <?php
                                $y = date("Y", strtotime("+8 HOURS"));

                                $y = $y + 2;  // Added since gate valid for 3 years
                                for ($year = 1950; $y >= $year; $y--) {
                                         if($ug_passing_year==$y)
				echo "<option value = '".$y."' selected='selected'>".$y."</option>";
			else
			echo "<option value = '".$y."'>".$y."</option>";
                                }
                                ?>
                            </select>
                        </div>


                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Percentage/CGPA*</b></label>
                            <input type="number" class="form-control" id="exampleAccount" name="ug_percentage" value="<?php echo $ug_percentage; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Out of*</b></label>
                            <select class="form-control" name="ug_out_of" disabled>
                                <option value=''>Select</option>
                                <option value="100" <?php if($ug_out_of=="100") echo 'selected="selected"'; ?>>100</option>
<option value="10" <?php if($ug_out_of=="10") echo 'selected="selected"'; ?>>10</option>
<option value="4" <?php if($ug_out_of=="4") echo 'selected="selected"'; ?>>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Complete Status*</b></label>
                            <select class="form-control" name="passing_year" name="ug_complete_status" disabled>
                                <option value=''>Select</option>
                                <option value="Completed" <?php if($ug_complete_status=="Completed") echo 'selected="selected"'; ?>>Completed</option>
<option value="Ongoing" <?php if($ug_complete_status=="Ongoing") echo 'selected="selected"'; ?>>Ongoing</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Notes If Any</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="ug_notes_if_any" value="<?php echo $ug_notes_if_any; ?>" disabled>
                        </div>

                    </div>

                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>


                    <h4 style="color:#A31260 ;">Postgraduate I (if any, leave blank if not applicable)</h4>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Exam Passed</b></label>
                            <input type="text" class="form-control" id="exampleAccount" name="pg_1_exam_passed" placeholder="Postgraduate" disabled="disabled">
                        </div>


                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>PG Degree Name</b></label>
                            <select class="form-control" name="pg_1_pg_degree_name" disabled>
                                <option value="">Select </option>
                                <option value="5 year BS-MS Dual Degree Programme" <?php if($pg_1_pg_degree_name=="5 year BS-MS Dual Degree Programme") echo 'selected="selected"'; ?>>5 year BS-MS Dual Degree Programme</option>
<option value="5 year Integrated M.Sc" <?php if($pg_1_pg_degree_name=="5 year Integrated M.Sc") echo 'selected="selected"'; ?>>5 year Integrated M.Sc</option>
<option value="5 year dual degree B.E. and M.E." <?php if($pg_1_pg_degree_name=="5 year dual degree B.E. and M.E.") echo 'selected="selected"'; ?>>5 year dual degree B.E. and M.E.</option>
<option value="5 year dual degree B.Tech and M.Tech" <?php if($pg_1_pg_degree_name=="5 year dual degree B.Tech and M.Tech") echo 'selected="selected"'; ?>>5 year dual degree B.Tech and M.Tech</option>
<option value="Integrated M.Sc-Ph.D" <?php if($pg_1_pg_degree_name=="Integrated M.Sc-Ph.D") echo 'selected="selected"'; ?>>Integrated M.Sc-Ph.D</option>
<option value="Integrated MA" <?php if($pg_1_pg_degree_name=="Integrated MA") echo 'selected="selected"'; ?>>Integrated MA</option>
<option value="Integrated MBA" <?php if($pg_1_pg_degree_name=="Integrated MBA") echo 'selected="selected"'; ?>>Integrated MBA</option>
<option value="Integrated MCA WITH BCA" <?php if($pg_1_pg_degree_name=="Integrated MCA WITH BCA") echo 'selected="selected"'; ?>>Integrated MCA WITH BCA</option>
<option value="LLM" <?php if($pg_1_pg_degree_name=="LLM") echo 'selected="selected"'; ?>>LLM</option>
<option value="M-Pharma" <?php if($pg_1_pg_degree_name=="M-Pharma") echo 'selected="selected"'; ?>>M-Pharma</option>
<option value="M.Com" <?php if($pg_1_pg_degree_name=="M.Com") echo 'selected="selected"'; ?>>M.Com</option>
<option value="M.D.S." <?php if($pg_1_pg_degree_name=="M.D.S.") echo 'selected="selected"'; ?>>M.D.S.</option>
<option value="M.DES" <?php if($pg_1_pg_degree_name=="M.DES") echo 'selected="selected"'; ?>>M.DES</option>
<option value="M.Ed." <?php if($pg_1_pg_degree_name=="M.Ed.") echo 'selected="selected"'; ?>>M.Ed.</option>
<option value="M.E." <?php if($pg_1_pg_degree_name=="M.E.") echo 'selected="selected"'; ?>>M.E.</option>
<option value="M.Phil." <?php if($pg_1_pg_degree_name=="M.Phil.") echo 'selected="selected"'; ?>>M.Phil.</option>
<option value="M.Sc" <?php if($pg_1_pg_degree_name=="M.Sc") echo 'selected="selected"'; ?>>M.Sc</option>
<option value="M.Tech" <?php if($pg_1_pg_degree_name=="M.Tech") echo 'selected="selected"'; ?>>M.Tech</option>
<option value="MA" <?php if($pg_1_pg_degree_name=="MA") echo 'selected="selected"'; ?>>MA</option>
<option value="MBA" <?php if($pg_1_pg_degree_name=="MBA") echo 'selected="selected"'; ?>>MBA</option>
<option value="MBBS" <?php if($pg_1_pg_degree_name=="MBBS") echo 'selected="selected"'; ?>>MBBS</option>
<option value="MBEM" <?php if($pg_1_pg_degree_name=="MBEM") echo 'selected="selected"'; ?>>MBEM</option>
<option value="MBS" <?php if($pg_1_pg_degree_name=="MBS") echo 'selected="selected"'; ?>>MBS</option>
<option value="MCA" <?php if($pg_1_pg_degree_name=="MCA") echo 'selected="selected"'; ?>>MCA</option>
<option value="MPMIR" <?php if($pg_1_pg_degree_name=="MPMIR") echo 'selected="selected"'; ?>>MPMIR</option>
<option value="MPS" <?php if($pg_1_pg_degree_name=="MPS") echo 'selected="selected"'; ?>>MPS</option>
<option value="MS" <?php if($pg_1_pg_degree_name=="MS") echo 'selected="selected"'; ?>>MS</option>
<option value="MSW" <?php if($pg_1_pg_degree_name=="MSW") echo 'selected="selected"'; ?>>MSW</option>
<option value="PGDABM" <?php if($pg_1_pg_degree_name=="PGDABM") echo 'selected="selected"'; ?>>PGDABM</option>
<option value="PGDHHM" <?php if($pg_1_pg_degree_name=="PGDHHM") echo 'selected="selected"'; ?>>PGDHHM</option>
<option value="PGDM" <?php if($pg_1_pg_degree_name=="PGDM") echo 'selected="selected"'; ?>>PGDM</option>
<option value="PGDRD" <?php if($pg_1_pg_degree_name=="PGDRD") echo 'selected="selected"'; ?>>PGDRD</option>
<option value="PGDT" <?php if($pg_1_pg_degree_name=="PGDT") echo 'selected="selected"'; ?>>PGDT</option>
<option value="OTHER" <?php if($pg_1_pg_degree_name=="OTHER") echo 'selected="selected"'; ?>>OTHER</option>
                            </select>
                        </div>

                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Discipline</b></label>
                            <select class="form-control" name="pg_1_discipline" disabled>
                                <option value="">Select </option>
                                <option value="Account and finance" <?php if($pg_1_discipline=="Account and finance") echo 'selected="selected"'; ?>>Account and finance</option>
<option value="Accountancy" <?php if($pg_1_discipline=="Accountancy") echo 'selected="selected"'; ?>>Accountancy</option>
<option value="Actuarial Science" <?php if($pg_1_discipline=="Actuarial Science") echo 'selected="selected"'; ?>>Actuarial Science</option>
<option value="Advanced Biochemistry" <?php if($pg_1_discipline=="Advanced Biochemistry") echo 'selected="selected"'; ?>>Advanced Biochemistry</option>
<option value="Advanced Manufacturing" <?php if($pg_1_discipline=="Advanced Manufacturing") echo 'selected="selected"'; ?>>Advanced Manufacturing</option>
<option value="Advanced Zoology and Biotechnology" <?php if($pg_1_discipline=="Advanced Zoology and Biotechnology") echo 'selected="selected"'; ?>>Advanced Zoology and Biotechnology</option>
<option value="Advertising Management and Public Relations" <?php if($pg_1_discipline=="Advertising Management and Public Relations") echo 'selected="selected"'; ?>>Advertising Management and Public Relations</option>
<option value="Aerodynamics" <?php if($pg_1_discipline=="Aerodynamics") echo 'selected="selected"'; ?>>Aerodynamics</option>
<option value="Aeronautical Engineering" <?php if($pg_1_discipline=="Aeronautical Engineering") echo 'selected="selected"'; ?>>Aeronautical Engineering</option>
<option value="Aeronautical Science" <?php if($pg_1_discipline=="Aeronautical Science") echo 'selected="selected"'; ?>>Aeronautical Science</option>
<option value="Aeronautical" <?php if($pg_1_discipline=="Aeronautical") echo 'selected="selected"'; ?>>Aeronautical</option>
<option value="Aerospace Engineering" <?php if($pg_1_discipline=="Aerospace Engineering") echo 'selected="selected"'; ?>>Aerospace Engineering</option>
<option value="Aerospace Propulsion" <?php if($pg_1_discipline=="Aerospace Propulsion") echo 'selected="selected"'; ?>>Aerospace Propulsion</option>
<option value="Aerospace" <?php if($pg_1_discipline=="Aerospace") echo 'selected="selected"'; ?>>Aerospace</option>
<option value="Agricultural Biotechnology" <?php if($pg_1_discipline=="Agricultural Biotechnology") echo 'selected="selected"'; ?>>Agricultural Biotechnology</option>
<option value="Agricultural Botany" <?php if($pg_1_discipline=="Agricultural Botany") echo 'selected="selected"'; ?>>Agricultural Botany</option>
<option value="Agricultural Economics and Business Management" <?php if($pg_1_discipline=="Agricultural Economics and Business Management") echo 'selected="selected"'; ?>>Agricultural Economics and Business Management</option>
<option value="Agricultural Economics" <?php if($pg_1_discipline=="Agricultural Economics") echo 'selected="selected"'; ?>>Agricultural Economics</option>
<option value="Agricultural Engineering" <?php if($pg_1_discipline=="Agricultural Engineering") echo 'selected="selected"'; ?>>Agricultural Engineering</option>
<option value="Agricultural Extension Education" <?php if($pg_1_discipline=="Agricultural Extension Education") echo 'selected="selected"'; ?>>Agricultural Extension Education</option>
<option value="Agricultural Microbiology" <?php if($pg_1_discipline=="Agricultural Microbiology") echo 'selected="selected"'; ?>>Agricultural Microbiology</option>
<option value="Agricultural Physics" <?php if($pg_1_discipline=="Agricultural Physics") echo 'selected="selected"'; ?>>Agricultural Physics</option>
<option value="Agricultural Statistics" <?php if($pg_1_discipline=="Agricultural Statistics") echo 'selected="selected"'; ?>>Agricultural Statistics</option>
<option value="Agricultural" <?php if($pg_1_discipline=="Agricultural") echo 'selected="selected"'; ?>>Agricultural</option>
<option value="Agriculture Chemistry and Soil Science" <?php if($pg_1_discipline=="Agriculture Chemistry and Soil Science") echo 'selected="selected"'; ?>>Agriculture Chemistry and Soil Science</option>
<option value="Agriculture and Food Engineering" <?php if($pg_1_discipline=="Agriculture and Food Engineering") echo 'selected="selected"'; ?>>Agriculture and Food Engineering</option>
<option value="Agriculture" <?php if($pg_1_discipline=="Agriculture") echo 'selected="selected"'; ?>>Agriculture</option>
<option value="Agro-meteorology" <?php if($pg_1_discipline=="Agro-meteorology") echo 'selected="selected"'; ?>>Agro-meteorology</option>
<option value="Agroforestry" <?php if($pg_1_discipline=="Agroforestry") echo 'selected="selected"'; ?>>Agroforestry</option>
<option value="Agronomy" <?php if($pg_1_discipline=="Agronomy") echo 'selected="selected"'; ?>>Agronomy</option>
<option value="Air Armament" <?php if($pg_1_discipline=="Air Armament") echo 'selected="selected"'; ?>>Air Armament</option>
<option value="Airlines Tourism and Hospitality Management" <?php if($pg_1_discipline=="Airlines Tourism and Hospitality Management") echo 'selected="selected"'; ?>>Airlines Tourism and Hospitality Management</option>
<option value="Alloy Technology" <?php if($pg_1_discipline=="Alloy Technology") echo 'selected="selected"'; ?>>Alloy Technology</option>
<option value="Anaesthesia Technology" <?php if($pg_1_discipline=="Anaesthesia Technology") echo 'selected="selected"'; ?>>Anaesthesia Technology</option>
<option value="Analytical Chemistry" <?php if($pg_1_discipline=="Analytical Chemistry") echo 'selected="selected"'; ?>>Analytical Chemistry</option>
<option value="Anatomy" <?php if($pg_1_discipline=="Anatomy") echo 'selected="selected"'; ?>>Anatomy</option>
<option value="Animal Biotechnology" <?php if($pg_1_discipline=="Animal Biotechnology") echo 'selected="selected"'; ?>>Animal Biotechnology</option>
<option value="Animal Nutrition" <?php if($pg_1_discipline=="Animal Nutrition") echo 'selected="selected"'; ?>>Animal Nutrition</option>
<option value="Animal Science" <?php if($pg_1_discipline=="Animal Science") echo 'selected="selected"'; ?>>Animal Science</option>
<option value="Animation Filmmaking" <?php if($pg_1_discipline=="Animation Filmmaking") echo 'selected="selected"'; ?>>Animation Filmmaking</option>
<option value="Animation and Visual Effects" <?php if($pg_1_discipline=="Animation and Visual Effects") echo 'selected="selected"'; ?>>Animation and Visual Effects</option>
<option value="Animation" <?php if($pg_1_discipline=="Animation") echo 'selected="selected"'; ?>>Animation</option>
<option value="Anthropology" <?php if($pg_1_discipline=="Anthropology") echo 'selected="selected"'; ?>>Anthropology</option>
<option value="Apparel Technology and Management" <?php if($pg_1_discipline=="Apparel Technology and Management") echo 'selected="selected"'; ?>>Apparel Technology and Management</option>
<option value="Apparel and Textiles" <?php if($pg_1_discipline=="Apparel and Textiles") echo 'selected="selected"'; ?>>Apparel and Textiles</option>
<option value="Applications of Mathematics" <?php if($pg_1_discipline=="Applications of Mathematics") echo 'selected="selected"'; ?>>Applications of Mathematics</option>
<option value="Applied Biology" <?php if($pg_1_discipline=="Applied Biology") echo 'selected="selected"'; ?>>Applied Biology</option>
<option value="Applied Biotechnology" <?php if($pg_1_discipline=="Applied Biotechnology") echo 'selected="selected"'; ?>>Applied Biotechnology</option>
<option value="Applied Chemistry" <?php if($pg_1_discipline=="Applied Chemistry") echo 'selected="selected"'; ?>>Applied Chemistry</option>
<option value="Applied Econometrics and Business Forecasting" <?php if($pg_1_discipline=="Applied Econometrics and Business Forecasting") echo 'selected="selected"'; ?>>Applied Econometrics and Business Forecasting</option>
<option value="Applied Economics" <?php if($pg_1_discipline=="Applied Economics") echo 'selected="selected"'; ?>>Applied Economics</option>
<option value="Applied Electronics and Instrumentation" <?php if($pg_1_discipline=="Applied Electronics and Instrumentation") echo 'selected="selected"'; ?>>Applied Electronics and Instrumentation</option>
<option value="Applied Electronics" <?php if($pg_1_discipline=="Applied Electronics") echo 'selected="selected"'; ?>>Applied Electronics</option>
<option value="Applied Fisheries and Aquaculture" <?php if($pg_1_discipline=="Applied Fisheries and Aquaculture") echo 'selected="selected"'; ?>>Applied Fisheries and Aquaculture</option>
<option value="Applied Genetics" <?php if($pg_1_discipline=="Applied Genetics") echo 'selected="selected"'; ?>>Applied Genetics</option>
<option value="Applied Geography" <?php if($pg_1_discipline=="Applied Geography") echo 'selected="selected"'; ?>>Applied Geography</option>
<option value="Applied Geology" <?php if($pg_1_discipline=="Applied Geology") echo 'selected="selected"'; ?>>Applied Geology</option>
<option value="Applied Geophysics" <?php if($pg_1_discipline=="Applied Geophysics") echo 'selected="selected"'; ?>>Applied Geophysics</option>
<option value="Applied Mathematics and Computing" <?php if($pg_1_discipline=="Applied Mathematics and Computing") echo 'selected="selected"'; ?>>Applied Mathematics and Computing</option>
<option value="Applied Mathematics" <?php if($pg_1_discipline=="Applied Mathematics") echo 'selected="selected"'; ?>>Applied Mathematics</option>
<option value="Applied Mechanics" <?php if($pg_1_discipline=="Applied Mechanics") echo 'selected="selected"'; ?>>Applied Mechanics</option>
<option value="Applied Microbiology" <?php if($pg_1_discipline=="Applied Microbiology") echo 'selected="selected"'; ?>>Applied Microbiology</option>
<option value="Applied Nutrition" <?php if($pg_1_discipline=="Applied Nutrition") echo 'selected="selected"'; ?>>Applied Nutrition</option>
<option value="Applied Optics" <?php if($pg_1_discipline=="Applied Optics") echo 'selected="selected"'; ?>>Applied Optics</option>
<option value="Applied Physics" <?php if($pg_1_discipline=="Applied Physics") echo 'selected="selected"'; ?>>Applied Physics</option>
<option value="Applied Plant Science" <?php if($pg_1_discipline=="Applied Plant Science") echo 'selected="selected"'; ?>>Applied Plant Science</option>
<option value="Applied Psychology" <?php if($pg_1_discipline=="Applied Psychology") echo 'selected="selected"'; ?>>Applied Psychology</option>
<option value="Applied Science" <?php if($pg_1_discipline=="Applied Science") echo 'selected="selected"'; ?>>Applied Science</option>
<option value="Applied Statistics and Informatics" <?php if($pg_1_discipline=="Applied Statistics and Informatics") echo 'selected="selected"'; ?>>Applied Statistics and Informatics</option>
<option value="Applied Zoology" <?php if($pg_1_discipline=="Applied Zoology") echo 'selected="selected"'; ?>>Applied Zoology</option>
<option value="Aqua Cultural" <?php if($pg_1_discipline=="Aqua Cultural") echo 'selected="selected"'; ?>>Aqua Cultural</option>
<option value="Aquaculture" <?php if($pg_1_discipline=="Aquaculture") echo 'selected="selected"'; ?>>Aquaculture</option>
<option value="Aqualogy" <?php if($pg_1_discipline=="Aqualogy") echo 'selected="selected"'; ?>>Aqualogy</option>
<option value="Aquatic Biology and Fisheries" <?php if($pg_1_discipline=="Aquatic Biology and Fisheries") echo 'selected="selected"'; ?>>Aquatic Biology and Fisheries</option>
<option value="Architectural Engineering" <?php if($pg_1_discipline=="Architectural Engineering") echo 'selected="selected"'; ?>>Architectural Engineering</option>
<option value="Architecture Urban Design" <?php if($pg_1_discipline=="Architecture Urban Design") echo 'selected="selected"'; ?>>Architecture Urban Design</option>
<option value="Architecture" <?php if($pg_1_discipline=="Architecture") echo 'selected="selected"'; ?>>Architecture</option>
<option value="Artificial Intelligence and Machine Learning" <?php if($pg_1_discipline=="Artificial Intelligence and Machine Learning") echo 'selected="selected"'; ?>>Artificial Intelligence and Machine Learning</option>
<option value="Artificial Intelligence" <?php if($pg_1_discipline=="Artificial Intelligence") echo 'selected="selected"'; ?>>Artificial Intelligence</option>
<option value="Assistant Engineer" <?php if($pg_1_discipline=="Assistant Engineer") echo 'selected="selected"'; ?>>Assistant Engineer</option>
<option value="Astronomy and Space Physics" <?php if($pg_1_discipline=="Astronomy and Space Physics") echo 'selected="selected"'; ?>>Astronomy and Space Physics</option>
<option value="Astronomy" <?php if($pg_1_discipline=="Astronomy") echo 'selected="selected"'; ?>>Astronomy</option>
<option value="Astrophysics" <?php if($pg_1_discipline=="Astrophysics") echo 'selected="selected"'; ?>>Astrophysics</option>
<option value="Athletic Training" <?php if($pg_1_discipline=="Athletic Training") echo 'selected="selected"'; ?>>Athletic Training</option>
<option value="Audio Speech Therapy" <?php if($pg_1_discipline=="Audio Speech Therapy") echo 'selected="selected"'; ?>>Audio Speech Therapy</option>
<option value="Audiology and Speech Language Pathology" <?php if($pg_1_discipline=="Audiology and Speech Language Pathology") echo 'selected="selected"'; ?>>Audiology and Speech Language Pathology</option>
<option value="Audiology and Speech Rehabilitation" <?php if($pg_1_discipline=="Audiology and Speech Rehabilitation") echo 'selected="selected"'; ?>>Audiology and Speech Rehabilitation</option>
<option value="Audiology" <?php if($pg_1_discipline=="Audiology") echo 'selected="selected"'; ?>>Audiology</option>
<option value="Automobile Engineer" <?php if($pg_1_discipline=="Automobile Engineer") echo 'selected="selected"'; ?>>Automobile Engineer</option>
<option value="Automobile Engineering" <?php if($pg_1_discipline=="Automobile Engineering") echo 'selected="selected"'; ?>>Automobile Engineering</option>
<option value="Automobile" <?php if($pg_1_discipline=="Automobile") echo 'selected="selected"'; ?>>Automobile</option>
<option value="Automobile/Automotive" <?php if($pg_1_discipline=="Automobile/Automotive") echo 'selected="selected"'; ?>>Automobile/Automotive</option>
<option value="Automotive Engineering" <?php if($pg_1_discipline=="Automotive Engineering") echo 'selected="selected"'; ?>>Automotive Engineering</option>
<option value="Automotive" <?php if($pg_1_discipline=="Automotive") echo 'selected="selected"'; ?>>Automotive</option>
<option value="Aviation" <?php if($pg_1_discipline=="Aviation") echo 'selected="selected"'; ?>>Aviation</option>
<option value="Avionics" <?php if($pg_1_discipline=="Avionics") echo 'selected="selected"'; ?>>Avionics</option>
<option value="Bacteriology" <?php if($pg_1_discipline=="Bacteriology") echo 'selected="selected"'; ?>>Bacteriology</option>
<option value="Banking and Finance" <?php if($pg_1_discipline=="Banking and Finance") echo 'selected="selected"'; ?>>Banking and Finance</option>
<option value="Beauty Cosmetology" <?php if($pg_1_discipline=="Beauty Cosmetology") echo 'selected="selected"'; ?>>Beauty Cosmetology</option>
<option value="Big Data Analytics" <?php if($pg_1_discipline=="Big Data Analytics") echo 'selected="selected"'; ?>>Big Data Analytics</option>
<option value="Bio Mineral Processing" <?php if($pg_1_discipline=="Bio Mineral Processing") echo 'selected="selected"'; ?>>Bio Mineral Processing</option>
<option value="Bio Mineral" <?php if($pg_1_discipline=="Bio Mineral") echo 'selected="selected"'; ?>>Bio Mineral</option>
<option value="Bio Pharmaceutical Technology" <?php if($pg_1_discipline=="Bio Pharmaceutical Technology") echo 'selected="selected"'; ?>>Bio Pharmaceutical Technology</option>
<option value="Bio-informatics" <?php if($pg_1_discipline=="Bio-informatics") echo 'selected="selected"'; ?>>Bio-informatics</option>
<option value="Bio-textiles" <?php if($pg_1_discipline=="Bio-textiles") echo 'selected="selected"'; ?>>Bio-textiles</option>
<option value="BioInformatics" <?php if($pg_1_discipline=="BioInformatics") echo 'selected="selected"'; ?>>BioInformatics</option>
<option value="Biochemical" <?php if($pg_1_discipline=="Biochemical") echo 'selected="selected"'; ?>>Biochemical</option>
<option value="Biochemistry" <?php if($pg_1_discipline=="Biochemistry") echo 'selected="selected"'; ?>>Biochemistry</option>
<option value="Biodiversity and Conservation" <?php if($pg_1_discipline=="Biodiversity and Conservation") echo 'selected="selected"'; ?>>Biodiversity and Conservation</option>
<option value="Bioinformatics" <?php if($pg_1_discipline=="Bioinformatics") echo 'selected="selected"'; ?>>Bioinformatics</option>
<option value="Biological Science" <?php if($pg_1_discipline=="Biological Science") echo 'selected="selected"'; ?>>Biological Science</option>
<option value="Biological Sciences" <?php if($pg_1_discipline=="Biological Sciences") echo 'selected="selected"'; ?>>Biological Sciences</option>
<option value="Biology" <?php if($pg_1_discipline=="Biology") echo 'selected="selected"'; ?>>Biology</option>
<option value="Biomaterials and Tissue Engineering" <?php if($pg_1_discipline=="Biomaterials and Tissue Engineering") echo 'selected="selected"'; ?>>Biomaterials and Tissue Engineering</option>
<option value="Biomedical Engineering" <?php if($pg_1_discipline=="Biomedical Engineering") echo 'selected="selected"'; ?>>Biomedical Engineering</option>
<option value="Biomedical Genetics" <?php if($pg_1_discipline=="Biomedical Genetics") echo 'selected="selected"'; ?>>Biomedical Genetics</option>
<option value="Biomedical Science" <?php if($pg_1_discipline=="Biomedical Science") echo 'selected="selected"'; ?>>Biomedical Science</option>
<option value="Biomedical Sciences" <?php if($pg_1_discipline=="Biomedical Sciences") echo 'selected="selected"'; ?>>Biomedical Sciences</option>
<option value="Biomedical" <?php if($pg_1_discipline=="Biomedical") echo 'selected="selected"'; ?>>Biomedical</option>
<option value="Biophysics" <?php if($pg_1_discipline=="Biophysics") echo 'selected="selected"'; ?>>Biophysics</option>
<option value="Bioprocess Technology" <?php if($pg_1_discipline=="Bioprocess Technology") echo 'selected="selected"'; ?>>Bioprocess Technology</option>
<option value="Bioresource Management" <?php if($pg_1_discipline=="Bioresource Management") echo 'selected="selected"'; ?>>Bioresource Management</option>
<option value="Bioscience" <?php if($pg_1_discipline=="Bioscience") echo 'selected="selected"'; ?>>Bioscience</option>
<option value="Biostatistics" <?php if($pg_1_discipline=="Biostatistics") echo 'selected="selected"'; ?>>Biostatistics</option>
<option value="Biotech Engineering" <?php if($pg_1_discipline=="Biotech Engineering") echo 'selected="selected"'; ?>>Biotech Engineering</option>
<option value="Biotechnology Engineering" <?php if($pg_1_discipline=="Biotechnology Engineering") echo 'selected="selected"'; ?>>Biotechnology Engineering</option>
<option value="Biotechnology" <?php if($pg_1_discipline=="Biotechnology") echo 'selected="selected"'; ?>>Biotechnology</option>
<option value="Biotechnology" <?php if($pg_1_discipline=="Biotechnology") echo 'selected="selected"'; ?>>Biotechnology</option>
<option value="Botany hons" <?php if($pg_1_discipline=="Botany hons") echo 'selected="selected"'; ?>>Botany hons</option>
<option value="Botany" <?php if($pg_1_discipline=="Botany") echo 'selected="selected"'; ?>>Botany</option>
<option value="Business Administration Finance" <?php if($pg_1_discipline=="Business Administration Finance") echo 'selected="selected"'; ?>>Business Administration Finance</option>
<option value="Business Administration Human Resource" <?php if($pg_1_discipline=="Business Administration Human Resource") echo 'selected="selected"'; ?>>Business Administration Human Resource</option>
<option value="Business Administration Information Tech." <?php if($pg_1_discipline=="Business Administration Information Tech.") echo 'selected="selected"'; ?>>Business Administration Information Tech.</option>
<option value="Business Administration Marketing" <?php if($pg_1_discipline=="Business Administration Marketing") echo 'selected="selected"'; ?>>Business Administration Marketing</option>
<option value="Business Administration" <?php if($pg_1_discipline=="Business Administration") echo 'selected="selected"'; ?>>Business Administration</option>
<option value="CAD CAM" <?php if($pg_1_discipline=="CAD CAM") echo 'selected="selected"'; ?>>CAD CAM</option>
<option value="CAD/CAM" <?php if($pg_1_discipline=="CAD/CAM") echo 'selected="selected"'; ?>>CAD/CAM</option>
<option value="Cardiac Perfusion" <?php if($pg_1_discipline=="Cardiac Perfusion") echo 'selected="selected"'; ?>>Cardiac Perfusion</option>
<option value="Cardiovascular Technology" <?php if($pg_1_discipline=="Cardiovascular Technology") echo 'selected="selected"'; ?>>Cardiovascular Technology</option>
<option value="Cell and Molecular Biology" <?php if($pg_1_discipline=="Cell and Molecular Biology") echo 'selected="selected"'; ?>>Cell and Molecular Biology</option>
<option value="Ceramic Engineering" <?php if($pg_1_discipline=="Ceramic Engineering") echo 'selected="selected"'; ?>>Ceramic Engineering</option>
<option value="Ceramic" <?php if($pg_1_discipline=="Ceramic") echo 'selected="selected"'; ?>>Ceramic</option>
<option value="Chemical Engineering" <?php if($pg_1_discipline=="Chemical Engineering") echo 'selected="selected"'; ?>>Chemical Engineering</option>
<option value="Chemical Sciences" <?php if($pg_1_discipline=="Chemical Sciences") echo 'selected="selected"'; ?>>Chemical Sciences</option>
<option value="Chemical" <?php if($pg_1_discipline=="Chemical") echo 'selected="selected"'; ?>>Chemical</option>
<option value="Chemistry hons" <?php if($pg_1_discipline=="Chemistry hons") echo 'selected="selected"'; ?>>Chemistry hons</option>
<option value="Chemistry" <?php if($pg_1_discipline=="Chemistry") echo 'selected="selected"'; ?>>Chemistry</option>
<option value="Chief Engineer" <?php if($pg_1_discipline=="Chief Engineer") echo 'selected="selected"'; ?>>Chief Engineer</option>
<option value="Chief" <?php if($pg_1_discipline=="Chief") echo 'selected="selected"'; ?>>Chief</option>
<option value="Child Guidance and Family Counselling" <?php if($pg_1_discipline=="Child Guidance and Family Counselling") echo 'selected="selected"'; ?>>Child Guidance and Family Counselling</option>
<option value="Child Health Nursing" <?php if($pg_1_discipline=="Child Health Nursing") echo 'selected="selected"'; ?>>Child Health Nursing</option>
<option value="Cinematography" <?php if($pg_1_discipline=="Cinematography") echo 'selected="selected"'; ?>>Cinematography</option>
<option value="Civil Engineering" <?php if($pg_1_discipline=="Civil Engineering") echo 'selected="selected"'; ?>>Civil Engineering</option>
<option value="Civil Science" <?php if($pg_1_discipline=="Civil Science") echo 'selected="selected"'; ?>>Civil Science</option>
<option value="Civil" <?php if($pg_1_discipline=="Civil") echo 'selected="selected"'; ?>>Civil</option>
<option value="Clinical Laboratory Science" <?php if($pg_1_discipline=="Clinical Laboratory Science") echo 'selected="selected"'; ?>>Clinical Laboratory Science</option>
<option value="Clinical Microbiology" <?php if($pg_1_discipline=="Clinical Microbiology") echo 'selected="selected"'; ?>>Clinical Microbiology</option>
<option value="Clinical Nutrition" <?php if($pg_1_discipline=="Clinical Nutrition") echo 'selected="selected"'; ?>>Clinical Nutrition</option>
<option value="Clinical Psychology" <?php if($pg_1_discipline=="Clinical Psychology") echo 'selected="selected"'; ?>>Clinical Psychology</option>
<option value="Clinical Research and Regulatory Affairs" <?php if($pg_1_discipline=="Clinical Research and Regulatory Affairs") echo 'selected="selected"'; ?>>Clinical Research and Regulatory Affairs</option>
<option value="Clinical Research" <?php if($pg_1_discipline=="Clinical Research") echo 'selected="selected"'; ?>>Clinical Research</option>
<option value="Clothing and Textiles" <?php if($pg_1_discipline=="Clothing and Textiles") echo 'selected="selected"'; ?>>Clothing and Textiles</option>
<option value="Cloud Computing" <?php if($pg_1_discipline=="Cloud Computing") echo 'selected="selected"'; ?>>Cloud Computing</option>
<option value="Co-operation and BankingCo-Operative Management" <?php if($pg_1_discipline=="Co-operation and BankingCo-Operative Management") echo 'selected="selected"'; ?>>Co-operation and BankingCo-Operative Management</option>
<option value="Coastal and Disaster Management" <?php if($pg_1_discipline=="Coastal and Disaster Management") echo 'selected="selected"'; ?>>Coastal and Disaster Management</option>
<option value="Cognitive Science" <?php if($pg_1_discipline=="Cognitive Science") echo 'selected="selected"'; ?>>Cognitive Science</option>
<option value="Commerce Accountancy" <?php if($pg_1_discipline=="Commerce Accountancy") echo 'selected="selected"'; ?>>Commerce Accountancy</option>
<option value="Commerce Accounting and Finance" <?php if($pg_1_discipline=="Commerce Accounting and Finance") echo 'selected="selected"'; ?>>Commerce Accounting and Finance</option>
<option value="Commerce Computer Applications" <?php if($pg_1_discipline=="Commerce Computer Applications") echo 'selected="selected"'; ?>>Commerce Computer Applications</option>
<option value="Commerce Finance" <?php if($pg_1_discipline=="Commerce Finance") echo 'selected="selected"'; ?>>Commerce Finance</option>
<option value="Commerce" <?php if($pg_1_discipline=="Commerce") echo 'selected="selected"'; ?>>Commerce</option>
<option value="Communication Design" <?php if($pg_1_discipline=="Communication Design") echo 'selected="selected"'; ?>>Communication Design</option>
<option value="Communication Media for Children" <?php if($pg_1_discipline=="Communication Media for Children") echo 'selected="selected"'; ?>>Communication Media for Children</option>
<option value="Communication Systems" <?php if($pg_1_discipline=="Communication Systems") echo 'selected="selected"'; ?>>Communication Systems</option>
<option value="Communication" <?php if($pg_1_discipline=="Communication") echo 'selected="selected"'; ?>>Communication</option>
<option value="Communications Engineering" <?php if($pg_1_discipline=="Communications Engineering") echo 'selected="selected"'; ?>>Communications Engineering</option>
<option value="Community Health Nursing" <?php if($pg_1_discipline=="Community Health Nursing") echo 'selected="selected"'; ?>>Community Health Nursing</option>
<option value="Computational Biology" <?php if($pg_1_discipline=="Computational Biology") echo 'selected="selected"'; ?>>Computational Biology</option>
<option value="Computer Animation and Visual Effects" <?php if($pg_1_discipline=="Computer Animation and Visual Effects") echo 'selected="selected"'; ?>>Computer Animation and Visual Effects</option>
<option value="Computer Applications" <?php if($pg_1_discipline=="Computer Applications") echo 'selected="selected"'; ?>>Computer Applications</option>
<option value="Computer Communication" <?php if($pg_1_discipline=="Computer Communication") echo 'selected="selected"'; ?>>Computer Communication</option>
<option value="Computer Engineering" <?php if($pg_1_discipline=="Computer Engineering") echo 'selected="selected"'; ?>>Computer Engineering</option>
<option value="Computer Integrated Manufacturing" <?php if($pg_1_discipline=="Computer Integrated Manufacturing") echo 'selected="selected"'; ?>>Computer Integrated Manufacturing</option>
<option value="Computer Network and Information Security" <?php if($pg_1_discipline=="Computer Network and Information Security") echo 'selected="selected"'; ?>>Computer Network and Information Security</option>
<option value="Computer Network" <?php if($pg_1_discipline=="Computer Network") echo 'selected="selected"'; ?>>Computer Network</option>
<option value="Computer Science Engineering" <?php if($pg_1_discipline=="Computer Science Engineering") echo 'selected="selected"'; ?>>Computer Science Engineering</option>
<option value="Computer Science Technology" <?php if($pg_1_discipline=="Computer Science Technology") echo 'selected="selected"'; ?>>Computer Science Technology</option>
<option value="Computer Science and Engineering" <?php if($pg_1_discipline=="Computer Science and Engineering") echo 'selected="selected"'; ?>>Computer Science and Engineering</option>
<option value="Computer Science and Technology" <?php if($pg_1_discipline=="Computer Science and Technology") echo 'selected="selected"'; ?>>Computer Science and Technology</option>
<option value="Computer Science" <?php if($pg_1_discipline=="Computer Science") echo 'selected="selected"'; ?>>Computer Science</option>
<option value="Computer Technology" <?php if($pg_1_discipline=="Computer Technology") echo 'selected="selected"'; ?>>Computer Technology</option>
<option value="Computer" <?php if($pg_1_discipline=="Computer") echo 'selected="selected"'; ?>>Computer</option>
<option value="Conservation Biology" <?php if($pg_1_discipline=="Conservation Biology") echo 'selected="selected"'; ?>>Conservation Biology</option>
<option value="Constitutional Law" <?php if($pg_1_discipline=="Constitutional Law") echo 'selected="selected"'; ?>>Constitutional Law</option>
<option value="Construction Engineering" <?php if($pg_1_discipline=="Construction Engineering") echo 'selected="selected"'; ?>>Construction Engineering</option>
<option value="Construction Management" <?php if($pg_1_discipline=="Construction Management") echo 'selected="selected"'; ?>>Construction Management</option>
<option value="Construction Technology" <?php if($pg_1_discipline=="Construction Technology") echo 'selected="selected"'; ?>>Construction Technology</option>
<option value="Construction and Management" <?php if($pg_1_discipline=="Construction and Management") echo 'selected="selected"'; ?>>Construction and Management</option>
<option value="Control Systems" <?php if($pg_1_discipline=="Control Systems") echo 'selected="selected"'; ?>>Control Systems</option>
<option value="Control and Instrumentation" <?php if($pg_1_discipline=="Control and Instrumentation") echo 'selected="selected"'; ?>>Control and Instrumentation</option>
<option value="Corporate Law" <?php if($pg_1_discipline=="Corporate Law") echo 'selected="selected"'; ?>>Corporate Law</option>
<option value="Costume Design and Fashion" <?php if($pg_1_discipline=="Costume Design and Fashion") echo 'selected="selected"'; ?>>Costume Design and Fashion</option>
<option value="Counseling Psychology" <?php if($pg_1_discipline=="Counseling Psychology") echo 'selected="selected"'; ?>>Counseling Psychology</option>
<option value="Counselling" <?php if($pg_1_discipline=="Counselling") echo 'selected="selected"'; ?>>Counselling</option>
<option value="Criminal Justice" <?php if($pg_1_discipline=="Criminal Justice") echo 'selected="selected"'; ?>>Criminal Justice</option>
<option value="Criminal Law" <?php if($pg_1_discipline=="Criminal Law") echo 'selected="selected"'; ?>>Criminal Law</option>
<option value="Criminology and Criminal Justice" <?php if($pg_1_discipline=="Criminology and Criminal Justice") echo 'selected="selected"'; ?>>Criminology and Criminal Justice</option>
<option value="Criminology" <?php if($pg_1_discipline=="Criminology") echo 'selected="selected"'; ?>>Criminology</option>
<option value="Cyber Law and Information Security" <?php if($pg_1_discipline=="Cyber Law and Information Security") echo 'selected="selected"'; ?>>Cyber Law and Information Security</option>
<option value="Cyber Security" <?php if($pg_1_discipline=="Cyber Security") echo 'selected="selected"'; ?>>Cyber Security</option>
<option value="Dairy Engineering" <?php if($pg_1_discipline=="Dairy Engineering") echo 'selected="selected"'; ?>>Dairy Engineering</option>
<option value="Dairy Science" <?php if($pg_1_discipline=="Dairy Science") echo 'selected="selected"'; ?>>Dairy Science</option>
<option value="Dairy Technology" <?php if($pg_1_discipline=="Dairy Technology") echo 'selected="selected"'; ?>>Dairy Technology</option>
<option value="Data Analytics" <?php if($pg_1_discipline=="Data Analytics") echo 'selected="selected"'; ?>>Data Analytics</option>
<option value="Data Mining and Warehousing" <?php if($pg_1_discipline=="Data Mining and Warehousing") echo 'selected="selected"'; ?>>Data Mining and Warehousing</option>
<option value="Data Science" <?php if($pg_1_discipline=="Data Science") echo 'selected="selected"'; ?>>Data Science</option>
<option value="Dental Surgery" <?php if($pg_1_discipline=="Dental Surgery") echo 'selected="selected"'; ?>>Dental Surgery</option>
<option value="Design and Manufacturing" <?php if($pg_1_discipline=="Design and Manufacturing") echo 'selected="selected"'; ?>>Design and Manufacturing</option>
<option value="Design" <?php if($pg_1_discipline=="Design") echo 'selected="selected"'; ?>>Design</option>
<option value="Development Communications" <?php if($pg_1_discipline=="Development Communications") echo 'selected="selected"'; ?>>Development Communications</option>
<option value="Development Studies" <?php if($pg_1_discipline=="Development Studies") echo 'selected="selected"'; ?>>Development Studies</option>
<option value="Dietetics" <?php if($pg_1_discipline=="Dietetics") echo 'selected="selected"'; ?>>Dietetics</option>
<option value="Digital Communication and Networking" <?php if($pg_1_discipline=="Digital Communication and Networking") echo 'selected="selected"'; ?>>Digital Communication and Networking</option>
<option value="Digital Communication" <?php if($pg_1_discipline=="Digital Communication") echo 'selected="selected"'; ?>>Digital Communication</option>
<option value="Digital Electronics and Communication Systems" <?php if($pg_1_discipline=="Digital Electronics and Communication Systems") echo 'selected="selected"'; ?>>Digital Electronics and Communication Systems</option>
<option value="Digital Electronics and Communication" <?php if($pg_1_discipline=="Digital Electronics and Communication") echo 'selected="selected"'; ?>>Digital Electronics and Communication</option>
<option value="Digital Filmmaking" <?php if($pg_1_discipline=="Digital Filmmaking") echo 'selected="selected"'; ?>>Digital Filmmaking</option>
<option value="Digital System and Signal Processing" <?php if($pg_1_discipline=="Digital System and Signal Processing") echo 'selected="selected"'; ?>>Digital System and Signal Processing</option>
<option value="Digital Systems and Computer Electronics" <?php if($pg_1_discipline=="Digital Systems and Computer Electronics") echo 'selected="selected"'; ?>>Digital Systems and Computer Electronics</option>
<option value="Disaster Mitigation" <?php if($pg_1_discipline=="Disaster Mitigation") echo 'selected="selected"'; ?>>Disaster Mitigation</option>
<option value="Dot Multimedia" <?php if($pg_1_discipline=="Dot Multimedia") echo 'selected="selected"'; ?>>Dot Multimedia</option>
<option value="Drug Chemistry" <?php if($pg_1_discipline=="Drug Chemistry") echo 'selected="selected"'; ?>>Drug Chemistry</option>
<option value="E-Learning Technology" <?php if($pg_1_discipline=="E-Learning Technology") echo 'selected="selected"'; ?>>E-Learning Technology</option>
<option value="Earth Science and Resource Management" <?php if($pg_1_discipline=="Earth Science and Resource Management") echo 'selected="selected"'; ?>>Earth Science and Resource Management</option>
<option value="Earth Science" <?php if($pg_1_discipline=="Earth Science") echo 'selected="selected"'; ?>>Earth Science</option>
<option value="Earth Sciences" <?php if($pg_1_discipline=="Earth Sciences") echo 'selected="selected"'; ?>>Earth Sciences</option>
<option value="Earth System Science" <?php if($pg_1_discipline=="Earth System Science") echo 'selected="selected"'; ?>>Earth System Science</option>
<option value="Earthquake" <?php if($pg_1_discipline=="Earthquake") echo 'selected="selected"'; ?>>Earthquake</option>
<option value="Eco Restoration" <?php if($pg_1_discipline=="Eco Restoration") echo 'selected="selected"'; ?>>Eco Restoration</option>
<option value="Ecology and Environmental Science" <?php if($pg_1_discipline=="Ecology and Environmental Science") echo 'selected="selected"'; ?>>Ecology and Environmental Science</option>
<option value="Ecology" <?php if($pg_1_discipline=="Ecology") echo 'selected="selected"'; ?>>Ecology</option>
<option value="Economics and Finance" <?php if($pg_1_discipline=="Economics and Finance") echo 'selected="selected"'; ?>>Economics and Finance</option>
<option value="Economics" <?php if($pg_1_discipline=="Economics") echo 'selected="selected"'; ?>>Economics</option>
<option value="Ecotourism" <?php if($pg_1_discipline=="Ecotourism") echo 'selected="selected"'; ?>>Ecotourism</option>
<option value="Education" <?php if($pg_1_discipline=="Education") echo 'selected="selected"'; ?>>Education</option>
<option value="Electrical Devices and Power Systems" <?php if($pg_1_discipline=="Electrical Devices and Power Systems") echo 'selected="selected"'; ?>>Electrical Devices and Power Systems</option>
<option value="Electrical Engineering" <?php if($pg_1_discipline=="Electrical Engineering") echo 'selected="selected"'; ?>>Electrical Engineering</option>
<option value="Electrical and Electronics Engineering" <?php if($pg_1_discipline=="Electrical and Electronics Engineering") echo 'selected="selected"'; ?>>Electrical and Electronics Engineering</option>
<option value="Electrical and Electronics" <?php if($pg_1_discipline=="Electrical and Electronics") echo 'selected="selected"'; ?>>Electrical and Electronics</option>
<option value="Electrical power system" <?php if($pg_1_discipline=="Electrical power system") echo 'selected="selected"'; ?>>Electrical power system</option>
<option value="Electrical" <?php if($pg_1_discipline=="Electrical") echo 'selected="selected"'; ?>>Electrical</option>
<option value="Electro Chemistry" <?php if($pg_1_discipline=="Electro Chemistry") echo 'selected="selected"'; ?>>Electro Chemistry</option>
<option value="Electronic Media" <?php if($pg_1_discipline=="Electronic Media") echo 'selected="selected"'; ?>>Electronic Media</option>
<option value="Electronic Science" <?php if($pg_1_discipline=="Electronic Science") echo 'selected="selected"'; ?>>Electronic Science</option>
<option value="Electronics Engineer" <?php if($pg_1_discipline=="Electronics Engineer") echo 'selected="selected"'; ?>>Electronics Engineer</option>
<option value="Electronics Engineering" <?php if($pg_1_discipline=="Electronics Engineering") echo 'selected="selected"'; ?>>Electronics Engineering</option>
<option value="Electronics and Communication" <?php if($pg_1_discipline=="Electronics and Communication") echo 'selected="selected"'; ?>>Electronics and Communication</option>
<option value="Electronics and Communications Engineering" <?php if($pg_1_discipline=="Electronics and Communications Engineering") echo 'selected="selected"'; ?>>Electronics and Communications Engineering</option>
<option value="Electronics and Electrical" <?php if($pg_1_discipline=="Electronics and Electrical") echo 'selected="selected"'; ?>>Electronics and Electrical</option>
<option value="Electronics and Instrumentation" <?php if($pg_1_discipline=="Electronics and Instrumentation") echo 'selected="selected"'; ?>>Electronics and Instrumentation</option>
<option value="Electronics and Telecommunication" <?php if($pg_1_discipline=="Electronics and Telecommunication") echo 'selected="selected"'; ?>>Electronics and Telecommunication</option>
<option value="Electronics and Telecommunications" <?php if($pg_1_discipline=="Electronics and Telecommunications") echo 'selected="selected"'; ?>>Electronics and Telecommunications</option>
<option value="Electronics" <?php if($pg_1_discipline=="Electronics") echo 'selected="selected"'; ?>>Electronics</option>
<option value="Embedded System Technologies" <?php if($pg_1_discipline=="Embedded System Technologies") echo 'selected="selected"'; ?>>Embedded System Technologies</option>
<option value="Embedded System and VLSI Design" <?php if($pg_1_discipline=="Embedded System and VLSI Design") echo 'selected="selected"'; ?>>Embedded System and VLSI Design</option>
<option value="Embedded Systems" <?php if($pg_1_discipline=="Embedded Systems") echo 'selected="selected"'; ?>>Embedded Systems</option>
<option value="Endocrinology" <?php if($pg_1_discipline=="Endocrinology") echo 'selected="selected"'; ?>>Endocrinology</option>
<option value="Energy Systems" <?php if($pg_1_discipline=="Energy Systems") echo 'selected="selected"'; ?>>Energy Systems</option>
<option value="Energy" <?php if($pg_1_discipline=="Energy") echo 'selected="selected"'; ?>>Energy</option>
<option value="Engineering Physics" <?php if($pg_1_discipline=="Engineering Physics") echo 'selected="selected"'; ?>>Engineering Physics</option>
<option value="English" <?php if($pg_1_discipline=="English") echo 'selected="selected"'; ?>>English</option>
<option value="Entomology" <?php if($pg_1_discipline=="Entomology") echo 'selected="selected"'; ?>>Entomology</option>
<option value="Entrepreneurship" <?php if($pg_1_discipline=="Entrepreneurship") echo 'selected="selected"'; ?>>Entrepreneurship</option>
<option value="Environment and Solid Waste Management" <?php if($pg_1_discipline=="Environment and Solid Waste Management") echo 'selected="selected"'; ?>>Environment and Solid Waste Management</option>
<option value="Environmental Engineering" <?php if($pg_1_discipline=="Environmental Engineering") echo 'selected="selected"'; ?>>Environmental Engineering</option>
<option value="Environmental Management" <?php if($pg_1_discipline=="Environmental Management") echo 'selected="selected"'; ?>>Environmental Management</option>
<option value="Environmental Science and Ecology" <?php if($pg_1_discipline=="Environmental Science and Ecology") echo 'selected="selected"'; ?>>Environmental Science and Ecology</option>
<option value="Environmental Science and Technology" <?php if($pg_1_discipline=="Environmental Science and Technology") echo 'selected="selected"'; ?>>Environmental Science and Technology</option>
<option value="Environmental Science" <?php if($pg_1_discipline=="Environmental Science") echo 'selected="selected"'; ?>>Environmental Science</option>
<option value="Environmental Studies" <?php if($pg_1_discipline=="Environmental Studies") echo 'selected="selected"'; ?>>Environmental Studies</option>
<option value="Environmental and Climate Change Management" <?php if($pg_1_discipline=="Environmental and Climate Change Management") echo 'selected="selected"'; ?>>Environmental and Climate Change Management</option>
<option value="Environmental" <?php if($pg_1_discipline=="Environmental") echo 'selected="selected"'; ?>>Environmental</option>
<option value="Epidemiology" <?php if($pg_1_discipline=="Epidemiology") echo 'selected="selected"'; ?>>Epidemiology</option>
<option value="Excavation" <?php if($pg_1_discipline=="Excavation") echo 'selected="selected"'; ?>>Excavation</option>
<option value="Executive Engineer" <?php if($pg_1_discipline=="Executive Engineer") echo 'selected="selected"'; ?>>Executive Engineer</option>
<option value="Executive" <?php if($pg_1_discipline=="Executive") echo 'selected="selected"'; ?>>Executive</option>
<option value="Extension and Communication" <?php if($pg_1_discipline=="Extension and Communication") echo 'selected="selected"'; ?>>Extension and Communication</option>
<option value="Fabric and Apparel Designing" <?php if($pg_1_discipline=="Fabric and Apparel Designing") echo 'selected="selected"'; ?>>Fabric and Apparel Designing</option>
<option value="Fashion Design and Technology" <?php if($pg_1_discipline=="Fashion Design and Technology") echo 'selected="selected"'; ?>>Fashion Design and Technology</option>
<option value="Fashion Design" <?php if($pg_1_discipline=="Fashion Design") echo 'selected="selected"'; ?>>Fashion Design</option>
<option value="Fashion Designing" <?php if($pg_1_discipline=="Fashion Designing") echo 'selected="selected"'; ?>>Fashion Designing</option>
<option value="Fashion Management" <?php if($pg_1_discipline=="Fashion Management") echo 'selected="selected"'; ?>>Fashion Management</option>
<option value="Fashion Promotion and Styling" <?php if($pg_1_discipline=="Fashion Promotion and Styling") echo 'selected="selected"'; ?>>Fashion Promotion and Styling</option>
<option value="Fashion Technology" <?php if($pg_1_discipline=="Fashion Technology") echo 'selected="selected"'; ?>>Fashion Technology</option>
<option value="Fashion and Apparel Design" <?php if($pg_1_discipline=="Fashion and Apparel Design") echo 'selected="selected"'; ?>>Fashion and Apparel Design</option>
<option value="Fashion and Textile Merchandising" <?php if($pg_1_discipline=="Fashion and Textile Merchandising") echo 'selected="selected"'; ?>>Fashion and Textile Merchandising</option>
<option value="Fermentation and Microbial Technology" <?php if($pg_1_discipline=="Fermentation and Microbial Technology") echo 'selected="selected"'; ?>>Fermentation and Microbial Technology</option>
<option value="Filmmaking" <?php if($pg_1_discipline=="Filmmaking") echo 'selected="selected"'; ?>>Filmmaking</option>
<option value="Finance" <?php if($pg_1_discipline=="Finance") echo 'selected="selected"'; ?>>Finance</option>
<option value="Financial Computing" <?php if($pg_1_discipline=="Financial Computing") echo 'selected="selected"'; ?>>Financial Computing</option>
<option value="Financial Economics and Administration" <?php if($pg_1_discipline=="Financial Economics and Administration") echo 'selected="selected"'; ?>>Financial Economics and Administration</option>
<option value="Financial Mathematics" <?php if($pg_1_discipline=="Financial Mathematics") echo 'selected="selected"'; ?>>Financial Mathematics</option>
<option value="Fire Protection Engineering" <?php if($pg_1_discipline=="Fire Protection Engineering") echo 'selected="selected"'; ?>>Fire Protection Engineering</option>
<option value="Fire Safety and Hazard Management" <?php if($pg_1_discipline=="Fire Safety and Hazard Management") echo 'selected="selected"'; ?>>Fire Safety and Hazard Management</option>
<option value="Fisheries Science" <?php if($pg_1_discipline=="Fisheries Science") echo 'selected="selected"'; ?>>Fisheries Science</option>
<option value="Floriculture and Landscaping" <?php if($pg_1_discipline=="Floriculture and Landscaping") echo 'selected="selected"'; ?>>Floriculture and Landscaping</option>
<option value="Fluid Dynamics" <?php if($pg_1_discipline=="Fluid Dynamics") echo 'selected="selected"'; ?>>Fluid Dynamics</option>
<option value="Fluids" <?php if($pg_1_discipline=="Fluids") echo 'selected="selected"'; ?>>Fluids</option>
<option value="Food Biotechnology" <?php if($pg_1_discipline=="Food Biotechnology") echo 'selected="selected"'; ?>>Food Biotechnology</option>
<option value="Food Chain Management" <?php if($pg_1_discipline=="Food Chain Management") echo 'selected="selected"'; ?>>Food Chain Management</option>
<option value="Food Nutrition" <?php if($pg_1_discipline=="Food Nutrition") echo 'selected="selected"'; ?>>Food Nutrition</option>
<option value="Food Process" <?php if($pg_1_discipline=="Food Process") echo 'selected="selected"'; ?>>Food Process</option>
<option value="Food Processing Technology" <?php if($pg_1_discipline=="Food Processing Technology") echo 'selected="selected"'; ?>>Food Processing Technology</option>
<option value="Food Quality Assurance" <?php if($pg_1_discipline=="Food Quality Assurance") echo 'selected="selected"'; ?>>Food Quality Assurance</option>
<option value="Food Science and Nutrition" <?php if($pg_1_discipline=="Food Science and Nutrition") echo 'selected="selected"'; ?>>Food Science and Nutrition</option>
<option value="Food Science and Quality Control" <?php if($pg_1_discipline=="Food Science and Quality Control") echo 'selected="selected"'; ?>>Food Science and Quality Control</option>
<option value="Food Science and Technology" <?php if($pg_1_discipline=="Food Science and Technology") echo 'selected="selected"'; ?>>Food Science and Technology</option>
<option value="Food Science" <?php if($pg_1_discipline=="Food Science") echo 'selected="selected"'; ?>>Food Science</option>
<option value="Food Sciences" <?php if($pg_1_discipline=="Food Sciences") echo 'selected="selected"'; ?>>Food Sciences</option>
<option value="Food Technology" <?php if($pg_1_discipline=="Food Technology") echo 'selected="selected"'; ?>>Food Technology</option>
<option value="Food and Nutrition" <?php if($pg_1_discipline=="Food and Nutrition") echo 'selected="selected"'; ?>>Food and Nutrition</option>
<option value="Foreign Service" <?php if($pg_1_discipline=="Foreign Service") echo 'selected="selected"'; ?>>Foreign Service</option>
<option value="Foreign Trade Management" <?php if($pg_1_discipline=="Foreign Trade Management") echo 'selected="selected"'; ?>>Foreign Trade Management</option>
<option value="Forensic Science and Criminology" <?php if($pg_1_discipline=="Forensic Science and Criminology") echo 'selected="selected"'; ?>>Forensic Science and Criminology</option>
<option value="Forensic Science" <?php if($pg_1_discipline=="Forensic Science") echo 'selected="selected"'; ?>>Forensic Science</option>
<option value="Forensic Sciences" <?php if($pg_1_discipline=="Forensic Sciences") echo 'selected="selected"'; ?>>Forensic Sciences</option>
<option value="Forestry" <?php if($pg_1_discipline=="Forestry") echo 'selected="selected"'; ?>>Forestry</option>
<option value="Fruit Science" <?php if($pg_1_discipline=="Fruit Science") echo 'selected="selected"'; ?>>Fruit Science</option>
<option value="Game Design and Development" <?php if($pg_1_discipline=="Game Design and Development") echo 'selected="selected"'; ?>>Game Design and Development</option>
<option value="Gaming" <?php if($pg_1_discipline=="Gaming") echo 'selected="selected"'; ?>>Gaming</option>
<option value="Garment Manufacturing Technology" <?php if($pg_1_discipline=="Garment Manufacturing Technology") echo 'selected="selected"'; ?>>Garment Manufacturing Technology</option>
<option value="Garment Production and Export Management" <?php if($pg_1_discipline=="Garment Production and Export Management") echo 'selected="selected"'; ?>>Garment Production and Export Management</option>
<option value="Gemology" <?php if($pg_1_discipline=="Gemology") echo 'selected="selected"'; ?>>Gemology</option>
<option value="General Biotechnology" <?php if($pg_1_discipline=="General Biotechnology") echo 'selected="selected"'; ?>>General Biotechnology</option>
<option value="General" <?php if($pg_1_discipline=="General") echo 'selected="selected"'; ?>>General</option>
<option value="Genetics Engineering" <?php if($pg_1_discipline=="Genetics Engineering") echo 'selected="selected"'; ?>>Genetics Engineering</option>
<option value="Genetics and Plant Breeding" <?php if($pg_1_discipline=="Genetics and Plant Breeding") echo 'selected="selected"'; ?>>Genetics and Plant Breeding</option>
<option value="Genetics" <?php if($pg_1_discipline=="Genetics") echo 'selected="selected"'; ?>>Genetics</option>
<option value="Genomics and Proteomics" <?php if($pg_1_discipline=="Genomics and Proteomics") echo 'selected="selected"'; ?>>Genomics and Proteomics</option>
<option value="Genomics" <?php if($pg_1_discipline=="Genomics") echo 'selected="selected"'; ?>>Genomics</option>
<option value="Geography" <?php if($pg_1_discipline=="Geography") echo 'selected="selected"'; ?>>Geography</option>
<option value="Geoinformatics" <?php if($pg_1_discipline=="Geoinformatics") echo 'selected="selected"'; ?>>Geoinformatics</option>
<option value="Geological Engineering" <?php if($pg_1_discipline=="Geological Engineering") echo 'selected="selected"'; ?>>Geological Engineering</option>
<option value="Geological Sciences" <?php if($pg_1_discipline=="Geological Sciences") echo 'selected="selected"'; ?>>Geological Sciences</option>
<option value="Geology" <?php if($pg_1_discipline=="Geology") echo 'selected="selected"'; ?>>Geology</option>
<option value="Geomatics Engineering" <?php if($pg_1_discipline=="Geomatics Engineering") echo 'selected="selected"'; ?>>Geomatics Engineering</option>
<option value="Geophysics" <?php if($pg_1_discipline=="Geophysics") echo 'selected="selected"'; ?>>Geophysics</option>
<option value="Geotechnical" <?php if($pg_1_discipline=="Geotechnical") echo 'selected="selected"'; ?>>Geotechnical</option>
<option value="Global Warming Reduction" <?php if($pg_1_discipline=="Global Warming Reduction") echo 'selected="selected"'; ?>>Global Warming Reduction</option>
<option value="Graphics and Multimedia" <?php if($pg_1_discipline=="Graphics and Multimedia") echo 'selected="selected"'; ?>>Graphics and Multimedia</option>
<option value="Green Business" <?php if($pg_1_discipline=="Green Business") echo 'selected="selected"'; ?>>Green Business</option>
<option value="Green Technology" <?php if($pg_1_discipline=="Green Technology") echo 'selected="selected"'; ?>>Green Technology</option>
<option value="Habitat and Population Studies" <?php if($pg_1_discipline=="Habitat and Population Studies") echo 'selected="selected"'; ?>>Habitat and Population Studies</option>
<option value="Hardware and Networking" <?php if($pg_1_discipline=="Hardware and Networking") echo 'selected="selected"'; ?>>Hardware and Networking</option>
<option value="Health Safety and Environmental" <?php if($pg_1_discipline=="Health Safety and Environmental") echo 'selected="selected"'; ?>>Health Safety and Environmental</option>
<option value="Health Science and Nutrition" <?php if($pg_1_discipline=="Health Science and Nutrition") echo 'selected="selected"'; ?>>Health Science and Nutrition</option>
<option value="Health and Yoga Therapy" <?php if($pg_1_discipline=="Health and Yoga Therapy") echo 'selected="selected"'; ?>>Health and Yoga Therapy</option>
<option value="Heat Power" <?php if($pg_1_discipline=="Heat Power") echo 'selected="selected"'; ?>>Heat Power</option>
<option value="Herbal Science" <?php if($pg_1_discipline=="Herbal Science") echo 'selected="selected"'; ?>>Herbal Science</option>
<option value="Hindi" <?php if($pg_1_discipline=="Hindi") echo 'selected="selected"'; ?>>Hindi</option>
<option value="History" <?php if($pg_1_discipline=="History") echo 'selected="selected"'; ?>>History</option>
<option value="Home Management" <?php if($pg_1_discipline=="Home Management") echo 'selected="selected"'; ?>>Home Management</option>
<option value="Home Science" <?php if($pg_1_discipline=="Home Science") echo 'selected="selected"'; ?>>Home Science</option>
<option value="Horticulture" <?php if($pg_1_discipline=="Horticulture") echo 'selected="selected"'; ?>>Horticulture</option>
<option value="Hospital Administration" <?php if($pg_1_discipline=="Hospital Administration") echo 'selected="selected"'; ?>>Hospital Administration</option>
<option value="Hospitality Management" <?php if($pg_1_discipline=="Hospitality Management") echo 'selected="selected"'; ?>>Hospitality Management</option>
<option value="Hospitality Studies" <?php if($pg_1_discipline=="Hospitality Studies") echo 'selected="selected"'; ?>>Hospitality Studies</option>
<option value="Hospitality and Hotel Administration" <?php if($pg_1_discipline=="Hospitality and Hotel Administration") echo 'selected="selected"'; ?>>Hospitality and Hotel Administration</option>
<option value="Hospitality and Tourism Studies" <?php if($pg_1_discipline=="Hospitality and Tourism Studies") echo 'selected="selected"'; ?>>Hospitality and Tourism Studies</option>
<option value="Hospitality and Tourism" <?php if($pg_1_discipline=="Hospitality and Tourism") echo 'selected="selected"'; ?>>Hospitality and Tourism</option>
<option value="Hospitality" <?php if($pg_1_discipline=="Hospitality") echo 'selected="selected"'; ?>>Hospitality</option>
<option value="Hotel Management and Catering" <?php if($pg_1_discipline=="Hotel Management and Catering") echo 'selected="selected"'; ?>>Hotel Management and Catering</option>
<option value="Hotel Management and Culinary Arts" <?php if($pg_1_discipline=="Hotel Management and Culinary Arts") echo 'selected="selected"'; ?>>Hotel Management and Culinary Arts</option>
<option value="Hotel Management" <?php if($pg_1_discipline=="Hotel Management") echo 'selected="selected"'; ?>>Hotel Management</option>
<option value="Hotel and Catering Management" <?php if($pg_1_discipline=="Hotel and Catering Management") echo 'selected="selected"'; ?>>Hotel and Catering Management</option>
<option value="Human Development" <?php if($pg_1_discipline=="Human Development") echo 'selected="selected"'; ?>>Human Development</option>
<option value="Human Genetics" <?php if($pg_1_discipline=="Human Genetics") echo 'selected="selected"'; ?>>Human Genetics</option>
<option value="Human Physiology" <?php if($pg_1_discipline=="Human Physiology") echo 'selected="selected"'; ?>>Human Physiology</option>
<option value="Hydrochemistry" <?php if($pg_1_discipline=="Hydrochemistry") echo 'selected="selected"'; ?>>Hydrochemistry</option>
<option value="Hydrology" <?php if($pg_1_discipline=="Hydrology") echo 'selected="selected"'; ?>>Hydrology</option>
<option value="Illumination Technology and Design" <?php if($pg_1_discipline=="Illumination Technology and Design") echo 'selected="selected"'; ?>>Illumination Technology and Design</option>
<option value="Industrial Biotechnology" <?php if($pg_1_discipline=="Industrial Biotechnology") echo 'selected="selected"'; ?>>Industrial Biotechnology</option>
<option value="Industrial Chemistry" <?php if($pg_1_discipline=="Industrial Chemistry") echo 'selected="selected"'; ?>>Industrial Chemistry</option>
<option value="Industrial Engineering" <?php if($pg_1_discipline=="Industrial Engineering") echo 'selected="selected"'; ?>>Industrial Engineering</option>
<option value="Industrial Mathematics" <?php if($pg_1_discipline=="Industrial Mathematics") echo 'selected="selected"'; ?>>Industrial Mathematics</option>
<option value="Industrial Microbiology" <?php if($pg_1_discipline=="Industrial Microbiology") echo 'selected="selected"'; ?>>Industrial Microbiology</option>
<option value="Industrial Science" <?php if($pg_1_discipline=="Industrial Science") echo 'selected="selected"'; ?>>Industrial Science</option>
<option value="Industrial and Management" <?php if($pg_1_discipline=="Industrial and Management") echo 'selected="selected"'; ?>>Industrial and Management</option>
<option value="Industrial and Production Engineering" <?php if($pg_1_discipline=="Industrial and Production Engineering") echo 'selected="selected"'; ?>>Industrial and Production Engineering</option>
<option value="Industrial" <?php if($pg_1_discipline=="Industrial") echo 'selected="selected"'; ?>>Industrial</option>
<option value="Information Science" <?php if($pg_1_discipline=="Information Science") echo 'selected="selected"'; ?>>Information Science</option>
<option value="Information Security and Cyber Forensics" <?php if($pg_1_discipline=="Information Security and Cyber Forensics") echo 'selected="selected"'; ?>>Information Security and Cyber Forensics</option>
<option value="Information Security" <?php if($pg_1_discipline=="Information Security") echo 'selected="selected"'; ?>>Information Security</option>
<option value="Information Systems" <?php if($pg_1_discipline=="Information Systems") echo 'selected="selected"'; ?>>Information Systems</option>
<option value="Information Technology Engineering" <?php if($pg_1_discipline=="Information Technology Engineering") echo 'selected="selected"'; ?>>Information Technology Engineering</option>
<option value="Information Technology and Management" <?php if($pg_1_discipline=="Information Technology and Management") echo 'selected="selected"'; ?>>Information Technology and Management</option>
<option value="Information Technology" <?php if($pg_1_discipline=="Information Technology") echo 'selected="selected"'; ?>>Information Technology</option>
<option value="Information and Communication Technology" <?php if($pg_1_discipline=="Information and Communication Technology") echo 'selected="selected"'; ?>>Information and Communication Technology</option>
<option value="Inorganic Chemistry" <?php if($pg_1_discipline=="Inorganic Chemistry") echo 'selected="selected"'; ?>>Inorganic Chemistry</option>
<option value="Instrumentation Engineering" <?php if($pg_1_discipline=="Instrumentation Engineering") echo 'selected="selected"'; ?>>Instrumentation Engineering</option>
<option value="Instrumentation Technology" <?php if($pg_1_discipline=="Instrumentation Technology") echo 'selected="selected"'; ?>>Instrumentation Technology</option>
<option value="Instrumentation and Control Engineering" <?php if($pg_1_discipline=="Instrumentation and Control Engineering") echo 'selected="selected"'; ?>>Instrumentation and Control Engineering</option>
<option value="Instrumentation and Control" <?php if($pg_1_discipline=="Instrumentation and Control") echo 'selected="selected"'; ?>>Instrumentation and Control</option>
<option value="Instrumentation" <?php if($pg_1_discipline=="Instrumentation") echo 'selected="selected"'; ?>>Instrumentation</option>
<option value="Integrated Biotechnology" <?php if($pg_1_discipline=="Integrated Biotechnology") echo 'selected="selected"'; ?>>Integrated Biotechnology</option>
<option value="Intellectual Property Rights" <?php if($pg_1_discipline=="Intellectual Property Rights") echo 'selected="selected"'; ?>>Intellectual Property Rights</option>
<option value="Intelligent System" <?php if($pg_1_discipline=="Intelligent System") echo 'selected="selected"'; ?>>Intelligent System</option>
<option value="Interior Architecture and Design" <?php if($pg_1_discipline=="Interior Architecture and Design") echo 'selected="selected"'; ?>>Interior Architecture and Design</option>
<option value="Interior Design" <?php if($pg_1_discipline=="Interior Design") echo 'selected="selected"'; ?>>Interior Design</option>
<option value="Jewellery Design" <?php if($pg_1_discipline=="Jewellery Design") echo 'selected="selected"'; ?>>Jewellery Design</option>
<option value="Journalism and Mass Communication" <?php if($pg_1_discipline=="Journalism and Mass Communication") echo 'selected="selected"'; ?>>Journalism and Mass Communication</option>
<option value="Journalism" <?php if($pg_1_discipline=="Journalism") echo 'selected="selected"'; ?>>Journalism</option>
<option value="Knitwear Design" <?php if($pg_1_discipline=="Knitwear Design") echo 'selected="selected"'; ?>>Knitwear Design</option>
<option value="LLB" <?php if($pg_1_discipline=="LLB") echo 'selected="selected"'; ?>>LLB</option>
<option value="Landscape Architectur" <?php if($pg_1_discipline=="Landscape Architectur") echo 'selected="selected"'; ?>>Landscape Architectur</option>
<option value="Law" <?php if($pg_1_discipline=="Law") echo 'selected="selected"'; ?>>Law</option>
<option value="Leather Technology" <?php if($pg_1_discipline=="Leather Technology") echo 'selected="selected"'; ?>>Leather Technology</option>
<option value="Life Science" <?php if($pg_1_discipline=="Life Science") echo 'selected="selected"'; ?>>Life Science</option>
<option value="Life Sciences" <?php if($pg_1_discipline=="Life Sciences") echo 'selected="selected"'; ?>>Life Sciences</option>
<option value="Limnology and Fisheries" <?php if($pg_1_discipline=="Limnology and Fisheries") echo 'selected="selected"'; ?>>Limnology and Fisheries</option>
<option value="Live Stock Production and Management" <?php if($pg_1_discipline=="Live Stock Production and Management") echo 'selected="selected"'; ?>>Live Stock Production and Management</option>
<option value="Machine Design" <?php if($pg_1_discipline=="Machine Design") echo 'selected="selected"'; ?>>Machine Design</option>
<option value="Management and Information Technology" <?php if($pg_1_discipline=="Management and Information Technology") echo 'selected="selected"'; ?>>Management and Information Technology</option>
<option value="Manufacturing Science and Engineering" <?php if($pg_1_discipline=="Manufacturing Science and Engineering") echo 'selected="selected"'; ?>>Manufacturing Science and Engineering</option>
<option value="Manufacturing Technology" <?php if($pg_1_discipline=="Manufacturing Technology") echo 'selected="selected"'; ?>>Manufacturing Technology</option>
<option value="Manufacturing" <?php if($pg_1_discipline=="Manufacturing") echo 'selected="selected"'; ?>>Manufacturing</option>
<option value="Marine Biotechnology" <?php if($pg_1_discipline=="Marine Biotechnology") echo 'selected="selected"'; ?>>Marine Biotechnology</option>
<option value="Marine Engineering" <?php if($pg_1_discipline=="Marine Engineering") echo 'selected="selected"'; ?>>Marine Engineering</option>
<option value="Marine Geophysics" <?php if($pg_1_discipline=="Marine Geophysics") echo 'selected="selected"'; ?>>Marine Geophysics</option>
<option value="Marine Science" <?php if($pg_1_discipline=="Marine Science") echo 'selected="selected"'; ?>>Marine Science</option>
<option value="Marine" <?php if($pg_1_discipline=="Marine") echo 'selected="selected"'; ?>>Marine</option>
<option value="Marketing" <?php if($pg_1_discipline=="Marketing") echo 'selected="selected"'; ?>>Marketing</option>
<option value="Mass Communication Advertising and Journalism" <?php if($pg_1_discipline=="Mass Communication Advertising and Journalism") echo 'selected="selected"'; ?>>Mass Communication Advertising and Journalism</option>
<option value="Mass Communication and Journalism" <?php if($pg_1_discipline=="Mass Communication and Journalism") echo 'selected="selected"'; ?>>Mass Communication and Journalism</option>
<option value="Mass Communication" <?php if($pg_1_discipline=="Mass Communication") echo 'selected="selected"'; ?>>Mass Communication</option>
<option value="Material Science and Engineering" <?php if($pg_1_discipline=="Material Science and Engineering") echo 'selected="selected"'; ?>>Material Science and Engineering</option>
<option value="Material Science and" <?php if($pg_1_discipline=="Material Science and") echo 'selected="selected"'; ?>>Material Science and</option>
<option value="Materials Science" <?php if($pg_1_discipline=="Materials Science") echo 'selected="selected"'; ?>>Materials Science</option>
<option value="Maternity Nursing" <?php if($pg_1_discipline=="Maternity Nursing") echo 'selected="selected"'; ?>>Maternity Nursing</option>
<option value="Mathematical Ecology and Environment Studies" <?php if($pg_1_discipline=="Mathematical Ecology and Environment Studies") echo 'selected="selected"'; ?>>Mathematical Ecology and Environment Studies</option>
<option value="Mathematical Science" <?php if($pg_1_discipline=="Mathematical Science") echo 'selected="selected"'; ?>>Mathematical Science</option>
<option value="Mathematics and Computing" <?php if($pg_1_discipline=="Mathematics and Computing") echo 'selected="selected"'; ?>>Mathematics and Computing</option>
<option value="Mathematics hons" <?php if($pg_1_discipline=="Mathematics hons") echo 'selected="selected"'; ?>>Mathematics hons</option>
<option value="Mathematics" <?php if($pg_1_discipline=="Mathematics") echo 'selected="selected"'; ?>>Mathematics</option>
<option value="Maths and Computer Applications" <?php if($pg_1_discipline=="Maths and Computer Applications") echo 'selected="selected"'; ?>>Maths and Computer Applications</option>
<option value="Maths and Statistics" <?php if($pg_1_discipline=="Maths and Statistics") echo 'selected="selected"'; ?>>Maths and Statistics</option>
<option value="Mechanical Engineer" <?php if($pg_1_discipline=="Mechanical Engineer") echo 'selected="selected"'; ?>>Mechanical Engineer</option>
<option value="Mechanical Engineering" <?php if($pg_1_discipline=="Mechanical Engineering") echo 'selected="selected"'; ?>>Mechanical Engineering</option>
<option value="Mechanical" <?php if($pg_1_discipline=="Mechanical") echo 'selected="selected"'; ?>>Mechanical</option>
<option value="Mechatronics Engineering" <?php if($pg_1_discipline=="Mechatronics Engineering") echo 'selected="selected"'; ?>>Mechatronics Engineering</option>
<option value="Mechatronics" <?php if($pg_1_discipline=="Mechatronics") echo 'selected="selected"'; ?>>Mechatronics</option>
<option value="Media Graphics and Animation" <?php if($pg_1_discipline=="Media Graphics and Animation") echo 'selected="selected"'; ?>>Media Graphics and Animation</option>
<option value="Media Technology" <?php if($pg_1_discipline=="Media Technology") echo 'selected="selected"'; ?>>Media Technology</option>
<option value="Medical Anatomy" <?php if($pg_1_discipline=="Medical Anatomy") echo 'selected="selected"'; ?>>Medical Anatomy</option>
<option value="Medical Biochemistry" <?php if($pg_1_discipline=="Medical Biochemistry") echo 'selected="selected"'; ?>>Medical Biochemistry</option>
<option value="Medical Biotechnology" <?php if($pg_1_discipline=="Medical Biotechnology") echo 'selected="selected"'; ?>>Medical Biotechnology</option>
<option value="Medical Imaging Technology" <?php if($pg_1_discipline=="Medical Imaging Technology") echo 'selected="selected"'; ?>>Medical Imaging Technology</option>
<option value="Medical Lab Technology" <?php if($pg_1_discipline=="Medical Lab Technology") echo 'selected="selected"'; ?>>Medical Lab Technology</option>
<option value="Medical Microbiology" <?php if($pg_1_discipline=="Medical Microbiology") echo 'selected="selected"'; ?>>Medical Microbiology</option>
<option value="Medical Physics" <?php if($pg_1_discipline=="Medical Physics") echo 'selected="selected"'; ?>>Medical Physics</option>
<option value="Medical Radiation Physics" <?php if($pg_1_discipline=="Medical Radiation Physics") echo 'selected="selected"'; ?>>Medical Radiation Physics</option>
<option value="Medical Radiography and Imaging Technology" <?php if($pg_1_discipline=="Medical Radiography and Imaging Technology") echo 'selected="selected"'; ?>>Medical Radiography and Imaging Technology</option>
<option value="Medical Surgical Nursing" <?php if($pg_1_discipline=="Medical Surgical Nursing") echo 'selected="selected"'; ?>>Medical Surgical Nursing</option>
<option value="Medical Technology" <?php if($pg_1_discipline=="Medical Technology") echo 'selected="selected"'; ?>>Medical Technology</option>
<option value="Medicinal Chemistry" <?php if($pg_1_discipline=="Medicinal Chemistry") echo 'selected="selected"'; ?>>Medicinal Chemistry</option>
<option value="Medicinal Plants" <?php if($pg_1_discipline=="Medicinal Plants") echo 'selected="selected"'; ?>>Medicinal Plants</option>
<option value="Mental Health Nursing" <?php if($pg_1_discipline=="Mental Health Nursing") echo 'selected="selected"'; ?>>Mental Health Nursing</option>
<option value="Mental Health" <?php if($pg_1_discipline=="Mental Health") echo 'selected="selected"'; ?>>Mental Health</option>
<option value="Metallurgical Engineering" <?php if($pg_1_discipline=="Metallurgical Engineering") echo 'selected="selected"'; ?>>Metallurgical Engineering</option>
<option value="Meteorology" <?php if($pg_1_discipline=="Meteorology") echo 'selected="selected"'; ?>>Meteorology</option>
<option value="Microbiology and Immunology" <?php if($pg_1_discipline=="Microbiology and Immunology") echo 'selected="selected"'; ?>>Microbiology and Immunology</option>
<option value="Microbiology" <?php if($pg_1_discipline=="Microbiology") echo 'selected="selected"'; ?>>Microbiology</option>
<option value="Microelectronic Engineering" <?php if($pg_1_discipline=="Microelectronic Engineering") echo 'selected="selected"'; ?>>Microelectronic Engineering</option>
<option value="Microelectronics and Advanced Communication" <?php if($pg_1_discipline=="Microelectronics and Advanced Communication") echo 'selected="selected"'; ?>>Microelectronics and Advanced Communication</option>
<option value="Microelectronics and VLSI Design" <?php if($pg_1_discipline=="Microelectronics and VLSI Design") echo 'selected="selected"'; ?>>Microelectronics and VLSI Design</option>
<option value="Military Science" <?php if($pg_1_discipline=="Military Science") echo 'selected="selected"'; ?>>Military Science</option>
<option value="Mineral" <?php if($pg_1_discipline=="Mineral") echo 'selected="selected"'; ?>>Mineral</option>
<option value="Mining Engineer" <?php if($pg_1_discipline=="Mining Engineer") echo 'selected="selected"'; ?>>Mining Engineer</option>
<option value="Mining Engineering" <?php if($pg_1_discipline=="Mining Engineering") echo 'selected="selected"'; ?>>Mining Engineering</option>
<option value="Mining" <?php if($pg_1_discipline=="Mining") echo 'selected="selected"'; ?>>Mining</option>
<option value="Molecular Biology and Biochemistry" <?php if($pg_1_discipline=="Molecular Biology and Biochemistry") echo 'selected="selected"'; ?>>Molecular Biology and Biochemistry</option>
<option value="Molecular Biology and Genetic Engineering" <?php if($pg_1_discipline=="Molecular Biology and Genetic Engineering") echo 'selected="selected"'; ?>>Molecular Biology and Genetic Engineering</option>
<option value="Molecular Biology and Human Genetics" <?php if($pg_1_discipline=="Molecular Biology and Human Genetics") echo 'selected="selected"'; ?>>Molecular Biology and Human Genetics</option>
<option value="Molecular Biology" <?php if($pg_1_discipline=="Molecular Biology") echo 'selected="selected"'; ?>>Molecular Biology</option>
<option value="Molecular Medicine" <?php if($pg_1_discipline=="Molecular Medicine") echo 'selected="selected"'; ?>>Molecular Medicine</option>
<option value="Motorsport Engineering" <?php if($pg_1_discipline=="Motorsport Engineering") echo 'selected="selected"'; ?>>Motorsport Engineering</option>
<option value="Multimedia Technology" <?php if($pg_1_discipline=="Multimedia Technology") echo 'selected="selected"'; ?>>Multimedia Technology</option>
<option value="Multimedia and Animation" <?php if($pg_1_discipline=="Multimedia and Animation") echo 'selected="selected"'; ?>>Multimedia and Animation</option>
<option value="Multimedia" <?php if($pg_1_discipline=="Multimedia") echo 'selected="selected"'; ?>>Multimedia</option>
<option value="Museology" <?php if($pg_1_discipline=="Museology") echo 'selected="selected"'; ?>>Museology</option>
<option value="NGO Management" <?php if($pg_1_discipline=="NGO Management") echo 'selected="selected"'; ?>>NGO Management</option>
<option value="Nano Science and Technology" <?php if($pg_1_discipline=="Nano Science and Technology") echo 'selected="selected"'; ?>>Nano Science and Technology</option>
<option value="Nano Sciences and Technology" <?php if($pg_1_discipline=="Nano Sciences and Technology") echo 'selected="selected"'; ?>>Nano Sciences and Technology</option>
<option value="NanoTechnology" <?php if($pg_1_discipline=="NanoTechnology") echo 'selected="selected"'; ?>>NanoTechnology</option>
<option value="Nanotechnology Engineering" <?php if($pg_1_discipline=="Nanotechnology Engineering") echo 'selected="selected"'; ?>>Nanotechnology Engineering</option>
<option value="Natural Resource Management" <?php if($pg_1_discipline=="Natural Resource Management") echo 'selected="selected"'; ?>>Natural Resource Management</option>
<option value="Naturopathy and Yogic Science" <?php if($pg_1_discipline=="Naturopathy and Yogic Science") echo 'selected="selected"'; ?>>Naturopathy and Yogic Science</option>
<option value="Nautical Science" <?php if($pg_1_discipline=="Nautical Science") echo 'selected="selected"'; ?>>Nautical Science</option>
<option value="Naval Architecture and Ocean Engineering" <?php if($pg_1_discipline=="Naval Architecture and Ocean Engineering") echo 'selected="selected"'; ?>>Naval Architecture and Ocean Engineering</option>
<option value="Naval Engineering" <?php if($pg_1_discipline=="Naval Engineering") echo 'selected="selected"'; ?>>Naval Engineering</option>
<option value="Nematology" <?php if($pg_1_discipline=="Nematology") echo 'selected="selected"'; ?>>Nematology</option>
<option value="Network Protocol Design" <?php if($pg_1_discipline=="Network Protocol Design") echo 'selected="selected"'; ?>>Network Protocol Design</option>
<option value="Neural Networks" <?php if($pg_1_discipline=="Neural Networks") echo 'selected="selected"'; ?>>Neural Networks</option>
<option value="Neuroscience" <?php if($pg_1_discipline=="Neuroscience") echo 'selected="selected"'; ?>>Neuroscience</option>
<option value="Nuclear Engineering" <?php if($pg_1_discipline=="Nuclear Engineering") echo 'selected="selected"'; ?>>Nuclear Engineering</option>
<option value="Nuclear Medicine Technology" <?php if($pg_1_discipline=="Nuclear Medicine Technology") echo 'selected="selected"'; ?>>Nuclear Medicine Technology</option>
<option value="Nuclear Physics" <?php if($pg_1_discipline=="Nuclear Physics") echo 'selected="selected"'; ?>>Nuclear Physics</option>
<option value="Nuclear" <?php if($pg_1_discipline=="Nuclear") echo 'selected="selected"'; ?>>Nuclear</option>
<option value="Nursing" <?php if($pg_1_discipline=="Nursing") echo 'selected="selected"'; ?>>Nursing</option>
<option value="Nutrition and Dietetics" <?php if($pg_1_discipline=="Nutrition and Dietetics") echo 'selected="selected"'; ?>>Nutrition and Dietetics</option>
<option value="Nutrition and Food Processing" <?php if($pg_1_discipline=="Nutrition and Food Processing") echo 'selected="selected"'; ?>>Nutrition and Food Processing</option>
<option value="Nutrition" <?php if($pg_1_discipline=="Nutrition") echo 'selected="selected"'; ?>>Nutrition</option>
<option value="Obstetrics and Gynecological Nursing" <?php if($pg_1_discipline=="Obstetrics and Gynecological Nursing") echo 'selected="selected"'; ?>>Obstetrics and Gynecological Nursing</option>
<option value="Occupational Therapy" <?php if($pg_1_discipline=="Occupational Therapy") echo 'selected="selected"'; ?>>Occupational Therapy</option>
<option value="Ocean and Marine Engineering" <?php if($pg_1_discipline=="Ocean and Marine Engineering") echo 'selected="selected"'; ?>>Ocean and Marine Engineering</option>
<option value="Oceanography" <?php if($pg_1_discipline=="Oceanography") echo 'selected="selected"'; ?>>Oceanography</option>
<option value="Olericulture" <?php if($pg_1_discipline=="Olericulture") echo 'selected="selected"'; ?>>Olericulture</option>
<option value="Operation Research and Computer Applications" <?php if($pg_1_discipline=="Operation Research and Computer Applications") echo 'selected="selected"'; ?>>Operation Research and Computer Applications</option>
<option value="Operation Theatre Technology" <?php if($pg_1_discipline=="Operation Theatre Technology") echo 'selected="selected"'; ?>>Operation Theatre Technology</option>
<option value="Operational Research" <?php if($pg_1_discipline=="Operational Research") echo 'selected="selected"'; ?>>Operational Research</option>
<option value="Optical" <?php if($pg_1_discipline=="Optical") echo 'selected="selected"'; ?>>Optical</option>
<option value="Optometry" <?php if($pg_1_discipline=="Optometry") echo 'selected="selected"'; ?>>Optometry</option>
<option value="Organic Chemistry" <?php if($pg_1_discipline=="Organic Chemistry") echo 'selected="selected"'; ?>>Organic Chemistry</option>
<option value="Orthopedics" <?php if($pg_1_discipline=="Orthopedics") echo 'selected="selected"'; ?>>Orthopedics</option>
<option value="Osteopathy" <?php if($pg_1_discipline=="Osteopathy") echo 'selected="selected"'; ?>>Osteopathy</option>
<option value="Paediatric Nursing" <?php if($pg_1_discipline=="Paediatric Nursing") echo 'selected="selected"'; ?>>Paediatric Nursing</option>
<option value="Paper Engineering" <?php if($pg_1_discipline=="Paper Engineering") echo 'selected="selected"'; ?>>Paper Engineering</option>
<option value="Paramedical" <?php if($pg_1_discipline=="Paramedical") echo 'selected="selected"'; ?>>Paramedical</option>
<option value="Pathology" <?php if($pg_1_discipline=="Pathology") echo 'selected="selected"'; ?>>Pathology</option>
<option value="Perfusion Technology" <?php if($pg_1_discipline=="Perfusion Technology") echo 'selected="selected"'; ?>>Perfusion Technology</option>
<option value="Petroleum Engineering" <?php if($pg_1_discipline=="Petroleum Engineering") echo 'selected="selected"'; ?>>Petroleum Engineering</option>
<option value="Petroleum Geology" <?php if($pg_1_discipline=="Petroleum Geology") echo 'selected="selected"'; ?>>Petroleum Geology</option>
<option value="Petroleum Technology" <?php if($pg_1_discipline=="Petroleum Technology") echo 'selected="selected"'; ?>>Petroleum Technology</option>
<option value="Petroleum" <?php if($pg_1_discipline=="Petroleum") echo 'selected="selected"'; ?>>Petroleum</option>
<option value="Pharmaceutical Chemistry" <?php if($pg_1_discipline=="Pharmaceutical Chemistry") echo 'selected="selected"'; ?>>Pharmaceutical Chemistry</option>
<option value="Pharmaceutical Technology" <?php if($pg_1_discipline=="Pharmaceutical Technology") echo 'selected="selected"'; ?>>Pharmaceutical Technology</option>
<option value="Pharmaceutical" <?php if($pg_1_discipline=="Pharmaceutical") echo 'selected="selected"'; ?>>Pharmaceutical</option>
<option value="Pharmacology" <?php if($pg_1_discipline=="Pharmacology") echo 'selected="selected"'; ?>>Pharmacology</option>
<option value="Pharmacy" <?php if($pg_1_discipline=="Pharmacy") echo 'selected="selected"'; ?>>Pharmacy</option>
<option value="Photography" <?php if($pg_1_discipline=="Photography") echo 'selected="selected"'; ?>>Photography</option>
<option value="Photonics" <?php if($pg_1_discipline=="Photonics") echo 'selected="selected"'; ?>>Photonics</option>
<option value="Physical Chemistry" <?php if($pg_1_discipline=="Physical Chemistry") echo 'selected="selected"'; ?>>Physical Chemistry</option>
<option value="Physical Education" <?php if($pg_1_discipline=="Physical Education") echo 'selected="selected"'; ?>>Physical Education</option>
<option value="Physical Oceanography" <?php if($pg_1_discipline=="Physical Oceanography") echo 'selected="selected"'; ?>>Physical Oceanography</option>
<option value="Physical Sciences" <?php if($pg_1_discipline=="Physical Sciences") echo 'selected="selected"'; ?>>Physical Sciences</option>
<option value="Physical Therapy" <?php if($pg_1_discipline=="Physical Therapy") echo 'selected="selected"'; ?>>Physical Therapy</option>
<option value="Physician Assistant" <?php if($pg_1_discipline=="Physician Assistant") echo 'selected="selected"'; ?>>Physician Assistant</option>
<option value="Physics" <?php if($pg_1_discipline=="Physics") echo 'selected="selected"'; ?>>Physics</option>
<option value="Physiology" <?php if($pg_1_discipline=="Physiology") echo 'selected="selected"'; ?>>Physiology</option>
<option value="Physiotherapy" <?php if($pg_1_discipline=="Physiotherapy") echo 'selected="selected"'; ?>>Physiotherapy</option>
<option value="Phytomedical Science and Technology" <?php if($pg_1_discipline=="Phytomedical Science and Technology") echo 'selected="selected"'; ?>>Phytomedical Science and Technology</option>
<option value="Pipeline" <?php if($pg_1_discipline=="Pipeline") echo 'selected="selected"'; ?>>Pipeline</option>
<option value="Planning" <?php if($pg_1_discipline=="Planning") echo 'selected="selected"'; ?>>Planning</option>
<option value="PlanningUrban and Regional Planning" <?php if($pg_1_discipline=="PlanningUrban and Regional Planning") echo 'selected="selected"'; ?>>PlanningUrban and Regional Planning</option>
<option value="Plant Biochemistry" <?php if($pg_1_discipline=="Plant Biochemistry") echo 'selected="selected"'; ?>>Plant Biochemistry</option>
<option value="Plant Biology and Plant Biotechnology" <?php if($pg_1_discipline=="Plant Biology and Plant Biotechnology") echo 'selected="selected"'; ?>>Plant Biology and Plant Biotechnology</option>
<option value="Plant Pathology" <?php if($pg_1_discipline=="Plant Pathology") echo 'selected="selected"'; ?>>Plant Pathology</option>
<option value="Plant Science" <?php if($pg_1_discipline=="Plant Science") echo 'selected="selected"'; ?>>Plant Science</option>
<option value="Podiatry" <?php if($pg_1_discipline=="Podiatry") echo 'selected="selected"'; ?>>Podiatry</option>
<option value="Political Science" <?php if($pg_1_discipline=="Political Science") echo 'selected="selected"'; ?>>Political Science</option>
<option value="Politics" <?php if($pg_1_discipline=="Politics") echo 'selected="selected"'; ?>>Politics</option>
<option value="Pollution Control" <?php if($pg_1_discipline=="Pollution Control") echo 'selected="selected"'; ?>>Pollution Control</option>
<option value="Polymer Science" <?php if($pg_1_discipline=="Polymer Science") echo 'selected="selected"'; ?>>Polymer Science</option>
<option value="Polymer Technology" <?php if($pg_1_discipline=="Polymer Technology") echo 'selected="selected"'; ?>>Polymer Technology</option>
<option value="Post-harvest Technology" <?php if($pg_1_discipline=="Post-harvest Technology") echo 'selected="selected"'; ?>>Post-harvest Technology</option>
<option value="Poultry Production" <?php if($pg_1_discipline=="Poultry Production") echo 'selected="selected"'; ?>>Poultry Production</option>
<option value="Power Electronics and Drives" <?php if($pg_1_discipline=="Power Electronics and Drives") echo 'selected="selected"'; ?>>Power Electronics and Drives</option>
<option value="Power Electronics and Systems" <?php if($pg_1_discipline=="Power Electronics and Systems") echo 'selected="selected"'; ?>>Power Electronics and Systems</option>
<option value="Power Electronics" <?php if($pg_1_discipline=="Power Electronics") echo 'selected="selected"'; ?>>Power Electronics</option>
<option value="Power Engineering" <?php if($pg_1_discipline=="Power Engineering") echo 'selected="selected"'; ?>>Power Engineering</option>
<option value="Power System" <?php if($pg_1_discipline=="Power System") echo 'selected="selected"'; ?>>Power System</option>
<option value="Power Systems and Power Electronics" <?php if($pg_1_discipline=="Power Systems and Power Electronics") echo 'selected="selected"'; ?>>Power Systems and Power Electronics</option>
<option value="Power Systems" <?php if($pg_1_discipline=="Power Systems") echo 'selected="selected"'; ?>>Power Systems</option>
<option value="Process Control and Instrumentation" <?php if($pg_1_discipline=="Process Control and Instrumentation") echo 'selected="selected"'; ?>>Process Control and Instrumentation</option>
<option value="Process Metallurgy" <?php if($pg_1_discipline=="Process Metallurgy") echo 'selected="selected"'; ?>>Process Metallurgy</option>
<option value="Process" <?php if($pg_1_discipline=="Process") echo 'selected="selected"'; ?>>Process</option>
<option value="Product Design and Manufacturing" <?php if($pg_1_discipline=="Product Design and Manufacturing") echo 'selected="selected"'; ?>>Product Design and Manufacturing</option>
<option value="Product Design" <?php if($pg_1_discipline=="Product Design") echo 'selected="selected"'; ?>>Product Design</option>
<option value="Production / Production Technology" <?php if($pg_1_discipline=="Production / Production Technology") echo 'selected="selected"'; ?>>Production / Production Technology</option>
<option value="Production Engineer" <?php if($pg_1_discipline=="Production Engineer") echo 'selected="selected"'; ?>>Production Engineer</option>
<option value="Production Engineering" <?php if($pg_1_discipline=="Production Engineering") echo 'selected="selected"'; ?>>Production Engineering</option>
<option value="Production Technology" <?php if($pg_1_discipline=="Production Technology") echo 'selected="selected"'; ?>>Production Technology</option>
<option value="Production and Industrial Engineering" <?php if($pg_1_discipline=="Production and Industrial Engineering") echo 'selected="selected"'; ?>>Production and Industrial Engineering</option>
<option value="Production and Industrial" <?php if($pg_1_discipline=="Production and Industrial") echo 'selected="selected"'; ?>>Production and Industrial</option>
<option value="Production" <?php if($pg_1_discipline=="Production") echo 'selected="selected"'; ?>>Production</option>
<option value="Prosthetic and Orthotics" <?php if($pg_1_discipline=="Prosthetic and Orthotics") echo 'selected="selected"'; ?>>Prosthetic and Orthotics</option>
<option value="Prosthodontics" <?php if($pg_1_discipline=="Prosthodontics") echo 'selected="selected"'; ?>>Prosthodontics</option>
<option value="Psychiatric Nursing" <?php if($pg_1_discipline=="Psychiatric Nursing") echo 'selected="selected"'; ?>>Psychiatric Nursing</option>
<option value="Psychological Counselling" <?php if($pg_1_discipline=="Psychological Counselling") echo 'selected="selected"'; ?>>Psychological Counselling</option>
<option value="Psychology" <?php if($pg_1_discipline=="Psychology") echo 'selected="selected"'; ?>>Psychology</option>
<option value="Public Health" <?php if($pg_1_discipline=="Public Health") echo 'selected="selected"'; ?>>Public Health</option>
<option value="Public Safety" <?php if($pg_1_discipline=="Public Safety") echo 'selected="selected"'; ?>>Public Safety</option>
<option value="Radiography" <?php if($pg_1_discipline=="Radiography") echo 'selected="selected"'; ?>>Radiography</option>
<option value="Radiologic Technology" <?php if($pg_1_discipline=="Radiologic Technology") echo 'selected="selected"'; ?>>Radiologic Technology</option>
<option value="Radiology" <?php if($pg_1_discipline=="Radiology") echo 'selected="selected"'; ?>>Radiology</option>
<option value="Real-Time Interactive Simulation" <?php if($pg_1_discipline=="Real-Time Interactive Simulation") echo 'selected="selected"'; ?>>Real-Time Interactive Simulation</option>
<option value="Regenerative Medicine" <?php if($pg_1_discipline=="Regenerative Medicine") echo 'selected="selected"'; ?>>Regenerative Medicine</option>
<option value="Reliability" <?php if($pg_1_discipline=="Reliability") echo 'selected="selected"'; ?>>Reliability</option>
<option value="Remote Sensing and GIS" <?php if($pg_1_discipline=="Remote Sensing and GIS") echo 'selected="selected"'; ?>>Remote Sensing and GIS</option>
<option value="Renewable Energy" <?php if($pg_1_discipline=="Renewable Energy") echo 'selected="selected"'; ?>>Renewable Energy</option>
<option value="Researcher" <?php if($pg_1_discipline=="Researcher") echo 'selected="selected"'; ?>>Researcher</option>
<option value="Resource Management" <?php if($pg_1_discipline=="Resource Management") echo 'selected="selected"'; ?>>Resource Management</option>
<option value="Respiratory Therapy" <?php if($pg_1_discipline=="Respiratory Therapy") echo 'selected="selected"'; ?>>Respiratory Therapy</option>
<option value="Robotics Engineering" <?php if($pg_1_discipline=="Robotics Engineering") echo 'selected="selected"'; ?>>Robotics Engineering</option>
<option value="Robotics" <?php if($pg_1_discipline=="Robotics") echo 'selected="selected"'; ?>>Robotics</option>
<option value="Rubber Technology" <?php if($pg_1_discipline=="Rubber Technology") echo 'selected="selected"'; ?>>Rubber Technology</option>
<option value="Rural Development" <?php if($pg_1_discipline=="Rural Development") echo 'selected="selected"'; ?>>Rural Development</option>
<option value="Rural Health" <?php if($pg_1_discipline=="Rural Health") echo 'selected="selected"'; ?>>Rural Health</option>
<option value="Science and Technology Communication" <?php if($pg_1_discipline=="Science and Technology Communication") echo 'selected="selected"'; ?>>Science and Technology Communication</option>
<option value="Seed Science and Technology" <?php if($pg_1_discipline=="Seed Science and Technology") echo 'selected="selected"'; ?>>Seed Science and Technology</option>
<option value="Sericulture" <?php if($pg_1_discipline=="Sericulture") echo 'selected="selected"'; ?>>Sericulture</option>
<option value="Service Industry Management" <?php if($pg_1_discipline=="Service Industry Management") echo 'selected="selected"'; ?>>Service Industry Management</option>
<option value="Signal Processing" <?php if($pg_1_discipline=="Signal Processing") echo 'selected="selected"'; ?>>Signal Processing</option>
<option value="Social Sciences" <?php if($pg_1_discipline=="Social Sciences") echo 'selected="selected"'; ?>>Social Sciences</option>
<option value="Software Developer" <?php if($pg_1_discipline=="Software Developer") echo 'selected="selected"'; ?>>Software Developer</option>
<option value="Software Engineer" <?php if($pg_1_discipline=="Software Engineer") echo 'selected="selected"'; ?>>Software Engineer</option>
<option value="Software Engineering" <?php if($pg_1_discipline=="Software Engineering") echo 'selected="selected"'; ?>>Software Engineering</option>
<option value="Software System" <?php if($pg_1_discipline=="Software System") echo 'selected="selected"'; ?>>Software System</option>
<option value="Software" <?php if($pg_1_discipline=="Software") echo 'selected="selected"'; ?>>Software</option>
<option value="Soil Science and Agricultural Chemistry" <?php if($pg_1_discipline=="Soil Science and Agricultural Chemistry") echo 'selected="selected"'; ?>>Soil Science and Agricultural Chemistry</option>
<option value="Soil Science" <?php if($pg_1_discipline=="Soil Science") echo 'selected="selected"'; ?>>Soil Science</option>
<option value="Soil Water Conservation" <?php if($pg_1_discipline=="Soil Water Conservation") echo 'selected="selected"'; ?>>Soil Water Conservation</option>
<option value="Soil and Water Conservation" <?php if($pg_1_discipline=="Soil and Water Conservation") echo 'selected="selected"'; ?>>Soil and Water Conservation</option>
<option value="Speech Therapy" <?php if($pg_1_discipline=="Speech Therapy") echo 'selected="selected"'; ?>>Speech Therapy</option>
<option value="Speech-Language Pathology" <?php if($pg_1_discipline=="Speech-Language Pathology") echo 'selected="selected"'; ?>>Speech-Language Pathology</option>
<option value="Sports Management" <?php if($pg_1_discipline=="Sports Management") echo 'selected="selected"'; ?>>Sports Management</option>
<option value="Sports Science" <?php if($pg_1_discipline=="Sports Science") echo 'selected="selected"'; ?>>Sports Science</option>
<option value="Statistics" <?php if($pg_1_discipline=="Statistics") echo 'selected="selected"'; ?>>Statistics</option>
<option value="Stem Cell and Tissue Engineering" <?php if($pg_1_discipline=="Stem Cell and Tissue Engineering") echo 'selected="selected"'; ?>>Stem Cell and Tissue Engineering</option>
<option value="Structural Engineering" <?php if($pg_1_discipline=="Structural Engineering") echo 'selected="selected"'; ?>>Structural Engineering</option>
<option value="Structural" <?php if($pg_1_discipline=="Structural") echo 'selected="selected"'; ?>>Structural</option>
<option value="Sugar Technology" <?php if($pg_1_discipline=="Sugar Technology") echo 'selected="selected"'; ?>>Sugar Technology</option>
<option value="Surgery" <?php if($pg_1_discipline=="Surgery") echo 'selected="selected"'; ?>>Surgery</option>
<option value="Sustainability and Design Engineering" <?php if($pg_1_discipline=="Sustainability and Design Engineering") echo 'selected="selected"'; ?>>Sustainability and Design Engineering</option>
<option value="Sustainable Development" <?php if($pg_1_discipline=="Sustainable Development") echo 'selected="selected"'; ?>>Sustainable Development</option>
<option value="System Administration and Networking" <?php if($pg_1_discipline=="System Administration and Networking") echo 'selected="selected"'; ?>>System Administration and Networking</option>
<option value="System and Network Administration" <?php if($pg_1_discipline=="System and Network Administration") echo 'selected="selected"'; ?>>System and Network Administration</option>
<option value="Systems Engineering" <?php if($pg_1_discipline=="Systems Engineering") echo 'selected="selected"'; ?>>Systems Engineering</option>
<option value="Technology Management" <?php if($pg_1_discipline=="Technology Management") echo 'selected="selected"'; ?>>Technology Management</option>
<option value="Telecommunication Engineering" <?php if($pg_1_discipline=="Telecommunication Engineering") echo 'selected="selected"'; ?>>Telecommunication Engineering</option>
<option value="Telecommunication" <?php if($pg_1_discipline=="Telecommunication") echo 'selected="selected"'; ?>>Telecommunication</option>
<option value="Textile Design" <?php if($pg_1_discipline=="Textile Design") echo 'selected="selected"'; ?>>Textile Design</option>
<option value="Textile Engineering" <?php if($pg_1_discipline=="Textile Engineering") echo 'selected="selected"'; ?>>Textile Engineering</option>
<option value="Textile Technology" <?php if($pg_1_discipline=="Textile Technology") echo 'selected="selected"'; ?>>Textile Technology</option>
<option value="Textile" <?php if($pg_1_discipline=="Textile") echo 'selected="selected"'; ?>>Textile</option>
<option value="Thermal / Thermal Power" <?php if($pg_1_discipline=="Thermal / Thermal Power") echo 'selected="selected"'; ?>>Thermal / Thermal Power</option>
<option value="Thermal Power" <?php if($pg_1_discipline=="Thermal Power") echo 'selected="selected"'; ?>>Thermal Power</option>
<option value="Thermal" <?php if($pg_1_discipline=="Thermal") echo 'selected="selected"'; ?>>Thermal</option>
<option value="Tool Engineering" <?php if($pg_1_discipline=="Tool Engineering") echo 'selected="selected"'; ?>>Tool Engineering</option>
<option value="Tool" <?php if($pg_1_discipline=="Tool") echo 'selected="selected"'; ?>>Tool</option>
<option value="Tourism and Hospitality Management" <?php if($pg_1_discipline=="Tourism and Hospitality Management") echo 'selected="selected"'; ?>>Tourism and Hospitality Management</option>
<option value="Tourism and Hotel Management" <?php if($pg_1_discipline=="Tourism and Hotel Management") echo 'selected="selected"'; ?>>Tourism and Hotel Management</option>
<option value="Tourism" <?php if($pg_1_discipline=="Tourism") echo 'selected="selected"'; ?>>Tourism</option>
<option value="Toxicology" <?php if($pg_1_discipline=="Toxicology") echo 'selected="selected"'; ?>>Toxicology</option>
<option value="Transportation Engineering" <?php if($pg_1_discipline=="Transportation Engineering") echo 'selected="selected"'; ?>>Transportation Engineering</option>
<option value="Transportation" <?php if($pg_1_discipline=="Transportation") echo 'selected="selected"'; ?>>Transportation</option>
<option value="VFX" <?php if($pg_1_discipline=="VFX") echo 'selected="selected"'; ?>>VFX</option>
<option value="VLSI Design / VLSI Technology" <?php if($pg_1_discipline=="VLSI Design / VLSI Technology") echo 'selected="selected"'; ?>>VLSI Design / VLSI Technology</option>
<option value="VLSI Design and Embedded System" <?php if($pg_1_discipline=="VLSI Design and Embedded System") echo 'selected="selected"'; ?>>VLSI Design and Embedded System</option>
<option value="VLSI Design" <?php if($pg_1_discipline=="VLSI Design") echo 'selected="selected"'; ?>>VLSI Design</option>
<option value="VLSI System Design" <?php if($pg_1_discipline=="VLSI System Design") echo 'selected="selected"'; ?>>VLSI System Design</option>
<option value="VLSI Technology" <?php if($pg_1_discipline=="VLSI Technology") echo 'selected="selected"'; ?>>VLSI Technology</option>
<option value="Veterinary Medicine" <?php if($pg_1_discipline=="Veterinary Medicine") echo 'selected="selected"'; ?>>Veterinary Medicine</option>
<option value="Veterinary Microbiology" <?php if($pg_1_discipline=="Veterinary Microbiology") echo 'selected="selected"'; ?>>Veterinary Microbiology</option>
<option value="Veterinary Parasitology" <?php if($pg_1_discipline=="Veterinary Parasitology") echo 'selected="selected"'; ?>>Veterinary Parasitology</option>
<option value="Veterinary Pharmacology and Toxicology" <?php if($pg_1_discipline=="Veterinary Pharmacology and Toxicology") echo 'selected="selected"'; ?>>Veterinary Pharmacology and Toxicology</option>
<option value="Veterinary Physiology" <?php if($pg_1_discipline=="Veterinary Physiology") echo 'selected="selected"'; ?>>Veterinary Physiology</option>
<option value="Veterinary Public Health" <?php if($pg_1_discipline=="Veterinary Public Health") echo 'selected="selected"'; ?>>Veterinary Public Health</option>
<option value="Veterinary Science" <?php if($pg_1_discipline=="Veterinary Science") echo 'selected="selected"'; ?>>Veterinary Science</option>
<option value="Veterinary Sciences" <?php if($pg_1_discipline=="Veterinary Sciences") echo 'selected="selected"'; ?>>Veterinary Sciences</option>
<option value="Virology" <?php if($pg_1_discipline=="Virology") echo 'selected="selected"'; ?>>Virology</option>
<option value="Visual Communication" <?php if($pg_1_discipline=="Visual Communication") echo 'selected="selected"'; ?>>Visual Communication</option>
<option value="Visual Effects Filmmaking" <?php if($pg_1_discipline=="Visual Effects Filmmaking") echo 'selected="selected"'; ?>>Visual Effects Filmmaking</option>
<option value="Visual Media" <?php if($pg_1_discipline=="Visual Media") echo 'selected="selected"'; ?>>Visual Media</option>
<option value="Water Management" <?php if($pg_1_discipline=="Water Management") echo 'selected="selected"'; ?>>Water Management</option>
<option value="Water Resources" <?php if($pg_1_discipline=="Water Resources") echo 'selected="selected"'; ?>>Water Resources</option>
<option value="Welding Technology" <?php if($pg_1_discipline=="Welding Technology") echo 'selected="selected"'; ?>>Welding Technology</option>
<option value="Wildlife Sciences" <?php if($pg_1_discipline=="Wildlife Sciences") echo 'selected="selected"'; ?>>Wildlife Sciences</option>
<option value="Wireless Communication Technology" <?php if($pg_1_discipline=="Wireless Communication Technology") echo 'selected="selected"'; ?>>Wireless Communication Technology</option>
<option value="Wood Science and Technology" <?php if($pg_1_discipline=="Wood Science and Technology") echo 'selected="selected"'; ?>>Wood Science and Technology</option>
<option value="Yoga and Management" <?php if($pg_1_discipline=="Yoga and Management") echo 'selected="selected"'; ?>>Yoga and Management</option>
<option value="Yoga" <?php if($pg_1_discipline=="Yoga") echo 'selected="selected"'; ?>>Yoga</option>
<option value="Zoology" <?php if($pg_1_discipline=="Zoology") echo 'selected="selected"'; ?>>Zoology</option>
<option value="OTHER" <?php if($pg_1_discipline=="OTHER") echo 'selected="selected"'; ?>>OTHER</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>College Name</b></label>
                   <input type="text" class="form-control" id="exampleCtrl" name="pg_1_college_name" ame="pg_1_univeristy_name" value="<?php echo $pg_1_college_name; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>University Name</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="pg_1_univeristy_name" value="<?php echo $pg_1_univeristy_name; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Passing Year</b></label>
                            <select class="form-control" name="pg_1_passing_year" disabled>
                                <option value="">Select</option>
                                <?php
                                $y = date("Y", strtotime("+8 HOURS"));
                                for ($year = 1950; $y >= $year; $y--) {
                                    if($pg_1_passing_year==$y)
				echo "<option value = '".$y."' selected='selected'>".$y."</option>";
			else
			echo "<option value = '".$y."'>".$y."</option>";
                                }
                                ?>
                            </select>
                        </div>


                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Percentage/CGPA</b></label>
                            <input type="number" class="form-control" id="exampleAccount" name="pg_1_percentage" value="<?php echo $pg_1_percentage; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Out of</b></label>
                            <select class="form-control" name="pg_1_out_of" disabled>
                                <option value=''>Select</option>
                                <<option value="100" <?php if($pg_1_out_of=="100") echo 'selected="selected"'; ?>>100</option>
<option value="10" <?php if($pg_1_out_of=="10") echo 'selected="selected"'; ?>>10</option>
<option value="4" <?php if($pg_1_out_of=="4") echo 'selected="selected"'; ?>>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Complete Status</b></label>
                            <select class="form-control" name="pg_1_complete_status" disabled>
                                <option value=''>Select</option>
                                <option value="Completed" <?php if($pg_1_complete_status=="Completed") echo 'selected="selected"'; ?>>Completed</option>
<option value="Ongoing" <?php if($pg_1_complete_status=="Ongoing") echo 'selected="selected"'; ?>>Ongoing</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Notes If Any</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="pg_1_notes_if_any" value="<?php echo $pg_1_notes_if_any; ?>" disabled>
                        </div>
                    </div>


                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>




                    <h4 style="color:#A31260 ;">Postgraduate II (if any, leave blank if not applicable)</h4>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Exam Passed</b></label>
                            <input type="text" class="form-control" id="exampleAccount" name="pg_2_exam_passed" placeholder="Postgraduate" disabled="disabled">
                        </div>


                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>PG Degree Name</b></label>
                            <select class="form-control" name="pg_2_pg_degree_name" disabled>
                                <option value="">Select </option>
                                <option value="5 year BS-MS Dual Degree Programme" <?php if($pg_2_pg_degree_name=="5 year BS-MS Dual Degree Programme") echo 'selected="selected"'; ?>>5 year BS-MS Dual Degree Programme</option>
<option value="5 year Integrated M.Sc" <?php if($pg_2_pg_degree_name=="5 year Integrated M.Sc") echo 'selected="selected"'; ?>>5 year Integrated M.Sc</option>
<option value="5 year dual degree B.E. and M.E." <?php if($pg_2_pg_degree_name=="5 year dual degree B.E. and M.E.") echo 'selected="selected"'; ?>>5 year dual degree B.E. and M.E.</option>
<option value="5 year dual degree B.Tech and M.Tech" <?php if($pg_2_pg_degree_name=="5 year dual degree B.Tech and M.Tech") echo 'selected="selected"'; ?>>5 year dual degree B.Tech and M.Tech</option>
<option value="Integrated M.Sc-Ph.D" <?php if($pg_2_pg_degree_name=="Integrated M.Sc-Ph.D") echo 'selected="selected"'; ?>>Integrated M.Sc-Ph.D</option>
<option value="Integrated MA" <?php if($pg_2_pg_degree_name=="Integrated MA") echo 'selected="selected"'; ?>>Integrated MA</option>
<option value="Integrated MBA" <?php if($pg_2_pg_degree_name=="Integrated MBA") echo 'selected="selected"'; ?>>Integrated MBA</option>
<option value="Integrated MCA WITH BCA" <?php if($pg_2_pg_degree_name=="Integrated MCA WITH BCA") echo 'selected="selected"'; ?>>Integrated MCA WITH BCA</option>
<option value="LLM" <?php if($pg_2_pg_degree_name=="LLM") echo 'selected="selected"'; ?>>LLM</option>
<option value="M-Pharma" <?php if($pg_2_pg_degree_name=="M-Pharma") echo 'selected="selected"'; ?>>M-Pharma</option>
<option value="M.Com" <?php if($pg_2_pg_degree_name=="M.Com") echo 'selected="selected"'; ?>>M.Com</option>
<option value="M.D.S." <?php if($pg_2_pg_degree_name=="M.D.S.") echo 'selected="selected"'; ?>>M.D.S.</option>
<option value="M.DES" <?php if($pg_2_pg_degree_name=="M.DES") echo 'selected="selected"'; ?>>M.DES</option>
<option value="M.Ed." <?php if($pg_2_pg_degree_name=="M.Ed.") echo 'selected="selected"'; ?>>M.Ed.</option>
<option value="M.E." <?php if($pg_2_pg_degree_name=="M.E.") echo 'selected="selected"'; ?>>M.E.</option>
<option value="M.Phil." <?php if($pg_2_pg_degree_name=="M.Phil.") echo 'selected="selected"'; ?>>M.Phil.</option>
<option value="M.Sc" <?php if($pg_2_pg_degree_name=="M.Sc") echo 'selected="selected"'; ?>>M.Sc</option>
<option value="M.Tech" <?php if($pg_2_pg_degree_name=="M.Tech") echo 'selected="selected"'; ?>>M.Tech</option>
<option value="MA" <?php if($pg_2_pg_degree_name=="MA") echo 'selected="selected"'; ?>>MA</option>
<option value="MBA" <?php if($pg_2_pg_degree_name=="MBA") echo 'selected="selected"'; ?>>MBA</option>
<option value="MBBS" <?php if($pg_2_pg_degree_name=="MBBS") echo 'selected="selected"'; ?>>MBBS</option>
<option value="MBEM" <?php if($pg_2_pg_degree_name=="MBEM") echo 'selected="selected"'; ?>>MBEM</option>
<option value="MBS" <?php if($pg_2_pg_degree_name=="MBS") echo 'selected="selected"'; ?>>MBS</option>
<option value="MCA" <?php if($pg_2_pg_degree_name=="MCA") echo 'selected="selected"'; ?>>MCA</option>
<option value="MPMIR" <?php if($pg_2_pg_degree_name=="MPMIR") echo 'selected="selected"'; ?>>MPMIR</option>
<option value="MPS" <?php if($pg_2_pg_degree_name=="MPS") echo 'selected="selected"'; ?>>MPS</option>
<option value="MS" <?php if($pg_2_pg_degree_name=="MS") echo 'selected="selected"'; ?>>MS</option>
<option value="MSW" <?php if($pg_2_pg_degree_name=="MSW") echo 'selected="selected"'; ?>>MSW</option>
<option value="PGDABM" <?php if($pg_2_pg_degree_name=="PGDABM") echo 'selected="selected"'; ?>>PGDABM</option>
<option value="PGDHHM" <?php if($pg_2_pg_degree_name=="PGDHHM") echo 'selected="selected"'; ?>>PGDHHM</option>
<option value="PGDM" <?php if($pg_2_pg_degree_name=="PGDM") echo 'selected="selected"'; ?>>PGDM</option>
<option value="PGDRD" <?php if($pg_2_pg_degree_name=="PGDRD") echo 'selected="selected"'; ?>>PGDRD</option>
<option value="PGDT" <?php if($pg_2_pg_degree_name=="PGDT") echo 'selected="selected"'; ?>>PGDT</option>
<option value="OTHER" <?php if($pg_2_pg_degree_name=="OTHER") echo 'selected="selected"'; ?>>OTHER</option>
                            </select>
                        </div>

                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Discipline</b></label>
                            <select class="form-control" name="pg_2_discipline" disabled>
                                <option value="">Select </option>
                                <option value="Account and finance" <?php if($pg_2_discipline=="Account and finance") echo 'selected="selected"'; ?>>Account and finance</option>
<option value="Accountancy" <?php if($pg_2_discipline=="Accountancy") echo 'selected="selected"'; ?>>Accountancy</option>
<option value="Actuarial Science" <?php if($pg_2_discipline=="Actuarial Science") echo 'selected="selected"'; ?>>Actuarial Science</option>
<option value="Advanced Biochemistry" <?php if($pg_2_discipline=="Advanced Biochemistry") echo 'selected="selected"'; ?>>Advanced Biochemistry</option>
<option value="Advanced Manufacturing" <?php if($pg_2_discipline=="Advanced Manufacturing") echo 'selected="selected"'; ?>>Advanced Manufacturing</option>
<option value="Advanced Zoology and Biotechnology" <?php if($pg_2_discipline=="Advanced Zoology and Biotechnology") echo 'selected="selected"'; ?>>Advanced Zoology and Biotechnology</option>
<option value="Advertising Management and Public Relations" <?php if($pg_2_discipline=="Advertising Management and Public Relations") echo 'selected="selected"'; ?>>Advertising Management and Public Relations</option>
<option value="Aerodynamics" <?php if($pg_2_discipline=="Aerodynamics") echo 'selected="selected"'; ?>>Aerodynamics</option>
<option value="Aeronautical Engineering" <?php if($pg_2_discipline=="Aeronautical Engineering") echo 'selected="selected"'; ?>>Aeronautical Engineering</option>
<option value="Aeronautical Science" <?php if($pg_2_discipline=="Aeronautical Science") echo 'selected="selected"'; ?>>Aeronautical Science</option>
<option value="Aeronautical" <?php if($pg_2_discipline=="Aeronautical") echo 'selected="selected"'; ?>>Aeronautical</option>
<option value="Aerospace Engineering" <?php if($pg_2_discipline=="Aerospace Engineering") echo 'selected="selected"'; ?>>Aerospace Engineering</option>
<option value="Aerospace Propulsion" <?php if($pg_2_discipline=="Aerospace Propulsion") echo 'selected="selected"'; ?>>Aerospace Propulsion</option>
<option value="Aerospace" <?php if($pg_2_discipline=="Aerospace") echo 'selected="selected"'; ?>>Aerospace</option>
<option value="Agricultural Biotechnology" <?php if($pg_2_discipline=="Agricultural Biotechnology") echo 'selected="selected"'; ?>>Agricultural Biotechnology</option>
<option value="Agricultural Botany" <?php if($pg_2_discipline=="Agricultural Botany") echo 'selected="selected"'; ?>>Agricultural Botany</option>
<option value="Agricultural Economics and Business Management" <?php if($pg_2_discipline=="Agricultural Economics and Business Management") echo 'selected="selected"'; ?>>Agricultural Economics and Business Management</option>
<option value="Agricultural Economics" <?php if($pg_2_discipline=="Agricultural Economics") echo 'selected="selected"'; ?>>Agricultural Economics</option>
<option value="Agricultural Engineering" <?php if($pg_2_discipline=="Agricultural Engineering") echo 'selected="selected"'; ?>>Agricultural Engineering</option>
<option value="Agricultural Extension Education" <?php if($pg_2_discipline=="Agricultural Extension Education") echo 'selected="selected"'; ?>>Agricultural Extension Education</option>
<option value="Agricultural Microbiology" <?php if($pg_2_discipline=="Agricultural Microbiology") echo 'selected="selected"'; ?>>Agricultural Microbiology</option>
<option value="Agricultural Physics" <?php if($pg_2_discipline=="Agricultural Physics") echo 'selected="selected"'; ?>>Agricultural Physics</option>
<option value="Agricultural Statistics" <?php if($pg_2_discipline=="Agricultural Statistics") echo 'selected="selected"'; ?>>Agricultural Statistics</option>
<option value="Agricultural" <?php if($pg_2_discipline=="Agricultural") echo 'selected="selected"'; ?>>Agricultural</option>
<option value="Agriculture Chemistry and Soil Science" <?php if($pg_2_discipline=="Agriculture Chemistry and Soil Science") echo 'selected="selected"'; ?>>Agriculture Chemistry and Soil Science</option>
<option value="Agriculture and Food Engineering" <?php if($pg_2_discipline=="Agriculture and Food Engineering") echo 'selected="selected"'; ?>>Agriculture and Food Engineering</option>
<option value="Agriculture" <?php if($pg_2_discipline=="Agriculture") echo 'selected="selected"'; ?>>Agriculture</option>
<option value="Agro-meteorology" <?php if($pg_2_discipline=="Agro-meteorology") echo 'selected="selected"'; ?>>Agro-meteorology</option>
<option value="Agroforestry" <?php if($pg_2_discipline=="Agroforestry") echo 'selected="selected"'; ?>>Agroforestry</option>
<option value="Agronomy" <?php if($pg_2_discipline=="Agronomy") echo 'selected="selected"'; ?>>Agronomy</option>
<option value="Air Armament" <?php if($pg_2_discipline=="Air Armament") echo 'selected="selected"'; ?>>Air Armament</option>
<option value="Airlines Tourism and Hospitality Management" <?php if($pg_2_discipline=="Airlines Tourism and Hospitality Management") echo 'selected="selected"'; ?>>Airlines Tourism and Hospitality Management</option>
<option value="Alloy Technology" <?php if($pg_2_discipline=="Alloy Technology") echo 'selected="selected"'; ?>>Alloy Technology</option>
<option value="Anaesthesia Technology" <?php if($pg_2_discipline=="Anaesthesia Technology") echo 'selected="selected"'; ?>>Anaesthesia Technology</option>
<option value="Analytical Chemistry" <?php if($pg_2_discipline=="Analytical Chemistry") echo 'selected="selected"'; ?>>Analytical Chemistry</option>
<option value="Anatomy" <?php if($pg_2_discipline=="Anatomy") echo 'selected="selected"'; ?>>Anatomy</option>
<option value="Animal Biotechnology" <?php if($pg_2_discipline=="Animal Biotechnology") echo 'selected="selected"'; ?>>Animal Biotechnology</option>
<option value="Animal Nutrition" <?php if($pg_2_discipline=="Animal Nutrition") echo 'selected="selected"'; ?>>Animal Nutrition</option>
<option value="Animal Science" <?php if($pg_2_discipline=="Animal Science") echo 'selected="selected"'; ?>>Animal Science</option>
<option value="Animation Filmmaking" <?php if($pg_2_discipline=="Animation Filmmaking") echo 'selected="selected"'; ?>>Animation Filmmaking</option>
<option value="Animation and Visual Effects" <?php if($pg_2_discipline=="Animation and Visual Effects") echo 'selected="selected"'; ?>>Animation and Visual Effects</option>
<option value="Animation" <?php if($pg_2_discipline=="Animation") echo 'selected="selected"'; ?>>Animation</option>
<option value="Anthropology" <?php if($pg_2_discipline=="Anthropology") echo 'selected="selected"'; ?>>Anthropology</option>
<option value="Apparel Technology and Management" <?php if($pg_2_discipline=="Apparel Technology and Management") echo 'selected="selected"'; ?>>Apparel Technology and Management</option>
<option value="Apparel and Textiles" <?php if($pg_2_discipline=="Apparel and Textiles") echo 'selected="selected"'; ?>>Apparel and Textiles</option>
<option value="Applications of Mathematics" <?php if($pg_2_discipline=="Applications of Mathematics") echo 'selected="selected"'; ?>>Applications of Mathematics</option>
<option value="Applied Biology" <?php if($pg_2_discipline=="Applied Biology") echo 'selected="selected"'; ?>>Applied Biology</option>
<option value="Applied Biotechnology" <?php if($pg_2_discipline=="Applied Biotechnology") echo 'selected="selected"'; ?>>Applied Biotechnology</option>
<option value="Applied Chemistry" <?php if($pg_2_discipline=="Applied Chemistry") echo 'selected="selected"'; ?>>Applied Chemistry</option>
<option value="Applied Econometrics and Business Forecasting" <?php if($pg_2_discipline=="Applied Econometrics and Business Forecasting") echo 'selected="selected"'; ?>>Applied Econometrics and Business Forecasting</option>
<option value="Applied Economics" <?php if($pg_2_discipline=="Applied Economics") echo 'selected="selected"'; ?>>Applied Economics</option>
<option value="Applied Electronics and Instrumentation" <?php if($pg_2_discipline=="Applied Electronics and Instrumentation") echo 'selected="selected"'; ?>>Applied Electronics and Instrumentation</option>
<option value="Applied Electronics" <?php if($pg_2_discipline=="Applied Electronics") echo 'selected="selected"'; ?>>Applied Electronics</option>
<option value="Applied Fisheries and Aquaculture" <?php if($pg_2_discipline=="Applied Fisheries and Aquaculture") echo 'selected="selected"'; ?>>Applied Fisheries and Aquaculture</option>
<option value="Applied Genetics" <?php if($pg_2_discipline=="Applied Genetics") echo 'selected="selected"'; ?>>Applied Genetics</option>
<option value="Applied Geography" <?php if($pg_2_discipline=="Applied Geography") echo 'selected="selected"'; ?>>Applied Geography</option>
<option value="Applied Geology" <?php if($pg_2_discipline=="Applied Geology") echo 'selected="selected"'; ?>>Applied Geology</option>
<option value="Applied Geophysics" <?php if($pg_2_discipline=="Applied Geophysics") echo 'selected="selected"'; ?>>Applied Geophysics</option>
<option value="Applied Mathematics and Computing" <?php if($pg_2_discipline=="Applied Mathematics and Computing") echo 'selected="selected"'; ?>>Applied Mathematics and Computing</option>
<option value="Applied Mathematics" <?php if($pg_2_discipline=="Applied Mathematics") echo 'selected="selected"'; ?>>Applied Mathematics</option>
<option value="Applied Mechanics" <?php if($pg_2_discipline=="Applied Mechanics") echo 'selected="selected"'; ?>>Applied Mechanics</option>
<option value="Applied Microbiology" <?php if($pg_2_discipline=="Applied Microbiology") echo 'selected="selected"'; ?>>Applied Microbiology</option>
<option value="Applied Nutrition" <?php if($pg_2_discipline=="Applied Nutrition") echo 'selected="selected"'; ?>>Applied Nutrition</option>
<option value="Applied Optics" <?php if($pg_2_discipline=="Applied Optics") echo 'selected="selected"'; ?>>Applied Optics</option>
<option value="Applied Physics" <?php if($pg_2_discipline=="Applied Physics") echo 'selected="selected"'; ?>>Applied Physics</option>
<option value="Applied Plant Science" <?php if($pg_2_discipline=="Applied Plant Science") echo 'selected="selected"'; ?>>Applied Plant Science</option>
<option value="Applied Psychology" <?php if($pg_2_discipline=="Applied Psychology") echo 'selected="selected"'; ?>>Applied Psychology</option>
<option value="Applied Science" <?php if($pg_2_discipline=="Applied Science") echo 'selected="selected"'; ?>>Applied Science</option>
<option value="Applied Statistics and Informatics" <?php if($pg_2_discipline=="Applied Statistics and Informatics") echo 'selected="selected"'; ?>>Applied Statistics and Informatics</option>
<option value="Applied Zoology" <?php if($pg_2_discipline=="Applied Zoology") echo 'selected="selected"'; ?>>Applied Zoology</option>
<option value="Aqua Cultural" <?php if($pg_2_discipline=="Aqua Cultural") echo 'selected="selected"'; ?>>Aqua Cultural</option>
<option value="Aquaculture" <?php if($pg_2_discipline=="Aquaculture") echo 'selected="selected"'; ?>>Aquaculture</option>
<option value="Aqualogy" <?php if($pg_2_discipline=="Aqualogy") echo 'selected="selected"'; ?>>Aqualogy</option>
<option value="Aquatic Biology and Fisheries" <?php if($pg_2_discipline=="Aquatic Biology and Fisheries") echo 'selected="selected"'; ?>>Aquatic Biology and Fisheries</option>
<option value="Architectural Engineering" <?php if($pg_2_discipline=="Architectural Engineering") echo 'selected="selected"'; ?>>Architectural Engineering</option>
<option value="Architecture Urban Design" <?php if($pg_2_discipline=="Architecture Urban Design") echo 'selected="selected"'; ?>>Architecture Urban Design</option>
<option value="Architecture" <?php if($pg_2_discipline=="Architecture") echo 'selected="selected"'; ?>>Architecture</option>
<option value="Artificial Intelligence and Machine Learning" <?php if($pg_2_discipline=="Artificial Intelligence and Machine Learning") echo 'selected="selected"'; ?>>Artificial Intelligence and Machine Learning</option>
<option value="Artificial Intelligence" <?php if($pg_2_discipline=="Artificial Intelligence") echo 'selected="selected"'; ?>>Artificial Intelligence</option>
<option value="Assistant Engineer" <?php if($pg_2_discipline=="Assistant Engineer") echo 'selected="selected"'; ?>>Assistant Engineer</option>
<option value="Astronomy and Space Physics" <?php if($pg_2_discipline=="Astronomy and Space Physics") echo 'selected="selected"'; ?>>Astronomy and Space Physics</option>
<option value="Astronomy" <?php if($pg_2_discipline=="Astronomy") echo 'selected="selected"'; ?>>Astronomy</option>
<option value="Astrophysics" <?php if($pg_2_discipline=="Astrophysics") echo 'selected="selected"'; ?>>Astrophysics</option>
<option value="Athletic Training" <?php if($pg_2_discipline=="Athletic Training") echo 'selected="selected"'; ?>>Athletic Training</option>
<option value="Audio Speech Therapy" <?php if($pg_2_discipline=="Audio Speech Therapy") echo 'selected="selected"'; ?>>Audio Speech Therapy</option>
<option value="Audiology and Speech Language Pathology" <?php if($pg_2_discipline=="Audiology and Speech Language Pathology") echo 'selected="selected"'; ?>>Audiology and Speech Language Pathology</option>
<option value="Audiology and Speech Rehabilitation" <?php if($pg_2_discipline=="Audiology and Speech Rehabilitation") echo 'selected="selected"'; ?>>Audiology and Speech Rehabilitation</option>
<option value="Audiology" <?php if($pg_2_discipline=="Audiology") echo 'selected="selected"'; ?>>Audiology</option>
<option value="Automobile Engineer" <?php if($pg_2_discipline=="Automobile Engineer") echo 'selected="selected"'; ?>>Automobile Engineer</option>
<option value="Automobile Engineering" <?php if($pg_2_discipline=="Automobile Engineering") echo 'selected="selected"'; ?>>Automobile Engineering</option>
<option value="Automobile" <?php if($pg_2_discipline=="Automobile") echo 'selected="selected"'; ?>>Automobile</option>
<option value="Automobile/Automotive" <?php if($pg_2_discipline=="Automobile/Automotive") echo 'selected="selected"'; ?>>Automobile/Automotive</option>
<option value="Automotive Engineering" <?php if($pg_2_discipline=="Automotive Engineering") echo 'selected="selected"'; ?>>Automotive Engineering</option>
<option value="Automotive" <?php if($pg_2_discipline=="Automotive") echo 'selected="selected"'; ?>>Automotive</option>
<option value="Aviation" <?php if($pg_2_discipline=="Aviation") echo 'selected="selected"'; ?>>Aviation</option>
<option value="Avionics" <?php if($pg_2_discipline=="Avionics") echo 'selected="selected"'; ?>>Avionics</option>
<option value="Bacteriology" <?php if($pg_2_discipline=="Bacteriology") echo 'selected="selected"'; ?>>Bacteriology</option>
<option value="Banking and Finance" <?php if($pg_2_discipline=="Banking and Finance") echo 'selected="selected"'; ?>>Banking and Finance</option>
<option value="Beauty Cosmetology" <?php if($pg_2_discipline=="Beauty Cosmetology") echo 'selected="selected"'; ?>>Beauty Cosmetology</option>
<option value="Big Data Analytics" <?php if($pg_2_discipline=="Big Data Analytics") echo 'selected="selected"'; ?>>Big Data Analytics</option>
<option value="Bio Mineral Processing" <?php if($pg_2_discipline=="Bio Mineral Processing") echo 'selected="selected"'; ?>>Bio Mineral Processing</option>
<option value="Bio Mineral" <?php if($pg_2_discipline=="Bio Mineral") echo 'selected="selected"'; ?>>Bio Mineral</option>
<option value="Bio Pharmaceutical Technology" <?php if($pg_2_discipline=="Bio Pharmaceutical Technology") echo 'selected="selected"'; ?>>Bio Pharmaceutical Technology</option>
<option value="Bio-informatics" <?php if($pg_2_discipline=="Bio-informatics") echo 'selected="selected"'; ?>>Bio-informatics</option>
<option value="Bio-textiles" <?php if($pg_2_discipline=="Bio-textiles") echo 'selected="selected"'; ?>>Bio-textiles</option>
<option value="BioInformatics" <?php if($pg_2_discipline=="BioInformatics") echo 'selected="selected"'; ?>>BioInformatics</option>
<option value="Biochemical" <?php if($pg_2_discipline=="Biochemical") echo 'selected="selected"'; ?>>Biochemical</option>
<option value="Biochemistry" <?php if($pg_2_discipline=="Biochemistry") echo 'selected="selected"'; ?>>Biochemistry</option>
<option value="Biodiversity and Conservation" <?php if($pg_2_discipline=="Biodiversity and Conservation") echo 'selected="selected"'; ?>>Biodiversity and Conservation</option>
<option value="Bioinformatics" <?php if($pg_2_discipline=="Bioinformatics") echo 'selected="selected"'; ?>>Bioinformatics</option>
<option value="Biological Science" <?php if($pg_2_discipline=="Biological Science") echo 'selected="selected"'; ?>>Biological Science</option>
<option value="Biological Sciences" <?php if($pg_2_discipline=="Biological Sciences") echo 'selected="selected"'; ?>>Biological Sciences</option>
<option value="Biology" <?php if($pg_2_discipline=="Biology") echo 'selected="selected"'; ?>>Biology</option>
<option value="Biomaterials and Tissue Engineering" <?php if($pg_2_discipline=="Biomaterials and Tissue Engineering") echo 'selected="selected"'; ?>>Biomaterials and Tissue Engineering</option>
<option value="Biomedical Engineering" <?php if($pg_2_discipline=="Biomedical Engineering") echo 'selected="selected"'; ?>>Biomedical Engineering</option>
<option value="Biomedical Genetics" <?php if($pg_2_discipline=="Biomedical Genetics") echo 'selected="selected"'; ?>>Biomedical Genetics</option>
<option value="Biomedical Science" <?php if($pg_2_discipline=="Biomedical Science") echo 'selected="selected"'; ?>>Biomedical Science</option>
<option value="Biomedical Sciences" <?php if($pg_2_discipline=="Biomedical Sciences") echo 'selected="selected"'; ?>>Biomedical Sciences</option>
<option value="Biomedical" <?php if($pg_2_discipline=="Biomedical") echo 'selected="selected"'; ?>>Biomedical</option>
<option value="Biophysics" <?php if($pg_2_discipline=="Biophysics") echo 'selected="selected"'; ?>>Biophysics</option>
<option value="Bioprocess Technology" <?php if($pg_2_discipline=="Bioprocess Technology") echo 'selected="selected"'; ?>>Bioprocess Technology</option>
<option value="Bioresource Management" <?php if($pg_2_discipline=="Bioresource Management") echo 'selected="selected"'; ?>>Bioresource Management</option>
<option value="Bioscience" <?php if($pg_2_discipline=="Bioscience") echo 'selected="selected"'; ?>>Bioscience</option>
<option value="Biostatistics" <?php if($pg_2_discipline=="Biostatistics") echo 'selected="selected"'; ?>>Biostatistics</option>
<option value="Biotech Engineering" <?php if($pg_2_discipline=="Biotech Engineering") echo 'selected="selected"'; ?>>Biotech Engineering</option>
<option value="Biotechnology Engineering" <?php if($pg_2_discipline=="Biotechnology Engineering") echo 'selected="selected"'; ?>>Biotechnology Engineering</option>
<option value="Biotechnology" <?php if($pg_2_discipline=="Biotechnology") echo 'selected="selected"'; ?>>Biotechnology</option>
<option value="Biotechnology" <?php if($pg_2_discipline=="Biotechnology") echo 'selected="selected"'; ?>>Biotechnology</option>
<option value="Botany hons" <?php if($pg_2_discipline=="Botany hons") echo 'selected="selected"'; ?>>Botany hons</option>
<option value="Botany" <?php if($pg_2_discipline=="Botany") echo 'selected="selected"'; ?>>Botany</option>
<option value="Business Administration Finance" <?php if($pg_2_discipline=="Business Administration Finance") echo 'selected="selected"'; ?>>Business Administration Finance</option>
<option value="Business Administration Human Resource" <?php if($pg_2_discipline=="Business Administration Human Resource") echo 'selected="selected"'; ?>>Business Administration Human Resource</option>
<option value="Business Administration Information Tech." <?php if($pg_2_discipline=="Business Administration Information Tech.") echo 'selected="selected"'; ?>>Business Administration Information Tech.</option>
<option value="Business Administration Marketing" <?php if($pg_2_discipline=="Business Administration Marketing") echo 'selected="selected"'; ?>>Business Administration Marketing</option>
<option value="Business Administration" <?php if($pg_2_discipline=="Business Administration") echo 'selected="selected"'; ?>>Business Administration</option>
<option value="CAD CAM" <?php if($pg_2_discipline=="CAD CAM") echo 'selected="selected"'; ?>>CAD CAM</option>
<option value="CAD/CAM" <?php if($pg_2_discipline=="CAD/CAM") echo 'selected="selected"'; ?>>CAD/CAM</option>
<option value="Cardiac Perfusion" <?php if($pg_2_discipline=="Cardiac Perfusion") echo 'selected="selected"'; ?>>Cardiac Perfusion</option>
<option value="Cardiovascular Technology" <?php if($pg_2_discipline=="Cardiovascular Technology") echo 'selected="selected"'; ?>>Cardiovascular Technology</option>
<option value="Cell and Molecular Biology" <?php if($pg_2_discipline=="Cell and Molecular Biology") echo 'selected="selected"'; ?>>Cell and Molecular Biology</option>
<option value="Ceramic Engineering" <?php if($pg_2_discipline=="Ceramic Engineering") echo 'selected="selected"'; ?>>Ceramic Engineering</option>
<option value="Ceramic" <?php if($pg_2_discipline=="Ceramic") echo 'selected="selected"'; ?>>Ceramic</option>
<option value="Chemical Engineering" <?php if($pg_2_discipline=="Chemical Engineering") echo 'selected="selected"'; ?>>Chemical Engineering</option>
<option value="Chemical Sciences" <?php if($pg_2_discipline=="Chemical Sciences") echo 'selected="selected"'; ?>>Chemical Sciences</option>
<option value="Chemical" <?php if($pg_2_discipline=="Chemical") echo 'selected="selected"'; ?>>Chemical</option>
<option value="Chemistry hons" <?php if($pg_2_discipline=="Chemistry hons") echo 'selected="selected"'; ?>>Chemistry hons</option>
<option value="Chemistry" <?php if($pg_2_discipline=="Chemistry") echo 'selected="selected"'; ?>>Chemistry</option>
<option value="Chief Engineer" <?php if($pg_2_discipline=="Chief Engineer") echo 'selected="selected"'; ?>>Chief Engineer</option>
<option value="Chief" <?php if($pg_2_discipline=="Chief") echo 'selected="selected"'; ?>>Chief</option>
<option value="Child Guidance and Family Counselling" <?php if($pg_2_discipline=="Child Guidance and Family Counselling") echo 'selected="selected"'; ?>>Child Guidance and Family Counselling</option>
<option value="Child Health Nursing" <?php if($pg_2_discipline=="Child Health Nursing") echo 'selected="selected"'; ?>>Child Health Nursing</option>
<option value="Cinematography" <?php if($pg_2_discipline=="Cinematography") echo 'selected="selected"'; ?>>Cinematography</option>
<option value="Civil Engineering" <?php if($pg_2_discipline=="Civil Engineering") echo 'selected="selected"'; ?>>Civil Engineering</option>
<option value="Civil Science" <?php if($pg_2_discipline=="Civil Science") echo 'selected="selected"'; ?>>Civil Science</option>
<option value="Civil" <?php if($pg_2_discipline=="Civil") echo 'selected="selected"'; ?>>Civil</option>
<option value="Clinical Laboratory Science" <?php if($pg_2_discipline=="Clinical Laboratory Science") echo 'selected="selected"'; ?>>Clinical Laboratory Science</option>
<option value="Clinical Microbiology" <?php if($pg_2_discipline=="Clinical Microbiology") echo 'selected="selected"'; ?>>Clinical Microbiology</option>
<option value="Clinical Nutrition" <?php if($pg_2_discipline=="Clinical Nutrition") echo 'selected="selected"'; ?>>Clinical Nutrition</option>
<option value="Clinical Psychology" <?php if($pg_2_discipline=="Clinical Psychology") echo 'selected="selected"'; ?>>Clinical Psychology</option>
<option value="Clinical Research and Regulatory Affairs" <?php if($pg_2_discipline=="Clinical Research and Regulatory Affairs") echo 'selected="selected"'; ?>>Clinical Research and Regulatory Affairs</option>
<option value="Clinical Research" <?php if($pg_2_discipline=="Clinical Research") echo 'selected="selected"'; ?>>Clinical Research</option>
<option value="Clothing and Textiles" <?php if($pg_2_discipline=="Clothing and Textiles") echo 'selected="selected"'; ?>>Clothing and Textiles</option>
<option value="Cloud Computing" <?php if($pg_2_discipline=="Cloud Computing") echo 'selected="selected"'; ?>>Cloud Computing</option>
<option value="Co-operation and BankingCo-Operative Management" <?php if($pg_2_discipline=="Co-operation and BankingCo-Operative Management") echo 'selected="selected"'; ?>>Co-operation and BankingCo-Operative Management</option>
<option value="Coastal and Disaster Management" <?php if($pg_2_discipline=="Coastal and Disaster Management") echo 'selected="selected"'; ?>>Coastal and Disaster Management</option>
<option value="Cognitive Science" <?php if($pg_2_discipline=="Cognitive Science") echo 'selected="selected"'; ?>>Cognitive Science</option>
<option value="Commerce Accountancy" <?php if($pg_2_discipline=="Commerce Accountancy") echo 'selected="selected"'; ?>>Commerce Accountancy</option>
<option value="Commerce Accounting and Finance" <?php if($pg_2_discipline=="Commerce Accounting and Finance") echo 'selected="selected"'; ?>>Commerce Accounting and Finance</option>
<option value="Commerce Computer Applications" <?php if($pg_2_discipline=="Commerce Computer Applications") echo 'selected="selected"'; ?>>Commerce Computer Applications</option>
<option value="Commerce Finance" <?php if($pg_2_discipline=="Commerce Finance") echo 'selected="selected"'; ?>>Commerce Finance</option>
<option value="Commerce" <?php if($pg_2_discipline=="Commerce") echo 'selected="selected"'; ?>>Commerce</option>
<option value="Communication Design" <?php if($pg_2_discipline=="Communication Design") echo 'selected="selected"'; ?>>Communication Design</option>
<option value="Communication Media for Children" <?php if($pg_2_discipline=="Communication Media for Children") echo 'selected="selected"'; ?>>Communication Media for Children</option>
<option value="Communication Systems" <?php if($pg_2_discipline=="Communication Systems") echo 'selected="selected"'; ?>>Communication Systems</option>
<option value="Communication" <?php if($pg_2_discipline=="Communication") echo 'selected="selected"'; ?>>Communication</option>
<option value="Communications Engineering" <?php if($pg_2_discipline=="Communications Engineering") echo 'selected="selected"'; ?>>Communications Engineering</option>
<option value="Community Health Nursing" <?php if($pg_2_discipline=="Community Health Nursing") echo 'selected="selected"'; ?>>Community Health Nursing</option>
<option value="Computational Biology" <?php if($pg_2_discipline=="Computational Biology") echo 'selected="selected"'; ?>>Computational Biology</option>
<option value="Computer Animation and Visual Effects" <?php if($pg_2_discipline=="Computer Animation and Visual Effects") echo 'selected="selected"'; ?>>Computer Animation and Visual Effects</option>
<option value="Computer Applications" <?php if($pg_2_discipline=="Computer Applications") echo 'selected="selected"'; ?>>Computer Applications</option>
<option value="Computer Communication" <?php if($pg_2_discipline=="Computer Communication") echo 'selected="selected"'; ?>>Computer Communication</option>
<option value="Computer Engineering" <?php if($pg_2_discipline=="Computer Engineering") echo 'selected="selected"'; ?>>Computer Engineering</option>
<option value="Computer Integrated Manufacturing" <?php if($pg_2_discipline=="Computer Integrated Manufacturing") echo 'selected="selected"'; ?>>Computer Integrated Manufacturing</option>
<option value="Computer Network and Information Security" <?php if($pg_2_discipline=="Computer Network and Information Security") echo 'selected="selected"'; ?>>Computer Network and Information Security</option>
<option value="Computer Network" <?php if($pg_2_discipline=="Computer Network") echo 'selected="selected"'; ?>>Computer Network</option>
<option value="Computer Science Engineering" <?php if($pg_2_discipline=="Computer Science Engineering") echo 'selected="selected"'; ?>>Computer Science Engineering</option>
<option value="Computer Science Technology" <?php if($pg_2_discipline=="Computer Science Technology") echo 'selected="selected"'; ?>>Computer Science Technology</option>
<option value="Computer Science and Engineering" <?php if($pg_2_discipline=="Computer Science and Engineering") echo 'selected="selected"'; ?>>Computer Science and Engineering</option>
<option value="Computer Science and Technology" <?php if($pg_2_discipline=="Computer Science and Technology") echo 'selected="selected"'; ?>>Computer Science and Technology</option>
<option value="Computer Science" <?php if($pg_2_discipline=="Computer Science") echo 'selected="selected"'; ?>>Computer Science</option>
<option value="Computer Technology" <?php if($pg_2_discipline=="Computer Technology") echo 'selected="selected"'; ?>>Computer Technology</option>
<option value="Computer" <?php if($pg_2_discipline=="Computer") echo 'selected="selected"'; ?>>Computer</option>
<option value="Conservation Biology" <?php if($pg_2_discipline=="Conservation Biology") echo 'selected="selected"'; ?>>Conservation Biology</option>
<option value="Constitutional Law" <?php if($pg_2_discipline=="Constitutional Law") echo 'selected="selected"'; ?>>Constitutional Law</option>
<option value="Construction Engineering" <?php if($pg_2_discipline=="Construction Engineering") echo 'selected="selected"'; ?>>Construction Engineering</option>
<option value="Construction Management" <?php if($pg_2_discipline=="Construction Management") echo 'selected="selected"'; ?>>Construction Management</option>
<option value="Construction Technology" <?php if($pg_2_discipline=="Construction Technology") echo 'selected="selected"'; ?>>Construction Technology</option>
<option value="Construction and Management" <?php if($pg_2_discipline=="Construction and Management") echo 'selected="selected"'; ?>>Construction and Management</option>
<option value="Control Systems" <?php if($pg_2_discipline=="Control Systems") echo 'selected="selected"'; ?>>Control Systems</option>
<option value="Control and Instrumentation" <?php if($pg_2_discipline=="Control and Instrumentation") echo 'selected="selected"'; ?>>Control and Instrumentation</option>
<option value="Corporate Law" <?php if($pg_2_discipline=="Corporate Law") echo 'selected="selected"'; ?>>Corporate Law</option>
<option value="Costume Design and Fashion" <?php if($pg_2_discipline=="Costume Design and Fashion") echo 'selected="selected"'; ?>>Costume Design and Fashion</option>
<option value="Counseling Psychology" <?php if($pg_2_discipline=="Counseling Psychology") echo 'selected="selected"'; ?>>Counseling Psychology</option>
<option value="Counselling" <?php if($pg_2_discipline=="Counselling") echo 'selected="selected"'; ?>>Counselling</option>
<option value="Criminal Justice" <?php if($pg_2_discipline=="Criminal Justice") echo 'selected="selected"'; ?>>Criminal Justice</option>
<option value="Criminal Law" <?php if($pg_2_discipline=="Criminal Law") echo 'selected="selected"'; ?>>Criminal Law</option>
<option value="Criminology and Criminal Justice" <?php if($pg_2_discipline=="Criminology and Criminal Justice") echo 'selected="selected"'; ?>>Criminology and Criminal Justice</option>
<option value="Criminology" <?php if($pg_2_discipline=="Criminology") echo 'selected="selected"'; ?>>Criminology</option>
<option value="Cyber Law and Information Security" <?php if($pg_2_discipline=="Cyber Law and Information Security") echo 'selected="selected"'; ?>>Cyber Law and Information Security</option>
<option value="Cyber Security" <?php if($pg_2_discipline=="Cyber Security") echo 'selected="selected"'; ?>>Cyber Security</option>
<option value="Dairy Engineering" <?php if($pg_2_discipline=="Dairy Engineering") echo 'selected="selected"'; ?>>Dairy Engineering</option>
<option value="Dairy Science" <?php if($pg_2_discipline=="Dairy Science") echo 'selected="selected"'; ?>>Dairy Science</option>
<option value="Dairy Technology" <?php if($pg_2_discipline=="Dairy Technology") echo 'selected="selected"'; ?>>Dairy Technology</option>
<option value="Data Analytics" <?php if($pg_2_discipline=="Data Analytics") echo 'selected="selected"'; ?>>Data Analytics</option>
<option value="Data Mining and Warehousing" <?php if($pg_2_discipline=="Data Mining and Warehousing") echo 'selected="selected"'; ?>>Data Mining and Warehousing</option>
<option value="Data Science" <?php if($pg_2_discipline=="Data Science") echo 'selected="selected"'; ?>>Data Science</option>
<option value="Dental Surgery" <?php if($pg_2_discipline=="Dental Surgery") echo 'selected="selected"'; ?>>Dental Surgery</option>
<option value="Design and Manufacturing" <?php if($pg_2_discipline=="Design and Manufacturing") echo 'selected="selected"'; ?>>Design and Manufacturing</option>
<option value="Design" <?php if($pg_2_discipline=="Design") echo 'selected="selected"'; ?>>Design</option>
<option value="Development Communications" <?php if($pg_2_discipline=="Development Communications") echo 'selected="selected"'; ?>>Development Communications</option>
<option value="Development Studies" <?php if($pg_2_discipline=="Development Studies") echo 'selected="selected"'; ?>>Development Studies</option>
<option value="Dietetics" <?php if($pg_2_discipline=="Dietetics") echo 'selected="selected"'; ?>>Dietetics</option>
<option value="Digital Communication and Networking" <?php if($pg_2_discipline=="Digital Communication and Networking") echo 'selected="selected"'; ?>>Digital Communication and Networking</option>
<option value="Digital Communication" <?php if($pg_2_discipline=="Digital Communication") echo 'selected="selected"'; ?>>Digital Communication</option>
<option value="Digital Electronics and Communication Systems" <?php if($pg_2_discipline=="Digital Electronics and Communication Systems") echo 'selected="selected"'; ?>>Digital Electronics and Communication Systems</option>
<option value="Digital Electronics and Communication" <?php if($pg_2_discipline=="Digital Electronics and Communication") echo 'selected="selected"'; ?>>Digital Electronics and Communication</option>
<option value="Digital Filmmaking" <?php if($pg_2_discipline=="Digital Filmmaking") echo 'selected="selected"'; ?>>Digital Filmmaking</option>
<option value="Digital System and Signal Processing" <?php if($pg_2_discipline=="Digital System and Signal Processing") echo 'selected="selected"'; ?>>Digital System and Signal Processing</option>
<option value="Digital Systems and Computer Electronics" <?php if($pg_2_discipline=="Digital Systems and Computer Electronics") echo 'selected="selected"'; ?>>Digital Systems and Computer Electronics</option>
<option value="Disaster Mitigation" <?php if($pg_2_discipline=="Disaster Mitigation") echo 'selected="selected"'; ?>>Disaster Mitigation</option>
<option value="Dot Multimedia" <?php if($pg_2_discipline=="Dot Multimedia") echo 'selected="selected"'; ?>>Dot Multimedia</option>
<option value="Drug Chemistry" <?php if($pg_2_discipline=="Drug Chemistry") echo 'selected="selected"'; ?>>Drug Chemistry</option>
<option value="E-Learning Technology" <?php if($pg_2_discipline=="E-Learning Technology") echo 'selected="selected"'; ?>>E-Learning Technology</option>
<option value="Earth Science and Resource Management" <?php if($pg_2_discipline=="Earth Science and Resource Management") echo 'selected="selected"'; ?>>Earth Science and Resource Management</option>
<option value="Earth Science" <?php if($pg_2_discipline=="Earth Science") echo 'selected="selected"'; ?>>Earth Science</option>
<option value="Earth Sciences" <?php if($pg_2_discipline=="Earth Sciences") echo 'selected="selected"'; ?>>Earth Sciences</option>
<option value="Earth System Science" <?php if($pg_2_discipline=="Earth System Science") echo 'selected="selected"'; ?>>Earth System Science</option>
<option value="Earthquake" <?php if($pg_2_discipline=="Earthquake") echo 'selected="selected"'; ?>>Earthquake</option>
<option value="Eco Restoration" <?php if($pg_2_discipline=="Eco Restoration") echo 'selected="selected"'; ?>>Eco Restoration</option>
<option value="Ecology and Environmental Science" <?php if($pg_2_discipline=="Ecology and Environmental Science") echo 'selected="selected"'; ?>>Ecology and Environmental Science</option>
<option value="Ecology" <?php if($pg_2_discipline=="Ecology") echo 'selected="selected"'; ?>>Ecology</option>
<option value="Economics and Finance" <?php if($pg_2_discipline=="Economics and Finance") echo 'selected="selected"'; ?>>Economics and Finance</option>
<option value="Economics" <?php if($pg_2_discipline=="Economics") echo 'selected="selected"'; ?>>Economics</option>
<option value="Ecotourism" <?php if($pg_2_discipline=="Ecotourism") echo 'selected="selected"'; ?>>Ecotourism</option>
<option value="Education" <?php if($pg_2_discipline=="Education") echo 'selected="selected"'; ?>>Education</option>
<option value="Electrical Devices and Power Systems" <?php if($pg_2_discipline=="Electrical Devices and Power Systems") echo 'selected="selected"'; ?>>Electrical Devices and Power Systems</option>
<option value="Electrical Engineering" <?php if($pg_2_discipline=="Electrical Engineering") echo 'selected="selected"'; ?>>Electrical Engineering</option>
<option value="Electrical and Electronics Engineering" <?php if($pg_2_discipline=="Electrical and Electronics Engineering") echo 'selected="selected"'; ?>>Electrical and Electronics Engineering</option>
<option value="Electrical and Electronics" <?php if($pg_2_discipline=="Electrical and Electronics") echo 'selected="selected"'; ?>>Electrical and Electronics</option>
<option value="Electrical power system" <?php if($pg_2_discipline=="Electrical power system") echo 'selected="selected"'; ?>>Electrical power system</option>
<option value="Electrical" <?php if($pg_2_discipline=="Electrical") echo 'selected="selected"'; ?>>Electrical</option>
<option value="Electro Chemistry" <?php if($pg_2_discipline=="Electro Chemistry") echo 'selected="selected"'; ?>>Electro Chemistry</option>
<option value="Electronic Media" <?php if($pg_2_discipline=="Electronic Media") echo 'selected="selected"'; ?>>Electronic Media</option>
<option value="Electronic Science" <?php if($pg_2_discipline=="Electronic Science") echo 'selected="selected"'; ?>>Electronic Science</option>
<option value="Electronics Engineer" <?php if($pg_2_discipline=="Electronics Engineer") echo 'selected="selected"'; ?>>Electronics Engineer</option>
<option value="Electronics Engineering" <?php if($pg_2_discipline=="Electronics Engineering") echo 'selected="selected"'; ?>>Electronics Engineering</option>
<option value="Electronics and Communication" <?php if($pg_2_discipline=="Electronics and Communication") echo 'selected="selected"'; ?>>Electronics and Communication</option>
<option value="Electronics and Communications Engineering" <?php if($pg_2_discipline=="Electronics and Communications Engineering") echo 'selected="selected"'; ?>>Electronics and Communications Engineering</option>
<option value="Electronics and Electrical" <?php if($pg_2_discipline=="Electronics and Electrical") echo 'selected="selected"'; ?>>Electronics and Electrical</option>
<option value="Electronics and Instrumentation" <?php if($pg_2_discipline=="Electronics and Instrumentation") echo 'selected="selected"'; ?>>Electronics and Instrumentation</option>
<option value="Electronics and Telecommunication" <?php if($pg_2_discipline=="Electronics and Telecommunication") echo 'selected="selected"'; ?>>Electronics and Telecommunication</option>
<option value="Electronics and Telecommunications" <?php if($pg_2_discipline=="Electronics and Telecommunications") echo 'selected="selected"'; ?>>Electronics and Telecommunications</option>
<option value="Electronics" <?php if($pg_2_discipline=="Electronics") echo 'selected="selected"'; ?>>Electronics</option>
<option value="Embedded System Technologies" <?php if($pg_2_discipline=="Embedded System Technologies") echo 'selected="selected"'; ?>>Embedded System Technologies</option>
<option value="Embedded System and VLSI Design" <?php if($pg_2_discipline=="Embedded System and VLSI Design") echo 'selected="selected"'; ?>>Embedded System and VLSI Design</option>
<option value="Embedded Systems" <?php if($pg_2_discipline=="Embedded Systems") echo 'selected="selected"'; ?>>Embedded Systems</option>
<option value="Endocrinology" <?php if($pg_2_discipline=="Endocrinology") echo 'selected="selected"'; ?>>Endocrinology</option>
<option value="Energy Systems" <?php if($pg_2_discipline=="Energy Systems") echo 'selected="selected"'; ?>>Energy Systems</option>
<option value="Energy" <?php if($pg_2_discipline=="Energy") echo 'selected="selected"'; ?>>Energy</option>
<option value="Engineering Physics" <?php if($pg_2_discipline=="Engineering Physics") echo 'selected="selected"'; ?>>Engineering Physics</option>
<option value="English" <?php if($pg_2_discipline=="English") echo 'selected="selected"'; ?>>English</option>
<option value="Entomology" <?php if($pg_2_discipline=="Entomology") echo 'selected="selected"'; ?>>Entomology</option>
<option value="Entrepreneurship" <?php if($pg_2_discipline=="Entrepreneurship") echo 'selected="selected"'; ?>>Entrepreneurship</option>
<option value="Environment and Solid Waste Management" <?php if($pg_2_discipline=="Environment and Solid Waste Management") echo 'selected="selected"'; ?>>Environment and Solid Waste Management</option>
<option value="Environmental Engineering" <?php if($pg_2_discipline=="Environmental Engineering") echo 'selected="selected"'; ?>>Environmental Engineering</option>
<option value="Environmental Management" <?php if($pg_2_discipline=="Environmental Management") echo 'selected="selected"'; ?>>Environmental Management</option>
<option value="Environmental Science and Ecology" <?php if($pg_2_discipline=="Environmental Science and Ecology") echo 'selected="selected"'; ?>>Environmental Science and Ecology</option>
<option value="Environmental Science and Technology" <?php if($pg_2_discipline=="Environmental Science and Technology") echo 'selected="selected"'; ?>>Environmental Science and Technology</option>
<option value="Environmental Science" <?php if($pg_2_discipline=="Environmental Science") echo 'selected="selected"'; ?>>Environmental Science</option>
<option value="Environmental Studies" <?php if($pg_2_discipline=="Environmental Studies") echo 'selected="selected"'; ?>>Environmental Studies</option>
<option value="Environmental and Climate Change Management" <?php if($pg_2_discipline=="Environmental and Climate Change Management") echo 'selected="selected"'; ?>>Environmental and Climate Change Management</option>
<option value="Environmental" <?php if($pg_2_discipline=="Environmental") echo 'selected="selected"'; ?>>Environmental</option>
<option value="Epidemiology" <?php if($pg_2_discipline=="Epidemiology") echo 'selected="selected"'; ?>>Epidemiology</option>
<option value="Excavation" <?php if($pg_2_discipline=="Excavation") echo 'selected="selected"'; ?>>Excavation</option>
<option value="Executive Engineer" <?php if($pg_2_discipline=="Executive Engineer") echo 'selected="selected"'; ?>>Executive Engineer</option>
<option value="Executive" <?php if($pg_2_discipline=="Executive") echo 'selected="selected"'; ?>>Executive</option>
<option value="Extension and Communication" <?php if($pg_2_discipline=="Extension and Communication") echo 'selected="selected"'; ?>>Extension and Communication</option>
<option value="Fabric and Apparel Designing" <?php if($pg_2_discipline=="Fabric and Apparel Designing") echo 'selected="selected"'; ?>>Fabric and Apparel Designing</option>
<option value="Fashion Design and Technology" <?php if($pg_2_discipline=="Fashion Design and Technology") echo 'selected="selected"'; ?>>Fashion Design and Technology</option>
<option value="Fashion Design" <?php if($pg_2_discipline=="Fashion Design") echo 'selected="selected"'; ?>>Fashion Design</option>
<option value="Fashion Designing" <?php if($pg_2_discipline=="Fashion Designing") echo 'selected="selected"'; ?>>Fashion Designing</option>
<option value="Fashion Management" <?php if($pg_2_discipline=="Fashion Management") echo 'selected="selected"'; ?>>Fashion Management</option>
<option value="Fashion Promotion and Styling" <?php if($pg_2_discipline=="Fashion Promotion and Styling") echo 'selected="selected"'; ?>>Fashion Promotion and Styling</option>
<option value="Fashion Technology" <?php if($pg_2_discipline=="Fashion Technology") echo 'selected="selected"'; ?>>Fashion Technology</option>
<option value="Fashion and Apparel Design" <?php if($pg_2_discipline=="Fashion and Apparel Design") echo 'selected="selected"'; ?>>Fashion and Apparel Design</option>
<option value="Fashion and Textile Merchandising" <?php if($pg_2_discipline=="Fashion and Textile Merchandising") echo 'selected="selected"'; ?>>Fashion and Textile Merchandising</option>
<option value="Fermentation and Microbial Technology" <?php if($pg_2_discipline=="Fermentation and Microbial Technology") echo 'selected="selected"'; ?>>Fermentation and Microbial Technology</option>
<option value="Filmmaking" <?php if($pg_2_discipline=="Filmmaking") echo 'selected="selected"'; ?>>Filmmaking</option>
<option value="Finance" <?php if($pg_2_discipline=="Finance") echo 'selected="selected"'; ?>>Finance</option>
<option value="Financial Computing" <?php if($pg_2_discipline=="Financial Computing") echo 'selected="selected"'; ?>>Financial Computing</option>
<option value="Financial Economics and Administration" <?php if($pg_2_discipline=="Financial Economics and Administration") echo 'selected="selected"'; ?>>Financial Economics and Administration</option>
<option value="Financial Mathematics" <?php if($pg_2_discipline=="Financial Mathematics") echo 'selected="selected"'; ?>>Financial Mathematics</option>
<option value="Fire Protection Engineering" <?php if($pg_2_discipline=="Fire Protection Engineering") echo 'selected="selected"'; ?>>Fire Protection Engineering</option>
<option value="Fire Safety and Hazard Management" <?php if($pg_2_discipline=="Fire Safety and Hazard Management") echo 'selected="selected"'; ?>>Fire Safety and Hazard Management</option>
<option value="Fisheries Science" <?php if($pg_2_discipline=="Fisheries Science") echo 'selected="selected"'; ?>>Fisheries Science</option>
<option value="Floriculture and Landscaping" <?php if($pg_2_discipline=="Floriculture and Landscaping") echo 'selected="selected"'; ?>>Floriculture and Landscaping</option>
<option value="Fluid Dynamics" <?php if($pg_2_discipline=="Fluid Dynamics") echo 'selected="selected"'; ?>>Fluid Dynamics</option>
<option value="Fluids" <?php if($pg_2_discipline=="Fluids") echo 'selected="selected"'; ?>>Fluids</option>
<option value="Food Biotechnology" <?php if($pg_2_discipline=="Food Biotechnology") echo 'selected="selected"'; ?>>Food Biotechnology</option>
<option value="Food Chain Management" <?php if($pg_2_discipline=="Food Chain Management") echo 'selected="selected"'; ?>>Food Chain Management</option>
<option value="Food Nutrition" <?php if($pg_2_discipline=="Food Nutrition") echo 'selected="selected"'; ?>>Food Nutrition</option>
<option value="Food Process" <?php if($pg_2_discipline=="Food Process") echo 'selected="selected"'; ?>>Food Process</option>
<option value="Food Processing Technology" <?php if($pg_2_discipline=="Food Processing Technology") echo 'selected="selected"'; ?>>Food Processing Technology</option>
<option value="Food Quality Assurance" <?php if($pg_2_discipline=="Food Quality Assurance") echo 'selected="selected"'; ?>>Food Quality Assurance</option>
<option value="Food Science and Nutrition" <?php if($pg_2_discipline=="Food Science and Nutrition") echo 'selected="selected"'; ?>>Food Science and Nutrition</option>
<option value="Food Science and Quality Control" <?php if($pg_2_discipline=="Food Science and Quality Control") echo 'selected="selected"'; ?>>Food Science and Quality Control</option>
<option value="Food Science and Technology" <?php if($pg_2_discipline=="Food Science and Technology") echo 'selected="selected"'; ?>>Food Science and Technology</option>
<option value="Food Science" <?php if($pg_2_discipline=="Food Science") echo 'selected="selected"'; ?>>Food Science</option>
<option value="Food Sciences" <?php if($pg_2_discipline=="Food Sciences") echo 'selected="selected"'; ?>>Food Sciences</option>
<option value="Food Technology" <?php if($pg_2_discipline=="Food Technology") echo 'selected="selected"'; ?>>Food Technology</option>
<option value="Food and Nutrition" <?php if($pg_2_discipline=="Food and Nutrition") echo 'selected="selected"'; ?>>Food and Nutrition</option>
<option value="Foreign Service" <?php if($pg_2_discipline=="Foreign Service") echo 'selected="selected"'; ?>>Foreign Service</option>
<option value="Foreign Trade Management" <?php if($pg_2_discipline=="Foreign Trade Management") echo 'selected="selected"'; ?>>Foreign Trade Management</option>
<option value="Forensic Science and Criminology" <?php if($pg_2_discipline=="Forensic Science and Criminology") echo 'selected="selected"'; ?>>Forensic Science and Criminology</option>
<option value="Forensic Science" <?php if($pg_2_discipline=="Forensic Science") echo 'selected="selected"'; ?>>Forensic Science</option>
<option value="Forensic Sciences" <?php if($pg_2_discipline=="Forensic Sciences") echo 'selected="selected"'; ?>>Forensic Sciences</option>
<option value="Forestry" <?php if($pg_2_discipline=="Forestry") echo 'selected="selected"'; ?>>Forestry</option>
<option value="Fruit Science" <?php if($pg_2_discipline=="Fruit Science") echo 'selected="selected"'; ?>>Fruit Science</option>
<option value="Game Design and Development" <?php if($pg_2_discipline=="Game Design and Development") echo 'selected="selected"'; ?>>Game Design and Development</option>
<option value="Gaming" <?php if($pg_2_discipline=="Gaming") echo 'selected="selected"'; ?>>Gaming</option>
<option value="Garment Manufacturing Technology" <?php if($pg_2_discipline=="Garment Manufacturing Technology") echo 'selected="selected"'; ?>>Garment Manufacturing Technology</option>
<option value="Garment Production and Export Management" <?php if($pg_2_discipline=="Garment Production and Export Management") echo 'selected="selected"'; ?>>Garment Production and Export Management</option>
<option value="Gemology" <?php if($pg_2_discipline=="Gemology") echo 'selected="selected"'; ?>>Gemology</option>
<option value="General Biotechnology" <?php if($pg_2_discipline=="General Biotechnology") echo 'selected="selected"'; ?>>General Biotechnology</option>
<option value="General" <?php if($pg_2_discipline=="General") echo 'selected="selected"'; ?>>General</option>
<option value="Genetics Engineering" <?php if($pg_2_discipline=="Genetics Engineering") echo 'selected="selected"'; ?>>Genetics Engineering</option>
<option value="Genetics and Plant Breeding" <?php if($pg_2_discipline=="Genetics and Plant Breeding") echo 'selected="selected"'; ?>>Genetics and Plant Breeding</option>
<option value="Genetics" <?php if($pg_2_discipline=="Genetics") echo 'selected="selected"'; ?>>Genetics</option>
<option value="Genomics and Proteomics" <?php if($pg_2_discipline=="Genomics and Proteomics") echo 'selected="selected"'; ?>>Genomics and Proteomics</option>
<option value="Genomics" <?php if($pg_2_discipline=="Genomics") echo 'selected="selected"'; ?>>Genomics</option>
<option value="Geography" <?php if($pg_2_discipline=="Geography") echo 'selected="selected"'; ?>>Geography</option>
<option value="Geoinformatics" <?php if($pg_2_discipline=="Geoinformatics") echo 'selected="selected"'; ?>>Geoinformatics</option>
<option value="Geological Engineering" <?php if($pg_2_discipline=="Geological Engineering") echo 'selected="selected"'; ?>>Geological Engineering</option>
<option value="Geological Sciences" <?php if($pg_2_discipline=="Geological Sciences") echo 'selected="selected"'; ?>>Geological Sciences</option>
<option value="Geology" <?php if($pg_2_discipline=="Geology") echo 'selected="selected"'; ?>>Geology</option>
<option value="Geomatics Engineering" <?php if($pg_2_discipline=="Geomatics Engineering") echo 'selected="selected"'; ?>>Geomatics Engineering</option>
<option value="Geophysics" <?php if($pg_2_discipline=="Geophysics") echo 'selected="selected"'; ?>>Geophysics</option>
<option value="Geotechnical" <?php if($pg_2_discipline=="Geotechnical") echo 'selected="selected"'; ?>>Geotechnical</option>
<option value="Global Warming Reduction" <?php if($pg_2_discipline=="Global Warming Reduction") echo 'selected="selected"'; ?>>Global Warming Reduction</option>
<option value="Graphics and Multimedia" <?php if($pg_2_discipline=="Graphics and Multimedia") echo 'selected="selected"'; ?>>Graphics and Multimedia</option>
<option value="Green Business" <?php if($pg_2_discipline=="Green Business") echo 'selected="selected"'; ?>>Green Business</option>
<option value="Green Technology" <?php if($pg_2_discipline=="Green Technology") echo 'selected="selected"'; ?>>Green Technology</option>
<option value="Habitat and Population Studies" <?php if($pg_2_discipline=="Habitat and Population Studies") echo 'selected="selected"'; ?>>Habitat and Population Studies</option>
<option value="Hardware and Networking" <?php if($pg_2_discipline=="Hardware and Networking") echo 'selected="selected"'; ?>>Hardware and Networking</option>
<option value="Health Safety and Environmental" <?php if($pg_2_discipline=="Health Safety and Environmental") echo 'selected="selected"'; ?>>Health Safety and Environmental</option>
<option value="Health Science and Nutrition" <?php if($pg_2_discipline=="Health Science and Nutrition") echo 'selected="selected"'; ?>>Health Science and Nutrition</option>
<option value="Health and Yoga Therapy" <?php if($pg_2_discipline=="Health and Yoga Therapy") echo 'selected="selected"'; ?>>Health and Yoga Therapy</option>
<option value="Heat Power" <?php if($pg_2_discipline=="Heat Power") echo 'selected="selected"'; ?>>Heat Power</option>
<option value="Herbal Science" <?php if($pg_2_discipline=="Herbal Science") echo 'selected="selected"'; ?>>Herbal Science</option>
<option value="Hindi" <?php if($pg_2_discipline=="Hindi") echo 'selected="selected"'; ?>>Hindi</option>
<option value="History" <?php if($pg_2_discipline=="History") echo 'selected="selected"'; ?>>History</option>
<option value="Home Management" <?php if($pg_2_discipline=="Home Management") echo 'selected="selected"'; ?>>Home Management</option>
<option value="Home Science" <?php if($pg_2_discipline=="Home Science") echo 'selected="selected"'; ?>>Home Science</option>
<option value="Horticulture" <?php if($pg_2_discipline=="Horticulture") echo 'selected="selected"'; ?>>Horticulture</option>
<option value="Hospital Administration" <?php if($pg_2_discipline=="Hospital Administration") echo 'selected="selected"'; ?>>Hospital Administration</option>
<option value="Hospitality Management" <?php if($pg_2_discipline=="Hospitality Management") echo 'selected="selected"'; ?>>Hospitality Management</option>
<option value="Hospitality Studies" <?php if($pg_2_discipline=="Hospitality Studies") echo 'selected="selected"'; ?>>Hospitality Studies</option>
<option value="Hospitality and Hotel Administration" <?php if($pg_2_discipline=="Hospitality and Hotel Administration") echo 'selected="selected"'; ?>>Hospitality and Hotel Administration</option>
<option value="Hospitality and Tourism Studies" <?php if($pg_2_discipline=="Hospitality and Tourism Studies") echo 'selected="selected"'; ?>>Hospitality and Tourism Studies</option>
<option value="Hospitality and Tourism" <?php if($pg_2_discipline=="Hospitality and Tourism") echo 'selected="selected"'; ?>>Hospitality and Tourism</option>
<option value="Hospitality" <?php if($pg_2_discipline=="Hospitality") echo 'selected="selected"'; ?>>Hospitality</option>
<option value="Hotel Management and Catering" <?php if($pg_2_discipline=="Hotel Management and Catering") echo 'selected="selected"'; ?>>Hotel Management and Catering</option>
<option value="Hotel Management and Culinary Arts" <?php if($pg_2_discipline=="Hotel Management and Culinary Arts") echo 'selected="selected"'; ?>>Hotel Management and Culinary Arts</option>
<option value="Hotel Management" <?php if($pg_2_discipline=="Hotel Management") echo 'selected="selected"'; ?>>Hotel Management</option>
<option value="Hotel and Catering Management" <?php if($pg_2_discipline=="Hotel and Catering Management") echo 'selected="selected"'; ?>>Hotel and Catering Management</option>
<option value="Human Development" <?php if($pg_2_discipline=="Human Development") echo 'selected="selected"'; ?>>Human Development</option>
<option value="Human Genetics" <?php if($pg_2_discipline=="Human Genetics") echo 'selected="selected"'; ?>>Human Genetics</option>
<option value="Human Physiology" <?php if($pg_2_discipline=="Human Physiology") echo 'selected="selected"'; ?>>Human Physiology</option>
<option value="Hydrochemistry" <?php if($pg_2_discipline=="Hydrochemistry") echo 'selected="selected"'; ?>>Hydrochemistry</option>
<option value="Hydrology" <?php if($pg_2_discipline=="Hydrology") echo 'selected="selected"'; ?>>Hydrology</option>
<option value="Illumination Technology and Design" <?php if($pg_2_discipline=="Illumination Technology and Design") echo 'selected="selected"'; ?>>Illumination Technology and Design</option>
<option value="Industrial Biotechnology" <?php if($pg_2_discipline=="Industrial Biotechnology") echo 'selected="selected"'; ?>>Industrial Biotechnology</option>
<option value="Industrial Chemistry" <?php if($pg_2_discipline=="Industrial Chemistry") echo 'selected="selected"'; ?>>Industrial Chemistry</option>
<option value="Industrial Engineering" <?php if($pg_2_discipline=="Industrial Engineering") echo 'selected="selected"'; ?>>Industrial Engineering</option>
<option value="Industrial Mathematics" <?php if($pg_2_discipline=="Industrial Mathematics") echo 'selected="selected"'; ?>>Industrial Mathematics</option>
<option value="Industrial Microbiology" <?php if($pg_2_discipline=="Industrial Microbiology") echo 'selected="selected"'; ?>>Industrial Microbiology</option>
<option value="Industrial Science" <?php if($pg_2_discipline=="Industrial Science") echo 'selected="selected"'; ?>>Industrial Science</option>
<option value="Industrial and Management" <?php if($pg_2_discipline=="Industrial and Management") echo 'selected="selected"'; ?>>Industrial and Management</option>
<option value="Industrial and Production Engineering" <?php if($pg_2_discipline=="Industrial and Production Engineering") echo 'selected="selected"'; ?>>Industrial and Production Engineering</option>
<option value="Industrial" <?php if($pg_2_discipline=="Industrial") echo 'selected="selected"'; ?>>Industrial</option>
<option value="Information Science" <?php if($pg_2_discipline=="Information Science") echo 'selected="selected"'; ?>>Information Science</option>
<option value="Information Security and Cyber Forensics" <?php if($pg_2_discipline=="Information Security and Cyber Forensics") echo 'selected="selected"'; ?>>Information Security and Cyber Forensics</option>
<option value="Information Security" <?php if($pg_2_discipline=="Information Security") echo 'selected="selected"'; ?>>Information Security</option>
<option value="Information Systems" <?php if($pg_2_discipline=="Information Systems") echo 'selected="selected"'; ?>>Information Systems</option>
<option value="Information Technology Engineering" <?php if($pg_2_discipline=="Information Technology Engineering") echo 'selected="selected"'; ?>>Information Technology Engineering</option>
<option value="Information Technology and Management" <?php if($pg_2_discipline=="Information Technology and Management") echo 'selected="selected"'; ?>>Information Technology and Management</option>
<option value="Information Technology" <?php if($pg_2_discipline=="Information Technology") echo 'selected="selected"'; ?>>Information Technology</option>
<option value="Information and Communication Technology" <?php if($pg_2_discipline=="Information and Communication Technology") echo 'selected="selected"'; ?>>Information and Communication Technology</option>
<option value="Inorganic Chemistry" <?php if($pg_2_discipline=="Inorganic Chemistry") echo 'selected="selected"'; ?>>Inorganic Chemistry</option>
<option value="Instrumentation Engineering" <?php if($pg_2_discipline=="Instrumentation Engineering") echo 'selected="selected"'; ?>>Instrumentation Engineering</option>
<option value="Instrumentation Technology" <?php if($pg_2_discipline=="Instrumentation Technology") echo 'selected="selected"'; ?>>Instrumentation Technology</option>
<option value="Instrumentation and Control Engineering" <?php if($pg_2_discipline=="Instrumentation and Control Engineering") echo 'selected="selected"'; ?>>Instrumentation and Control Engineering</option>
<option value="Instrumentation and Control" <?php if($pg_2_discipline=="Instrumentation and Control") echo 'selected="selected"'; ?>>Instrumentation and Control</option>
<option value="Instrumentation" <?php if($pg_2_discipline=="Instrumentation") echo 'selected="selected"'; ?>>Instrumentation</option>
<option value="Integrated Biotechnology" <?php if($pg_2_discipline=="Integrated Biotechnology") echo 'selected="selected"'; ?>>Integrated Biotechnology</option>
<option value="Intellectual Property Rights" <?php if($pg_2_discipline=="Intellectual Property Rights") echo 'selected="selected"'; ?>>Intellectual Property Rights</option>
<option value="Intelligent System" <?php if($pg_2_discipline=="Intelligent System") echo 'selected="selected"'; ?>>Intelligent System</option>
<option value="Interior Architecture and Design" <?php if($pg_2_discipline=="Interior Architecture and Design") echo 'selected="selected"'; ?>>Interior Architecture and Design</option>
<option value="Interior Design" <?php if($pg_2_discipline=="Interior Design") echo 'selected="selected"'; ?>>Interior Design</option>
<option value="Jewellery Design" <?php if($pg_2_discipline=="Jewellery Design") echo 'selected="selected"'; ?>>Jewellery Design</option>
<option value="Journalism and Mass Communication" <?php if($pg_2_discipline=="Journalism and Mass Communication") echo 'selected="selected"'; ?>>Journalism and Mass Communication</option>
<option value="Journalism" <?php if($pg_2_discipline=="Journalism") echo 'selected="selected"'; ?>>Journalism</option>
<option value="Knitwear Design" <?php if($pg_2_discipline=="Knitwear Design") echo 'selected="selected"'; ?>>Knitwear Design</option>
<option value="LLB" <?php if($pg_2_discipline=="LLB") echo 'selected="selected"'; ?>>LLB</option>
<option value="Landscape Architectur" <?php if($pg_2_discipline=="Landscape Architectur") echo 'selected="selected"'; ?>>Landscape Architectur</option>
<option value="Law" <?php if($pg_2_discipline=="Law") echo 'selected="selected"'; ?>>Law</option>
<option value="Leather Technology" <?php if($pg_2_discipline=="Leather Technology") echo 'selected="selected"'; ?>>Leather Technology</option>
<option value="Life Science" <?php if($pg_2_discipline=="Life Science") echo 'selected="selected"'; ?>>Life Science</option>
<option value="Life Sciences" <?php if($pg_2_discipline=="Life Sciences") echo 'selected="selected"'; ?>>Life Sciences</option>
<option value="Limnology and Fisheries" <?php if($pg_2_discipline=="Limnology and Fisheries") echo 'selected="selected"'; ?>>Limnology and Fisheries</option>
<option value="Live Stock Production and Management" <?php if($pg_2_discipline=="Live Stock Production and Management") echo 'selected="selected"'; ?>>Live Stock Production and Management</option>
<option value="Machine Design" <?php if($pg_2_discipline=="Machine Design") echo 'selected="selected"'; ?>>Machine Design</option>
<option value="Management and Information Technology" <?php if($pg_2_discipline=="Management and Information Technology") echo 'selected="selected"'; ?>>Management and Information Technology</option>
<option value="Manufacturing Science and Engineering" <?php if($pg_2_discipline=="Manufacturing Science and Engineering") echo 'selected="selected"'; ?>>Manufacturing Science and Engineering</option>
<option value="Manufacturing Technology" <?php if($pg_2_discipline=="Manufacturing Technology") echo 'selected="selected"'; ?>>Manufacturing Technology</option>
<option value="Manufacturing" <?php if($pg_2_discipline=="Manufacturing") echo 'selected="selected"'; ?>>Manufacturing</option>
<option value="Marine Biotechnology" <?php if($pg_2_discipline=="Marine Biotechnology") echo 'selected="selected"'; ?>>Marine Biotechnology</option>
<option value="Marine Engineering" <?php if($pg_2_discipline=="Marine Engineering") echo 'selected="selected"'; ?>>Marine Engineering</option>
<option value="Marine Geophysics" <?php if($pg_2_discipline=="Marine Geophysics") echo 'selected="selected"'; ?>>Marine Geophysics</option>
<option value="Marine Science" <?php if($pg_2_discipline=="Marine Science") echo 'selected="selected"'; ?>>Marine Science</option>
<option value="Marine" <?php if($pg_2_discipline=="Marine") echo 'selected="selected"'; ?>>Marine</option>
<option value="Marketing" <?php if($pg_2_discipline=="Marketing") echo 'selected="selected"'; ?>>Marketing</option>
<option value="Mass Communication Advertising and Journalism" <?php if($pg_2_discipline=="Mass Communication Advertising and Journalism") echo 'selected="selected"'; ?>>Mass Communication Advertising and Journalism</option>
<option value="Mass Communication and Journalism" <?php if($pg_2_discipline=="Mass Communication and Journalism") echo 'selected="selected"'; ?>>Mass Communication and Journalism</option>
<option value="Mass Communication" <?php if($pg_2_discipline=="Mass Communication") echo 'selected="selected"'; ?>>Mass Communication</option>
<option value="Material Science and Engineering" <?php if($pg_2_discipline=="Material Science and Engineering") echo 'selected="selected"'; ?>>Material Science and Engineering</option>
<option value="Material Science and" <?php if($pg_2_discipline=="Material Science and") echo 'selected="selected"'; ?>>Material Science and</option>
<option value="Materials Science" <?php if($pg_2_discipline=="Materials Science") echo 'selected="selected"'; ?>>Materials Science</option>
<option value="Maternity Nursing" <?php if($pg_2_discipline=="Maternity Nursing") echo 'selected="selected"'; ?>>Maternity Nursing</option>
<option value="Mathematical Ecology and Environment Studies" <?php if($pg_2_discipline=="Mathematical Ecology and Environment Studies") echo 'selected="selected"'; ?>>Mathematical Ecology and Environment Studies</option>
<option value="Mathematical Science" <?php if($pg_2_discipline=="Mathematical Science") echo 'selected="selected"'; ?>>Mathematical Science</option>
<option value="Mathematics and Computing" <?php if($pg_2_discipline=="Mathematics and Computing") echo 'selected="selected"'; ?>>Mathematics and Computing</option>
<option value="Mathematics hons" <?php if($pg_2_discipline=="Mathematics hons") echo 'selected="selected"'; ?>>Mathematics hons</option>
<option value="Mathematics" <?php if($pg_2_discipline=="Mathematics") echo 'selected="selected"'; ?>>Mathematics</option>
<option value="Maths and Computer Applications" <?php if($pg_2_discipline=="Maths and Computer Applications") echo 'selected="selected"'; ?>>Maths and Computer Applications</option>
<option value="Maths and Statistics" <?php if($pg_2_discipline=="Maths and Statistics") echo 'selected="selected"'; ?>>Maths and Statistics</option>
<option value="Mechanical Engineer" <?php if($pg_2_discipline=="Mechanical Engineer") echo 'selected="selected"'; ?>>Mechanical Engineer</option>
<option value="Mechanical Engineering" <?php if($pg_2_discipline=="Mechanical Engineering") echo 'selected="selected"'; ?>>Mechanical Engineering</option>
<option value="Mechanical" <?php if($pg_2_discipline=="Mechanical") echo 'selected="selected"'; ?>>Mechanical</option>
<option value="Mechatronics Engineering" <?php if($pg_2_discipline=="Mechatronics Engineering") echo 'selected="selected"'; ?>>Mechatronics Engineering</option>
<option value="Mechatronics" <?php if($pg_2_discipline=="Mechatronics") echo 'selected="selected"'; ?>>Mechatronics</option>
<option value="Media Graphics and Animation" <?php if($pg_2_discipline=="Media Graphics and Animation") echo 'selected="selected"'; ?>>Media Graphics and Animation</option>
<option value="Media Technology" <?php if($pg_2_discipline=="Media Technology") echo 'selected="selected"'; ?>>Media Technology</option>
<option value="Medical Anatomy" <?php if($pg_2_discipline=="Medical Anatomy") echo 'selected="selected"'; ?>>Medical Anatomy</option>
<option value="Medical Biochemistry" <?php if($pg_2_discipline=="Medical Biochemistry") echo 'selected="selected"'; ?>>Medical Biochemistry</option>
<option value="Medical Biotechnology" <?php if($pg_2_discipline=="Medical Biotechnology") echo 'selected="selected"'; ?>>Medical Biotechnology</option>
<option value="Medical Imaging Technology" <?php if($pg_2_discipline=="Medical Imaging Technology") echo 'selected="selected"'; ?>>Medical Imaging Technology</option>
<option value="Medical Lab Technology" <?php if($pg_2_discipline=="Medical Lab Technology") echo 'selected="selected"'; ?>>Medical Lab Technology</option>
<option value="Medical Microbiology" <?php if($pg_2_discipline=="Medical Microbiology") echo 'selected="selected"'; ?>>Medical Microbiology</option>
<option value="Medical Physics" <?php if($pg_2_discipline=="Medical Physics") echo 'selected="selected"'; ?>>Medical Physics</option>
<option value="Medical Radiation Physics" <?php if($pg_2_discipline=="Medical Radiation Physics") echo 'selected="selected"'; ?>>Medical Radiation Physics</option>
<option value="Medical Radiography and Imaging Technology" <?php if($pg_2_discipline=="Medical Radiography and Imaging Technology") echo 'selected="selected"'; ?>>Medical Radiography and Imaging Technology</option>
<option value="Medical Surgical Nursing" <?php if($pg_2_discipline=="Medical Surgical Nursing") echo 'selected="selected"'; ?>>Medical Surgical Nursing</option>
<option value="Medical Technology" <?php if($pg_2_discipline=="Medical Technology") echo 'selected="selected"'; ?>>Medical Technology</option>
<option value="Medicinal Chemistry" <?php if($pg_2_discipline=="Medicinal Chemistry") echo 'selected="selected"'; ?>>Medicinal Chemistry</option>
<option value="Medicinal Plants" <?php if($pg_2_discipline=="Medicinal Plants") echo 'selected="selected"'; ?>>Medicinal Plants</option>
<option value="Mental Health Nursing" <?php if($pg_2_discipline=="Mental Health Nursing") echo 'selected="selected"'; ?>>Mental Health Nursing</option>
<option value="Mental Health" <?php if($pg_2_discipline=="Mental Health") echo 'selected="selected"'; ?>>Mental Health</option>
<option value="Metallurgical Engineering" <?php if($pg_2_discipline=="Metallurgical Engineering") echo 'selected="selected"'; ?>>Metallurgical Engineering</option>
<option value="Meteorology" <?php if($pg_2_discipline=="Meteorology") echo 'selected="selected"'; ?>>Meteorology</option>
<option value="Microbiology and Immunology" <?php if($pg_2_discipline=="Microbiology and Immunology") echo 'selected="selected"'; ?>>Microbiology and Immunology</option>
<option value="Microbiology" <?php if($pg_2_discipline=="Microbiology") echo 'selected="selected"'; ?>>Microbiology</option>
<option value="Microelectronic Engineering" <?php if($pg_2_discipline=="Microelectronic Engineering") echo 'selected="selected"'; ?>>Microelectronic Engineering</option>
<option value="Microelectronics and Advanced Communication" <?php if($pg_2_discipline=="Microelectronics and Advanced Communication") echo 'selected="selected"'; ?>>Microelectronics and Advanced Communication</option>
<option value="Microelectronics and VLSI Design" <?php if($pg_2_discipline=="Microelectronics and VLSI Design") echo 'selected="selected"'; ?>>Microelectronics and VLSI Design</option>
<option value="Military Science" <?php if($pg_2_discipline=="Military Science") echo 'selected="selected"'; ?>>Military Science</option>
<option value="Mineral" <?php if($pg_2_discipline=="Mineral") echo 'selected="selected"'; ?>>Mineral</option>
<option value="Mining Engineer" <?php if($pg_2_discipline=="Mining Engineer") echo 'selected="selected"'; ?>>Mining Engineer</option>
<option value="Mining Engineering" <?php if($pg_2_discipline=="Mining Engineering") echo 'selected="selected"'; ?>>Mining Engineering</option>
<option value="Mining" <?php if($pg_2_discipline=="Mining") echo 'selected="selected"'; ?>>Mining</option>
<option value="Molecular Biology and Biochemistry" <?php if($pg_2_discipline=="Molecular Biology and Biochemistry") echo 'selected="selected"'; ?>>Molecular Biology and Biochemistry</option>
<option value="Molecular Biology and Genetic Engineering" <?php if($pg_2_discipline=="Molecular Biology and Genetic Engineering") echo 'selected="selected"'; ?>>Molecular Biology and Genetic Engineering</option>
<option value="Molecular Biology and Human Genetics" <?php if($pg_2_discipline=="Molecular Biology and Human Genetics") echo 'selected="selected"'; ?>>Molecular Biology and Human Genetics</option>
<option value="Molecular Biology" <?php if($pg_2_discipline=="Molecular Biology") echo 'selected="selected"'; ?>>Molecular Biology</option>
<option value="Molecular Medicine" <?php if($pg_2_discipline=="Molecular Medicine") echo 'selected="selected"'; ?>>Molecular Medicine</option>
<option value="Motorsport Engineering" <?php if($pg_2_discipline=="Motorsport Engineering") echo 'selected="selected"'; ?>>Motorsport Engineering</option>
<option value="Multimedia Technology" <?php if($pg_2_discipline=="Multimedia Technology") echo 'selected="selected"'; ?>>Multimedia Technology</option>
<option value="Multimedia and Animation" <?php if($pg_2_discipline=="Multimedia and Animation") echo 'selected="selected"'; ?>>Multimedia and Animation</option>
<option value="Multimedia" <?php if($pg_2_discipline=="Multimedia") echo 'selected="selected"'; ?>>Multimedia</option>
<option value="Museology" <?php if($pg_2_discipline=="Museology") echo 'selected="selected"'; ?>>Museology</option>
<option value="NGO Management" <?php if($pg_2_discipline=="NGO Management") echo 'selected="selected"'; ?>>NGO Management</option>
<option value="Nano Science and Technology" <?php if($pg_2_discipline=="Nano Science and Technology") echo 'selected="selected"'; ?>>Nano Science and Technology</option>
<option value="Nano Sciences and Technology" <?php if($pg_2_discipline=="Nano Sciences and Technology") echo 'selected="selected"'; ?>>Nano Sciences and Technology</option>
<option value="NanoTechnology" <?php if($pg_2_discipline=="NanoTechnology") echo 'selected="selected"'; ?>>NanoTechnology</option>
<option value="Nanotechnology Engineering" <?php if($pg_2_discipline=="Nanotechnology Engineering") echo 'selected="selected"'; ?>>Nanotechnology Engineering</option>
<option value="Natural Resource Management" <?php if($pg_2_discipline=="Natural Resource Management") echo 'selected="selected"'; ?>>Natural Resource Management</option>
<option value="Naturopathy and Yogic Science" <?php if($pg_2_discipline=="Naturopathy and Yogic Science") echo 'selected="selected"'; ?>>Naturopathy and Yogic Science</option>
<option value="Nautical Science" <?php if($pg_2_discipline=="Nautical Science") echo 'selected="selected"'; ?>>Nautical Science</option>
<option value="Naval Architecture and Ocean Engineering" <?php if($pg_2_discipline=="Naval Architecture and Ocean Engineering") echo 'selected="selected"'; ?>>Naval Architecture and Ocean Engineering</option>
<option value="Naval Engineering" <?php if($pg_2_discipline=="Naval Engineering") echo 'selected="selected"'; ?>>Naval Engineering</option>
<option value="Nematology" <?php if($pg_2_discipline=="Nematology") echo 'selected="selected"'; ?>>Nematology</option>
<option value="Network Protocol Design" <?php if($pg_2_discipline=="Network Protocol Design") echo 'selected="selected"'; ?>>Network Protocol Design</option>
<option value="Neural Networks" <?php if($pg_2_discipline=="Neural Networks") echo 'selected="selected"'; ?>>Neural Networks</option>
<option value="Neuroscience" <?php if($pg_2_discipline=="Neuroscience") echo 'selected="selected"'; ?>>Neuroscience</option>
<option value="Nuclear Engineering" <?php if($pg_2_discipline=="Nuclear Engineering") echo 'selected="selected"'; ?>>Nuclear Engineering</option>
<option value="Nuclear Medicine Technology" <?php if($pg_2_discipline=="Nuclear Medicine Technology") echo 'selected="selected"'; ?>>Nuclear Medicine Technology</option>
<option value="Nuclear Physics" <?php if($pg_2_discipline=="Nuclear Physics") echo 'selected="selected"'; ?>>Nuclear Physics</option>
<option value="Nuclear" <?php if($pg_2_discipline=="Nuclear") echo 'selected="selected"'; ?>>Nuclear</option>
<option value="Nursing" <?php if($pg_2_discipline=="Nursing") echo 'selected="selected"'; ?>>Nursing</option>
<option value="Nutrition and Dietetics" <?php if($pg_2_discipline=="Nutrition and Dietetics") echo 'selected="selected"'; ?>>Nutrition and Dietetics</option>
<option value="Nutrition and Food Processing" <?php if($pg_2_discipline=="Nutrition and Food Processing") echo 'selected="selected"'; ?>>Nutrition and Food Processing</option>
<option value="Nutrition" <?php if($pg_2_discipline=="Nutrition") echo 'selected="selected"'; ?>>Nutrition</option>
<option value="Obstetrics and Gynecological Nursing" <?php if($pg_2_discipline=="Obstetrics and Gynecological Nursing") echo 'selected="selected"'; ?>>Obstetrics and Gynecological Nursing</option>
<option value="Occupational Therapy" <?php if($pg_2_discipline=="Occupational Therapy") echo 'selected="selected"'; ?>>Occupational Therapy</option>
<option value="Ocean and Marine Engineering" <?php if($pg_2_discipline=="Ocean and Marine Engineering") echo 'selected="selected"'; ?>>Ocean and Marine Engineering</option>
<option value="Oceanography" <?php if($pg_2_discipline=="Oceanography") echo 'selected="selected"'; ?>>Oceanography</option>
<option value="Olericulture" <?php if($pg_2_discipline=="Olericulture") echo 'selected="selected"'; ?>>Olericulture</option>
<option value="Operation Research and Computer Applications" <?php if($pg_2_discipline=="Operation Research and Computer Applications") echo 'selected="selected"'; ?>>Operation Research and Computer Applications</option>
<option value="Operation Theatre Technology" <?php if($pg_2_discipline=="Operation Theatre Technology") echo 'selected="selected"'; ?>>Operation Theatre Technology</option>
<option value="Operational Research" <?php if($pg_2_discipline=="Operational Research") echo 'selected="selected"'; ?>>Operational Research</option>
<option value="Optical" <?php if($pg_2_discipline=="Optical") echo 'selected="selected"'; ?>>Optical</option>
<option value="Optometry" <?php if($pg_2_discipline=="Optometry") echo 'selected="selected"'; ?>>Optometry</option>
<option value="Organic Chemistry" <?php if($pg_2_discipline=="Organic Chemistry") echo 'selected="selected"'; ?>>Organic Chemistry</option>
<option value="Orthopedics" <?php if($pg_2_discipline=="Orthopedics") echo 'selected="selected"'; ?>>Orthopedics</option>
<option value="Osteopathy" <?php if($pg_2_discipline=="Osteopathy") echo 'selected="selected"'; ?>>Osteopathy</option>
<option value="Paediatric Nursing" <?php if($pg_2_discipline=="Paediatric Nursing") echo 'selected="selected"'; ?>>Paediatric Nursing</option>
<option value="Paper Engineering" <?php if($pg_2_discipline=="Paper Engineering") echo 'selected="selected"'; ?>>Paper Engineering</option>
<option value="Paramedical" <?php if($pg_2_discipline=="Paramedical") echo 'selected="selected"'; ?>>Paramedical</option>
<option value="Pathology" <?php if($pg_2_discipline=="Pathology") echo 'selected="selected"'; ?>>Pathology</option>
<option value="Perfusion Technology" <?php if($pg_2_discipline=="Perfusion Technology") echo 'selected="selected"'; ?>>Perfusion Technology</option>
<option value="Petroleum Engineering" <?php if($pg_2_discipline=="Petroleum Engineering") echo 'selected="selected"'; ?>>Petroleum Engineering</option>
<option value="Petroleum Geology" <?php if($pg_2_discipline=="Petroleum Geology") echo 'selected="selected"'; ?>>Petroleum Geology</option>
<option value="Petroleum Technology" <?php if($pg_2_discipline=="Petroleum Technology") echo 'selected="selected"'; ?>>Petroleum Technology</option>
<option value="Petroleum" <?php if($pg_2_discipline=="Petroleum") echo 'selected="selected"'; ?>>Petroleum</option>
<option value="Pharmaceutical Chemistry" <?php if($pg_2_discipline=="Pharmaceutical Chemistry") echo 'selected="selected"'; ?>>Pharmaceutical Chemistry</option>
<option value="Pharmaceutical Technology" <?php if($pg_2_discipline=="Pharmaceutical Technology") echo 'selected="selected"'; ?>>Pharmaceutical Technology</option>
<option value="Pharmaceutical" <?php if($pg_2_discipline=="Pharmaceutical") echo 'selected="selected"'; ?>>Pharmaceutical</option>
<option value="Pharmacology" <?php if($pg_2_discipline=="Pharmacology") echo 'selected="selected"'; ?>>Pharmacology</option>
<option value="Pharmacy" <?php if($pg_2_discipline=="Pharmacy") echo 'selected="selected"'; ?>>Pharmacy</option>
<option value="Photography" <?php if($pg_2_discipline=="Photography") echo 'selected="selected"'; ?>>Photography</option>
<option value="Photonics" <?php if($pg_2_discipline=="Photonics") echo 'selected="selected"'; ?>>Photonics</option>
<option value="Physical Chemistry" <?php if($pg_2_discipline=="Physical Chemistry") echo 'selected="selected"'; ?>>Physical Chemistry</option>
<option value="Physical Education" <?php if($pg_2_discipline=="Physical Education") echo 'selected="selected"'; ?>>Physical Education</option>
<option value="Physical Oceanography" <?php if($pg_2_discipline=="Physical Oceanography") echo 'selected="selected"'; ?>>Physical Oceanography</option>
<option value="Physical Sciences" <?php if($pg_2_discipline=="Physical Sciences") echo 'selected="selected"'; ?>>Physical Sciences</option>
<option value="Physical Therapy" <?php if($pg_2_discipline=="Physical Therapy") echo 'selected="selected"'; ?>>Physical Therapy</option>
<option value="Physician Assistant" <?php if($pg_2_discipline=="Physician Assistant") echo 'selected="selected"'; ?>>Physician Assistant</option>
<option value="Physics" <?php if($pg_2_discipline=="Physics") echo 'selected="selected"'; ?>>Physics</option>
<option value="Physiology" <?php if($pg_2_discipline=="Physiology") echo 'selected="selected"'; ?>>Physiology</option>
<option value="Physiotherapy" <?php if($pg_2_discipline=="Physiotherapy") echo 'selected="selected"'; ?>>Physiotherapy</option>
<option value="Phytomedical Science and Technology" <?php if($pg_2_discipline=="Phytomedical Science and Technology") echo 'selected="selected"'; ?>>Phytomedical Science and Technology</option>
<option value="Pipeline" <?php if($pg_2_discipline=="Pipeline") echo 'selected="selected"'; ?>>Pipeline</option>
<option value="Planning" <?php if($pg_2_discipline=="Planning") echo 'selected="selected"'; ?>>Planning</option>
<option value="PlanningUrban and Regional Planning" <?php if($pg_2_discipline=="PlanningUrban and Regional Planning") echo 'selected="selected"'; ?>>PlanningUrban and Regional Planning</option>
<option value="Plant Biochemistry" <?php if($pg_2_discipline=="Plant Biochemistry") echo 'selected="selected"'; ?>>Plant Biochemistry</option>
<option value="Plant Biology and Plant Biotechnology" <?php if($pg_2_discipline=="Plant Biology and Plant Biotechnology") echo 'selected="selected"'; ?>>Plant Biology and Plant Biotechnology</option>
<option value="Plant Pathology" <?php if($pg_2_discipline=="Plant Pathology") echo 'selected="selected"'; ?>>Plant Pathology</option>
<option value="Plant Science" <?php if($pg_2_discipline=="Plant Science") echo 'selected="selected"'; ?>>Plant Science</option>
<option value="Podiatry" <?php if($pg_2_discipline=="Podiatry") echo 'selected="selected"'; ?>>Podiatry</option>
<option value="Political Science" <?php if($pg_2_discipline=="Political Science") echo 'selected="selected"'; ?>>Political Science</option>
<option value="Politics" <?php if($pg_2_discipline=="Politics") echo 'selected="selected"'; ?>>Politics</option>
<option value="Pollution Control" <?php if($pg_2_discipline=="Pollution Control") echo 'selected="selected"'; ?>>Pollution Control</option>
<option value="Polymer Science" <?php if($pg_2_discipline=="Polymer Science") echo 'selected="selected"'; ?>>Polymer Science</option>
<option value="Polymer Technology" <?php if($pg_2_discipline=="Polymer Technology") echo 'selected="selected"'; ?>>Polymer Technology</option>
<option value="Post-harvest Technology" <?php if($pg_2_discipline=="Post-harvest Technology") echo 'selected="selected"'; ?>>Post-harvest Technology</option>
<option value="Poultry Production" <?php if($pg_2_discipline=="Poultry Production") echo 'selected="selected"'; ?>>Poultry Production</option>
<option value="Power Electronics and Drives" <?php if($pg_2_discipline=="Power Electronics and Drives") echo 'selected="selected"'; ?>>Power Electronics and Drives</option>
<option value="Power Electronics and Systems" <?php if($pg_2_discipline=="Power Electronics and Systems") echo 'selected="selected"'; ?>>Power Electronics and Systems</option>
<option value="Power Electronics" <?php if($pg_2_discipline=="Power Electronics") echo 'selected="selected"'; ?>>Power Electronics</option>
<option value="Power Engineering" <?php if($pg_2_discipline=="Power Engineering") echo 'selected="selected"'; ?>>Power Engineering</option>
<option value="Power System" <?php if($pg_2_discipline=="Power System") echo 'selected="selected"'; ?>>Power System</option>
<option value="Power Systems and Power Electronics" <?php if($pg_2_discipline=="Power Systems and Power Electronics") echo 'selected="selected"'; ?>>Power Systems and Power Electronics</option>
<option value="Power Systems" <?php if($pg_2_discipline=="Power Systems") echo 'selected="selected"'; ?>>Power Systems</option>
<option value="Process Control and Instrumentation" <?php if($pg_2_discipline=="Process Control and Instrumentation") echo 'selected="selected"'; ?>>Process Control and Instrumentation</option>
<option value="Process Metallurgy" <?php if($pg_2_discipline=="Process Metallurgy") echo 'selected="selected"'; ?>>Process Metallurgy</option>
<option value="Process" <?php if($pg_2_discipline=="Process") echo 'selected="selected"'; ?>>Process</option>
<option value="Product Design and Manufacturing" <?php if($pg_2_discipline=="Product Design and Manufacturing") echo 'selected="selected"'; ?>>Product Design and Manufacturing</option>
<option value="Product Design" <?php if($pg_2_discipline=="Product Design") echo 'selected="selected"'; ?>>Product Design</option>
<option value="Production / Production Technology" <?php if($pg_2_discipline=="Production / Production Technology") echo 'selected="selected"'; ?>>Production / Production Technology</option>
<option value="Production Engineer" <?php if($pg_2_discipline=="Production Engineer") echo 'selected="selected"'; ?>>Production Engineer</option>
<option value="Production Engineering" <?php if($pg_2_discipline=="Production Engineering") echo 'selected="selected"'; ?>>Production Engineering</option>
<option value="Production Technology" <?php if($pg_2_discipline=="Production Technology") echo 'selected="selected"'; ?>>Production Technology</option>
<option value="Production and Industrial Engineering" <?php if($pg_2_discipline=="Production and Industrial Engineering") echo 'selected="selected"'; ?>>Production and Industrial Engineering</option>
<option value="Production and Industrial" <?php if($pg_2_discipline=="Production and Industrial") echo 'selected="selected"'; ?>>Production and Industrial</option>
<option value="Production" <?php if($pg_2_discipline=="Production") echo 'selected="selected"'; ?>>Production</option>
<option value="Prosthetic and Orthotics" <?php if($pg_2_discipline=="Prosthetic and Orthotics") echo 'selected="selected"'; ?>>Prosthetic and Orthotics</option>
<option value="Prosthodontics" <?php if($pg_2_discipline=="Prosthodontics") echo 'selected="selected"'; ?>>Prosthodontics</option>
<option value="Psychiatric Nursing" <?php if($pg_2_discipline=="Psychiatric Nursing") echo 'selected="selected"'; ?>>Psychiatric Nursing</option>
<option value="Psychological Counselling" <?php if($pg_2_discipline=="Psychological Counselling") echo 'selected="selected"'; ?>>Psychological Counselling</option>
<option value="Psychology" <?php if($pg_2_discipline=="Psychology") echo 'selected="selected"'; ?>>Psychology</option>
<option value="Public Health" <?php if($pg_2_discipline=="Public Health") echo 'selected="selected"'; ?>>Public Health</option>
<option value="Public Safety" <?php if($pg_2_discipline=="Public Safety") echo 'selected="selected"'; ?>>Public Safety</option>
<option value="Radiography" <?php if($pg_2_discipline=="Radiography") echo 'selected="selected"'; ?>>Radiography</option>
<option value="Radiologic Technology" <?php if($pg_2_discipline=="Radiologic Technology") echo 'selected="selected"'; ?>>Radiologic Technology</option>
<option value="Radiology" <?php if($pg_2_discipline=="Radiology") echo 'selected="selected"'; ?>>Radiology</option>
<option value="Real-Time Interactive Simulation" <?php if($pg_2_discipline=="Real-Time Interactive Simulation") echo 'selected="selected"'; ?>>Real-Time Interactive Simulation</option>
<option value="Regenerative Medicine" <?php if($pg_2_discipline=="Regenerative Medicine") echo 'selected="selected"'; ?>>Regenerative Medicine</option>
<option value="Reliability" <?php if($pg_2_discipline=="Reliability") echo 'selected="selected"'; ?>>Reliability</option>
<option value="Remote Sensing and GIS" <?php if($pg_2_discipline=="Remote Sensing and GIS") echo 'selected="selected"'; ?>>Remote Sensing and GIS</option>
<option value="Renewable Energy" <?php if($pg_2_discipline=="Renewable Energy") echo 'selected="selected"'; ?>>Renewable Energy</option>
<option value="Researcher" <?php if($pg_2_discipline=="Researcher") echo 'selected="selected"'; ?>>Researcher</option>
<option value="Resource Management" <?php if($pg_2_discipline=="Resource Management") echo 'selected="selected"'; ?>>Resource Management</option>
<option value="Respiratory Therapy" <?php if($pg_2_discipline=="Respiratory Therapy") echo 'selected="selected"'; ?>>Respiratory Therapy</option>
<option value="Robotics Engineering" <?php if($pg_2_discipline=="Robotics Engineering") echo 'selected="selected"'; ?>>Robotics Engineering</option>
<option value="Robotics" <?php if($pg_2_discipline=="Robotics") echo 'selected="selected"'; ?>>Robotics</option>
<option value="Rubber Technology" <?php if($pg_2_discipline=="Rubber Technology") echo 'selected="selected"'; ?>>Rubber Technology</option>
<option value="Rural Development" <?php if($pg_2_discipline=="Rural Development") echo 'selected="selected"'; ?>>Rural Development</option>
<option value="Rural Health" <?php if($pg_2_discipline=="Rural Health") echo 'selected="selected"'; ?>>Rural Health</option>
<option value="Science and Technology Communication" <?php if($pg_2_discipline=="Science and Technology Communication") echo 'selected="selected"'; ?>>Science and Technology Communication</option>
<option value="Seed Science and Technology" <?php if($pg_2_discipline=="Seed Science and Technology") echo 'selected="selected"'; ?>>Seed Science and Technology</option>
<option value="Sericulture" <?php if($pg_2_discipline=="Sericulture") echo 'selected="selected"'; ?>>Sericulture</option>
<option value="Service Industry Management" <?php if($pg_2_discipline=="Service Industry Management") echo 'selected="selected"'; ?>>Service Industry Management</option>
<option value="Signal Processing" <?php if($pg_2_discipline=="Signal Processing") echo 'selected="selected"'; ?>>Signal Processing</option>
<option value="Social Sciences" <?php if($pg_2_discipline=="Social Sciences") echo 'selected="selected"'; ?>>Social Sciences</option>
<option value="Software Developer" <?php if($pg_2_discipline=="Software Developer") echo 'selected="selected"'; ?>>Software Developer</option>
<option value="Software Engineer" <?php if($pg_2_discipline=="Software Engineer") echo 'selected="selected"'; ?>>Software Engineer</option>
<option value="Software Engineering" <?php if($pg_2_discipline=="Software Engineering") echo 'selected="selected"'; ?>>Software Engineering</option>
<option value="Software System" <?php if($pg_2_discipline=="Software System") echo 'selected="selected"'; ?>>Software System</option>
<option value="Software" <?php if($pg_2_discipline=="Software") echo 'selected="selected"'; ?>>Software</option>
<option value="Soil Science and Agricultural Chemistry" <?php if($pg_2_discipline=="Soil Science and Agricultural Chemistry") echo 'selected="selected"'; ?>>Soil Science and Agricultural Chemistry</option>
<option value="Soil Science" <?php if($pg_2_discipline=="Soil Science") echo 'selected="selected"'; ?>>Soil Science</option>
<option value="Soil Water Conservation" <?php if($pg_2_discipline=="Soil Water Conservation") echo 'selected="selected"'; ?>>Soil Water Conservation</option>
<option value="Soil and Water Conservation" <?php if($pg_2_discipline=="Soil and Water Conservation") echo 'selected="selected"'; ?>>Soil and Water Conservation</option>
<option value="Speech Therapy" <?php if($pg_2_discipline=="Speech Therapy") echo 'selected="selected"'; ?>>Speech Therapy</option>
<option value="Speech-Language Pathology" <?php if($pg_2_discipline=="Speech-Language Pathology") echo 'selected="selected"'; ?>>Speech-Language Pathology</option>
<option value="Sports Management" <?php if($pg_2_discipline=="Sports Management") echo 'selected="selected"'; ?>>Sports Management</option>
<option value="Sports Science" <?php if($pg_2_discipline=="Sports Science") echo 'selected="selected"'; ?>>Sports Science</option>
<option value="Statistics" <?php if($pg_2_discipline=="Statistics") echo 'selected="selected"'; ?>>Statistics</option>
<option value="Stem Cell and Tissue Engineering" <?php if($pg_2_discipline=="Stem Cell and Tissue Engineering") echo 'selected="selected"'; ?>>Stem Cell and Tissue Engineering</option>
<option value="Structural Engineering" <?php if($pg_2_discipline=="Structural Engineering") echo 'selected="selected"'; ?>>Structural Engineering</option>
<option value="Structural" <?php if($pg_2_discipline=="Structural") echo 'selected="selected"'; ?>>Structural</option>
<option value="Sugar Technology" <?php if($pg_2_discipline=="Sugar Technology") echo 'selected="selected"'; ?>>Sugar Technology</option>
<option value="Surgery" <?php if($pg_2_discipline=="Surgery") echo 'selected="selected"'; ?>>Surgery</option>
<option value="Sustainability and Design Engineering" <?php if($pg_2_discipline=="Sustainability and Design Engineering") echo 'selected="selected"'; ?>>Sustainability and Design Engineering</option>
<option value="Sustainable Development" <?php if($pg_2_discipline=="Sustainable Development") echo 'selected="selected"'; ?>>Sustainable Development</option>
<option value="System Administration and Networking" <?php if($pg_2_discipline=="System Administration and Networking") echo 'selected="selected"'; ?>>System Administration and Networking</option>
<option value="System and Network Administration" <?php if($pg_2_discipline=="System and Network Administration") echo 'selected="selected"'; ?>>System and Network Administration</option>
<option value="Systems Engineering" <?php if($pg_2_discipline=="Systems Engineering") echo 'selected="selected"'; ?>>Systems Engineering</option>
<option value="Technology Management" <?php if($pg_2_discipline=="Technology Management") echo 'selected="selected"'; ?>>Technology Management</option>
<option value="Telecommunication Engineering" <?php if($pg_2_discipline=="Telecommunication Engineering") echo 'selected="selected"'; ?>>Telecommunication Engineering</option>
<option value="Telecommunication" <?php if($pg_2_discipline=="Telecommunication") echo 'selected="selected"'; ?>>Telecommunication</option>
<option value="Textile Design" <?php if($pg_2_discipline=="Textile Design") echo 'selected="selected"'; ?>>Textile Design</option>
<option value="Textile Engineering" <?php if($pg_2_discipline=="Textile Engineering") echo 'selected="selected"'; ?>>Textile Engineering</option>
<option value="Textile Technology" <?php if($pg_2_discipline=="Textile Technology") echo 'selected="selected"'; ?>>Textile Technology</option>
<option value="Textile" <?php if($pg_2_discipline=="Textile") echo 'selected="selected"'; ?>>Textile</option>
<option value="Thermal / Thermal Power" <?php if($pg_2_discipline=="Thermal / Thermal Power") echo 'selected="selected"'; ?>>Thermal / Thermal Power</option>
<option value="Thermal Power" <?php if($pg_2_discipline=="Thermal Power") echo 'selected="selected"'; ?>>Thermal Power</option>
<option value="Thermal" <?php if($pg_2_discipline=="Thermal") echo 'selected="selected"'; ?>>Thermal</option>
<option value="Tool Engineering" <?php if($pg_2_discipline=="Tool Engineering") echo 'selected="selected"'; ?>>Tool Engineering</option>
<option value="Tool" <?php if($pg_2_discipline=="Tool") echo 'selected="selected"'; ?>>Tool</option>
<option value="Tourism and Hospitality Management" <?php if($pg_2_discipline=="Tourism and Hospitality Management") echo 'selected="selected"'; ?>>Tourism and Hospitality Management</option>
<option value="Tourism and Hotel Management" <?php if($pg_2_discipline=="Tourism and Hotel Management") echo 'selected="selected"'; ?>>Tourism and Hotel Management</option>
<option value="Tourism" <?php if($pg_2_discipline=="Tourism") echo 'selected="selected"'; ?>>Tourism</option>
<option value="Toxicology" <?php if($pg_2_discipline=="Toxicology") echo 'selected="selected"'; ?>>Toxicology</option>
<option value="Transportation Engineering" <?php if($pg_2_discipline=="Transportation Engineering") echo 'selected="selected"'; ?>>Transportation Engineering</option>
<option value="Transportation" <?php if($pg_2_discipline=="Transportation") echo 'selected="selected"'; ?>>Transportation</option>
<option value="VFX" <?php if($pg_2_discipline=="VFX") echo 'selected="selected"'; ?>>VFX</option>
<option value="VLSI Design / VLSI Technology" <?php if($pg_2_discipline=="VLSI Design / VLSI Technology") echo 'selected="selected"'; ?>>VLSI Design / VLSI Technology</option>
<option value="VLSI Design and Embedded System" <?php if($pg_2_discipline=="VLSI Design and Embedded System") echo 'selected="selected"'; ?>>VLSI Design and Embedded System</option>
<option value="VLSI Design" <?php if($pg_2_discipline=="VLSI Design") echo 'selected="selected"'; ?>>VLSI Design</option>
<option value="VLSI System Design" <?php if($pg_2_discipline=="VLSI System Design") echo 'selected="selected"'; ?>>VLSI System Design</option>
<option value="VLSI Technology" <?php if($pg_2_discipline=="VLSI Technology") echo 'selected="selected"'; ?>>VLSI Technology</option>
<option value="Veterinary Medicine" <?php if($pg_2_discipline=="Veterinary Medicine") echo 'selected="selected"'; ?>>Veterinary Medicine</option>
<option value="Veterinary Microbiology" <?php if($pg_2_discipline=="Veterinary Microbiology") echo 'selected="selected"'; ?>>Veterinary Microbiology</option>
<option value="Veterinary Parasitology" <?php if($pg_2_discipline=="Veterinary Parasitology") echo 'selected="selected"'; ?>>Veterinary Parasitology</option>
<option value="Veterinary Pharmacology and Toxicology" <?php if($pg_2_discipline=="Veterinary Pharmacology and Toxicology") echo 'selected="selected"'; ?>>Veterinary Pharmacology and Toxicology</option>
<option value="Veterinary Physiology" <?php if($pg_2_discipline=="Veterinary Physiology") echo 'selected="selected"'; ?>>Veterinary Physiology</option>
<option value="Veterinary Public Health" <?php if($pg_2_discipline=="Veterinary Public Health") echo 'selected="selected"'; ?>>Veterinary Public Health</option>
<option value="Veterinary Science" <?php if($pg_2_discipline=="Veterinary Science") echo 'selected="selected"'; ?>>Veterinary Science</option>
<option value="Veterinary Sciences" <?php if($pg_2_discipline=="Veterinary Sciences") echo 'selected="selected"'; ?>>Veterinary Sciences</option>
<option value="Virology" <?php if($pg_2_discipline=="Virology") echo 'selected="selected"'; ?>>Virology</option>
<option value="Visual Communication" <?php if($pg_2_discipline=="Visual Communication") echo 'selected="selected"'; ?>>Visual Communication</option>
<option value="Visual Effects Filmmaking" <?php if($pg_2_discipline=="Visual Effects Filmmaking") echo 'selected="selected"'; ?>>Visual Effects Filmmaking</option>
<option value="Visual Media" <?php if($pg_2_discipline=="Visual Media") echo 'selected="selected"'; ?>>Visual Media</option>
<option value="Water Management" <?php if($pg_2_discipline=="Water Management") echo 'selected="selected"'; ?>>Water Management</option>
<option value="Water Resources" <?php if($pg_2_discipline=="Water Resources") echo 'selected="selected"'; ?>>Water Resources</option>
<option value="Welding Technology" <?php if($pg_2_discipline=="Welding Technology") echo 'selected="selected"'; ?>>Welding Technology</option>
<option value="Wildlife Sciences" <?php if($pg_2_discipline=="Wildlife Sciences") echo 'selected="selected"'; ?>>Wildlife Sciences</option>
<option value="Wireless Communication Technology" <?php if($pg_2_discipline=="Wireless Communication Technology") echo 'selected="selected"'; ?>>Wireless Communication Technology</option>
<option value="Wood Science and Technology" <?php if($pg_2_discipline=="Wood Science and Technology") echo 'selected="selected"'; ?>>Wood Science and Technology</option>
<option value="Yoga and Management" <?php if($pg_2_discipline=="Yoga and Management") echo 'selected="selected"'; ?>>Yoga and Management</option>
<option value="Yoga" <?php if($pg_2_discipline=="Yoga") echo 'selected="selected"'; ?>>Yoga</option>
<option value="Zoology" <?php if($pg_2_discipline=="Zoology") echo 'selected="selected"'; ?>>Zoology</option>

<option value="OTHER" <?php if($pg_2_discipline=="OTHER") echo 'selected="selected"'; ?>>OTHER</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>College Name</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="pg_2_college_name" value="<?php echo $pg_2_college_name; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>University Name</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="pg_2_univeristy_name" value="<?php echo $pg_2_univeristy_name; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Passing Year</b></label>
                            <select class="form-control" name="pg_2_passing_year" disabled>
                                <option value="">Select</option>
                                <?php
                                $y = date("Y", strtotime("+8 HOURS"));
                                for ($year = 1950; $y >= $year; $y--) {
                                     if($pg_2_passing_year==$y)
				echo "<option value = '".$y."' selected='selected'>".$y."</option>";
			else
			echo "<option value = '".$y."'>".$y."</option>";
                                }
                                ?>
                            </select>
                        </div>


                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Percentage/CGPA</b></label>
                            <input type="number" class="form-control" id="exampleAccount" name="pg_2_percentage" value="<?php echo $pg_2_percentage; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Out of</b></label>
                            <select class="form-control" name="pg_2_out_of" disabled>
                                <option value=''>Select</option>
                                <option value="100" <?php if($pg_2_out_of=="100") echo 'selected="selected"'; ?>>100</option>
<option value="10" <?php if($pg_2_out_of=="10") echo 'selected="selected"'; ?>>10</option>
<option value="4" <?php if($pg_2_out_of=="4") echo 'selected="selected"'; ?>>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Complete Status</b></label>
                            <select class="form-control" name="pg_2_complete_status" disabled>
                                <option value=''>Select</option>
                                <option value="Completed" <?php if($pg_2_complete_status=="Completed") echo 'selected="selected"'; ?>>Completed</option>
<option value="Ongoing" <?php if($pg_2_complete_status=="Ongoing") echo 'selected="selected"'; ?>>Ongoing</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Notes If Any</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="pg_2_notes_if_any" value="<?php echo $pg_2_notes_if_any; ?>" disabled>
                        </div>

                    </div>

                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>





                    <h4 style="color:#A31260 ;">Any Other Degree (if any, leave blank if not applicable)</h4>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Exam Passed</b></label>
                            <input type="text" class="form-control" id="exampleAccount" name="other_exam_passed" placeholder="Postgraduate" disabled="disabled">
                        </div>


                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>PG Degree Name</b></label>
                            <select class="form-control" name="other_pg_degree_name" disabled>
                                <option value="">Select </option>
                                <option value="5 year BS-MS Dual Degree Programme" <?php if($other_pg_degree_name=="5 year BS-MS Dual Degree Programme") echo 'selected="selected"'; ?>>5 year BS-MS Dual Degree Programme</option>
<option value="5 year Integrated M.Sc" <?php if($other_pg_degree_name=="5 year Integrated M.Sc") echo 'selected="selected"'; ?>>5 year Integrated M.Sc</option>
<option value="5 year dual degree B.E. and M.E." <?php if($other_pg_degree_name=="5 year dual degree B.E. and M.E.") echo 'selected="selected"'; ?>>5 year dual degree B.E. and M.E.</option>
<option value="5 year dual degree B.Tech and M.Tech" <?php if($other_pg_degree_name=="5 year dual degree B.Tech and M.Tech") echo 'selected="selected"'; ?>>5 year dual degree B.Tech and M.Tech</option>
<option value="A level" <?php if($other_pg_degree_name=="A level") echo 'selected="selected"'; ?>>A level</option>
<option value="A.I.S." <?php if($other_pg_degree_name=="A.I.S.") echo 'selected="selected"'; ?>>A.I.S.</option>
<option value="ALCCS" <?php if($other_pg_degree_name=="ALCCS") echo 'selected="selected"'; ?>>ALCCS</option>
<option value="AMIE" <?php if($other_pg_degree_name=="AMIE") echo 'selected="selected"'; ?>>AMIE</option>
<option value="AMIETE" <?php if($other_pg_degree_name=="AMIETE") echo 'selected="selected"'; ?>>AMIETE</option>
<option value="B-Pharma" <?php if($other_pg_degree_name=="B-Pharma") echo 'selected="selected"'; ?>>B-Pharma</option>
<option value="B.A.M.S" <?php if($other_pg_degree_name=="B.A.M.S") echo 'selected="selected"'; ?>>B.A.M.S</option>
<option value="B.ARCH" <?php if($other_pg_degree_name=="B.ARCH") echo 'selected="selected"'; ?>>B.ARCH</option>
<option value="B.Com" <?php if($other_pg_degree_name=="B.Com") echo 'selected="selected"'; ?>>B.Com</option>
<option value="B.D.S." <?php if($other_pg_degree_name=="B.D.S.") echo 'selected="selected"'; ?>>B.D.S.</option>
<option value="B.E." <?php if($other_pg_degree_name=="B.E.") echo 'selected="selected"'; ?>>B.E.</option>
<option value="B.EL.ED" <?php if($other_pg_degree_name=="B.EL.ED") echo 'selected="selected"'; ?>>B.EL.ED</option>
<option value="B.Ed" <?php if($other_pg_degree_name=="B.Ed") echo 'selected="selected"'; ?>>B.Ed</option>
<option value="B.Sc" <?php if($other_pg_degree_name=="B.Sc") echo 'selected="selected"'; ?>>B.Sc</option>
<option value="B.Tech" <?php if($other_pg_degree_name=="B.Tech") echo 'selected="selected"'; ?>>B.Tech</option>
<option value="BA" <?php if($other_pg_degree_name=="BA") echo 'selected="selected"'; ?>>BA</option>
<option value="BCA" <?php if($other_pg_degree_name=="BCA") echo 'selected="selected"'; ?>>BCA</option>
<option value="CA" <?php if($other_pg_degree_name=="CA") echo 'selected="selected"'; ?>>CA</option>
<option value="IETE" <?php if($other_pg_degree_name=="IETE") echo 'selected="selected"'; ?>>IETE</option>
<option value="Integrated M.Sc-Ph.D" <?php if($other_pg_degree_name=="Integrated M.Sc-Ph.D") echo 'selected="selected"'; ?>>Integrated M.Sc-Ph.D</option>
<option value="Integrated MA" <?php if($other_pg_degree_name=="Integrated MA") echo 'selected="selected"'; ?>>Integrated MA</option>
<option value="Integrated MBA" <?php if($other_pg_degree_name=="Integrated MBA") echo 'selected="selected"'; ?>>Integrated MBA</option>
<option value="Integrated MCA with BCA" <?php if($other_pg_degree_name=="Integrated MCA with BCA") echo 'selected="selected"'; ?>>Integrated MCA with BCA</option>
<option value="LLB" <?php if($other_pg_degree_name=="LLB") echo 'selected="selected"'; ?>>LLB</option>
<option value="LLM" <?php if($other_pg_degree_name=="LLM") echo 'selected="selected"'; ?>>LLM</option>
<option value="M-Pharma" <?php if($other_pg_degree_name=="M-Pharma") echo 'selected="selected"'; ?>>M-Pharma</option>
<option value="M.Com" <?php if($other_pg_degree_name=="M.Com") echo 'selected="selected"'; ?>>M.Com</option>
<option value="M.D.S." <?php if($other_pg_degree_name=="M.D.S.") echo 'selected="selected"'; ?>>M.D.S.</option>
<option value="M.DES" <?php if($other_pg_degree_name=="M.DES") echo 'selected="selected"'; ?>>M.DES</option>
<option value="M.Ed." <?php if($other_pg_degree_name=="M.Ed.") echo 'selected="selected"'; ?>>M.Ed.</option>
<option value="M.E." <?php if($other_pg_degree_name=="M.E.") echo 'selected="selected"'; ?>>M.E.</option>
<option value="M.Phil." <?php if($other_pg_degree_name=="M.Phil.") echo 'selected="selected"'; ?>>M.Phil.</option>
<option value="M.Sc" <?php if($other_pg_degree_name=="M.Sc") echo 'selected="selected"'; ?>>M.Sc</option>
<option value="M.Tech" <?php if($other_pg_degree_name=="M.Tech") echo 'selected="selected"'; ?>>M.Tech</option>
<option value="MA" <?php if($other_pg_degree_name=="MA") echo 'selected="selected"'; ?>>MA</option>
<option value="MBA" <?php if($other_pg_degree_name=="MBA") echo 'selected="selected"'; ?>>MBA</option>
<option value="MBBS" <?php if($other_pg_degree_name=="MBBS") echo 'selected="selected"'; ?>>MBBS</option>
<option value="MBEM" <?php if($other_pg_degree_name=="MBEM") echo 'selected="selected"'; ?>>MBEM</option>
<option value="MBS" <?php if($other_pg_degree_name=="MBS") echo 'selected="selected"'; ?>>MBS</option>
<option value="MCA" <?php if($other_pg_degree_name=="MCA") echo 'selected="selected"'; ?>>MCA</option>
<option value="MPMIR" <?php if($other_pg_degree_name=="MPMIR") echo 'selected="selected"'; ?>>MPMIR</option>
<option value="MPS" <?php if($other_pg_degree_name=="MPS") echo 'selected="selected"'; ?>>MPS</option>
<option value="MS" <?php if($other_pg_degree_name=="MS") echo 'selected="selected"'; ?>>MS</option>
<option value="MSW" <?php if($other_pg_degree_name=="MSW") echo 'selected="selected"'; ?>>MSW</option>
<option value="PGDABM" <?php if($other_pg_degree_name=="PGDABM") echo 'selected="selected"'; ?>>PGDABM</option>
<option value="PGDHHM" <?php if($other_pg_degree_name=="PGDHHM") echo 'selected="selected"'; ?>>PGDHHM</option>
<option value="PGDM" <?php if($other_pg_degree_name=="PGDM") echo 'selected="selected"'; ?>>PGDM</option>
<option value="PGDRD" <?php if($other_pg_degree_name=="PGDRD") echo 'selected="selected"'; ?>>PGDRD</option>
<option value="PGDT" <?php if($other_pg_degree_name=="PGDT") echo 'selected="selected"'; ?>>PGDT</option>
<option value="OTHER" <?php if($other_pg_degree_name=="OTHER") echo 'selected="selected"'; ?>>OTHER</option>
                            </select>
                        </div>

                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Discipline</b></label>
                            <select class="form-control" name="other_discipline" disabled>
                                <option value="">Select </option>
                                <option value="Account and finance" <?php if($other_discipline=="Account and finance") echo 'selected="selected"'; ?>>Account and finance</option>
<option value="Accountancy" <?php if($other_discipline=="Accountancy") echo 'selected="selected"'; ?>>Accountancy</option>
<option value="Actuarial Science" <?php if($other_discipline=="Actuarial Science") echo 'selected="selected"'; ?>>Actuarial Science</option>
<option value="Advanced Biochemistry" <?php if($other_discipline=="Advanced Biochemistry") echo 'selected="selected"'; ?>>Advanced Biochemistry</option>
<option value="Advanced Manufacturing" <?php if($other_discipline=="Advanced Manufacturing") echo 'selected="selected"'; ?>>Advanced Manufacturing</option>
<option value="Advanced Zoology and Biotechnology" <?php if($other_discipline=="Advanced Zoology and Biotechnology") echo 'selected="selected"'; ?>>Advanced Zoology and Biotechnology</option>
<option value="Advertising Management and Public Relations" <?php if($other_discipline=="Advertising Management and Public Relations") echo 'selected="selected"'; ?>>Advertising Management and Public Relations</option>
<option value="Aerodynamics" <?php if($other_discipline=="Aerodynamics") echo 'selected="selected"'; ?>>Aerodynamics</option>
<option value="Aeronautical Engineering" <?php if($other_discipline=="Aeronautical Engineering") echo 'selected="selected"'; ?>>Aeronautical Engineering</option>
<option value="Aeronautical Science" <?php if($other_discipline=="Aeronautical Science") echo 'selected="selected"'; ?>>Aeronautical Science</option>
<option value="Aeronautical" <?php if($other_discipline=="Aeronautical") echo 'selected="selected"'; ?>>Aeronautical</option>
<option value="Aerospace Engineering" <?php if($other_discipline=="Aerospace Engineering") echo 'selected="selected"'; ?>>Aerospace Engineering</option>
<option value="Aerospace Propulsion" <?php if($other_discipline=="Aerospace Propulsion") echo 'selected="selected"'; ?>>Aerospace Propulsion</option>
<option value="Aerospace" <?php if($other_discipline=="Aerospace") echo 'selected="selected"'; ?>>Aerospace</option>
<option value="Agricultural Biotechnology" <?php if($other_discipline=="Agricultural Biotechnology") echo 'selected="selected"'; ?>>Agricultural Biotechnology</option>
<option value="Agricultural Botany" <?php if($other_discipline=="Agricultural Botany") echo 'selected="selected"'; ?>>Agricultural Botany</option>
<option value="Agricultural Economics and Business Management" <?php if($other_discipline=="Agricultural Economics and Business Management") echo 'selected="selected"'; ?>>Agricultural Economics and Business Management</option>
<option value="Agricultural Economics" <?php if($other_discipline=="Agricultural Economics") echo 'selected="selected"'; ?>>Agricultural Economics</option>
<option value="Agricultural Engineering" <?php if($other_discipline=="Agricultural Engineering") echo 'selected="selected"'; ?>>Agricultural Engineering</option>
<option value="Agricultural Extension Education" <?php if($other_discipline=="Agricultural Extension Education") echo 'selected="selected"'; ?>>Agricultural Extension Education</option>
<option value="Agricultural Microbiology" <?php if($other_discipline=="Agricultural Microbiology") echo 'selected="selected"'; ?>>Agricultural Microbiology</option>
<option value="Agricultural Physics" <?php if($other_discipline=="Agricultural Physics") echo 'selected="selected"'; ?>>Agricultural Physics</option>
<option value="Agricultural Statistics" <?php if($other_discipline=="Agricultural Statistics") echo 'selected="selected"'; ?>>Agricultural Statistics</option>
<option value="Agricultural" <?php if($other_discipline=="Agricultural") echo 'selected="selected"'; ?>>Agricultural</option>
<option value="Agriculture Chemistry and Soil Science" <?php if($other_discipline=="Agriculture Chemistry and Soil Science") echo 'selected="selected"'; ?>>Agriculture Chemistry and Soil Science</option>
<option value="Agriculture and Food Engineering" <?php if($other_discipline=="Agriculture and Food Engineering") echo 'selected="selected"'; ?>>Agriculture and Food Engineering</option>
<option value="Agriculture" <?php if($other_discipline=="Agriculture") echo 'selected="selected"'; ?>>Agriculture</option>
<option value="Agro-meteorology" <?php if($other_discipline=="Agro-meteorology") echo 'selected="selected"'; ?>>Agro-meteorology</option>
<option value="Agroforestry" <?php if($other_discipline=="Agroforestry") echo 'selected="selected"'; ?>>Agroforestry</option>
<option value="Agronomy" <?php if($other_discipline=="Agronomy") echo 'selected="selected"'; ?>>Agronomy</option>
<option value="Air Armament" <?php if($other_discipline=="Air Armament") echo 'selected="selected"'; ?>>Air Armament</option>
<option value="Airlines Tourism and Hospitality Management" <?php if($other_discipline=="Airlines Tourism and Hospitality Management") echo 'selected="selected"'; ?>>Airlines Tourism and Hospitality Management</option>
<option value="Alloy Technology" <?php if($other_discipline=="Alloy Technology") echo 'selected="selected"'; ?>>Alloy Technology</option>
<option value="Anaesthesia Technology" <?php if($other_discipline=="Anaesthesia Technology") echo 'selected="selected"'; ?>>Anaesthesia Technology</option>
<option value="Analytical Chemistry" <?php if($other_discipline=="Analytical Chemistry") echo 'selected="selected"'; ?>>Analytical Chemistry</option>
<option value="Anatomy" <?php if($other_discipline=="Anatomy") echo 'selected="selected"'; ?>>Anatomy</option>
<option value="Animal Biotechnology" <?php if($other_discipline=="Animal Biotechnology") echo 'selected="selected"'; ?>>Animal Biotechnology</option>
<option value="Animal Nutrition" <?php if($other_discipline=="Animal Nutrition") echo 'selected="selected"'; ?>>Animal Nutrition</option>
<option value="Animal Science" <?php if($other_discipline=="Animal Science") echo 'selected="selected"'; ?>>Animal Science</option>
<option value="Animation Filmmaking" <?php if($other_discipline=="Animation Filmmaking") echo 'selected="selected"'; ?>>Animation Filmmaking</option>
<option value="Animation and Visual Effects" <?php if($other_discipline=="Animation and Visual Effects") echo 'selected="selected"'; ?>>Animation and Visual Effects</option>
<option value="Animation" <?php if($other_discipline=="Animation") echo 'selected="selected"'; ?>>Animation</option>
<option value="Anthropology" <?php if($other_discipline=="Anthropology") echo 'selected="selected"'; ?>>Anthropology</option>
<option value="Apparel Technology and Management" <?php if($other_discipline=="Apparel Technology and Management") echo 'selected="selected"'; ?>>Apparel Technology and Management</option>
<option value="Apparel and Textiles" <?php if($other_discipline=="Apparel and Textiles") echo 'selected="selected"'; ?>>Apparel and Textiles</option>
<option value="Applications of Mathematics" <?php if($other_discipline=="Applications of Mathematics") echo 'selected="selected"'; ?>>Applications of Mathematics</option>
<option value="Applied Biology" <?php if($other_discipline=="Applied Biology") echo 'selected="selected"'; ?>>Applied Biology</option>
<option value="Applied Biotechnology" <?php if($other_discipline=="Applied Biotechnology") echo 'selected="selected"'; ?>>Applied Biotechnology</option>
<option value="Applied Chemistry" <?php if($other_discipline=="Applied Chemistry") echo 'selected="selected"'; ?>>Applied Chemistry</option>
<option value="Applied Econometrics and Business Forecasting" <?php if($other_discipline=="Applied Econometrics and Business Forecasting") echo 'selected="selected"'; ?>>Applied Econometrics and Business Forecasting</option>
<option value="Applied Economics" <?php if($other_discipline=="Applied Economics") echo 'selected="selected"'; ?>>Applied Economics</option>
<option value="Applied Electronics and Instrumentation" <?php if($other_discipline=="Applied Electronics and Instrumentation") echo 'selected="selected"'; ?>>Applied Electronics and Instrumentation</option>
<option value="Applied Electronics" <?php if($other_discipline=="Applied Electronics") echo 'selected="selected"'; ?>>Applied Electronics</option>
<option value="Applied Fisheries and Aquaculture" <?php if($other_discipline=="Applied Fisheries and Aquaculture") echo 'selected="selected"'; ?>>Applied Fisheries and Aquaculture</option>
<option value="Applied Genetics" <?php if($other_discipline=="Applied Genetics") echo 'selected="selected"'; ?>>Applied Genetics</option>
<option value="Applied Geography" <?php if($other_discipline=="Applied Geography") echo 'selected="selected"'; ?>>Applied Geography</option>
<option value="Applied Geology" <?php if($other_discipline=="Applied Geology") echo 'selected="selected"'; ?>>Applied Geology</option>
<option value="Applied Geophysics" <?php if($other_discipline=="Applied Geophysics") echo 'selected="selected"'; ?>>Applied Geophysics</option>
<option value="Applied Mathematics and Computing" <?php if($other_discipline=="Applied Mathematics and Computing") echo 'selected="selected"'; ?>>Applied Mathematics and Computing</option>
<option value="Applied Mathematics" <?php if($other_discipline=="Applied Mathematics") echo 'selected="selected"'; ?>>Applied Mathematics</option>
<option value="Applied Mechanics" <?php if($other_discipline=="Applied Mechanics") echo 'selected="selected"'; ?>>Applied Mechanics</option>
<option value="Applied Microbiology" <?php if($other_discipline=="Applied Microbiology") echo 'selected="selected"'; ?>>Applied Microbiology</option>
<option value="Applied Nutrition" <?php if($other_discipline=="Applied Nutrition") echo 'selected="selected"'; ?>>Applied Nutrition</option>
<option value="Applied Optics" <?php if($other_discipline=="Applied Optics") echo 'selected="selected"'; ?>>Applied Optics</option>
<option value="Applied Physics" <?php if($other_discipline=="Applied Physics") echo 'selected="selected"'; ?>>Applied Physics</option>
<option value="Applied Plant Science" <?php if($other_discipline=="Applied Plant Science") echo 'selected="selected"'; ?>>Applied Plant Science</option>
<option value="Applied Psychology" <?php if($other_discipline=="Applied Psychology") echo 'selected="selected"'; ?>>Applied Psychology</option>
<option value="Applied Science" <?php if($other_discipline=="Applied Science") echo 'selected="selected"'; ?>>Applied Science</option>
<option value="Applied Statistics and Informatics" <?php if($other_discipline=="Applied Statistics and Informatics") echo 'selected="selected"'; ?>>Applied Statistics and Informatics</option>
<option value="Applied Zoology" <?php if($other_discipline=="Applied Zoology") echo 'selected="selected"'; ?>>Applied Zoology</option>
<option value="Aqua Cultural" <?php if($other_discipline=="Aqua Cultural") echo 'selected="selected"'; ?>>Aqua Cultural</option>
<option value="Aquaculture" <?php if($other_discipline=="Aquaculture") echo 'selected="selected"'; ?>>Aquaculture</option>
<option value="Aqualogy" <?php if($other_discipline=="Aqualogy") echo 'selected="selected"'; ?>>Aqualogy</option>
<option value="Aquatic Biology and Fisheries" <?php if($other_discipline=="Aquatic Biology and Fisheries") echo 'selected="selected"'; ?>>Aquatic Biology and Fisheries</option>
<option value="Architectural Engineering" <?php if($other_discipline=="Architectural Engineering") echo 'selected="selected"'; ?>>Architectural Engineering</option>
<option value="Architecture Urban Design" <?php if($other_discipline=="Architecture Urban Design") echo 'selected="selected"'; ?>>Architecture Urban Design</option>
<option value="Architecture" <?php if($other_discipline=="Architecture") echo 'selected="selected"'; ?>>Architecture</option>
<option value="Artificial Intelligence and Machine Learning" <?php if($other_discipline=="Artificial Intelligence and Machine Learning") echo 'selected="selected"'; ?>>Artificial Intelligence and Machine Learning</option>
<option value="Artificial Intelligence" <?php if($other_discipline=="Artificial Intelligence") echo 'selected="selected"'; ?>>Artificial Intelligence</option>
<option value="Assistant Engineer" <?php if($other_discipline=="Assistant Engineer") echo 'selected="selected"'; ?>>Assistant Engineer</option>
<option value="Astronomy and Space Physics" <?php if($other_discipline=="Astronomy and Space Physics") echo 'selected="selected"'; ?>>Astronomy and Space Physics</option>
<option value="Astronomy" <?php if($other_discipline=="Astronomy") echo 'selected="selected"'; ?>>Astronomy</option>
<option value="Astrophysics" <?php if($other_discipline=="Astrophysics") echo 'selected="selected"'; ?>>Astrophysics</option>
<option value="Athletic Training" <?php if($other_discipline=="Athletic Training") echo 'selected="selected"'; ?>>Athletic Training</option>
<option value="Audio Speech Therapy" <?php if($other_discipline=="Audio Speech Therapy") echo 'selected="selected"'; ?>>Audio Speech Therapy</option>
<option value="Audiology and Speech Language Pathology" <?php if($other_discipline=="Audiology and Speech Language Pathology") echo 'selected="selected"'; ?>>Audiology and Speech Language Pathology</option>
<option value="Audiology and Speech Rehabilitation" <?php if($other_discipline=="Audiology and Speech Rehabilitation") echo 'selected="selected"'; ?>>Audiology and Speech Rehabilitation</option>
<option value="Audiology" <?php if($other_discipline=="Audiology") echo 'selected="selected"'; ?>>Audiology</option>
<option value="Automobile Engineer" <?php if($other_discipline=="Automobile Engineer") echo 'selected="selected"'; ?>>Automobile Engineer</option>
<option value="Automobile Engineering" <?php if($other_discipline=="Automobile Engineering") echo 'selected="selected"'; ?>>Automobile Engineering</option>
<option value="Automobile" <?php if($other_discipline=="Automobile") echo 'selected="selected"'; ?>>Automobile</option>
<option value="Automobile/Automotive" <?php if($other_discipline=="Automobile/Automotive") echo 'selected="selected"'; ?>>Automobile/Automotive</option>
<option value="Automotive Engineering" <?php if($other_discipline=="Automotive Engineering") echo 'selected="selected"'; ?>>Automotive Engineering</option>
<option value="Automotive" <?php if($other_discipline=="Automotive") echo 'selected="selected"'; ?>>Automotive</option>
<option value="Aviation" <?php if($other_discipline=="Aviation") echo 'selected="selected"'; ?>>Aviation</option>
<option value="Avionics" <?php if($other_discipline=="Avionics") echo 'selected="selected"'; ?>>Avionics</option>
<option value="Bacteriology" <?php if($other_discipline=="Bacteriology") echo 'selected="selected"'; ?>>Bacteriology</option>
<option value="Banking and Finance" <?php if($other_discipline=="Banking and Finance") echo 'selected="selected"'; ?>>Banking and Finance</option>
<option value="Beauty Cosmetology" <?php if($other_discipline=="Beauty Cosmetology") echo 'selected="selected"'; ?>>Beauty Cosmetology</option>
<option value="Big Data Analytics" <?php if($other_discipline=="Big Data Analytics") echo 'selected="selected"'; ?>>Big Data Analytics</option>
<option value="Bio Mineral Processing" <?php if($other_discipline=="Bio Mineral Processing") echo 'selected="selected"'; ?>>Bio Mineral Processing</option>
<option value="Bio Mineral" <?php if($other_discipline=="Bio Mineral") echo 'selected="selected"'; ?>>Bio Mineral</option>
<option value="Bio Pharmaceutical Technology" <?php if($other_discipline=="Bio Pharmaceutical Technology") echo 'selected="selected"'; ?>>Bio Pharmaceutical Technology</option>
<option value="Bio-informatics" <?php if($other_discipline=="Bio-informatics") echo 'selected="selected"'; ?>>Bio-informatics</option>
<option value="Bio-textiles" <?php if($other_discipline=="Bio-textiles") echo 'selected="selected"'; ?>>Bio-textiles</option>
<option value="BioInformatics" <?php if($other_discipline=="BioInformatics") echo 'selected="selected"'; ?>>BioInformatics</option>
<option value="Biochemical" <?php if($other_discipline=="Biochemical") echo 'selected="selected"'; ?>>Biochemical</option>
<option value="Biochemistry" <?php if($other_discipline=="Biochemistry") echo 'selected="selected"'; ?>>Biochemistry</option>
<option value="Biodiversity and Conservation" <?php if($other_discipline=="Biodiversity and Conservation") echo 'selected="selected"'; ?>>Biodiversity and Conservation</option>
<option value="Bioinformatics" <?php if($other_discipline=="Bioinformatics") echo 'selected="selected"'; ?>>Bioinformatics</option>
<option value="Biological Science" <?php if($other_discipline=="Biological Science") echo 'selected="selected"'; ?>>Biological Science</option>
<option value="Biological Sciences" <?php if($other_discipline=="Biological Sciences") echo 'selected="selected"'; ?>>Biological Sciences</option>
<option value="Biology" <?php if($other_discipline=="Biology") echo 'selected="selected"'; ?>>Biology</option>
<option value="Biomaterials and Tissue Engineering" <?php if($other_discipline=="Biomaterials and Tissue Engineering") echo 'selected="selected"'; ?>>Biomaterials and Tissue Engineering</option>
<option value="Biomedical Engineering" <?php if($other_discipline=="Biomedical Engineering") echo 'selected="selected"'; ?>>Biomedical Engineering</option>
<option value="Biomedical Genetics" <?php if($other_discipline=="Biomedical Genetics") echo 'selected="selected"'; ?>>Biomedical Genetics</option>
<option value="Biomedical Science" <?php if($other_discipline=="Biomedical Science") echo 'selected="selected"'; ?>>Biomedical Science</option>
<option value="Biomedical Sciences" <?php if($other_discipline=="Biomedical Sciences") echo 'selected="selected"'; ?>>Biomedical Sciences</option>
<option value="Biomedical" <?php if($other_discipline=="Biomedical") echo 'selected="selected"'; ?>>Biomedical</option>
<option value="Biophysics" <?php if($other_discipline=="Biophysics") echo 'selected="selected"'; ?>>Biophysics</option>
<option value="Bioprocess Technology" <?php if($other_discipline=="Bioprocess Technology") echo 'selected="selected"'; ?>>Bioprocess Technology</option>
<option value="Bioresource Management" <?php if($other_discipline=="Bioresource Management") echo 'selected="selected"'; ?>>Bioresource Management</option>
<option value="Bioscience" <?php if($other_discipline=="Bioscience") echo 'selected="selected"'; ?>>Bioscience</option>
<option value="Biostatistics" <?php if($other_discipline=="Biostatistics") echo 'selected="selected"'; ?>>Biostatistics</option>
<option value="Biotech Engineering" <?php if($other_discipline=="Biotech Engineering") echo 'selected="selected"'; ?>>Biotech Engineering</option>
<option value="Biotechnology Engineering" <?php if($other_discipline=="Biotechnology Engineering") echo 'selected="selected"'; ?>>Biotechnology Engineering</option>
<option value="Biotechnology" <?php if($other_discipline=="Biotechnology") echo 'selected="selected"'; ?>>Biotechnology</option>
<option value="Biotechnology" <?php if($other_discipline=="Biotechnology") echo 'selected="selected"'; ?>>Biotechnology</option>
<option value="Botany hons" <?php if($other_discipline=="Botany hons") echo 'selected="selected"'; ?>>Botany hons</option>
<option value="Botany" <?php if($other_discipline=="Botany") echo 'selected="selected"'; ?>>Botany</option>
<option value="Business Administration Finance" <?php if($other_discipline=="Business Administration Finance") echo 'selected="selected"'; ?>>Business Administration Finance</option>
<option value="Business Administration Human Resource" <?php if($other_discipline=="Business Administration Human Resource") echo 'selected="selected"'; ?>>Business Administration Human Resource</option>
<option value="Business Administration Information Tech." <?php if($other_discipline=="Business Administration Information Tech.") echo 'selected="selected"'; ?>>Business Administration Information Tech.</option>
<option value="Business Administration Marketing" <?php if($other_discipline=="Business Administration Marketing") echo 'selected="selected"'; ?>>Business Administration Marketing</option>
<option value="Business Administration" <?php if($other_discipline=="Business Administration") echo 'selected="selected"'; ?>>Business Administration</option>
<option value="CAD CAM" <?php if($other_discipline=="CAD CAM") echo 'selected="selected"'; ?>>CAD CAM</option>
<option value="CAD/CAM" <?php if($other_discipline=="CAD/CAM") echo 'selected="selected"'; ?>>CAD/CAM</option>
<option value="Cardiac Perfusion" <?php if($other_discipline=="Cardiac Perfusion") echo 'selected="selected"'; ?>>Cardiac Perfusion</option>
<option value="Cardiovascular Technology" <?php if($other_discipline=="Cardiovascular Technology") echo 'selected="selected"'; ?>>Cardiovascular Technology</option>
<option value="Cell and Molecular Biology" <?php if($other_discipline=="Cell and Molecular Biology") echo 'selected="selected"'; ?>>Cell and Molecular Biology</option>
<option value="Ceramic Engineering" <?php if($other_discipline=="Ceramic Engineering") echo 'selected="selected"'; ?>>Ceramic Engineering</option>
<option value="Ceramic" <?php if($other_discipline=="Ceramic") echo 'selected="selected"'; ?>>Ceramic</option>
<option value="Chemical Engineering" <?php if($other_discipline=="Chemical Engineering") echo 'selected="selected"'; ?>>Chemical Engineering</option>
<option value="Chemical Sciences" <?php if($other_discipline=="Chemical Sciences") echo 'selected="selected"'; ?>>Chemical Sciences</option>
<option value="Chemical" <?php if($other_discipline=="Chemical") echo 'selected="selected"'; ?>>Chemical</option>
<option value="Chemistry hons" <?php if($other_discipline=="Chemistry hons") echo 'selected="selected"'; ?>>Chemistry hons</option>
<option value="Chemistry" <?php if($other_discipline=="Chemistry") echo 'selected="selected"'; ?>>Chemistry</option>
<option value="Chief Engineer" <?php if($other_discipline=="Chief Engineer") echo 'selected="selected"'; ?>>Chief Engineer</option>
<option value="Chief" <?php if($other_discipline=="Chief") echo 'selected="selected"'; ?>>Chief</option>
<option value="Child Guidance and Family Counselling" <?php if($other_discipline=="Child Guidance and Family Counselling") echo 'selected="selected"'; ?>>Child Guidance and Family Counselling</option>
<option value="Child Health Nursing" <?php if($other_discipline=="Child Health Nursing") echo 'selected="selected"'; ?>>Child Health Nursing</option>
<option value="Cinematography" <?php if($other_discipline=="Cinematography") echo 'selected="selected"'; ?>>Cinematography</option>
<option value="Civil Engineering" <?php if($other_discipline=="Civil Engineering") echo 'selected="selected"'; ?>>Civil Engineering</option>
<option value="Civil Science" <?php if($other_discipline=="Civil Science") echo 'selected="selected"'; ?>>Civil Science</option>
<option value="Civil" <?php if($other_discipline=="Civil") echo 'selected="selected"'; ?>>Civil</option>
<option value="Clinical Laboratory Science" <?php if($other_discipline=="Clinical Laboratory Science") echo 'selected="selected"'; ?>>Clinical Laboratory Science</option>
<option value="Clinical Microbiology" <?php if($other_discipline=="Clinical Microbiology") echo 'selected="selected"'; ?>>Clinical Microbiology</option>
<option value="Clinical Nutrition" <?php if($other_discipline=="Clinical Nutrition") echo 'selected="selected"'; ?>>Clinical Nutrition</option>
<option value="Clinical Psychology" <?php if($other_discipline=="Clinical Psychology") echo 'selected="selected"'; ?>>Clinical Psychology</option>
<option value="Clinical Research and Regulatory Affairs" <?php if($other_discipline=="Clinical Research and Regulatory Affairs") echo 'selected="selected"'; ?>>Clinical Research and Regulatory Affairs</option>
<option value="Clinical Research" <?php if($other_discipline=="Clinical Research") echo 'selected="selected"'; ?>>Clinical Research</option>
<option value="Clothing and Textiles" <?php if($other_discipline=="Clothing and Textiles") echo 'selected="selected"'; ?>>Clothing and Textiles</option>
<option value="Cloud Computing" <?php if($other_discipline=="Cloud Computing") echo 'selected="selected"'; ?>>Cloud Computing</option>
<option value="Co-operation and BankingCo-Operative Management" <?php if($other_discipline=="Co-operation and BankingCo-Operative Management") echo 'selected="selected"'; ?>>Co-operation and BankingCo-Operative Management</option>
<option value="Coastal and Disaster Management" <?php if($other_discipline=="Coastal and Disaster Management") echo 'selected="selected"'; ?>>Coastal and Disaster Management</option>
<option value="Cognitive Science" <?php if($other_discipline=="Cognitive Science") echo 'selected="selected"'; ?>>Cognitive Science</option>
<option value="Commerce Accountancy" <?php if($other_discipline=="Commerce Accountancy") echo 'selected="selected"'; ?>>Commerce Accountancy</option>
<option value="Commerce Accounting and Finance" <?php if($other_discipline=="Commerce Accounting and Finance") echo 'selected="selected"'; ?>>Commerce Accounting and Finance</option>
<option value="Commerce Computer Applications" <?php if($other_discipline=="Commerce Computer Applications") echo 'selected="selected"'; ?>>Commerce Computer Applications</option>
<option value="Commerce Finance" <?php if($other_discipline=="Commerce Finance") echo 'selected="selected"'; ?>>Commerce Finance</option>
<option value="Commerce" <?php if($other_discipline=="Commerce") echo 'selected="selected"'; ?>>Commerce</option>
<option value="Communication Design" <?php if($other_discipline=="Communication Design") echo 'selected="selected"'; ?>>Communication Design</option>
<option value="Communication Media for Children" <?php if($other_discipline=="Communication Media for Children") echo 'selected="selected"'; ?>>Communication Media for Children</option>
<option value="Communication Systems" <?php if($other_discipline=="Communication Systems") echo 'selected="selected"'; ?>>Communication Systems</option>
<option value="Communication" <?php if($other_discipline=="Communication") echo 'selected="selected"'; ?>>Communication</option>
<option value="Communications Engineering" <?php if($other_discipline=="Communications Engineering") echo 'selected="selected"'; ?>>Communications Engineering</option>
<option value="Community Health Nursing" <?php if($other_discipline=="Community Health Nursing") echo 'selected="selected"'; ?>>Community Health Nursing</option>
<option value="Computational Biology" <?php if($other_discipline=="Computational Biology") echo 'selected="selected"'; ?>>Computational Biology</option>
<option value="Computer Animation and Visual Effects" <?php if($other_discipline=="Computer Animation and Visual Effects") echo 'selected="selected"'; ?>>Computer Animation and Visual Effects</option>
<option value="Computer Applications" <?php if($other_discipline=="Computer Applications") echo 'selected="selected"'; ?>>Computer Applications</option>
<option value="Computer Communication" <?php if($other_discipline=="Computer Communication") echo 'selected="selected"'; ?>>Computer Communication</option>
<option value="Computer Engineering" <?php if($other_discipline=="Computer Engineering") echo 'selected="selected"'; ?>>Computer Engineering</option>
<option value="Computer Integrated Manufacturing" <?php if($other_discipline=="Computer Integrated Manufacturing") echo 'selected="selected"'; ?>>Computer Integrated Manufacturing</option>
<option value="Computer Network and Information Security" <?php if($other_discipline=="Computer Network and Information Security") echo 'selected="selected"'; ?>>Computer Network and Information Security</option>
<option value="Computer Network" <?php if($other_discipline=="Computer Network") echo 'selected="selected"'; ?>>Computer Network</option>
<option value="Computer Science Engineering" <?php if($other_discipline=="Computer Science Engineering") echo 'selected="selected"'; ?>>Computer Science Engineering</option>
<option value="Computer Science Technology" <?php if($other_discipline=="Computer Science Technology") echo 'selected="selected"'; ?>>Computer Science Technology</option>
<option value="Computer Science and Engineering" <?php if($other_discipline=="Computer Science and Engineering") echo 'selected="selected"'; ?>>Computer Science and Engineering</option>
<option value="Computer Science and Technology" <?php if($other_discipline=="Computer Science and Technology") echo 'selected="selected"'; ?>>Computer Science and Technology</option>
<option value="Computer Science" <?php if($other_discipline=="Computer Science") echo 'selected="selected"'; ?>>Computer Science</option>
<option value="Computer Technology" <?php if($other_discipline=="Computer Technology") echo 'selected="selected"'; ?>>Computer Technology</option>
<option value="Computer" <?php if($other_discipline=="Computer") echo 'selected="selected"'; ?>>Computer</option>
<option value="Conservation Biology" <?php if($other_discipline=="Conservation Biology") echo 'selected="selected"'; ?>>Conservation Biology</option>
<option value="Constitutional Law" <?php if($other_discipline=="Constitutional Law") echo 'selected="selected"'; ?>>Constitutional Law</option>
<option value="Construction Engineering" <?php if($other_discipline=="Construction Engineering") echo 'selected="selected"'; ?>>Construction Engineering</option>
<option value="Construction Management" <?php if($other_discipline=="Construction Management") echo 'selected="selected"'; ?>>Construction Management</option>
<option value="Construction Technology" <?php if($other_discipline=="Construction Technology") echo 'selected="selected"'; ?>>Construction Technology</option>
<option value="Construction and Management" <?php if($other_discipline=="Construction and Management") echo 'selected="selected"'; ?>>Construction and Management</option>
<option value="Control Systems" <?php if($other_discipline=="Control Systems") echo 'selected="selected"'; ?>>Control Systems</option>
<option value="Control and Instrumentation" <?php if($other_discipline=="Control and Instrumentation") echo 'selected="selected"'; ?>>Control and Instrumentation</option>
<option value="Corporate Law" <?php if($other_discipline=="Corporate Law") echo 'selected="selected"'; ?>>Corporate Law</option>
<option value="Costume Design and Fashion" <?php if($other_discipline=="Costume Design and Fashion") echo 'selected="selected"'; ?>>Costume Design and Fashion</option>
<option value="Counseling Psychology" <?php if($other_discipline=="Counseling Psychology") echo 'selected="selected"'; ?>>Counseling Psychology</option>
<option value="Counselling" <?php if($other_discipline=="Counselling") echo 'selected="selected"'; ?>>Counselling</option>
<option value="Criminal Justice" <?php if($other_discipline=="Criminal Justice") echo 'selected="selected"'; ?>>Criminal Justice</option>
<option value="Criminal Law" <?php if($other_discipline=="Criminal Law") echo 'selected="selected"'; ?>>Criminal Law</option>
<option value="Criminology and Criminal Justice" <?php if($other_discipline=="Criminology and Criminal Justice") echo 'selected="selected"'; ?>>Criminology and Criminal Justice</option>
<option value="Criminology" <?php if($other_discipline=="Criminology") echo 'selected="selected"'; ?>>Criminology</option>
<option value="Cyber Law and Information Security" <?php if($other_discipline=="Cyber Law and Information Security") echo 'selected="selected"'; ?>>Cyber Law and Information Security</option>
<option value="Cyber Security" <?php if($other_discipline=="Cyber Security") echo 'selected="selected"'; ?>>Cyber Security</option>
<option value="Dairy Engineering" <?php if($other_discipline=="Dairy Engineering") echo 'selected="selected"'; ?>>Dairy Engineering</option>
<option value="Dairy Science" <?php if($other_discipline=="Dairy Science") echo 'selected="selected"'; ?>>Dairy Science</option>
<option value="Dairy Technology" <?php if($other_discipline=="Dairy Technology") echo 'selected="selected"'; ?>>Dairy Technology</option>
<option value="Data Analytics" <?php if($other_discipline=="Data Analytics") echo 'selected="selected"'; ?>>Data Analytics</option>
<option value="Data Mining and Warehousing" <?php if($other_discipline=="Data Mining and Warehousing") echo 'selected="selected"'; ?>>Data Mining and Warehousing</option>
<option value="Data Science" <?php if($other_discipline=="Data Science") echo 'selected="selected"'; ?>>Data Science</option>
<option value="Dental Surgery" <?php if($other_discipline=="Dental Surgery") echo 'selected="selected"'; ?>>Dental Surgery</option>
<option value="Design and Manufacturing" <?php if($other_discipline=="Design and Manufacturing") echo 'selected="selected"'; ?>>Design and Manufacturing</option>
<option value="Design" <?php if($other_discipline=="Design") echo 'selected="selected"'; ?>>Design</option>
<option value="Development Communications" <?php if($other_discipline=="Development Communications") echo 'selected="selected"'; ?>>Development Communications</option>
<option value="Development Studies" <?php if($other_discipline=="Development Studies") echo 'selected="selected"'; ?>>Development Studies</option>
<option value="Dietetics" <?php if($other_discipline=="Dietetics") echo 'selected="selected"'; ?>>Dietetics</option>
<option value="Digital Communication and Networking" <?php if($other_discipline=="Digital Communication and Networking") echo 'selected="selected"'; ?>>Digital Communication and Networking</option>
<option value="Digital Communication" <?php if($other_discipline=="Digital Communication") echo 'selected="selected"'; ?>>Digital Communication</option>
<option value="Digital Electronics and Communication Systems" <?php if($other_discipline=="Digital Electronics and Communication Systems") echo 'selected="selected"'; ?>>Digital Electronics and Communication Systems</option>
<option value="Digital Electronics and Communication" <?php if($other_discipline=="Digital Electronics and Communication") echo 'selected="selected"'; ?>>Digital Electronics and Communication</option>
<option value="Digital Filmmaking" <?php if($other_discipline=="Digital Filmmaking") echo 'selected="selected"'; ?>>Digital Filmmaking</option>
<option value="Digital System and Signal Processing" <?php if($other_discipline=="Digital System and Signal Processing") echo 'selected="selected"'; ?>>Digital System and Signal Processing</option>
<option value="Digital Systems and Computer Electronics" <?php if($other_discipline=="Digital Systems and Computer Electronics") echo 'selected="selected"'; ?>>Digital Systems and Computer Electronics</option>
<option value="Disaster Mitigation" <?php if($other_discipline=="Disaster Mitigation") echo 'selected="selected"'; ?>>Disaster Mitigation</option>
<option value="Dot Multimedia" <?php if($other_discipline=="Dot Multimedia") echo 'selected="selected"'; ?>>Dot Multimedia</option>
<option value="Drug Chemistry" <?php if($other_discipline=="Drug Chemistry") echo 'selected="selected"'; ?>>Drug Chemistry</option>
<option value="E-Learning Technology" <?php if($other_discipline=="E-Learning Technology") echo 'selected="selected"'; ?>>E-Learning Technology</option>
<option value="Earth Science and Resource Management" <?php if($other_discipline=="Earth Science and Resource Management") echo 'selected="selected"'; ?>>Earth Science and Resource Management</option>
<option value="Earth Science" <?php if($other_discipline=="Earth Science") echo 'selected="selected"'; ?>>Earth Science</option>
<option value="Earth Sciences" <?php if($other_discipline=="Earth Sciences") echo 'selected="selected"'; ?>>Earth Sciences</option>
<option value="Earth System Science" <?php if($other_discipline=="Earth System Science") echo 'selected="selected"'; ?>>Earth System Science</option>
<option value="Earthquake" <?php if($other_discipline=="Earthquake") echo 'selected="selected"'; ?>>Earthquake</option>
<option value="Eco Restoration" <?php if($other_discipline=="Eco Restoration") echo 'selected="selected"'; ?>>Eco Restoration</option>
<option value="Ecology and Environmental Science" <?php if($other_discipline=="Ecology and Environmental Science") echo 'selected="selected"'; ?>>Ecology and Environmental Science</option>
<option value="Ecology" <?php if($other_discipline=="Ecology") echo 'selected="selected"'; ?>>Ecology</option>
<option value="Economics and Finance" <?php if($other_discipline=="Economics and Finance") echo 'selected="selected"'; ?>>Economics and Finance</option>
<option value="Economics" <?php if($other_discipline=="Economics") echo 'selected="selected"'; ?>>Economics</option>
<option value="Ecotourism" <?php if($other_discipline=="Ecotourism") echo 'selected="selected"'; ?>>Ecotourism</option>
<option value="Education" <?php if($other_discipline=="Education") echo 'selected="selected"'; ?>>Education</option>
<option value="Electrical Devices and Power Systems" <?php if($other_discipline=="Electrical Devices and Power Systems") echo 'selected="selected"'; ?>>Electrical Devices and Power Systems</option>
<option value="Electrical Engineering" <?php if($other_discipline=="Electrical Engineering") echo 'selected="selected"'; ?>>Electrical Engineering</option>
<option value="Electrical and Electronics Engineering" <?php if($other_discipline=="Electrical and Electronics Engineering") echo 'selected="selected"'; ?>>Electrical and Electronics Engineering</option>
<option value="Electrical and Electronics" <?php if($other_discipline=="Electrical and Electronics") echo 'selected="selected"'; ?>>Electrical and Electronics</option>
<option value="Electrical power system" <?php if($other_discipline=="Electrical power system") echo 'selected="selected"'; ?>>Electrical power system</option>
<option value="Electrical" <?php if($other_discipline=="Electrical") echo 'selected="selected"'; ?>>Electrical</option>
<option value="Electro Chemistry" <?php if($other_discipline=="Electro Chemistry") echo 'selected="selected"'; ?>>Electro Chemistry</option>
<option value="Electronic Media" <?php if($other_discipline=="Electronic Media") echo 'selected="selected"'; ?>>Electronic Media</option>
<option value="Electronic Science" <?php if($other_discipline=="Electronic Science") echo 'selected="selected"'; ?>>Electronic Science</option>
<option value="Electronics Engineer" <?php if($other_discipline=="Electronics Engineer") echo 'selected="selected"'; ?>>Electronics Engineer</option>
<option value="Electronics Engineering" <?php if($other_discipline=="Electronics Engineering") echo 'selected="selected"'; ?>>Electronics Engineering</option>
<option value="Electronics and Communication" <?php if($other_discipline=="Electronics and Communication") echo 'selected="selected"'; ?>>Electronics and Communication</option>
<option value="Electronics and Communications Engineering" <?php if($other_discipline=="Electronics and Communications Engineering") echo 'selected="selected"'; ?>>Electronics and Communications Engineering</option>
<option value="Electronics and Electrical" <?php if($other_discipline=="Electronics and Electrical") echo 'selected="selected"'; ?>>Electronics and Electrical</option>
<option value="Electronics and Instrumentation" <?php if($other_discipline=="Electronics and Instrumentation") echo 'selected="selected"'; ?>>Electronics and Instrumentation</option>
<option value="Electronics and Telecommunication" <?php if($other_discipline=="Electronics and Telecommunication") echo 'selected="selected"'; ?>>Electronics and Telecommunication</option>
<option value="Electronics and Telecommunications" <?php if($other_discipline=="Electronics and Telecommunications") echo 'selected="selected"'; ?>>Electronics and Telecommunications</option>
<option value="Electronics" <?php if($other_discipline=="Electronics") echo 'selected="selected"'; ?>>Electronics</option>
<option value="Embedded System Technologies" <?php if($other_discipline=="Embedded System Technologies") echo 'selected="selected"'; ?>>Embedded System Technologies</option>
<option value="Embedded System and VLSI Design" <?php if($other_discipline=="Embedded System and VLSI Design") echo 'selected="selected"'; ?>>Embedded System and VLSI Design</option>
<option value="Embedded Systems" <?php if($other_discipline=="Embedded Systems") echo 'selected="selected"'; ?>>Embedded Systems</option>
<option value="Endocrinology" <?php if($other_discipline=="Endocrinology") echo 'selected="selected"'; ?>>Endocrinology</option>
<option value="Energy Systems" <?php if($other_discipline=="Energy Systems") echo 'selected="selected"'; ?>>Energy Systems</option>
<option value="Energy" <?php if($other_discipline=="Energy") echo 'selected="selected"'; ?>>Energy</option>
<option value="Engineering Physics" <?php if($other_discipline=="Engineering Physics") echo 'selected="selected"'; ?>>Engineering Physics</option>
<option value="English" <?php if($other_discipline=="English") echo 'selected="selected"'; ?>>English</option>
<option value="Entomology" <?php if($other_discipline=="Entomology") echo 'selected="selected"'; ?>>Entomology</option>
<option value="Entrepreneurship" <?php if($other_discipline=="Entrepreneurship") echo 'selected="selected"'; ?>>Entrepreneurship</option>
<option value="Environment and Solid Waste Management" <?php if($other_discipline=="Environment and Solid Waste Management") echo 'selected="selected"'; ?>>Environment and Solid Waste Management</option>
<option value="Environmental Engineering" <?php if($other_discipline=="Environmental Engineering") echo 'selected="selected"'; ?>>Environmental Engineering</option>
<option value="Environmental Management" <?php if($other_discipline=="Environmental Management") echo 'selected="selected"'; ?>>Environmental Management</option>
<option value="Environmental Science and Ecology" <?php if($other_discipline=="Environmental Science and Ecology") echo 'selected="selected"'; ?>>Environmental Science and Ecology</option>
<option value="Environmental Science and Technology" <?php if($other_discipline=="Environmental Science and Technology") echo 'selected="selected"'; ?>>Environmental Science and Technology</option>
<option value="Environmental Science" <?php if($other_discipline=="Environmental Science") echo 'selected="selected"'; ?>>Environmental Science</option>
<option value="Environmental Studies" <?php if($other_discipline=="Environmental Studies") echo 'selected="selected"'; ?>>Environmental Studies</option>
<option value="Environmental and Climate Change Management" <?php if($other_discipline=="Environmental and Climate Change Management") echo 'selected="selected"'; ?>>Environmental and Climate Change Management</option>
<option value="Environmental" <?php if($other_discipline=="Environmental") echo 'selected="selected"'; ?>>Environmental</option>
<option value="Epidemiology" <?php if($other_discipline=="Epidemiology") echo 'selected="selected"'; ?>>Epidemiology</option>
<option value="Excavation" <?php if($other_discipline=="Excavation") echo 'selected="selected"'; ?>>Excavation</option>
<option value="Executive Engineer" <?php if($other_discipline=="Executive Engineer") echo 'selected="selected"'; ?>>Executive Engineer</option>
<option value="Executive" <?php if($other_discipline=="Executive") echo 'selected="selected"'; ?>>Executive</option>
<option value="Extension and Communication" <?php if($other_discipline=="Extension and Communication") echo 'selected="selected"'; ?>>Extension and Communication</option>
<option value="Fabric and Apparel Designing" <?php if($other_discipline=="Fabric and Apparel Designing") echo 'selected="selected"'; ?>>Fabric and Apparel Designing</option>
<option value="Fashion Design and Technology" <?php if($other_discipline=="Fashion Design and Technology") echo 'selected="selected"'; ?>>Fashion Design and Technology</option>
<option value="Fashion Design" <?php if($other_discipline=="Fashion Design") echo 'selected="selected"'; ?>>Fashion Design</option>
<option value="Fashion Designing" <?php if($other_discipline=="Fashion Designing") echo 'selected="selected"'; ?>>Fashion Designing</option>
<option value="Fashion Management" <?php if($other_discipline=="Fashion Management") echo 'selected="selected"'; ?>>Fashion Management</option>
<option value="Fashion Promotion and Styling" <?php if($other_discipline=="Fashion Promotion and Styling") echo 'selected="selected"'; ?>>Fashion Promotion and Styling</option>
<option value="Fashion Technology" <?php if($other_discipline=="Fashion Technology") echo 'selected="selected"'; ?>>Fashion Technology</option>
<option value="Fashion and Apparel Design" <?php if($other_discipline=="Fashion and Apparel Design") echo 'selected="selected"'; ?>>Fashion and Apparel Design</option>
<option value="Fashion and Textile Merchandising" <?php if($other_discipline=="Fashion and Textile Merchandising") echo 'selected="selected"'; ?>>Fashion and Textile Merchandising</option>
<option value="Fermentation and Microbial Technology" <?php if($other_discipline=="Fermentation and Microbial Technology") echo 'selected="selected"'; ?>>Fermentation and Microbial Technology</option>
<option value="Filmmaking" <?php if($other_discipline=="Filmmaking") echo 'selected="selected"'; ?>>Filmmaking</option>
<option value="Finance" <?php if($other_discipline=="Finance") echo 'selected="selected"'; ?>>Finance</option>
<option value="Financial Computing" <?php if($other_discipline=="Financial Computing") echo 'selected="selected"'; ?>>Financial Computing</option>
<option value="Financial Economics and Administration" <?php if($other_discipline=="Financial Economics and Administration") echo 'selected="selected"'; ?>>Financial Economics and Administration</option>
<option value="Financial Mathematics" <?php if($other_discipline=="Financial Mathematics") echo 'selected="selected"'; ?>>Financial Mathematics</option>
<option value="Fire Protection Engineering" <?php if($other_discipline=="Fire Protection Engineering") echo 'selected="selected"'; ?>>Fire Protection Engineering</option>
<option value="Fire Safety and Hazard Management" <?php if($other_discipline=="Fire Safety and Hazard Management") echo 'selected="selected"'; ?>>Fire Safety and Hazard Management</option>
<option value="Fisheries Science" <?php if($other_discipline=="Fisheries Science") echo 'selected="selected"'; ?>>Fisheries Science</option>
<option value="Floriculture and Landscaping" <?php if($other_discipline=="Floriculture and Landscaping") echo 'selected="selected"'; ?>>Floriculture and Landscaping</option>
<option value="Fluid Dynamics" <?php if($other_discipline=="Fluid Dynamics") echo 'selected="selected"'; ?>>Fluid Dynamics</option>
<option value="Fluids" <?php if($other_discipline=="Fluids") echo 'selected="selected"'; ?>>Fluids</option>
<option value="Food Biotechnology" <?php if($other_discipline=="Food Biotechnology") echo 'selected="selected"'; ?>>Food Biotechnology</option>
<option value="Food Chain Management" <?php if($other_discipline=="Food Chain Management") echo 'selected="selected"'; ?>>Food Chain Management</option>
<option value="Food Nutrition" <?php if($other_discipline=="Food Nutrition") echo 'selected="selected"'; ?>>Food Nutrition</option>
<option value="Food Process" <?php if($other_discipline=="Food Process") echo 'selected="selected"'; ?>>Food Process</option>
<option value="Food Processing Technology" <?php if($other_discipline=="Food Processing Technology") echo 'selected="selected"'; ?>>Food Processing Technology</option>
<option value="Food Quality Assurance" <?php if($other_discipline=="Food Quality Assurance") echo 'selected="selected"'; ?>>Food Quality Assurance</option>
<option value="Food Science and Nutrition" <?php if($other_discipline=="Food Science and Nutrition") echo 'selected="selected"'; ?>>Food Science and Nutrition</option>
<option value="Food Science and Quality Control" <?php if($other_discipline=="Food Science and Quality Control") echo 'selected="selected"'; ?>>Food Science and Quality Control</option>
<option value="Food Science and Technology" <?php if($other_discipline=="Food Science and Technology") echo 'selected="selected"'; ?>>Food Science and Technology</option>
<option value="Food Science" <?php if($other_discipline=="Food Science") echo 'selected="selected"'; ?>>Food Science</option>
<option value="Food Sciences" <?php if($other_discipline=="Food Sciences") echo 'selected="selected"'; ?>>Food Sciences</option>
<option value="Food Technology" <?php if($other_discipline=="Food Technology") echo 'selected="selected"'; ?>>Food Technology</option>
<option value="Food and Nutrition" <?php if($other_discipline=="Food and Nutrition") echo 'selected="selected"'; ?>>Food and Nutrition</option>
<option value="Foreign Service" <?php if($other_discipline=="Foreign Service") echo 'selected="selected"'; ?>>Foreign Service</option>
<option value="Foreign Trade Management" <?php if($other_discipline=="Foreign Trade Management") echo 'selected="selected"'; ?>>Foreign Trade Management</option>
<option value="Forensic Science and Criminology" <?php if($other_discipline=="Forensic Science and Criminology") echo 'selected="selected"'; ?>>Forensic Science and Criminology</option>
<option value="Forensic Science" <?php if($other_discipline=="Forensic Science") echo 'selected="selected"'; ?>>Forensic Science</option>
<option value="Forensic Sciences" <?php if($other_discipline=="Forensic Sciences") echo 'selected="selected"'; ?>>Forensic Sciences</option>
<option value="Forestry" <?php if($other_discipline=="Forestry") echo 'selected="selected"'; ?>>Forestry</option>
<option value="Fruit Science" <?php if($other_discipline=="Fruit Science") echo 'selected="selected"'; ?>>Fruit Science</option>
<option value="Game Design and Development" <?php if($other_discipline=="Game Design and Development") echo 'selected="selected"'; ?>>Game Design and Development</option>
<option value="Gaming" <?php if($other_discipline=="Gaming") echo 'selected="selected"'; ?>>Gaming</option>
<option value="Garment Manufacturing Technology" <?php if($other_discipline=="Garment Manufacturing Technology") echo 'selected="selected"'; ?>>Garment Manufacturing Technology</option>
<option value="Garment Production and Export Management" <?php if($other_discipline=="Garment Production and Export Management") echo 'selected="selected"'; ?>>Garment Production and Export Management</option>
<option value="Gemology" <?php if($other_discipline=="Gemology") echo 'selected="selected"'; ?>>Gemology</option>
<option value="General Biotechnology" <?php if($other_discipline=="General Biotechnology") echo 'selected="selected"'; ?>>General Biotechnology</option>
<option value="General" <?php if($other_discipline=="General") echo 'selected="selected"'; ?>>General</option>
<option value="Genetics Engineering" <?php if($other_discipline=="Genetics Engineering") echo 'selected="selected"'; ?>>Genetics Engineering</option>
<option value="Genetics and Plant Breeding" <?php if($other_discipline=="Genetics and Plant Breeding") echo 'selected="selected"'; ?>>Genetics and Plant Breeding</option>
<option value="Genetics" <?php if($other_discipline=="Genetics") echo 'selected="selected"'; ?>>Genetics</option>
<option value="Genomics and Proteomics" <?php if($other_discipline=="Genomics and Proteomics") echo 'selected="selected"'; ?>>Genomics and Proteomics</option>
<option value="Genomics" <?php if($other_discipline=="Genomics") echo 'selected="selected"'; ?>>Genomics</option>
<option value="Geography" <?php if($other_discipline=="Geography") echo 'selected="selected"'; ?>>Geography</option>
<option value="Geoinformatics" <?php if($other_discipline=="Geoinformatics") echo 'selected="selected"'; ?>>Geoinformatics</option>
<option value="Geological Engineering" <?php if($other_discipline=="Geological Engineering") echo 'selected="selected"'; ?>>Geological Engineering</option>
<option value="Geological Sciences" <?php if($other_discipline=="Geological Sciences") echo 'selected="selected"'; ?>>Geological Sciences</option>
<option value="Geology" <?php if($other_discipline=="Geology") echo 'selected="selected"'; ?>>Geology</option>
<option value="Geomatics Engineering" <?php if($other_discipline=="Geomatics Engineering") echo 'selected="selected"'; ?>>Geomatics Engineering</option>
<option value="Geophysics" <?php if($other_discipline=="Geophysics") echo 'selected="selected"'; ?>>Geophysics</option>
<option value="Geotechnical" <?php if($other_discipline=="Geotechnical") echo 'selected="selected"'; ?>>Geotechnical</option>
<option value="Global Warming Reduction" <?php if($other_discipline=="Global Warming Reduction") echo 'selected="selected"'; ?>>Global Warming Reduction</option>
<option value="Graphics and Multimedia" <?php if($other_discipline=="Graphics and Multimedia") echo 'selected="selected"'; ?>>Graphics and Multimedia</option>
<option value="Green Business" <?php if($other_discipline=="Green Business") echo 'selected="selected"'; ?>>Green Business</option>
<option value="Green Technology" <?php if($other_discipline=="Green Technology") echo 'selected="selected"'; ?>>Green Technology</option>
<option value="Habitat and Population Studies" <?php if($other_discipline=="Habitat and Population Studies") echo 'selected="selected"'; ?>>Habitat and Population Studies</option>
<option value="Hardware and Networking" <?php if($other_discipline=="Hardware and Networking") echo 'selected="selected"'; ?>>Hardware and Networking</option>
<option value="Health Safety and Environmental" <?php if($other_discipline=="Health Safety and Environmental") echo 'selected="selected"'; ?>>Health Safety and Environmental</option>
<option value="Health Science and Nutrition" <?php if($other_discipline=="Health Science and Nutrition") echo 'selected="selected"'; ?>>Health Science and Nutrition</option>
<option value="Health and Yoga Therapy" <?php if($other_discipline=="Health and Yoga Therapy") echo 'selected="selected"'; ?>>Health and Yoga Therapy</option>
<option value="Heat Power" <?php if($other_discipline=="Heat Power") echo 'selected="selected"'; ?>>Heat Power</option>
<option value="Herbal Science" <?php if($other_discipline=="Herbal Science") echo 'selected="selected"'; ?>>Herbal Science</option>
<option value="Hindi" <?php if($other_discipline=="Hindi") echo 'selected="selected"'; ?>>Hindi</option>
<option value="History" <?php if($other_discipline=="History") echo 'selected="selected"'; ?>>History</option>
<option value="Home Management" <?php if($other_discipline=="Home Management") echo 'selected="selected"'; ?>>Home Management</option>
<option value="Home Science" <?php if($other_discipline=="Home Science") echo 'selected="selected"'; ?>>Home Science</option>
<option value="Horticulture" <?php if($other_discipline=="Horticulture") echo 'selected="selected"'; ?>>Horticulture</option>
<option value="Hospital Administration" <?php if($other_discipline=="Hospital Administration") echo 'selected="selected"'; ?>>Hospital Administration</option>
<option value="Hospitality Management" <?php if($other_discipline=="Hospitality Management") echo 'selected="selected"'; ?>>Hospitality Management</option>
<option value="Hospitality Studies" <?php if($other_discipline=="Hospitality Studies") echo 'selected="selected"'; ?>>Hospitality Studies</option>
<option value="Hospitality and Hotel Administration" <?php if($other_discipline=="Hospitality and Hotel Administration") echo 'selected="selected"'; ?>>Hospitality and Hotel Administration</option>
<option value="Hospitality and Tourism Studies" <?php if($other_discipline=="Hospitality and Tourism Studies") echo 'selected="selected"'; ?>>Hospitality and Tourism Studies</option>
<option value="Hospitality and Tourism" <?php if($other_discipline=="Hospitality and Tourism") echo 'selected="selected"'; ?>>Hospitality and Tourism</option>
<option value="Hospitality" <?php if($other_discipline=="Hospitality") echo 'selected="selected"'; ?>>Hospitality</option>
<option value="Hotel Management and Catering" <?php if($other_discipline=="Hotel Management and Catering") echo 'selected="selected"'; ?>>Hotel Management and Catering</option>
<option value="Hotel Management and Culinary Arts" <?php if($other_discipline=="Hotel Management and Culinary Arts") echo 'selected="selected"'; ?>>Hotel Management and Culinary Arts</option>
<option value="Hotel Management" <?php if($other_discipline=="Hotel Management") echo 'selected="selected"'; ?>>Hotel Management</option>
<option value="Hotel and Catering Management" <?php if($other_discipline=="Hotel and Catering Management") echo 'selected="selected"'; ?>>Hotel and Catering Management</option>
<option value="Human Development" <?php if($other_discipline=="Human Development") echo 'selected="selected"'; ?>>Human Development</option>
<option value="Human Genetics" <?php if($other_discipline=="Human Genetics") echo 'selected="selected"'; ?>>Human Genetics</option>
<option value="Human Physiology" <?php if($other_discipline=="Human Physiology") echo 'selected="selected"'; ?>>Human Physiology</option>
<option value="Hydrochemistry" <?php if($other_discipline=="Hydrochemistry") echo 'selected="selected"'; ?>>Hydrochemistry</option>
<option value="Hydrology" <?php if($other_discipline=="Hydrology") echo 'selected="selected"'; ?>>Hydrology</option>
<option value="Illumination Technology and Design" <?php if($other_discipline=="Illumination Technology and Design") echo 'selected="selected"'; ?>>Illumination Technology and Design</option>
<option value="Industrial Biotechnology" <?php if($other_discipline=="Industrial Biotechnology") echo 'selected="selected"'; ?>>Industrial Biotechnology</option>
<option value="Industrial Chemistry" <?php if($other_discipline=="Industrial Chemistry") echo 'selected="selected"'; ?>>Industrial Chemistry</option>
<option value="Industrial Engineering" <?php if($other_discipline=="Industrial Engineering") echo 'selected="selected"'; ?>>Industrial Engineering</option>
<option value="Industrial Mathematics" <?php if($other_discipline=="Industrial Mathematics") echo 'selected="selected"'; ?>>Industrial Mathematics</option>
<option value="Industrial Microbiology" <?php if($other_discipline=="Industrial Microbiology") echo 'selected="selected"'; ?>>Industrial Microbiology</option>
<option value="Industrial Science" <?php if($other_discipline=="Industrial Science") echo 'selected="selected"'; ?>>Industrial Science</option>
<option value="Industrial and Management" <?php if($other_discipline=="Industrial and Management") echo 'selected="selected"'; ?>>Industrial and Management</option>
<option value="Industrial and Production Engineering" <?php if($other_discipline=="Industrial and Production Engineering") echo 'selected="selected"'; ?>>Industrial and Production Engineering</option>
<option value="Industrial" <?php if($other_discipline=="Industrial") echo 'selected="selected"'; ?>>Industrial</option>
<option value="Information Science" <?php if($other_discipline=="Information Science") echo 'selected="selected"'; ?>>Information Science</option>
<option value="Information Security and Cyber Forensics" <?php if($other_discipline=="Information Security and Cyber Forensics") echo 'selected="selected"'; ?>>Information Security and Cyber Forensics</option>
<option value="Information Security" <?php if($other_discipline=="Information Security") echo 'selected="selected"'; ?>>Information Security</option>
<option value="Information Systems" <?php if($other_discipline=="Information Systems") echo 'selected="selected"'; ?>>Information Systems</option>
<option value="Information Technology Engineering" <?php if($other_discipline=="Information Technology Engineering") echo 'selected="selected"'; ?>>Information Technology Engineering</option>
<option value="Information Technology and Management" <?php if($other_discipline=="Information Technology and Management") echo 'selected="selected"'; ?>>Information Technology and Management</option>
<option value="Information Technology" <?php if($other_discipline=="Information Technology") echo 'selected="selected"'; ?>>Information Technology</option>
<option value="Information and Communication Technology" <?php if($other_discipline=="Information and Communication Technology") echo 'selected="selected"'; ?>>Information and Communication Technology</option>
<option value="Inorganic Chemistry" <?php if($other_discipline=="Inorganic Chemistry") echo 'selected="selected"'; ?>>Inorganic Chemistry</option>
<option value="Instrumentation Engineering" <?php if($other_discipline=="Instrumentation Engineering") echo 'selected="selected"'; ?>>Instrumentation Engineering</option>
<option value="Instrumentation Technology" <?php if($other_discipline=="Instrumentation Technology") echo 'selected="selected"'; ?>>Instrumentation Technology</option>
<option value="Instrumentation and Control Engineering" <?php if($other_discipline=="Instrumentation and Control Engineering") echo 'selected="selected"'; ?>>Instrumentation and Control Engineering</option>
<option value="Instrumentation and Control" <?php if($other_discipline=="Instrumentation and Control") echo 'selected="selected"'; ?>>Instrumentation and Control</option>
<option value="Instrumentation" <?php if($other_discipline=="Instrumentation") echo 'selected="selected"'; ?>>Instrumentation</option>
<option value="Integrated Biotechnology" <?php if($other_discipline=="Integrated Biotechnology") echo 'selected="selected"'; ?>>Integrated Biotechnology</option>
<option value="Intellectual Property Rights" <?php if($other_discipline=="Intellectual Property Rights") echo 'selected="selected"'; ?>>Intellectual Property Rights</option>
<option value="Intelligent System" <?php if($other_discipline=="Intelligent System") echo 'selected="selected"'; ?>>Intelligent System</option>
<option value="Interior Architecture and Design" <?php if($other_discipline=="Interior Architecture and Design") echo 'selected="selected"'; ?>>Interior Architecture and Design</option>
<option value="Interior Design" <?php if($other_discipline=="Interior Design") echo 'selected="selected"'; ?>>Interior Design</option>
<option value="Jewellery Design" <?php if($other_discipline=="Jewellery Design") echo 'selected="selected"'; ?>>Jewellery Design</option>
<option value="Journalism and Mass Communication" <?php if($other_discipline=="Journalism and Mass Communication") echo 'selected="selected"'; ?>>Journalism and Mass Communication</option>
<option value="Journalism" <?php if($other_discipline=="Journalism") echo 'selected="selected"'; ?>>Journalism</option>
<option value="Knitwear Design" <?php if($other_discipline=="Knitwear Design") echo 'selected="selected"'; ?>>Knitwear Design</option>
<option value="LLB" <?php if($other_discipline=="LLB") echo 'selected="selected"'; ?>>LLB</option>
<option value="Landscape Architectur" <?php if($other_discipline=="Landscape Architectur") echo 'selected="selected"'; ?>>Landscape Architectur</option>
<option value="Law" <?php if($other_discipline=="Law") echo 'selected="selected"'; ?>>Law</option>
<option value="Leather Technology" <?php if($other_discipline=="Leather Technology") echo 'selected="selected"'; ?>>Leather Technology</option>
<option value="Life Science" <?php if($other_discipline=="Life Science") echo 'selected="selected"'; ?>>Life Science</option>
<option value="Life Sciences" <?php if($other_discipline=="Life Sciences") echo 'selected="selected"'; ?>>Life Sciences</option>
<option value="Limnology and Fisheries" <?php if($other_discipline=="Limnology and Fisheries") echo 'selected="selected"'; ?>>Limnology and Fisheries</option>
<option value="Live Stock Production and Management" <?php if($other_discipline=="Live Stock Production and Management") echo 'selected="selected"'; ?>>Live Stock Production and Management</option>
<option value="Machine Design" <?php if($other_discipline=="Machine Design") echo 'selected="selected"'; ?>>Machine Design</option>
<option value="Management and Information Technology" <?php if($other_discipline=="Management and Information Technology") echo 'selected="selected"'; ?>>Management and Information Technology</option>
<option value="Manufacturing Science and Engineering" <?php if($other_discipline=="Manufacturing Science and Engineering") echo 'selected="selected"'; ?>>Manufacturing Science and Engineering</option>
<option value="Manufacturing Technology" <?php if($other_discipline=="Manufacturing Technology") echo 'selected="selected"'; ?>>Manufacturing Technology</option>
<option value="Manufacturing" <?php if($other_discipline=="Manufacturing") echo 'selected="selected"'; ?>>Manufacturing</option>
<option value="Marine Biotechnology" <?php if($other_discipline=="Marine Biotechnology") echo 'selected="selected"'; ?>>Marine Biotechnology</option>
<option value="Marine Engineering" <?php if($other_discipline=="Marine Engineering") echo 'selected="selected"'; ?>>Marine Engineering</option>
<option value="Marine Geophysics" <?php if($other_discipline=="Marine Geophysics") echo 'selected="selected"'; ?>>Marine Geophysics</option>
<option value="Marine Science" <?php if($other_discipline=="Marine Science") echo 'selected="selected"'; ?>>Marine Science</option>
<option value="Marine" <?php if($other_discipline=="Marine") echo 'selected="selected"'; ?>>Marine</option>
<option value="Marketing" <?php if($other_discipline=="Marketing") echo 'selected="selected"'; ?>>Marketing</option>
<option value="Mass Communication Advertising and Journalism" <?php if($other_discipline=="Mass Communication Advertising and Journalism") echo 'selected="selected"'; ?>>Mass Communication Advertising and Journalism</option>
<option value="Mass Communication and Journalism" <?php if($other_discipline=="Mass Communication and Journalism") echo 'selected="selected"'; ?>>Mass Communication and Journalism</option>
<option value="Mass Communication" <?php if($other_discipline=="Mass Communication") echo 'selected="selected"'; ?>>Mass Communication</option>
<option value="Material Science and Engineering" <?php if($other_discipline=="Material Science and Engineering") echo 'selected="selected"'; ?>>Material Science and Engineering</option>
<option value="Material Science and" <?php if($other_discipline=="Material Science and") echo 'selected="selected"'; ?>>Material Science and</option>
<option value="Materials Science" <?php if($other_discipline=="Materials Science") echo 'selected="selected"'; ?>>Materials Science</option>
<option value="Maternity Nursing" <?php if($other_discipline=="Maternity Nursing") echo 'selected="selected"'; ?>>Maternity Nursing</option>
<option value="Mathematical Ecology and Environment Studies" <?php if($other_discipline=="Mathematical Ecology and Environment Studies") echo 'selected="selected"'; ?>>Mathematical Ecology and Environment Studies</option>
<option value="Mathematical Science" <?php if($other_discipline=="Mathematical Science") echo 'selected="selected"'; ?>>Mathematical Science</option>
<option value="Mathematics and Computing" <?php if($other_discipline=="Mathematics and Computing") echo 'selected="selected"'; ?>>Mathematics and Computing</option>
<option value="Mathematics hons" <?php if($other_discipline=="Mathematics hons") echo 'selected="selected"'; ?>>Mathematics hons</option>
<option value="Mathematics" <?php if($other_discipline=="Mathematics") echo 'selected="selected"'; ?>>Mathematics</option>
<option value="Maths and Computer Applications" <?php if($other_discipline=="Maths and Computer Applications") echo 'selected="selected"'; ?>>Maths and Computer Applications</option>
<option value="Maths and Statistics" <?php if($other_discipline=="Maths and Statistics") echo 'selected="selected"'; ?>>Maths and Statistics</option>
<option value="Mechanical Engineer" <?php if($other_discipline=="Mechanical Engineer") echo 'selected="selected"'; ?>>Mechanical Engineer</option>
<option value="Mechanical Engineering" <?php if($other_discipline=="Mechanical Engineering") echo 'selected="selected"'; ?>>Mechanical Engineering</option>
<option value="Mechanical" <?php if($other_discipline=="Mechanical") echo 'selected="selected"'; ?>>Mechanical</option>
<option value="Mechatronics Engineering" <?php if($other_discipline=="Mechatronics Engineering") echo 'selected="selected"'; ?>>Mechatronics Engineering</option>
<option value="Mechatronics" <?php if($other_discipline=="Mechatronics") echo 'selected="selected"'; ?>>Mechatronics</option>
<option value="Media Graphics and Animation" <?php if($other_discipline=="Media Graphics and Animation") echo 'selected="selected"'; ?>>Media Graphics and Animation</option>
<option value="Media Technology" <?php if($other_discipline=="Media Technology") echo 'selected="selected"'; ?>>Media Technology</option>
<option value="Medical Anatomy" <?php if($other_discipline=="Medical Anatomy") echo 'selected="selected"'; ?>>Medical Anatomy</option>
<option value="Medical Biochemistry" <?php if($other_discipline=="Medical Biochemistry") echo 'selected="selected"'; ?>>Medical Biochemistry</option>
<option value="Medical Biotechnology" <?php if($other_discipline=="Medical Biotechnology") echo 'selected="selected"'; ?>>Medical Biotechnology</option>
<option value="Medical Imaging Technology" <?php if($other_discipline=="Medical Imaging Technology") echo 'selected="selected"'; ?>>Medical Imaging Technology</option>
<option value="Medical Lab Technology" <?php if($other_discipline=="Medical Lab Technology") echo 'selected="selected"'; ?>>Medical Lab Technology</option>
<option value="Medical Microbiology" <?php if($other_discipline=="Medical Microbiology") echo 'selected="selected"'; ?>>Medical Microbiology</option>
<option value="Medical Physics" <?php if($other_discipline=="Medical Physics") echo 'selected="selected"'; ?>>Medical Physics</option>
<option value="Medical Radiation Physics" <?php if($other_discipline=="Medical Radiation Physics") echo 'selected="selected"'; ?>>Medical Radiation Physics</option>
<option value="Medical Radiography and Imaging Technology" <?php if($other_discipline=="Medical Radiography and Imaging Technology") echo 'selected="selected"'; ?>>Medical Radiography and Imaging Technology</option>
<option value="Medical Surgical Nursing" <?php if($other_discipline=="Medical Surgical Nursing") echo 'selected="selected"'; ?>>Medical Surgical Nursing</option>
<option value="Medical Technology" <?php if($other_discipline=="Medical Technology") echo 'selected="selected"'; ?>>Medical Technology</option>
<option value="Medicinal Chemistry" <?php if($other_discipline=="Medicinal Chemistry") echo 'selected="selected"'; ?>>Medicinal Chemistry</option>
<option value="Medicinal Plants" <?php if($other_discipline=="Medicinal Plants") echo 'selected="selected"'; ?>>Medicinal Plants</option>
<option value="Mental Health Nursing" <?php if($other_discipline=="Mental Health Nursing") echo 'selected="selected"'; ?>>Mental Health Nursing</option>
<option value="Mental Health" <?php if($other_discipline=="Mental Health") echo 'selected="selected"'; ?>>Mental Health</option>
<option value="Metallurgical Engineering" <?php if($other_discipline=="Metallurgical Engineering") echo 'selected="selected"'; ?>>Metallurgical Engineering</option>
<option value="Meteorology" <?php if($other_discipline=="Meteorology") echo 'selected="selected"'; ?>>Meteorology</option>
<option value="Microbiology and Immunology" <?php if($other_discipline=="Microbiology and Immunology") echo 'selected="selected"'; ?>>Microbiology and Immunology</option>
<option value="Microbiology" <?php if($other_discipline=="Microbiology") echo 'selected="selected"'; ?>>Microbiology</option>
<option value="Microelectronic Engineering" <?php if($other_discipline=="Microelectronic Engineering") echo 'selected="selected"'; ?>>Microelectronic Engineering</option>
<option value="Microelectronics and Advanced Communication" <?php if($other_discipline=="Microelectronics and Advanced Communication") echo 'selected="selected"'; ?>>Microelectronics and Advanced Communication</option>
<option value="Microelectronics and VLSI Design" <?php if($other_discipline=="Microelectronics and VLSI Design") echo 'selected="selected"'; ?>>Microelectronics and VLSI Design</option>
<option value="Military Science" <?php if($other_discipline=="Military Science") echo 'selected="selected"'; ?>>Military Science</option>
<option value="Mineral" <?php if($other_discipline=="Mineral") echo 'selected="selected"'; ?>>Mineral</option>
<option value="Mining Engineer" <?php if($other_discipline=="Mining Engineer") echo 'selected="selected"'; ?>>Mining Engineer</option>
<option value="Mining Engineering" <?php if($other_discipline=="Mining Engineering") echo 'selected="selected"'; ?>>Mining Engineering</option>
<option value="Mining" <?php if($other_discipline=="Mining") echo 'selected="selected"'; ?>>Mining</option>
<option value="Molecular Biology and Biochemistry" <?php if($other_discipline=="Molecular Biology and Biochemistry") echo 'selected="selected"'; ?>>Molecular Biology and Biochemistry</option>
<option value="Molecular Biology and Genetic Engineering" <?php if($other_discipline=="Molecular Biology and Genetic Engineering") echo 'selected="selected"'; ?>>Molecular Biology and Genetic Engineering</option>
<option value="Molecular Biology and Human Genetics" <?php if($other_discipline=="Molecular Biology and Human Genetics") echo 'selected="selected"'; ?>>Molecular Biology and Human Genetics</option>
<option value="Molecular Biology" <?php if($other_discipline=="Molecular Biology") echo 'selected="selected"'; ?>>Molecular Biology</option>
<option value="Molecular Medicine" <?php if($other_discipline=="Molecular Medicine") echo 'selected="selected"'; ?>>Molecular Medicine</option>
<option value="Motorsport Engineering" <?php if($other_discipline=="Motorsport Engineering") echo 'selected="selected"'; ?>>Motorsport Engineering</option>
<option value="Multimedia Technology" <?php if($other_discipline=="Multimedia Technology") echo 'selected="selected"'; ?>>Multimedia Technology</option>
<option value="Multimedia and Animation" <?php if($other_discipline=="Multimedia and Animation") echo 'selected="selected"'; ?>>Multimedia and Animation</option>
<option value="Multimedia" <?php if($other_discipline=="Multimedia") echo 'selected="selected"'; ?>>Multimedia</option>
<option value="Museology" <?php if($other_discipline=="Museology") echo 'selected="selected"'; ?>>Museology</option>
<option value="NGO Management" <?php if($other_discipline=="NGO Management") echo 'selected="selected"'; ?>>NGO Management</option>
<option value="Nano Science and Technology" <?php if($other_discipline=="Nano Science and Technology") echo 'selected="selected"'; ?>>Nano Science and Technology</option>
<option value="Nano Sciences and Technology" <?php if($other_discipline=="Nano Sciences and Technology") echo 'selected="selected"'; ?>>Nano Sciences and Technology</option>
<option value="NanoTechnology" <?php if($other_discipline=="NanoTechnology") echo 'selected="selected"'; ?>>NanoTechnology</option>
<option value="Nanotechnology Engineering" <?php if($other_discipline=="Nanotechnology Engineering") echo 'selected="selected"'; ?>>Nanotechnology Engineering</option>
<option value="Natural Resource Management" <?php if($other_discipline=="Natural Resource Management") echo 'selected="selected"'; ?>>Natural Resource Management</option>
<option value="Naturopathy and Yogic Science" <?php if($other_discipline=="Naturopathy and Yogic Science") echo 'selected="selected"'; ?>>Naturopathy and Yogic Science</option>
<option value="Nautical Science" <?php if($other_discipline=="Nautical Science") echo 'selected="selected"'; ?>>Nautical Science</option>
<option value="Naval Architecture and Ocean Engineering" <?php if($other_discipline=="Naval Architecture and Ocean Engineering") echo 'selected="selected"'; ?>>Naval Architecture and Ocean Engineering</option>
<option value="Naval Engineering" <?php if($other_discipline=="Naval Engineering") echo 'selected="selected"'; ?>>Naval Engineering</option>
<option value="Nematology" <?php if($other_discipline=="Nematology") echo 'selected="selected"'; ?>>Nematology</option>
<option value="Network Protocol Design" <?php if($other_discipline=="Network Protocol Design") echo 'selected="selected"'; ?>>Network Protocol Design</option>
<option value="Neural Networks" <?php if($other_discipline=="Neural Networks") echo 'selected="selected"'; ?>>Neural Networks</option>
<option value="Neuroscience" <?php if($other_discipline=="Neuroscience") echo 'selected="selected"'; ?>>Neuroscience</option>
<option value="Nuclear Engineering" <?php if($other_discipline=="Nuclear Engineering") echo 'selected="selected"'; ?>>Nuclear Engineering</option>
<option value="Nuclear Medicine Technology" <?php if($other_discipline=="Nuclear Medicine Technology") echo 'selected="selected"'; ?>>Nuclear Medicine Technology</option>
<option value="Nuclear Physics" <?php if($other_discipline=="Nuclear Physics") echo 'selected="selected"'; ?>>Nuclear Physics</option>
<option value="Nuclear" <?php if($other_discipline=="Nuclear") echo 'selected="selected"'; ?>>Nuclear</option>
<option value="Nursing" <?php if($other_discipline=="Nursing") echo 'selected="selected"'; ?>>Nursing</option>
<option value="Nutrition and Dietetics" <?php if($other_discipline=="Nutrition and Dietetics") echo 'selected="selected"'; ?>>Nutrition and Dietetics</option>
<option value="Nutrition and Food Processing" <?php if($other_discipline=="Nutrition and Food Processing") echo 'selected="selected"'; ?>>Nutrition and Food Processing</option>
<option value="Nutrition" <?php if($other_discipline=="Nutrition") echo 'selected="selected"'; ?>>Nutrition</option>
<option value="Obstetrics and Gynecological Nursing" <?php if($other_discipline=="Obstetrics and Gynecological Nursing") echo 'selected="selected"'; ?>>Obstetrics and Gynecological Nursing</option>
<option value="Occupational Therapy" <?php if($other_discipline=="Occupational Therapy") echo 'selected="selected"'; ?>>Occupational Therapy</option>
<option value="Ocean and Marine Engineering" <?php if($other_discipline=="Ocean and Marine Engineering") echo 'selected="selected"'; ?>>Ocean and Marine Engineering</option>
<option value="Oceanography" <?php if($other_discipline=="Oceanography") echo 'selected="selected"'; ?>>Oceanography</option>
<option value="Olericulture" <?php if($other_discipline=="Olericulture") echo 'selected="selected"'; ?>>Olericulture</option>
<option value="Operation Research and Computer Applications" <?php if($other_discipline=="Operation Research and Computer Applications") echo 'selected="selected"'; ?>>Operation Research and Computer Applications</option>
<option value="Operation Theatre Technology" <?php if($other_discipline=="Operation Theatre Technology") echo 'selected="selected"'; ?>>Operation Theatre Technology</option>
<option value="Operational Research" <?php if($other_discipline=="Operational Research") echo 'selected="selected"'; ?>>Operational Research</option>
<option value="Optical" <?php if($other_discipline=="Optical") echo 'selected="selected"'; ?>>Optical</option>
<option value="Optometry" <?php if($other_discipline=="Optometry") echo 'selected="selected"'; ?>>Optometry</option>
<option value="Organic Chemistry" <?php if($other_discipline=="Organic Chemistry") echo 'selected="selected"'; ?>>Organic Chemistry</option>
<option value="Orthopedics" <?php if($other_discipline=="Orthopedics") echo 'selected="selected"'; ?>>Orthopedics</option>
<option value="Osteopathy" <?php if($other_discipline=="Osteopathy") echo 'selected="selected"'; ?>>Osteopathy</option>
<option value="Paediatric Nursing" <?php if($other_discipline=="Paediatric Nursing") echo 'selected="selected"'; ?>>Paediatric Nursing</option>
<option value="Paper Engineering" <?php if($other_discipline=="Paper Engineering") echo 'selected="selected"'; ?>>Paper Engineering</option>
<option value="Paramedical" <?php if($other_discipline=="Paramedical") echo 'selected="selected"'; ?>>Paramedical</option>
<option value="Pathology" <?php if($other_discipline=="Pathology") echo 'selected="selected"'; ?>>Pathology</option>
<option value="Perfusion Technology" <?php if($other_discipline=="Perfusion Technology") echo 'selected="selected"'; ?>>Perfusion Technology</option>
<option value="Petroleum Engineering" <?php if($other_discipline=="Petroleum Engineering") echo 'selected="selected"'; ?>>Petroleum Engineering</option>
<option value="Petroleum Geology" <?php if($other_discipline=="Petroleum Geology") echo 'selected="selected"'; ?>>Petroleum Geology</option>
<option value="Petroleum Technology" <?php if($other_discipline=="Petroleum Technology") echo 'selected="selected"'; ?>>Petroleum Technology</option>
<option value="Petroleum" <?php if($other_discipline=="Petroleum") echo 'selected="selected"'; ?>>Petroleum</option>
<option value="Pharmaceutical Chemistry" <?php if($other_discipline=="Pharmaceutical Chemistry") echo 'selected="selected"'; ?>>Pharmaceutical Chemistry</option>
<option value="Pharmaceutical Technology" <?php if($other_discipline=="Pharmaceutical Technology") echo 'selected="selected"'; ?>>Pharmaceutical Technology</option>
<option value="Pharmaceutical" <?php if($other_discipline=="Pharmaceutical") echo 'selected="selected"'; ?>>Pharmaceutical</option>
<option value="Pharmacology" <?php if($other_discipline=="Pharmacology") echo 'selected="selected"'; ?>>Pharmacology</option>
<option value="Pharmacy" <?php if($other_discipline=="Pharmacy") echo 'selected="selected"'; ?>>Pharmacy</option>
<option value="Photography" <?php if($other_discipline=="Photography") echo 'selected="selected"'; ?>>Photography</option>
<option value="Photonics" <?php if($other_discipline=="Photonics") echo 'selected="selected"'; ?>>Photonics</option>
<option value="Physical Chemistry" <?php if($other_discipline=="Physical Chemistry") echo 'selected="selected"'; ?>>Physical Chemistry</option>
<option value="Physical Education" <?php if($other_discipline=="Physical Education") echo 'selected="selected"'; ?>>Physical Education</option>
<option value="Physical Oceanography" <?php if($other_discipline=="Physical Oceanography") echo 'selected="selected"'; ?>>Physical Oceanography</option>
<option value="Physical Sciences" <?php if($other_discipline=="Physical Sciences") echo 'selected="selected"'; ?>>Physical Sciences</option>
<option value="Physical Therapy" <?php if($other_discipline=="Physical Therapy") echo 'selected="selected"'; ?>>Physical Therapy</option>
<option value="Physician Assistant" <?php if($other_discipline=="Physician Assistant") echo 'selected="selected"'; ?>>Physician Assistant</option>
<option value="Physics" <?php if($other_discipline=="Physics") echo 'selected="selected"'; ?>>Physics</option>
<option value="Physiology" <?php if($other_discipline=="Physiology") echo 'selected="selected"'; ?>>Physiology</option>
<option value="Physiotherapy" <?php if($other_discipline=="Physiotherapy") echo 'selected="selected"'; ?>>Physiotherapy</option>
<option value="Phytomedical Science and Technology" <?php if($other_discipline=="Phytomedical Science and Technology") echo 'selected="selected"'; ?>>Phytomedical Science and Technology</option>
<option value="Pipeline" <?php if($other_discipline=="Pipeline") echo 'selected="selected"'; ?>>Pipeline</option>
<option value="Planning" <?php if($other_discipline=="Planning") echo 'selected="selected"'; ?>>Planning</option>
<option value="PlanningUrban and Regional Planning" <?php if($other_discipline=="PlanningUrban and Regional Planning") echo 'selected="selected"'; ?>>PlanningUrban and Regional Planning</option>
<option value="Plant Biochemistry" <?php if($other_discipline=="Plant Biochemistry") echo 'selected="selected"'; ?>>Plant Biochemistry</option>
<option value="Plant Biology and Plant Biotechnology" <?php if($other_discipline=="Plant Biology and Plant Biotechnology") echo 'selected="selected"'; ?>>Plant Biology and Plant Biotechnology</option>
<option value="Plant Pathology" <?php if($other_discipline=="Plant Pathology") echo 'selected="selected"'; ?>>Plant Pathology</option>
<option value="Plant Science" <?php if($other_discipline=="Plant Science") echo 'selected="selected"'; ?>>Plant Science</option>
<option value="Podiatry" <?php if($other_discipline=="Podiatry") echo 'selected="selected"'; ?>>Podiatry</option>
<option value="Political Science" <?php if($other_discipline=="Political Science") echo 'selected="selected"'; ?>>Political Science</option>
<option value="Politics" <?php if($other_discipline=="Politics") echo 'selected="selected"'; ?>>Politics</option>
<option value="Pollution Control" <?php if($other_discipline=="Pollution Control") echo 'selected="selected"'; ?>>Pollution Control</option>
<option value="Polymer Science" <?php if($other_discipline=="Polymer Science") echo 'selected="selected"'; ?>>Polymer Science</option>
<option value="Polymer Technology" <?php if($other_discipline=="Polymer Technology") echo 'selected="selected"'; ?>>Polymer Technology</option>
<option value="Post-harvest Technology" <?php if($other_discipline=="Post-harvest Technology") echo 'selected="selected"'; ?>>Post-harvest Technology</option>
<option value="Poultry Production" <?php if($other_discipline=="Poultry Production") echo 'selected="selected"'; ?>>Poultry Production</option>
<option value="Power Electronics and Drives" <?php if($other_discipline=="Power Electronics and Drives") echo 'selected="selected"'; ?>>Power Electronics and Drives</option>
<option value="Power Electronics and Systems" <?php if($other_discipline=="Power Electronics and Systems") echo 'selected="selected"'; ?>>Power Electronics and Systems</option>
<option value="Power Electronics" <?php if($other_discipline=="Power Electronics") echo 'selected="selected"'; ?>>Power Electronics</option>
<option value="Power Engineering" <?php if($other_discipline=="Power Engineering") echo 'selected="selected"'; ?>>Power Engineering</option>
<option value="Power System" <?php if($other_discipline=="Power System") echo 'selected="selected"'; ?>>Power System</option>
<option value="Power Systems and Power Electronics" <?php if($other_discipline=="Power Systems and Power Electronics") echo 'selected="selected"'; ?>>Power Systems and Power Electronics</option>
<option value="Power Systems" <?php if($other_discipline=="Power Systems") echo 'selected="selected"'; ?>>Power Systems</option>
<option value="Process Control and Instrumentation" <?php if($other_discipline=="Process Control and Instrumentation") echo 'selected="selected"'; ?>>Process Control and Instrumentation</option>
<option value="Process Metallurgy" <?php if($other_discipline=="Process Metallurgy") echo 'selected="selected"'; ?>>Process Metallurgy</option>
<option value="Process" <?php if($other_discipline=="Process") echo 'selected="selected"'; ?>>Process</option>
<option value="Product Design and Manufacturing" <?php if($other_discipline=="Product Design and Manufacturing") echo 'selected="selected"'; ?>>Product Design and Manufacturing</option>
<option value="Product Design" <?php if($other_discipline=="Product Design") echo 'selected="selected"'; ?>>Product Design</option>
<option value="Production / Production Technology" <?php if($other_discipline=="Production / Production Technology") echo 'selected="selected"'; ?>>Production / Production Technology</option>
<option value="Production Engineer" <?php if($other_discipline=="Production Engineer") echo 'selected="selected"'; ?>>Production Engineer</option>
<option value="Production Engineering" <?php if($other_discipline=="Production Engineering") echo 'selected="selected"'; ?>>Production Engineering</option>
<option value="Production Technology" <?php if($other_discipline=="Production Technology") echo 'selected="selected"'; ?>>Production Technology</option>
<option value="Production and Industrial Engineering" <?php if($other_discipline=="Production and Industrial Engineering") echo 'selected="selected"'; ?>>Production and Industrial Engineering</option>
<option value="Production and Industrial" <?php if($other_discipline=="Production and Industrial") echo 'selected="selected"'; ?>>Production and Industrial</option>
<option value="Production" <?php if($other_discipline=="Production") echo 'selected="selected"'; ?>>Production</option>
<option value="Prosthetic and Orthotics" <?php if($other_discipline=="Prosthetic and Orthotics") echo 'selected="selected"'; ?>>Prosthetic and Orthotics</option>
<option value="Prosthodontics" <?php if($other_discipline=="Prosthodontics") echo 'selected="selected"'; ?>>Prosthodontics</option>
<option value="Psychiatric Nursing" <?php if($other_discipline=="Psychiatric Nursing") echo 'selected="selected"'; ?>>Psychiatric Nursing</option>
<option value="Psychological Counselling" <?php if($other_discipline=="Psychological Counselling") echo 'selected="selected"'; ?>>Psychological Counselling</option>
<option value="Psychology" <?php if($other_discipline=="Psychology") echo 'selected="selected"'; ?>>Psychology</option>
<option value="Public Health" <?php if($other_discipline=="Public Health") echo 'selected="selected"'; ?>>Public Health</option>
<option value="Public Safety" <?php if($other_discipline=="Public Safety") echo 'selected="selected"'; ?>>Public Safety</option>
<option value="Radiography" <?php if($other_discipline=="Radiography") echo 'selected="selected"'; ?>>Radiography</option>
<option value="Radiologic Technology" <?php if($other_discipline=="Radiologic Technology") echo 'selected="selected"'; ?>>Radiologic Technology</option>
<option value="Radiology" <?php if($other_discipline=="Radiology") echo 'selected="selected"'; ?>>Radiology</option>
<option value="Real-Time Interactive Simulation" <?php if($other_discipline=="Real-Time Interactive Simulation") echo 'selected="selected"'; ?>>Real-Time Interactive Simulation</option>
<option value="Regenerative Medicine" <?php if($other_discipline=="Regenerative Medicine") echo 'selected="selected"'; ?>>Regenerative Medicine</option>
<option value="Reliability" <?php if($other_discipline=="Reliability") echo 'selected="selected"'; ?>>Reliability</option>
<option value="Remote Sensing and GIS" <?php if($other_discipline=="Remote Sensing and GIS") echo 'selected="selected"'; ?>>Remote Sensing and GIS</option>
<option value="Renewable Energy" <?php if($other_discipline=="Renewable Energy") echo 'selected="selected"'; ?>>Renewable Energy</option>
<option value="Researcher" <?php if($other_discipline=="Researcher") echo 'selected="selected"'; ?>>Researcher</option>
<option value="Resource Management" <?php if($other_discipline=="Resource Management") echo 'selected="selected"'; ?>>Resource Management</option>
<option value="Respiratory Therapy" <?php if($other_discipline=="Respiratory Therapy") echo 'selected="selected"'; ?>>Respiratory Therapy</option>
<option value="Robotics Engineering" <?php if($other_discipline=="Robotics Engineering") echo 'selected="selected"'; ?>>Robotics Engineering</option>
<option value="Robotics" <?php if($other_discipline=="Robotics") echo 'selected="selected"'; ?>>Robotics</option>
<option value="Rubber Technology" <?php if($other_discipline=="Rubber Technology") echo 'selected="selected"'; ?>>Rubber Technology</option>
<option value="Rural Development" <?php if($other_discipline=="Rural Development") echo 'selected="selected"'; ?>>Rural Development</option>
<option value="Rural Health" <?php if($other_discipline=="Rural Health") echo 'selected="selected"'; ?>>Rural Health</option>
<option value="Science and Technology Communication" <?php if($other_discipline=="Science and Technology Communication") echo 'selected="selected"'; ?>>Science and Technology Communication</option>
<option value="Seed Science and Technology" <?php if($other_discipline=="Seed Science and Technology") echo 'selected="selected"'; ?>>Seed Science and Technology</option>
<option value="Sericulture" <?php if($other_discipline=="Sericulture") echo 'selected="selected"'; ?>>Sericulture</option>
<option value="Service Industry Management" <?php if($other_discipline=="Service Industry Management") echo 'selected="selected"'; ?>>Service Industry Management</option>
<option value="Signal Processing" <?php if($other_discipline=="Signal Processing") echo 'selected="selected"'; ?>>Signal Processing</option>
<option value="Social Sciences" <?php if($other_discipline=="Social Sciences") echo 'selected="selected"'; ?>>Social Sciences</option>
<option value="Software Developer" <?php if($other_discipline=="Software Developer") echo 'selected="selected"'; ?>>Software Developer</option>
<option value="Software Engineer" <?php if($other_discipline=="Software Engineer") echo 'selected="selected"'; ?>>Software Engineer</option>
<option value="Software Engineering" <?php if($other_discipline=="Software Engineering") echo 'selected="selected"'; ?>>Software Engineering</option>
<option value="Software System" <?php if($other_discipline=="Software System") echo 'selected="selected"'; ?>>Software System</option>
<option value="Software" <?php if($other_discipline=="Software") echo 'selected="selected"'; ?>>Software</option>
<option value="Soil Science and Agricultural Chemistry" <?php if($other_discipline=="Soil Science and Agricultural Chemistry") echo 'selected="selected"'; ?>>Soil Science and Agricultural Chemistry</option>
<option value="Soil Science" <?php if($other_discipline=="Soil Science") echo 'selected="selected"'; ?>>Soil Science</option>
<option value="Soil Water Conservation" <?php if($other_discipline=="Soil Water Conservation") echo 'selected="selected"'; ?>>Soil Water Conservation</option>
<option value="Soil and Water Conservation" <?php if($other_discipline=="Soil and Water Conservation") echo 'selected="selected"'; ?>>Soil and Water Conservation</option>
<option value="Speech Therapy" <?php if($other_discipline=="Speech Therapy") echo 'selected="selected"'; ?>>Speech Therapy</option>
<option value="Speech-Language Pathology" <?php if($other_discipline=="Speech-Language Pathology") echo 'selected="selected"'; ?>>Speech-Language Pathology</option>
<option value="Sports Management" <?php if($other_discipline=="Sports Management") echo 'selected="selected"'; ?>>Sports Management</option>
<option value="Sports Science" <?php if($other_discipline=="Sports Science") echo 'selected="selected"'; ?>>Sports Science</option>
<option value="Statistics" <?php if($other_discipline=="Statistics") echo 'selected="selected"'; ?>>Statistics</option>
<option value="Stem Cell and Tissue Engineering" <?php if($other_discipline=="Stem Cell and Tissue Engineering") echo 'selected="selected"'; ?>>Stem Cell and Tissue Engineering</option>
<option value="Structural Engineering" <?php if($other_discipline=="Structural Engineering") echo 'selected="selected"'; ?>>Structural Engineering</option>
<option value="Structural" <?php if($other_discipline=="Structural") echo 'selected="selected"'; ?>>Structural</option>
<option value="Sugar Technology" <?php if($other_discipline=="Sugar Technology") echo 'selected="selected"'; ?>>Sugar Technology</option>
<option value="Surgery" <?php if($other_discipline=="Surgery") echo 'selected="selected"'; ?>>Surgery</option>
<option value="Sustainability and Design Engineering" <?php if($other_discipline=="Sustainability and Design Engineering") echo 'selected="selected"'; ?>>Sustainability and Design Engineering</option>
<option value="Sustainable Development" <?php if($other_discipline=="Sustainable Development") echo 'selected="selected"'; ?>>Sustainable Development</option>
<option value="System Administration and Networking" <?php if($other_discipline=="System Administration and Networking") echo 'selected="selected"'; ?>>System Administration and Networking</option>
<option value="System and Network Administration" <?php if($other_discipline=="System and Network Administration") echo 'selected="selected"'; ?>>System and Network Administration</option>
<option value="Systems Engineering" <?php if($other_discipline=="Systems Engineering") echo 'selected="selected"'; ?>>Systems Engineering</option>
<option value="Technology Management" <?php if($other_discipline=="Technology Management") echo 'selected="selected"'; ?>>Technology Management</option>
<option value="Telecommunication Engineering" <?php if($other_discipline=="Telecommunication Engineering") echo 'selected="selected"'; ?>>Telecommunication Engineering</option>
<option value="Telecommunication" <?php if($other_discipline=="Telecommunication") echo 'selected="selected"'; ?>>Telecommunication</option>
<option value="Textile Design" <?php if($other_discipline=="Textile Design") echo 'selected="selected"'; ?>>Textile Design</option>
<option value="Textile Engineering" <?php if($other_discipline=="Textile Engineering") echo 'selected="selected"'; ?>>Textile Engineering</option>
<option value="Textile Technology" <?php if($other_discipline=="Textile Technology") echo 'selected="selected"'; ?>>Textile Technology</option>
<option value="Textile" <?php if($other_discipline=="Textile") echo 'selected="selected"'; ?>>Textile</option>
<option value="Thermal / Thermal Power" <?php if($other_discipline=="Thermal / Thermal Power") echo 'selected="selected"'; ?>>Thermal / Thermal Power</option>
<option value="Thermal Power" <?php if($other_discipline=="Thermal Power") echo 'selected="selected"'; ?>>Thermal Power</option>
<option value="Thermal" <?php if($other_discipline=="Thermal") echo 'selected="selected"'; ?>>Thermal</option>
<option value="Tool Engineering" <?php if($other_discipline=="Tool Engineering") echo 'selected="selected"'; ?>>Tool Engineering</option>
<option value="Tool" <?php if($other_discipline=="Tool") echo 'selected="selected"'; ?>>Tool</option>
<option value="Tourism and Hospitality Management" <?php if($other_discipline=="Tourism and Hospitality Management") echo 'selected="selected"'; ?>>Tourism and Hospitality Management</option>
<option value="Tourism and Hotel Management" <?php if($other_discipline=="Tourism and Hotel Management") echo 'selected="selected"'; ?>>Tourism and Hotel Management</option>
<option value="Tourism" <?php if($other_discipline=="Tourism") echo 'selected="selected"'; ?>>Tourism</option>
<option value="Toxicology" <?php if($other_discipline=="Toxicology") echo 'selected="selected"'; ?>>Toxicology</option>
<option value="Transportation Engineering" <?php if($other_discipline=="Transportation Engineering") echo 'selected="selected"'; ?>>Transportation Engineering</option>
<option value="Transportation" <?php if($other_discipline=="Transportation") echo 'selected="selected"'; ?>>Transportation</option>
<option value="VFX" <?php if($other_discipline=="VFX") echo 'selected="selected"'; ?>>VFX</option>
<option value="VLSI Design / VLSI Technology" <?php if($other_discipline=="VLSI Design / VLSI Technology") echo 'selected="selected"'; ?>>VLSI Design / VLSI Technology</option>
<option value="VLSI Design and Embedded System" <?php if($other_discipline=="VLSI Design and Embedded System") echo 'selected="selected"'; ?>>VLSI Design and Embedded System</option>
<option value="VLSI Design" <?php if($other_discipline=="VLSI Design") echo 'selected="selected"'; ?>>VLSI Design</option>
<option value="VLSI System Design" <?php if($other_discipline=="VLSI System Design") echo 'selected="selected"'; ?>>VLSI System Design</option>
<option value="VLSI Technology" <?php if($other_discipline=="VLSI Technology") echo 'selected="selected"'; ?>>VLSI Technology</option>
<option value="Veterinary Medicine" <?php if($other_discipline=="Veterinary Medicine") echo 'selected="selected"'; ?>>Veterinary Medicine</option>
<option value="Veterinary Microbiology" <?php if($other_discipline=="Veterinary Microbiology") echo 'selected="selected"'; ?>>Veterinary Microbiology</option>
<option value="Veterinary Parasitology" <?php if($other_discipline=="Veterinary Parasitology") echo 'selected="selected"'; ?>>Veterinary Parasitology</option>
<option value="Veterinary Pharmacology and Toxicology" <?php if($other_discipline=="Veterinary Pharmacology and Toxicology") echo 'selected="selected"'; ?>>Veterinary Pharmacology and Toxicology</option>
<option value="Veterinary Physiology" <?php if($other_discipline=="Veterinary Physiology") echo 'selected="selected"'; ?>>Veterinary Physiology</option>
<option value="Veterinary Public Health" <?php if($other_discipline=="Veterinary Public Health") echo 'selected="selected"'; ?>>Veterinary Public Health</option>
<option value="Veterinary Science" <?php if($other_discipline=="Veterinary Science") echo 'selected="selected"'; ?>>Veterinary Science</option>
<option value="Veterinary Sciences" <?php if($other_discipline=="Veterinary Sciences") echo 'selected="selected"'; ?>>Veterinary Sciences</option>
<option value="Virology" <?php if($other_discipline=="Virology") echo 'selected="selected"'; ?>>Virology</option>
<option value="Visual Communication" <?php if($other_discipline=="Visual Communication") echo 'selected="selected"'; ?>>Visual Communication</option>
<option value="Visual Effects Filmmaking" <?php if($other_discipline=="Visual Effects Filmmaking") echo 'selected="selected"'; ?>>Visual Effects Filmmaking</option>
<option value="Visual Media" <?php if($other_discipline=="Visual Media") echo 'selected="selected"'; ?>>Visual Media</option>
<option value="Water Management" <?php if($other_discipline=="Water Management") echo 'selected="selected"'; ?>>Water Management</option>
<option value="Water Resources" <?php if($other_discipline=="Water Resources") echo 'selected="selected"'; ?>>Water Resources</option>
<option value="Welding Technology" <?php if($other_discipline=="Welding Technology") echo 'selected="selected"'; ?>>Welding Technology</option>
<option value="Wildlife Sciences" <?php if($other_discipline=="Wildlife Sciences") echo 'selected="selected"'; ?>>Wildlife Sciences</option>
<option value="Wireless Communication Technology" <?php if($other_discipline=="Wireless Communication Technology") echo 'selected="selected"'; ?>>Wireless Communication Technology</option>
<option value="Wood Science and Technology" <?php if($other_discipline=="Wood Science and Technology") echo 'selected="selected"'; ?>>Wood Science and Technology</option>
<option value="Yoga and Management" <?php if($other_discipline=="Yoga and Management") echo 'selected="selected"'; ?>>Yoga and Management</option>
<option value="Yoga" <?php if($other_discipline=="Yoga") echo 'selected="selected"'; ?>>Yoga</option>
<option value="Zoology" <?php if($other_discipline=="Zoology") echo 'selected="selected"'; ?>>Zoology</option>
<option value="OTHER" <?php if($other_discipline=="OTHER") echo 'selected="selected"'; ?>>OTHER</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>College Name</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="other_college_name" value="<?php echo $other_college_name; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>University Name</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="other_univeristy_name" value="<?php echo $other_univeristy_name; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Passing Year</b></label>
                            <select class="form-control" name="other_passing_year" disabled>
                                <option value="">Select</option>
                                <?php
                                $y = date("Y", strtotime("+8 HOURS"));
                                for ($year = 1950; $y >= $year; $y--) {
                                     if($other_passing_year==$y)
				echo "<option value = '".$y."' selected='selected'>".$y."</option>";
			else
			echo "<option value = '".$y."'>".$y."</option>";
                                }
                                ?>
                            </select>
                        </div>


                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Percentage/CGPA</b></label>
                            <input type="number" class="form-control" id="exampleAccount" name="other_percentage" value="<?php echo $other_percentage; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Out of</b></label>
                            <select class="form-control" name="other_out_of" disabled>
                                <option value=''>Select</option>
                                <option value="100" <?php if($other_out_of=="100") echo 'selected="selected"'; ?>>100</option>
<option value="10" <?php if($other_out_of=="10") echo 'selected="selected"'; ?>>10</option>
<option value="4" <?php if($other_out_of=="4") echo 'selected="selected"'; ?>>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Complete Status</b></label>
                            <select class="form-control" name="other_complete_status" disabled>
                                <option value=''>Select</option>
                                <option value="Completed" <?php if($other_complete_status=="Completed") echo 'selected="selected"'; ?>>Completed</option>
<option value="Ongoing" <?php if($other_complete_status=="Ongoing") echo 'selected="selected"'; ?>>Ongoing</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Notes If Any</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="other_notes_if_any" value="<?php echo $other_notes_if_any; ?>" disabled>
                        </div>
                    </div>


                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>


                    <h3>Work Experience (Most recent first) </h3>
                    <!-- <h4>Please enter the details in reverse chronological order</h4> -->

                    <!-- form complex example -->
                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                    <p></p>

                    <?php
                    for($i=0; $i < $cnt_work; $i++){ ?>

                    <h4 style="color:#A31260 ;"> Experience-<?php echo $i+1 ?> (if any, leave blank if not applicable) </h4>

                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>Work Experience Type</b></label>
                            <select class="form-control" name="work_1_experience_type" disabled>
                                <option value=''>Select</option>
                                <option value="Teaching" <?php if($work_1_experience_type_dc[$i]=="Teaching") echo 'selected="selected"'; ?>>Teaching</option>
<option value="Research" <?php if($work_1_experience_type_dc[$i]=="Research") echo 'selected="selected"'; ?>>Research</option>
<option value="Industry" <?php if($work_1_experience_type_dc[$i]=="Industry") echo 'selected="selected"'; ?>>Industry</option>
<option value="Others" <?php if($work_1_experience_type_dc[$i]=="Others") echo 'selected="selected"'; ?>>Others</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Organization Name</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="work_1_organization_name" value="<?php echo $work_1_organization_name_dc[$i]; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Position</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="work_1_position" value="<?php echo $work_1_position_dc[$i]; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>From Date</b></label>
                            <input type="date" class="form-control" id="exampleCtrl" name="work_1_from_date" value="<?php echo $work_1_from_date_dc[$i]; ?>" disabled>
                        </div>

                    </div>

                    <!-- <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />  -->
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>To Date</b></label>
                            <input type="date" class="form-control" id="exampleCtrl" name="work_1_to_date" value="<?php echo $work_1_to_date_dc[$i]; ?>" disabled>
                        </div>
                        
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Nature of Work</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="work_1_nature_of_work" value="<?php echo $work_1_nature_of_work_dc[$i]; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Current Job</b></label>
                            <select class="form-control" name="work_1_current_job" disabled>
                                <option value=''>Select</option>
                                <option value="Yes" <?php if($work_1_current_job_dc[$i]=="Yes") echo 'selected="selected"'; ?>>Yes</option>
<option value="No" <?php if($work_1_current_job_dc[$i]=="No") echo 'selected="selected"'; ?>>No</option>
                            </select>
                        </div>
                    </div>
                    
                    <p></p>

                    <?php } ?>


                   

                    <h4 style="color:#A31260 ;"> M.Tech Applying Details </h4>
                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                    <div class="form-row mt-3">
                        <div class="col-sm-4 pb-4">
                            <label for="exampleAccount"><b>Application Category*</b></label>
                            <select class="form-control" name="mtech_application_category" disabled>
                                <option value=''>Select</option>
                                <option value="Regular and Full-Time" <?php if($mtech_application_category=="Regular and Full-Time") echo 'selected="selected"'; ?>>Regular & Full-Time</option>
<option value="Sponosored and Full-Time" <?php if($mtech_application_category=="Sponosored and Full-Time") echo 'selected="selected"'; ?>>Sponosored & Full-Time</option>
<option value="Project-Staff" <?php if($mtech_application_category=="Project-Staff") echo 'selected="selected"'; ?>>Project-Staff</option>
<option value="Employed and Part-Time" <?php if($mtech_application_category=="Employed and Part-Time") echo 'selected="selected"'; ?>>Employed & Part-Time</option>
                            </select>
                        </div>
                        <div class="col-sm-4 pb-4">
                            <label for="exampleCtrl"><b>Department*</b></label>
                            <select class="form-control" name="mtech_department" disabled>
                                <option value=''>Select</option>
                                <option value="Computer Science and Engineering" <?php if($mtech_department=="Computer Science and Engineering") echo 'selected="selected"'; ?>>Computer Science & Engineering</option>
<option value="Civil Engineering" <?php if($mtech_department=="Civil Engineering") echo 'selected="selected"'; ?>>Civil Engineering</option>
<option value="Communication System Engineering" <?php if($mtech_department=="Communication System Engineering") echo 'selected="selected"'; ?>>Communication System Engineering</option>
<option value="Geotechnical Engineering" <?php if($mtech_department=="Geotechnical Engineering") echo 'selected="selected"'; ?>>Geotechnical Engineering</option>
<option value="Mathematics and Computing" <?php if($mtech_department=="Mathematics and Computing") echo 'selected="selected"'; ?>>Mathematics and Computing</option>
<option value="Mechanical Engineering" <?php if($mtech_department=="Mechanical Engineering") echo 'selected="selected"'; ?>>Mechanical Engineering</option>
<option value="Mechatronics" <?php if($mtech_department=="Mechatronics") echo 'selected="selected"'; ?>>Mechatronics</option>
<option value="Material Science and Engineering" <?php if($mtech_department=="Material Science and Engineering") echo 'selected="selected"'; ?>>Material Science & Engineering</option>
<option value="Power and Control" <?php if($mtech_department=="Power and Control") echo 'selected="selected"'; ?>>Power and Control</option>
<option value="Structural Engineering" <?php if($mtech_department=="Structural Engineering") echo 'selected="selected"'; ?>>Structural Engineering</option>
<option value="VLSI and Embeded Systems" <?php if($mtech_department=="VLSI and Embeded Systems") echo 'selected="selected"'; ?>>VLSI & Embeded Systems</option>
                            </select>
                        </div>
                        <div class="col-sm-4 pb-4">
                            <label for="exampleCtrl"><b>Is Your B.Tech from IIT*</b></label>
                            <select class="form-control" name="mtech_is_your_btech_from_iit" disabled>
							<option value=''>Select</option>
                               <option value="Yes" <?php if($mtech_is_your_btech_from_iit=="Yes") echo 'selected="selected"'; ?>>Yes</option>
<option value="No" <?php if($mtech_is_your_btech_from_iit=="No") echo 'selected="selected"'; ?>>No</option>
                            </select>
                        </div>

                    </div>
                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                    <p>
                    <h1>Gate exam info</h1><br>
                    If you are applying the following category :<br>
                    SPONSORED / PROJECT STAFF / PART-TIME category, then GATE score is not mandatory. <br>So please fill the following info in the boxes below.<br><br>

                    1. Registration No. (11 digits) : 10000000000<br>
                    2. Gate Score out of 1000 : 0<br>
                    3. Gate Rank : 0<br>
                    4. Gate coap registration no. : COAP00000000<br>
                    5. Gate Paper Code : Not Applicable (NA)<br>
                    6. Gate Valid From : 01-01-2000<br>
                    7. Valid Upto : 01-01-2000
                    </p>
                    <h4>Important Info:</h4>
                    <h6>1. If your gate registration number is CS20S61226031 then enter ONLY 20S61226031 </h6>
                    <h6>2. COAP Format: COAP12345678</h6>
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleAccount"><b>GATE Registration No.*</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" pattern="^[1-9][0-9][a-zA-Z0-9]{9}$" title="If your gate registration number is CS20S61226031 then enter ONLY 20S61226031" placeholder="Registration No." name="gate_registration_no" value="<?php echo $gate_registration_no; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Gate Paper Code*</b></label>
                            <select class="form-control" name="gate_paper_code" disabled>
                                <option value="">Select</option>
                                <option value="Aerospace Engineering (AE)" <?php if($gate_paper_code=="Aerospace Engineering (AE)") echo 'selected="selected"'; ?>>Aerospace Engineering (AE)</option>
<option value="Agricultural Engineering (AG)" <?php if($gate_paper_code=="Agricultural Engineering (AG)") echo 'selected="selected"'; ?>>Agricultural Engineering (AG)</option>
<option value="ArchitectureandPlanning (AR)" <?php if($gate_paper_code=="ArchitectureandPlanning (AR)") echo 'selected="selected"'; ?>>ArchitectureandPlanning (AR)</option>
<option value="Biomedical (BM)" <?php if($gate_paper_code=="Biomedical (BM)") echo 'selected="selected"'; ?>>Biomedical (BM)</option>
<option value="Biotechnology (BT)" <?php if($gate_paper_code=="Biotechnology (BT)") echo 'selected="selected"'; ?>>Biotechnology (BT)</option>
<option value="Chemical Engineering (CH)" <?php if($gate_paper_code=="Chemical Engineering (CH)") echo 'selected="selected"'; ?>>Chemical Engineering (CH)</option>
<option value="Chemistry (CY)" <?php if($gate_paper_code=="Chemistry (CY)") echo 'selected="selected"'; ?>>Chemistry (CY)</option>
<option value="Civil Engineering (CE)" <?php if($gate_paper_code=="Civil Engineering (CE)") echo 'selected="selected"'; ?>>Civil Engineering (CE)</option>
<option value="Computer Science and Information Technology (CS)" <?php if($gate_paper_code=="Computer Science and Information Technology (CS)") echo 'selected="selected"'; ?>>Computer Science and Information Technology (CS)</option>
<option value="EcologyandEvolution (EY)" <?php if($gate_paper_code=="EcologyandEvolution (EY)") echo 'selected="selected"'; ?>>EcologyandEvolution (EY)</option>
<option value="Electrical Engineering (EE)" <?php if($gate_paper_code=="Electrical Engineering (EE)") echo 'selected="selected"'; ?>>Electrical Engineering (EE)</option>
<option value="Electronics and Communication Engineering (EC)" <?php if($gate_paper_code=="Electronics and Communication Engineering (EC)") echo 'selected="selected"'; ?>>Electronics and Communication Engineering (EC)</option>
<option value="Engineering Sciences (XE)" <?php if($gate_paper_code=="Engineering Sciences (XE)") echo 'selected="selected"'; ?>>Engineering Sciences (XE)</option>
<option value="Environmental Science and Engineering (ES)" <?php if($gate_paper_code=="Environmental Science and Engineering (ES)") echo 'selected="selected"'; ?>>Environmental Science and Engineering (ES)</option>
<option value="Geomatics Engineering (GE)" <?php if($gate_paper_code=="Geomatics Engineering (GE)") echo 'selected="selected"'; ?>>Geomatics Engineering (GE)</option>
<option value="Geology and Geophysics (GG)" <?php if($gate_paper_code=="Geology and Geophysics (GG)") echo 'selected="selected"'; ?>>Geology and Geophysics (GG)</option>
<option value="Humanities and Social Sciences (XH)" <?php if($gate_paper_code=="Humanities and Social Sciences (XH)") echo 'selected="selected"'; ?>>Humanities and Social Sciences (XH)</option>
<option value="Instrumentation Engineering (IN)" <?php if($gate_paper_code=="Instrumentation Engineering (IN)") echo 'selected="selected"'; ?>>Instrumentation Engineering (IN)</option>
<option value="Life Sciences (XL)" <?php if($gate_paper_code=="Life Sciences (XL)") echo 'selected="selected"'; ?>>Life Sciences (XL)</option>
<option value="Mathematics (MA)" <?php if($gate_paper_code=="Mathematics (MA)") echo 'selected="selected"'; ?>>Mathematics (MA)</option>
<option value="Mechanical Engineering (ME)" <?php if($gate_paper_code=="Mechanical Engineering (ME)") echo 'selected="selected"'; ?>>Mechanical Engineering (ME)</option>
<option value="Metallurgical Engineering (MT)" <?php if($gate_paper_code=="Metallurgical Engineering (MT)") echo 'selected="selected"'; ?>>Metallurgical Engineering (MT)</option>
<option value="Mining Engineering (MN)" <?php if($gate_paper_code=="Mining Engineering (MN)") echo 'selected="selected"'; ?>>Mining Engineering (MN)</option>
<option value="Petroleum Engineering (PE)" <?php if($gate_paper_code=="Petroleum Engineering (PE)") echo 'selected="selected"'; ?>>Petroleum Engineering (PE)</option>
<option value="Physics (PH)" <?php if($gate_paper_code=="Physics (PH)") echo 'selected="selected"'; ?>>Physics (PH)</option>
<option value="Production and Industrial Engineering (PI)" <?php if($gate_paper_code=="Production and Industrial Engineering (PI)") echo 'selected="selected"'; ?>>Production and Industrial Engineering (PI)</option>
<option value="Statistics (ST)" <?php if($gate_paper_code=="Statistics (ST)") echo 'selected="selected"'; ?>>Statistics (ST)</option>
<option value="Textile Engineering and Fiber Science (TF)" <?php if($gate_paper_code=="Textile Engineering and Fiber Science (TF)") echo 'selected="selected"'; ?>>Textile Engineering and Fiber Science (TF)</option>
<option value="Not Applicable (NA)" <?php if($gate_paper_code=="Not Applicable (NA)") echo 'selected="selected"'; ?>>Not Applicable (NA)</option>

                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>COAP registration no.*</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" name="gate_coap_registration_no" value="<?php echo $gate_coap_registration_no; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Gate Score out of 1000*</b></label>
                            <input type="number" class="form-control" id="exampleCtrl" name="gate_score_out_of_1000" value="<?php echo $gate_score_out_of_1000; ?>" disabled>
                        </div>

                    </div>

                    <!-- <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />  -->
                    <div class="form-row mt-4">
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Gate Rank*</b></label>
                            <input type="number" class="form-control" id="exampleCtrl" name="gate_rank" value="<?php echo $gate_rank; ?>" disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Gate Valid From*</b></label>
                            <input type="date" class="form-control" id="exampleCtrl" name="gate_valid_from" value="<?php echo $gate_valid_from; ?>"disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Valid Upto*</b></label>
                            <input type="date" class="form-control" id="exampleCtrl" name="gate_valid_upto" value="<?php echo $gate_valid_upto; ?>"disabled>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleCtrl"><b>Notes If Any</b></label>
                            <input type="text" class="form-control" id="exampleCtrl" value="<?php echo $gate_notes_if_any; ?>" name="gate_notes_if_any" disabled>
                        </div>

                    </div>
                    <hr style="width: 100%; color: black; height: 1px; background-color:blue;" />
                    </hr>
                    <p>
                    <h1>Payment info</h1>

                    Go to Payment and put the Payment Reference No. after successful Payment!!<br>
                    Payment Amount<br><br>

                    1. General/EWS/OBC-NCL (Male): Rs. 300<br>
                    2. General/EWS/OBC-NCL (Female): Rs. 150<br>
                    3. SC/ST/PwD (Male): Rs. 150<br>
                    4. SC/ST/PwD (Female): Rs. 150<br>
                    </p>
                    <p>Link for payment: <a href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm" target="_blank">https://www.onlinesbi.sbi/sbicollect/icollecthome.htm</a></p>
                    <div class="form-row mt-3">
                        <div class="col-sm-4 pb-4">
                            <label for="exampleAccount"><b>Payment Method*</b></label>
                            <select class="form-control" name="payment_method" disabled>
                                <option value=''>Select</option>
                                <option value="SBI Collect" <?php if($payment_method=="SBI Collect") echo 'selected="selected"'; ?>>SBI Collect</option>
                            </select>
                        </div>
                        <div class="col-sm-4 pb-4">
                            <label for="exampleCtrl"><b>Payment Reference Number*</b></label>
                            <input type="text" class="form-control" id="usr" name="payment_reference_number" value="<?php echo $payment_reference_number; ?>"disabled>
                        </div>
                        <div class="col-sm-4 pb-4">
                            <label for="exampleCtrl"><b>Amount*</b></label>
                            <select class="form-control" name="payment_amount" disabled>
                                <option value="">Select</option>
                               <option value="150" <?php if($payment_amount=="150") echo 'selected="selected"'; ?>>150</option>
<option value="300" <?php if($payment_amount=="300") echo 'selected="selected"'; ?>>300</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <center>
                            <p>
                            <h1>Decalaration:</h1><br>
                            You can't edit this form later!!<br></p>
                        </center>

                        <label><input type="checkbox" checked disabled> I hereby declare that the entries made in this application form are correct to the best of my knowledge and belief. If selected for admission, I promise to abide by the rules and regulations of the Institute. The Institute shall have the right to take any action it deems fit, including expulsion, against me at any time after my admission, if it is found that any information furnished by me is incorrect. I note that the decision of the Institute is final in regard to selection for admission and assignment to a particular department and field of study. </label>
                    </div>
                    <br>

                    <center><button type="submit" class="btn btn-primary" disabled>Submit</button></center>
                </div>
    </form>
    </div>

    </div>
    <!--/row-->

    <br><br><br><br>

    </div>
    <!--/col-->
    </div>
    <!--/row-->

    </div>
    </div>
    </div>
    </div>
    <!--/container-->

</body>

</html>
<?php
}
?>


<script type="text/javascript">
    $(function() {
        $('#demo-form').parsley();
    });
</script>