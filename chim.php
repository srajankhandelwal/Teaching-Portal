<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h3 align="center"><u>Inserting Multiple Rows in PHP</u></h3>
<br/><br/><br/>
    <form class="form-horizontal" action="#" method="post">
    <div class="row">
        <div class="col-sm-1">
          <label for="Age">Sl No:</label>
          <input type="text" class="form-control sl" name="slno[]" id="slno" value="1" readonly="">
        </div>
         
        <div class="col-sm-3">
          <label for="Student Name">Student Name:</label>
          <input type="text" class="form-control" name="student_name[]" id="st_name" placeholder="Enter Student Name">
        </div>
         
        <div class="col-sm-3">
         <label for="Phone">Phone No*:</label>
          <input type="text" class="form-control" name="phone_no[]" id="pn" placeholder="Enter Phone No">
        </div>
         
        <div class="col-sm-1">
          <label for="Age">Age:</label>
          <input type="text" class="form-control" id="age" name="age[]" placeholder="Enter Age">
        </div>
         
        <div class="col-sm-3">
         <label for="DateofBirth">Date of Birth:</label>
            <input type="date" id="dob" name="date_of_birth[]" class="form-control"/>
        </div>
         
    </div><br/>
        <div id="next"></div>
        <br/>
    <button type="button" name="addrow" id="addrow" class="btn btn-success pull-right">Add New Row</button>
    <br/><br/>
    <button type="submit" name="submit" class="btn btn-info pull-left">Submit</button>
    </form>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
<script>
$('#addrow').click(function(){
        var length = $('.sl').length;
        var i   = parseInt(length)+parseInt(1);
        var newrow = $('#next').append('<div class="row"><div class="col-sm-1"><label for="Age">Sl No:</label><input type="text" class="form-control sl" name="slno[]" value="'+i+'" readonly=""></div><div class="col-sm-3"><label for="Student Name">Student Name:</label><input type="text" class="form-control" name="student_name[]" id="st_name'+i+'" placeholder="Enter Student Name"></div><div class="col-sm-3"><label for="Phone">Phone No*:</label><input type="text" class="form-control" name="phone_no[]" id="pn'+i+'" placeholder="Enter Phone No"></div><div class="col-sm-1"><label for="Age">Age:</label><input type="text" class="form-control" id="age'+i+'" name="age[]" placeholder="Enter Age"></div><div class="col-sm-3"><label for="DateofBirth">Date of Birth:</label><input type="date" id="dob'+i+'" name="date_of_birth[]" class="form-control"/></div><input type="button" class="btnRemove btn-danger" value="Remove"/></div><br>');
         
        });
     
    // Removing event here
  $('body').on('click','.btnRemove',function() {
       $(this).closest('div').remove()
 
  });
         
</script>
</body>
</html>