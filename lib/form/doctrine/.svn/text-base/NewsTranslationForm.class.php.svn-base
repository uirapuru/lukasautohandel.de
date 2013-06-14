<?php

/**
 * NewsTranslation form.
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewsTranslationForm extends BaseNewsTranslationForm {

    public function configure() {
        $this->setWidgets(array(
            'id' => new sfWidgetFormInputHidden(),
            'msgtitle' => new sfWidgetFormInputText(),
            'msgbody' => new sfWidgetFormTextarea(),
            'lang' => new sfWidgetFormInputHidden(),
        ));

        $this->setValidators(array(
            'id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'msgtitle' => new sfValidatorString(array('max_length' => 255)),
            'msgbody' => new sfValidatorPass(),
            'lang' => new sfValidatorPass(),
        ));
        $this->widgetSchema->setNameFormat('news_translation[%s]');

        $this->widgetSchema->setLabels(array(
            "msgtitle" => "Nagłówek",
            "msgbody" => "Treść"
        ));

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }

}
