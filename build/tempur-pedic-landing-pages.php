<!DOCTYPE html>
<html>
  <!-- Include head -->
  <?php include 'partial/head.php'; ?>

<body>

<?php include 'partial/google-analytics.php'; ?>

<div class="wrapper">
  <!-- Header -->
  <?php include 'partial/navigation.php'; ?>

    <div class="slider">
      <img src="img/2x/tempur-lp-1@2x.jpg" srcset="img/1x/tempur-lp-1.jpg 1x, img/2x/tempur-lp-1@2x.jpg 2x" alt="">
      <img src="img/2x/tempur-lp-2@2x.jpg" srcset="img/1x/tempur-lp-2.jpg 1x, img/2x/tempur-lp-2@2x.jpg 2x" alt="">
      <!-- <img src="img/2x/tempur-lp-3@2x.jpg" srcset="img/1x/tempur-lp-3.jpg 1x, img/2x/tempur-lp-3@2x.jpg 2x" alt=""> -->
      <img src="img/2x/tempur-lp-4@2x.jpg" srcset="img/1x/tempur-lp-4.jpg 1x, img/2x/tempur-lp-4@2x.jpg 2x" alt="">
    </div>

    <section class="works-intro">
      <h1>Tempur-Pedic Retailer Landing Pages</h1>
      <div class="two-col-layout">
        <main>
          <h2>Mattress buying in the digital age</h2>
          <p>
            At Icon Marketing, one of my primary responsibilities is creating landing pages for mattress retailers. The goal is to promote <span class="no-break">Tempur-Pedic&reg;</span> products carried by the retailer on their site in a way that is easy for retailers to implement and is inline with <span class="no-break">Tempur-Pedic&reg;</span> brand standards.
          </p>
          <h3>Process</h3>
          <p>
            Account Executives at Icon collaborate with retailers to determine which <span class="no-break">Tempur-Pedic&reg;</span> template will best fit their site and digital marketing needs. From there, I create a mockup in Adobe Illustrator of how the template will look with the retailer site's header, footer, and inventory. Once approved, customizations will be developed to the template. Compiled code is then sent to the retailer to add to their site.
          </p>
          <p>
            To function properly on retailer sites, I rely on <a href="https://gulpjs.com/" target="_blank">gulp</a> for minifying code. I also use it to compile multiple SASS files into inline CSS.
          </p>
        </main>
        <aside class="sidebar">
          <ul>
            <li>
              <h4 class="sidebar-category">Role</h4>
              <p class="sidebar-name">Designer &amp; Developer</p>
            </li>
            <li>
              <h4 class="sidebar-category">Company</h4>
              <p class="sidebar-name">Icon Marketing</p>
            </li>
            <li>
              <h4 class="sidebar-category">Date</h4>
              <p class="sidebar-name">June 2017</p>
            </li>
          </ul>
          <ul class="credits">
            <h4 class="sidebar-category">Credits</h4>
            <li>
              <p class="sidebar-name">Jeff Nabors</p>
              <h5 class="sidebar-descriptor">Creative Director</h5>
            </li>
            
            <li>
              <p class="sidebar-name">Doug Best</p>
              <h5 class="sidebar-descriptor">Art Director</h5>
            </li>

            <li>
              <p class="sidebar-name">Colleen Sullivan</p>
              <h5 class="sidebar-descriptor">Project Manager</h5>
            </li>
          </ul>
        </aside>
    </section>

    <section class="working-examples">
      <h3>View HTML:</h3>
      <ul>
        <li><a href="/tempur-pedic-landing-pages/1">
            <img src="img/2x/tp-opt-1@2x.jpg" alt="">
            <h5 class="tp-opt">option 1</h5>
          </a></li>
        <li><a href="/tempur-pedic-landing-pages/2">
            <img src="img/2x/tp-opt-2@2x.jpg" alt="">
            <h5 class="tp-opt">option 2</h5>
          </a></li>
        <li><a href="/tempur-pedic-landing-pages/3">
            <img src="img/2x/tp-opt-3@2x.jpg" alt="">
            <h5 class="tp-opt">option 3</h5>
          </a></li>
        <li><a href="/tempur-pedic-landing-pages/4">
            <img src="img/2x/tp-opt-4@2x.jpg" alt="">
            <h5 class="tp-opt">option 4</h5>
          </a></li>
        <li><a href="/tempur-pedic-landing-pages/5">
            <img src="img/2x/tp-opt-5@2x.jpg" alt="">
            <h5 class="tp-opt">option 5</h5>
          </a></li>
      </ul>
    </section>

<!-- Footer -->
<?php include "partial/footer.php"; ?>

<!-- Close wrapper -->
</div>

<!-- Footer -->
<?php include "partial/script-links.php"; ?>

</body>
</html>
