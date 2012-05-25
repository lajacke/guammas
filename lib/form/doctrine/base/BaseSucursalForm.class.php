<?php

/**
 * Sucursal form base class.
 *
 * @method Sucursal getObject() Returns the current form's model object
 *
 * @package    guammas
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSucursalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'rif'               => new sfWidgetFormInputText(),
      'principal'         => new sfWidgetFormInputText(),
      'coordenada_x'      => new sfWidgetFormInputText(),
      'coordenada_y'      => new sfWidgetFormInputText(),
      'telefono_1'        => new sfWidgetFormInputText(),
      'telefono_2'        => new sfWidgetFormInputText(),
      'detalle_direccion' => new sfWidgetFormTextarea(),
      'verificada'        => new sfWidgetFormInputText(),
      'ciudad_id'         => new sfWidgetFormInputText(),
      'empresa_id'        => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'rif'               => new sfValidatorString(array('max_length' => 15)),
      'principal'         => new sfValidatorInteger(),
      'coordenada_x'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'coordenada_y'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'telefono_1'        => new sfValidatorString(array('max_length' => 12)),
      'telefono_2'        => new sfValidatorString(array('max_length' => 12)),
      'detalle_direccion' => new sfValidatorString(),
      'verificada'        => new sfValidatorInteger(),
      'ciudad_id'         => new sfValidatorInteger(array('required' => false)),
      'empresa_id'        => new sfValidatorInteger(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sucursal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sucursal';
  }

}
