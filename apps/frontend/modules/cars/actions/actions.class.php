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

    public function executeAddNewFoto(sfWebRequest $request) {
//        $this->forward404unless($request->isXmlHttpRequest());
        $number = intval($request->getParameter("num"));

        $this->form = new FotoForm();

        $this->form->addNewFields($number);

        return $this->renderPartial('addNewFoto', array('form' => $this->form, 'number' => $number));
    }
    
    public function executeEdit(sfWebRequest $request) {
        $this->form = new CarForm();
    }
    

}
