<?php

/**
 * AnuncioCupon form base class.
 *
 * @method AnuncioCupon getObject() Returns the current form's model object
 *
 * @package    guammas
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAnuncioCuponForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'cantidad'              => new sfWidgetFormInputText(),
      'cantidad_restante'     => new sfWidgetFormInputText(),
      'cantidad_persona'      => new sfWidgetFormInputText(),
      'fecha_inicio'          => new sfWidgetFormDate(),
      'fecha_fin'             => new sfWidgetFormDate(),
      'fecha_disfrute_inicio' => new sfWidgetFormDateTime(),
      'fecha_disfrute_fin'    => new sfWidgetFormDateTime(),
      'anuncio_id'            => new sfWidgetFormInputText(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'cantidad'              => new sfValidatorInteger(),
      'cantidad_restante'     => new sfValidatorInteger(),
      'cantidad_persona'      => new sfValidatorInteger(),
      'fecha_inicio'          => new sfValidatorDate(),
      'fecha_fin'             => new sfValidatorDate(),
      'fecha_disfrute_inicio' => new sfValidatorDateTime(),
      'fecha_disfrute_fin'    => new sfValidatorDateTime(),
      'anuncio_id'            => new sfValidatorInteger(array('required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('anuncio_cupon[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AnuncioCupon';
  }

}
