<?php
#error_reporting(0);

require_once '/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
//Fetch your  database query here
$con = new mysqli('localhost', 'root', '', 'test');


// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
    <script src="https://unpkg.com/jspdf-autotable@3.5.6/dist/jspdf.plugin.autotable.js"></script>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assessment report</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="container">
	<section class="row">
		<div class="col-md-4 col-sm-4 col-xs-4 logo"><a href = "https://google.com/"><img src="images/abc_logo.jpg"alt="abc logo"style="height:100px;width:250px"></div></a>
		<div class="col-md-4 col-sm-4 col-xs-4 text-center"><h2 class="menu-title text-center"  > ASSESSMENT REPORT</h2></div>
		<div class="col-md-4 col-sm-4 col-xs-4 logo"><a href = "https://arrka.com/"> <img src="images/arrka-logo.png"alt="arrka logo"style="height:100px;width:250px"></div> </a>
	</section>
<br>


<br>
	<section class="row header">
	    <div class="col-md-6 col-xs-6"><p>Assessment_id : </p></div>
		<div class="col-md-6 col-xs-6"><p>Assessment Name: </p></div>
		<div class="col-md-6 col-xs-6"><p>Assessment Module: </p></div>
		<div class="col-md-6 col-xs-6"><p>Assessment Date: </p></div>
		<div class="col-md-6 col-xs-6"><p>Assessment Law: </p></div>
		<div class="col-md-6 col-xs-6"><p>Assessment Creator:</p></div>
	</section>

	<section class="text-right" style="padding-right:15px">
	<a id="btn" class="btn btn-primary" href="Assessment.php" target="_blank">Save as Pdf</a>
	</section>
	<br>
	<section class="row table">
		<table id = " Id_content">
		  <tr>
		    <th>Assessment Name</th>
		    <th>Assessment Module</th>
		    <th>Assessment Date</th>
		    <th>Assessment Law</th>
		    <th>Assessment Creator</th>
		    <th>Company Name</th>
		  </tr>
		  <?php $ret=mysqli_query($con,"select * from assessment_details");
                $cnt=1;
                while($row=mysqli_fetch_array($ret))
                {?>
                              <tr>
                                  <td><?php echo $row['assessment_name'];?></td>
                                  <td><?php echo $row['assessment_module'];?></td>
                                  <td><?php echo $row['assessment_date'];?></td>
                                  <td><?php echo $row['assessment_law'];?></td>
								  <td><?php echo $row['assessment_creator'];?></td>
                                  <td><?php echo $row['company_name'];?></td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
		  
		</table>

	</section>

	<section class="row footer">
		<div class="col-md-6 col-xs-6"><p>Company name: </p></div>
		<div class="col-md-6 col-xs-6"><p>Validator: </p></div>
		<div class="col-md-6 col-xs-6"><p>Company Contact: </p></div>
	</section>
	<section>
		<div class="note"><p>This is a computer generated report. it doesnot require any signature</p></div>
	</section>

</div>

</script>
</body>
</html>