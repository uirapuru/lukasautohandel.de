<?php

/**
 * NewsTranslation filter form base class.
 *
 * @package    ThomasCloud
 * @subpackage filter
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNewsTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'msgtitle' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'msgbody'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'msgtitle' => new sfValidatorPass(array('required' => false)),
      'msgbody'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('news_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NewsTranslation';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'msgtitle' => 'Text',
      'msgbody'  => 'Text',
      'lang'     => 'Text',
    );
  }
}
