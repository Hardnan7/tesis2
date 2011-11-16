<?php
// auto-generated by sfViewConfigHandler
// date: 2011/11/15 09:30:22
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('style.css', '', array ());
  $response->addStylesheet('menu.css', '', array ());
  $response->addStylesheet('jquery-ui-1.8.11.custom.css', '', array ());
  $response->addStylesheet('jquery.ui.all.css', '', array ());
  $response->addStylesheet('demos.css', '', array ());
  $response->addJavascript('menu.js', '', array ());
  $response->addJavascript('jquery-1.5.1.min.js', '', array ());
  $response->addJavascript('jquery-ui-1.8.11.custom.min.js', '', array ());
  $response->addJavascript('jquery.ui.datepicker-es.js', '', array ());
  $response->addJavascript('jquery-1.5.1.js', '', array ());
  $response->addJavascript('jquery.ui.core.js', '', array ());
  $response->addJavascript('jquery.ui.widget.js', '', array ());
  $response->addJavascript('jquery.ui.tabs.js', '', array ());


