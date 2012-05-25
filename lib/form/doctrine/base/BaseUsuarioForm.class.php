<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    guammas
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'nombre_usuario'       => new sfWidgetFormInputText(),
      'contrasena'           => new sfWidgetFormInputText(),
      'correo_electronico'   => new sfWidgetFormInputText(),
      'nombre'               => new sfWidgetFormInputText(),
      'apellido'             => new sfWidgetFormInputText(),
      'actividad'            => new sfWidgetFormInputText(),
      'ultimo_inicio_sesion' => new sfWidgetFormDate(),
      'activo'               => new sfWidgetFormInputText(),
      'rol_id'               => new sfWidgetFormInputText(),
      'ciudad_id'            => new sfWidgetFormInputText(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre_usuario'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'contrasena'           => new sfValidatorString(array('max_length' => 48, 'required' => false)),
      'correo_electronico'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'nombre'               => new sfValidatorString(array('max_length' => 50)),
      'apellido'             => new sfValidatorString(array('max_length' => 50)),
      'actividad'            => new sfValidatorInteger(),
      'ultimo_inicio_sesion' => new sfValidatorDate(),
      'activo'               => new sfValidatorInteger(),
      'rol_id'               => new sfValidatorInteger(array('required' => false)),
      'ciudad_id'            => new sfValidatorInteger(array('required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}
