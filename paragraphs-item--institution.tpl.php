<?php if (in_array($type,array('one_logo','one_title'))): ?>

	<div class="grid-item-thematic grid-item-black-text grid-item grid-item-gray grid-item-one grid-item-image">
    <?php if ($type == 'one_logo') : ?>
			<a href="<?php print $link?>">
        <div class="grid-item-image"><?php print render($content['field_pi_image'][0]); ?></div>
		  </a>
    <?php else : ?>
		<a class="grid-item-link-wrapper" href="<?php print $link?>">
			<div class="select-icon" style="background-image: url('sites/all/themes/at_subtheme/images/<?php print $icon ?>.png');"></div>

	  	<div class="grid-item-text">
        <div class="grid-title"><?php print $title; ?></div>
        <div class="grid-learn-more"><?php print $link_title; ?></div>
		  </div>
		</a>
    <?php endif;?>
	</div>

<?php elseif($type == 'double') :?>

	<div class="grid-item-thematic grid-item-thematic-split grid-item-black-text grid-item grid-item-split grid-item-gray">
    <div class="grid-overlay">
		  <a class="grid-item-link-wrapper" href="<?php print $link?>">
        <div class="grid-item-image"><?php print render($content['field_pi_image'][0]); ?><div class="play-split"><i class="fa fa-caret-left"></i></div></div>
			  <div class="grid-item-text">
			    <div class="select-icon" style="background-image: url('sites/all/themes/at_subtheme/images/<?php print $icon ?>.png');"></div>
          <div class="grid-title"><?php print $title; ?></div>
          <div class="grid-learn-more"><?php print $link_title; ?></div>
        </div>
			</a>
		</div>
	</div>

<?php else :  ?>

	<div class="grid-item-thematic grid-item-thematic-wide grid-item-black-text large grid-item-gray grid-item grid-item-wide">
    <div class="grid-overlay">
		  <a class="grid-item-link-wrapper" href="<?php print $link?>">
        <div class="grid-item-image"><?php print render($content['field_pi_image'][0]); ?></div>
		    <div class="grid-item-text">
			    <div class="select-icon" style="background-image: url('sites/all/themes/at_subtheme/images/<?php print $icon ?>.png');"></div>
		      <div class="grid-title"><?php print $title; ?></div>
          <div class="grid-learn-more"><?php print $link_title; ?></div>
		    </div>
			</a>
		</div>
	</div>

<?php endif; ?>
