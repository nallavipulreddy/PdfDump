<?php
// require_once('../config/db-config.php');
require_once '/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$con = new mysqli('localhost', 'root', '', 'test');


// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// instantiate and use the dompdf class
$dompdf = new Dompdf();
    ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Assessment Report</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</head>
<body>
	<table>
		<tr>
			<td>
				<a href = "https://google.com/"><img src="images/abc_logo.jpg" alt="abc logo" style="height:100px;width:250px"></a>
			</td>
			<td>
				<h2 class="menu-title text-center"  > ASSESSMENT REPORT</h2>
			</td>
			<td>
				<a href = "https://arrka.com/"> <img src="images/arrka-logo.png" alt="arrka logo" style="height:100px;width:250px"></a>
			</td>
		</tr>
	</table>
	
<br>

<table class="text-center">
	<tr>
		<td>Assessment_id : </td>
		<td>Assessment Name: </td>
	</tr>
	<tr>
		<td>Assessment Module : </td>
		<td>Assessment Date: </td>
	</tr>
	<tr>
		<td>Assessment Law : </td>
		<td>Assessment Creater: </td>
	</tr>
</table>

<br>
<br>

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
<br>
	</section>
	<br>
	<table class="text-center">
		<tr>
			<td >Company name: </td>
			<td>Validator: </td>
		</tr>
		<tr>
			<td>
				Company Contact: 
			</td>
		</tr>
	</table>
	<section>
		<div class="note"><p><span class="text-danger">*</span>This is a computer generated report. it doesnot require any signature</p></div>
	</section>

</body>

</html>
<?php
$html = ob_get_clean();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portriat');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("sample test.pdf",Array('Attachment'=>1));
?>