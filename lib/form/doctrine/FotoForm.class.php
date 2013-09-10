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
            "with_delete" => false,
            "template"    => ($this->getObject()->isNew() ? '' : '<a href="/uploads/' . $this->getObject()->getFilename() . '">Preview file</a><br />') . '%input%',
        ));

        $this->validatorSchema["filename"] = new sfValidatorFile(array(
            "required" => false,
            "max_size" => "2000000",
            "path"     => sfConfig::get("sf_upload_dir"),
        ));
    }

    public function addNewFields($number) {
        $newFotos = new BaseForm();

        for ($i = 0; $i <= $number; $i+=1) {
            $fotos = new Foto();
            $fotos->setCar($this->getObject());
            $fotoForm = new FotoForm($fotos);

            $newFotos->embedForm($i, $fotoForm);
        }

        $this->embedForm('new', $newFotos);
    }

}
