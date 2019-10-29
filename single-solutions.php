<?php get_header(); ?>

    <?php $banner = get_field('solutions_page_banner_image'); ?>
    <div class="pg_banner" style="background-image: url('<?php echo $banner; ?>')">
      <div class="overlay"></div>
    </div>
    
    <div class="section-l clearfix">
      <div class="inner-wrap">
        
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>        
        <div class="det_hld">
          <div class="det_title"><?php echo the_title(); ?></div>
          <div class="sec_cap -js_anime " id="company">Overview</div>
          <div class="det_text">
            <p><?php echo get_field('overview');?></p>
          </div>
          <div class="det_photo">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
          </div>
          
          <div class="sec_cap -js_anime " id="company">Offerings</div>
          <div class="det_text">
            <p><?php echo get_field('offering');?></p>
          </div>
        </div>
        <?php endwhile; endif; ?>
        
      </div>
    </div>




<?php get_footer(); ?>