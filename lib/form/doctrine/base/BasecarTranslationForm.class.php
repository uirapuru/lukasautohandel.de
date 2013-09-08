<?php

/**
 * carTranslation form base class.
 *
 * @method carTranslation getObject() Returns the current form's model object
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasecarTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'title'       => new sfWidgetFormTextarea(),
      'description' => new sfWidgetFormInputText(),
      'fuel'        => new sfWidgetFormTextarea(),
      'engine'      => new sfWidgetFormTextarea(),
      'color'       => new sfWidgetFormTextarea(),
      'country'     => new sfWidgetFormTextarea(),
      'price'       => new sfWidgetFormTextarea(),
      'lang'        => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 1024, 'required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'fuel'        => new sfValidatorString(array('max_length' => 1024, 'required' => false)),
      'engine'      => new sfValidatorString(array('max_length' => 1024, 'required' => false)),
      'color'       => new sfValidatorString(array('max_length' => 1024, 'required' => false)),
      'country'     => new sfValidatorString(array('max_length' => 1024, 'required' => false)),
      'price'       => new sfValidatorString(array('max_length' => 1024, 'required' => false)),
      'lang'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('car_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'carTranslation';
  }

}
