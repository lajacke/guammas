<?php

/**
 * Institucion filter form base class.
 *
 * @package    guammas
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseInstitucionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'coordenada_x' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'coordenada_y' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono_1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono_2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'imagen'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudad_id'    => new sfWidgetFormFilterInput(),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'       => new sfValidatorPass(array('required' => false)),
      'coordenada_x' => new sfValidatorPass(array('required' => false)),
      'coordenada_y' => new sfValidatorPass(array('required' => false)),
      'telefono_1'   => new sfValidatorPass(array('required' => false)),
      'telefono_2'   => new sfValidatorPass(array('required' => false)),
      'imagen'       => new sfValidatorPass(array('required' => false)),
      'tipo'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ciudad_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('institucion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Institucion';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'nombre'       => 'Text',
      'coordenada_x' => 'Text',
      'coordenada_y' => 'Text',
      'telefono_1'   => 'Text',
      'telefono_2'   => 'Text',
      'imagen'       => 'Text',
      'tipo'         => 'Number',
      'ciudad_id'    => 'Number',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
