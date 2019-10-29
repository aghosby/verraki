<?php get_header(); ?>

<div class="content">

    <?php $banner = get_field('about_page_banner'); ?>

    <div class="pg_banner" style="background-image: url('<?php echo $banner['url']; ?>')">
      <div class="overlay"></div>
    </div>
    
    <div class="pg_wrap">
      
      <div class="section sec_bot">
        <div class="inner-wrap -js_anime">
          <div class="pg_title">Our People</div>
          
          <div class="news_sort -js_anime">
            <ul class="clearfix">
              <li><a href="<?php echo site_url('/our-people'); ?>/#overview">Overview</a></li>
              <li><a href="<?php echo site_url('/our-people'); ?>/#verraki">Why Verraki</a></li>
              <li><a href="<?php echo site_url('/our-people'); ?>/#professionals">Professionals</a></li>
              <li><a href="<?php echo site_url('/our-people'); ?>/#students">Students & Graduates</a></li>
              <li><a href="<?php echo site_url('/our-people'); ?>/#apply">Apply Now</a></li>
            </ul>
          </div>
          
          
          
          <div class="row-t">
            <?php $overview = get_field('overview')?>
            <div class="sec_cap -js_anime" id="overview"><?php echo $overview['section_title']; ?></div>
            <div class="major_cap"><?php echo $overview['major_caption']; ?></div>
            <div class="det_text s_line">
              <p><?php echo $overview['sub_text']; ?></p>
            </div>
            
            <div class="col_photo">
              <img src="<?php echo $overview['photo'] ?>" />
            </div>
             
             <div class="col_inner">
               <?php $verraki = get_field('why_verraki')?>
               <div class="sec_cap -js_anime" id="verraki"><?php echo $verraki['section_title']; ?></div>
               <div class="major_cap"><?php echo $verraki['major_caption']; ?></div>
               <div class="det_text s_line">
                 <p><?php echo $verraki['sub_caption']; ?></p>
               </div>
             </div>
          
          </div>
                 
        </div>
      </div>
      
      
      <?php $professionals = get_field('professionals')?>
      <div class="pop_row"> 
        <div class="png_photo">
          <img src="<?php echo $professionals['photo'] ?>" />
        </div>
        <div class="q_wrap">
          <div class="q_det">
            <i class="fa fa-quote-right" aria-hidden="true"></i>
            <div class="q_text">
              <div class="q_cap"><?php echo $professionals['testimony'] ?></div>
              <div class="q_author"><?php echo $professionals['author'] ?></div>
             </div>
          </div>
        </div>
      </div>
	  
	  
      <div class="section grey_sec sec_bot">
        <div class="inner-wrap">
          <div class="sec_cap -js_anime" id="professionals"><?php echo $professionals['section_title'] ?></div>
          <div class="major_cap"><?php echo $professionals['major_caption'] ?></div>
          <div class="det_text"><p><?php echo $professionals['sub_caption'] ?></p></div>
        </div>
      </div>
      
      
      <?php $students = get_field('students_and_graduates')?>
      <div class="pop_row grey_sec"> 
        <div class="png_photo">
          <img src="<?php echo $students['photo'] ?>" />
        </div>
        <div class="q_wrap">
          <div class="q_det">
            <i class="fa fa-quote-right" aria-hidden="true"></i>
            <div class="q_text">
              <div class="q_cap"><?php echo $students['testimony'] ?></div>
              <div class="q_author"><?php echo $students['author'] ?></div>
             </div>
          </div>
        </div>
      </div>
      
      
      <div class="section grey_sec">
        <div class="inner-wrap">
          <div class="sec_cap -js_anime" id="students"><?php echo $students['section_title'] ?></div>
          <div class="major_cap"><?php echo $students['major_caption'] ?></div>
          <div class="det_text"><?php echo $students['sub_caption'] ?></div>
        </div>
      </div>
      
      
      
      
      <div class="section">
        <div class="inner-wrap">
          <?php $apply = get_field('students_and_graduates')?>
          <div class="sec_cap -js_anime" id="apply"><?php echo $apply['section_title'] ?></div>
          <div class="major_cap"><?php echo $apply['major_caption'] ?></div>
          
          <div class="car_hld">
          
              <?php
	          $args = array(
	             'post_type' => 'positions'
	          );
	  
	          $position = new WP_Query($args);
			  
			  
		      while($position->have_posts()) {
		      $position->the_post();
			  
		      ?>
              
              
              
            <div class="car_wrap">
              <div class="ic">
                <div class="car_title"><?php echo the_title(); ?></div>
                <div class="car_loc"><?php echo get_post_meta(get_the_ID(), 'location', true); ?></div>
                <div class="car_type"><?php echo get_post_meta(get_the_ID(), 'position_type', true); ?></div>
              </div>
              <div class="car_det">
                <div class="car_text">
                  <?php $date = get_post_meta(get_the_ID(), 'date_posted', true)?>
                  <div class="car_date">Posted on <?php echo date('F d, Y', strtotime($date)); ?></div> 
                  <div class="sub_h">What we are looking for</div>
                  <div class="det_text">
                    <p><?php echo get_post_meta(get_the_ID(), 'position_details', true); ?></p>
                  </div>
                </div>
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

<?php get_footer(); ?>