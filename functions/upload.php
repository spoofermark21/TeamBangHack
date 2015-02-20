<?php
//echo phpinfo();
//include_once('database/class.concerns.php');

include_once('../BarangayMovers/home.php');

$error = '';
$target_dir = "../database/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if ($_FILES["fileToUpload"]['error'] !== UPLOAD_ERR_OK) {
   die("Upload failed with error code " . $_FILES['fileToUpload']['error']);
}
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $error =  "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $error =  "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $error =  "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000000000) {
    $error =  "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $error =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $error =  "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    	$file_name = $_FILES["fileToUpload"]["name"];
    	$topic = $_POST['title'];
		$desc = $_POST['description'];
		$location = $_POST['cmb_brgy'];
		$random_project = 0;

		$db_con = mysqli_connect("localhost", "root", "", "barangaymovers");

        if (mysqli_connect_errno()) {
            printf("Connect failed: \n" . mysqli_connect_error());
            exit();
        }

        while (true) {
        	$random_project = rand(1,100000);

	        if ($query = mysqli_query($db_con, "SELECT project_id FROM project_details WHERE project_id='$random_project'")) {
	        	$row_num = mysqli_num_rows($query);
	        	if ($row_num > 0) {
	        		$random_project = rand(200000,300000);
	        	}
	        	else {
	        		break;
	        	}
	        }
        }
        
        try {
        	if (mysqli_query($db_con, "INSERT INTO `project_details` (`project_filename`,`project_title`,`project_description`,`project_location`,`project_status`,`project_id`)VALUES('$file_name','$topic','$desc','$location','0',$random_project)")) {
        		echo "successful";
     		}
        } catch (Exception $e) {
        	$error = 'Please fill up the form correctly.';
        }
        
		mysqli_close($db_con);
		header("Location: ../pagess/projects.php");
    } else {
        $error = 'File not uploaded.';
    }
}





