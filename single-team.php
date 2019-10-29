<?php get_header(); ?>

    <div class="content">
       <?php $banner = get_field('home_page_banner'); ?>

      <div class="pg_banner" style ="background-image: url('<?php echo $banner; ?>')">
        <div class="overlay"></div>
      </div>
      
    
    <div class="section clearfix">
      <div class="inner-wrap">
        
        <div class="team_hld">
          
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div class="team_title"><?php echo the_title(); ?></div>
          <div class="team_pos clearfix"><?php echo get_post_meta(get_the_ID(), 'position', true); ?></div>
          <div class="team_det clearfix">
            <div class="team_photo">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
            </div>
            <div class="det_text"><?php echo get_post_meta(get_the_ID(), 'info', true); ?></div>
           </div>
          <?php endwhile; endif; ?>
          
        </div>
      
      </div>
    </div>
    
    </div>


<?php get_footer();?>