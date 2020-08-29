<?php 

    session_start();

    $username="";
    $email="";
    $errors=array();

    $db = mysqli_connect('localhost','root','','andum');

    if(isset($_POST['register']))
    {
        $username = mysqli_real_escape_string($db,$_POST['uname']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password1 = mysqli_real_escape_string($db,$_POST['password']);
        $password2 = mysqli_real_escape_string($db,$_POST['c_password']);
		$u_type = mysqli_real_escape_string($db,$_POST['u_type']);

        if(empty($username))
        {
            array_push($errors,"Username is required");
        }
        if(empty($email))
        {
            array_push($errors,"Email is required");
        }
        if(empty($password1))
        {
            array_push($errors,"Password is required");
        }
        if($password1!=$password2)
        {
            array_push($errors,"Passwords do not match");
        }
        if(count($errors)==0)
        {
            $password=md5($password1);
            $sql = "INSERT INTO users (username, email, password, type) VALUES ('$username','$email','$password','$u_type')";
            mysqli_query($db,$sql);
            $_SESSION['username']=$username;
            $_SESSION['success']="You are now logged in";
			$_SESSION['u_type']="$u_type";
            
			if($_SESSION['u_type']==0){
					header('location: tailor/index.php');
				}
				else if($_SESSION['u_type']==1){
					header('location: customer/index.php');
				}
			
        }
    }


    if(isset($_POST['login']))
    {

        $username = mysqli_real_escape_string($db,$_POST['uname']);
        $password1 = mysqli_real_escape_string($db,$_POST['password']);

        if(empty($username))
        {
            array_push($errors,"Username is required");
        }
        if(empty($password1))
        {
            array_push($errors,"Password is required");
        }
        if(count($errors)==0)
        {
            $password=md5($password1);
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result=mysqli_query($db,$sql);

            if(mysqli_num_rows($result)==1)
            {
                $_SESSION['username']=$username;
                $_SESSION['success']="You are now logged in";
				
				$sql = "SELECT type FROM users WHERE username='$username' AND password='$password'";
				$result=mysqli_query($db,$sql);
				
				if($row = mysqli_fetch_assoc($result))
				{
      			$_SESSION['u_type'] = $row['type'];
				}
				
				
				if($_SESSION['u_type']==0){
					header('location: tailor/index.php');
				}
				else if($_SESSION['u_type']==1){
					header('location: customer/index.php');
				}
                
                
            }
            else
            {
                array_push($errors,"Wrong username/ password combination");
                //header('location: login.php');
            }
            
        }

    }    

    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

	if(isset($_POST['hireT']))
    {
			$t_username = mysqli_real_escape_string($db,$_POST['t_name']);
			
            $sql = "INSERT INTO orders (cus_username, t_username, status) VALUES ('$username','$t_username','Hello')";
            $result=mysqli_query($db,$sql);
			if($result)
			{
				header('location: hired_list.php');
			}
		else{
			array_push($errors,"Hire a tailor failed, try again later");
		}

	}
        
?>