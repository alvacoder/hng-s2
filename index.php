<?php
  if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mail("idrisadeniji01@gmail.com", "Sent From Contact Form", $message, "From: $name <$email>");
    mail($email, "Sent From Contact Form", "Your message was well received, thank you for contacting Idris Adeniji.", "From: $name <$email>");

    echo "<script>alert('Thank you for contacting Idris Adeniji!')</script>";
  }
?>
<!DOCTYPE html>
<!-- upto 2 directory depth-->
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Idris Adeniji</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    </noscript>
    <link href="./css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/main.css?ver=1.2.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header class="bg-light">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
        <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#">AlvaCoder</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-2">
              <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
              <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
              <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="page-content">
      <div id="content">
<header>
  <div class="cover bg-light">
    <div class="container px-3">
      <div class="row">
        <div class="col-lg-6 p-2"><img class="img-fluid" src="images/illustrations/hello3.svg" alt="hello"/></div>
        <div class="col-lg-6">
          <div class="mt-5">
            <p class="lead text-uppercase mb-1">Hello!</p>
            <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">I’m Idris Adeniji</h1>
            <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">Software Engineer</p>
            <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
              <nav role="navigation">
                <ul class="nav justify-content-left">
                  <li class="nav-item"><a class="nav-link" href="https://twitter.com/alvacoder" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/alvacoder" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/alvacoder" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/idrisadeniji" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
                </ul>
              </nav>
            </div>
            <div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a class="btn btn-primary shadow-sm mt-1 hover-effect" href="#contact">Get In Touch <i class="fas fa-arrow-right"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wave-bg"></div>
</header>
<div class="section pt-4 px-3 px-lg-4" id="about">
  <div class="container-narrow">
    <div class="row">
      <div class="col-md-6">
        <h2 class="h4 my-2">Hello! I’m Idris Adeniji.</h2>
        <p>I am passionate about backend development, software design and architecture. I have several years of experience developing scalable and highly secured enterprise applications for various industry sectors using best practices.</p>
        <div class="row mt-3">
          <div class="col-sm-2">
            <div class="pb-1">Email:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">idrisadeniji01@gmail.com</div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Github:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">https://github.com/alvacoder</div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Phone:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">+234 708 518 3282</div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Address:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">Lagos, Nigeria</div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Staus:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">Available</div>
          </div>
        </div>
      </div>
      <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img class="avatar img-fluid mt-2" src="images/avatar.jpg" width="400" height="400" alt="Walter Patterson"/></div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="services">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">My Services</h2>
    </div>
    <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px"> I offer services fit for any website or app. I can quickly maximize timely deliverables for real-time schemas.</p>
    </div>
    <div class="row py-3">
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img class="mb-2" src="images/services/web-design.svg" width="96" height="96" alt="web design"/>
        <div class="h5">Web Design</div>
      </div>
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200"><img class="mb-2" src="images/services/graphic-design.svg" width="96" height="96" alt="graphic design"/>
        <div class="h5">Software Architecture</div>
      </div>
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="300"><img class="mb-2" src="images/services/ui-ux.svg" width="96" height="96" alt="ui-ux"/>
        <div class="h5">System Design</div>
      </div>
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="images/services/app-development.svg" width="96" height="96" alt="app development"/>
        <div class="h5">App Development</div>
      </div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="services">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">My Trainings</h2>
    </div>
    <div class="text-center">
      <p class="mx-auto mb-4" style="max-width:600px"> I've undergone trainings from the following top notch technology brands.</p>
    </div>
    <div class="row py-3">
      <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100"><img class="mb-2" src="images/services/hng.png" width="200" height="96" alt="web design"/>
        <div class="h5">HNG Internship</div>
      </div>
      <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200"><img class="mb-2" src="images/services/zuri-logo-full.svg" width="200" height="96" alt="graphic design"/>
        <div class="h5">Zuri Team</div>
      </div>
      <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="300"><img class="mb-2" src="images/services/i4g.png" width="200" height="96" alt="ui-ux"/>
        <div class="h5">Ingressive For Good</div>
      </div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="skills">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">My Skills</h2>
    </div>
    <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px">I am a quick learner and specialize in multitude of skills required for Web Application Development and Product Design</p>
    </div>
    <div class="bg-light p-3">
      <div class="row">
        <div class="col-md-5">
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">HTML5</span><span>80%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">CSS3</span><span>70%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">PHP</span><span>80%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="col-md-5 offset-md-2">
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">JavaScript</span><span>85%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">MongoDB</span><span>80%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">MySQL</span><span>70%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="experience">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Experience</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1">Web Developer</h3>
                <div class="text-muted text-small">69 Entertainment Ltd. <small>(2016-2019)</small></div>
              </div><img src="images/services/web-design.svg" width="48" height="48" alt="web design"/>
            </div>
          </div>
          <div class="card-body px-3 py-2">
            <p>Conceptualizing creative ideas with clients. Testing and improving the design of the website. Establishing design guidelines, standards, and best practices. Maintaining the appearance of websites by enforcing content standards.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-3" data-aos="fade-left" data-aos-delay="400">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1">Backend Engineer</h3>
                <div class="text-muted text-small">Xttreme Developers. <small>(2019-2021)</small></div>
              </div><img src="images/services/full-stack.svg" width="48" height="48" alt="full stack"/>
            </div>
          </div>
          <div class="card-body px-3 py-2">
            <p>Leverage agile frameworks to provide a robust software architecture,Build APIs to automate processes and manipulate data in between multiple systems. Collaborated with frontend engineers to ensure seamless integration.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Contact Me</h2>
    </div>
    <div class="row">
      <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="bg-light my-2 p-3 pt-2"><form action="index.php" name = "contact"
    method="POST">
    <div class="form-group my-2">
      <label for="name" class="form-label fw-bolder">Name</label>
      <input class="form-control" type="text" id="name" name="name" required>
    </div>
    <div class="form-group my-2">
      <label for="email" class="form-label fw-bolder">Email</label>
      <input class="form-control" type="email" id="email" name="email" required>
    </div>
  <div class="form-group my-2">
    <label for="message" class="form-label fw-bolder">Message</label>
    <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
  </div>
  <button class="btn btn-primary mt-2" type="submit" name="submit">Send</button>
</form>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
        <div class="mt-3 px-1">
          <div class="h5">Let’s talk how I can help you!</div>
          <p>If you like my work and want to avail my services then drop me a message using the contact form. </p>
          <p>Or get in touch using my email, or my contact number.</p>
          <p>See you!</p>
        </div>
        <div class="mt-53 px-1">
          <div class="row"> 
            <div class="col-sm-2">
              <div class="pb-1">Email:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">idrisadeniji01@gmail.com</div>
            </div>
            <div class="col-sm-2">
              <div class="pb-1">Phone:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">+234 708 518 3282</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="pt-4 pb-4 text-center bg-light">
  <div class="container">
    <div class="my-3">
      <div class="h4">Idris Adeniji</div>
      <p>Web Developer & Mobile Application Developer</p>
      <div class="social-nav">
        <nav role="navigation">
          <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="https://twitter.com/alvacoder" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/alvacoder" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/alvacoder" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/idrisadeniji" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="text-small text-secondary">
      <div class="mb-1">&copy; Alvacoder. All rights reserved.</div>
      <div>
    </div>
  </div>
</footer></div>
    </div>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i class="fas fa-angle-up fa-x"></i></span></a></div>
    <script src="./scripts/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/masonry.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/BigPicture.min.js?ver=1.2.0"></script>
    <script src="./scripts/purecounter.min.js?ver=1.2.0"></script>
    <script src="./scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="./scripts/aos.min.js?ver=1.2.0"></script>
    <script src="./scripts/main.js?ver=1.2.0"></script>
  </body>
</html>