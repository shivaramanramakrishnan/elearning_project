<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SP Academy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php">SP Academy</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#courses-section" class="nav-link">Courses</a></li>
                <li><a href="#programs-section" class="nav-link">Programs</a></li>
                <li><a href="#teachers-section" class="nav-link">Teachers</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="sign">
                <!--sign-->
                <div class="container <?php echo (isset($_GET['errorp']) || isset($_GET['signup']))? 'right-panel-active':''; ?>" id="container">
                  <div class="form-container sign-up-container">
                    <form action="includes/signup1.inc.php" method="post" id="signup_form">
                      <h1 class="title">Sign Up</h1>
                      <br>
                      <?php
                      if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=="emptyfields"){
                          echo '<div style="color:red;">Fill in all fields !</div>';
                        }else if ($_GET['errorp']=="invalidmailuid"){
                          echo '<div style="color:red;">Invalid username and e-mail !</div>';
                        }else if ($_GET['errorp']=="invaliduid"){
                          echo '<div style="color:red;">Invalid username !</div>';
                        }else if ($_GET['errorp']=="invalidmail"){
                          echo '<div style="color:red;">Invalid e-mail !</div>';
                        }else if ($_GET['errorp']=="passwordcheck"){
                          echo '<div style="color:red;">Passwords don\'t match!</div>';
                        }else if ($_GET['errorp']=="usertaken"){
                          echo '<div style="color:red;">Username is already taken!</div>';
                        }
                      }elseif (isset($_GET['signup']) ) {
                        if ($_GET['signup']=="success")
                          echo '<div style="color:green;">Signup Successful ! Feel free to login !</div>';
                      }
                       ?>
                      <div id="error_signup_name"></div>
                      <input type="text" id="name_signup" name="uid" placeholder="Name" value="<?php if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=='invalidmail' || $_GET['errorp']=='passwordcheck' || $_GET['errorp']=='emptyfields'){
                          echo  isset($_GET['uid']) ? $_GET['uid']:'';
                        }else {
                          echo '';
                        }
                      }  ?>" />
                      <div id="error_signup_email"></div>
                      <input type="email" id="mail_signup" name="mail" placeholder="E-mail"
                        value="<?php if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=='invaliduid' || $_GET['errorp']=='passwordcheck' || $_GET['errorp']=='emptyfields' || $_GET['errorp']=='usertaken'){
                          echo  isset($_GET['mail']) ? $_GET['mail']:'';
                        }else {
                          echo '';
                        }
                      }  ?>" />
                      <div id="error_signup_pwd1"></div>
                      <input type="password" id="pwd1_signup" name="pwd" placeholder="Password" />
                      <div id="error_signup_pwd2"></div>
                      <input type="password" id="pwd2_signup" name="pwd-repeat" placeholder="Repeat Password" />
                      <button>Sign Up</button>
                    </form>

                  </div>
                  <div class="form-container sign-in-container">
                    <form action="includes/login.inc.php" method="post" id="signin_form">
                      <h1 class="title">Sign in</h1>
                      <br>
                      <?php
                      if (isset($_GET['error'])){
                        if ($_GET['error']=="emptyfields"){
                          echo '<div style="color:red;">Fill in all fields !</div>';
                        }else if ($_GET['error']=="wrongpwd"){
                          echo '<div style="color:red;">Wrong password!</div>';
                        }else if ($_GET['error']=="nomatch"){
                          echo '<div style="color:red;">There\'s no match for your email !</div>';

                      }elseif (isset($_GET['login']) ) {
                        if ($_GET['signup']=="success")
                          echo '<div style="color:green;">Sign in Successful !</div>';
                      }
                  }?>
                      <div id="error_signin_mail"></div>
                      <input type="email" id="mailsignin" placeholder="Email" name="mailuid" placeholder="Username/E-mail"
                        value="<?php if (isset($_GET['error'])){
                                        if ($_GET['error']=="wrongpwd" || $_GET['error']=="emptyfields"){
                                              echo  isset($_GET['mail'])?$_GET['mail']:'';
                                        }else {
                                              echo '';
                                             }
                    }  ?>" />
                      <div id="error_signin_pwd"></div>
                      <input type="password" id="pwdsignin" name="pwd" placeholder="Password" />
                      <a href="mail_input.php">Forgot your password?</a>
                      <button>Sign In</button>
                    </form>
                  </div>
                  <div class="overlay-container">
                    <div class="overlay">
                    <div id="overlay-left" class="overlay-panel overlay-left">
                          <h1>Welcome Back!</h1>
                          <p>To keep connected with us please login with your personal info</p>
                          <button class="ghost" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                          <h1>Hello, Learner!</h1>
                          <p>Enter your personal details and start journey with us</p>
                          <button class="ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
            <!--end-->
          </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section courses-title" id="courses-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Courses</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="data:image/jpeg;base64,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" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Rs.200</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 3 week</div>
                <h3><a href="#">Aerospace Introduction</a></h3>
                <p>Lean the basic in aerospace engineering </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Rs.200</span>
                <div class="meta"><span class="icon-clock-o"></span>20 Lessons / 4 week</div>
                <h3><a href="#">Introduction to Deep Learning</a></h3>
                <p>Discover the world of deep learning </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,100 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 9</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="data:image/png;base64,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" alt="Tamil Lang Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Rs.200</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Tamil</a></h3>
                <p>Learn the basics of the Tamil language . </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 3,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>



            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img_4.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">RS.200</span>
                <div class="meta"><span class="icon-clock-o"></span>3 Lessons / 9 week</div>
                <h3><a href="#">C++</a></h3>
                <p>Learn the most famous programming language. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 1,123 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 8</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img_5.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Rs.200</span>
                <div class="meta"><span class="icon-clock-o"></span>2 Lessons / 5 week</div>
                <h3><a href="#">JAVA</a></h3>
                <p>java is a must learn versatile language. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 1,523 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 6</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img_6.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Rs.200</span>
                <div class="meta"><span class="icon-clock-o"></span>5 Lessons / 7 week</div>
                <h3><a href="#">Python</a></h3>
                <p>Begin your journey in the world of AI. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,453 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 5</div>
              </div>
            </div>

          </div>



        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
            <button class="customNextBtn btn btn-primary m-1">Next</button>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Programs</h2>
            <p>We aim to make studying SIMPLE, EASY and ACCESSIBLE to EVERYONE thus we collected the BEST COURSES in the world in one place.</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">We Are Excellent In Education</h2>
            <p class="mb-4">Education is an art and we are the artists.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">50 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Strive for Excellent</h2>
            <p class="mb-4">our goal is your success.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">50 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teacher.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Education is life</h2>
            <p class="mb-4">Beginning of a never ending journey of learning.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">50 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="site-section" id="teachers-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Teachers</h2>
            <p class="mb-5">The best we promise the best we are !</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="images/sundar.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Sundar Pichai</h3>
                <p class="position">WEB Teacher</p>
                <p>I used to be the CEO of Google but after seeing the prospective growth of SP Academy , I left google and joined SP Academy with Shivaraman and Pavan. Made over 100 websites with years of experience, taught over 500 students.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="images/shiva1.jpeg" alt="Shiva Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Shiva</h3>
                <p class="position">AI Teacher</p>
                <p>Over 20 years of experience Worked at NASA and done so many projects .</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="images/pavan.jpg" alt="Pavan Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Pavan</h3>
                <p class="position">IOT Teacher</p>
                <p>Leading expert in the domain of IOT, taught many students over the years.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="images\user.png" alt="Reviewer Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Bharat</h3>
            <blockquote>
              <p>&ldquo; I was struggling with my studies but it all changed when I learned about SP Academy, I'm now a senior software engineer making a 6 figure salary per year.This website is a real game changer. &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">

      <div class="future-blobs">
        <div class="blob_2">
          <img src="images/blob_2.svg" alt="Image">
        </div>
        <div class="blob_1">
          <img src="images/blob_1.svg" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Why Choose Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start"  data-aos="fade-up" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">2,931 Yearly Graduates</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">50 Universities Worldwide</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Top Professionals in The World</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Expand Your Knowledge</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Best Online Teaching Assistant Courses</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Best Teachers</h3></div>
              </div>

            </div>


          </div>
          <div class="col-lg-7 align-self-end"  data-aos="fade-left" data-aos-delay="200">
            <img src="images/person_transparent.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">

            <h2 class="section-title mb-3">Message Us</h2>
            <p class="mb-5">We are more than happy to receive your suggestions.</p>
            <!-- Beginning of the php for the contact form -->
            <?php
            // Message Vars
            $msg = '';
            $msgClass = '';

            // Check For Submit
            if(filter_has_var(INPUT_POST, 'submit')){
              // Get Form Data
              $name = htmlspecialchars($_POST['name']);
              $email = htmlspecialchars($_POST['email']);
              $message = htmlspecialchars($_POST['message']);
              $subject = htmlspecialchars($_POST['subject']);

              // Check Required Fields
              if(!empty($email) && !empty($name) && !empty($message) && !empty($subject)){
                // Passed
                // Check Email
                if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                  // Failed
                  $msg = 'Please use a valid email';
                  $msgClass = 'alert-danger';
                } else {
                  // Passed
                  $toEmail = 'support@lacademy.com';
                  $body = $subject.'<h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>';

                  // Email Headers
                  $headers = "MIME-Version: 1.0" ."\r\n";
                  $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

                  // Additional Headers
                  $headers .= "From: " .$name. "<".$email.">". "\r\n";

                  if(mail($toEmail, $subject, $body, $headers)){
                    // Email Sent
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                  } else {
                    // Failed
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                  }
                }
              } else {
                // Failed
                $msg = 'Please fill in all fields';
                $msgClass = 'alert-danger';
              }
            }
             ?>
             <?php if($msg != ''): ?>
                 <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
               <?php endif; ?>
            <!-- End of the php for the contact form -->
            <form method="post" action="index.php#contact-section" data-aos="fade" id="contact_form">
              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_contact_fullname"></div>
                  <input type="text" name="name" id="contact_fullname" class="form-control" placeholder="Full name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_contact_subject"></div>
                  <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Subject" >
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_contact_email"></div>
                  <input type="email" id="contact_email" name="email"  class="form-control" placeholder="Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_contact_message"></div>
                  <textarea class="form-control" id="contact_message" name="message" cols="30" rows="10" placeholder="Write your message here."><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <input type="submit" name="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Send Message">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>


    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About PS Academy</h3>
            <p>An E-Learning platform rich of resources, We make learning easy and simple for Everyone.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#home-section" class="nav-link">Home</a></li>
              <li><a href="#courses-section" class="nav-link">Courses</a></li>
              <li><a href="#programs-section" class="nav-link">Programs</a></li>
              <li><a href="#teachers-section" class="nav-link">Teachers</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Keep yourself up to date and receive all kind of news about SP Academy.</p>
            <form action="https://mailchi.mp/064deb47eeaa/lacdemy" target="_blank" class="footer-subscribe">
              <div class="d-flex mb-5">

                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>


  <script src="js/main.js"></script>

  </body>
</html>
