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

        $brands = array(null => $this->labels[$culture]["all_brands"]) + CarTable::getInstance()->getBrandsArray();
        $models = array(null => $this->labels[$culture]["all_models"]) + CarTable::getInstance()->getModelsArray();
        $variants = array(null => $this->labels[$culture]["all_types"]) + CarTable::getInstance()->getVariantsArray();

        $this->setWidgets(array(
            'variant' => new sfWidgetFormSelect(
                    array(
                "choices" => $variants
                    )
            ),
            'brand'   => new sfWidgetFormSelect(
                    array(
                "choices" => $brands
                    )
            ),
            'model'   => new sfWidgetFormChoice(
                    array(
                "choices" => $models,
                    )
            ),
        ));

        $this->setValidators(array(
            'brand'   => new sfValidatorPass(array('required' => false)),
            'model'   => new sfValidatorPass(array('required' => false)),
            'variant' => new sfValidatorPass(array('required' => false)),
        ));

        $this->widgetSchema->setNameFormat('car_filters[%s]');

        $this->disableCSRFProtection();
    }

    public function addBrandColumnQuery(Doctrine_Query $query, $field, $value) {
        CarTable::getInstance()->addBrand($query, $value);
        return $query;
    }

    public function addModelColumnQuery(Doctrine_Query $query, $field, $value) {
        CarTable::getInstance()->addModel($query, $value);
        return $query;
    }

    public function addVariantColumnQuery(Doctrine_Query $query, $field, $value) {
        CarTable::getInstance()->addVariant($query, $value);
        return $query;
    }

}
