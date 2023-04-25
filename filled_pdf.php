<?php 
error_reporting(E_ALL ^ E_WARNING); 
error_reporting(0);
include_once('dbconn.php');
session_start();


 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

error_reporting(E_ERROR | E_PARSE);

if($_GET["app_id"]!=null)
{
    // echo "ji";
$app_id=$_GET["app_id"];
$sql   = "SELECT * FROM `mtp_application_info` WHERE `app_id`='$app_id'  LIMIT 1";
        $query = $conn->query($sql);
                $row = $query->fetch_assoc();
                        
$id_number = $row['id_number'];
$personal_title = $row['personal_title'];
$personal_full_name	= $row['personal_first_name'].$row['personal_middle_name'].$row['personal_last_name'];
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
$academic_exam_passed = $row['academic_exam_passed'];
$academic_institute = $row['academic_institute'];
$academic_degree_name = $row['academic_degree_name'];
$academic_subject = $row['academic_subject'];
$academic_passing_year = $row['academic_passing_year'];
$academic_cgpa = $row['academic_cgpa'];
$academic_out_of = $row['$academic_out_of'];
$academic_complete_status = $row['academic_complete_status'];
$academic_notes = $row['academic_notes'];

$experience_admin_checked = $row['experience_admin_checked'];
$experience_admin_summary = $row['experience_admin_summary'];
$experience_indus_summary = $row['experience_indus_summary'];
$experience_industrial_checked = $row['experience_industrial_checked'];
$experience_thesis_checked = $row['experience_thesis_checked'];
$experience_thesis_mtech_indv= $row['experience_thesis_mtech_indv'];
$experience_thesis_mtech_jnt= $row['experience_thesis_mtech_jnt'];
$experience_thesis_ms_indv= $row['experience_thesis_ms_indv'];
$experience_thesis_ms_jnt= $row['experience_thesis_ms_jnt'];
$experience_thesis_msc_indv= $row['experience_thesis_msc_indv'];
$experience_thesis_msc_jnt= $row['experience_thesis_msc_jnt'];
$experience_thesis_phd_indv= $row['experience_thesis_phd_indv'];
$experience_thesis_phd_jnt= $row['experience_thesis_phd_jnt'];
$experience_history_checked = $row['experience_history_checked'];
$experience_history_designation = $row['experience_history_designation'];
$experience_history_organisation = $row['experience_history_organisation'];
$experience_history_govt = $row['experience_history_govt'];
$experience_history_department = $row['experience_history_department'];
$experience_history_roles = $row['experience_history_roles'];
$experience_history_emoluments = $row['experience_history_emoluments'];

$publication_author0 = $row['publication_author0'];
$publication_author1 = $row['publication_author1'];
$publication_author2 = $row['publication_author2'];
$publication_author3 = $row['publication_author3'];
$publication_author4 = $row['publication_author4'];

$publication_title0 = $row['publication_title0'];
$publication_title1 = $row['publication_title1'];
$publication_title2 = $row['publication_title2'];
$publication_title3 = $row['publication_title3'];
$publication_title4 = $row['publication_title4'];

$publication_journal_conference0 = $row['publication_journal_conference0'];
$publication_journal_conference1 = $row['publication_journal_conference1'];
$publication_journal_conference2 = $row['publication_journal_conference2'];
$publication_journal_conference3 = $row['publication_journal_conference3'];
$publication_journal_conference4 = $row['publication_journal_conference4'];

$publication_year0 = $row['publication_year0'];
$publication_year1 = $row['publication_year1'];
$publication_year2 = $row['publication_year2'];
$publication_year3 = $row['publication_year3'];
$publication_year4 = $row['publication_year4'];

$publication_page0 = $row['publication_page0'];
$publication_page1 = $row['publication_page1'];
$publication_page2 = $row['publication_page2'];
$publication_page3 = $row['publication_page3'];
$publication_page4 = $row['publication_page4'];

$publication_citation0 = $row['publication_citation0'];
$publication_citation1 = $row['publication_citation1'];
$publication_citation2 = $row['publication_citation2'];
$publication_citation3 = $row['publication_citation3'];
$publication_citation4 = $row['publication_citation4'];

$published_paper_indian = $row['published_paper_indian'];
$published_paper_international = $row['published_paper_indian'];
$conference_paper_indian = $row['conference_paper_indian'];
$conference_paper_international = $row['conference_paper_international'];

$publication_book_chapter = $row['publication_book_chapter'];
$publication_paper_listing = $row['publication_paper_listing'];
$publication_citations = $row['publication_citations'];
$publication_h_index = $row['publication_h_index'];
$publication_citations_source = $row['publication_citations_source'];
$publication_h_index_source = $row['publication_h_index_source'];


$referee_name_dc	 = unserialize(base64_decode($row['referee_name']));
$referee_designation_dc	 = unserialize(base64_decode(($row['referee_designation'])));
$referee_organisation_dc	 = unserialize(base64_decode(($row['referee_organisation'])));
$referee_address_dc	 = unserialize(base64_decode($row['referee_address']));
$referee_country_dc	 = unserialize(base64_decode($row['referee_country']));
$referee_state_dc	 = unserialize(base64_decode($row['referee_state']));
$referee_pincode_dc	 =  unserialize(base64_decode($row['referee_pincode']));
$referee_city_dc	 =  unserialize(base64_decode($row['referee_city']));
$referee_email_dc	 =  unserialize(base64_decode($row['referee_email']));
$referee_contact_dc	 =  unserialize(base64_decode($row['referee_contact']));

$cnt_referee = count($referee_address_dc);


$academic_exam_passed_dc = unserialize(base64_decode($academic_exam_passed));
$academic_degree_name_dc = unserialize(base64_decode($academic_degree_name));
$academic_subject_dc = unserialize(base64_decode($academic_subject));
$academic_institute_dc = unserialize(base64_decode($academic_institute));
$academic_cgpa_dc = unserialize(base64_decode($academic_institute));
$academic_out_of_dc = unserialize(base64_decode($academic_out_of));
$academic_notes_dc = unserialize(base64_decode($academic_notes));

$cnt_academic = count($academic_exam_passed_dc);
// echo $cnt_academic;


$experience_history_designation_dc = unserialize(base64_decode($row['experience_history_designation']));
$experience_history_organisation_dc = unserialize(base64_decode($row['experience_history_organisation']));
$experience_history_govt_dc = unserialize(base64_decode($row['experience_history_govt']));
$experience_history_department_dc = unserialize(base64_decode($row['experience_history_department']));
$experience_history_roles_dc = unserialize(base64_decode($row['experience_history_roles']));
$experience_history_emoluments_dc = unserialize(base64_decode($row['experience_history_emoluments']));

$cnt_experience_history = count($experience_history_designation_dc);


$others_awards_dc = unserialize(base64_decode($row['others_awards']));
$others_awards_year_dc = unserialize(base64_decode($row['others_awards_year']));
$others_awards_agency_dc = unserialize(base64_decode($row['others_awards_agency']));

$cnt_others = count($others_awards_agency_dc);

$others_technology_checked = $row['others_technology_checked'];
$others_technology_developer = $row['others_technology_developer'];
$others_technology_description = $row['others_technology_description'];
$others_technology_completion = $row['others_technology_completion'];

$others_patent_checked = $row['others_patent_checked'];
$others_patent_filed_indian = $row['others_patent_filed_indian'];
$others_patent_filed_international = $row['others_patent_filed_international'];
$others_patent_granted_indian = $row['others_patent_granted_indian'];
$others_patent_granted_international = $row['others_patent_granted_international'];

$others_coverletter_checked = $row['others_coverletter_checked'];
$others_coverletter_description = $row['others_coverletter_description'];

$others_research_description= $row['others_research_description'];

$others_interest_description= $row['others_interest_description'];

$others_resume_checked= $row['others_resume_checked'];
$others_resume_summary= $row['others_resume_summary'];






$work_1_experience_type_dc = unserialize(base64_decode($work_1_experience_type));
$work_1_organization_name_dc = unserialize(base64_decode($work_1_organization_name));
$work_1_position_dc = unserialize(base64_decode($work_1_position));
$work_1_from_date_dc = unserialize(base64_decode($work_1_from_date));
$work_1_to_date_dc = unserialize(base64_decode($work_1_to_date));
$work_1_nature_of_work_dc = unserialize(base64_decode($work_1_nature_of_work));
$work_1_current_job_dc = unserialize(base64_decode($work_1_current_job));

$cnt_work = count($work_1_experience_type_dc);

// ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 session_start();
ini_set('max_execution_time', '3000');


include(dirname(__FILE__).DIRECTORY_SEPARATOR.'library/tcpdf.php');
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'variables.php');

class MYPDF extends TCPDF {
    public function Header() {
        if ($this->page > 1){
            return;
        }
        $image_file = 'images/iitp.png';
        $this->Image($image_file, 3, 5, 20, '', 'PNG', '', 'N', false, 300, 'L', false, false, 0, false, false, false);

        $image_file = 'images/iitp_header.png';
        $this->Image($image_file, 30, 5, 100, '', 'PNG', '', 'N', false, 300, 'R', false, false, 0, false, false, false);
    }
}



function change_format($s) {
	if($s == '0000-01-01') {
		return "NA";
	}
	if($s == '2000-01-01') {
		return "NA";
	}
	if(strlen($s) != 10)
		return $s;
    $year = substr($s, 0, 4);
    $month = substr($s, 5, 2);
    $day = substr($s, 8, 2);
	$monthNum  = (int)$month;
	$monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
	$monthName = substr($monthName, 0, 3);
    return $day."-".$monthName."-".$year;
}

function format_name($s) {
    $arrs = explode(" ", $s);
    $concat_name = "";
    for($i = 0; $i < sizeof($arrs); $i++) {
        $concat_name = $concat_name.$arrs[$i];
    }
    return $concat_name;
}

function add_underscore($s) {
	$arr = explode(" ", $s);
	$res = "";
	for($i = 0; $i < sizeof($arr); $i++) {
		if($i == 0)
			$res = $arr[$i];
		else if($arr[$i] == '-') 
			$res = $res.$arr[$i];
		else if((strlen($res) - 1) >= 0 && $res[strlen($res) - 1] == '-') 
			$res = $res.$arr[$i];
		else
			$res = $res."_".$arr[$i];
	}
	return $res;
}

    
    
    ob_start ();
    $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
    
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('IITP');
    $pdf->SetTitle('MTech APPLICATION FORM');
    $pdf->SetSubject('MTech APPLICATION FORM');
    $pdf->SetKeywords('MTech, PDF, APPLICATION, FORM');
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    $pdf->setPrintFooter(false);
    
    
    $margin_left = 20;
    $margin_right = 6;
    $margin_top = 6;
    $margin_bottom = 5;
    $pdf->SetMargins($margin_left, $margin_top, $margin_right);
    $pdf->SetHeaderMargin($margin_top);
    $pdf->SetAutoPageBreak(TRUE, $margin_bottom);
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    $pdf->SetFont('times', '', 11);
    
    
    $pdf->AddPage();
    $pdf->setCellPaddings(1.5, 0.7, 0.8, 0.5);
    $pdf->Ln(25);
	
    $available_width = ($pdf->getPageWidth()-26);
    $html = '<b>For Office Use: Sl. No.: </b>IITP/ACAD/MTech/2022/1___';
    $pdf -> MultiCell(0.5 * $available_width, 7,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>For Dept. Use: App. No.: </b>'.$id_number;
    $pdf -> MultiCell(0.5 * $available_width, 7,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b><h3>Personal Details</h3></b>';
    $pdf -> MultiCell($available_width, 0,   $html,   1,   'C',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    
    $start_position_for_photograph = $pdf->GetY();
    $html = '<b>1.  Title: </b>'. $personal_title;
    $pdf -> MultiCell(0.15 * $available_width, 0,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>2.  Full Name of the Applicant : </b>'. $personal_full_name;
    $pdf -> MultiCell(0.85 * $available_width, 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    // $html = '<b>2.  Father’s/Guardian’s/Spouse’s Name : </b>'.$guardianOrSpouseName;
    // $pdf -> MultiCell(0.85 * $available_width, 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = '<b>3.  DOB  : </b>'.change_format($personal_date_of_birth);
    $pdf -> MultiCell(0.4 * 0.85 * $available_width, 0,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = '<b>4.  Nationality : </b>'.$personal_nationality;
    $pdf -> MultiCell(0.3 * 0.85 * $available_width, 0,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = '<b>5.  PIN : </b>'.$personal_pincode;
    $pdf -> MultiCell(0.3 * 0.85 * $available_width, 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $pdf->SetFont('times', '', 10);
    $html = '<b>6.  Gender : </b>'.$personal_gender;
    $pdf -> MultiCell(0.22 * 0.85 * $available_width, 0,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $birthCategory = substr($personal_birth_category, 0, 7);
    $html = '<b>7.  Category : </b>'.$birthCategory;
    $pdf -> MultiCell(0.25 * 0.85 * $available_width, 0,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    // $html = '<b>8. PwD : </b>'.$pwdStatus;
    $pdf -> MultiCell(0.18 * 0.85 * $available_width, 0,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    

    $html = '<b>9.  Marital Status : </b>'.$personal_marital_status;
    $pdf -> MultiCell((1.0-0.25-0.22) * 0.85 * $available_width, 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $end_position_for_photograph = $pdf->GetY();
    $pdf->SetFont('times', '', 11);
    $pdf->setJPEGQuality(75);
    if(strlen($personal_gender) == 4) $image_dir = 'images/male.jpg';
    else $image_dir = 'images/female.jpg';
    if(file_exists("MTech-2022/".$mtech_department."/".$mtech_application_category."/".format_name($personal_full_name)."_".$id_number."/".$id_number."_photo.jpg"))
        $image_dir = "MTech-2022/".$mtech_department."/".$mtech_application_category."/".format_name($personal_full_name)."_".$id_number."/".$id_number."_photo.jpg";
    // $info = getimagesize($image_dir);
    // if($info[2] != IMAGETYPE_JPEG){
    //     if(strlen($personal_gender) == 4) $image_dir = 'images/male.jpg';
    //     else $image_dir = 'images/female.jpg';
    // }
    $pdf->Image($image_dir, 0.85*$available_width + $margin_left, $start_position_for_photograph, 0.15*$available_width, ($end_position_for_photograph-$start_position_for_photograph), 'JPG', '', '', false, 300, '', false, false, 1, false, false, false);
    
    $pdf->SetFont('times', '', 10);
    $html = '<b>10(a).  Contact Address : </b>'.$personal_address;
    $pdf -> MultiCell($available_width, 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $pdf->SetFont('times', '', 11);

    $html = '<b>10(b). Mob No : </b>'.$personal_contact;
    $pdf -> MultiCell($available_width * 0.33, 10,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = '<b>10(c). Email : </b>'.$personal_email;
    $pdf -> MultiCell($available_width * 0.67, 10,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = '<b>11.  School/Department at which the candidate seeks Teaching is : </b>'.$mtech_department;
    $pdf -> MultiCell($available_width , 10,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = '<b>13.  Address: </b>'.$personal_address;
    $pdf -> MultiCell($available_width , 10,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $html = '<b>14.  State: </b>'.$personal_state;
    $pdf -> MultiCell($available_width , 10,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $html = '<b>15.  Nationality : </b>'.$personal_nationality;
    $pdf -> MultiCell($available_width , 10,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $html = '<b>13.  Pincode: </b>'.$personal_pincode;
    $pdf -> MultiCell($available_width , 10,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);


    $height = 17;
    $html = '<b><h3>  Experience Details</h3></b>';
    $pdf -> MultiCell($available_width  , $height/2,   $html,   1,   'C',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    if($experience_history_checked === 1) {
    $html = '<b>13.  Employment History</b>';
    $pdf -> MultiCell($available_width  , $height / 2.4,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = '<b>Designation</b>';
    $pdf -> MultiCell($available_width * 0.2 , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = '<b>Organisation</b>';
    $pdf -> MultiCell($available_width * 0.13 , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = '<b>Govt of India?</b>';
    $pdf -> MultiCell($available_width * 0.22 , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = '<b>Department</b>';
    $pdf -> MultiCell($available_width * 0.15 , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = '<b>Roles</b>';
    $pdf -> MultiCell($available_width * 0.15 , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = '<b>Pay</b>';
    $pdf -> MultiCell($available_width * 0.15 , $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    for($x=0; $x<$cnt_experience_history; $x++){
    $html = $experience_history_designation_dc[$x];
    $pdf -> MultiCell($available_width * 0.2 , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = $experience_history_organisation_dc[$x];
    $pdf -> MultiCell($available_width * 0.13 , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = $experience_history_govt_dc[$x];
    $pdf -> MultiCell($available_width * 0.22 , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = $experience_history_department_dc[$x];
    $pdf -> MultiCell($available_width * 0.15 , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = $experience_history_roles_dc[$x];
    $pdf -> MultiCell($available_width * 0.15 , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = $experience_history_emoluments_dc[$x];
    $pdf -> MultiCell($available_width * 0.15 , $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    }
}else{
    $html = '<b>Employment History : Not Filled</b>';
    $pdf -> MultiCell($available_width  , $height / 2.4,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

}

if($experience_admin_checked === '1') {
    $html = '<b> Administrative Experience : Filled </b>';
    $pdf -> MultiCell($available_width , 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '  &nbsp; &nbsp; &nbsp; Summary : '.$experience_admin_summary;
    $pdf -> MultiCell($available_width , 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    }else{
        $html = '<b>  Administrative Experience : Not Filled </b>';
        $pdf -> MultiCell($available_width , 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    }
    
    if($experience_industrial_checked === '1') {
        $html = '<b>  Industrial Experience : Filled </b>';
        $pdf -> MultiCell($available_width , 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = '<b>     Summary </b>'.$experience_indus_summary;
        $pdf -> MultiCell($available_width , 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        }else{
            $html = '<b>  Industrial Experience : Not Filled </b>';
            $pdf -> MultiCell($available_width , 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        }
    

    $height = 16;

	
	
    $html = '<b><h3> Academic Details</h3></b>';
    $pdf -> MultiCell($available_width  , $height,   $html,   1,   'C',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $pdf->SetFont('times', '', 10);
    if(strlen($tenth_equi_exam_passed) > 0) {
        $html = '<b>Degree1</b>';
        $pdf -> MultiCell($available_width*0.10  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $tenth_equi_exam_passed;
        $pdf -> MultiCell($available_width*0.40  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $tenth_equi_percentage."/".$tenth_equi_out_of;
        $pdf -> MultiCell($available_width/4  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $tenth_equi_passing_year." (".$tenth_equi_complete_status.")";
        $pdf -> MultiCell($available_width/4  , $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    }
    if(strlen($inter_equi_exam_passed) > 0) {
        $html = '<b>Degree2</b>';
        $pdf -> MultiCell($available_width*0.1  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $inter_equi_exam_passed;
        $pdf -> MultiCell($available_width*0.4  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $inter_equi_percentage."/".$inter_equi_out_of;
        $pdf -> MultiCell($available_width/4  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $inter_equi_passing_year." (".$inter_equi_complete_status.")";
        $pdf -> MultiCell($available_width/4  , $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);    
    }

    if(strlen($ug_degree_name) > 0) {
        $html = '<b>Degree3</b>';
        $pdf -> MultiCell($available_width*0.1  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $ug_degree_name." in ".$ug_discipline;
        $html = substr($html, 0, 35);
        $pdf -> MultiCell($available_width*0.4  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $ug_percentage."/".$ug_out_of;
        $pdf -> MultiCell($available_width/4  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $ug_passing_year." (".$ug_complete_status.")";
        $pdf -> MultiCell($available_width/4  , $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    }
    if(strlen($pg_1_pg_degree_name) > 0) {
        $html = '<b>Degree4</b>';
        $pdf -> MultiCell($available_width*0.1  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $pg_1_pg_degree_name." in ".$pg_1_discipline;
        $html = substr($html, 0, 35);
        $pdf -> MultiCell($available_width*0.4  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $pg_1_percentage."/".$pg_1_out_of;
        $pdf -> MultiCell($available_width/4  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $pg_1_passing_year." (".$pg_1_complete_status.")";
        $pdf -> MultiCell($available_width/4  , $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    }
    if(strlen($pg_2_pg_degree_name) > 0) {
        $html = '<b>Degree5</b>';
        $pdf -> MultiCell($available_width*0.1  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $pg_2_pg_degree_name." in ".$pg_2_discipline;
        $html = substr($html, 0, 35);
        $pdf -> MultiCell($available_width*0.4  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $pg_2_percentage."/".$pg_2_out_of;
        $pdf -> MultiCell($available_width/4  , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $html = $pg_2_passing_year." (".$pg_2_complete_status.")";
        $pdf -> MultiCell($available_width/4  , $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    }
    // $pdf->SetFont('times', '', 11);
    // $html = '<b>17. Professional Experience</b>';
    // $pdf -> MultiCell($available_width, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    // $html = '<b>Name of Organization</b>';
    // $pdf -> MultiCell($available_width*0.6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    // $html = '<b>Period (From - To)</b>';
    // $pdf -> MultiCell($available_width*0.4, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    // $pdf->SetFont('times', '', 9);
    // $experience = "";

    // for($x=0; $x<$cnt_work; $x++){
    // if($work_1_from_date_dc[$x] != "0000-01-01" && strlen($work_1_from_date_dc[$x]) > 0) {
    //     $experience = "(".change_format($work_1_from_date_dc[$x])." - ".change_format($work_1_to_date_dc[$x]).") ".'<b>Current job : </b>'.$work_1_current_job_dc[$x];
    // }
    // if(strlen($work_1_organization_name_dc[$x]) >= 0) {
    //     $pdf->SetFont('times', '', 9);
    //     $html = substr($work_1_organization_name_dc[$x], 0, 55);
    //     $pdf -> MultiCell($available_width*0.6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    //     $pdf->SetFont('times', '', 10);
    //     $html = $experience;
    //     $pdf -> MultiCell($available_width*0.4, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        
    // }
    // $experience = "";
    // if($work_2_from_date != "0000-01-01" && strlen($work_2_from_date) > 0) {
    //     $experience = "(".change_format($work_2_from_date)." - ".change_format($work_2_to_date).") ".'<b>Current job : </b>'.$work_2_current_job;
    // }
    // if(strlen($work_2_organization_name) > 0) {
    //     $pdf->SetFont('times', '', 9);
    //     $html = substr($work_2_organization_name, 0, 55);
    //     $pdf -> MultiCell($available_width*0.6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    //     $pdf->SetFont('times', '', 10);
    //     $html = $experience;
    //     $pdf -> MultiCell($available_width*0.4, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        
    // }
    // $experience = "";
    // if($work_3_from_date != "0000-01-01" && strlen($work_3_from_date) > 0) {
    //     $experience = "(".change_format($work_3_from_date)." - ".change_format($work_3_to_date).") ".'<b>Current job : </b>'.$work_3_current_job;
    // }
    // if(strlen($work_3_organization_name) > 0) {
    //     $pdf->SetFont('times', '', 9);
    //     $html = substr($work_3_organization_name, 0, 55);
    //     $pdf -> MultiCell($available_width*0.6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    //     $pdf->SetFont('times', '', 10);
    //     $html = $experience;
    //     $pdf -> MultiCell($available_width*0.4, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        
    // }
    $pdf->SetFont('times', '', 11);
    
    $pdf->SetMargins($margin_left, $margin_top*2, $margin_right);
    $height = 17;
    $html = '<b>18. Details of Academic Record (Attach attested copies of certificates, mark sheets, etc)</b>';
    $pdf -> MultiCell($available_width  , $height / 2.4,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '';
    $pdf -> MultiCell($available_width * 0.1 ,$height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>Exam Passed</b>';
    $pdf -> MultiCell($available_width * 0.14, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>Institute</b>';
    $pdf -> MultiCell($available_width * 0.2 , $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>Subject</b>';
    $pdf -> MultiCell($available_width * 0.2, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>Degree</b>';
    $pdf -> MultiCell($available_width * 0.1, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>CGPA</b>';
    $pdf -> MultiCell($available_width * 0.08, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>Out Of</b>';
    $pdf -> MultiCell($available_width * 0.06, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>Notes</b>';
    $pdf -> MultiCell($available_width * 0.12, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    
    $pdf->SetFont('times', '', 9);
    $html = '<b>Degree1</b>';
    for($x=0; $x<$cnt_academic; $x++){
    $pdf -> MultiCell($available_width*0.1, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $pdf -> MultiCell($available_width*0.14, $height, substr(($academic_exam_passed_dc[$x]), 0, 40), 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width*0.2 , $height, substr(($academic_institute_dc[$x]), 0, 40), 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width*0.2 , $height, substr(($academic_subject_dc[$x]), 0, 40), 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width*0.1 , $height, ($academic_degree_name_dc[$x]), 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width*0.08 , $height, ($academic_cgpa_dc[$x]), 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width*0.06 , $height, ($academic_out_of_dc[$x]), 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width*0.12 , $height, ($academic_notes_dc[$x]), 1, 'L', 0, 1, '', '', true);
    }

    // if($experience_admin_checked === '1') {
    // $html = '<b> Administrative Experience : Filled </b>';
    // $pdf -> MultiCell($available_width , 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    // $html = '  &nbsp; &nbsp; &nbsp; Summary : '.$experience_admin_summary;
    // $pdf -> MultiCell($available_width , 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    // }else{
    //     $html = '<b>  Administrative Experience : Not Filled </b>';
    //     $pdf -> MultiCell($available_width , 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    // }
    
    // if($experience_industrial_checked === '1') {
    //     $html = '<b>  Industrial Experience : Filled </b>';
    //     $pdf -> MultiCell($available_width , 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    //     $html = '<b>     Summary </b>'.$experience_indus_summary;
    //     $pdf -> MultiCell($available_width , 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    //     }else{
    //         $html = '<b>  Industrial Experience : Not Filled </b>';
    //         $pdf -> MultiCell($available_width , 0,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    //     }

    // $html = '<b>Degree</b>';
    // $pdf -> MultiCell($available_width * 0.5, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    // $html = '<b>Degree</b>';
    // $pdf -> MultiCell($available_width * 0.5, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    // $html = '<b>Degree2</b>';
    // $pdf -> MultiCell($available_width*0.1, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    // $pdf -> MultiCell($available_width*0.14, $height, substr(($inter_equi_exam_passed), 0, 40), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.2 , $height, substr(($inter_equi_school_name), 0, 40), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.2 , $height, substr(($inter_equi_board_name), 0, 40), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.1 , $height, ($inter_equi_passing_year), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.08 , $height, ($inter_equi_percentage), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.06 , $height, ($inter_equi_out_of), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.12 , $height, ($inter_equi_complete_status), 1, 'L', 0, 1, '', '', true);
    
    // $html = '<b>Degree3</b>';
    // $pdf -> MultiCell($available_width*0.1, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    // if(strlen($ug_degree_name) > 0)$html = $ug_degree_name." in ".$ug_discipline;
    // else $html = "";
    // $html = substr($html, 0, 35);

    // $pdf -> MultiCell($available_width*0.14 , $height, $html, 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.2 , $height, substr(($ug_college_name), 0, 40), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.2 , $height, substr(($ug_univeristy_name), 0, 40), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.1 , $height, ($ug_passing_year), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.08 , $height, ($ug_percentage), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.06 , $height, ($ug_out_of), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.12 , $height, ($ug_complete_status), 1, 'L', 0, 1, '', '', true);
    
    // $html = '<b>Degree4</b>';
    // $pdf -> MultiCell($available_width*0.1, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    // if(strlen($pg_1_pg_degree_name) > 0)$html = $pg_1_pg_degree_name." in ".$pg_1_discipline;
    // else $html = "";
    // $html = substr($html, 0, 35);
    // $pdf -> MultiCell($available_width*0.14 , $height, $html, 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.2 , $height, substr(($pg_1_college_name), 0, 40), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.2 , $height, substr(($pg_1_univeristy_name), 0, 40), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.1 , $height, ($pg_1_passing_year), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.08 , $height, ($pg_1_percentage), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.06 , $height, ($pg_1_out_of), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.12 , $height, ($pg_1_complete_status), 1, 'L', 0, 1, '', '', true);
    
    // $html = '<b>Degree5</b>';
    // $pdf -> MultiCell($available_width*0.1, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    // if(strlen($pg_2_pg_degree_name) > 0)$html = $pg_2_pg_degree_name." in ".$pg_2_discipline;
    // else $html = "";
    // $html = substr($html, 0, 35);
    // $pdf -> MultiCell($available_width*0.14 , $height, $html, 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.2 , $height, substr(($pg_2_college_name), 0, 40), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.2 , $height, substr(($pg_2_univeristy_name), 0, 40), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.1 , $height, ($pg_2_passing_year), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.08 , $height, ($pg_2_percentage), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.06 , $height, ($pg_2_out_of), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width*0.12 , $height, ($pg_2_complete_status), 1, 'L', 0, 1, '', '', true);
    
    $pdf->SetFont('times', '', 11);
    $pdf -> AddPage();
    $height = 19;
    $html = '<b><h3> Publication Details</h3></b>';
    $pdf -> MultiCell($available_width, $height,   $html,   1,   'C',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);


    $html = '<b>Publications</b>';
    $pdf -> MultiCell($available_width, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '';
    $pdf -> MultiCell($available_width/3, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>Indian</b>';
    $pdf -> MultiCell($available_width/3, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>International</b>';
    $pdf -> MultiCell($available_width/3, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $html = '<b>Journal Publication</b>';
    $pdf -> MultiCell($available_width/3, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $published_paper_indian;
    $pdf -> MultiCell($available_width/3, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $published_paper_international;
    $pdf -> MultiCell($available_width/3, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $html = '<b>Conference Proceeding</b>';
    $pdf -> MultiCell($available_width/3, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $conference_paper_indian;
    $pdf -> MultiCell($available_width/3, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $conference_paper_international;
    $pdf -> MultiCell($available_width/3, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $height = 8;
    $pdf -> MultiCell($available_width, $height, '<b>Book Chapter : </b>'.  $publication_book_chapter,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $pdf -> MultiCell($available_width, $height, '<b>Book H-Index</b>'.  $publication_h_index,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $pdf -> MultiCell($available_width, $height, '<b>Paper Listing</b>'.  $publication_paper_listing,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $pdf -> MultiCell($available_width, $height, '<b>Paper Citation Source : </b>'.  $publication_citations_source,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $pdf -> MultiCell($available_width, $height, '<b>Paper H-Index Source</b>'.  $publication_h_index_source,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);


$height = 10;
    $html = '<b>Best 5 Papers</b>';
    $pdf -> MultiCell($available_width, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $height = 20;
    $html = '<b>Author</b>';
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>Title</b>';
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>Journal</b>';
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>Year</b>';
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>Page No.</b>';
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = '<b>No. of Citations</b>';
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $html = $publication_author0;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_title0;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_journal_conference0;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_year0;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_page0;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_citation0;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $html = $publication_author1;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_title1;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_journal_conference1;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_year1;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_page1;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_citation1;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    $html = $publication_author2;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_title2;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_journal_conference2;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_year2;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_page2;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_citation2;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $html = $publication_author3;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_title3;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_journal_conference3;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_year3;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_page3;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_citation3;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $html = $publication_author0;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_title0;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_journal_conference0;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_year0;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_page0;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = $publication_citation0;
    $pdf -> MultiCell($available_width/6, $height,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    
    $height = 19;
    $pdf->SetFont('times', '', 9);

    // for($x=0; $x<$cnt_work; $x++){
    // $pdf -> MultiCell($available_width/4 , $height, substr(($work_1_organization_name_dc[$x]), 0, 40), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width/4 , $height, substr(($work_1_position_dc[$x]), 0, 40), 1, 'L', 0, 0, '', '', true);
    // $pdf -> MultiCell($available_width/4 , $height, substr(($work_1_nature_of_work[$x]), 0, 40), 1, 'L', 0, 0, '', '', true);
    // $experience = "";
    // $pdf -> MultiCell($available_width/4  , $height , $experience,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    
    // }

    // for($x=0; $x<$cnt_academic; $x++){
    //     $pdf -> MultiCell($available_width/7 , $height, substr(($available_width), 0, 20), 1, 'L', 0, 0, '', '', true);
    //     $pdf -> MultiCell($available_width/7 , $height, substr(($academic_institute_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
    //     $pdf -> MultiCell($available_width/7 , $height, substr(($academic_subject_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
    //     $pdf -> MultiCell($available_width/7 , $height, substr(($academic_degree_name_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
    //     $pdf -> MultiCell($available_width/7 , $height, substr(($academic_cgpa[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
    //     $pdf -> MultiCell($available_width/7 , $height, substr(($academic_out_of_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
    //     $pdf -> MultiCell($available_width/7 , $height, substr(($academic_notes_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
        
    //     }

    $height = 17;
    $pdf->AddPage();

    $html = '<b><h3> Referee Details</h3></b>';
    $pdf -> MultiCell($available_width  , $height,   $html,   1,   'C',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $html = "Name";
    $pdf -> MultiCell($available_width/8 , $height/2, $html, 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width/8 , $height/2, "Designation", 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width/8 , $height/2, "Organisation", 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width/8 , $height/2, "Address", 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width/8 , $height/2, "Country", 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width/8 , $height/2, "State", 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width/8 , $height/2, "Email", 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width/8 , $height/2, "Contact", 1, 'L', 0, 1, '', '', true);


    for($x=0; $x<$cnt_referee; $x++){
        $pdf -> MultiCell($available_width/8 , $height/2, substr(($referee_name_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
        $pdf -> MultiCell($available_width/8 , $height/2, substr(($referee_designation_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
        $pdf -> MultiCell($available_width/8 , $height/2, substr(($referee_organisation_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
        $pdf -> MultiCell($available_width/8 , $height/2, substr(($referee_address_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
        $pdf -> MultiCell($available_width/8 , $height/2, substr(($referee_country_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
        $pdf -> MultiCell($available_width/8 , $height/2, substr(($referee_state_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
        $pdf -> MultiCell($available_width/8 , $height/2, substr(($referee_email_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
        $pdf -> MultiCell($available_width/8 , $height/2, substr(($referee_contact_dc[$x]), 0, 20), 1, 'L', 0, 1, '', '', true);
        }

    $height = 17;

    $html = '<b><h3> Other Details</h3></b>';
    $pdf -> MultiCell($available_width  , $height,   $html,   1,   'C',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);


    $html = '<b>Awards and Recognitions</b>';
    $pdf -> MultiCell($available_width  , $height/2,   $html,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $pdf -> MultiCell($available_width/3  , $height/2,   "Awards and Recognitions",   1,   'C',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $pdf -> MultiCell($available_width/3  , $height/2,   "Award Year",   1,   'C',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $pdf -> MultiCell($available_width/3 , $height/2,   "Agency",   1,   'C',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    for($x=0; $x<$cnt_others; $x++){
        $pdf -> MultiCell($available_width/3 , $height/2, substr(($others_awards_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
        $pdf -> MultiCell($available_width/3 , $height/2, substr(($others_awards_year_dc[$x]), 0, 20), 1, 'L', 0, 0, '', '', true);
        $pdf -> MultiCell($available_width/3 , $height/2, substr(($others_awards_agency_dc[$x]), 0, 20), 1, 'L', 0, 1, '', '', true);
        }


    if($others_technology_checked === "on"){
    $pdf -> MultiCell($available_width , $height/2,   "Technologies Developed : Filled ",   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $pdf -> MultiCell($available_width/3  , $height/2,   "Technology Description",   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $pdf -> MultiCell($available_width/3  , $height/2,   "Developer",   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $pdf -> MultiCell($available_width/3 , $height/2,   "Completion",   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    $pdf -> MultiCell($available_width/3 , $height/2, substr(($others_technology_description), 0, 20), 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width/3 , $height/2, substr(($others_technology_developer), 0, 20), 1, 'L', 0, 0, '', '', true);
    $pdf -> MultiCell($available_width/3 , $height/2, substr(($others_technology_completion), 0, 20), 1, 'L', 0, 1, '', '', true);
    }else{
    $pdf -> MultiCell($available_width , $height/2,   "Technologies Developed : Not Filled ",   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
    }


    if($others_patent_checked === "on"){
        $pdf -> MultiCell($available_width , $height/2,   "Technologies Developed : Filled ",   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $pdf -> MultiCell($available_width/3  , $height/2,   "",   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $pdf -> MultiCell($available_width/3  , $height/2,   "Indian",   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $pdf -> MultiCell($available_width/3  , $height/2,   "International",   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

        $pdf -> MultiCell($available_width/3  , $height/2,   "Number of Patents Filed",   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $pdf -> MultiCell($available_width/3  , $height/2,   $others_patent_filed_indian,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $pdf -> MultiCell($available_width/3  , $height/2,   $others_patent_filed_international,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

        $pdf -> MultiCell($available_width/3  , $height/2,   "Number of Patents Granted",   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $pdf -> MultiCell($available_width/3  , $height/2,   $others_patent_granted_indian,   1,   'L',   false,   0,    '',    '',  true,  0,   true,  true,   0,   'T', false);
        $pdf -> MultiCell($available_width/3  , $height/2,   $others_patent_granted_international,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    }else{
        $pdf -> MultiCell($available_width , $height/2,   "Technologies Developed : Not Filled ",   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);   
    }


    $pdf -> MultiCell($available_width , $height/2,   "Research Plan Description " . $others_research_description,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);

    $pdf -> MultiCell($available_width , $height/2,   "Teaching Preference Description" . $others_interest_description,   1,   'L',   false,   1,    '',    '',  true,  0,   true,  true,   0,   'T', false);


    $pdf->SetFont('times', '', 11);
    
	$mtech_department = add_underscore($mtech_department);
    $folder = __DIR__ ."/".$mtech_department;
	
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }

	$personal_full_name = add_underscore($personal_full_name);
	$mtech_application_category = add_underscore($mtech_application_category);
	$mtech_department = add_underscore($mtech_department);
	
    $filename = $personal_full_name."_".$personal_gender."_".$personal_birth_category."_".$personal_contact."_".$app_id;
	$fileNL = $folder."/".$filename;

    $pdf->Output($fileNL.'.pdf', 'I');
    ob_end_flush(); 
}

fclose($file);

$zipped = ZIP;
if (!file_exists($zipped)) {
    mkdir($zipped, 0777, true);
}

$zip_file = $mtech_department."-Mtech.zip";
$zip = new ZipArchive();


$mtech_department = add_underscore($mtech_department);
$zip_folder = $mtech_department;

if ($zip->open($zip_file, ZipArchive::CREATE) === TRUE)
{
    if ($handle = opendir($zip_folder))
    {
        // Add all files inside the directory
        while (false !== ($entry = readdir($handle)))
        {
            if ($entry != "." && $entry != ".." && !is_dir($zip_folder."/" . $entry))
            {
                $zip->addFile($zip_folder."/" . $entry);
            }
        }
        closedir($handle);
    }
	$zip->close();
}

header('Content-type: application/zip');
header('Content-Disposition: attachment; filename="'.basename($zip_file).'"');
header("Content-length: " . filesize($zip_file));
header("Pragma: no-cache");
header("Expires: 0");
ob_clean();
flush();
readfile($zip_file);
unlink($zip_file);

$dirname = $mtech_department;
array_map('unlink', glob("$dirname/*.*"));
rmdir($dirname);

$dirname = ZIP;
array_map('unlink', glob("$dirname/*.*"));
rmdir($dirname);
exit;

?>