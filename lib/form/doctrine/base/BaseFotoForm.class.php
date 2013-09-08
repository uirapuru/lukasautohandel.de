<?php

/**
 * Foto form base class.
 *
 * @method Foto getObject() Returns the current form's model object
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFotoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'filename'   => new sfWidgetFormTextarea(),
      'car_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Car'), 'add_empty' => true)),
      'is_primary' => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'filename'   => new sfValidatorString(array('max_length' => 1024, 'required' => false)),
      'car_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Car'), 'required' => false)),
      'is_primary' => new sfValidatorBoolean(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('foto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Foto';
  }

}
