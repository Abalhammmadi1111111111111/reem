<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    /**
* Template Name: WeBuild - v4.8.1
* Template URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  color: #444;
  back-color:black;
}

a {
  text-decoration: none;
  color: #4f92af;
}

a:hover {
  color: #5eb8df;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6,
.font-primary {
  font-family: "Raleway", sans-serif;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 80px;
  padding: 20px 0;
  position: relative;
  z-index: 10;
}

#header .logo h1 {
  font-size: 36px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 300;
  letter-spacing: 3px;
}

#header .logo h1 a,
#header .logo h1 a:hover {
  color: #fff;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}

#header .contact-link a {
  color: #fff;
  padding-right: 10px;
  font-size: 12px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

#header .contact-link a:hover {
  text-decoration: underline;
}

@media (max-width: 768px) {
  #header .logo h1 {
    font-size: 28px;
    padding: 8px 0;
  }
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 100vh;
  background: url("../img/hero-bg.jpg") top center;
  background-size: cover;
  position: relative;
  margin-top: -80px;
  z-index: 9;
  /* countdown */
}

#hero .hero-container {
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  padding: 0 15px;
}

#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  text-transform: uppercase;
  color: #fff;
}

#hero h2 {
  color: #eee;
  margin-bottom: 30px;
  font-size: 24px;
}

#hero .countdown {
  font-size: 48px;
  font-weight: 300;
  color: #fff;
  line-height: 56px;
  margin: 30px 0 60px 0;
}

#hero .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

#hero .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

#hero .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

#hero .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading-notify 1s linear infinite;
  animation: animate-loading-notify 1s linear infinite;
}

@-webkit-keyframes animate-loading-notify {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading-notify {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

#hero .php-email-form input {
  border-radius: 3px;
  box-shadow: none;
  font-size: 14px;
  border: 0;
  padding: 0px 15px 2px 15px;
  width: 250px;
  height: 40px;
  margin: 0 8px;
}

#hero .php-email-form button[type=submit] {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 7px 30px;
  border-radius: 3px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid #4f92af;
  color: #fff;
  background: #4f92af;
}

#hero .php-email-form button[type=submit]:hover {
  background: transparent;
  color: #fff;
  border: 2px solid #fff;
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }

  #hero .php-email-form input {
    margin: 0 auto;
  }
}

@media (max-width: 575px) {
  #hero .countdown {
    font-size: 32px;
    line-height: 38px;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
}

.section-bg {
  background-color: #f7fafc;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: 300;
  margin-bottom: 20px;
  padding-bottom: 0;
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Contact Us
--------------------------------------------------------------*/
.contact .contact-info {
  margin-bottom: 20px;
  text-align: center;
}

.contact .contact-info i {
  font-size: 48px;
  display: inline-block;
  margin-bottom: 10px;
  color: #4f92af;
}

.contact .contact-info address,
.contact .contact-info p {
  margin-bottom: 0;
  color: #444;
}

.contact .contact-info h3 {
  font-size: 18px;
  margin-bottom: 15px;
  font-weight: 300;
  color: #999;
}

.contact .contact-info a {
  color: #000;
}

.contact .contact-info a:hover {
  color: #4f92af;
}

.contact .contact-address,
.contact .contact-phone,
.contact .contact-email {
  margin-bottom: 20px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input:focus,
.contact .php-email-form textarea:focus {
  border-color: #4f92af;
}

.contact .php-email-form button[type=submit] {
  background: #4f92af;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
}

.contact .php-email-form button[type=submit]:hover {
  background: #72a8bf;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@media (min-width: 768px) {
  .contact .contact-phone {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
  }

  .contact .contact-address,
  .contact .contact-phone,
  .contact .contact-email {
    padding: 20px 0;
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: #0d182d;
  padding: 30px 0;
  color: #fff;
  font-size: 14px;
}

#footer .copyright {
  text-align: center;
}

#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #fff;
}

#footer .credits a {
  color: #72a8bf;
}
    </style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>اسعار الصرف - Bootstrap Coming Soon Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://github.com/Abalhammmadi1111111111111/reem.git/assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: اسعار الصرف - v4.8.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>اسعار الصرف</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <div class="contact-link float-right">
        <a href="#contact" class="scrollto">Contact Us</a>
      </div>

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>اسعار الصرف</h1>
      <h2>نحن نعمل بجد لكي نجعل عليكم طريقة الصرف بين العملات اسهل </h2>
      

      <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
<input type="number" name="name" id="name" >
<input type="submit" name="submit" value="submit" >
            <br><br>

        <?php
        if(isset($_GET['submit'])){
            $m=$_GET['name'];
            $sum=$m*3.7;
            echo "<h1>$sum ريال سعودي</h1>";
        }

        ?>
</form>
               

            
           
           
          

        
      
      </form>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Contact Us Section ======= -->
    

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
