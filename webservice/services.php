<?php 

	include_once 'db_function.php';
	$db = new DB_Functions();

// testing database conection
$method = $_SERVER['REQUEST_METHOD'];
switch($method)
{
	case "POST":

	$mode=$_REQUEST['mode'];
	if($mode=="addstudents")
	{
						
		$query='INSERT INTO `manage_student` (`name`, `rollno`, `address`, `email`, `class`, `status`, `created_on`) VALUES ("'.$_REQUEST['name'].'",'.$_REQUEST['rollno'].',"'.$_REQUEST['address'].'", "'.$_REQUEST['email'].'", "'.$_REQUEST['class'].'", '.$_REQUEST['status'].', "'.$_REQUEST['createdon'].'")';

		$id=$db->insertstudent($query);
						
		$result=array("Code"=>200,"id"=>$id,"message"=>"Record inserted successfully");	
			echo json_encode($result); 
	}
	else{
		echo json_encode(array("code"=>501,"id"=>$id,"message"=>"Invalid Session"));
	}
	break;

		$query='UPDATE `manage_student` SET `name`=[name],`photo`=[photo],`rollno`=[rollno],`address`=[address],`email`=[email],`class`=[class],`status`=[status],`created_on`=[created_on],`created_by_name`=[created_by_name],`created_by_email`=[created_by_email],`updated_on`=[updated_on],`updated_by_name`=[updated_by_name],`updated_by_email`=[updated_by_email] WHERE 1';

		$id=$db->updatestudent($query);
		$result=array("Code"=>200,"id"=>$id,"message"=>"Record inserted successfully");
		echo json_encode($result);
	}
	else{
		echo json_encode(array("Code"=>501,"id"=>$id,"message"=>"Invalid Session"));
	}
	break;


	case "GET":
	break;
}
