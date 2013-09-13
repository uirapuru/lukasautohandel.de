<?php

/**
 * Car filter form base class.
 *
 * @package    ThomasCloud
 * @subpackage filter
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCarFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'model'        => new sfWidgetFormFilterInput(),
      'brand'        => new sfWidgetFormFilterInput(),
      'variant'      => new sfWidgetFormFilterInput(),
      'year'         => new sfWidgetFormFilterInput(),
      'distance'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'transmission' => new sfWidgetFormChoice(array('choices' => array('' => '', 'manual' => 'manual', 'automatic' => 'automatic', 'semi-auto' => 'semi-auto'))),
      'promoted'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'slider'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'model'        => new sfValidatorPass(array('required' => false)),
      'brand'        => new sfValidatorPass(array('required' => false)),
      'variant'      => new sfValidatorPass(array('required' => false)),
      'year'         => new sfValidatorPass(array('required' => false)),
      'distance'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'transmission' => new sfValidatorChoice(array('required' => false, 'choices' => array('manual' => 'manual', 'automatic' => 'automatic', 'semi-auto' => 'semi-auto'))),
      'promoted'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'slider'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('car_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Car';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'model'        => 'Text',
      'brand'        => 'Text',
      'variant'      => 'Text',
      'year'         => 'Text',
      'distance'     => 'Number',
      'transmission' => 'Enum',
      'promoted'     => 'Boolean',
      'slider'       => 'Boolean',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
      'slug'         => 'Text',
    );
  }
}
