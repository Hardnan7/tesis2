<?php

/**
 * Usuario filter form base class.
 *
 * @package    tesis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rut'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombres'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apellidos' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_nac' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'direccion' => new sfWidgetFormFilterInput(),
      'ciudad'    => new sfWidgetFormFilterInput(),
      'telefono'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'rut'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombres'   => new sfValidatorPass(array('required' => false)),
      'apellidos' => new sfValidatorPass(array('required' => false)),
      'email'     => new sfValidatorPass(array('required' => false)),
      'fecha_nac' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'direccion' => new sfValidatorPass(array('required' => false)),
      'ciudad'    => new sfValidatorPass(array('required' => false)),
      'telefono'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'rut'       => 'Number',
      'nombres'   => 'Text',
      'apellidos' => 'Text',
      'email'     => 'Text',
      'fecha_nac' => 'Date',
      'direccion' => 'Text',
      'ciudad'    => 'Text',
      'telefono'  => 'Number',
    );
  }
}