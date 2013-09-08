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
        unset($this->widgetSchema["id"]);
        unset($this->widgetSchema["created_at"]);
        unset($this->widgetSchema["updated_at"]);
        
        $this->disableCSRFProtection();
        
    }

}
