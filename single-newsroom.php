<?php get_header(); ?>
     
     <div class="content">
     
	 
	 <?php $banner = get_field('home_page_banner'); ?>
      <div class="pg_banner" style ="background-image: url('<?php echo $banner; ?>')">
        <div class="overlay"></div>
      </div>
      
      
      <div class="section-l clearfix">
        <div class="inner-wrap">
          
          <div class="det_hld">
          
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="det_title"><?php echo the_title(); ?></div>
            <div class="source_det clearfix">
              <?php $date = get_post_meta(get_the_ID(), 'news_date', true)?>
              <div class="news-t"><a href="#"><?php echo get_post_meta(get_the_ID(), 'news_type', true); ?></a></div>
              <div class="news-t"><a href="#"><?php echo date('F d, Y', strtotime($date)); ?></a></div>
              <div class="news-t"><a href="#"><?php echo get_post_meta(get_the_ID(), 'news_source', true); ?></a></div>
            </div>
            
            <div class="det_photo">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
            </div>
            
            <div class="det_text"><p><?php echo get_post_meta(get_the_ID(), 'news_text', true); ?></p></div>
            
            
          
            <?php endwhile; endif; ?>
            
          </div>
      
        </div>
      </div>
      
      
      
      
      </div>

<?php get_footer(); ?>