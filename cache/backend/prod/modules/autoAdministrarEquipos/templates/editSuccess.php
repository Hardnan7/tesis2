<?php use_helper('I18N', 'Date') ?>
<?php include_partial('administrarEquipos/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit AdministrarEquipos', array(), 'messages') ?></h1>

  <?php include_partial('administrarEquipos/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('administrarEquipos/form_header', array('equipo' => $equipo, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('administrarEquipos/form', array('equipo' => $equipo, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('administrarEquipos/form_footer', array('equipo' => $equipo, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
