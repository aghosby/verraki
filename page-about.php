<?php get_header(); ?>

<div class="content">

    <?php $banner = get_field('about_page_banner'); ?>

    <div class="pg_banner" style="background-image: url('<?php echo $banner['url']; ?>')">
      <div class="overlay"></div>
    </div>
    
    <div class="pg_wrap">
      
      <div class="section">
        <div class="inner-wrap -js_anime">
          <div class="pg_title">About Us</div>
          
          <div class="news_sort -js_anime">
            <ul class="clearfix">
              <li><a href="<?php echo site_url('/about'); ?>/#company">Our Company</a></li>
              <li><a href="<?php echo site_url('/about'); ?>/#value">Value Proposition</a></li>
              <li><a href="<?php echo site_url('/about'); ?>/#team">Our Team</a></li>
              <li><a href="<?php echo site_url('/about'); ?>/#advisors">Advisors</a></li>
              <li><a href="<?php echo site_url('/about'); ?>/#csr">Community Programmes</a></li>
              <li><a href="<?php echo site_url('/about'); ?>/#faq">FAQs</a></li>
            </ul>
          </div>
          
          <?php $our_company = get_field('our_company')?>
          
          <div class="row-t">
            <div class="sec_cap -js_anime" id="company"><?php echo $our_company['section_title']; ?></div>
            <div class="major_cap"><?php echo $our_company['major_caption']; ?></div>
            <div class="det_text -js_anime"><?php echo $our_company['sub_text']; ?></div>
            
            <div class="col_inner -js_anime clearfix">
              <div class="col_photo">
                <img src="<?php echo $our_company['company_section_image'] ?>" />
              </div>
              <div class="firm_origin">
                <div class="col_word">
                  <div class="row-f"><span>Ver</span>(sorium)</div>
                  <div class="row-l">Latin word for Turn Around, Pivot </div>
                </div>
                <div class="col_word">+</div>
                <div class="col_word">
                  <div class="row-f">(Me)<span>raki</span></div>
                  <div class="row-l">Greek word used to describe the action of doing with soul, creativity, pouring oneself into a task</div>
                </div>
              </div>
            </div>
            
            <div class="col_inner clearfix">
              <div class="left_col det_text -js_anime">
                <?php echo $our_company['our_vision']; ?>
              </div>
              <div class="right_col det_text -js_anime">
                <?php echo $our_company['our_mission']; ?>
              </div>
            </div>
          
          </div>
        
        </div>
      </div>
      
      <?php $our_values = get_field('our_values')?>
      <div class="section grey_sec">
        <div class="inner-wrap">
          <div class="sec_cap -js_anime"  id="value"><?php echo $our_values['section_title']; ?></div>
            
          <div class="col_inner -js_anime clearfix">
          <?php
	      $args = array(
	         'post_type' => 'values'
	      );
	  
	      $value = new WP_Query($args);
		  
		  while($value->have_posts()) {
		     $value->the_post();
		  ?>
          
          <div class="v-wrap">
		    <div class="v-title">
			  <div class="s-no"><?php echo get_post_meta(get_the_ID(), 'value_number', true); ?></div>
			  <div class="v-name"><?php  echo the_title(); ?></div> 
            </div>
		    <div class="v-det"><?php the_content(); ?></div>
          </div>
          <?php
		  }  wp_reset_query();
		  ?>	
          </div>  
            
        </div>
      </div>
      
      
      <?php $team = get_field('our_team')?>
      <div class="section">
        <div class="inner-wrap">
            <div class="sec_cap -js_anime" id="team"><?php echo $team['section_title']; ?></div>
             
            <div class="col_inner -js_anime clearfix">
            
              <?php
	          $args = array(
	             'post_type' => 'team'
	          );
	  
	          $team = new WP_Query($args);
		  
		      while($team->have_posts()) {
		      $team->the_post();
		      ?>
              <div class="p_hld">
                <div class="p_photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                <a href="<?php the_permalink(); ?>">
                  <span><?php echo the_title(); ?></span>
                  <span><?php echo get_post_meta(get_the_ID(), 'position', true); ?></span>
                </a>
              </div>
              
              <?php
		      } wp_reset_query();
		      ?>
            
        </div>
      </div>
      </div>
      
      <?php $csr = get_field('community_programmes')?>
      <div class="section grey_sec">
        <div class="inner-wrap">
            <div class="sec_cap -js_anime" id="csr"><?php echo $csr['section_title']; ?></div>
            <div class="major_cap"><?php echo $csr['major_caption']; ?></div>
            <div class="det_text -js_anime"><?php echo $csr['sub_text']; ?></div>
        </div>
      </div>
      
      
      <?php $faq = get_field('faqs')?>
      <div class="section">
        <div class="inner-wrap">
          
          <div class="sec_cap -js_anime" id="faq"><?php echo $faq['section_title']; ?></div>
          
          <div class="col_inner -js_anime">
            <div class="faq_wrap_l clearfix">
              <?php
	          $args = array(
	             'post_type' => 'faq left'
	          );
	  
	          $faq = new WP_Query($args);
			  
			  
		      while($faq->have_posts()) {
		      $faq->the_post();
			  
		      ?>
              <div class="faq_hld">
                <div class="ic">
                  <div class="ic_text"><?php echo the_title(); ?></div>
                  <div class="ic_sign"><span class="sp-1">+</span><span class="sp-2">-</span></div>
                </div>
                <div class="faq_det">
                  <div class="faq_text"><?php echo get_post_meta(get_the_ID(), 'answer', true); ?></div>
                </div>
              </div>
                            
              <?php
		      } wp_reset_query();
		      ?>
            </div>
          
            <div class="faq_wrap_r clearfix">
              <?php
	          $args = array(
	             'post_type' => 'faq right'
	          );
	  
	          $faq = new WP_Query($args);
			  
			  
		      while($faq->have_posts()) {
		      $faq->the_post();
			  
		      ?>
              <div class="faq_hld">
                <div class="ic">
                  <div class="ic_text"><?php echo the_title(); ?></div>
                  <div class="ic_sign"><span class="sp-1">+</span><span class="sp-2">-</span></div>
                </div>
                <div class="faq_det">
                  <div class="faq_text"><?php echo get_post_meta(get_the_ID(), 'answer', true); ?></div>
                </div>
              </div>
                            
              <?php
		      } wp_reset_query();
		      ?>
            </div>
          </div>
          
        </div>
      </div>
           
      
      
    
    </div>



</div>

<?php get_footer(); ?>