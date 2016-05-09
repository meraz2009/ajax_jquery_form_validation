<?php
	
	require_once 'dbconfig.php';


	if($_POST)
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$country=$_POST['country'];
		$gender=$_POST['gender'];
		$hobby=$_POST['hobby'];
		$term_service=$_POST['term_service'];
		//$joining_date =date('Y-m-d H:i:s');
		//print_r($_POST);die;
		
		$password = md5($password);
		$mul_hob=implode(',', $hobby);
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM registration WHERE email=:email");
			$stmt->execute(array(":email"=>$email));
			$count = $stmt->rowCount();

			
			if($count==0){
				
			$stmt = $db_con->prepare("INSERT INTO registration(username,email,password,country,gender,hobby,term_service) VALUES(:uname, :email, :pass,:coun,:gen,:hob,:term)");

			$stmt->bindParam(":uname",$username);
			$stmt->bindParam(":email",$email);
			$stmt->bindParam(":pass",$password);
				$stmt->bindParam(":coun",$country);
				$stmt->bindParam(":gen",$gender);
				$stmt->bindParam(":hob",$mul_hob);
				$stmt->bindParam(":term",$term_service);
		//	$stmt->bindParam(":jdate",$joining_date);
					
				if($stmt->execute())
				{
			/*		print_r($stmt);
					die;*/
					echo "registered";
				}
				else
				{
					echo "Query could not execute !";
				}
			
			}
			else{
				
				echo "1"; //  not available
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>