<?php

/**
 * AnuncioEvento form base class.
 *
 * @method AnuncioEvento getObject() Returns the current form's model object
 *
 * @package    guammas
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAnuncioEventoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'coordenada_x' => new sfWidgetFormInputText(),
      'coordenada_y' => new sfWidgetFormInputText(),
      'fecha_inicio' => new sfWidgetFormDateTime(),
      'fecha_fin'    => new sfWidgetFormDateTime(),
      'anuncio_id'   => new sfWidgetFormInputText(),
      'ciudad_id'    => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'coordenada_x' => new sfValidatorInteger(),
      'coordenada_y' => new sfValidatorInteger(),
      'fecha_inicio' => new sfValidatorDateTime(),
      'fecha_fin'    => new sfValidatorDateTime(),
      'anuncio_id'   => new sfValidatorInteger(array('required' => false)),
      'ciudad_id'    => new sfValidatorInteger(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('anuncio_evento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AnuncioEvento';
  }

}
