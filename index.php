
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/images/icon.png">
    <title> Solis Khoo Bahay Paanakan </title>
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
<style>

.campus
    {
      width: 80%;
      margin: auto;
      text-align: center;
      padding-top: 10px; 
      margin-top: 70px;
      
    }
    .campus h1
    {
        font-size: 36px;
        font-weight: 600;
    }
    .campus p
    {
        color: rgb(48, 48, 48);
    }
    .campus-col-1
    {
        flex-basis: 32%;
        border-radius: 10px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
    
    }
    .campus-col-1 img
    {
        width: 100%;
        display: block;
    }
    .layer
    {
        background: #d0efee00;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        transition: 0.5s;
    }
    .layer h3
    {
        width: 100%;
        font-weight: 500;
        color: black;
        font-size: 26px;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        position: absolute;
        opacity: 0;
        transition: 0.5s;
    }
    .layer:hover h3
    {
        bottom: 49%;
        opacity: 1;
    }
    .layer p
    {
        width: 100%;
        font-weight: 400;
        color: #fff;
        font-size: 15px;
        bottom: 0;
        left: 40%;
        transform: translateX(-40%);
        position: absolute;
        opacity: 0;
        transition: 0.5s;
    }
    .layer:hover p
    {
        bottom: 30%;
        opacity: 1;
    }
    .layer:hover
    {
        background: #3199976b;
    }
    .campus-2
    {
      width: 80%;
      margin: auto;
      text-align: center;
    
    }
    .campus-col-2
    {
        flex-basis: 32%;
        border-radius: 10px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
    
    }
    .campus-col-2 img
    {
        width: 100%;
        display: block;
    }

.row1
{
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}


  


</style>
</head>

    <body >


      <header id="menu-jk">
    
        <div id="nav-head" class="header-nav" style="    background-color:white;
    width: 100%;">
            <div class="container">
                
                <div class="row">
                <a href="index.php" style="color: #319997;"> <div class="col-lg-2 col-md-3  col-sm-12" style=" font-weight:bold; font-size:42px; margin-top: 1% !important;">SKBP</a>
                   
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                       <a href="index.php" style="color: #9ca683; margin: 4px 5px 5px 0px;     vertical-align: text-bottom; "><img src="assets/images/icon.png"></a>
                    </div>

                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        
                        <ul>
                            
                            <li><a href="#" style="color: #444444;">Home</a></li>
                            <li><a href="#campus" style="color: #444444;">Services</a></li>
                            <li><a href="#about_us" style="color: #444444;">About Us</a></li>
                            <li><a href="#gallery" style="color: #444444">Gallery</a></li>
                            <li><a href="#contact_us" style="color: #444444;">Contact Us</a></li>
                            <li><a href="#logins" style="color: #444444;">Logins</a></li>  
                          
                        </ul>
                        
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint"> 
                        <a class="btn btn-success" href="hms/user-login.php" style="background-color:#319997;;
                            border-color: #acbfbd;">Book an Appointment</a> 
                    </div>
                </div>

            </div>
        </div>
    </header>
    

    <div class="slider-detail">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  >
    <ol class="carousel-indicators" >
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"  ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"  ></li>
    </ol>


   

    <div class="carousel-inner">
        <div class="carousel-item ">
            <img class="d-block w-100" src="assets/images/slider/preg.png" alt="Second slide">
            <div class="carousel-cover" style="background-color: #add5d44f"  ></div>
            <div class="carousel-caption vdg-cur d-none d-md-block  " >
             
    
                 
           
            </div>
        </div>
        
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/images/slider/birthh.jpg" alt="Third slide">
              <div class="carousel-cover" style="background-color: #add5d44f"></div>
            <div class="carousel-caption vdg-cur d-none d-md-block">
    
                 
            
            </div>
      
        </div>
        
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


</div>
<div class="slider-detail" >

<div id="carouselExampleIndicators"  class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators" >
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" ></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
</ol>
</div>

 

<section class="campus" id="campus">
                <h1 style=" font-size: 2rem;
    font-family: slab, Arial, Helvetica, sans-serif; font-weight: 500; ">Our Key Features</h1>
    
                <p >Take a look at some of our key features</p>
                <hr>
        
        <div class="row1">
            <div class="campus-col-1"> 
                <img src="assets/images/paren.jpg">
                <div class="layer"> 
                    <a href=".//Pages/campus pages/binan_pages.html"><h3>PERINATOLOGIST</h3></a>
                    <p>Click to learn more</p>
                </div>
            </div>

            <div class="campus-col-1">
                <img src="assets/images/ob.jpg">
                <div class="layer">
                    <a href=".//Pages/campus pages/cavite_pages.html"><h3>OB SONOLOGIST</h3></a>
                    <p>Click to learn more</p>
                </div>
            </div>

            <div class="campus-col-1">
                <img src="assets/images/mid.jpg">
                <div class="layer">
                    <h3>MIDWIFE </h3> 
                    <a href=".//Pages/campus pages/smanila_pages.html"> <p>Click to learn more</p></a>
                </div>
            </div>
        </div>
    </section>

    <section class="campus-2">
        <div class="row1">
            <div class="campus-col-2">
                <img src="assets/images/gen.jpg">
                <div class="layer">
                   <h3>Gynecologist</h3>
                    <a href=".//Pages/campus pages/smanila_pages.html"> <p>Click to learn more</p></a>
                    
                </div>
            </div>

            <div class="campus-col-2">
                <img src="assets/images/ped.jpg">
                <div class="layer">
                    <a href=".//Pages/campus pages/roxas_pages.html"><h3>Pediatrician</h3></a>
                    <a href=".//Pages/campus pages/smanila_pages.html"> <p>Click to learn more</p></a>
                </div>
            </div>

            <div class="campus-col-2">
                <img src="assets/images/newb.png">
                <div class="layer">
                  <h3>Newborn Screening</h3></a>
                    <a href=".//Pages/campus pages/smanila_pages.html"> <p>Click to learn more</p></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Departments Starts --->


    <section id="services" class="key-features department"  style="background-color:#ffffff;">
        <div class="container">
            <div class="inner-title" >

                <h2 >Why Choose Us?</h2>
                <p >We will explain our standard of care</p>
                <hr>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6" >
                    <div class="single-key" style="background-color:#319997;">
                        <i class="fas fa-heartbeat"style=" background-color:#319997; color:white;"></i>
                        <p style="font-family: mouse-500, Arial, Helvetica, sans-serif; font-size:20px; color:#f5f3e6;  margin: -40px 0px 8px 0px;">QUALITY CARE</p>
                        <p style="color: #e1dddd;     text-align: center;">We are dedicated to the highest quality of care. Our staff is highly experienced and committed to health, safety and evidence based natural birth practices. We have a proven track record of excellent outcomes.</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="single-key" style="background-color:#319997;">
                       <i class="fab fa-monero" style="background-color:#319997; color:white"></i>
                       <p style="font-family: mouse-500, Arial, Helvetica, sans-serif; font-size:20px; color:#f5f3e6; margin: -40px 0px 8px 0px;">EXPERIENCED MIDWIVES</p>
                       <p style="color: #e1dddd;     text-align: center;     ">Our team of senior midwives have on the average around 30 years of experience working with women and babies. Each midwife holds national recognized certifications and licensing.</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="single-key" style="background-color:#319997;">
                        <i class="fas fa-notes-medical" style=" background-color:#319997; color:white;  " ></i>
                        <p style="font-family: mouse-500, Arial, Helvetica, sans-serif; font-size:20px; color:#f5f3e6; margin: -40px 0px 8px 0px;">SUPPORT & REFERRALS</p>
                        <p style="color: #e1dddd;     text-align: center;     ">We have partnered with supportive local providers in the event a consultation or referral is necessary. This helps ensure the safety of a healthy pregnancy, birth and newborn.</p>
                    </div>
                </div>





        </div>

    </section>
    
     <!-- Our Departments End -->
  

     

    <!-- About Us Starts -->
        
    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6"  style="background-color:#ffffff;" >
            <img class="d-block w-100" src="assets/images/ddd.jpg" style="border-radius: 10px; ">
                
            </div>
            <div class="col-sm-6 abut-yoiu"  style="background-color:#ffffff;">
                <h3 style="    font-size: 28px;
    font-weight: 700;
    color: #2c4964; font-family: Raleway, sans-serif; " >About Solis Khoo Bahay Paanakan</h3>
<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
while ($row=mysqli_fetch_array($ret)) {
?>

    <p><?php  echo $row['PageDescription'];?></p><?php } ?>
            </div>
        </div>
    </section>    
    
      <!-- About Us End -->
    
            <!-- Gallery Starts -->

        <div id="gallery" class="gallery" style="    background-color:#f3f3f3;">    
           <div class="container">
              <div class="inner-title">

                <h2>Our Clinic</h2>
                <p>View Our Clinic</p>
            </div>
              <div class="row">
                

        <div class="gallery-filter d-none d-sm-block" >
            <button class="btn btn-default filter-button" data-filter="all" style="background-color: #319997;
                                                   border-color: #acbfbd; color: white;">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe" style="background-color:#319997;
                                                   border-color: #acbfbd; color: white;">Delivery Room</button>
              <button class="btn btn-default filter-button" data-filter="spray" style="background-color: #319997;
                                                   border-color: #acbfbd; color: white;">Labor Room</button>                                     
           
            <button class="btn btn-default filter-button" data-filter="irrigation" style="background-color: #319997;
                                                   border-color: #acbfbd; color: white;">Newborn</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
            <img src="assets/images/gallery/drr.jpg" class="img-responsive" style="border-radius:15px;"></a>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
             <img src="assets/images/gallery/laborr.jpg" class="img-responsive" style="border-radius:15px;"></a>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
             <img src="assets/images/gallery/delii.jpg" class="img-responsive" style="border-radius:15px;"></a>
            </div>


            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
             <img src="assets/images/gallery/room.jpg" class="img-responsive" style="border-radius:15px;"></a>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
          <img src="assets/images/gallery/room1.jpg" class="img-responsive" style="border-radius:15px;"></a>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
          <img src="assets/images/gallery/war.jpg" class="img-responsive" style="border-radius:15px;"></a>
            </div>


            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
         <img src="assets/images/gallery/new.png" class="img-responsive" style="border-radius:15px;"></a>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
             <img src="assets/images/gallery/nb.jpg" class="img-responsive" style="border-radius:15px;"></a>
            </div>

            
          
        </div>
    </div>
       
       
       </div>
        <!--Gallery End -->
    
         <!-- Logins Starts -->
    
    
  <section id="logins" class="our-blog container-fluid"  style="    padding: 50px 50px;
    background-color: 	#f1f7fd;
    padding-bottom: 100px;">
        <div class="container">
        <div class="inner-title">

                <h2 style="color:	#444444">Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img height="175" width="100%" src="assets/images/patien.jpg"  style="border-radius: 10px;">

                            <div class="blog-single-det"  style="border-radius: 10px;margin: auto;
                                        padding: 20px;
                                        z-index: 99;
                                        box-shadow: 0 2px 6px 0 rgb(183 233 200 / 65%), 0 2px 6px 0 rgb(220 220 221 / 54%);
                                        width: 90%;
                                        position: relative;
                                        margin-top: -80px;
                                        background-color: white;">
                                <h6>Patient Login</h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm" style="background-color: #319997;
                                                   border-color: #acbfbd;">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img height="175" width="100%"  src="assets/images/midwife.png"  style="border-radius: 10px;">

                            <div class="blog-single-det"  style="border-radius: 10px; margin: auto;
                                        padding: 20px;
                                        z-index: 99;
                                        box-shadow: 0 2px 6px 0 rgb(183 233 200 / 65%), 0 2px 6px 0 rgb(220 220 221 / 54%);
                                        width: 90%;
                                        position: relative;
                                        margin-top: -80px;
                                        background-color: white;">
                                <h6>Midwife login</h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm" style="background-color: #319997;
                                                   border-color: #acbfbd;">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img height="175" width="100%" src="assets/images/dev.png"  style="border-radius: 10px;">

                            <div class="blog-single-det"  style="border-radius: 10px; margin: auto;
                                        padding: 20px;
                                        z-index: 99;
                                        box-shadow: 0 2px 6px 0 rgb(183 233 200 / 65%), 0 2px 6px 0 rgb(220 220 221 / 54%);
                                        width: 90%;
                                        position: relative;
                                        margin-top: -80px;
                                        background-color: white;">
                                <h6>Admin Login</h6>
                    
                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm" style="background-color: #319997;
                                                   border-color: #acbfbd;">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    

                    
                    
                </div>
            </div>
            
        </div>
    </section>  


     <!-- Logins End -->

   

    
     <!-- Contact Us Starts -->
    
    <section id="contact_us" class="contact-us-single" style="    background-color:#ffffff;">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
                <form method="post">
 
                <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.0340443797504!2d120.41592391538171!3d15.907287247981468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391443486d2bdf1%3A0xca966f846f44ea5b!2sSolis%20Khoo%20Bahay%20Paanakan!5e0!3m2!1sen!2sph!4v1679469230451!5m2!1sen!2sph"
         width="600" height="550" style="border:0; width: 80%;
         margin: auto;
         padding: 30px 0; width: 100%;" allowfullscreen="" loading="lazy"></iframe>
    </section>
                <h2 >Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3" ><label>Enter Name :</label></div>
                        <div class="col-sm-8" ><input type="text"  placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required ></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit" style="background-color: #319997;
                                                   border-color: #acbfbd;">Send Message</button>
                        </div>
                </div>
            </form>
            </div>
     
        </div>
    </section>
    
    <!-- Contact Us End -->
    
    
    <!-- Footer Starts --->


    <footer class="footer" style="    background-color: #f1f7fd; padding: 19px 0px 0px 0px;
    padding-bottom: 8px;">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2 style="color:#444444; font-family: Raleway, sans-serif;">Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about_us" style="color:#444444;">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services" style="color:#444444;">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins" style="color:#444444;">Logins</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery" style="color:#444444;">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact" style="color:#444444;">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 map-img" >
                    <h2 style="color:#444444; font-family: Raleway, sans-serif;">Contact Us</h2>
                    <address class="md-margin-bottom-40" style="color:#444444; font-family: Raleway, sans-serif;">

<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' "); 
while ($row=mysqli_fetch_array($ret)) {
?>


                        <?php  echo $row['PageDescription'];?> <br>
                        Phone: 0<?php  echo $row['MobileNumber'];?> Globe <br >
                        Email: khoosolisevangeline@gmail.com <a href="mailto:<?php  echo $row['Email'];?>" class=""></a><br>
                        Timing: Open 24/7 
                    </address>

        <?php } ?>





                </div>
            </div>
        </div>
        

    </footer>

    <!-- Footer End -->

    <div class="copy" style="   background-color:#f3f3f3;  padding: 15px;">
            <div class="container" style="    font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: black;" >
        
                
     
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>