<?php

/**
 * VideoTranslation form.
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VideoTranslationForm extends BaseVideoTranslationForm {

    public function configure() {
        $this->setWidgets(array(
            'id' => new sfWidgetFormInputHidden(),
            'title' => new sfWidgetFormInputText(),
            'description' => new sfWidgetFormTextarea(),
            'lang' => new sfWidgetFormInputHidden(),
        ));

        $this->setValidators(array(
            'id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'title' => new sfValidatorString(array('max_length' => 100)),
            'description' => new sfValidatorString(array('max_length' => 400)),
            'lang' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
        ));

        
        $this->widgetSchema->setLabels(array(
            "title" => "Nagłówek",
            "description" => "Opis"
        ));
        
        $this->widgetSchema->setNameFormat('video_translation[%s]');
    }

}
