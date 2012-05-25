<?php

/**
 * UsuarioRedSocial form base class.
 *
 * @method UsuarioRedSocial getObject() Returns the current form's model object
 *
 * @package    guammas
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioRedSocialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'red_social' => new sfWidgetFormInputText(),
      'perfil'     => new sfWidgetFormInputText(),
      'usuario_id' => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormInputText(),
      'updated_at' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'red_social' => new sfValidatorString(array('max_length' => 30)),
      'perfil'     => new sfValidatorString(array('max_length' => 255)),
      'usuario_id' => new sfValidatorInteger(array('required' => false)),
      'created_at' => new sfValidatorInteger(),
      'updated_at' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('usuario_red_social[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsuarioRedSocial';
  }

}
