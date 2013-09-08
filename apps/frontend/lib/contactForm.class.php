<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contactForm
 *
 * @author Uirapuru
 */
class contactForm extends sfForm {

    public function setup() {
        $this->setWidgets(array(
            "name" => new sfWidgetFormInput(array(),array("placeholder"=>"your name")),
            "car" => new sfWidgetFormInput(),
            "email" => new sfWidgetFormInput(array(),array("placeholder"=>"email")),
            "phone" => new sfWidgetFormInput(array(),array("placeholder"=>"phone")),
            "body" => new sfWidgetFormTextarea(array(),array("placeholder"=>"message body")),
        ));

        $this->setValidators(array(
            "name" => new sfValidatorString(array("required" => true)),
            "car" => new sfValidatorPass(),
            "email" => new sfValidatorEmail(array("required" => true)),
            "phone" => new sfValidatorString(array("required" => false)),
            "body" => new sfValidatorString(array("required" => true)),
        ));

        $this->widgetSchema->setNameFormat('contact[%s]');
    }

}
