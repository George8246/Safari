<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];
    
    if(!isset($_POST["companyname"])){
        array_push($errors , "companyname is required.");
    }
    else if (strlen($_POST["companyname"]) < 6){
        array_push($errors , "companyname shoud be more than or equal 6 characters .");
    }
    else if (strlen($_POST["companyname"]) > 100){
        array_push($errors , "companyname shoud be less than or equal 100 characters .");
    }

    if(!isset($_POST["managername"])){
        array_push($errors , "managername is required.");
    }
    else if (strlen($_POST["managername"]) < 6){
        array_push($errors , "managername shoud be more than or equal 6 characters .");
    }
    else if (strlen($_POST["managername"]) > 100){
        array_push($errors , "managername shoud be less than or equal 100 characters .");
    }

    if(!isset($_POST["adress"])){
        array_push($errors , "adress is required.");
    }
    else if (strlen($_POST["adress"]) < 6){
        array_push($errors , "adress shoud be more than or equal 6 characters .");
    }
    else if (strlen($_POST["adress"]) > 100){
        array_push($errors , "adress shoud be less than or equal 100 characters .");
    }

    if(!isset($_POST["phonenumber"])){
        array_push($errors , "phonenumber is required.");
    }
    else if (strlen($_POST["phonenumber"]) < 6){
        array_push($errors , "phonenumber shoud be more than or equal 6 characters .");
    }
    else if (strlen($_POST["phonenumber"]) > 100){
        array_push($errors , "phonenumber shoud be less than or equal 100 characters .");
    }



    if(!isset($_POST["linenumber"])){
        array_push($errors , "linenumber is required.");
    }
    else if (strlen($_POST["linenumber"]) < 6){
        array_push($errors , "linenumber shoud be more than or equal 6 characters .");
    }
    else if (strlen($_POST["linenumber"]) > 100){
        array_push($errors , "linenumber shoud be less than or equal 100 characters .");
    }



    if(!isset($_POST["email"]) ||strlen($_POST["email"]) <=0){
        array_push($errors , "email is required.");
    }
    else if (strlen($_POST["email"]) > 125){
        array_push($errors , "email shoud be less than or equal 125 characters .");
    }
    else if(!filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)){
        $email = htmlspecialchars($_POST["email"]);
        array_push($errors , "email ($email) is not validate.");
    }



    if(count($errors) <= 0){

     // processing 
     
     
    }
    else{

     
        $_SESSION['errors'] = $errors;
     
    
    }
}


?>














<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="/favicon.png">
    <link rel="stylesheet" href="Travel_ِAgents.css">
    <title> Safari </title>

</head>
<body>

<div class="topnav">
    <a href="login-page.php">الصفحة الرئيسية</a>
    <a href="Contact_us.php"><i class="fa fa-fw fa-envelope"></i> أتصل بنا </a>
    <a href="Terms&Conditions.php">الشروط والأحكام</a>
    <a href="service.php">خدمتنا</a>
    <a href="Travel_ِAgents.php" class="current_Page">وكلاء السفر</a>
</div>
<div class="card ml-auto">
    <div class="card-body">
	
	
	
	
	 <?php if(isset($_SESSION['errors']) && count($_SESSION['errors']) > 0) { ?>
        <div class= "alert-danger alert">
            <ul class="my-0 list-unstyled" >
            <?php foreach( $_SESSION['errors'] as $error) { ?>
                <li>
                    <?php echo $error;?>
                </li>
            <?php } ?>    
            </ul>
           </div>   
          <?php unset($_SESSION['errors']);?> 
           <?php } ?>
		   

        <form>
            <h3>إضافة شركة السفر</h3>
<br>
            <label>إسم الشركة</label>
            <input type="text">

            <label>إسم المسئول</label>
            <input type="text">

            <label>عنوان المقر الرئيسي</label>
            <input type="text">


            <label>رقم المحمول</label>
            <input type="text" >


            <label>رقم الهاتف الأرضي</label>
            <input type="text" >

            <label>البريد الإلكتروني</label>
            <input type="text" >

            <input type="submit" value="إرسال البيانات" id="Submit-Button">

        </form>
    </div>
</div>

<!-- The footer-->
<footer>

    <!-- Grid container -->
    <div class="footer-header">
        <h1>: تواصل معنا على المواقع التالية</h1>
    </div>

    <!-- Section: Social media -->
    <section>

        <dl  class="d-flex justify-content-right">
            <dt>
                <!-- Facebook -->
                <a class="btn btn-outline-light" href="#!" role="button"
                ><i class="fa fa-facebook"></i></a>
            </dt>
            <dt>
                <p>https://www.facebook.com/Safari/</p>
            </dt>
            <dt>
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-instagram"></i></a>
            </dt>
            <dt>
                <p>https://www.instagram.com/Safari/</p>
            </dt>
            <dt>
                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-twitter"></i></a>
            </dt>
            <dt>
                <p>https://www.twitter.com/Safari/</p>
            </dt>
            <dt>
                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-linkedin"></i></a>
            </dt>
            <dt>
                <p>https://www.linkedin.com/Safari/</p>
            </dt>
        </dl>


    </section>
    </form>
</footer>
</body>
</html>