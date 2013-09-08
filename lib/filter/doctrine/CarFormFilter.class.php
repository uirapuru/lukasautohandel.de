<?php

/**
 * car filter form.
 *
 * @package    ThomasCloud
 * @subpackage filter
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CarFormFilter extends BaseCarFormFilter {

    protected $labels = array(
        "pl" => array(
            "all_brands" => "WSZYSTKIE MARKI",
            "all_models" => "WSZYSTKIE MODELE",
            "all_types"  => "WSZYSTKIE TYPY",
        ),
        "en" => array(
            "all_brands" => "ALL CAR BRANDS",
            "all_models" => "ALL CAR MODELS",
            "all_types"  => "ALL CAR TYPES",
        ),
        "de" => array(
            "all_brands" => "WSZYSTKIE MARKI",
            "all_models" => "WSZYSTKIE MODELE",
            "all_types"  => "WSZYSTKIE TYPY",
        )
    );

    public function configure() {
        $culture = sfContext::getInstance()->getUser()->getCulture();
        
        $brands = array(null => $this->labels[$culture]["all_brands"]) + ModelTable::getInstance()->getBrandsArray();
        $models = array("null" => $this->labels[$culture]["all_models"]) + ModelTable::getInstance()->getModelsArray();

        $this->setWidgets(array(
            'variant_id' => new sfWidgetFormDoctrineChoice(
                    array(
                'model'     => $this->getRelatedModelName('Variant'),
                'add_empty' => $this->labels[$culture]["all_types"]
                    )
            ),
            'brand'      => new sfWidgetFormSelect(
                    array(
                "choices" => $brands
                    )
            ),
            'model_id'   => new sfWidgetFormChoice(
                    array(
                "choices" => $models,
                    )
            ),
        ));

        $this->setValidators(array(
            'brand'      => new sfValidatorPass(array('required' => false)),
            'model_id'   => new sfValidatorDoctrineChoice(array('required' => false,
                'model'    => $this->getRelatedModelName('Model'), 'column'   => 'id')),
            'variant_id' => new sfValidatorDoctrineChoice(array('required' => false,
                'model'    => $this->getRelatedModelName('Variant'), 'column'   => 'id')),
        ));

        $this->widgetSchema->setNameFormat('car_filters[%s]');

        $this->disableCSRFProtection();
    }

}
