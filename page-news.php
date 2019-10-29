<?php get_header(); ?>

  <div class="content">
    
    <?php $banner = get_field('portfolio_page_banner'); ?>

    <div class="pg_banner" style="background-image: url('<?php echo $banner['url']; ?>')">
      <div class="overlay"></div>
    </div>
    
    <div class="section">
      <div class="inner-wrap -js_anime">
        
        <div class="pg_title">Newsroom</div>
        
        <div class="news_sort">
          <ul class="clearfix">
            <li class="news_item" id="all">All</li>
            <li class="news_item" id="blog">Blog</li>
            <li class="news_item" id="media">Media</li>
            <li class="news_item" id="insight">Insights</li>
          </ul>
        </div>
        
        
        <div class="newsroom_hld -js_anime clearfix">
        
        
          <?php
	      $args = array(
	         'post_type' => 'newsroom'
	      );
	  
	      $news = new WP_Query($args);
		  
		  while($news->have_posts()) {
		     $news->the_post();
		  ?>
          
          <div class="news_wrap <?php echo get_post_meta(get_the_ID(), 'news_type', true); ?>">
            <div class="news_des clearfix">
              <?php $date = get_post_meta(get_the_ID(), 'news_date', true)?>
              <div class="news_date"><?php echo date('F d, Y', strtotime($date)); ?></div>
              <div class="news_cat"><?php echo get_post_meta(get_the_ID(), 'news_type', true); ?></div>
            </div>
            <a href="<?php the_permalink();?>">
              <div class="news_title"><?php the_title();?></div>
              <div class="news_det"><?php echo wp_trim_words(get_post_meta(get_the_ID(), 'news_text', true), 35); ?></div>
            </a>
          </div>
              
          <?php
		  }  wp_reset_query();
		  ?>
        
        
        </div>
        
                  
      </div>
    </div>
    
  
  
  </div>
  
<?php get_footer(); ?>