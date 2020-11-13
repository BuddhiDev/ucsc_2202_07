<?php

include("../server.php");

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
        $sql = "UPDATE users SET fname='$fname',lname='$lname',contactno='$contactno',password='$password',address='$address',postalcode='$postalcode',image ='$filename' WHERE nic='$nic'";
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

// add sample design
//if upload design button is pressed
// if(issets($_POST['upload_design'])){
    
//     //the path to store the uploaded image
//     $folder = "profile_pictures/".$filename;

//     //Get all the submitted data from the form
//     $filename = $_FILES["profilepic"]["name"];
//     $tempname = $_FILES["profilepic"]["tmp_name"];
//     $text = $_POST['text'];

//     $sql = "INSERT INTO design_showcase (category, design_name, price, image, permission, f_nic) VALUES ('$category','$price','$filename','1','$f_nic')";
//     $result = mysqli_query($db,$sql);
    
//     if (move_uploaded_file($tempname, $folder))
//     {
//         echo "<script>alert('Image Has Been Uploaded')</script>";
//     }
//     else
//     {
//         echo "<script>alert('Image Does Not Uploaded')</script>";
//     }


// }

if(isset($_POST['uploaddesign']))
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
