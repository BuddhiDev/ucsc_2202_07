<?php 

    session_start();

    $nic="";
    $email="";
    $errors=array();

    $db = mysqli_connect('localhost','root','','andum');

    if(isset($_POST['register']))
    {
        $nic = mysqli_real_escape_string($db,$_POST['nic']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password1 = mysqli_real_escape_string($db,$_POST['password']);
        $password2 = mysqli_real_escape_string($db,$_POST['c_password']);
        $fname = mysqli_real_escape_string($db,$_POST['fname']);
        $lname = mysqli_real_escape_string($db,$_POST['lname']);
        $contactno = mysqli_real_escape_string($db,$_POST['contactno']);
		$utype = mysqli_real_escape_string($db,$_POST['utype']);

        if($password1!=$password2)
        {
            array_push($errors,"Passwords do not match");
        }
        if(count($errors)==0)
        {
            $password=md5($password1);
            $sql = "INSERT INTO users (nic, fname, email, lname, contactno, password, type) VALUES ('$nic','$fname','$email','$lname','$contactno','$password','$utype')";
            mysqli_query($db,$sql);
            $_SESSION['nic']=$nic;
            $_SESSION['fname']=$fname;
            $_SESSION['lname']=$lname;
            $_SESSION['success']="You are now logged in";
			$_SESSION['utype']="$utype";
            
			if($_SESSION['utype']==0){
					header('location: tailor/index.php');
				}
				else if($_SESSION['utype']==1){
					header('location: customer/index.php');
				}
			
        }
    }


    if(isset($_POST['login']))
    {

        $nic = mysqli_real_escape_string($db,$_POST['nic']);
        $password1 = mysqli_real_escape_string($db,$_POST['password']);

        if(count($errors)==0)
        {
            $password=md5($password1);
            $sql = "SELECT * FROM users WHERE nic='$nic' AND password='$password'";
            $result=mysqli_query($db,$sql);

            if(mysqli_num_rows($result)==1)
            {
                $_SESSION['nic']=$nic;
                $_SESSION['success']="You are now logged in";
                if($row = mysqli_fetch_assoc($result))
				{
                    $_SESSION['fname'] =$row['fname'];
                    $_SESSION['lname'] =$row['lname'];
				}
                
				
				$sql = "SELECT type FROM users WHERE nic='$nic' AND password='$password'";
				$result=mysqli_query($db,$sql);
				
				if($row = mysqli_fetch_assoc($result))
				{
                  $_SESSION['utype'] = $row['type'];

				}
				
				
				if($_SESSION['utype']==0){
					header('location: tailor/index.php');
				}
				else if($_SESSION['utype']==1){
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
        unset($_SESSION['nic']);
        header('location: ../login.php');
    }

	if(isset($_POST['hireT']))
    {
			$t_nic = mysqli_real_escape_string($db,$_POST['t_nic']);
            $c_nic = mysqli_real_escape_string($db,$_POST['c_nic']);
            $c_fname = mysqli_real_escape_string($db,$_POST['c_fname']);

            $sql = "INSERT INTO orders (c_nic, c_fname, t_nic, status) VALUES ('$c_nic','$c_fname','$t_nic','Active')";
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