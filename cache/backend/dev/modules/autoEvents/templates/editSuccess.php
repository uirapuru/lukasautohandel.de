<?php use_helper('I18N', 'Date') ?>
<?php include_partial('events/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Events', array(), 'messages') ?></h1>

  <?php include_partial('events/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('events/form_header', array('event' => $event, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('events/form', array('event' => $event, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('events/form_footer', array('event' => $event, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
