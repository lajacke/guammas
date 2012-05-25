<?php

/**
 * Institucion form base class.
 *
 * @method Institucion getObject() Returns the current form's model object
 *
 * @package    guammas
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseInstitucionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'nombre'       => new sfWidgetFormInputText(),
      'coordenada_x' => new sfWidgetFormInputText(),
      'coordenada_y' => new sfWidgetFormInputText(),
      'telefono_1'   => new sfWidgetFormInputText(),
      'telefono_2'   => new sfWidgetFormInputText(),
      'imagen'       => new sfWidgetFormInputText(),
      'tipo'         => new sfWidgetFormInputText(),
      'ciudad_id'    => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'       => new sfValidatorString(array('max_length' => 255)),
      'coordenada_x' => new sfValidatorString(array('max_length' => 30)),
      'coordenada_y' => new sfValidatorString(array('max_length' => 30)),
      'telefono_1'   => new sfValidatorString(array('max_length' => 12)),
      'telefono_2'   => new sfValidatorString(array('max_length' => 12)),
      'imagen'       => new sfValidatorString(array('max_length' => 255)),
      'tipo'         => new sfValidatorInteger(),
      'ciudad_id'    => new sfValidatorInteger(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('institucion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Institucion';
  }

}
