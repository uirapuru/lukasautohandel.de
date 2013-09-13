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
//        unset($this['model_id']);
//        unset($this['variant_id']);
        unset($this['created_at']);
        unset($this['updated_at']);
        unset($this['slug']);

//        $this->embedRelation("Variant");
//        $this->embedRelation("Model");

        $this->embedI18n(array("język polski" => "pl", "en", "de"));

        $this->widgetSchema["variant"] = new sfWidgetFormInputText(array("label" => "typ nadwozia"));
        $this->widgetSchema["model"] = new sfWidgetFormInputText(array("label" => "model"));
        $this->widgetSchema["brand"] = new sfWidgetFormInputText(array("label" => "marka"));
        
        $this->widgetSchema["year"] = new sfWidgetFormInputText(array("label" => "rocznik"));
        $this->widgetSchema["distance"] = new sfWidgetFormInputText(array("label" => "przejechany dystans"));
        
        $this->setValidator("new", new sfValidatorPass());
        
        $this->embedRelation("Fotos");

        $this->disableCSRFProtection();
        $this->disableLocalCSRFProtection();

        $custom_decorator = new sfWidgetFormSchemaFormatterBootstrapHorizontal($this->getWidgetSchema());
        $this->getWidgetSchema()->addFormFormatter('BootstrapHorizontal', $custom_decorator);
        $this->getWidgetSchema()->setFormFormatterName('BootstrapHorizontal');
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

    public function bind(array $taintedValues = null, array $taintedFiles = null) {

        $newFotos = new BaseForm();
        
        if (array_key_exists("new", $taintedFiles))
        {
            foreach ($taintedFiles['new'] as $key => $newFoto) {
                $foto = new Foto();
                $foto->setCar($this->getObject());
                $fotoForm = new FotoForm($foto);

                $newFotos->embedForm($key, $fotoForm);
            }
        }

        $this->embedForm('new', $newFotos);

        parent::bind($taintedValues, $taintedFiles);
    }

    public function processValues__($values) {
        $car = $this->getObject();

        $modelQuery = ModelTable::getInstance()->createQuery("m")
                ->andWhere("m.name = ?", $values["Model"]["name"])
                ->andWhere("m.brand = ?", $values["Model"]["brand"]);

        if ($modelQuery->count() !== 0)
        {
            $model = $modelQuery->fetchOne();
//            $car->setModel($model);
        }

        parent::processValues($values);
    }

}
