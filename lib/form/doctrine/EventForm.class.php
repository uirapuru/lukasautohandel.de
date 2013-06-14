<?php

/**
 * Event form.
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EventForm extends BaseEventForm {

    public function configure() {
        $this->setWidgets(array(
            'event' => new sfWidgetFormInputText(array(), array("placeholder" => 'nazwa imprezy')),
            'date_start' => new sfWidgetFormInputText(array(), array("class" => "datetimepicker", "placeholder" => "np. " .date("d.m.Y H:i"))),
            'date_end' => new sfWidgetFormInputText(array(), array("class" => "datetimepicker", "placeholder" => "np. " .date("d.m.Y H:i", strtotime("+1 hour")))),
            'country' => new sfWidgetFormSelect(array("choices" => array_combine(Event::$countries, Event::$countries))),
            'place' => new sfWidgetFormInputText(array(), array("placeholder" => 'np. nazwa klubu')),
            'location' => new sfWidgetFormInputText(array(), array("placeholder" => 'np. nazwa miasta')),
        ));
        $this->widgetSchema->setLabels(array(
            'event' => "Impreza",
            'date_start' => "Start",
            'date_end' => "Koniec",
            'country' => "Kraj",
            'place' => "Miejsce",
            'location' => "Lokalizacja",
        ));

        $date_regex = '~(?P<day>\d{2})\.(?P<month>\d{2})\.(?P<year>\d{4})\s(?P<hour>\d{2})\:(?P<minutes>\d{2})~';
        
        $this->setValidators(array(
            'event' => new sfValidatorString(array('max_length' => 100)),
            'place' => new sfValidatorString(array('max_length' => 100)),
            'location' => new sfValidatorString(array('max_length' => 100)),
            'country' => new sfValidatorString(array('max_length' => 100)),
            'date_start' => new sfValidatorDate(array(
                "date_format" => $date_regex,
                "min" => time(),
                "with_time" => true,
                "date_output" => "d.m.Y H:i"
            )),
            'date_end' => new sfValidatorDate(array(
                "date_format" => $date_regex,
                "min" => time(),
                "with_time" => true,
                "date_output" => "d.m.Y H:i"
            )),
        ));

        $this->widgetSchema["country"]->setDefault("polska");

        $this->widgetSchema->setNameFormat('event[%s]');
    }

//    public function processValues($values) {
//
//        if ($this->isValid()) {
//            $values["date"] = date("Y-m-d 12:00:00", strtotime($values["date"]));
//        }
//        
//        return parent::processValues($values);
//    }

}
