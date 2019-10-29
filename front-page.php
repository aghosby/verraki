<?php get_header(); ?>
      
      
      <?php $banner = get_field('home_page_banner'); ?>

      <div class="banner" style ="background-image: url('<?php echo $banner; ?>')">
        <div class="overlay"></div>
      </div>
      
      
      <?php
	  
	  $args = array(
	    'post_type' => 'newsroom',
		'posts_per_page' => 3
	  );
	  
	  $news = new WP_Query($args);
	  
	  echo '<div class="news_slide">
        <div class="slide_hd -js_anime">Latest News</div>
        <div class="flexslider">
          <ul class="slides">';
	  
	  while($news->have_posts()) {
		 $news->the_post(); 
		 ?>
		 <li><a href="<?php the_permalink();?>">
	     <div class="news_caption"><?php the_title(); ?></div>
	     <div class="news_detail"><?php echo wp_trim_words(get_post_meta(get_the_ID(), 'news_text', true), 35); ?></div></a>
            </li>
	  <?php
      }
	  
	  echo '</ul>
        </div>
      </div>';
	  ?>
	  
      
      <div class="menu_nav">
        <div class="inner_wrap">
          <ul class="nav -js_anime">
            <li><a href="<?php echo site_url('/about'); ?>">About Us</a></li>
            <li><a href="<?php echo site_url('/our-solutions'); ?>">Our Solutions</a></li>
            <li><a href="<?php echo site_url('/our-people'); ?>">Our People</a></li>
            <li><a href="<?php echo site_url('/contact'); ?>">Contact Us</a></li>
          </ul>
        </div>
      </div>  
   
    </div>
  </div>
  
</body>
</html>
