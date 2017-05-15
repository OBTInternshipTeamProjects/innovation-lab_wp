<?php get_header(); ?>
	<div class="container">
		<div class="content-container image">
	      	<div id="about">
	        	<div id="center"></div>
	      	</div>
	    </div>
	    <hr>
	    <div class="content-container info flex">
	    	<?php if(have_posts()): ?>
				<?php $args = array( 'category' => 3 );?>
				<?php $myposts = get_posts( $args ); ?>
	    		<?php foreach($myposts as $post): setup_postdata($post); ?>
	    			<div class="three-col">
	    				<div class="flex-image">
	    					<?php the_post_thumbnail('medium'); ?>
	    				</div>
	    				<div class="flex-content">
	    					<h1><?php the_title(); ?></h1>
	    					<p><?php the_content(); ?></p>
	    				</div>
	    			</div>
	    		<?php endforeach; ?>
	    	<?php else: ?>
	    		<p>No content found.</p>
	    	<?php endif; ?>
	    </div>
	    <div class="content-container posts flex">
	    	<?php if(have_posts()): ?>
				<?php $args = array( 'category' => 5 );?>
				<?php $myposts = get_posts( $args ); ?>
	    		<?php foreach($myposts as $post): setup_postdata($post); ?>
	    			<div class="three-col">
	    				<div class="blog-post-image">
	    					<?php the_post_thumbnail('small'); ?>
	    				</div>
	    				<div class="blog-post-content">
	    					<h1><?php the_title(); ?></h1>
	    					<p><?php the_content(); ?></p>
	    				</div>
	    			</div>
	    		<?php endforeach; ?>
	    	<?php else: ?>
	    		<p>No content found.</p>
	    	<?php endif; ?>
	    </div>
	    <div class="content-container location">
	    	<div class="two-col map-api">
	    		<div id="map"></div>
	    	</div>
	    	<div class="two-col location-info">
	    		<?php if(have_posts()): ?>
	    			<?php $args = array('category' => 4); ?>
	    			<?php $myposts = get_posts($args); ?>
	    			<?php foreach($myposts as $post): setup_postdata($post); ?>
	    				<div class="info-container">
	    					<h2><?php the_title(); ?></h2>
	    					<p><?php the_content(); ?></p>
	    				</div>
	    			<?php endforeach; ?>
	    		<?php endif; ?>
	    	</div>
	    	<div class="clear"></div>
	    </div>
  	</div>
    
    <script>
      function initMap() {
        var uluru = {lat: 40.656509, lng: -74.006333};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru,
          scrollwheel: false
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDucSpoWkWGH6n05GpjFLorktAzT1CuEc&callback=initMap">
    </script>
<?php get_footer(); ?>