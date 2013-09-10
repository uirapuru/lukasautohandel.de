<?php

/**
 * car form.
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CarForm extends BaseCarForm {

    public function configure() {
        unset($this['model_id']);
        unset($this['variant_id']);
        unset($this['created_at']);
        unset($this['updated_at']);
        unset($this['slug']);

        $this->embedRelation("Variant");
        $this->embedRelation("Model");

        $this->embedI18n(array("pl", "en", "de"));

        $this->widgetSchema["year"] = new sfWidgetFormInputText();

        $this->disableCSRFProtection();
        $this->embedRelation("Fotos");
    }


}
