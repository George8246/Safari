<?php
session_start();
if(isset($_SESSION['isLogged']) && $_SESSION['isLogged']){
    header("Location: profile.php");
    return;

}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];
    
    if(!isset($_POST["username"])|| strlen($_POST["username"]) <=0){
        array_push($errors , "username is required.");
    }
    else if (strlen($_POST["username"]) <= 6){
        array_push($errors , "username shoud be more than or equal 6 characters .");
    }
    else if (strlen($_POST["username"]) >= 100){
        array_push($errors , "username shoud be less than or equal 100 characters .");
    }
    
    
    if(!isset($_POST["password"])|| strlen($_POST["password"]) <=0){
        array_push($errors , "password is required.");
    }
    else if (strlen($_POST["password"]) <= 6){
        array_push($errors , "password shoud be more than or equal 6 characters .");
    }
    else if (strlen($_POST["password"]) >= 100){
        array_push($errors , "password shoud be less than or equal 100 characters .");
    }

    if(count($errors) <= 0){

        $username = $_POST["username"];
        $password = $_POST["password"];



        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION["iaLogged"] = true;
        header("Location: profile.php");
        return;
    }
    else{
        $_SESSION['errors'] = $errors;
        header("Location: login-page.php");
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
    <link rel="stylesheet" href="login-page.css">
    <title> Safari </title>

</head>
<body>

<!-- The navbar -->
<div class="topnav">
    <a href="login-page.php" class="current_Page">الصفحة الرئيسية</a>
    <a href="Contact_us.php"><i class="fa fa-fw fa-envelope"></i> أتصل بنا </a>
    <a href="Terms&Conditions.php">الشروط والأحكام</a>
    <a href="service.php">خدمتنا</a>
    <a href="Travel_ِAgents.php">وكلاء السفر</a>
</div>

<div class="card ml-auto mr-auto" style="width:400px">
    <div class="card-body ml-auto">
	
	
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
        <h1> Safari</h1>
    <div>
        <label>User name : </label>
        <dl class="d-flex justify-content-left">
            <dt><input type="text" class="form-control" name="username"></dt>
            <dt><p class="email-label"></p></dt>
        </dl>

        <label>password :</label>
        <dl class="d-flex justify-content-left">
        <dt><input type="password"  class="form-control"  name="password"></dt>
       <p class="email-label"></p>
        </dl>

    </div>

            <div class="Register-Button">
                <button type="submit" class="btn btn-success  btn-block">login </button>
            </div>        <div>
            <a href="#" class="fb btn">
                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
            </a>
            <br>
            <a href="#" class="twitter btn">
                <i class="fa fa-twitter fa-fw"></i> Login with Twitter
            </a>
            <br>
            <a href="#" class="google btn">
                <i class="fa fa-google fa-fw"></i> Login with Google+
            </a>
            <br>
        </div>
    <div class="forget-password">
        <dl>
         <dt><a href="#"> forget password ?</a></dt>
         <dt><a href="Register.php"> sign up</a></dt>
        </dl>
    </div>
</div>
    </form>

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