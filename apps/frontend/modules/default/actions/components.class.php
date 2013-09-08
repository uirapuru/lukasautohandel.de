<?php

class defaultComponents extends sfComponents {

    public function executeMenuHorizontal() {
        
    }

    public function executeSearchBox() {
        $this->filterForm = new CarFormFilter();
        
        $filterValues = $this->getUser()->getAttribute("filterValues",array());
        
        $this->filterForm->bind($filterValues);
    }

    public function executeSlider() {
        $this->cars = CarTable::getInstance()->getSliderCars();
    }
}