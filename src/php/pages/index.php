<!DOCTYPE html>
<html>
  <!-- Include head -->
  <?php include 'partial/head.php'; ?>

<body>

<?php include 'partial/google-analytics.php'; ?>

<!-- Header -->
<?php include 'partial/navigation.php'; ?>

<div class="wrapper">

  <!-- Intro -->
  <section id="intro">
    <h1 class="homepage reveal">I’m Steve Orchosky, and I am a digital designer and illustrator.</h1>

    <!-- <div class="animation">
      <img src="img/homepage.jpg" alt="Homepage illustration">
    </div> -->

    <a class="continue reveal" id="continueButton">
      <h5 class="continue__text">Continue</h5>
      <img class="continue__arrow" src="img/SVG/scroll_arrow.svg" srcset="img/2x/scroll_arrow@2x.png 1x, img/SVG/scroll_arrow.svg 2x" alt="down-arrow">
    </a>
  </section>

  <!-- Works section anchor for continue btn -->
  <section id="works">

    <a class="project feature" href="tempur-pedic-landing-pages.php">
      <article class="feature-tempur-pedic-landing-pages">
          <!-- Img for mobile -->
          <div class="feature-img-container">
            <img src="img/2x/tempur-pedic-feature@2x.jpg" srcset="img/1x/tempur-pedic-feature.jpg 1x, img/2x/tempur-pedic-feature@2x.jpg 2x" alt="Tempur-Pedic Landing Pages">
          </div>

          <!-- Desktop gradient bg -->
          <div class="gradient">
            <div class="feature-text">
              <h3 class="feature-text-heading">Tempur-Pedic Retailer Landing Pages</h3>
              <p class="feature-text-paragraph">Website template design and development for <span class="no-break">Tempur-Pedic</span>, a client of Icon Marketing Communications.</p>
              <p class="btn-text">View Project</p> 
            </div>
          </div>

      </article>
    </a>

  <!-- Non-feature projects grid -->
    <a class="project" href="biltmore_forest.php">
      <article class="project">
        <img src="img/biltmore-forest/144ppi/biltmore-forest-thumb.jpg" alt="Biltmore Forest Country Club Golf Course">
        <div class="text">
          <h3>Biltmore Forest Country Club</h3>
          <p>Website design for Biltmore Forest Country Club, a client of Clubessential.</p>
          <p class="btn-text">View Project</p> 
        </div>
      </article>
    </a>

    <a class="project" href="release.php">
      <article class="project">
        <img src="img/release/release_thumb.jpg" alt="Release App">
        <div class="text">
          <h3>Release</h3>
          <p>App design for HackOTR 2015, sponsored by the Brandery.</p>
          <p class="btn-text">View Project</p>
        </div>
      </article>
    </a>

  </section>

  <section id="clients">
    <h3>Clients I&rsquo;ve worked with</h3>
    <div class="client-slider">
      <img src="img/2x/logo-tempur-pedic@2x.png" srcset="img/1x/logo-tempur-pedic.png 1x, img/2x/logo-tempur-pedic@2x.png 2x" alt="Tempur-Pedic" class="client-logo">
      <img src="img/2x/logo-sf@2x.png" srcset="img/1x/logo-sf.png 1x, img/2x/logo-sf@2x.png 2x" alt="Stearns &amp; Foster" class="client-logo">
      <img src="img/2x/logo-sealy@2x.png" srcset="img/1x/logo-sealy.png 1x, img/2x/logo-sealy@2x.png 2x" alt="Sealy" class="client-logo">
      <img src="img/2x/logo-mercy-health@2x.png" srcset="img/1x/logo-mercy-health.png 1x, img/2x/logo-mercy-health@2x.png 2x" alt="Mercy Health" class="client-logo">
      <img src="img/2x/logo-mars@2x.png" srcset="img/1x/logo-mars.png 1x, img/2x/logo-mars@2x.png 2x" alt="MARS" class="client-logo">
      <img src="img/2x/logo-icon@2x.png" srcset="img/1x/logo-icon.png 1x, img/2x/logo-icon@2x.png 2x" alt="SAP" class="client-logo">
      <img src="img/2x/logo-lisnr@2x.png" srcset="img/1x/logo-lisnr.png 1x, img/2x/logo-lisnr@2x.png 2x" alt="SAP" class="client-logo">
      <img src="img/2x/logo-kellogs@2x.png" srcset="img/1x/logo-kellogs.png 1x, img/2x/logo-kellogs@2x.png 2x" alt="Kelloggs" class="client-logo">
      <img src="img/2x/logo-tate-and-lyle@2x.png" srcset="img/1x/logo-tate-and-lyle.png 1x, img/2x/logo-tate-and-lyle@2x.png 2x" alt="Tate&amp;Lyle" class="client-logo">
      <img src="img/2x/logo-sap@2x.png" srcset="img/1x/logo-sap.png 1x, img/2x/logo-sap@2x.png 2x" alt="SAP" class="client-logo">
    </div>
  </section>

<!-- Footer -->
<?php include "partial/footer.php"; ?>

<!-- Close wrapper -->
</div>

<!-- Footer -->
<?php include "partial/script-links.php"; ?>

</body>
</html>
