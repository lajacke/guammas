<?php

/**
 * Usuario filter form base class.
 *
 * @package    guammas
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_usuario'       => new sfWidgetFormFilterInput(),
      'contrasena'           => new sfWidgetFormFilterInput(),
      'correo_electronico'   => new sfWidgetFormFilterInput(),
      'nombre'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apellido'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'actividad'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ultimo_inicio_sesion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'activo'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rol_id'               => new sfWidgetFormFilterInput(),
      'ciudad_id'            => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre_usuario'       => new sfValidatorPass(array('required' => false)),
      'contrasena'           => new sfValidatorPass(array('required' => false)),
      'correo_electronico'   => new sfValidatorPass(array('required' => false)),
      'nombre'               => new sfValidatorPass(array('required' => false)),
      'apellido'             => new sfValidatorPass(array('required' => false)),
      'actividad'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ultimo_inicio_sesion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'activo'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rol_id'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ciudad_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'id'                   => 'Number',
      'nombre_usuario'       => 'Text',
      'contrasena'           => 'Text',
      'correo_electronico'   => 'Text',
      'nombre'               => 'Text',
      'apellido'             => 'Text',
      'actividad'            => 'Number',
      'ultimo_inicio_sesion' => 'Date',
      'activo'               => 'Number',
      'rol_id'               => 'Number',
      'ciudad_id'            => 'Number',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
    );
  }
}
