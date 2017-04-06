<?php
session_start();

if(!isset($_SESSION['user'])){
	header("Location: login.php");
}

include "database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- jQuery -->
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="SHORTCUT ICON" href="images/logo.png" />
	<title>
	<?php
	$user = $_SESSION['user'];
	if($user=='admin'){
		//class
		if($_GET['page']=='class'){
			echo "List Program";
		}
		elseif($_GET['page']=='allClass'){
			echo "All Program";
		}
		elseif($_GET['page']=='addClass'){
			echo "Add Program";
		}
		elseif($_GET['page']=='addClass1'){
			echo "Add Program";
		}
		elseif($_GET['page']=='viewClass'){
			echo "View Program";
		}
		elseif($_GET['page']=='updateClass'){
			echo "Update Program";
		}
		elseif($_GET['page']=='updateClass1'){
			echo "Update Program";
		}
		elseif($_GET['page']=='deleteClass'){
			echo "Delete Program";
		}

		//semester
		elseif($_GET['page']=='semester'){
			echo "List Semester";
		}
		elseif($_GET['page']=='addSemester'){
			echo "Add Semester";
		}
		elseif($_GET['page']=='addSemester1'){
			echo "Add Semester";
		}
		elseif($_GET['page']=='viewSemester'){
			echo "View Semester";
		}
		elseif($_GET['page']=='updateSemester'){
			echo "Update Semester";
		}
		elseif($_GET['page']=='updateSemester1'){
			echo "Update Semester";
		}
		elseif($_GET['page']=='deleteSemester'){
			echo "Delete Semester";
		}
		elseif($_GET['page']=='currentSemester'){
			echo "Current Semester";
		}
		elseif($_GET['page']=='currentSemester1'){
			echo "Current Semester";
		}
		elseif($_GET['page']=='currentSemester2'){
			echo "Current Semester";
		}
		
		//course
		elseif($_GET['page']=='course'){
			echo "List Course";
		}
		elseif($_GET['page']=='addCourse'){
			echo "Add Course";
		}
		elseif($_GET['page']=='addCourse1'){
			echo "Add Course";
		}
		elseif($_GET['page']=='viewCourse'){
			echo "View Course";
		}
		elseif($_GET['page']=='updateCourse'){
			echo "Update Course";
		}
		elseif($_GET['page']=='updateCourse1'){
			echo "Update Course";
		}
		elseif($_GET['page']=='deleteCourse'){
			echo "Delete Course";
		}
		
		//lecturer
		elseif($_GET['page']=='lecturer'){
			echo "List Lecturer";
		}
		elseif($_GET['page']=='addLecturer'){
			echo "Add Lecturer";
		}
		elseif($_GET['page']=='addLecturer1'){
			echo "Add Lecturer";
		}
		elseif($_GET['page']=='viewLecturer'){
			echo "View Lecturer";
		}
		elseif($_GET['page']=='updateLecturer'){
			echo "Update Lecturer";
		}
		elseif($_GET['page']=='updateLecturer1'){
			echo "Update Lecturer";
		}
		elseif($_GET['page']=='deleteLecturer'){
			echo "Delete Lecturer";
		}
		elseif($_GET['page']=='resetPassword'){
			echo "Reset Password";
		}
		
		//student
		elseif($_GET['page']=='student'){
			echo "List Class of Student";
		}
		elseif($_GET['page']=='student1'){
			echo "List Student";
		}
		elseif($_GET['page']=='addStudent'){
			echo "Add Student";
		}
		elseif($_GET['page']=='addStudent1'){
			echo "Add Student";
		}
		elseif($_GET['page']=='viewStudent'){
			echo "View Student";
		}
		elseif($_GET['page']=='updateStudent'){
			echo "Update Student";
		}
		elseif($_GET['page']=='updateStudent1'){
			echo "Update Student";
		}
		elseif($_GET['page']=='deleteStudent'){
			echo "Delete Student";
		}
		elseif($_GET['page']=='addStudentExcel'){
			echo "Add Student By Excel";
		}
		elseif($_GET['page']=='addStudentExcel1'){
			echo "Add Student By Excel";
		}

		//learning
		elseif($_GET['page']=='learning'){
			echo "List Learning Style";
		}
		elseif($_GET['page']=='addLearning'){
			echo "Add Learning Style";
		}
		elseif($_GET['page']=='addLearning1'){
			echo "Add Learning Style";
		}
		elseif($_GET['page']=='viewLearning'){
			echo "View Learning Style";
		}
		elseif($_GET['page']=='updateLearning'){
			echo "Update Learning Style";
		}
		elseif($_GET['page']=='updateLearning1'){
			echo "Update Learning Style";
		}
		elseif($_GET['page']=='deleteLearning'){
			echo "Delete Learning Style";
		}

		//personality
		elseif($_GET['page']=='personality'){
			echo "List Personality Type";
		}
		elseif($_GET['page']=='addPersonality'){
			echo "Add Personality Type";
		}
		elseif($_GET['page']=='addPersonality1'){
			echo "Add Personality Type";
		}
		elseif($_GET['page']=='viewPersonality'){
			echo "View Personality Type";
		}
		elseif($_GET['page']=='updatePersonality'){
			echo "Update Personality Type";
		}
		elseif($_GET['page']=='updatePersonality1'){
			echo "Update Personality Type";
		}
		elseif($_GET['page']=='deletePersonality'){
			echo "Delete Personality Type";
		}

		// homepage
		elseif($_GET['page']=='homepage'){
			echo 'Homepage';
		}
	}
	elseif($user=='lecturer'){

		//profile
		if($_GET['page']=='lProfile'){
			echo 'Profile';
		}
		elseif($_GET['page']=='lProfileUpdate'){
			echo 'Update Profile';
		}
		elseif($_GET['page']=='lProfileUpdate1'){
			echo 'Update Profile';
		}
		elseif($_GET['page']=='lChangePassword'){
			echo 'Change Password';
		}
		elseif($_GET['page']=='lChangePassword1'){
			echo 'Change Password';
		}
		elseif($_GET['page']=='lProfilePic'){
			echo 'Change Picture Profile';
		}
		elseif($_GET['page']=='lProfilePic1'){
			echo 'Change Picture Profile';
		}

		//course teaching
		elseif($_GET['page']=='lCourseTeaching'){
			echo 'List Course Teaching';
		}
		elseif($_GET['page']=='lAddCourseTeaching'){
			echo 'Add Course Teaching';
		}
		elseif($_GET['page']=='lAddCourseTeaching1'){
			echo 'Add Course Teaching';
		}
		elseif($_GET['page']=='lAddCourseTeaching2'){
			echo 'Add Course Teaching';
		}
		elseif($_GET['page']=='lViewCourseTeaching'){
			echo 'View Course Teaching';
		}
		elseif($_GET['page']=='lDeleteCourseTeaching'){
			echo 'Delete Course Teaching';
		}
		elseif($_GET['page']=='lByGroup'){
			echo 'View List By Group Formation';
		}

		//group formation
		elseif($_GET['page']=='lGroupFormation'){
			echo 'Group Formation';
		}
		elseif($_GET['page']=='lViewGroupFormation'){
			echo 'View List All Group Formation';
		}
		elseif($_GET['page']=='lGenerate'){
			echo 'Generate Group';
		}
		elseif($_GET['page']=='lGenerateAHP'){
			echo 'Generate AHP';
		}

		//group formation
		elseif($_GET['page']=='lAnalysis'){
			echo 'Analysis of Student Performance';
		}
		elseif($_GET['page']=='lViewAnalysis'){
			echo 'View Analysis of Student Performance';
		}
		elseif($_GET['page']=='lAnalysisPersonality'){
			echo 'Analysis Personality Type';
		}
		elseif($_GET['page']=='lAnalysisLearning'){
			echo 'Analysis Learning Style';
		}

		// homepage
		elseif($_GET['page']=='homepage'){
			echo 'Homepage';
		}
	}

	elseif($user=='student'){
		//profile
		if($_GET['page']=='sProfile'){
			echo 'Profile';
		}
		elseif($_GET['page']=='sProfileUpdate'){
			echo 'Update Profile';
		}
		elseif($_GET['page']=='sProfileUpdate1'){
			echo 'Update Profile';
		}
		elseif($_GET['page']=='sChangePassword'){
			echo 'Change Password';
		}
		elseif($_GET['page']=='sChangePassword1'){
			echo 'Change Password';
		}
		elseif($_GET['page']=='sProfilePic'){
			echo 'Change Profile Picture';
		}
		elseif($_GET['page']=='sProfilePic1'){
			echo 'Change Profile Picture';
		}

		// survey
		elseif($_GET['page']=='surveyLearning'){
			echo 'Survey Learning Style';
		}
		elseif($_GET['page']=='surveyLearning1'){
			echo 'Answer Survey Learning Style';
		}
		elseif($_GET['page']=='surveyLearning2'){
			echo 'Answer Survey Learning Style';
		}
		elseif($_GET['page']=='surveyPersonality'){
			echo 'Survey Personality Type';
		}
		elseif($_GET['page']=='surveyPersonality1'){
			echo 'Answer Survey Personality Type';
		}
		elseif($_GET['page']=='surveyPersonality2'){
			echo 'Answer Survey Personality Type';
		}

		//course registered
		elseif($_GET['page']=='sCourseRegister'){
			echo 'Course Register';
		}
		elseif($_GET['page']=='sAddCourseRegister'){
			echo 'Add Course Register';
		}
		elseif($_GET['page']=='sAddCourseRegister1'){
			echo 'Add Course Register';
		}
		elseif($_GET['page']=='sAddCourseRegister2'){
			echo 'AddCourseRegister2';
		}
		elseif($_GET['page']=='sViewCourseRegister'){
			echo 'View Course Register';
		}
		elseif($_GET['page']=='sDeleteCourseRegister'){
			echo 'Delete Course Register';
		}

		//group formation
		elseif($_GET['page']=='sGroupFormation'){
			echo 'Group Formation';
		}
		elseif($_GET['page']=='sViewGroupFormation'){
			echo 'View Group Formation';
		}

		//analysis
		elseif($_GET['page']=='sAnalysisPersonality'){
			echo 'Personality Type';
		}
		elseif($_GET['page']=='sAnalysisLearning'){
			echo 'Learning Style';
		}

		// homepage
		elseif($_GET['page']=='homepage'){
			echo 'Homepage';
		}
	}
	?>
	</title>

	<!-- Bootstrap Core CSS -->
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Team Formation System</a>
			</div>
			<!-- /.navbar-header -->

			<ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">
						<?php
						if($_SESSION['user']!="admin"){
							$ss = "";
							if($_SESSION['user']=="lecturer")
								$ss = "lProfile";
							elseif($_SESSION['user']=="student")
								$ss = "sProfile";
						?>
						<li><a href="index.php?page=<?php echo $ss; ?>"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
						<li class="divider"></li>
						<?php } ?>
						<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
					</ul>
					<!-- /.dropdown-user -->
				</li>
				<!-- /.dropdown -->
			</ul>
			<!-- /.navbar-top-links -->

			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
					<?php
					include "menu.php";
					?>
					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>

		<!-- Page Content -->
		<?php

		if(!isset($_GET['page'])){
			header('Location: index.php?page=homepage');
		}

		if($user=='admin'){

			//class
			if($_GET['page']=='class'){
				include "class.php";
			}
			elseif($_GET['page']=='allClass'){
				include "allClass.php";
			}
			elseif($_GET['page']=='addClass'){
				include "addClass.php";
			}
			elseif($_GET['page']=='addClass1'){
				include "addClass1.php";
			}
			elseif($_GET['page']=='viewClass'){
				include "viewClass.php";
			}
			elseif($_GET['page']=='updateClass'){
				include "updateClass.php";
			}
			elseif($_GET['page']=='updateClass1'){
				include "updateClass1.php";
			}
			elseif($_GET['page']=='deleteClass'){
				include "deleteClass.php";
			}

			//semester
			elseif($_GET['page']=='semester'){
				include "semester.php";
			}
			elseif($_GET['page']=='addSemester'){
				include "addSemester.php";
			}
			elseif($_GET['page']=='addSemester1'){
				include "addSemester1.php";
			}
			elseif($_GET['page']=='viewSemester'){
				include "viewSemester.php";
			}
			elseif($_GET['page']=='updateSemester'){
				include "updateSemester.php";
			}
			elseif($_GET['page']=='updateSemester1'){
				include "updateSemester1.php";
			}
			elseif($_GET['page']=='deleteSemester'){
				include "deleteSemester.php";
			}
			elseif($_GET['page']=='currentSemester'){
				include "currentSemester.php";
			}
			elseif($_GET['page']=='currentSemester1'){
				include "currentSemester1.php";
			}
			elseif($_GET['page']=='currentSemester2'){
				include "currentSemester2.php";
			}
			
			//course
			elseif($_GET['page']=='course'){
				include "course.php";
			}
			elseif($_GET['page']=='addCourse'){
				include "addCourse.php";
			}
			elseif($_GET['page']=='addCourse1'){
				include "addCourse1.php";
			}
			elseif($_GET['page']=='viewCourse'){
				include "viewCourse.php";
			}
			elseif($_GET['page']=='updateCourse'){
				include "updateCourse.php";
			}
			elseif($_GET['page']=='updateCourse1'){
				include "updateCourse1.php";
			}
			elseif($_GET['page']=='deleteCourse'){
				include "deleteCourse.php";
			}
			
			//lecturer
			elseif($_GET['page']=='lecturer'){
				include "lecturer.php";
			}
			elseif($_GET['page']=='addLecturer'){
				include "addLecturer.php";
			}
			elseif($_GET['page']=='addLecturer1'){
				include "addLecturer1.php";
			}
			elseif($_GET['page']=='viewLecturer'){
				include "viewLecturer.php";
			}
			elseif($_GET['page']=='updateLecturer'){
				include "updateLecturer.php";
			}
			elseif($_GET['page']=='updateLecturer1'){
				include "updateLecturer1.php";
			}
			elseif($_GET['page']=='deleteLecturer'){
				include "deleteLecturer.php";
			}
			elseif($_GET['page']=='resetPassword'){
				include "resetPassword.php";
			}
			
			//student
			elseif($_GET['page']=='student'){
				include "student.php";
			}
			elseif($_GET['page']=='student1'){
				include "student1.php";
			}
			elseif($_GET['page']=='addStudent'){
				include "addStudent.php";
			}
			elseif($_GET['page']=='addStudent1'){
				include "addStudent1.php";
			}
			elseif($_GET['page']=='viewStudent'){
				include "viewStudent.php";
			}
			elseif($_GET['page']=='updateStudent'){
				include "updateStudent.php";
			}
			elseif($_GET['page']=='updateStudent1'){
				include "updateStudent1.php";
			}
			elseif($_GET['page']=='deleteStudent'){
				include "deleteStudent.php";
			}
			elseif($_GET['page']=='addStudentExcel'){
				include "addStudentExcel.php";
			}
			elseif($_GET['page']=='addStudentExcel1'){
				include "addStudentExcel1.php";
			}

			//learning
			elseif($_GET['page']=='learning'){
				include "learning.php";
			}
			elseif($_GET['page']=='addLearning'){
				include "addLearning.php";
			}
			elseif($_GET['page']=='addLearning1'){
				include "addLearning1.php";
			}
			elseif($_GET['page']=='viewLearning'){
				include "viewLearning.php";
			}
			elseif($_GET['page']=='updateLearning'){
				include "updateLearning.php";
			}
			elseif($_GET['page']=='updateLearning1'){
				include "updateLearning1.php";
			}
			elseif($_GET['page']=='deleteLearning'){
				include "deleteLearning.php";
			}

			//personality
			elseif($_GET['page']=='personality'){
				include "personality.php";
			}
			elseif($_GET['page']=='addPersonality'){
				include "addPersonality.php";
			}
			elseif($_GET['page']=='addPersonality1'){
				include "addPersonality1.php";
			}
			elseif($_GET['page']=='viewPersonality'){
				include "viewPersonality.php";
			}
			elseif($_GET['page']=='updatePersonality'){
				include "updatePersonality.php";
			}
			elseif($_GET['page']=='updatePersonality1'){
				include "updatePersonality1.php";
			}
			elseif($_GET['page']=='deletePersonality'){
				include "deletePersonality.php";
			}

			// homepage
			elseif($_GET['page']=='homepage'){
				include 'homepage.php';
			}
		}
		elseif($user=='lecturer'){

			//profile
			if($_GET['page']=='lProfile'){
				include 'lProfile.php';
			}
			elseif($_GET['page']=='lProfileUpdate'){
				include 'lProfileUpdate.php';
			}
			elseif($_GET['page']=='lProfileUpdate1'){
				include 'lProfileUpdate1.php';
			}
			elseif($_GET['page']=='lChangePassword'){
				include 'lChangePassword.php';
			}
			elseif($_GET['page']=='lChangePassword1'){
				include 'lChangePassword1.php';
			}
			elseif($_GET['page']=='lProfilePic'){
				include 'lProfilePic.php';
			}
			elseif($_GET['page']=='lProfilePic1'){
				include 'lProfilePic1.php';
			}

			//course teaching
			elseif($_GET['page']=='lCourseTeaching'){
				include 'lCourseTeaching.php';
			}
			elseif($_GET['page']=='lAddCourseTeaching'){
				include 'lAddCourseTeaching.php';
			}
			elseif($_GET['page']=='lAddCourseTeaching1'){
				include 'lAddCourseTeaching1.php';
			}
			elseif($_GET['page']=='lAddCourseTeaching2'){
				include 'lAddCourseTeaching2.php';
			}
			elseif($_GET['page']=='lViewCourseTeaching'){
				include 'lViewCourseTeaching.php';
			}
			elseif($_GET['page']=='lDeleteCourseTeaching'){
				include 'lDeleteCourseTeaching.php';
			}
			elseif($_GET['page']=='lByGroup'){
				include 'lByGroup.php';
			}

			//group formation
			elseif($_GET['page']=='lGroupFormation'){
				include 'lGroupFormation.php';
			}
			elseif($_GET['page']=='lViewGroupFormation'){
				include 'lViewGroupFormation.php';
			}
			elseif($_GET['page']=='lGenerate'){
				include 'lGenerate.php';
			}
			elseif($_GET['page']=='lGenerateAHP'){
				include 'lGenerateAHP.php';
			}

			//group formation
			elseif($_GET['page']=='lAnalysis'){
				include 'lAnalysis.php';
			}
			elseif($_GET['page']=='lViewAnalysis'){
				include 'lViewAnalysis.php';
			}
			elseif($_GET['page']=='lAnalysisPersonality'){
				include 'lAnalysisPersonality.php';
			}
			elseif($_GET['page']=='lAnalysisLearning'){
				include 'lAnalysisLearning.php';
			}

			// homepage
			elseif($_GET['page']=='homepage'){
				include 'homepage.php';
			}
		}

		elseif($user=='student'){
			//profile
			if($_GET['page']=='sProfile'){
				include 'sProfile.php';
			}
			elseif($_GET['page']=='sProfileUpdate'){
				include 'sProfileUpdate.php';
			}
			elseif($_GET['page']=='sProfileUpdate1'){
				include 'sProfileUpdate1.php';
			}
			elseif($_GET['page']=='sChangePassword'){
				include 'sChangePassword.php';
			}
			elseif($_GET['page']=='sChangePassword1'){
				include 'sChangePassword1.php';
			}
			elseif($_GET['page']=='sProfilePic'){
				include 'sProfilePic.php';
			}
			elseif($_GET['page']=='sProfilePic1'){
				include 'sProfilePic1.php';
			}

			// survey
			elseif($_GET['page']=='surveyLearning'){
				include 'surveyLearning.php';
			}
			elseif($_GET['page']=='surveyLearning1'){
				include 'surveyLearning1.php';
			}
			elseif($_GET['page']=='surveyLearning2'){
				include 'surveyLearning2.php';
			}
			elseif($_GET['page']=='surveyPersonality'){
				include 'surveyPersonality.php';
			}
			elseif($_GET['page']=='surveyPersonality1'){
				include 'surveyPersonality1.php';
			}
			elseif($_GET['page']=='surveyPersonality2'){
				include 'surveyPersonality2.php';
			}

			//course registered
			elseif($_GET['page']=='sCourseRegister'){
				include 'sCourseRegister.php';
			}
			elseif($_GET['page']=='sAddCourseRegister'){
				include 'sAddCourseRegister.php';
			}
			elseif($_GET['page']=='sAddCourseRegister1'){
				include 'sAddCourseRegister1.php';
			}
			elseif($_GET['page']=='sAddCourseRegister2'){
				include 'sAddCourseRegister2.php';
			}
			elseif($_GET['page']=='sViewCourseRegister'){
				include 'sViewCourseRegister.php';
			}
			elseif($_GET['page']=='sDeleteCourseRegister'){
				include 'sDeleteCourseRegister.php';
			}

			//group formation
			elseif($_GET['page']=='sGroupFormation'){
				include 'sGroupFormation.php';
			}
			elseif($_GET['page']=='sViewGroupFormation'){
				include 'sViewGroupFormation.php';
			}

			//analysis
			elseif($_GET['page']=='sAnalysisPersonality'){
				include 'sAnalysisPersonality.php';
			}
			elseif($_GET['page']=='sAnalysisLearning'){
				include 'sAnalysisLearning.php';
			}

			// homepage
			elseif($_GET['page']=='homepage'){
				include 'homepage.php';
			}
		}
		?>
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

</html>
<?php mysql_close(); ?>