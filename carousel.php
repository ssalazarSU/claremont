
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img  src="<?php $result = get_option('mytheme_options_one'); echo($result['carousel_image_one']) ?>" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php $result = get_option('mytheme_options_one'); echo($result['carousel_title_one']); ?></h1>
              <p><?php $result = get_option('mytheme_options_one'); echo($result['carousel_textarea_one']); ?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php $result = get_option('mytheme_options_one');  echo get_permalink($result['carousel_pagelink_one']); ?>" role="button">
	      	    <?php $result = get_option('mytheme_options_one'); echo($result['carousel_pagelink_title_one']); ?>
	         </a>
 	      </p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php $result = get_option('mytheme_options_two'); echo($result['carousel_image_two']); ?>" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php $result = get_option('mytheme_options_two'); echo($result['carousel_title_two']); ?></h1>
              <p><?php $result = get_option('mytheme_options_two'); echo($result['carousel_textarea_two']); ?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php $result = get_option('mytheme_options_two');  echo get_permalink($result['carousel_pagelink_two']); ?>" role="button">
	      	     <?php $result = get_option('mytheme_options_two'); echo($result['carousel_pagelink_title_two']); ?>
		 </a>
	      </p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php $result = get_option('mytheme_options_three'); echo($result['carousel_image_three']); ?>" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php $result = get_option('mytheme_options_three'); echo($result['carousel_title_three']); ?></h1>
              <p><?php $result = get_option('mytheme_options_three'); echo($result['carousel_textarea_three']); ?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php $result = get_option('mytheme_options_three');  echo get_permalink($result['carousel_pagelink_three']); ?>" role="button">
	      	     <?php $result = get_option('mytheme_options_three'); echo($result['carousel_pagelink_title_three']); ?>
		 </a>
	      </p>
	    </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
