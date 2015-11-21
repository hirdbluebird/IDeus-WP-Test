<?php
  $pageName = 'Home';
  $siteName = 'iDeus';
  $uri = 'home';
  get_header();
?>

<main class="l-contentText" role="main">

<?php 
            $args = array( 'numberposts' => '2',
                           'category_name'    => 'News',
                           'orderby' => 'rand' 
            );  
            $all_posts = wp_get_recent_posts( $args );
            
            foreach ( $all_posts as $single_post ) {
?>

              <section class="l-post">
                <div class="b-post -type_archive">
             
                  <?php $post_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $single_post["ID"] ), 'post-page-thumbnail'); ?>

                  <a class="b-post__thumbLink" href="">
                    <img class="b-post__thumb" src="<?php echo $post_image_url[0]; ?>" alt="ideus_team at WebCampOdessa" width="<?php echo $post_image_url[1]; ?>" height="<?php echo $post_image_url[2]; ?>" />
                  </a>
                  
                  <h2 class="b-post__title"><?php echo $single_post["post_title"] ?></h2>

                  <div class="b-post__content b-text">
                    <p><?php echo $single_post["post_excerpt"]; ?></p>
                  </div>

                  <div class="b-readMore">
                    <a class="b-readMore__link" href="single.html">Читать дальше</a>
                  </div>

                  <ul class="b-postMeta">
                    <li class="b-postMeta__item -type_date"><?php  echo $single_post["post_date"]; ?></li>
                    <li class="b-postMeta__item -type_author"><?php echo $single_post["post_author"];   ?></li>
                    <li class="b-postMeta__item -type_comments">
                      <a class="b-postMeta__link" href="single.html#comments"><?php echo $single_post["comment_count"] ?></a>
                    </li>
                  </ul>

                  <div class="b-share">
                    <div class="b-share__title">Поделиться:</div>
                    <div class="b-share__content">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-share.png" alt="" />
                    </div>
                  </div>
                </div>
              </section>

          <?php }; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

