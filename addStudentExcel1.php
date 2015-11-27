<?php

$classID = $_POST['classID'];

if ( isset($_FILES["file"])) {

	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);
	if($extension!="xlsx"&&$extension!="xls"){
		echo "<script>alert('Wrong File Type!!!');</script>";
		echo "<script>window.location.href='index.php?page=student1&idC=$classID'</script>";
		die;
	}

	if ($_FILES["file"]["error"] > 0) {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
	}
	else {
		if (file_exists($_FILES["file"]["name"])) {
			unlink($_FILES["file"]["name"]);
		}
		$storagename = "discussdesk.xlsx";
		move_uploaded_file($_FILES["file"]["tmp_name"], "Classes/".$storagename);
	}
} 
else {
	echo "<script>alert('No Selected File!!!');</script>";
	echo "<script>window.location.href='index.php?page=student1&idC=$classID'</script>";
	die;
}

include 'Classes/PHPExcel/IOFactory.php';

// This is the file path to be uploaded.
$inputFileName = 'Classes/discussdesk.xlsx'; 

try {
	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
} catch(Exception $e) {
	die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet

$error = array();
$countError = 0;

for($i=2; $i<=$arrayCount; $i++){
	$noMatric = trim($allDataInSheet[$i]["A"]);
	$name = trim($allDataInSheet[$i]["B"]);

	if($noMatric==null){
		goto skip;
	}

	$query = "SELECT * FROM student WHERE studentID = '".$noMatric."'";
	$sql = mysql_query($query);
	$recResult = mysql_fetch_array($sql);
	// $existName = $recResult["name"];

	$check = mysql_num_rows($sql);

	if($check==0) {
		$password = md5("abc123");
		$insertTable= mysql_query("INSERT INTO student (studentID, studentName, password, classID) values('$noMatric', '$name', '$password', '$classID')");
		// echo "INSERT INTO student (studentID, studentName, password, classID) values('$noMatric', '$name', '$password', '$classID')<br>";
	} 
	else {
		// $msg = 'Record already exist. <div style="Padding:20px 0 0 0;"><a href="">Go Back to tutorial</a></div>';
		$error[$noMatric] = $name;
		$countError = 1;
	}

	skip:
}

if($countError==0){
	echo "<script>alert('Insert Successful...');</script>";
	echo "<script>window.location.href='index.php?page=student1&idC=$classID'</script>";
	die;
}
else{
?>

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List All Student Already Exists</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=student" class="btn btn-primary">List Class of Student</a>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-lg-8" align="center">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
							<tr>
								<th>No</th>
								<th>Matric No</th>
								<th>Student Name</th>
							</tr>
						<?php 
						$n = 1;
						foreach($error as $MatricNo => $studentName): ?>
							<tr>
								<td><?php echo $n++; ?></td>
								<td><?php echo $MatricNo; ?></td>
								<td><?php echo $studentName; ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=student1&idC=<?php echo $classID; ?>" class="btn btn-warning">Back to List of Student</a><br><br>
			</div>
		</div>
	</div>
</div>

<?php } ?>