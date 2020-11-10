<?php

//session start
session_start();

//initialize global variables
$nic = "";
$email = "";
$errors = array();
$search=false;
$category_filter=false;

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'andum');

//register
if (isset($_POST['register'])) {
    $nic = mysqli_real_escape_string($db, $_POST['nic']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['c_password']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
    $utype = mysqli_real_escape_string($db, $_POST['Usertype']);
    $addres = mysqli_real_escape_string($db, $_POST['address']);
    $postal = mysqli_real_escape_string($db, $_POST['postal']);

    if ($password1 != $password2) {
        array_push($errors, "Passwords do not match");
    }
    if (count($errors) == 0) {
        $password = md5($password1);
        // inser to user table
        $sql = "INSERT INTO users (nic, fname, email, lname, contactno, password, type, address, postalcode) VALUES ('$nic','$fname','$email','$lname','$contactno','$password','$utype','$addres','$postal')";
        mysqli_query($db, $sql);

        // insert user if tailor
        if ($utype == 0) {
            $sql1 = "INSERT INTO tailors (nic) VALUES ('$nic')";
            mysqli_query($db, $sql1);
        }

        // insert user if customer
        else if ($utype == 1) {
            $sql1 = "INSERT INTO customers (nic) VALUES ('$nic')";
            mysqli_query($db, $sql1);
        }

        //save session cache
        $_SESSION['nic'] = $nic;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['success'] = "You are now logged in";
        $_SESSION['utype'] = "$utype";

        if ($_SESSION['utype'] == 0) {
            header('location: tailor/index.php');
        } else if ($_SESSION['utype'] == 1) {
            header('location: customer/index.php');
        }
    }
}

//login
if (isset($_POST['login'])) {

    $nic = mysqli_real_escape_string($db, $_POST['nic']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);

    if (count($errors) == 0) {
        $password = md5($password1);
        $sql = "SELECT * FROM users WHERE nic='$nic' AND password='$password'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['nic'] = $nic;
            $_SESSION['success'] = "You are now logged in";
            if ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];
            }


            $sql = "SELECT type FROM users WHERE nic='$nic' AND password='$password'";
            $result = mysqli_query($db, $sql);

            if ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['utype'] = $row['type'];
            }


            if ($_SESSION['utype'] == 0) {
                header('location: tailor/index.php');
            } else if ($_SESSION['utype'] == 1) {
                header('location: customer/index.php');
            }
            else if ($_SESSION['utype'] == 2) {
               header('location: fashion_designer/index.php');

        } else {
            array_push($errors, "Wrong username/ password combination");
            //header('location: login.php');
        }
    }
  }
}
//logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['nic']);
    header('location: ../login.php');
}



if (isset($_POST['update_fd'])) {

    $nic = mysqli_real_escape_string($db, $_POST['nic']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['cpassword']);
    $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);
    
    $filename = $_FILES["profilepic"]["name"];
    $tempname = $_FILES["profilepic"]["tmp_name"];
    $folder = "profile_pictures/".$filename;

    if ($password1 != $password2){
        array_push($errors, "Passwords do not match");
    }
    else{
        $password = md5($password1);
        $sql = "UPDATE users SET fname='$fname',lname='$lname',contactno='$contactno',password='$password',address='$address',postalcode='$postalcode' image = '$filename' WHERE nic='$nic'";
        $result=mysqli_query($db, $sql);

        if (move_uploaded_file($tempname, $folder))
        {
            echo "<script>alert('Image Has Been Uploaded')</script>";
        }
        else
        {
            echo "<script>alert('Image Does Not Uploaded')</script>";
        }

    }


}

if(isset($_POST['add_design']))
{

  $f_nic =  $_SESSION['nic'];
  $category = mysqli_real_escape_string($db, $_POST['Unit']);
  $designname = mysqli_real_escape_string($db, $_POST['dename']);
  $price = mysqli_real_escape_string($db, $_POST['price']);

  $filename = $_FILES["mydesign"]["name"];
  $tempname = $_FILES["mydesign"]["tmp_name"];
  $folder = "designs/".$filename;


  if($category!="" && $designname!="" && $price!="")
  {

    $sql = " INSERT INTO design_showcase (category, design_name, price, image, permission, f_nic) VALUES ('$category', '$designname','$price', '$filename', '1', '$f_nic')";
    $result = mysqli_query($db,$sql);


    if (move_uploaded_file($tempname, $folder))
    {
        echo "<script>alert('Image Has Been Uploaded')</script>";
    }
    else
    {
        echo "<script>alert('Image Does Not Uploaded')</script>";
    }
  }
}







?>
