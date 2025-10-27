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
        <div class="hero-date">SATURDAY, APRIL 25</div>
      </div>



      <div class="title-container">
        <video autoplay muted loop playsinline preload="auto">
          <source src="https://thex.church/wp-content/uploads/2025/10/Inspired_desktop_output.mp4" type="video/mp4">
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

    <div class="scribble-section">

      <img src="https://thex.church/wp-content/uploads/2025/10/scribbleb.png" alt="Scribble Decoration" class="scribble scribble-2" />
      <img src="https://thex.church/wp-content/uploads/2025/10/scribble1.png" alt="Decorative Scribble" class="scribble scribble-1" />
      <img src="https://thex.church/wp-content/uploads/2025/10/scribble3.png" alt="Scribble Decoration" class="scribble scribble-3" />

      <div class="three-column">
        <div class="col col-middle">
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
      </div>

      <div class="section theme-section">
        <img src="https://thex.church/wp-content/uploads/2025/10/index_07.jpg" alt="Theme Image" />
        <img src="https://thex.church/wp-content/uploads/2025/10/main-content-image.png" alt="Theme Image" />
      </div>
    </div>

    <div class="section theme-section2">
      <img src="https://thex.church/wp-content/uploads/2025/10/index_08.jpg" alt="Theme Image" />
    </div>

    <div class="footer">
      <div class="footer-column footer-start">
        <img src="https://thex.church/wp-content/uploads/2025/10/index_10.jpg" alt="Theme Image" />
        <div class="contact-item">
          <img src="https://thex.church/wp-content/uploads/2025/10/instagram-icon.png" alt="Instagram Icon" />
          <span>@INSPIRED_GRLS</span>
        </div>

        <div class="contact-item">
          <img src="https://thex.church/wp-content/uploads/2025/10/mail-icon.png" alt="Mail Icon" />
          <span>INSPIRED@THEX.CHURCH</span>
        </div>
      </div>

      <div class="footer-column footer-middle">
        <img src="https://thex.church/wp-content/uploads/2025/10/index_11.jpg" alt="Theme Image" />
      </div>

      <div class="footer-column footer-end">
        <img src="https://thex.church/wp-content/uploads/2025/10/index_12.jpg" alt="Theme Image" />
      </div>
    </div>


    <!-- Registration Modal -->
    <div class="modal" id="registerModal">
      <div class="modal-content">
        <span class="close-btn">&times;</span>
        <h2>Conference Registration</h2>
        <p>Sign up below to join our upcoming conference!</p>

        <form id="registerForm">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Your name" required>
          </div>

          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" required>
          </div>

          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="(Optional)">
          </div>

          <div class="form-group">
            <label for="message">Additional Notes</label>
            <textarea id="message" name="message" rows="3" placeholder="Any message?"></textarea>
          </div>

          <button type="submit" class="submit-btn">Submit</button>
        </form>
      </div>
    </div>


  </div>
  <?php foreach ($this->jsFiles as $jsFile): ?>
    <script src="<?php echo $jsFile; ?>"></script>
  <?php endforeach; ?>
</body>

</html>