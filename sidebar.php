<aside class="l-sidebar">
  <div class="b-about">
    <h2 class="b-about__title"><?php the_field('about-title'); ?></h2>


    <img class="b-about__thumb" src="<?php echo get_field('about-image'); ?>" alt="О нас" />
    <div class="b-about__content b-text">
      <p><?php the_field('about-text'); ?></p>
    </div>
  </div>
  

  <div class="b-sidebarBlock -style_news">
    <h2 class="b-sidebarBlock__title">Последние новости</h2>
      <div class="l-lastNews">
        <ul class="b-lastNews">
          <?php $args = array( 'numberposts' => '2' );  
                $recent_posts = wp_get_recent_posts( $args );
                  foreach ( $recent_posts as $recent ) {
          ?>

              <?php $post_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $recent["ID"] ), 'sidebar-post-thumbnail' );  ?>

              <li class="b-lastNews__item">
                <a class="b-lastNews__thumbLink" href="#">
                  <img class="b-lastNews__thumb" src="<?php echo $post_image_url[0] ?>" alt="ideus_team at WebCampOdessa" width="<?php echo $post_image_url[1]; ?>" height="<?php echo $post_image_url[2]; ?>" />
                </a>

                <div class="b-lastNews__content">
                  <h3 class="b-lastNews__name">
                    <a class="b-lastNews__nameLink" href="#"><?php echo $recent["post_title"]; ?></a>
                  </h3>
                  <div class="b-lastNews__date"><?php echo $recent["post_date"]; ?></div>
                  <div class="b-lastNews__descr b-text">
                    <p><?php echo $recent["post_excerpt"]; ?></p>
                  </div>
                </div>
              </li>

          <?php }; ?>

      </ul>
    </div>
  </div>
    
  <div class="b-sidebarBlock -style_social">
    <h2 class="b-sidebarBlock__title">Присоединяйся к нам</h2>

    <ul class="b-socialMenu -style_sidebar">
      <li class="b-socialMenu__item -type_fb">
        <a class="b-socialMenu__link" href="<?php if ( get_field('facebook-link', get_the_ID()) != '') { the_field('facebook-link', get_the_ID()); } ?>">Facebook</a>
      </li>
      <li class="b-socialMenu__item -type_twitter">
        <a class="b-socialMenu__link" href="<?php if ( get_field('twitter-link', get_the_ID()) != '') { the_field('twitter-link', get_the_ID()); } ?>">Twitter</a>
      </li>
      <li class="b-socialMenu__item -type_github">
        <a class="b-socialMenu__link" href="<?php if ( get_field('github-link', get_the_ID()) != '') { the_field('github-link', get_the_ID()); } ?>">GitHub</a>
      </li>
    </ul>
  </div>
</aside>