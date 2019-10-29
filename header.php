<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php wp_head(); ?>
</head>

<body>
  
    <?php 
	if (is_front_page()) {
		echo '<div id="main_wrapper"><div class="hm_pg_wrap">';
	} else {
		echo '<div class="main-wrap">';
	}
	?> 
    
    <div class="header">
      <div class="hdr clearfix">
          
        <div class="brandname"> 
          <a href="<?php echo site_url(''); ?>"><img class="w_logo" src="<?php bloginfo('template_directory'); ?>/images/verraki_white.png" /></a>
          <a href="<?php echo site_url(''); ?>"><img class="b_logo" src="<?php bloginfo('template_directory'); ?>/images/verraki_logo.png" /></a>
        </div>
          
        <div class="menu_icon clearfix">
          <div class="menu_text">Menu</div>   
          <div class="b_icon"> 
            <span class="b_top"></span> 
            <span class="b_mid"></span> 
            <span class="b_bot"></span> 
          </div>
        </div>
        
      </div> 
    </div>
    
    <div class="menu">
        
        <div class="header">
          <div class="hdr clearfix">
          
            <div class="brandname"> 
              <a href="<?php echo site_url(''); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/verraki_logo.png" /></a>
            </div>
          
            <div class="menu_icon clearfix">
              <div class="menu_text">Menu</div>   
              <div class="b_icon"> 
                <span class="b_top"></span> 
                <span class="b_mid"></span> 
                <span class="b_bot"></span> 
              </div>
            </div>
        
          </div> 
        </div>
        
        <div class="menu_wrap">
        
          <div class="menu_left_col">
            <div class="link_wrap">
              <div class="link_title"><a href="<?php echo site_url(''); ?>">Home</a></div>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="<?php echo site_url('/about'); ?>">About Us</a></div>
              <ul class="sublinks">
                <li><a href="<?php echo site_url('/about#company'); ?>" class="scroll_click">Our Company</a></li>
                <li><a href="<?php echo site_url('/about#value'); ?>" class="scroll_click">Value Proposition</a></li>
                <li><a href="<?php echo site_url('/about#team'); ?>" class="scroll_click">Our Team</a></li>
                <li><a href="<?php echo site_url('/about#advisors'); ?>" class="scroll_click">Advisors</a></li>
                <li><a href="<?php echo site_url('/about#csr'); ?>" class="scroll_click">Community Programmes</a></li>
                <li><a href="<?php echo site_url('/about#faq'); ?>" class="scroll_click">FAQs</a></li>
              </ul>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="<?php echo site_url('/our-solutions'); ?>">Our Solutions</a></div>
              <ul class="sublinks">
                <li><a href="<?php echo site_url('/solutions'); ?>/technology">Technology</a></li>
                <li><a href="<?php echo site_url('/solutions'); ?>/advisory">Advisory</a></li>
                <li><a href="<?php echo site_url('/solutions'); ?>/ventures">Ventures</a></li>
              </ul>
            </div>
            
          </div>
          
          <div class="menu_right_col">
            <div class="link_wrap">
              <div class="link_title"><a href="<?php echo site_url('/industries'); ?>">Industries</a></div>
              <ul class="sublinks">
                <li><a href="<?php echo site_url('/industries'); ?>/#serv_sec" class="scroll_click">Services Sector</a></li>
                <li><a href="<?php echo site_url('/industries'); ?>/#serv_sec" class="scroll_click">Real Sector</a></li>
                <li><a href="<?php echo site_url('/industries'); ?>/#serv_sec" class="scroll_click">Social Sector</a></li>
              </ul>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="<?php echo site_url('/portfolio'); ?>">Portfolio</a></div>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="<?php echo site_url('/news'); ?>">Newsroom</a></div>
              <ul class="sublinks">
                <li><a href="<?php echo site_url('/news'); ?>">Blog</a></li>
                <li><a href="<?php echo site_url('/news'); ?>">Media</a></li>
                <li><a href="<?php echo site_url('/news'); ?>">Insights</a></li>
              </ul>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="<?php echo site_url('/our-people'); ?>">Our People</a></div>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="<?php echo site_url('/contact'); ?>">Contact Us</a></div>
            </div>
          </div>
        
        </div>
        
        <div class="menu_ft">
          <div class="cont_info_ft">
            <div class="info_col">
              <a href="">info@verraki.com</a>
            </div>
            <div class="info_col">27 Kofo Abayomi Street, Victoria Island, Lagos, Nigeria</div>
            <div class="info_col">
              <a href="">+234-(1)-453-7151</a>
            </div>
          </div>
          <div class="social">
            <a href="https://linkedin.com/company/35563551/"  target="new" class="fab fa-linkedin-in"></a>
            <a href="https://facebook.com/VerrakiPartners-763370147381957" target="new" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/verrakip" target="new" class="fab fa-twitter"></a>
            <a href="https://www.youtube.com/channel/UCdqoCzGhYBpu92G_4IhbQsg" target="new" class="fab fa-youtube"></a>
            <a href="https://instagram.com/verraki_partners/" target="new" class="fab fa-instagram"></a>
          </div>
        </div>
                   
      </div>
