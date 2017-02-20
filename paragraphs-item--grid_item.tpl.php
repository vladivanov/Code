<?php if($size == 'standard') :?>

  <div class="grid-item <?php print $color?>">
    <a class="grid-item-link-wrapper" href="<?php print $link?>">
      <?php print render($content['field_grid_icon'][0]); ?>
      <div class="select-icon" style="background-image: url('sites/all/themes/at_subtheme/images/<?php print $icon ?>.png');">
      </div>

      <div class="grid-item-text">
        <div class="grid-type">
          <?php print $type;?>
        </div>

        <div class="grid-title">
          <?php print $title; ?>
        </div>

        <div class="grid-subtitle">
          <?php print $subtitle; ?>
        </div>

        <div class="grid-date">
          <?php print $date; ?>
        </div>
      </div>
    </a>

    <div class="grid-more">
      <a class="grid-item-link-wrapper" href="<?php print $link?>">
        <p><a href="news-events">More <?php print $type;?></a><p><div class="arrow arrow-right"><p><a href="news-events"><i class="fa fa-angle-right" aria-hidden="true"></i></a></p></div>
      </a>
    </div>
  </div>

  <?php elseif($size == 'tall') :?>

	<div class="grid-item grid-item-tall <?php print $color?>">
    <a class="grid-item-link-wrapper" href="<?php print $link?>">
      <div class="grid-item-image">
        <?php print render($content['field_grid_icon'][0]); ?>
        <div class="play-tall"><i class="fa fa-caret-up"></i></div>
      </div>
      <div class="grid-item-text">
        <div class="grid-type"><?php print $type ?></div>
        <div class="grid-title">
          <?php print $title ?>
        </div>
      </div>
    </a>
	</div>

<?php elseif($size == 'wide') :?>

	<div class="grid-item grid-item-wide <?php print $color?>">
    <a class="grid-item-link-wrapper" href="<?php print $link?>">
      <div class="grid-item-image">
        <?php print render($content['field_grid_icon'][0]); ?>
      </div>
      <div class="grid-item-text">
        <div class="grid-type"><?php print $type ?></div>
        <div class="grid-title">
          <?php print $title ?>
        </div>
      </div>
    </a>
	</div>

<?php elseif($size == 'split') :?>

  <div class="grid-item grid-item-split <?php print $color?>">
    <a class="grid-item-link-wrapper" href="<?php print $link?>">
      <div class="grid-item-image">
        <?php print render($content['field_grid_icon'][0]); ?>
        <div class="select-icon" style="background-image: url('sites/all/themes/at_subtheme/images/<?php print $icon ?>.png');"></div>
        <div class="play-split"><i class="fa fa-caret-left"></i></div>
      </div>
      <div class="grid-item-text">
        <div class="grid-type"><?php print $type ?></div>
        <div class="grid-title">
          <?php print $title ?>
        </div>
        <div class="grid-subtitle">
          <?php print $subtitle; ?>
        </div>

        <div class="grid-date">
          <?php print $date; ?>
        </div>
      </div>
    </a>

    <div class="grid-more">
      <a class="grid-item-link-wrapper" href="<?php print $link?>">
        <p><a href="news-events">More <?php print $type;?></a><p><div class="arrow arrow-right"><p><a href="news-events"><i class="fa fa-angle-right" aria-hidden="true"></i></a></p></div>
      </a>
    </div>

    <?php print render($content['field_grid_more_link']); ?>

  </div>

<?php endif; ?>
