<?php
  $pageName = 'Конференция #WebCamp 2015 в Одессе';
  $siteName = 'iDeus';
  $uri = 'single';
  require('inc/header.php');
?>

<main class="l-contentText" role="main">
  <section class="l-post">
    <div class="b-post">
      <img class="b-post__thumb" src="assets/img/userfiles/article_1-ill.jpg" alt="ideus_team at WebCampOdessa" />

      <h1 class="b-post__title">Конференция #WebCamp 2015 в Одессе</h1>

      <div class="b-post__content b-text">
        <p>3-5 июля мы побывали на конференции WebCamp в Одессе и сами выступили там докладчиками, поделившись <a href="http://habrahabr.ru/post/261973/" target="_blank">своим опытом вёрстки «по-БЭМ»</a></p>
      </div>

      
      <ul class="b-postMeta">
        <li class="b-postMeta__item -type_date">8 июля 2015</li>
        <li class="b-postMeta__item -type_author">Igor Zenich</li>
        <li class="b-postMeta__item -type_comments">
          <a class="b-postMeta__link" href="single.html/#comments">0</a>
        </li>
      </ul>

      <div class="b-share">
        <div class="b-share__title">Поделиться:</div>
        <div class="b-share__content">
          <img src="assets/img/temp-share.png" alt="" />
        </div>
      </div>
    </div>
  </section>

  <div class="l-comments">
    <div class="b-comments" id="comments">
      <!-- Тут должна быть возможность оставить комментарии к статье -->
    </div>
  </div>
</main>

<?php require('inc/sidebar.php'); ?>

<?php require('inc/footer.php'); ?>