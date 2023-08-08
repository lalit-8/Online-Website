<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>iFIX Multimedia Solutions</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <video playsinline autoplay muted loop id="bgvid">
	  <source src="assets/video/home.mp4" type="video/mp4">
  </video>
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">
      <h1>iFIX Multimedia Solutions</h1>
      <h2>From Vision to Impact</h2>
      <div class="countdown d-flex justify-content-center" data-count="2023/09/1">
        <div>
          <h3>%d</h3>
          <h4>Days</h4>
        </div>
        <div>
          <h3>%h</h3>
          <h4>Hours</h4>
        </div>
        <div>
          <h3>%m</h3>
          <h4>Minutes</h4>
        </div>
        <div>
          <h3>%s</h3>
          <h4>Seconds</h4>
        </div>
      </div>
      <div class="subscribe">
        <h4>Subscribe now to get the latest updates!</h4>
        <form action="#" method="post" class="php-email-form">
          <div class="subscribe-form">
            <input type="email" required><input type="submit" value="Subscribe">
          </div>
        </form>
      </div>
      <div class="social-links text-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="behance"><i class="bi bi-behance"></i></a>
      </div>
    </div>
  </header>
  <main id="main">
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>Our Services</h2>
          <p></p>
        </div>
        <div class="row mt-2">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-vector-pen"></i></div>
            <h4 class="title"><a href="">Graphic Design</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-window-fullscreen"></i></div>
            <h4 class="title"><a href="">Web Design</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-file-richtext"></i></div>
            <h4 class="title"><a href="">Copywriting</a></h4>
            <p class="description"></p>
          </div>
        </div>
		<div class="row mt-2">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-badge-ad"></i></div>
            <h4 class="title"><a href="">Digital Marketing</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-phone"></i></div>
            <h4 class="title"><a href="">Mobile App Development</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-person-circle"></i></div>
            <h4 class="title"><a href="">Social Media Management</a></h4>
            <p class="description"></p>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact Us</h2>
        </div>
        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Office No. 5 & 6, 1st Floor, Satav Patil Arcade, Gat No. 648/1, Pune - Ahmednagar Highway, Near Wagheshwar Palace, Wagholi, Pune, Maharashtra 412207</p>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@ifixmultimedia.com</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 8668327176</p>
              </div>
            </div>
          </div>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form id="ifix-contact" class="php-email-form" accept-charset="utf-8" name="ifix-multimedia">
              <div class="row">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group mt-3">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="subject">Subject</label>
                <select class="form-select" id="subject" required>
					<option value="Graphic Design">Graphic Design</option>
					<option value="Web Design">Web Design</option>
					<option value="Copywriting">Copywriting</option>
					<option value="Digital Marketing">Digital Marketing</option>
					<option value="Mobile App Development">Mobile App Development</option>
					<option value="Social Media Management">Social Media Management</option>
				</select>
              </div>
              <div class="form-group mt-3">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="8" placeholder="Write a message to us" required></textarea>
              </div>
              <div class="text-center mt-2"><button type="submit">Submit</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iFIX Multimedia Solutions</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>