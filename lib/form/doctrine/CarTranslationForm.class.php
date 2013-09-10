<?php

/**
 * carTranslation form.
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CarTranslationForm extends BaseCarTranslationForm
{
  public function configure()
  {
      $this->widgetSchema["title"] = new sfWidgetFormInputText();
      $this->widgetSchema["description"] = new sfWidgetFormTextarea();
      $this->widgetSchema["fuel"] = new sfWidgetFormInputText();
      $this->widgetSchema["engine"] = new sfWidgetFormInputText();
      $this->widgetSchema["color"] = new sfWidgetFormInputText();
      $this->widgetSchema["country"] = new sfWidgetFormInputText();
      $this->widgetSchema["price"] = new sfWidgetFormInputText();
  }
}
