<?php
/**
 * @file
 * Overwrite theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<div class="page">

  <?php print render($page['above_header']); ?>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <?php if ($page['language_switcher']): ?>
            <?php print render($page['language_switcher']) ?>
          <?php endif; ?>
        </div>
        <div class="col-sm-9">
          <div class="pull-right">
            <?php if ($page['header']): ?>
              <?php print render($page['header']) ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="nav-container">
    <nav class="container">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>"
               title="<?php print t('Home'); ?>" rel="home" id="logo"
               class="visible-sm-block visible-md-block visible-lg-block">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"
                   class="img-responsive"/>
            </a>
            <a href="<?php print $front_page; ?>"
               title="<?php print t('Home'); ?>" rel="home" id="logo"
               class="visible-xs-inline">
              <img
                src="<?php print url(path_to_theme(), array('absolute' => TRUE)) ?>/logo-white.png"
                class="img-responsive img-logo">
            </a>
          <?php endif; ?>
          <button type="button" class="navbar-toggle" data-toggle="collapse"
                  data-target="#navbar" aria-expanded="true"
                  aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="visible-xs-inline-block pull-right">
            <a class="block-boxes-search-toggle" href="#">
              <i class="fa fa-search"></i>
            </a>
          </div>
        </div>
        <div id="navbar" class="collapse navbar-collapse pull-right">
          <?php if ($page['navigation']): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </div>
      </div>
    </nav>
  </div>
  <div class="main">
    <div <?php if (!$fullwidth): ?> class="container" <?php endif; ?>>
      <?php print render($page['above_content']) ?>
    </div>
    <div <?php if (!$fullwidth): ?> class="container-fluid" <?php endif; ?>>
      <div class="row">
        <?php print $messages; ?>
        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
        <?php endif; ?>
        <?php if ($page['sidebar']): ?>
          <div class="col-sm-9">
            <?php if ($page['content']): ?>
              <?php print render($page['content']) ?>
            <?php endif; ?>
          </div>
          <div class="col-sm-9">
            <?php if ($page['sidebar']): ?>
              <?php print render($page['sidebar']) ?>
            <?php endif; ?>
          </div>
        <?php else: ?>
          <div class="col-sm-12">
            <div class="row">
            <?php if ($page['content']): ?>
              <?php print render($page['content']) ?>
            <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="row">

        <div
          class="col-md-4 col-sm-4 ft-right pull-right rright visible-sm-block visible-md-block visible-lg-block">
          <?php if ($page['footer_right']): ?>
            <?php print render($page['footer_right']) ?>
          <?php endif; ?>
        </div>

        <div class="col-md-4 col-sm-4 pull-right ft-center rright">
          <a href="<?php print $front_page; ?>" rel="home">
            <img src="<?php print url(path_to_theme(), array('absolute' => TRUE, 'language' => $language_en)); ?>/images/footer_logo.png" class="img-responsive img-logo">
          </a>
        </div>

        <div class="col-sm-4 visible-xs-block">
          <?php if ($page['footer_right']): ?>
            <?php print render($page['footer_right']) ?>
          <?php endif; ?>
        </div>

        <div class="col-md-4 ft-left col-sm-4">
          <?php if ($page['footer_left']): ?>
            <?php print render($page['footer_left']) ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </footer>
  <div class="subfooter">
    <div class="container">
      <div class="col-sm-6 text-left">Copyright 2016 © - All rights reserved
      </div>
      <div class="col-sm-6 text-right">Built with love by <a
          href="http://trellon.com/" target="_blank">Trellon</a></div>
    </div>
  </div>
</div>
