<td colspan="9">
  <?php echo __('%%id%% - %%marca%% - %%estado%% - %%detalle%% - %%usuario_id%% - %%categoria_id%% - %%empleado_id%% - %%container_id%% - %%venta_pieza_id%%', array('%%id%%' => link_to($pieza->getId(), 'pieza_edit', $pieza), '%%marca%%' => $pieza->getMarca(), '%%estado%%' => get_partial('AdministrarPiezas/list_field_boolean', array('value' => $pieza->getEstado())), '%%detalle%%' => $pieza->getDetalle(), '%%usuario_id%%' => $pieza->getUsuarioId(), '%%categoria_id%%' => $pieza->getCategoriaId(), '%%empleado_id%%' => $pieza->getEmpleadoId(), '%%container_id%%' => $pieza->getContainerId(), '%%venta_pieza_id%%' => $pieza->getVentaPiezaId()), 'messages') ?>
</td>