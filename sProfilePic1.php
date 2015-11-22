<?php
$tea = $_FILES["file"]["name"];

if(($_FILES["file"]["name"])!=NULL){
$allowedExts = array("gif", "jpeg", "jpg", "png", "PNG");

// pilih either one
// 1
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
// 2
//$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

if ( (($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/x-png")
			|| ($_FILES["file"]["type"] == "image/png"))
			&& ($_FILES["file"]["size"] < 200000)
			&& in_array($extension, $allowedExts) ) {
	if ( $_FILES["file"]["error"] > 0 ) {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	} else {
			// echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			// echo "Type: " . $_FILES["file"]["type"] . "<br>";
			// echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			// echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

			if (file_exists("images/Profile_Picture/" . $_FILES["file"]["name"])) {
				// echo $_FILES["file"]["name"] . " already exists. ";
				mysql_query("UPDATE profilepic SET location='images/Profile_Picture/".$_FILES["file"]["name"]."' WHERE userID='".$_SESSION['userID']."'");
				echo "<script>alert('Update successful...');</script>";
			} else {
				move_uploaded_file($_FILES["file"]["tmp_name"],
					"images/Profile_Picture/".$_FILES["file"]["name"]);
				mysql_query("UPDATE profilepic SET location='images/Profile_Picture/".$_FILES["file"]["name"]."' WHERE userID='".$_SESSION['userID']."'");
				echo "<script>alert('Update successful...');</script>";

				// echo "Stored in: " . "images/Profile_Picture" . $_FILES["file"]["name"];
			}
	}
} else {
	echo "<script>alert('Invalid file...');</script>";
	// echo "Invalid file";
}
}

	echo "<script>window.location.href='index.php?page=sProfile'</script>";
?>
