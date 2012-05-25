<?php

/**
 * UsuarioRedSocial filter form base class.
 *
 * @package    guammas
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioRedSocialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'red_social' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'perfil'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario_id' => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'red_social' => new sfValidatorPass(array('required' => false)),
      'perfil'     => new sfValidatorPass(array('required' => false)),
      'usuario_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_at' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('usuario_red_social_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsuarioRedSocial';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'red_social' => 'Text',
      'perfil'     => 'Text',
      'usuario_id' => 'Number',
      'created_at' => 'Number',
      'updated_at' => 'Number',
    );
  }
}
