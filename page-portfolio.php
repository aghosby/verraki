<?php get_header(); ?>

  <div class="content">
    <?php $banner = get_field('portfolio_page_banner'); ?>

    <div class="pg_banner" style="background-image: url('<?php echo $banner['url']; ?>')">
      <div class="overlay"></div>
    </div>
    
    
    <div class="section">
      <div class="inner-wrap">
      
        <div class="pg_title">Portfolio</div>
        
        <div class="col_inner">
          
          <?php $portfolio = get_field('major_caption')?>
          <div class="major_cap"><?php echo $portfolio; ?></div>
          
          <?php $portfolio = get_field('sub_caption')?>
          <div class="det_text">
            <p><?php echo $portfolio; ?></p>
          </div>
        
        </div>
        
        <div class="row-t -js_anime">
        
          <div class="sec_cap -js_anime">Our Clients</div>
          
          <div class="col_inner clearfix">
            
          <?php
	      $args = array(
	         'post_type' => 'Clients'
	      );
	  
	      $client = new WP_Query($args);
		  
		  while($client->have_posts()) {
		     $client->the_post();
		  ?>
          
          <div class="port_sec">
            <div class="cli_photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
          </div>
          
		  <?php
		  }  wp_reset_query();
		  ?>
            
            
            
          
          </div>
        
        </div>
      
      
      </div>
    </div>
    
    
    
  </div>


<?php get_footer(); ?>