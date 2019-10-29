<?php get_header(); ?>

  <div class="content">
    <?php $banner = get_field('portfolio_page_banner'); ?>

    <div class="pg_banner" style="background-image: url('<?php echo $banner['url']; ?>')">
      <div class="overlay"></div>
    </div>
    
    
    <div class="section">
      <div class="inner-wrap">
      
        <div class="pg_title">Industries</div>
        
        <div class="col_inner">
          
          <?php $industry = get_field('major_caption')?>
          <div class="major_cap"><?php echo $industry; ?></div>
          
          <?php $industry = get_field('sub_caption')?>
          <div class="det_text">
            <p><?php echo $industry; ?></p>
          </div>
        
        </div>
        
        <div class="row-t -js_anime clearfix">
        
          <div class="col_sec">
            
            <div class="sector_num">01</div>
            <div class="sector_title" id="serv_sec">Services Sector</div>
            <div class="sector_sub">
            
            <?php
	        $args = array(
	           'post_type' => 'services'
	        );
	  
	        $serv = new WP_Query($args);
		  
		    while($serv->have_posts()) {
		       $serv->the_post();
		    ?>
              <div class="sector_list">
                <div class="sector_name"><a href="<?php  echo the_permalink(); ?>"><?php  echo the_title(); ?></a></div>
                <ul><?php echo get_post_meta(get_the_ID(), 'summary', true); ?></ul>
              </div>
            
            <?php
		    }  wp_reset_query();
		    ?>     
            
            </div>           

          </div>
          
          
          <div class="col_sec">
            
            <div class="sector_num">02</div>
            <div class="sector_title" id="serv_sec">Real Sector</div>
            <div class="sector_sub">
            
            <?php
	        $args = array(
	           'post_type' => 'real'
	        );
	  
	        $real = new WP_Query($args);
		  
		    while($real->have_posts()) {
		       $real->the_post();
		    ?>
              <div class="sector_list">
                <div class="sector_name"><a href="<?php  echo the_permalink(); ?>"><?php  echo the_title(); ?></a></div>
                <ul><?php echo get_post_meta(get_the_ID(), 'summary', true); ?></ul>
              </div>
            
            <?php
		    }  wp_reset_query();
		    ?>     
            
            </div>           

          </div>
          
          
          <div class="col_sec">
            
            <div class="sector_num">03</div>
            <div class="sector_title" id="serv_sec">Social Sector</div>
            <div class="sector_sub">
            
            <?php
	        $args = array(
	           'post_type' => 'social'
	        );
	  
	        $social = new WP_Query($args);
		  
		    while($social->have_posts()) {
		       $social->the_post();
		    ?>
              <div class="sector_list">
                <div class="sector_name"><a href="<?php  echo the_permalink(); ?>"><?php  echo the_title(); ?></a></div>
                <ul><?php echo get_post_meta(get_the_ID(), 'summary', true); ?></ul>
              </div>
            
            <?php
		    }  wp_reset_query();
		    ?>     
            
            </div>           

          </div>
          
          
  
          
                  
        
        </div>
        
      
      
      </div>
    </div>
    
    
    
  </div>


<?php get_footer(); ?>