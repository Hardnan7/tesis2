<?php

/**
 * administrarEquipos module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage administrarEquipos
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAdministrarEquiposGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%origen%% - %%marca%% - %%peso%% - %%estado%% - %%detalle%% - %%usuario_id%% - %%categoria_id%% - %%empleado_id%% - %%venta_equipo_id%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'AdministrarEquipos List';
  }

  public function getEditTitle()
  {
    return 'Edit AdministrarEquipos';
  }

  public function getNewTitle()
  {
    return 'New AdministrarEquipos';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'origen',  2 => 'marca',  3 => 'peso',  4 => 'estado',  5 => 'detalle',  6 => 'usuario_id',  7 => 'categoria_id',  8 => 'empleado_id',  9 => 'venta_equipo_id',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'origen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'marca' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'peso' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'estado' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'detalle' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'usuario_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'categoria_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'empleado_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'venta_equipo_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'origen' => array(),
      'marca' => array(),
      'peso' => array(),
      'estado' => array(),
      'detalle' => array(),
      'usuario_id' => array(),
      'categoria_id' => array(),
      'empleado_id' => array(),
      'venta_equipo_id' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'origen' => array(),
      'marca' => array(),
      'peso' => array(),
      'estado' => array(),
      'detalle' => array(),
      'usuario_id' => array(),
      'categoria_id' => array(),
      'empleado_id' => array(),
      'venta_equipo_id' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'origen' => array(),
      'marca' => array(),
      'peso' => array(),
      'estado' => array(),
      'detalle' => array(),
      'usuario_id' => array(),
      'categoria_id' => array(),
      'empleado_id' => array(),
      'venta_equipo_id' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'origen' => array(),
      'marca' => array(),
      'peso' => array(),
      'estado' => array(),
      'detalle' => array(),
      'usuario_id' => array(),
      'categoria_id' => array(),
      'empleado_id' => array(),
      'venta_equipo_id' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'origen' => array(),
      'marca' => array(),
      'peso' => array(),
      'estado' => array(),
      'detalle' => array(),
      'usuario_id' => array(),
      'categoria_id' => array(),
      'empleado_id' => array(),
      'venta_equipo_id' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'equipoForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'equipoFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
