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
    <link rel="stylesheet" href="Profile.css">
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
    <a href="login-page.php" class="ml-auto" style="margin-right: 250px"> log out <i class="fa fa-log-out-alt"></i></a>
</div>

<div class="card ml-auto" style="width:400px">
    <div class="card-body ml-auto">
        <h3 class="card-title"><strong>سفاري للرحلات</strong></h3>
        <button type="button" class="btn btn-primary">ذهاب و عودة</button>
        <button type="button" class="btn btn-success">ذهاب فقط</button>

        <form>
            <div>
                <div class="d-flex justify-content-right">
                    <div>
                        <label> السفر إلى </label>
                        <select class="select-content"  name="city" id="city">
                            <option value="القاهرة">القاهرة</option>
                            <option value="الإسكندرية">الإسكندرية</option>
                            <option value="شرم الشيخ">شرم الشيخ</option>
                            <option value="الغردقة">الغردقة</option>
                            <option value="دهب">دهب</option>
                            <option value="الساحل الشمالي">الساحل الشمالي</option>
                            <option value="مرسى مطروح">مرسى مطروح</option>
                            <option value="الأقصر">الأقصر</option>
                            <option value="أسوان">أسوان</option>
                            <option value="الحوامدية">الحوامدية</option>
                        </select>
                    </div>

                    <div>
                        <form action="/action_page.php">
                            <label> السفر من </label>
                            <select class="select-content" name="cites" id="cites">
                                <option value="القاهرة">القاهرة</option>
                                <option value="الإسكندرية">الإسكندرية</option>
                                <option value="شرم الشيخ">شرم الشيخ</option>
                                <option value="الغردقة">الغردقة</option>
                                <option value="دهب">دهب</option>
                                <option value="الساحل الشمالي">الساحل الشمالي</option>
                                <option value="مرسى مطروح">مرسى مطروح</option>
                                <option value="الأقصر">الأقصر</option>
                                <option value="أسوان">أسوان</option>
                                <option value="الحوامدية">الحوامدية</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <div class="input datepicker tarvel-date" style=""><input type="text" value="جمعة ٢١ مايو  ٢٠٢١"><input type="date" id="arrival-dp" min="2021-05-22" max="2023-05-21" value="2021-05-21"><i class="material-icons closeBtn"></i></div>
                <div class="input datepicker tarvel-date" style=""><input type="text" value="جمعة ٢١ مايو  ٢٠٢١"><input type="date" id="arrival-dp" min="2021-05-22" max="2023-05-21" value="2021-05-21"><i class="material-icons closeBtn"></i></div>

            </div>


            <div  class="d-flex justify-content-right">
                <dl class="row">
                    <dt class="col">
                        <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
                        <input class="input-group-field" type="number" name="quantity" value="0">
                    </dt>
                    <dt class="col">
                        <h6><i class="material-icons"></i> عدد المسافرين</h6>
                    <dt>
                </dl>
            </div>
            <div class="d-flex justify-content-right">

                <div>
                    <form action="/action_page.php">
                        <label> طرق الدفع </label>
                        <select class="select-content" name="payment" id="payment">
                            <option value="Master-Card Visa">Master-Card Visa</option>
                            <option value="Fawry">Fawry</option>
                            <option value="Aman">Aman</option>
                            <option value="Bee">Bee</option>
                        </select>
                    </form>
                </div>

                <form action="/action_page.php">
                    <label> ميعاد الرحلة </label>
                    <select class="select-content" name="hours" id="hour">
                        <option value="9am">9am</option>
                        <option value="12am">12am</option>
                        <option value="3pm">3pm</option>
                        <option value="6pm">6pm</option>
                        <option value="9pm">9pm</option>

                    </select>
                </form>

            </div>
        </form>

        <div>
            <button type="submit" class="btn btn-success  btn-block mr-auto ml-auto"> أحجز الأن</button>

        </div>

    </div>
</div>

</div>

<div class="container">

    <img src="Banner-4-1.jpg">
    <img src="maroc_rabat_tram_737115596.jpg">

</div>
<!-- Payment -->
<div>
    <span>
    <p class="font-weight-bold"> طرق الدفع </p>
    <P> يمكن الدفع عن طريق </P>
    </span>

    <dl class="d-flex mr-auto">
        <dt>
            <img src="credit-card.png" alt="Credit-Card-Logo">
        </dt>
        <dt>
            <img src="fawry-ar.png" alt="Fawry-logo">
        </dt>
        <dt>
            <img src="aman.png" alt="Aman-logo">
        </dt>
        <dt>
            <img src="bee-logo.jpg" alt="Bee-logo">
        </dt>
    </dl>
</div>

<!-- Travel destinations -->

<div id="destinations">
    <p class="font-weight-bold"> تعرف على أماكن رحلاتنا </p>
    <P> نوفر لك الوقت لتصل بسرعة من خلال أفضل خطوط لنقل الركاب في جمهورية مصر العربية</P>
    <div class="row">
        <a class="col" href="#">القاهرة - شرم الشيخ</a>
        <div class="col"><a href="#">القاهرة - الغردقة</a></div>
        <div class="col"><a href="#">القاهرة - دهب</a></div>
        <div class="col"><a href="#">القاهرة - إسكندرية</a></div>
    </div>
    <div class="row">
        <a class="col" href="#">القاهرة - الأقصر</a>
        <div class="col"><a  href="#">القاهرة - أسوان</a></div>
        <div class="col"><a  href="#">القاهرة - مرسى مطروح</a></div>
        <div class="col"><a  href="#">القاهرة - الساحل الشمالي</a></div>
    </div>
    <div class="row">
        <a class="col" href="#">الحوامدية - شرم الشيخ</a>
        <div class="col"><a  href="#">الحوامدية - الغردقة</a></div>
        <div class="col"><a  href="#">الحوامدية - دهب</a></div>
        <div class="col"><a  href="#">الحوامدية - إسكندرية</a></div>
    </div>
    <div class="row">
        <a class="col" href="#">الحوامدية - الأقصر</a>
        <div class="col"><a  href="#">الحوامدية - أسوان</a></div>
        <div class="col"><a  href="#">الحوامدية - مرسى مطروح</a></div>
        <div class="col"><a  href="#">الحوامدية - الساحل الشمالي</a></div>
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
