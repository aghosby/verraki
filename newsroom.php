<?php 
require_once('config/database.php');
require_once('config/functions.php'); 
require_once('objects/api.php'); 
$database = new Database();
$db = $database->getConnection();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Verraki</title>
<!-- InstanceEndEditable -->
<base href="<?php echo $baseUrl; ?>" />
<link href="<?php echo get_url(); ?>" rel="canonical" />
<link type="text/css" rel="stylesheet" href="./assets/css/preset.css"/>
<link type="text/css" rel="stylesheet" href="./assets/css/front_end.css"/>
<link type="text/css" rel="stylesheet" href="./assets/css/fonts.css"/>
<link type="text/css" rel="stylesheet" href="./assets/css/responsive.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script type="text/javascript" src="./assets/js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="./assets/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="./assets/js/prefixfree-1.0.7.js"></script>
<script type="text/javascript" src="./assets/js/script.js"></script>
<script type="text/javascript" src="./assets/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="./assets/js/polygonizr-min.js"></script>
<script type="text/javascript" src="./assets/js/jquery.3.3.1-min.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
  
  <div class="main-wrap">
    
    <div class="header">
      <div class="hdr clearfix">
          
        <div class="brandname"> 
          <a href="./"><img class="w_logo" src="./assets/img/verraki_white.png" /></a>
          <a href="./"><img class="b_logo" src="./assets/img/verraki_logo.png" /></a>
        </div>
          
        <div class="menu_icon">
<!--            <div class="menu_text">Menu</div>   -->
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
              <a href="./"><img src="assets/img/verraki_logo.png" /></a>
            </div>
          
            <div class="menu_icon">
<!--            <div class="menu_text">Menu</div>   -->
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
              <div class="link_title"><a href="./">Home</a></div>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="about/">About Us</a></div>
              <ul class="sublinks">
                <li><a href="">Our Company</a></li>
                <li><a href="">Value Proposition</a></li>
                <li><a href="">Our Team</a></li>
                <li><a href="">Advisors</a></li>
                <li><a href="">Community Programmes</a></li>
                <li><a href="">FAQs</a></li>
              </ul>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="solutions">Our Solutions</a></div>
              <ul class="sublinks">
                <li><a href="">Technology</a></li>
                <li><a href="">Advisory</a></li>
                <li><a href="">Ventures</a></li>
              </ul>
            </div>
            
          </div>
          
          <div class="menu_right_col">
            <div class="link_wrap">
              <div class="link_title"><a href="">Industries</a></div>
              <ul class="sublinks">
                <li><a href="">Real Sector</a></li>
                <li><a href="">Social Sector</a></li>
                <li><a href="">Services Sector</a></li>
              </ul>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="">Portfolio</a></div>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="newsroom/">Newsroom</a></div>
              <ul class="sublinks">
                <li><a href="">Blog</a></li>
                <li><a href="">Media</a></li>
                <li><a href="">Insights</a></li>
              </ul>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="careers/">Careers</a></div>
            </div>
            <div class="link_wrap">
              <div class="link_title"><a href="contact/">Contact Us</a></div>
            </div>
          </div>
        
        </div>
        
        <div class="menu_ft">
          <div class="cont_info_ft">
            <div class="info_col">
              <a href="">info@verraki.com</a>
            </div>
            <div class="info_col">
              <a href="">27 Kofo Abayomi Street, Victoria Island, Lagos, Nigeria</a>
            </div>
            <div class="info_col">
              <a href="">+234-(1)-453-7151</a>
            </div>
          </div>
          <div class="social">
            <a href="https://linkedin.com/" class="fab fa-linkedin-in"></a>
            <a href="https://facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/" class="fab fa-twitter"></a>
            <a href="https://youtube.com/" class="fab fa-youtube"></a>
            <a href="https://instagram.com/" class="fab fa-instagram"></a>
          </div>
        </div>
                   
      </div>
    
    <div class="content"><!-- InstanceBeginEditable name="page-contents" -->
    <div class="pg_banner" style="background-image: url(media/team2.jpg)">
      <div class="overlay"></div>
    </div>
    
    <div class="section">
      <div class="inner-wrap">
        <div class="pg_title">Newsroom</div>
        
        <div class="news_sort">
          <ul class="clearfix">
            <li>All</li>
            <li>Blog</li>
            <li>Media</li>
            <li>Insights</li>
          </ul>
        </div> 
        
        <div class="newsroom_hld clearfix">
          <div class="news_wrap">
            <div class="news_date">4 October, 2019</div>
            <div class="news_title"><a href="newsdetails/">Verraki advocates new outlook for Nigeria’s education sector.</a></div>
            <div class="news_det">Foremost business solutions consulting firm, Verraki has reiterated the need for a new outlook for Nigeria’s education system.</div>
          </div>
          <div class="news_wrap">
            <div class="news_date">5 July, 2019</div>
            <div class="news_title"><a href="newsdetails/">20% of government’s procurement should go to SMEs.</a></div>
            <div class="news_det">Small and Medium Scale Enterprises (SMEs) and start-up businesses play significant roles in the economic development of countries.</div>
          </div>
          <div class="news_wrap">
            <div class="news_date">19 June, 2019</div>
            <div class="news_title"><a href="newsdetails/">African challenges demand specific tech solutions.</a></div>
            <div class="news_det">Niyi Yusuf is the Managing Partner of Verraki, a pan African business and technology solutions firm. He spoke with journalists, including ADEYEMI ADEPETUN, on the uniqueness of African challenges.</div>
          </div>
          <div class="news_wrap">
            <div class="news_date">9 June, 2019</div>
            <div class="news_title"><a href="newsdetails/">Investment in STEM education will boost innovation.</a></div>
            <div class="news_det">The Managing Partner at Verraki, Niyi Yusuf, has advocated for increased government investment in Science, Technology, Engineering and Mathematics education to boost innovation in the country.</div>
          </div>
          <div class="news_wrap">
            <div class="news_date">19 May, 2019</div>
            <div class="news_title"><a href="newsdetails/">Digitizing Africa: the Transform Africa summit and leading voices﻿.</a></div>
            <div class="news_det">A blueprint for digital economies and MOUs signed with Inmarsat and French consultancy Tactis – some of the outcomes of the Transform Africa Summit 2019.</div>
          </div>
        </div>
      </div>
    </div>
    <!-- InstanceEndEditable -->
    </div>
    
    <div class="footer">
      <div class="inner-wrap">
        <div class="row-1 clearfix">
          
          <div class="col-1">
            <div class="col-hd">Quick Links</div>
            <div class="col-links clearfix">
              <ul>
                <li><a href="./">Home</a></li>
                <li><a href="about/">About Us</a></li>
                <li><a href="solutions/">Our Solutions</a></li>
                <li><a href="#">Industries</a></li>
                <li><a href="newsroom/">Newsroom</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="careers/">Careers</a></li>
                <li><a href="contact/">Contact Us</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-2">
            <div class="col-hd">Contact</div>
            <div class="col-links">
              <div class="col-info">2nd Floor, Citibank Building, <br />27 Kofo Abayomi Street, Victoria Island, <br /> Lagos, Nigeria.</div>
              <div class="col-info clearfix">
                <p><a href="">+234 (1) 453 7151,</a></p>
                <p><a href="">0901-VERRAKI</a></p>
              </div>
              <div class="col-info">
                <p><a href="">info@verraki.com</a></p>
              </div>
              
            </div>
          </div>
          <div class="col-3">
            <div class="col-hd">Social</div>
            <div class="col-links">
              <a href="https://linkedin.com/" class="fab fa-linkedin-in"></a>
              <a href="https://facebook.com/" class="fab fa-facebook-f"></a>
              <a href="https://twitter.com/" class="fab fa-twitter"></a>
              <a href="https://youtube.com/" class="fab fa-youtube"></a>
              <a href="https://instagram.com/" class="fab fa-instagram"></a>
            </div>
<!--            <div class="v_gram">
              <img src="../assets/img/v_orange.png" />
              <div class="w_cover"></div>
            </div>
-->          </div>
        </div>
        <div class="row-2">
          <div class="copyright">&copy; <?php echo date(Y); ?> Verraki Partners - All Rights Reserved</div>
        </div>
      </div>
    </div>
  
  
  </div>

</body>
<!-- InstanceEnd --></html>