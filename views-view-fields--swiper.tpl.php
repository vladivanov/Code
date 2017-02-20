<?php
?>

<div class="carousel-slide swiper-slide">
  <div class="hero-image-container">
    <div class="carousel-slide-inner">
      <h2><?php print $fields['title']->content ?></h2>
      <div class="carousel-slide-teaser">
        <?php print $fields['field_introduction']->content ?>
      </div>
      <?php print $fields['path']->content ?>
    </div>
    <div class="img-container" style="background-image:url(<?php print $fields['uri']->content?>)">
    </div>
  </div>
</div>
