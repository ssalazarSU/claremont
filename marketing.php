      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?php $result = get_option('marketing_options_one'); echo($result['marketing_image_one']); ?>" alt="Generic placeholder image">
          <h2><?php $result = get_option('marketing_options_one'); echo($result['marketing_title_one']); ?></h2>
          <p><?php $result = get_option('marketing_options_one'); echo($result['marketing_textarea_one']); ?></p>
          <p><a class="btn btn-default" href="<?php $result = get_option('marketing_options_one'); echo get_permalink($result['marketing_pagelink_one']); ?>" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php $result = get_option('marketing_options_two'); echo($result['marketing_image_two']); ?>" alt="Generic placeholder image">
          <h2><?php $result = get_option('marketing_options_two'); echo($result['marketing_title_two']); ?></h2>
          <p><?php $result = get_option('marketing_options_two'); echo($result['marketing_textarea_two']); ?></p>
          <p><a class="btn btn-default" href="<?php $result = get_option('marketing_options_two'); echo get_permalink($result['marketing_pagelink_two']); ?>" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php $result = get_option('marketing_options_three'); echo($result['marketing_image_three']); ?>" alt="Generic placeholder image">
          <h2><?php $result = get_option('marketing_options_three'); echo($result['marketing_title_three']); ?></h2>
          <p><?php $result = get_option('marketing_options_three'); echo($result['marketing_textarea_three']); ?></p>
          <p><a class="btn btn-default" href="<?php $result = get_option('marketing_options_three'); echo get_permalink($result['marketing_pagelink_three']); ?>" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

