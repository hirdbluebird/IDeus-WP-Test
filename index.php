<?php
  $pageName = 'Home';
  $siteName = 'iDeus';
  $uri = 'home';
  get_header();
?>

<main class="l-contentText" role="main">

<?php 

  $args = array(
        'posts_per_page' => '2',
        'category_name'  => 'News',
        'numberposts'    => '2'      
  );
  $posts_array = wp_get_recent_posts( $args );

  foreach ( $post_array as $post ) {  
  ?>
    <section class="l-post">
      <div class="b-post -type_archive">
   
        <?php $post_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post["ID"]), 'post-page-thumbnail'); ?>
        echo
        <a class="b-post__thumbLink" href="">
          <img class="b-post__thumb" src="<?php echo $post_image_url[0]; ?>" alt="ideus_team at WebCampOdessa" width="<?php echo $post_image_url[1]; ?>" height="<?php echo $post_image_url[2]; ?>" />
        </a>
        
        <h2 class="b-post__title"><?php echo $post['post_title']; ?></h2>

        <div class="b-post__content b-text">
          <p><?php echo $post['post_excerpt']; ?></p>
        </div>

        <div class="b-readMore">
          <a class="b-readMore__link" href="single.html">Читать дальше</a>
        </div>

        <ul class="b-postMeta">
          <li class="b-postMeta__item -type_date"><?php  echo $post['post_date']; ?></li>
          <li class="b-postMeta__item -type_author"><?php echo $post['post_author']; ?></li>
          <li class="b-postMeta__item -type_comments">
            <a class="b-postMeta__link" href="single.html#comments"><?php  ?></a>
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

