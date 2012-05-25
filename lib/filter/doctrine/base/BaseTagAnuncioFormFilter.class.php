<?php

/**
 * TagAnuncio filter form base class.
 *
 * @package    guammas
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTagAnuncioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tag_id'     => new sfWidgetFormFilterInput(),
      'anuncio_id' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tag_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'anuncio_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tag_anuncio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TagAnuncio';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'tag_id'     => 'Number',
      'anuncio_id' => 'Number',
    );
  }
}
