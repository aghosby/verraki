<?php get_header(); ?>

  <div class="content">
    <?php $banner = get_field('portfolio_page_banner'); ?>

    <div class="pg_banner" style="background-image: url('<?php echo $banner['url']; ?>')">
      <div class="overlay"></div>
    </div>
    
    
    <div class="section">
      <div class="inner-wrap">
      
        <div class="pg_title">Contact</div>
        
        <div class="col_inner">
          
          <?php $contact = get_field('major_caption')?>
          <div class="major_cap"><?php echo $contact; ?></div>
          
          <?php $contact = get_field('sub_caption')?>
          <div class="det_text s_line">
            <p><?php echo $contact; ?></p>
          </div>
        
        </div>
        
        <div class="row-t">
        
          <div class="cont_wrap -js_anime">
          
            <div class="cont_hld">
              <div class="cont_title">Address</div>
              <div class="cont_det">
                <p><?php echo get_field('address')?></p>
              </div>
            </div>
            
            <div class="cont_hld">
              <div class="cont_title">Email</div>
              <div class="cont_det">
                <p><?php echo get_field('email')?></p>
              </div>
            </div>
            
            <div class="cont_hld">
              <div class="cont_title">Phone</div>
              <div class="cont_det"><?php echo get_field('phone')?></div>
            </div>
          
          </div>
          
          <form>
            
            <div class="in_row clearfix">
              <div class="tgroup">
             	<label>Name</label>
                <input type="text" id="name" name="name" />
              </div>
              
              <div class="tgroup">
             	<label>Email</label>
                <input type="email" id="email" name="email" />
              </div>
            </div>
            
            <div class="in_row clearfix">
              <div class="tgroup">
             	<label>Phone</label>
                <input type="phone" id="phone" name="phone"/>
              </div>
              <div class="tgroup">
             	<label>Company</label>
                <input type="text" id="company" name="company" />
              </div>
            </div>
            
            <div class="in_row clearfix">
              <div class="tgroup">
                <label>Message</label>
                <textarea placeholder="Enter Text Here"></textarea>
              </div>
            </div>
            
            <button class="edge-cta cta -js_anime" id="submit">Submit</button>
          
          </form>
        
        </div>
        
        <div class="row-t -js_anime">
        
          <div class="pg_wrap">
            <div id="map"></div>
          </div>
            
         </div>
        
      
      
      </div>
    </div>
    
    
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnfMCvOW_WJ2Y3OjlcZlE_3yCxXOK9mzs"></script>
    <script>
		var myCenter = new google.maps.LatLng(6.436394, 3.418948);
		function initialize(){
    		var mapProp = {
				center:myCenter,
				zoom:15,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};

		var map = new google.maps.Map(document.getElementById("map"),mapProp);

		var marker = new google.maps.Marker({
			position:myCenter,
		});

		marker.setMap(map);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
    
    
    
  </div>


<?php get_footer(); ?>