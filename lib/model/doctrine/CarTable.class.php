<?php

/**
 * carTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CarTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object carTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('Car');
    }

    public static function getCarsQuery() {
        $query = self::getInstance()->createQuery("c");

        return $query;
    }

    public static function addSortOrder(Doctrine_Query $query, $column) {
        $query->orderBy($column);
        return $query;
    }

    public static function addBrand(Doctrine_Query $query, $brand) {
        $query->addWhere("c.brand = ?",$brand);
        return $query;
    }

    public static function addModel(Doctrine_Query $query, $model) {
        $query->addWhere("c.model = ?",$model);
        return $query;
    }
    public static function addVariant(Doctrine_Query $query, $variant) {
        $query->addWhere("c.variant = ?",$variant);
        return $query;
    }
    public static function addSlider(Doctrine_Query $query) {
        $query->addWhere("c.slider = true");
        return $query;
    }
    public static function addPromoted(Doctrine_Query $query) {
        $query->addWhere("c.promoted = true");
        return $query;
    }
    
    public function getSliderCars()
    {
        $query = $this->getCarsQuery();
        self::addSortOrder($query, "created_at DESC");
        self::addSlider($query);
        return $query->execute();
    }
    
    public function getPromotedCars()
    {
        $query = $this->getCarsQuery();
        self::addSortOrder($query, "created_at DESC");
        self::addPromoted($query);
        return $query->execute();
    }
    
    public function getPromotedCarsQuery()
    {
        $query = $this->getCarsQuery();
        self::addSortOrder($query, "created_at DESC");
        self::addPromoted($query);
        return $query;
    }
    
    public function getBrandsArray()
    {
        $query = $this->getCarsQuery("c")
                ->select('distinct(c.brand) as brand');
        
        $brands = array();
        
        foreach($query->execute() as $record)
        {
            $brands[$record->getBrand()] = $record->getBrand();
        }
        
        return $brands;
    }
    
    public function getModelsArray($brand = null)
    {
        $query = $this->getCarsQuery("c")
                ->select('distinct(c.model) as model');
        
        if($brand != null)
        {
            $query->addWhere("c.brand = ?",$brand);
        }
        
        $models = array();
        
        foreach($query->execute() as $record)
        {
            $models[$record->getModel()] = $record->getModel();
        }
        
        return $models;
    }
    
    public function getVariantsArray()
    {
        $query = $this->getCarsQuery("c")
                ->select('distinct(c.variant) as variant');
        
        $variants = array();
        
        foreach($query->execute() as $record)
        {
            $variants[$record->getVariant()] = $record->getVariant();
        }
        
        return $variants;
    }

}