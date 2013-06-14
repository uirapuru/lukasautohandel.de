<?php

class defaultActions extends sfActions {

    public function postExecute() {
        parent::postExecute();

        $events = Doctrine_Core::getTable('Event')
                ->createQuery('a')
                ->orderBy("date_start ASC")
                ->where("date_end > ?", date("Y-m-d H:i:s"))
                ->limit(4)
                ->execute();

        $this->getResponse()->setSlot('events', $this->getPartial("events", array("events" => $events)));
        $this->getResponse()->setSlot('fb', $this->getPartial("fb"));
        $this->getResponse()->setSlot('cloud', $this->getPartial("cloud"));
    }

    public function executeIndex(sfWebRequest $request) {
        
    }

    public function executeMain(sfWebRequest $request) {
        $this->news = Doctrine_Core::getTable('News')
                ->createQuery('a')
                ->limit(5)
                ->orderBy('a.created_at DESC')
                ->execute();
    }

    public function executeNews(sfWebRequest $request) {
        $this->pager = new sfDoctrinePager('News', 2);
        $this->pager->setQuery(NewsTable::getInstance()->createQuery('a')->orderBy('a.created_at DESC'));
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
    }

    /**
     * @param sfWebRequest $request
     */
    public function executeShowNews(sfWebRequest $request) {
        $this->news = NewsTable::getInstance()->createQuery('a')->where('id = ?', $request->getParameter("id"))->fetchOne();
//                ($request->getParameter("id"));
    }

    public function executeBio(sfWebRequest $request) {
        
    }

    public function executeMusic(sfWebRequest $request) {
        
    }

    public function executeRadio(sfWebRequest $request) {
        
    }

    public function executeSchedule(sfWebRequest $request) {
        $this->events = Doctrine_Core::getTable('Event')
                ->createQuery('a')
                ->orderBy("date_start ASC")
                ->where("date_end > ?", date("Y-m-d H:i:s"))
                ->execute();
    }

    public function executeVideo(sfWebRequest $request) {
        $this->videos = Doctrine_Core::getTable('Video')
                ->createQuery('a')
                ->orderBy("id DESC")
                ->execute();
    }

    public function executePress(sfWebRequest $request) {
        
    }

    public function executeContact(sfWebRequest $request) {
        $this->form = new ContactForm(null, array(
                    "culture" => $this->getUser()->getCulture()
                ));

        if ($request->isMethod("POST")) {
            $this->form->bind($request->getParameter($this->form->getName()));
            if ($this->form->isValid()) {

                $headers = 'From: ' . $this->form->getValue("name") . "<" . $this->form->getValue("email") . ">" . "\r\n" .
                        'Reply-To: ' . $this->form->getValue("name") . "<" . $this->form->getValue("email") . ">" . "\r\n";

                mail("info@thomascloudofficial.com", contactForm::$subjects[$this->form->getValue("subject")], $this->form->getValue("body"), $headers);
                if ($this->getUser()->getCulture() == "en"):
                    $this->getUser()->setFlash('notice', 'Your message has been send');
                else:
                    $this->getUser()->setFlash('notice', 'Dziękujemy za przesłanie wiadomości');
                endif;

//                $mail = $this->getMailer()->compose(array($this->form->getValue("email") => $this->form->getValue("name")), "info@thomascloudofficial.com", contactForm::$subjects[$this->form->getValue("subject")], $this->form->getValue("body"));
//                $response = $this->getMailer()->send($mail);
                $this->redirect($this->getController()->genUrl("@contact"));
            }
        }
    }

    public function executeChangeLanguage(sfWebRequest $request) {
        if ($request->hasParameter('lang')) {
            $this->getUser()->setCulture($request->getParameter('lang', 'pl'));
        }

        $this->redirect($this->getController()->genUrl("@homepage"));
    }

}
