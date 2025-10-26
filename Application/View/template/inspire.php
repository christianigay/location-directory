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

    </div>
  </body>
</html>
