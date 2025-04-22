<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
  <main>
    <section class="  section_one section_with_me container-md" data-animate id="about_me">
        <div class="left_colum">
            <img src="<?php the_field('image_about_me_left');?>" alt="left_image">
        <h1><?php the_field('name_about_me');?></h1>
        </div>
        <div class="right_colum">
            <span class="span_about_me"></span>
            <div class="text_right_colum">
            <p> "<?php the_field('text_about_me');?></p>
                </div>
                <img src="<?php the_field('right_image_about_me');?>" alt="right_image">
        </div>
    </section>
    <section class=" section_two section_portfolio container-md" data-animate id="portfolio">
        <div class="left_colum">
            <h1><?php the_field('portfolio')?></h1>
            <img src="<?php the_field('left_image_portfolio');?>" alt="left_image">
        </div>
        <div class="right_colum">
            <div class="right_text"><p><?php the_field('text_portfolio')?></p></div>
            <img src="<?php the_field('right_image_portfolio');?>" alt="left_image">
        </div>
        <span class="portfolio_span"></span>
    </section>
    <section class="section_three section_slider container-md" data-animate >
        <div class="latest_work">
            <h1><?php the_field('title_my_latest_work');?></h1>  
            <p><?php the_field('text_my_latest_work');?></p>
        </div>
        <div class="slider-wrapper">
          <button id="prev-slide" class="slide-button material-symbols-rounded">
           
          </button>
          <ul class="image-list">
          <?php
        global $post;

        $myposts = get_posts([
	    'numberposts' => -1,
        ]);

        if( $myposts ){
	    foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
        <?php the_post_thumbnail('full', array( 'class' => 'image-item' ) )?>
		<?php
	    }
        } 
         wp_reset_postdata(); 
        ?>
            
        </ul>
          <button id="next-slide" class="slide-button material-symbols-rounded">
    
          </button>
        </div>
        <div class="slider-scrollbar">
          <div class="scrollbar-track">
            <div class="scrollbar-thumb"></div>
          </div>
        </div>
    </section>
    <section class="" data-animate>
      <div class="price container-md" id="price">
        <div class="left_colum">
              <img src="<?php the_field('image_price');?>" alt="">
        </div>
        <div class="right_colum">
          <div class="prices">
            <h1><?php the_field('price');?></h1>
          </div>
          <div class="services">
          <?php
        global $post;

        $myposts = get_posts([
	    'numberposts' => 3,
        ]);

        if( $myposts ){
	    foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
         <div class="first"> 
              <h2><?php the_title()?></h2>
                <p><?php the_content()?></p>
            </div>
		<?php
	    }
        } 
         wp_reset_postdata(); 
        ?>
           
           </div>
        </div>
      </div>
    </section>
    <section class="contact container-md" data-animate id="contact">
      <div class="contact">
         <div class="left_colum custom-contact-form">
         <div class="custom-contact-form">
        <?php echo do_shortcode('[contact-form-7 id="aa1c96c" title="Untitled"]'); ?>
        </div>
         </div>
         <div class="right_colum">
          <img src="<?php the_field('image_contact');?> "alt="">
         </div> 
      </div>
    </section>
    <div class="lightbox" id="lightbox">
      <span class="close">&times;</span>
      <img class="lightbox-img" id="lightbox-img" src="" alt="lightbox image">
    </div>
  </main>
  <?php get_footer(); ?>
