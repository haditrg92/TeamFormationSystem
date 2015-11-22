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
						<h1 class="page-header">View Group Formation</h1>
					</div>
				</div>';

				$CLid = $_GET['CLid'];
				$result = mysql_query("SELECT * FROM course_student 
					JOIN course_lecturer ON course_lecturer.course_lecturer_ID=course_student.course_lecturer_ID 
					JOIN course ON course_lecturer.courseID=course.courseID 
					JOIN lecturer ON lecturer.lecturerID=course_lecturer.lecturerID 
					JOIN semester ON course_lecturer.semesterID=semester.semesterID 
					WHERE course_student.studentID='".$_SESSION['userID']."' AND course_lecturer.course_lecturer_ID='".$_GET['id']."'");
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
$html .='</td></tr><tr><td colspan=3>&nbsp;</td></tr><tr><td align="right"><b>Lecturer Name :<b></td><td width="10">&nbsp;</td><td> ';
$html .= $row['lecturerName'];
$html .='</td></tr><tr><td colspan=3>&nbsp;</td></tr><tr><td align="right"><b>Lecturer Phone :<b></td><td width="10">&nbsp;</td><td> ';
$html .=$row['lecturerPhone'];
$html .='</td></tr><tr><td colspan=3>&nbsp;</td></tr><tr><td align="right"><b>Office Phone :<b></td><td width="10">&nbsp;</td><td> ';
$html .=$row['officePhone'];
$html .='</td></tr></table><br>';


				$result1 = mysql_query("SELECT * FROM course_student 
					JOIN student ON student.studentID=course_student.studentID 
					WHERE course_student.groups='".$row['groups']."' 
					ORDER BY student.studentName ASC");

$html .= '
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<b>Group ';
								$html .=$row['groups']+1;
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
										while($row1 = mysql_fetch_array($result1)):
$html .= "
										<tr>
											<td align='center'> ";
											$html .=$n++; 
											$html .="</td>
											<td align='center'>";
											$html .=$row1['studentID'];
											$html .=" </td><td>";
											$html .=$row1['studentName'];
											$html .="</td></tr>";
										endwhile;
$html .= '
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>';

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

$xx = $row['courseID']."-ListByGroup.pdf";

include("mpdf/mpdf.php");
$mpdf=new mPDF('', 'A4'); 
$mpdf->useSubstitutions=false; 
$mpdf->WriteHTML($html);
$mpdf->Output($xx, 'I');
mysql_close(); 
exit;

 ?>