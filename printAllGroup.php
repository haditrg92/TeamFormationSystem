<?php
session_start();
if(!isset($_SESSION['user'])){
	header("Location: login.php");
}

include "database.php";

$html = '<!DOCTYPE html>
<html lang="en">

<head>

	<!-- jQuery -->
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>View List All Group Formation</title>

	<!-- Bootstrap Core CSS -->
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	
</head>

<body>

	<div id="wrapper">

		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="container-fluid">';


// create some HTML content
$html .= '
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">View List All Group Formation</h1>
					</div>
				</div>';

				$CLid = $_GET['CLid'];
				$result = mysql_query("SELECT * FROM course_lecturer 
										JOIN course ON course.courseID=course_lecturer.courseID 
										JOIN semester ON semester.semesterID=course_lecturer.semesterID 
										WHERE course_lecturer_ID='$CLid'");
				$row = mysql_fetch_array($result);
	
$html .= '<table cellspacing="20">
			<tr><td align="right"><b>Course Code :<b></td><td width="10">&nbsp;</td><td> '; 
$html .=	 $row['courseID'];
$html .='</td></tr><tr><td colspan=3>&nbsp;</td></tr>
		<tr><td align="right"><b>Course Name :</b></td><td width="10">&nbsp;</td><td> ';
$html .= $row['courseName'];
$html .='</td></tr><tr><td colspan=3>&nbsp;</td></tr>
		<tr><td align="right"><b><b>Semester :</b></td><td width="10">&nbsp;</td><td> Semester ';
$html .=$row['semesterNo']; 
$html .=' Session ';
$html .=$row['semesterSession'];
$html .='</td></tr><tr><td colspan=3>&nbsp;</td></tr></table><br>';

				$grouping = array();

				$result1 = mysql_query("SELECT * FROM course_student 
										JOIN student ON student.studentID=course_student.studentID 
										WHERE course_student.course_lecturer_ID='$CLid' 
										ORDER BY course_student.groups ASC, student.studentName ASC");
				
				while($row1 = mysql_fetch_array($result1)):
					$grouping[$row1['groups']][$row1['studentID']] = $row1['studentName'];
				endwhile; 

				$i = 1;
				
				foreach($grouping as $group => $students):

$html .= '
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<b>Group ';
								$html .=$i++;
								$html .=' </b>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" cellpadding="10">
										<tr>
											<th width="50" align="center">No</th>
											<th width="100" align="center">Matric No.</th>
											<th>Name</th>
										</tr>';

										$n=1; 
										foreach($students as $noMatric => $name): 
$html .= "
										<tr>
											<td align='center'> ";
											$html .=$n++; 
											$html .="</td>
											<td align='center'> $noMatric </td>
											<td> $name </td>
										</tr>";
										endforeach;
$html .= '
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>';
				endforeach;

$html .= '
<br>



			</div>
		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->


	<!-- Bootstrap Core JavaScript -->
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>'; 

$xx = $row['courseID']."-ListAllGroup.pdf";

include("mpdf/mpdf.php");
$mpdf=new mPDF('c', 'A4'); 
$mpdf->useSubstitutions=false; 
$mpdf->WriteHTML($html);
$mpdf->Output($xx, 'I');
mysql_close(); 
exit;
?>