<?php

/**
 * Car form base class.
 *
 * @method Car getObject() Returns the current form's model object
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCarForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'model_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Model'), 'add_empty' => true)),
      'variant_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Variant'), 'add_empty' => true)),
      'year'         => new sfWidgetFormTextarea(),
      'distance'     => new sfWidgetFormInputText(),
      'transmission' => new sfWidgetFormChoice(array('choices' => array('manual' => 'manual', 'automatic' => 'automatic', 'semi-auto' => 'semi-auto'))),
      'promoted'     => new sfWidgetFormInputCheckbox(),
      'slider'       => new sfWidgetFormInputCheckbox(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'slug'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'model_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Model'), 'required' => false)),
      'variant_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Variant'), 'required' => false)),
      'year'         => new sfValidatorString(array('max_length' => 1024, 'required' => false)),
      'distance'     => new sfValidatorInteger(),
      'transmission' => new sfValidatorChoice(array('choices' => array(0 => 'manual', 1 => 'automatic', 2 => 'semi-auto'), 'required' => false)),
      'promoted'     => new sfValidatorBoolean(array('required' => false)),
      'slider'       => new sfValidatorBoolean(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'slug'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Car', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('car[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Car';
  }

}
