<?php get_header(); ?>

  <div class="content">
    
    <?php $banner = get_field('portfolio_page_banner'); ?>

    <div class="pg_banner" style="background-image: url('<?php echo $banner['url']; ?>')">
      <div class="overlay"></div>
    </div>
    
    <div class="section">
      <div class="inner-wrap -js_anime">
        
        <div class="pg_title">Our Solutions</div>
        
        <div class="news_sort">
          <ul class="clearfix">
            <li><a href="<?php echo site_url('/solutions'); ?>/technology">Technology</a></li>
            <li><a href="<?php echo site_url('/solutions'); ?>/advisory">Advisory</a></li>
            <li><a href="<?php echo site_url('/solutions'); ?>/ventures">Ventures</a></li>
            
          </ul>
        </div>
        
        <div class="row-t">
          <div class="major_cap"><?php echo get_field('major_caption') ?></div>
          <div class="det_text -js_anime">
            <p><?php echo get_field('sub_caption') ?></p>
            </div>
        </div>
                  
      </div>
    </div>
    
    
    <div class="pg_wrap">
          <?php
	      $args = array(
	         'post_type' => 'solutions'
	      );
	  
	      $solution = new WP_Query($args);
		  
		  while($solution->have_posts()) {
		     $solution->the_post();
		  ?>
          
          <div class="spi_wrap">
            <div class="spi-d">
              <div class="spi_row">
                <div class="spi_row_inner -js_anime">
                  <div class="spi_photo">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
                  </div>
                  <div class="spi_det">
                    <div class="spi_title"><?php  echo the_title(); ?></div>
                    <div class="det_text"><p><?php echo get_post_meta(get_the_ID(), 'solution_preamble', true); ?></p></div>
                    <div class="cta -js_anime"><a href="<?php  echo the_permalink(); ?>"><?php echo get_post_meta(get_the_ID(), 'link', true); ?></a></div>
                  </div> 
                </div>
                <div class="spi_row_inner -js_anime">
                  <div class="png_photo">
                    <?php $meta_img_array = get_field('photo');?>
                    <img src="<?php echo $meta_img_array; ?>" />
                  </div>
                  <div class="q_wrap">
                    <div class="q_det">
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                      <div class="q_text">
                        <div class="q_cap"><?php echo get_post_meta(get_the_ID(), 'quote', true); ?></div>
                        <div class="q_author"><?php echo get_post_meta(get_the_ID(), 'author', true); ?></div>
                      </div>
                    </div>
                  </div>
                </div>
          
              </div>
            </div>
        
            <div class="spi-m">
            </div>
                  
          </div>
          
          <?php
		  }  wp_reset_query();
		  ?>	
    
    </div>
    
  
  
  </div>
  
<?php get_footer(); ?>