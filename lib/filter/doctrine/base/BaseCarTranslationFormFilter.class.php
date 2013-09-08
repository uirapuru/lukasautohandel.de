<?php

/**
 * CarTranslation filter form base class.
 *
 * @package    ThomasCloud
 * @subpackage filter
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCarTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'       => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(),
      'fuel'        => new sfWidgetFormFilterInput(),
      'engine'      => new sfWidgetFormFilterInput(),
      'color'       => new sfWidgetFormFilterInput(),
      'country'     => new sfWidgetFormFilterInput(),
      'price'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'title'       => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'fuel'        => new sfValidatorPass(array('required' => false)),
      'engine'      => new sfValidatorPass(array('required' => false)),
      'color'       => new sfValidatorPass(array('required' => false)),
      'country'     => new sfValidatorPass(array('required' => false)),
      'price'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('car_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CarTranslation';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'title'       => 'Text',
      'description' => 'Text',
      'fuel'        => 'Text',
      'engine'      => 'Text',
      'color'       => 'Text',
      'country'     => 'Text',
      'price'       => 'Text',
      'lang'        => 'Text',
    );
  }
}
