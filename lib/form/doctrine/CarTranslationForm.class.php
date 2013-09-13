<?php

/**
 * carTranslation form.
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CarTranslationForm extends BaseCarTranslationForm {

    public function configure() {
        $this->widgetSchema["title"] = new sfWidgetFormInputText(array("label" => "tytuł"));
        $this->widgetSchema["description"] = new sfWidgetFormTextarea(array("label" => "opis"));
        $this->widgetSchema["fuel"] = new sfWidgetFormInputText(array("label" => "rodzaj paliwa"));
        $this->widgetSchema["engine"] = new sfWidgetFormInputText(array("label" => "silnik"));
        $this->widgetSchema["color"] = new sfWidgetFormInputText(array("label" => "kolor"));
        $this->widgetSchema["country"] = new sfWidgetFormInputText(array("label" => "kraj rejestracji"));
        $this->widgetSchema["price"] = new sfWidgetFormInputText(array("label" => "cena"));
        
        $this->setValidator("title", new sfValidatorString(array("required" => true)));
        
        $this->disableCSRFProtection();
        $this->disableLocalCSRFProtection();

        $custom_decorator = new sfWidgetFormSchemaFormatterBootstrapHorizontal($this->getWidgetSchema());
        $this->getWidgetSchema()->addFormFormatter('BootstrapHorizontal', $custom_decorator);
        $this->getWidgetSchema()->setFormFormatterName('BootstrapHorizontal');
    }

}
