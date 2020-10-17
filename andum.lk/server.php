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
        } else {
            array_push($errors, "Wrong username/ password combination");
            //header('location: login.php');
        }
    }
}

//logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['nic']);
    header('location: ../login.php');
}

//hire a tailor
if (isset($_POST['hireT'])) {
    $t_nic = mysqli_real_escape_string($db, $_POST['t_nic']);
    $t_fname = mysqli_real_escape_string($db, $_POST['t_fname']);
    $c_nic = mysqli_real_escape_string($db, $_POST['c_nic']);
    $c_fname = mysqli_real_escape_string($db, $_POST['c_fname']);

    $sql = "INSERT INTO t_orders (c_nic, c_fname, t_nic, t_fname, status) VALUES ('$c_nic','$c_fname','$t_nic','$t_fname','Active')";
    $result = mysqli_query($db, $sql);
    if ($result) {
        header('location: hired_list.php');
    } else {
        array_push($errors, "Hire a tailor failed, try again later");
    }
}

$item_added = "false";

//select a dress
if(isset($_GET['dress_id']) ){
    $selected_dress_id = mysqli_real_escape_string($db, $_GET['dress_id']);
    $_SESSION['selected_dress_id']=$selected_dress_id;
    header('location: product.php');
}

//select a tailor
if(isset($_GET['t_nic']) ){
    $selected_t_nic = mysqli_real_escape_string($db, $_GET['t_nic']);
    $_SESSION['selected_t_nic']=$selected_t_nic;
    header('location: tailor.php');
}

//add to cart a dress
if (isset($_POST['addTocart'])) {
    $c_nic = mysqli_real_escape_string($db, $_POST['c_nic']);
    $dress_id = mysqli_real_escape_string($db, $_POST['dress_id']);


    $sql = "INSERT INTO cart (c_nic, dress_id) VALUES ('$c_nic','$dress_id')";
    $result = mysqli_query($db, $sql);
    if ($result) {
        $item_added = "true";
    } else {
        array_push($errors, "Add to cart failed, try again later");
    }
}

//checkout from cart
if (isset($_POST['Checkout'])) {
    $c_nic =  $_SESSION['nic'];

    $sql = "SELECT cart.order_id, dress_showcase.dress_id, dress_showcase.category, dress_showcase.title, dress_showcase.amount FROM cart INNER JOIN dress_showcase ON cart.c_nic='$c_nic' AND cart.dress_id=dress_showcase.dress_id";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $new_amount = $row["amount"] - 1;
            $dress_id = $row["dress_id"];
            $order_id = $row["order_id"];
            $sql1 = "UPDATE dress_showcase SET amount=$new_amount WHERE dress_id=$dress_id";
            $result1 = mysqli_query($db, $sql1);
            $sql1 = "DELETE FROM cart WHERE order_id=$order_id";
            $result1 = mysqli_query($db, $sql1);
        }

        header('location: purchases.php');
    } else {
        array_push($errors, "Add to cart failed, try again later");
    }
}


//update user data
if (isset($_POST['update_user'])) {

    $nic = mysqli_real_escape_string($db, $_POST['nic']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['cpassword']);
    $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);

    if ($password1 != $password2){
        array_push($errors, "Passwords do not match");
    }
    else{
    $password = md5($password1);
    $sql = "UPDATE users SET fname='$fname',lname='$lname',contactno='$contactno',password='$password',address='$address',postalcode='$postalcode' WHERE nic='$nic'";
    $result=mysqli_query($db, $sql);
    }
}
//

if (isset($_POST['save_user'])) {

    $nic = mysqli_real_escape_string($db, $_POST['nic']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['cpassword']);
    $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);

    if ($password1 != $password2){
        array_push($errors, "Passwords do not match");
    }
    else{
    $password = md5($password1);
    $sql = "UPDATE users SET fname='$fname',lname='$lname',contactno='$contactno',password='$password',address='$address',postalcode='$postalcode' WHERE nic='$nic'";
    $result=mysqli_query($db, $sql);
    }
}

//add a new dress
if(isset($_POST['add_product']))
{

  $t_nic =  $_SESSION['nic'];
  $category = mysqli_real_escape_string($db, $_POST['Unit']);
  $dressname = mysqli_real_escape_string($db, $_POST['dname']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
//  $size = mysqli_real_escape_string($db, $_POST['size']);
  $size1 = $_POST['size'];
  $schk="";
  foreach($size1 as $schk1)
     {
        $schk.= $schk1.",";
     }

  $colors1 = $_POST['color'];
  $clchk="";
  foreach($colors1 as $clchk1)
     {
        $clchk.= $clchk1.",";
     }
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $filename = $_FILES["myimage"]["name"];
  $tempname = $_FILES["myimage"]["tmp_name"];
  $folder = "products/".$filename;

  if($category!="" && $dressname!="" && $price!="" && $schk!="" && $amount!="")
  {

    $sql = " INSERT INTO dress_showcase (category, title, price, size, color, amount, image, permission, t_nic) VALUES ('$category', '$dressname','$price', '$schk', '$clchk', '$amount', '$filename', '1', '$t_nic')";
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

//search by a keyword
if(isset($_POST['search'])){
 $search=true;
 $keyword= mysqli_real_escape_string($db, $_POST['q']);

}

//search by dress category
if(isset($_GET['dcategory']) ){
    $search=true;
    $category_filter=true;
    $selected_dress_category = mysqli_real_escape_string($db, $_GET['dcategory']);
}

 ?>
