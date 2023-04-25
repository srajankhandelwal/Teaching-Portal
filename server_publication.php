
<?php
 include_once ('dbconn.php');
  session_start();
//   echo count($_POST['slno']);
//   $exp = $_POST['work_1_experience_type'];

//   $sr_exp = base64_encode(serialize($exp));



//   echo $sr_exp;


if (isset($_POST['regf_user'])) {


    $personal_email	 = $_SESSION['username'];

    $published_paper_indian = $_POST['totalPublishedPaper_indian'];
    $published_paper_international = $_POST['totalPublishedPaper_international'];
    $conference_paper_indian = $_POST['totalConferencePaper_indian'];
    $conference_paper_international = $_POST['totalConferencePaper_indian'];
    $total_paper_indian = $_POST['totalpresentedPaper_indian'];
    $total_paper_international = $_POST['totalpresentedPaper_international'];

    $publication_author0 = $_POST['author0'];
    $publication_author1 = $_POST['author1'];
    $publication_author2 = $_POST['author2'];
    $publication_author3 = $_POST['author3'];
    $publication_author4 = $_POST['author4'];

    $publication_title0 = $_POST['title0'];
    $publication_title1 = $_POST['title1'];
    $publication_title2 = $_POST['title2'];
    $publication_title3 = $_POST['title3'];
    $publication_title4 = $_POST['title4'];

    $publication_journal_conference0 = $_POST['journal_Conference0'];
    $publication_journal_conference1 = $_POST['journal_Conference1'];
    $publication_journal_conference2 = $_POST['journal_Conference2'];
    $publication_journal_conference3 = $_POST['journal_Conference3'];
    $publication_journal_conference4 = $_POST['journal_Conference4'];

    $publication_year0 = $_POST['paper_year0'];
    $publication_year1 = $_POST['paper_year1'];
    $publication_year2 = $_POST['paper_year2'];
    $publication_year3 = $_POST['paper_year3'];
    $publication_year4 = $_POST['paper_year4'];

    $publication_page0 = $_POST['page_no0'];
    $publication_page1 = $_POST['page_no1'];
    $publication_page2 = $_POST['page_no2'];
    $publication_page3 = $_POST['page_no3'];
    $publication_page4 = $_POST['page_no4'];

    $publication_citation0 = $_POST['citations_no0'];
    $publication_citation1 = $_POST['citations_no1'];
    $publication_citation2 = $_POST['citations_no2'];
    $publication_citation3 = $_POST['citations_no3'];
    $publication_citation4 = $_POST['citations_no4'];

    $publication_book_chapter = $_POST['publication_book_chapter'];
    $publication_paper_listing = $_POST['publication_paper_listing'];
    $publication_citations = $_POST['publication_citations'];
    $publication_h_index = $_POST['publication_h_index'];
    $publication_citations_source = $_POST['publication_citations_source'];
    $publication_h_index_source = $_POST['publication_h_index_source'];


    $books_designation_sr	 = base64_encode(serialize($_POST['books_designation']));
    $books_organisation_sr	 = base64_encode(serialize(($_POST['books_organisation'])));
    $books_govt_india_sr	 = base64_encode(serialize(($_POST['books_govt_india'])));
    $books_department_sr	 = base64_encode(serialize($_POST['books_department']));
    $books_from_sr	 = base64_encode(serialize($_POST['books_from']));
    $books_to_sr	 = base64_encode(serialize($_POST['books_to']));
    $books_roles_sr	 =  base64_encode(serialize($_POST['books_roles']));
    $books_emoluments_sr	 =  base64_encode(serialize($_POST['books_emoluments']));

   
$toy=1;





$filled_publication = 1;
$mtech_application_category	 = $_SESSION['mtech_application_category'];
$mtech_department	 = $_SESSION['mtech_department'];


// $app_id="Mtech-2022-".$mtech_application_category."-".$mtech_department."-".$id_number;

$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `personal_email`='$personal_email'  LIMIT 1";

$query = "update mtp_application_info set published_paper_indian ='$published_paper_indian', 
published_paper_international = '$published_paper_international',
conference_paper_indian = '$conference_paper_indian',
    conference_paper_international = '$conference_paper_international',
    total_paper_indian = '$total_paper_indian',
    total_paper_international = '$total_paper_international',

    publication_author0 = '$publication_author0',
    publication_author1 = '$publication_author1',
    publication_author2 = '$publication_author2',
    publication_author3 = '$publication_author3',
    publication_author4 = '$publication_author4',

    publication_title0 = '$publication_title0',
    publication_title1 = '$publication_title1',
    publication_title2 = '$publication_title2',
    publication_title3 = '$publication_title3',
    publication_title4 = '$publication_title4',

    publication_journal_conference0 = '$publication_journal_conference0',
    publication_journal_conference1 = '$publication_journal_conference1',
    publication_journal_conference2 = '$publication_journal_conference2',
    publication_journal_conference3 = '$publication_journal_conference3',
    publication_journal_conference4 = '$publication_journal_conference4',

    publication_year0 = '$publication_year0',
    publication_year1 = '$publication_year1',
    publication_year2 = '$publication_year2',
    publication_year3 = '$publication_year3',
    publication_year4 = '$publication_year4',

    publication_page0 = '$publication_page0',
    publication_page1 = '$publication_page1',
    publication_page2 = '$publication_page2',
    publication_page3 = '$publication_page3',
    publication_page4 = '$publication_page4',

    publication_citation0 = '$publication_citation0',
    publication_citation1 = '$publication_citation1',
    publication_citation2 = '$publication_citation2',
    publication_citation3 = '$publication_citation3',
    publication_citation4 = '$publication_citation4',
    publication_book_chapter = '$publication_book_chapter',
    publication_paper_listing = '$publication_paper_listing',
    publication_citations = '$publication_citations',
    publication_h_index = '$publication_h_index',
    publication_citations_source = '$publication_citations_source',
    publication_h_index_source = '$publication_h_index_source',


    books_designation	 = '$books_designation_sr',
    books_organisation	 = '$books_organisation_sr',
    books_govt_india	 = '$books_govt_india_sr',
    books_department	 = '$books_department_sr',
    books_from	 = '$books_from_sr',
    books_to	 = '$books_to_sr',
    books_roles	 =  '$books_roles_sr',
    books_emoluments	 =  '$books_emoluments_sr',
 filled_publication = '$filled_publication', added_updated=NOW() where mtech_application_category ='$mtech_application_category' and mtech_department='$mtech_department' and personal_email='$personal_email'"; 

if (!mysqli_query($conn,$query)) {
        $toy=0;
  }else 
  {
    


}
    // }

    if($toy) header("location: fill_form_referee.php");
    else    { echo("Error description: " . mysqli_error($conn));
    echo "<br><p style='color:red'>Please take a screenshot of this page and mail to praveenk@iitp.ac.in or pic_auto@iitp.ac.in to resolve issue. </p>"; }
}
?>