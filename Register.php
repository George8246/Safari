<?php
session_start();
if(isset($_SESSION['isLogged']) && $_SESSION['isLogged']){
    header("Location: profile.php");
    return;

}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];
    
    
    if(!isset($_POST["firstname"]) || strlen($_POST["firstname"]) <=0){
        array_push($errors , "first name is required.");
    }
    else if (strlen($_POST["firstname"]) < 3){
        array_push($errors , "firs tname shoud be more than or equal 3 characters .");
    }
    else if (strlen($_POST["firstname"]) > 60){
        array_push($errors , "firs tname shoud be less than or equal 60 characters .");
    }
    

    if(!isset($_POST["lastname"]) || strlen($_POST["lastname"]) <=0){
        array_push($errors , "last name is required.");
    }
    else if (strlen($_POST["lastname"]) < 3){
        array_push($errors , "last name shoud be more than or equal 6 characters .");
    }
    else if (strlen($_POST["lastname"]) > 60){
        array_push($errors , "last name shoud be less than or equal 60 characters .");
    }

    

    if(!isset($_POST["username"]) || strlen($_POST["username"]) <=0){
        array_push($errors , "username is required.");
    }
    else if (strlen($_POST["username"]) < 6){
        array_push($errors , "username shoud be more than or equal 6 characters .");
    }
    else if (strlen($_POST["username"]) > 100){
        array_push($errors , "username shoud be less than or equal 100 characters .");
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


    
    if(!isset($_POST["password"]) || strlen($_POST["password"]) <=0){
        array_push($errors , "password is required.");
    }
    else if (strlen($_POST["password"]) < 6){
        array_push($errors , "password shoud be more than or equal 6 characters .");
    }
    else if (strlen($_POST["password"]) > 100){
        array_push($errors , "password shoud be less than or equal 100 characters .");
    }


    if(!isset($_POST["repassword"]) || strlen($_POST["repassword"]) <=0){
        array_push($errors , "confirm password is required.");
    }
    else if (strlen($_POST["repassword"]) < 6){
        array_push($errors , "confirm password shoud be more than or equal 6 characters .");
    }
    else if (strlen($_POST["repassword"]) > 100){
        array_push($errors , "confirm password shoud be less than or equal 100 characters .");
    }


    if(count($errors) <= 0){

       if( strcmp($_POST["password"] , $_POST["repassword"]) != 0){
        array_push($errors , "password and repassword do not match.");
       } else{
        // processing 
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password; 
        $_SESSION["iaLogged"] = true;
        header("Location: profile.php");
        return;
       }
    }
    else{
        $_SESSION['errors'] = $errors;
        header("Location: Register.php");
        return;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <link rel="shortcut icon" href="/favicon.png">
    <link rel="stylesheet" href="Register.css">
    <title> Safari </title>

</head>
<body>
<!-- The navbar -->
<div class="topnav">
    <a href="login-page.php">الصفحة الرئيسية</a>
    <a href="Contact_us.php"><i class="fa fa-fw fa-envelope"></i> أتصل بنا </a>
    <a href="Terms&Conditions.php">الشروط والأحكام</a>
    <a href="service.php">خدمتنا</a>
    <a href="Travel_ِAgents.php">وكلاء السفر</a>
</div>

<div class="card ml-auto mr-auto">
    <div class="card-body">
        <h2>Create a new account</h2>
		
		
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

        <form action="" method="post">

        <dl class="d-flex justify-content-left">
          <dt><p>First name :</p></dt>
          <dt><input type="text"  class="form-control" id="First-name-box" name="firstname"></dt>

        </dl>

       <dl class="d-flex justify-content-left">
           <dt><p>Second name :</p></dt>
         <dt><input type="text"  class="form-control" id="Second-name-box" name="lastname"></dt>
       </dl>
            <dl class="d-flex justify-content-left">
                <dt><p class="email-label">Phone number :</p></dt>
                <dt><input type="text"  class="form-control" id="Phone-box"></dt>
            </dl>
            <dl class="d-flex justify-content-left">
                <dt><p class="email-label">email adress :</p></dt>
                <dt><input type="email"  class="form-control" id="email-box" name="email"></dt>
            </dl>

            <dl class="d-flex justify-content-left">
                <dt><p class="email-label">User name :</p></dt>
                <dt><input type="text"  class="form-control" id="User-name-box" name="username"></dt>
            </dl>

       <dl class="d-flex justify-content-left">
           <dt><p>Password : </p></dt>
           <dt><input type="password"  class="form-control" id="Password-box" name="password"></dt>
       </dl>

       <dl  class="d-flex justify-content-left">
           <dt><p>Confirm password :</p></dt>
           <dt><input type="password"  class="form-control" id="Confirm-password-box"  name="repassword"></dt>
       </dl>
<br>
            <div>
                <label> Gender : </label>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio">Male
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio">Female
                    </label>

                </div>

            </div>
                <form action="profile.php">
            <div class="Register-Button ml-auto mr-auto">
             <button type="submit" class="btn btn-success  btn-block">Create account</button>
            </div>
                    </form>
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