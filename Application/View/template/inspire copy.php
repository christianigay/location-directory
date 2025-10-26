<html>
  <head>
    <title>Inspired-Conf26-web</title>
    <meta charset="utf-8" />
    <?php foreach ($this->cssFiles as $file): ?>
      <link rel="stylesheet" type="text/css" href="<?php echo $file; ?>">
    <?php endforeach; ?>
  </head>

  <body>
    <div class="container desktop-only">

      <!-- === HERO SECTION === -->
      <div class="section hero-main">
        <div class="hero-overlay">
          <button>REGISTER NOW</button>
          <div>SATURDAY, APRIL 25</div>
        </div>

        <div class="title-container">
          <video autoplay muted loop playsinline>
            <source src="videos/Inspired_desktop_output.mp4" type="video/mp4"> 
            Your browser does not support the video tag.
          </video>

          <div class="main-title"></div>

          <div class="conference-title">
            THE INSPIRED CONFERENCE 2026
          </div>
        </div>
      </div>

      <!-- === REGISTER SECTION === -->
      <div class="section register">
        <div class="register-text">
          <div>REGISTER NOW</div>
        </div>
      </div>

      <!-- === QUOTE SECTION === -->
      <div class="section quote-section">
        <div class="start">
          <img src="assets/css/images/quote-blank-start.jpg" alt="Quote Start" />
        </div>
        <div class="middle">
          <div class="quote-main-center">
            <div>Here's another way to put it: You're here to be light, bringing out</div>
            <div>the God-colors in the world. God is not a secret be kept. We're</div>
            <div>going public with this, as public as a city on a hill. If I make you</div>
            <div>light-bearers, you don't think I'm going to hide you under a bucket,</div>
            <div>do you? I'm putting you on a light stand. Now that I've put you there</div>
            <div>on a hilltop, on a light stand—shine! Keep open house; be generous</div>
            <div>with your lives. By opening up to others, you'll prompt people to</div>
            <div>open up with God, this generous Father in heaven.</div>
            <div class="quote-author">Matthew 5:14–16 MSG</div>
          </div>
        </div>
        <div class="end">
          <img src="assets/css/images/quote-end.jpg" alt="Quote End" />
        </div>
      </div>

      <!-- === THEME SECTION === -->
      <div class="section theme">
        <img src="assets/css/images/theme-title.jpg" alt="Theme Title" />
      </div>

      <!-- === GALLERY SECTION === -->
      <div class="section gallery">
        <img src="assets/css/images/gallery-section.jpg" alt="Gallery Section" />
      </div>

      <!-- === FOOTER SECTION === -->
      <div class="section footer-top">
        <div><img src="assets/css/images/footer-start-logo.jpg" alt="Footer Start" /></div>
        <div><img src="assets/css/images/footer-middle.jpg" alt="Footer Middle" /></div>
        <div><img src="assets/css/images/footer-end.jpg" alt="Footer End" /></div>
      </div>

      <div class="section footer-row">
        <div class="footer-left">
          <img src="assets/css/images/footer-instagram.jpg" alt="Footer Instagram" />
          <img src="assets/css/images/footer-mail.jpg" alt="Footer Mail" />
        </div>
        <div class="footer-right">
          <img src="assets/css/images/footer-blank.jpg" alt="Footer Blank" />
        </div>
      </div>
    </div>
  </body>
</html>
