<?php

/**
 * Video form.
 *
 * @package    ThomasCloud
 * @subpackage form
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VideoForm extends BaseVideoForm {

    public function configure() {
        sfContext::getInstance()->getUser()->setCulture('pl');
        
        unset($this['created_at'], $this['updated_at']);
        
        $this->widgetSchema->setNameFormat('video[%s]');

        $this->embedI18n(array("pl", "en"));

        $this->widgetSchema->setLabel('pl', 'Po polsku');
        $this->widgetSchema->setLabel('en', 'Po angielsku');
    }

}
