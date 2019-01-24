<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>uu</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css"/>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <!-- <link rel="stylesheet" href="../assets/css/sweet.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    <script src="js/responsive-nav.js"></script>
  </head>
  <body>

   <!-- DEFAULT BUTTON
   <button class="default-button">Submit</button>
   ---->

    <header>
      <!--<a href="#home" class="logo" data-scroll>SIMS v1.0</a> -->
<a href="#home" class="logo" data-scroll><img class="sims-logo" src="../assets/img/logo.png" alt=""></a>
      <nav class="nav-collapse">
       
      </nav>
    </header>

    <section id="home" class="text-center">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="login-form">
               <h1>UU Admin Panel</h1> 
               <form class="form-log" action="" method="post">
                  <div class="form-group">
                    <input type="email" name="email_" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass_" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <button type="submit" name="log_submit" class="btn btn-default" value="log_submit">Submit</button>
               </form>
             </div>
           </div>
         </div>
       </div>
      <!---- <button class="default-button">Submit</button> ---->
    </section>
    <!-- php login -->
    <?php

    session_start();    // Starting Session
    $error='';         // Variable To Store Error Message
    $con=mysqli_connect('localhost','root','','university') or die ("unable to connect");

    if (isset($_SESSION['bank_login_user']) ) {

    header ("Location: dashboard.php");
    exit();

    }


    if (isset($_POST['log_submit']))
     {
        if (empty($_POST['email_']) || empty($_POST['pass_']))
          {
             $error = "Email or Password is invalid";
             ?> <script>swal("Opss...","<?php echo $error; ?>", "error");</script> <?php
          }
        else
          {
              // define $username and $password
              $email=$_POST['email_'];
              $password=$_POST['pass_'];

              // to protect injection
              $email = stripslashes($email);
              $password = stripslashes($password);
              $email = mysqli_real_escape_string($con, $email);
              $password = mysqli_real_escape_string($con, $password);
              //$password = encryptHash($password);



              $query_result = mysqli_query($con, "SELECT * FROM `account_admin` WHERE `email` = '$email'");

              if (mysqli_num_rows($query_result) == 1)
                {
                  $record = mysqli_fetch_assoc ($query_result);
                  $encrypted_hashedPassword = $record["password"];

                 

                    //$error = "*** Log ok";
                        $_SESSION['bank_login_user'] = $record["email"];   // initializing Session
                        //redirect("student-chart.php");
                        header('Location: dashboard.php');

                        exit();

                  }
                 
              else
                {
                    $error = "Email or Password is invalid";
                   ?> <script>swal("Opss...","<?php echo $error; ?>", "error");</script> <?php
                }

              mysqli_close($con);
          }
      }

      ?>

    <!-- FOOTER -->
  
