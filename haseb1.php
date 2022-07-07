<?php

		$student_name = $_POST['stu_name'];
		$Roll_Number = $_POST['roll'];
		$Reg_Number = $_POST['reg'];
		$photo = $_POST['photo']
		$select_semester = $_POST['add_semester'];
		$Phone_Number = $_POST['stu_number'];
		$student_email = $_POST['email'];
		$father_Phone_Number = $_POST['f_number'];
		$mother_name = $_POST['m_name'];
		$mother_Phone_Number = $_POST['m_number'];
		$Date_of_Birth= $_POST['date_of_birth']
		$Marital_Status=$_POST['marital_statu']
		$Religion=$_POST['religion']
		
		$add_Permanent_Division = $_POST['add_Permanent_Division'];
		$District_Name = $_POST['p_istrict'];
		$Upazila_Name = $_POST['p_pazila'];
		$village_Name = $_POST['p_village'];
		$Post_Code = $_POST['p_Post_Code'];
		
		$add_Current_Division = $_POST['add_current_Division'];
		$District_Name = $_POST['c_istrict'];
		$Upazila_Name = $_POST['c_pazila'];
		$village_Name = $_POST['c_village'];
		$Post_Code = $_POST['c_Post_Code'];
		
		
		
		$conn = mysqli_connect('localhost','root','','haseb2');
		
		$sql = "INSERT INTO all_cv_info(Name,Email,Phone Number,Father Name,	Father Phone Number,Mother Name,Mother phone Number,Semester,Permanent Devition,Permanent District,Permanent Upazila,Permanent village,Current deviton,Current distict,Current post code)VALUE('$student_name','$Roll_Number','$Reg_Number','$add_semister','$Phone_Number','$student_email','$father_Phone_Number','$mother_name','$mother_Phone_Number,'$add_Permanent_Division','$District_Name','$Upazila_Name','$village_Name','$Post_Code,)";
	
		mysqli_query($conn,$sql);
		
		$data_collecton = "SELECT * FROM all_cv_info";
		
		$result = mysqli_query($conn,$data_collecton);
		
		while($row = mysqli_fetch_assoc($result)){
			echo "{$row['Name']}";
		};
		








?>