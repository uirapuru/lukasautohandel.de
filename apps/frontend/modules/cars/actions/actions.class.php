<?php

require_once dirname(__FILE__) . '/../lib/carsGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/carsGeneratorHelper.class.php';

/**
 * cars actions.
 *
 * @package    ThomasCloud
 * @subpackage cars
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class carsActions extends autoCarsActions {

    public function executeAddNewCar(sfWebRequest $request) {
        $car = new Car();
        $this->form = new CarForm($car);

        $this->form->addNewFields(0);

        $this->setTemplate('edit');
    }

    public function executeAddNewFoto(sfWebRequest $request) {
//        $this->forward404unless($request->isXmlHttpRequest());
        $number = intval($request->getParameter("num"));

        $this->form = new CarForm();

        $this->form->addNewFields($number);

        return $this->renderPartial('addNewFoto', array('form' => $this->form, 'number' => $number, "isNew" => true));
    }

    public function executeUpdateCheckbox(sfWebRequest $request) {
        $car = $this->getRoute()->getObject();

        if (!$request->isXmlHttpRequest())
        {
            $this->redirect404();
        }

        $field = $request->getParameter("checkbox", null);
        $value = $request->getParameter("checked", null);

        if ($field == "slider")
        {
            $car->setSlider((bool) $value);
        }
        if ($field == "promoted")
        {
            $car->setPromoted((bool) $value);
        }

        $car->save();

        $this->getResponse()->setContentType("application/json");
        return $this->renderText(json_encode(array(
                    "message" => "ok",
                    "car"     => $car->getData()
        )));
    }

    public function executeDeleteFoto(sfWebRequest $request) {
        $foto = $this->getRoute()->getObject();

        if (!$request->isXmlHttpRequest())
        {
            $this->redirect404();
        }
        
        $foto->delete();

        $this->getResponse()->setContentType("application/json");
        return $this->renderText(json_encode(array(
                    "message" => "ok",
                    "foto"     => $foto->getData()
        )));
    }

    public function executeEdit(sfWebRequest $request) {
        $car = $this->getRoute()->getObject();
        $this->form = new CarForm($car);
    }

    public function executeSubmit(sfWebRequest $request) {
        $car = new Car();

        if ($this->getRoute() instanceof sfDoctrineRoute)
        {
            $car = $this->getRoute()->getObject();
        }

        $this->form = new CarForm($car);

        $taintedValues = $request->getParameter($this->form->getName());
        $taintedFiles = $request->getFiles($this->form->getName());

        if ($request->isMethod('post') && $this->form->bindAndSave($taintedValues, $taintedFiles))
        {
            $this->redirect('/cars');
        }

        $this->setTemplate('edit');
    }

}
