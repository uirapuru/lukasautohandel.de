<?php
// auto-generated by sfViewConfigHandler
// date: 2013/09/07 23:26:55
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'videoSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'videoSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Lukas Autohandel', false, false);
  $response->addMeta('description', 'Lukas Autohandel', false, false);
  $response->addMeta('keywords', 'car, auto, samochód', false, false);
  $response->addMeta('language', 'en,pl,de', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('bootstrap.css', '', array ());
  $response->addStylesheet('slider.css', '', array ());
  $response->addStylesheet('jqtransform.css', '', array ());
  $response->addStylesheet('prettyPhoto.css', '', array ());
  $response->addStylesheet('style.css', '', array ());
  $response->addStylesheet('/css/vendor/prettyPhoto.css', '', array ());
  $response->addJavascript('jquery-1.7.1.min.js', '', array ());
  $response->addJavascript('jquery.easing.1.3.js', '', array ());
  $response->addJavascript('superfish.js', '', array ());
  $response->addJavascript('jquery.jqtransform.js', '', array ());
  $response->addJavascript('camera.js', '', array ());
  $response->addJavascript('jquery.hoverIntent.minified.js', '', array ());
  $response->addJavascript('jquery.ui.totop.js', '', array ());
  $response->addJavascript('jquery.mobilemenu.js', '', array ());
  $response->addJavascript('jquery.prettyPhoto.js', '', array ());
  $response->addJavascript('script.js', '', array ());
  $response->addJavascript('/js/vendor/jquery.prettyPhoto.js', '', array ());
}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Lukas Autohandel', false, false);
  $response->addMeta('description', 'Lukas Autohandel', false, false);
  $response->addMeta('keywords', 'car, auto, samochód', false, false);
  $response->addMeta('language', 'en,pl,de', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('bootstrap.css', '', array ());
  $response->addStylesheet('slider.css', '', array ());
  $response->addStylesheet('jqtransform.css', '', array ());
  $response->addStylesheet('prettyPhoto.css', '', array ());
  $response->addStylesheet('style.css', '', array ());
  $response->addJavascript('jquery-1.7.1.min.js', '', array ());
  $response->addJavascript('jquery.easing.1.3.js', '', array ());
  $response->addJavascript('superfish.js', '', array ());
  $response->addJavascript('jquery.jqtransform.js', '', array ());
  $response->addJavascript('camera.js', '', array ());
  $response->addJavascript('jquery.hoverIntent.minified.js', '', array ());
  $response->addJavascript('jquery.ui.totop.js', '', array ());
  $response->addJavascript('jquery.mobilemenu.js', '', array ());
  $response->addJavascript('jquery.prettyPhoto.js', '', array ());
  $response->addJavascript('script.js', '', array ());
}

