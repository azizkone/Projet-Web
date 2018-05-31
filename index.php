
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="favicon.png" type="image/png">
  <!-- Include Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include Font Awesome CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Include Font Awesome CSS -->
  <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!-- Include Medirev CSS -->
  <link href='css/style.css' rel='stylesheet' type='text/css'>
  <title>Document</title>
</head>

<body>
  <div class="header">
    <div class="container">
      <div class="container-fluid">
        <div class="header-top">
          <div class="col-md-3 col-sm-3 hidden-xs ">
            <a href="" class="image"><img src="img/logo2.png" alt=""></a>
          </div>
          <div class="col-md-offset-3 col-md-6 col-sm-8 col-xs-12 contact-info">
            <div class="contact-number col-md-6 col-sm-6 col-xs-6">
              <i class="fa fa-phone"></i>
              <ul>
                <li>+555 5 555 5555</li>
                <li>+555 7 999 6666</li>
              </ul>
            </div>
            <div class="contact-online col-md-6 col-sm-6 col-xs-6">
              <i class="fa fa-globe"></i>
              <ul>
                <li>info@medirev.com</li>
                <li>www.medirev.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav">
              <li class="active"><a href="">Home <span class="sr-only">(current)</span></a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Safty & Quality</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="get-a-quote"><a href="#">Get A Quote</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
      </nav>
    </div>
  </div>
  <!--###########################
      DEUXIEME PARTIE
#############################-->
<div class="container-slider">
  <div class="slider" id="parte2">
    <div class="background" style= "background-color: rgba(0, 0, 0, 0);
      background-repeat: no-repeat;
      background-image: url(img/slider-bg.png);
      background-size: cover;
      background-position: center top;
      width: 100%;
      height: 100%;
      opacity: 1;
      visibility: inherit;">
      <div class="doctor-img">
        <img src="img/doctor.png">
      </div>
      <div class="text-1">
        <h1>Awesome Medical Services <br/>you can trust</h1>
        <br/>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique<br/>
			vehicula porta. Nullam quis nulla et leo consequat tincidunt. Etiam quis<br/>
			neque dolor. Vestibulum tristique luctus</p>
      <br/>
      <br/>
      <a href="">Our Services</a>
    </div>
    <div class="apppointment-img">
      <img src="img/get-appointment.png" alt="" />
    </div>
    </div>
</div>
</div>
<!--###########################
  TROISIEME PARTIE
#############################-->
<div class="welcome">
  <div class="container">
    <h2>Welcome To Medirev</h2>
    <p class="col-md-10 col-md-offset-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique vehicula porta. Nullam quis nulla et leo consequat tincidunt. Etiam quis neque dolor. Vestibulum tristique luctus gravida. </p>
    <div class="service">
			<div class="col-md-4 col-sm-4 single-service">
				<i class="fa fa-ambulance"></i>
				<h3 class="service-text">Emergency Services</h2>
			</div>
			<div class="col-md-4 col-sm-4 single-service">
				<i class="fa fa-stethoscope"></i>
				<h3 class="service-text">Qualified Doctor</h2>
			</div>
			<div class="col-md-4 col-sm-4 single-service">
				<i class="fa fa-calendar"></i>
				<h3 class="service-text">Online Appointment</h2>
			</div>
    </div>
  </div>
</div>
<!--###########################
  TROISIEME PARTIE
#############################-->
<div class="appointment-form">
  <div class="container">
    <div class="col-md-6">
      <div class="text-2">
        <h2>by over 6,000 Patients <br>trust us with their sweet love</h2>
        <p>Blanditiis praesentium voluptatum delniti atque corrupti quos dlores quas molestias excepturi sint occaecati cupiditate non provident siili sunt in culpa qui officia deserAccusamus et iusto odio dignissimos ducimus qui blanditiis praesentium corrupti quos dolores et quas. </p>
        <button class="btn btn-default">Get A Quote</button>
      </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
      <div class="appointment-form1">
        <h3>Appointment Form</h3>
        <form action="php/submit.php" method="Post">
          <input type="text" class="col-md-12 col-xs-12 appointment-name" name="name" placeholder="Your Name" />
          <input type="email" class="col-md-12 col-xs-12 appointment-email" name="email" placeholder="Your Email"/>
          <select name="day" class="col-md-3 col-xs-3 appointment-day">
            <option value="">Day</option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
          <select name="time" class="col-md-3 col-xs-3 appointment-time">
            <option value="">Time</option>
            <option value="1.30">Time </option>
            <option value="2.30">Time 2</option>
          </select>
          <select name="doctor" class="col-md-5 col-xs-5 appointment-doctor">
            <option value="">Doctor Name</option>
            <option value="Bappy">Doctor name 1</option>
            <option value="Bappy">Doctor name 2</option>
          </select>
          <textarea name="message" class="col-md-12 col-xs-12 appointment-message" placeholder="Your Message" cols="16" rows="4"></textarea>
          <button class="col-md-3 col-xs-4 col-md-offset-9 col-xs-offset-8 appointment-submit" name="submit">Send</button>
        </form>
        <?php
             if (!isset($_GET['submit'])) {
               exit();
             }else{
               $verifierSubmit = $_GET['submit'];
               if($verifierSubmit ==  "empty"){
                 echo " <script> document.getElementById('1').style.borderColor='#FF0000';</script>  ";
                 echo "<strong class='error' style='color:red; text-align: center; '> Veuillez renseigner les champs vides </strong>";
                 exit();
               }
             }
           ?>
      </div>
    </div>
  </div>
</div>
<!--###########################
  quatrieme PARTIE
#############################-->
<div class="advantages">
  <div classe="container">
    <div class="our">
      <div class="adventages-Our">
        <h2>Our Advantages</h2>
        <p class="col-md-7 col-md-offset-2">Sed posuere nunc libero pellentesque vitae ultrices posuere. Praesent justo aoreet dignissim lectus etiam ipsum habitant tristique Sed posuere nunc libero pellentesque vitae ultrices posuere. Pr</p>
        <a href="" class="no-hover">
        	<div class="col-md-5 col-sm-6 col-xs-12">
							<div class="image1" style="background-image:url('img/healthcare.jpg');">
								<h3>Healthcare Professionals</h3>
					 </div>
      </div>
      </a>
      <div class="col-md-5 col-sm-6 col-xs-12">
            <div class="image1" style="background-image:url('img/medical-counseling.jpg');">
              <h3>Free Medical Counseling</h3>
            </div>
        </div>
    </div>
  </div>
  <div class="clearfix"></div>
			<br />
  <div class="row">
      <div class="meet-doctor">
        <h2>Meet With Our Doctor</h2>
        <p class="col-md-7 col-md-offset-2">If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut volutpat eros adipiscing nonummym accusantium doloremque laudantium</p>
         <div class="aziz">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single-doctor">
            <div class="doctor-image"><img src="img/doctor-1.jpg" alt="" /></div>
            <div class="doctor-details">
              <h4 class="name">Dr. Jon Karian</h4>
              <p class="designation">Dental Specialist</p>
              <div class="social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-envelope"></i></a>
                <a href=""><i class="fa fa-phone"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single-doctor">
            <div class="doctor-image"><img src="img/doctor-2.jpg" alt="" /></div>
            <div class="doctor-details">
              <h4 class="name">Dr. Jon Karian</h4>
              <p class="designation">Dental Specialist</p>
              <div class="social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-envelope"></i></a>
                <a href=""><i class="fa fa-phone"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single-doctor">
            <div class="doctor-image"><img src="img/doctor-3.jpg" alt="" /></div>
            <div class="doctor-details">
              <h4 class="name">Dr. Jon Karian</h4>
              <p class="designation">Dental Specialist</p>
              <div class="social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-envelope"></i></a>
                <a href=""><i class="fa fa-phone"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>
</div>
<!--###########################
  CINQUIEME PARTIE
#############################-->
<div class="workforce" style="background-image:url('img/fun-facts-bg.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-md-offset-half col-sm-6 col-xs-12">
					<div class="single-fun-fact">
						<i class="fa fa-bed"></i>
						<h3><span class="counter">630</span> Bed</h3>
					</div>
				</div>
				<div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
					<div class="single-fun-fact">
						<i class="fa fa-user-md"></i>
						<h3><span class="counter">113</span> Doctor</h3>
					</div>
				</div>
				<div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
					<div class="single-fun-fact">
						<i class="fa fa-ambulance"></i>
						<h3><span class="counter">65</span> Ambulance</h3>
					</div>
				</div>
				<div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
					<div class="single-fun-fact">
						<i class="fa fa-female"></i>
						<h3><span class="counter">780</span> Nurse</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
  <!--###########################
6 PARTIE
  #############################-->
  <div class="from-blog">
		<div class="container">
			<h2>From The Blog</h2>
			<p class="col-md-10 col-md-offset-1 section-description">Said open land form moved air his signs moveth creepeth appear appear it. Appear lving you dry our tree one.</p>
			<div class="blog-posts">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-post">
						<img src="img/blog-post-1.jpg" alt="" />
						<div class="post-date">April 13, 2014</div>
						<div class="post-details">
							<p class="title">The most well-known dummy text is the</p>
							<p class="description">Said open land form moved air his signs moveth creepeth appear appear it. Appear living you dry our tree one.</p>
							<a href="" class="more-link">More Details +</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-post">
						<img src="img/blog-post-2.jpg" alt="" />
						<div class="post-date">April 13, 2014</div>
						<div class="post-details">
							<p class="title">One disadvantage of Lorum Ipsum is that in</p>
							<p class="description">frequently than others - which creates a distinct visual impression. Moreover, in Latin only words at the beginnin</p>
							<a href="" class="more-link">More Details +</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-post">
						<img src="img/blog-post-3.jpg" alt="" />
						<div class="post-date">April 13, 2014</div>
						<div class="post-details">
							<p class="title">There is now an abundance of readable</p>
							<p class="description">Ifferent typefaces and layouts, and in general the content of dummy text is nonsensical. Due to its widespread use</p>
							<a href="" class="more-link">More Details +</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <!--###########################
7 PARTIE
  #############################-->
  <div class="footer">
  <div class="widget">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-md-offset-half col-sm-4 col-xs-12 single-widget">
          <h2 class="widget-title">HOSPITAL ADDRESS</h2>
          <div class="widget-inner">
            <p>E44, Design Street, Web Corner Melbourne - 005</p>
            <ul>
              <li>Monday - Friday</li>
              <li>8.00 - 18.00</li>
              <li>Saturday</li>
              <li>8.00 - 18.00</li>
              <li>Sunday</li>
              <li>8.00 - 18.00</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1  col-sm-4 col-xs-12 single-widget">
          <h2 class="widget-title">QUICK LINKS</h2>
          <div class="widget-inner">
            <ul class="footer-menu">
              <li><a href="">Doctors</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Gallery</a></li>
              <li><a href="">News</a></li>
              <li><a href="">Terms of Use</a></li>
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Desclaimer</a></li>
              <li><a href="">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1  col-sm-4 col-xs-12 single-widget">
          <h2 class="widget-title">SIGNUP FOR NEWSLETTER</h2>
          <div class="widget-inner">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Your Email Address">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-paper-plane"></i></button>
              </span>
            </div>
            <div class="clearfix"></div>
            <div class="social footer">
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-envelope"></i></a>
              <a href=""><i class="fa fa-phone"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
              <a href=""><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright text-center">
    <div class="container">
      <div class="row">
        <p class="copyright">Copyright All Rights Reserved. Design by <a href="http://revolthemes.net/" target="_blank">RevolThemes</a> Develop by <a href="https://www.behance.net/obaidhossain" target="_blank">Obaid Hossain</a></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
