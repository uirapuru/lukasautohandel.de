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

    public static $subjects = array(
        "pl" => array(
            0 => "Wybierz jeden z tematów",
            1 => "Management & Remixy",
            2 => "Booking",
            3 => "Pytanie do Webmastera",
            4 => "Inne",
        ),
        "en" => array(
            0 => "Choose subject",
            1 => "Management & Remixes",
            2 => "Booking",
            3 => "Ask webmaster",
            4 => "Various",
        ),
    );

    public function setup() {
        $culture = $this->getOption("culture");


        $this->setWidgets(array(
            "name" => new sfWidgetFormInput(),
            "email" => new sfWidgetFormInput(),
            "subject" => new sfWidgetFormSelect(array("choices" => self::$subjects[$culture])),
            "body" => new sfWidgetFormTextarea(),
        ));

        $this->getWidgetSchema()->setLabels(array(
            "name" => "Imię i nazwisko",
            "email" => "Adres e-mail",
            "body" => "Treść",
            "subject" => "Temat",
        ));

        $this->setValidators(array(
            "name" => new sfValidatorString(array(), array('required' => "Musisz podać imię i nazwisko")),
            "email" => new sfValidatorEmail(array(), array('required' => "Musisz podać email", 'invalid' => "Adres email niepoprawny!")),
            "body" => new sfValidatorString(array(), array('required' => "Musisz podać treść wiadomości")),
            "subject" => new sfValidatorChoice(array("choices" => array(0, 1, 2, 3, 4))),
        ));

        $this->widgetSchema->setNameFormat('contact[%s]');
    }

}
