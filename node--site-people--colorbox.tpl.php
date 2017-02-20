<?php
/**
 * @file
 * Site theme implementation to display a people node in colobox.
 */

?>
<article class="colorbox-people-node">

  <header class="row row-top">
    <div class="col-xs-4 left-column">

      <?php print render($content['field_site_people_image']); ?>

      <div class="social-links">
        <?php if (isset($content['field_site_people_facebook_link'])): ?>
          <a href="<?php print $content['field_site_people_facebook_link']['#items'][0]['url']; ?>" target="_blank">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
          </a>
        <?php endif; ?>
        <?php if (isset($content['field_site_people_linkedin_link'])): ?>
          <a href="<?php print $content['field_site_people_linkedin_link']['#items'][0]['url']; ?>" target="_blank">
            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
          </a>
        <?php endif; ?>
        <?php if (isset($content['field_site_people_twitter_link'])): ?>
          <a href="<?php print $content['field_site_people_twitter_link']['#items'][0]['url']; ?>" target="_blank">
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
          </a>
        <?php endif; ?>
        <?php print l('Link to full profile', 'node/' . $node->nid, array( 'attributes' => array('class' => array('profile-link')) )  ); ?>
      </div>

    </div>


    <div class="col-xs-8 right-column">
      <h2><?php print $title; ?></h2>
      <?php print render($content['field_site_people_position']); ?>
    </div>
  </header>

  <div class="row row-bottom">
    <div class="col-xs-offset-4 col-xs-8 right-column">
      <?php print render($content['body']); ?>
    </div>
  </div>

</article>
