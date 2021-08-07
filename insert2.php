<?php
	include "connection.php";	
		$project=$_POST['pname'];
		$name=$_POST['lname'];
		$email=$_POST['lemail'];
		$contact=$_POST['lno'];

		$file = $_FILES['abstract']['tmp_name'];
		$image = addslashes(file_get_contents($_FILES['abstract']['tmp_name']));
		$image_name = addslashes($_FILES['abstract']['name']);
		move_uploaded_file($_FILES["abstract"]["tmp_name"],"uploads/" . $_FILES["abstract"]["name"]);
		$location="uploads/" . $_FILES["abstract"]["name"];

		$file1 = $_FILES['image']['tmp_name'];
		$image1 = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name1 = addslashes($_FILES['image']['name']);
		move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);
		$location1="uploads/" . $_FILES["image"]["name"];

		$query = "INSERT INTO `data`(`no.`, `Project_name`, `name`, `email`, `contact`, `Abstract`, `Video`) VALUES ('','$project','$name','$email','$contact','$location','$location1')";
		$sql1=mysqli_query($con,$query);	

		header("location:insert.php?flag=1")
			
?>