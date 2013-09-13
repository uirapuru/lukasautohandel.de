<?php

/**
 * Foto form.
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FotoForm extends BaseFotoForm {

    public function configure() {
        unset($this['car_id']);
        unset($this['created_at']);
        unset($this['updated_at']);

        $this->widgetSchema["filename"] = new sfWidgetFormInputFileEditable(array(
            "edit_mode"   => $this->getObject()->isNew() ? false : true,
            "file_src"    => $this->getObject()->getFileName(),
            "is_image"    => true,
            "with_delete" => true,
            "template"    => ($this->getObject()->isNew() ? '' : '<div class="container-fluid"><div class="row-fluid"><a class="thumbnail span4" href="/uploads/' . $this->getObject()->getFilename() . '"><img src="/uploads/' . $this->getObject()->getFilename() . '" /></a></div></div>') . '<div class="container-fluid"><div class="row-fluid">%input%</div></div> <div style="display: none33">%delete%</div>',
        ));

        $this->widgetSchema["primary"] = new sfWidgetFormInputCheckbox();

        $this->validatorSchema["filename"] = new sfValidatorFile(array(
            "required" => false,
            "max_size" => "2000000",
            "path"     => sfConfig::get("sf_upload_dir"),
        ));
        $this->validatorSchema["filename_delete"] = new sfValidatorPass();
        $this->validatorSchema["primary"] = new sfValidatorPass();

        $this->disableCSRFProtection();
        $this->disableLocalCSRFProtection();

        $custom_decorator = new sfWidgetFormSchemaFormatterBootstrapHorizontal($this->getWidgetSchema());
        $this->getWidgetSchema()->addFormFormatter('BootstrapHorizontal', $custom_decorator);
        $this->getWidgetSchema()->setFormFormatterName('BootstrapHorizontal');
    }

}
