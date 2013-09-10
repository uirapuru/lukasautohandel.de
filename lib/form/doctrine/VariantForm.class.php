<?php

/**
 * Variant form.
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VariantForm extends BaseVariantForm
{
  public function configure()
  {
      $this->widgetSchema["name"] = new sfWidgetFormInputText();
  }
}
