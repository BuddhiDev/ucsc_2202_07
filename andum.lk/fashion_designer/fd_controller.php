<?php

 include("../server.php");

 

 if (isset($_POST['update_fd'])) {
 
   $f_id =  $_SESSION['nic'];
 
   $nic = mysqli_real_escape_string($db, $_POST['nic']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $fname = mysqli_real_escape_string($db, $_POST['fname']);
   $lname = mysqli_real_escape_string($db, $_POST['lname']);
   $password1 = mysqli_real_escape_string($db, $_POST['password']);
   $password2 = mysqli_real_escape_string($db, $_POST['cpassword']);
   $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
   $address = mysqli_real_escape_string($db, $_POST['address']);
   $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);
   $ac_no = mysqli_real_escape_string($db, $_POST['ac_no']);
   $bank = mysqli_real_escape_string($db, $_POST['bank']);
   
  
 
   if ($password1 != $password2){
       array_push($errors, "Passwords do not match");
   }
   else{
     $filename = $_FILES["profilepic"]["name"];
     $tempname = $_FILES["profilepic"]["tmp_name"];
     $folder = "profile_pictures/".$filename;
     
       $password = md5($password1);
       $sql = "UPDATE users SET fname='$fname',lname='$lname',contactno='$contactno',password='$password',address='$address',postalcode='$postalcode',image ='$filename' WHERE nic='$nic'";
       $result=mysqli_query($db, $sql);
 
       $sqlf = "UPDATE fashion_designer SET ac_no='$ac_no', bank='$bank' WHERE nic='$nic'";
     $resultf = mysqli_query($db, $sqlf);
 
       if (move_uploaded_file($tempname, $folder))
       {
           echo "<script>alert('Image Has Been Uploaded')</script>";
       }
       else
       {
           echo "<script>alert('Image Does Not Uploaded')</script>";
       }
 
       if($resultf)
     {
         header('location: index.php');
     }
     else{
         echo "<script>alert('Sorry! Update Unsuccessful')</script>";
     }
 
     }
 
   
 
   $filename1 = $_FILES["addpic1"]["name"];
   $tempname1 = $_FILES["addpic1"]["tmp_name"];
   $folder1 = "sample_images/".$filename1;
 
       $sql1 = "UPDATE fashion_designer SET  image1='$filename1' WHERE nic='$nic'";
       $result1=mysqli_query($db, $sql1);
 
       if (move_uploaded_file($tempname1, $folder1))
       {
           echo "<script>alert('Image Has Been Uploaded')</script>";
       }
       else
       {
           echo "<script>alert('Image Does Not Uploaded')</script>";
       }
 
      //design2
       $filename2 = $_FILES["addpic2"]["name"];
       $tempname2 = $_FILES["addpic2"]["tmp_name"];
       $folder2 = "sample_images/".$filename2;
   
      
      
       $sql2 = "UPDATE fashion_designer SET  image2='$filename2' WHERE nic='$nic'";
           $result2=mysqli_query($db, $sql2);
   
           if (move_uploaded_file($tempname2, $folder2))
           {
               echo "<script>alert('Image Has Been Uploaded')</script>";
           }
           else
           {
               echo "<script>alert('Image Does Not Uploaded')</script>";
           }
 
 
           //design3
 
           $filename3 = $_FILES["addpic3"]["name"];
           $tempname3 = $_FILES["addpic3"]["tmp_name"];
           $folder3 = "sample_images/".$filename3;
       
           $sql3 = "UPDATE fashion_designer SET  image3='$filename3' WHERE nic='$nic'";
           $result3=mysqli_query($db, $sql3);
   
          
               if (move_uploaded_file($tempname3, $folder3))
               {
                   echo "<script>alert('Image Has Been Uploaded')</script>";
               }
               else
               {
                   echo "<script>alert('Image Does Not Uploaded')</script>";
               }
 
             }
 
 

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
