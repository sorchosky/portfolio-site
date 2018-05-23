<!-- Contact -->
<section>
  <h2 class="follow-my-work">Follow my work or contact me below.</h2>

  <!-- Social Media -->
  <ul class="social-icons">
    <li>
      <a href="https://www.instagram.com/sorchosky/?hl=en"><i class="fa fa-instagram"></i></a>
    </li>
    <li>
      <a href="https://www.linkedin.com/in/steve-orchosky"><i class="fa fa-linkedin"></i></a>
    </li>
    <li>
      <a href="https://dribbble.com/sorchosky"><i class="fa fa-dribbble"></i></a>
    </li>
    <li>
      <a href="https://github.com/sorchosky/"><i class="fa fa-github"></i></a>
    </li>
    <li>
      <a href="https://twitter.com/sorchosky"><i class="fa fa-twitter"></i></a>
    </li>
  </ul>

  <?php include 'contact.php'; ?>

</section>

<!-- Footer -->
<footer>
  <a href="http://steveorchosky.com" class="logo">
    <object data="img/logo.svg" type="image/svg+xml"></object>
  </a>

  <div class="footer-right">
    <ul class="footer-right__nav">
      <li><a href="about.php" class="nav-link <?php echo ($page == "about.php" ? "active" : "")?>"  href="about.php">About</a></li>
      <li><a href="illustration.php" class="nav-link <?php echo ($page == "illustration.php" ? "active" : "")?>">Illustration</a></li>
      <li><a class="nav-link <?php if (in_array($page, $projects)) {echo "active";}?>">Projects</a></li>
    </ul>
    <h6 class="footer-copyright">Copyright &copy; <span id="current-year"></span> Steve Orchosky. All Rights Reserved.</h6>
  </div>

</footer>