<?php

?>

<html>
<head>
<title>Business Website</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<!-----NavBar---->
<section id="nav-bar">
 <nav class="navbar navbar-expand-lg navbar-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#top">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">SERVICES</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="checkout.php">PAYMENT GATEWAY</a>
      <li class="nav-item">
        <a class="nav-link" href="home.php">REGISTER/LOGIN</a>
      </li>
    </ul>
  </div>
</nav>   
</section> 
<!-------Slider------->  
<div id="slider">
<div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/banner2.jpg">
        <div class="carousel-caption">
            <h5>WELCOME TO THE MOST <br>TRUSTED PLACE</h5>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner1.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner3.jpg">
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-------ABOUTT------->
<section id="about">
<div class="container">
<div class="row">
<div class="col-md-6">
<h2>About Us</h2>
<div class="about-content">
Delight HR has won accolades and business from existing and new clients for our consultative recruitment approach.We have been helping our clients to improve their recruitment process in terms of Quality-of-Hire, Time-to-Fill and Cost-per-Hire. We specialize in providing customized hiring solutions to our clients so that they can achieve greater efficiency and business performance.Through our collaborative approach and flawless execution we help our clients achieve their strategic talent acquisition goals. Our passion, integrity and work ethics set us apart and make us a preferred hiring partner with our ever expanding client base. We seek to deliver excellent value to our clients and candidates alike with our highly professional services. We are proud to call ourselves recruiters…a job that changes people’s lives and improves business performance.
</div>
<button type="button" class="btn btn-primary">Read more>></button>
</div>
<div class="col-md-6 skills-bar">
   <H2>Job Vacancies Available</H2>
    <p>Sales Manager</p>
    <div class="progress">
        <div class="progress-bar" style="width: 80%;">80%</div>
    </div>
        <p>Business Communication Expert</p>
    <div class="progress">
        <div class="progress-bar" style="width: 60%;">60%</div>
    </div>
    <p>UI Developer</p>
    <div class="progress">
        <div class="progress-bar" style="width: 45%;">45%</div>
    </div>
    <p>Digital Marketing</p>
    <div class="progress">
        <div class="progress-bar" style="width: 75%;">75%</div>
    </div>
    <p>Assistant Proffesor</p>
    <div class="progress">
        <div class="progress-bar" style="width: 50%;">50%</div>
    </div>
</div>
</div>
</div> 
    
</section>
   <!--------Services------->
    <section id="services">
        <div class="container">
           <div class ="row">
               <div class="col-md-6">
                <h2>RECRUITMENTS</h2>
                <p>We would love to help you with the hiring of right talent. Please fill the form below </p>
                <a href="home.php" target="_blank"><button type="button" class="btn btn-primary ">LOGIN FOR MORE>></button></a>
                 </div>
                 <div class="col-md-6 ">
                <h2>Job Seekers</h2>
                <p>We would love to help you in finding the right job role. </p>
                <a href="home.php"><button type="button" class="btn btn-primary">LOGIN FOR MORE>></button></a>
                 </div>
                 </div>                  
              </div>
            
    </section>