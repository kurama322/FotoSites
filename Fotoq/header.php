<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset');?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body class="body">
<header class="  header container-fluid"  data-animate style="background-image: url('<?php the_field('header_background', ); ?>');">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-xl">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="#portfolio">Portfolio</a>
            <a class="nav-link" href="#price">Price</a>
            <a class="nav-link" href="#contact">Contact</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="header_section container-md">
      <div class="header_text">
      <h1 class="header_h"><?php the_field('name_m'); ?></h1>
        <p class="header_p">
          <?php the_field('text');?>
        </p>
      </div>

      <div class="social_media">
        <span class="span_social"></span>
        <a class="instagram" href="<?php the_field('instagram');?>" target="_blank" rel="noopener">
        <i class="bi bi-instagram"></i>
       </a>
       <a class="facebook" href="<?php the_field('facebook');?>" target="_blank" rel="noopener">
        <i class="bi bi-facebook"></i>
       </a>
        <a class="maxmodels" href="<?php the_field('max-models');?>" target="_blank" rel="noopener">
        <i class="bi bi-meta"></i>
       </a>
        <span class="span_social"></span>
      </div>
    </div>
  </header>