<?php

/**
 * default actions.
 *
 * @package    ThomasCloud
 * @subpackage default
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class defaultActions extends sfActions {

    public function preExecute() {
        parent::preExecute();
        $this->getUser()->setCulture("pl");
    }

    public function executeIndex(sfWebRequest $request) {
        
    }

    public function executeListNews(sfWebRequest $request) {
        $this->newss = Doctrine_Core::getTable('News')
                ->createQuery('a')
                ->execute();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new NewsForm(null, array(
                    "culture" => $this->getUser()->getCulture()
                ));
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new NewsForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($news = Doctrine_Core::getTable('News')->find(array($request->getParameter('id'))), sprintf('Object news does not exist (%s).', $request->getParameter('id')));
        $this->form = new NewsForm($news);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($news = Doctrine_Core::getTable('News')->find(array($request->getParameter('id'))), sprintf('Object news does not exist (%s).', $request->getParameter('id')));
        $this->form = new NewsForm($news);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($news = Doctrine_Core::getTable('News')->find(array($request->getParameter('id'))), sprintf('Object news does not exist (%s).', $request->getParameter('id')));
        $news->delete();

        $this->redirect('default/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $news = $form->save();

            $this->redirect('default/index');
        }
    }

}
