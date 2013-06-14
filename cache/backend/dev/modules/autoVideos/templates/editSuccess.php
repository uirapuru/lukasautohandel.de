<?php use_helper('I18N', 'Date') ?>
<?php include_partial('videos/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Videos', array(), 'messages') ?></h1>

  <?php include_partial('videos/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('videos/form_header', array('video' => $video, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('videos/form', array('video' => $video, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('videos/form_footer', array('video' => $video, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
