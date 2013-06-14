<?php

class I18nSaverFilter extends sfFilter {
    function execute ($filterChain) {
      $filterChain->execute();
      
      if ($this->isFirstCall())
      {
        sfContext::getInstance()->getI18N()->getGlobalMessageSource()->save();
        sfContext::getInstance()->getI18N()->getMessageSource()->save();
      }
    }
}