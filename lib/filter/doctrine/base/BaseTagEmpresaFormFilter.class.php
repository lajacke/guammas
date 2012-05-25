<?php

/**
 * TagEmpresa filter form base class.
 *
 * @package    guammas
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTagEmpresaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tag_id'     => new sfWidgetFormFilterInput(),
      'empresa_id' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tag_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'empresa_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tag_empresa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TagEmpresa';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'tag_id'     => 'Number',
      'empresa_id' => 'Number',
    );
  }
}
