<?php

class defaultActions extends sfActions {

    public function executeGetModelsForBrand(sfWebRequest $request) {
        $brand = $request->getParameter("brand", false);

        if (!$brand || !$request->isXmlHttpRequest())
        {
            $this->redirect404();
        }

        $models = CarTable::getInstance()->getModelsArray($brand);

        $this->getResponse()->setContentType("application/json");
        return $this->renderText(json_encode($models));
    }

    public function executeContact(sfWebRequest $request) {
        $this->car = null;

        if ($this->getRoute() instanceof sfDoctrineRoute)
        {
            $this->car = $this->getRoute()->getObject();
        }

        $this->form = new ContactForm(null, array(
            "culture" => $this->getUser()->getCulture()
        ));

        if ($request->isMethod("POST"))
        {
            $this->form->bind($request->getParameter($this->form->getName()));
            if ($this->form->isValid())
            {
//                $headers = 'From: ' . $this->form->getValue("name") . "<" . $this->form->getValue("email") . ">" . "\r\n" .
//                        'Reply-To: ' . $this->form->getValue("name") . "<" . $this->form->getValue("email") . ">";
//                $failure = mail("uirapuruadg@gmail.com", "E-mail message from lukasautohandel.de", $this->form->getValue("body"), $headers);

                $transport = Swift_SmtpTransport::newInstance(sfConfig::get("app_swiftmailer_smtp"), sfConfig::get("app_swiftmailer_port"), "ssl")
                        ->setUsername(sfConfig::get("app_swiftmailer_username"))
                        ->setPassword(sfConfig::get("app_swiftmailer_password"))
                ;

                $mailer = Swift_Mailer::newInstance($transport);

                $message = Swift_Message::newInstance(sfConfig::get("app_swiftmailer_subject"));

                $body = $this->getPartial("global/email", array(
                    "body"    => $this->form->getValue("body"),
                    "email"   => $this->form->getValue("email"),
                    "name"    => $this->form->getValue("name"),
                    "phone"   => $this->form->getValue("phone"),
                    "car"     => $this->car,
                    "message" => $message
                ));

                $message
//                        ->setFrom(array($this->form->getValue("email") => $this->form->getValue("name")))
                        ->setFrom(array(sfConfig::get("app_swiftmailer_fromEmail") => sfConfig::get("app_swiftmailer_fromName")))
                        ->setReplyTo(array($this->form->getValue("email") => $this->form->getValue("name")))
                        ->setTo(array(sfConfig::get("app_swiftmailer_toEmail")))
                        ->setBody($body, 'text/html', 'UTF8');

                $result = $mailer->send($message);

                $this->getUser()->setFlash("notice", "Contact form submitted!<br><strong> We will be in touch soon.</strong>");

                $this->redirect("@contact");
            }
        }
    }

    public function executeShow(sfWebRequest $request) {
        $this->car = $this->getRoute()->getObject();
    }

    public function executeIndex(sfWebRequest $request) {
        $this->getResponse()->setSlot("header", $this->getPartial("header"));

        $cars = CarTable::getInstance()->getPromotedCars();
        $this->cars = array();
        foreach ($cars as $index => $car) {
            $this->cars[$index % 2][] = $car;
        }
    }

    public function executeChangeLanguage(sfWebRequest $request) {
        $language = $request->getParameter("lang", "pl");
        $this->getUser()->setCulture($language);
        $this->redirect("@homepage");
    }

    public function executeSearch(sfWebRequest $request) {
        $query = CarTable::getCarsQuery();

        CarTable::addSortOrder($query, 'created_at DESC');



        // filtr

        $this->formFilter = new CarFormFilter();
        $this->formFilter->setQuery($query);

        $filterValues = $request->getParameter($this->formFilter->getName(), false);

        if (!$filterValues)
        {
            $filterValues = $this->getUser()->getAttribute("filterValues", array(
                    ));
        }

        if ($request->getParameter("_reset", false) == true)
        {
            $this->getUser()->setAttribute("filterValues", array());
            $this->redirect("@search");
        }

        $this->getUser()->setAttribute("filterValues", $filterValues);

//        if ($filterValues["model"] != null)
//        {
//            CarTable::addModel($query, $filterValues["model"]);
//        }
//        if ($filterValues["variant"] != null)
//        {
//            CarTable::addVariant($query, $filterValues["variant"]);
//        }
//        if ($filterValues["brand"] != null)
//        {
//            CarTable::addBrand($query, $filterValues["brand"]);
//        }

        $this->formFilter->bind($filterValues);

        if ($this->formFilter->isValid())
        {
            $query = $this->formFilter->getQuery();
        }

        // pager

        $this->pager = new sfDoctrinePager(
                'Car', 5
        );
        $this->pager->setQuery($query);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
    }

}
