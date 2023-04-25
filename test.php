


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>IITDFR</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css" >
        <!-- Font Awesome -->
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/plugins/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <!--        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/plugins/ionicons/css/ionicons.min.css">-->
        <!-- DataTables -->
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/plugins/datatables/dataTables.bootstrap.css" >

        <link rel="stylesheet" type="text/css" href="resources/theme/AdminLTE-2.3.0/plugins/datatables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/plugins/datatables/TableTools/css/dataTables.tableTools.min.css">   
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/plugins/datatables/ColVis/dataTables.colVis.css">
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/plugins/datatables/ColReorder/dataTables.colReorder.css">            
        <!-- fullCalendar 2.2.5-->
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/plugins/fullcalendar/fullcalendar.min.css">
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/plugins/fullcalendar/fullcalendar.print.css" media="print">
        <!-- Theme style -->
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/plugins/bootstrap-duallistbox/src/bootstrap-duallistbox.css">  
        <link href="resources/theme/AdminLTE-2.3.0/plugins/assets/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />  
        <link href="resources/theme/AdminLTE-2.3.0/plugins/toastmessage/css/jquery.toastmessage.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/plugins/datatables/extensions/button/css/buttons.dataTables.min.css" type="text/css"> 
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="resources/theme/AdminLTE-2.3.0/plugins/select2/css/bootstrap-select.css" rel="stylesheet">
        <link href='resources/theme/AdminLTE-2.3.0/plugins/assets/css/bootstrap-datetimepicker.css' rel='stylesheet' />
        <!--        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/plugins/assets/css/normalize.css" type="text/css">  -->
        <link rel="stylesheet" href="resources/theme/AdminLTE-2.3.0/plugins/assets/css/font.css" type="text/css">
        <!--        <link href="resources/theme/AdminLTE-2.3.0/plugins/assets/css/zabuto_calendar.css" rel="stylesheet">  -->
        <link href='resources/theme/AdminLTE-2.3.0/plugins/assets/css/fullcalendar.css' rel='stylesheet' /> 
        <link href="resources/theme/AdminLTE-2.3.0/plugins/select2/css/select2.min.css" rel="stylesheet" /> 
        <!--        <link href="resources/theme/AdminLTE-2.3.0/plugins/akordian/jquery.akordeon.css" rel="stylesheet" /> 
                <link href="resources/theme/AdminLTE-2.3.0/plugins/akordian/demo.css" rel="stylesheet" /> -->
        <link href="resources/theme/AdminLTE-2.3.0/plugins/treegrid/jquery.treegrid.css" rel="stylesheet" />
        <link rel="stylesheet" href="resources/css/dropzone.css">
        <link href="resources/theme/AdminLTE-2.3.0/plugins/fuelux/css/fuelux.min.css" rel="stylesheet">
        <link href="resources/theme/AdminLTE-2.3.0/plugins/pace/pace-min.css" rel="stylesheet">
        <link href="resources/theme/AdminLTE-2.3.0/plugins/assets/css/bootstrap-dialog.min.css" rel="stylesheet">
        <style>


            .slimScrollBar {
                background: none repeat scroll 0 0 #cccccc !important;
                border-radius: 0;
                display: none;
                width: 10px!important;
                z-index: 99;
                opacity:0.7!important;
            }

            /* jQuery Countdown styles 2.0.0. */
            .is-countdown {
                /*                    //border: 0px solid #ccc;
                                    //background-color: #eee;*/
            }
            .countdown-rtl {
                direction: rtl;
            }
            .countdown-holding span {
                color: #888;
            }
            .countdown-row {
                clear: both;
                width: 100%;
                padding: 0px 2px;
                text-align: center;
            }
            .countdown-show1 .countdown-section {
                width: 98%;
            }
            .countdown-show2 .countdown-section {
                width: 48%;
            }
            .countdown-show3 .countdown-section {
                width: 32.5%;
            }
            .countdown-show4 .countdown-section {
                width: 24.5%;
            }
            .countdown-show5 .countdown-section {
                width: 19.5%;
            }
            .countdown-show6 .countdown-section {
                width: 16.25%;
            }
            .countdown-show7 .countdown-section {
                width: 14%;
            }
            .countdown-section {
                display: block;
                float: left;
                font-size: 75%;
                text-align: center;
            }
            .countdown-amount {
                font-size: 200%;
            }
            .countdown-period {
                display: block;
            }
            .countdown-descr {
                display: block;
                width: 100%;
            }

            .blockDiv {
                position: absolute;
                top: 0px;
                left: 0px;
                background-color: #FFF;
                width: 0px;
                height: 0px;
                z-index: 9999;
            }
            @media print {
                .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6,
                .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
                    float: left;
                }

                .col-lg-12 {
                    width: 100%;
                }

                .col-lg-11 {
                    width: 91.66666666666666%;
                }

                .col-lg-10 {
                    width: 83.33333333333334%;
                }

                .col-lg-9 {
                    width: 75%;
                }

                .col-lg-8 {
                    width: 66.66666666666666%;
                }

                .col-lg-7 {
                    width: 58.333333333333336%;
                }

                .col-lg-6 {
                    width: 50%;
                }

                .col-lg-5 {
                    width: 41.66666666666667%;
                }

                .col-lg-4 {
                    width: 33.33333333333333%;
                }

                .col-lg-3 {
                    width: 25%;
                }

                .col-lg-2 {
                    width: 16.666666666666664%;
                }

                .col-lg-1 {
                    width: 8.333333333333332%;

                }
            }

            @media (min-width: 768px) and (max-width: 991px) {
                .hide-on-sm {
                    display: none !important;
                }
            }

            table.dataTable th
            {
                /*                white-space: nowrap;*/
            }
            fieldset.scheduler-border {
                border: 1px groove black !important;
                padding: 0 1.4em 1.4em 1.4em !important;
                margin: 0 0 1.5em 0 !important;
                -webkit-box-shadow:  0px 0px 0px 0px #000;
                box-shadow:  0px 0px 0px 0px #000;
            }

            legend.scheduler-border {
                width:inherit; /* Or auto */
                padding:0 10px; /* To give a bit of padding on the left and right */
                border-bottom:none;

            }</style>

        
    </head>
    <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
    <!-- the fixed layout is not compatible with sidebar-mini -->
    <body class="fixed sidebar-mini skin-red fuelux" onload="noBack();" onpageshow="if (event.persisted) noBack();">
        
        <div id="listFileModel" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width:auto;margin-left:5%;margin-right: 5%;overflow-x: auto" >

                <!-- Modal content-->
                <div class="modal-content" style="background: rgba(0, 0, 0, 0) url('resources/theme/AdminLTE-2.3.0/dist/img/boxed-bg.jpg') repeat fixed 0 0;">
                    <div class="modal-footer bg-teal" style="padding: 1px">
                        <button  data-dismiss="modal" class="btn btn-box-tool"><i class="fa fa-times-circle-o fa-2x" style="color:white"></i></button>
                    </div>
                    <div class="container">
                        <div class="modal-body">
                            <div class="container1">
                                <div class="panel panel-default">
                                    <div class="panel-heading text-center bg-blue-active">
                                        <h3>Uploaded Files</h3>
                                    </div>
                                    <table class="table table-hover table-condensed">
                                        <thead>
                                            <tr class="bg-gray">
                                                <th width="5%">S.No</th>
                                                <th width="70%">File Name</th>
                                                <th width="24%">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tabBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-teal" style="padding: 18px">
                        <!--                                <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Close</button>-->
                    </div>
                </div>

            </div>
        </div>
            
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="logincheck" class="logo">
                    <!--                    <img src="resources/noimage/beta.png" style="height:50px"/>-->
                    <img src="resources/login/img/erecruit.png" style="height: 50px;width: 130px;margin-left:-4px;"></img>
                    <!--                <img src="" style="height: 50px;width: 130px;margin-left:-4px;"></img>-->
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    <span class="hidden-xs">srajankhandelwal@gmail.com</span>

                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img onError="this.onerror=null; this.src='resources/noimage/no_image.jpg';" src="null" class="img-circle" >
                                        <p>
                                            srajankhandelwal@gmail.com
                                            <!--                                            <small>Member since Nov. 2012</small>-->
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="javascript:loadForm('changepasswordFacultyRequirement','Change Password')" class="btn btn-default btn-flat">Change Password</a>
                                        </div>
                                        <div class="pull-right">

                                            <a href="javascript:formSubmit()" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:loadForm('changepasswordFacultyRequirement','Change Password')" data-toggle="tooltip" data-placement="bottom"  title="Change Password"><i class="fa fa-key"></i></a>
                            </li>
                            <li>
                                <a href="javascript:formSubmit()" data-toggle="tooltip" data-placement="bottom"  title="Sign Out"><i class="fa fa-sign-out"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->

                    <ul class="sidebar-menu">

                        <li>
                            <a href="javascript:loadForm('listAllOpenVacancy','Vacancy')">
                                <i class="fa fa"></i> <span>Vacancy</span>

                            </a>
                            <a href="javascript:loadForm('listApplicationRegistration','Posts Applied')">
                                <i class="fa fa"></i> <span>Posts Applied</span>

                            </a>
                            <!--                                                        <a href="javascript:loadForm('listAppliedStaffPost','Applied Staff Post')">
                                                                                        <i class="fa fa"></i> <span>Applied Staff Post</span>
                                                        
                                                                                    </a>-->

                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="background: rgba(0, 0, 0, 0) url('resources/theme/AdminLTE-2.3.0/dist/img/boxed-bg.jpg') repeat fixed 0 0;">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="border:1px solid lightgrey;background-color:#fcfcfc">
                    <h1>
                        <span id="headerText"><i class="fa fa-list"></i>Vacancy</span>
                        <!--                        <small>Blank example to the fixed layout</small>-->
                    </h1>
                    <ol class="breadcrumb" id="breadcrum"  style="font-size:13px;">
                    </ol>
                </section>
                <!-- From Content -->
                <section class="content hide" id="contentcontent" > 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border bg-teal">
                                    <h3 class="box-title"></h3>
                                    <div class="box-tools pull-right">                   
                                        <button onclick="closeForm()" class="btn btn-box-tool"><i class="fa fa-times-circle-o fa-2x" style="color:white"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div   id="formcontent">
                                    </div><!-- /.row -->
                                </div><!-- ./box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div>
                </section>

                <!-- Main content -->                
                <section class="content" > 
                    <div class="row">
                        <div class="col-lg-12"  id="contentarea" style="overflow-x: auto;overflow-y: hidden">


                            <!-- Default box -->
                            <div class="row" id="notificationArea">
                                <div  id="notificationDetailArea"></div>



                            </div>

                        </div>
                    </div>
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <!--                    <b>Version</b> 3.0.1-->
                    <!--                    <img src="resources/login/img/pingala-red.png" style="height: 30px;"/> | -->
                    <a target="_blank"  href="http://imaginationlearning.org"><img src="resources/noimage/logo.png" style="height: 30px;"/></a>
                </div>
                <strong>Copyright &copy; 2017-2018 </strong><a target="_blank"  href="http://imaginationlearning.org">imagination Learning Systems</a>. All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>

            </aside><!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->
        
        <form action="/IITDFR-0/j_spring_security_logout" method="post" id="logoutForm">
            <input type="hidden" name=""
                   value="" />
        </form>
        <!-- jQuery 2.1.4 -->
        <script src="resources/theme/AdminLTE-2.3.0/plugins/jQuery/jQuery-2.1.4.min.js"></script>

        <!-- Bootstrap 3.3.5 -->
        <script src="resources/theme/AdminLTE-2.3.0/bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="resources/theme/AdminLTE-2.3.0/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!--        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/datatables/TableTools/js/dataTables.tableTools.min.js"></script>
                <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/datatables/ColVis/dataTables.colVis.js"></script>
                <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/datatables/ColReorder/dataTables.colReorder.js"></script>-->
        <!-- SlimScroll -->
        <script src="resources/theme/AdminLTE-2.3.0/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="resources/theme/AdminLTE-2.3.0/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="resources/theme/AdminLTE-2.3.0/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <!--        <script src="resources/theme/AdminLTE-2.3.0/dist/js/demo.js"></script>-->
        <!-- fullCalendar 2.2.5 -->
        <script src="resources/theme/AdminLTE-2.3.0/plugins/ajax/libs/moment.js/moment.min.js"></script>
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/form-validator/jquery.form-validator.js"></script>
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/bootstrap-duallistbox/src/jquery.bootstrap-duallistbox.js"></script>
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/assets/js/fullcalendar.min.js"></script>
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/maxlength/bootstrap-maxlength.js"></script> 
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/assets/js/star-rating.js"></script>
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/toastmessage/jquery.toastmessage.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/datatables/extensions/button/buttons.colVis.min.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/datatables/extensions/button/buttons.print.min.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/datatables/extensions/button/pdfmake.min.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/datatables/extensions/button/buttons.html5.min.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/datatables/extensions/button/dataTables.buttons.min.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/datatables/otherHtml5Buttons/jszip.min.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/datatables/otherHtml5Buttons/vfs_fonts.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/datatables/extensions/LoadDT/js/loadDT.js"></script>
        <script type="text/javascript" src="resources/js/bootstrap-select.js"></script>
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/select2/select2.js"></script>
        <script type="text/javascript" src="resources/js/dropzone.js"></script> 
        <!--               <script src="/loadDT.js"></script>-->
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/assets/js/bootstrap-datetimepicker.js"></script>  
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/datatables/js/dataTables.bootstrap.js"></script>  
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/datatables/responsive/dataTables.responsive.js"></script>
        <!--        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/form-builder/jquery.bootstrap-form-builder.js"></script>
                <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/form-builder/addMoreField.js"></script>
                <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/form-builder/FormtoJson.js"></script>-->
        <!--        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/akordian/jquery.akordeon.js"></script>  -->
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/treegrid/jquery.treegrid.min.js"></script>  
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/treegrid/jquery.treegrid.bootstrap3.js"></script> 
        <script type="text/javascript" src="resources/js/dropzone.js"></script> 
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/fuelux/js/wizard.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/fuelux/js/fuelux.min.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/pace/pace.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/assets/js/bootstrap-dialog.min.js"></script>

        <script src="resources/theme/AdminLTE-2.3.0/plugins/saveit/jquery-cookie.js"></script>
        <script src="resources/theme/AdminLTE-2.3.0/plugins/saveit/sayt.min.jquery.js"></script>
        <script type="text/javascript" src="resources/js/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/counter/jquery.plugin.js"></script>
        <script type="text/javascript" src="resources/theme/AdminLTE-2.3.0/plugins/counter/jquery.countdown.js"></script>


        <script type="text/javascript">

                                            $(document).ready(function () {
                                                $('[data-toggle="tooltip"]').tooltip();
                                            });
                                            $("#formcontent").html("");
                                            $("#contentcontent").addClass('hide');
                                            $("#contentarea").load("listAllOpenVacancy.htm");
                                            block_screen();

                                            //code for refresh timer
                                            var $textAndPic = $('<div class="text-center"></div>');
                                            $textAndPic.append('<h3><span style="font-family:serif">Your session will expire in</span></h3>');
                                            $textAndPic.append('<div id="counter"></div></br>');
                                            $textAndPic.append('<h4><span style="font-family:serif">Click continue to extend session for next 30 Min.</span></h4>');
                                            $textAndPic.append('<h4><span style="font-family:serif">Click ok if you dont want to extend.</span></h4> ');
                                            var timeoutHandle = null;

                                            function startTimer(timeoutCount) {
                                                // document.getElementById('sessionTimer').innerHTML = 'You have ' + (timeoutCount) + 'seconds until timeout';
                                                if (timeoutCount === 0) {

                                                    window.location = 'login?logout';
                                                } else if (timeoutCount === 600) {
                                                    //  document.getElementById('sessionTimer').innerHTML = 'You have ' + (timeoutCount) + 'seconds until timeout';

                                                    BootstrapDialog.confirm({
                                                        title: 'Session Timeout Warning',
                                                        message: $textAndPic,
                                                        type: BootstrapDialog.TYPE_WARNING, // <-- Default value is BootstrapDialog.TYPE_PRIMARY
                                                        closable: false, // <-- Default value is false
                                                        draggable: true, // <-- Default value is false
                                                        btnCancelLabel: 'Do not extend', // <-- Default value is 'Cancel',
                                                        btnOKLabel: 'Extend...', // <-- Default value is 'OK',
                                                        btnCancelClass: 'btn-danger', // <-- If you didn't specify it, dialog type will be used,
                                                        btnOKClass: 'btn-success',
                                                        callback: function (result) {

                                                            $('#counter').countdown('destroy');
                                                            // result will be true if button was click, while it will be false if users close the dialog directly.
                                                            if (result) {
                                                                $.ajax({
                                                                    type: "get",
                                                                    url: "renewSession",
                                                                    datatype: "json",
                                                                    async: false,
                                                                    timeout: 5000,
                                                                    cache: false,
                                                                    beforeSend: function (xhr, options) {
                                                                        return true;
                                                                    },
                                                                    success: function (data) {
                                                                    },
                                                                    error: function (response) {
                                                                    }
                                                                });
                                                            } else {
                                                            }
                                                        }
                                                    });
                                                    setTimeout(
                                                            function () {
                                                                $('#counter').countdown({
                                                                    until: timeoutCount,
                                                                    format: 'HMS'
                                                                });
                                                            }, 200);
                                                }
                                                timeoutHandle = setTimeout(function () {
                                                    startTimer(timeoutCount - 1);
                                                }, '1000');
                                            }
                                            function refreshTimer() {
                                                $('#counter').countdown('destroy');
                                                clearTimeout(timeoutHandle);
                                                console.log('hello')
                                                startTimer('10710');
                                            }
                                            $(document).ajaxStart(function () {

                                                refreshTimer();

                                            });



                                            $(document).ready(function () {
                                                refreshTimer();
                                            });

                                            function block_screen() {
                                                //alert("Df");
                                                $('<div id="screenBlock"></div>').appendTo('body');
                                                $('#screenBlock').css({opacity: 0, width: $(document).width(), height: $(document).height()});
                                                $('#screenBlock').addClass('blockDiv');
                                                $('#screenBlock').animate({opacity: 0.0}, 200);

                                            }

                                            function unblock_screen() {
                                                $('#screenBlock').animate({opacity: 0}, 200, function () {
                                                    $('#screenBlock').remove();
                                                });
                                            }
                                            Pace.on('done', function () {
                                                unblock_screen();
                                            });
//////////////// back button stop code///////////////
                                            window.history.forward();
                                            function noBack() {
                                                window.history.forward();
                                            }
                                            history.pushState(null, null, '');
                                            window.addEventListener('popstate', function (event) {
                                                history.pushState(null, null, '');
                                            });
///////////////////////////////////////////////////////////////
                                            $.ajaxSetup({
                                                cache: false
                                                        //data: { "t": (new Date()).getTime() }
                                            }
                                            );
                                            var sSwfPath = "//cdn.datatables.net/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf";
                                            var sSearch = "<span style='color:#777;'>Filter records:</span>";
                                            var sLengthMenu = "<span style='color:#777;'>Display _MENU_ records per page</span>";
                                            var sInfo = "<span style='color:#777;'>_START_ - _END_ of _TOTAL_</span>";
                                            var eventData = [
                                                {"date": "2015-04-18", "badge": true, "classname": "btn-danger"},
                                                {"date": "2015-04-02", "badge": true, "classname": "btn-warning"}
                                            ];
                                            var allowedFileTypes = '.pdf';
                                            function blockSubmit() {
                                                $("#submit").prop("disabled", true);
                                                $("#submitspan").text("Submitting...");
                                                $("#submitspan").css("color", "black");
                                                $("#submit i").removeClass("fa fa-save");
                                                $("#submit i").addClass("fa fa-spinner fa-spin");
                                                $("#submit i").css("color", "black");
                                            }
                                            function unblockSubmit() {
                                                $("#submit").prop("disabled", false);
                                                $("#submitspan").text("Submit");
                                                $("#submitspan").css("color", "white");
                                                $("#submit i").removeClass("fa fa-spinner fa-spin");
                                                $("#submit i").addClass("fa fa-save");
                                                $("#submit i").css("color", "white");
                                            }
                                            function loadForm(link, header) {
//                                                Pace.start();
//                                                block_screen();
                                                $("#breadcrum").html("");
                                                $("#headerText").html('<i class="fa fa-list"></i> ' + header);
                                                $("#formcontent").html("");
                                                $("#contentcontent").addClass('hide');
                                                $("#contentarea").html('<div class="text-center row" style="margin-top:30px;"><i class="fa fa-circle-o-notch fa-spin fa-3x"></></div>');
                                                $("#contentarea").load(link, function () {
                                                });
                                            }
                                            function formSubmit() {

                                                document.getElementById("logoutForm").submit();
                                            }
                                            function closeForm() {
                                                $("#formcontent").html("");
                                                $("#contentcontent").addClass("hide");
                                            }
                                            function getRoleAccess(id)
                                            {

                                                $.ajax({
                                                    url: "setSessionRole?roleID=" + id,
                                                    dataType: "json",
                                                    error: (function () {
                                                    }),
                                                    success: function (map) {

                                                        if (map.data === 'true') {
                                                            window.location = "logincheck";
                                                            //}, 500);
                                                        }
                                                    }
                                                });
                                            }

                                            //////////////////////Multiple file upload code//////////////

                                            function commonFileCount() {
                                                var all = $(".fileCountCommon").map(function () {
                                                    return this.id.split('Attach')[0];
                                                }).get();

                                                if (all.length !== 0)
                                                {
                                                    var moduleID = $(".fileCountCommon").attr("id").split('Attach')[1];
                                                    //alert(moduleID);
                                                    $.ajax({
                                                        url: "getCommonQuery/87?pks=" + all.join() + "&moduleid=" + moduleID,
                                                        dataType: "json",
                                                        async: false,
                                                        error: (function () {
                                                            // $.unblockUI();
                                                            alert("Server error");
                                                        }),
                                                        success: function (map) {
                                                            $.each(map, function (i, item) {
                                                                $('#' + item.reference_table_pk + 'Attach' + moduleID).html("<span class='badge'>  " + item.count + "</span>&nbsp&nbsp <i class='fa fa-files-o fa-lg'></i>")
                                                            });
                                                        }
                                                    });
                                                }
                                                var all = $(".fileCountCommonForComplaint").map(function () {
                                                    return this.id.split('Attach')[0];
                                                }).get();
                                                if (all.length !== 0)
                                                {
                                                    var moduleID = $(".fileCountCommonForComplaint").attr("id").split('Attach')[1];
                                                    $.ajax({
                                                        url: "getCommonQuery/91?pks=" + all.join() + "&moduleid=" + moduleID,
                                                        dataType: "json",
                                                        async: false,
                                                        error: (function () {
                                                            // $.unblockUI();
                                                            alert("Server Error");
                                                        }),
                                                        success: function (map) {
                                                            $.each(map, function (i, item) {
                                                                $('#' + item.reference_table_pk + 'Attach' + moduleID).html("<span class='badge'>  " + item.count + "</span>&nbsp&nbsp <i class='fa fa-files-o fa-lg'></i>")
                                                            });
                                                        }
                                                    });
                                                }
                                            }
                                            function multipleFillDownload(pk, module_id) {

                                                $("#tabBody").empty();
                                                $.ajax({
                                                    type: "get",
                                                    url: "listAllUploadedFiles",
                                                    data: {table_pk: pk, module_id: module_id},
                                                    dataType: "json",
                                                    async: false,
                                                    timeout: 5000,
                                                    crossDomain: true,
                                                    // cache: false,
                                                    // contentType: 'multipart/form-data',
                                                    //  processData: false,
                                                    beforeSend: function (xhr, options) {
                                                        //    alert("before send");
                                                        return true;
                                                        // true for success and false for stop transaction
                                                        // can write here to execute anything before submitting the form
                                                    },
                                                    success: function (data) {
                                                        
                                                        var str = '';
                                                        $.each(data.fileList, function (i, item) {
                                                            if (item.minio_flag == 1) {
                                                                str += '   <tr><td>' + (i + 1) + '</td> <td>' + item.name + '</td>'
                                                                        + '<td>'
                                                                        + '<a href="javascript:multipleFillDownloadMinIo(' + "'" + item.id + "'" + ')" class="btn btn-primary">'
                                                                        // + '<a href="/IITDFR-0/getMinIo/' + item.encPk + '" class="btn btn-success">'
//                                                                        + '<a href="/IITDFR-0/get/' + item.id + '" class="btn btn-primary">'
                                                                        + '     <span class="glyphicon glyphicon-download"></span> Download'
                                                                        + '  </a>'
                                                                        + '</td>'
                                                                        + '</tr>'
                                                            } else {
                                                                str += '   <tr><td>' + (i + 1) + '</td> <td>' + item.name + '</td>'
                                                                        + '<td>'
                                                                        + '<a href="/IITDFR-0/get/' + item.id + '" class="btn btn-primary">'
                                                                        + '     <span class="glyphicon glyphicon-download"></span> Download'
                                                                        + '  </a>'
                                                                        + '</td>'
                                                                        + '</tr>'
                                                            }
                                                        });
                                                        $("#tabBody").append(str);
                                                    },
                                                    error: function (response) {

                                                    }
                                                });
                                            }

                                            function multipleFillDownloadMinIo(encPk) {
                                                $.ajax({
                                                    type: "get",

                                                    url: "getMinIo",
                                                    data: {encPk: encPk},
                                                    async: false,
                                                    timeout: 5000,
                                                    crossDomain: true,
                                                    success: function (data) {

                                                        window.open(data, "_blank");
                                                    },

                                                    error: function (response) {
                                                        alert("Failed to download ");
                                                    }
                                                });
                                            }
                                            function commonFileCountForDiffentClass(class_name) {

                                                var all = $("." + class_name).map(function () {
                                                    return this.id.split('Attach')[0];
                                                }).get();
//                                                alert(all.length);
//                                              change here && all.join() != ''
                                                if (all.length !== 0 && all.join() != '')
                                                {
                                                    var moduleID = $("." + class_name).attr("id").split('Attach')[1];
                                                    $.ajax({
                                                        url: "getCommonQuery/87?pks=" + all.join() + "&moduleid=" + moduleID,
                                                        dataType: "json",
                                                        async: false,
                                                        error: (function () {
                                                            // $.unblockUI();
                                                            alert("Server Error");
                                                        }),
                                                        success: function (map) {
                                                            $.each(map, function (i, item) {
                                                                $('#' + item.reference_table_pk + 'Attach' + moduleID).html("<span class='badge'>  " + item.count + "</span>&nbsp&nbsp <i class='fa fa-files-o fa-lg'></i>")
                                                            });
                                                        }
                                                    });
                                                }
                                            }
                                            //////////////////// file count for ALL  Dept and Post///////////////////
                                            function commonFileCountForDiffentClassAll(class_name) {

                                                var all = $("." + class_name).map(function () {
                                                    return this.id.split('Attach')[0];
                                                }).get();
//                                                alert(all.length);
                                                if (all.length !== 0)
                                                {
                                                    var moduleID = $("." + class_name).attr("id").split('Attach')[1];
                                                    $.ajax({
                                                        url: "getCommonQuery/87?pks=" + all.join() + "&moduleid=" + moduleID,
                                                        dataType: "json",
                                                        async: false,
                                                        error: (function () {
                                                            // $.unblockUI();
                                                            alert("Server Error");
                                                        }),
                                                        success: function (map) {
                                                            $.each(map, function (i, item) {
                                                                $('.' + item.reference_table_pk + 'Attach' + moduleID).html("<span class='badge'>  " + item.count + "</span>&nbsp&nbsp <i class='fa fa-files-o fa-lg'></i>")
                                                            });
                                                        }
                                                    });
                                                }
                                            }
                                            ///////////////////////////////Print Inner Div code//////////////////////////
                                            var gAutoPrint = true;
                                            function printInnerDiv(divID)
                                            {
                                                $(".printhide").addClass("hide");
                                                if (document.getElementById != null) {
                                                    var html = '<HTML>\n<HEAD>\n';
                                                    if (document.getElementsByTagName != null) {
                                                        var headTags = document.getElementsByTagName("head");
                                                        if (headTags.length > 0)
                                                            html += headTags[0].innerHTML;
                                                    }
                                                    html += '\n</HE' + 'AD>\n<BODY>\n';
                                                    var printReadyElem = document.getElementById(divID);
                                                    if (printReadyElem != null)
                                                        html += printReadyElem.innerHTML;
                                                    else {
                                                        alert("Error, no contents.");
                                                        return;
                                                    }
                                                    html += '\n</BO' + 'DY>\n</HT' + 'ML>';
                                                    var printWin = window.open("#", "processPrint");
                                                    printWin.document.open();
                                                    printWin.document.write(html);
                                                    printWin.document.close();
                                                    if (gAutoPrint)
                                                        printWin.print();
                                                } else
                                                    alert("Browser not supported.");
                                                $(".printhide").removeClass("hide");
                                            }
                                            ////////////////////////////////////////////////////////
        </script>
    </body>
</html>
