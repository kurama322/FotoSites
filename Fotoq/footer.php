
<footer class="footer " data-animate >
    <div class="footer_content container-fluid">
    <div class="footer_nav_menu">
      <a class="nav-link" href="#portfolio">Portfolio</a>
      <a class="nav-link" href="#price">Price</a>
      <a class="nav-link" href="#contact">Contact</a>
    </div>
    <h1 >Photographer</h1>
    <div class="social">
    <a class="instagram" href="<?php the_field('instagram');?>" target="_blank" rel="noopener">
        <i class="bi bi-instagram"></i>
       </a>
       <a class="facebook" href="<?php the_field('facebook');?>" target="_blank" rel="noopener">
        <i class="bi bi-facebook"></i>
       </a>
        <a class="maxmodels" href="<?php the_field('max-models');?>" target="_blank" rel="noopener">
        <i class="bi bi-meta"></i>
       </a>
    </div>
  </div>
    <h2><?php the_field('name_m'); ?></h2>
    <span class="footer_span"></span>
  
  <div class="developer">
    <a href="single.php"> <?php
echo date("Y") . " &copy;Kurama. All Rights Reserved.";
?></a></div>
   
  </footer>
  <?php wp_footer();?>
</body>
</html>
