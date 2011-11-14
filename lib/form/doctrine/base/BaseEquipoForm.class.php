<?php

/**
 * Equipo form base class.
 *
 * @method Equipo getObject() Returns the current form's model object
 *
 * @package    tesis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEquipoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'origen'          => new sfWidgetFormInputText(),
      'marca'           => new sfWidgetFormInputText(),
      'peso'            => new sfWidgetFormInputText(),
      'estado'          => new sfWidgetFormInputCheckbox(),
      'detalle'         => new sfWidgetFormInputText(),
      'usuario_id'      => new sfWidgetFormInputText(),
      'categoria_id'    => new sfWidgetFormInputText(),
      'empleado_id'     => new sfWidgetFormInputText(),
      'venta_equipo_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('VentaEquipo'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'origen'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'marca'           => new sfValidatorString(array('max_length' => 45)),
      'peso'            => new sfValidatorInteger(array('required' => false)),
      'estado'          => new sfValidatorBoolean(),
      'detalle'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'usuario_id'      => new sfValidatorInteger(array('required' => false)),
      'categoria_id'    => new sfValidatorInteger(array('required' => false)),
      'empleado_id'     => new sfValidatorInteger(array('required' => false)),
      'venta_equipo_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('VentaEquipo'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('equipo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Equipo';
  }

}
