<?php

/**
 * Event form base class.
 *
 * @method Event getObject() Returns the current form's model object
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'date_start' => new sfWidgetFormDateTime(),
      'date_end'   => new sfWidgetFormDateTime(),
      'country'    => new sfWidgetFormInputText(),
      'place'      => new sfWidgetFormInputText(),
      'location'   => new sfWidgetFormInputText(),
      'event'      => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'date_start' => new sfValidatorDateTime(),
      'date_end'   => new sfValidatorDateTime(),
      'country'    => new sfValidatorString(array('max_length' => 100)),
      'place'      => new sfValidatorString(array('max_length' => 100)),
      'location'   => new sfValidatorString(array('max_length' => 100)),
      'event'      => new sfValidatorString(array('max_length' => 200)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('event[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Event';
  }

}
