<?php

//require_once 'E://Symfony-1.4//lib/autoload/sfCoreAutoload.class.php';
require_once '../lib/vendor/symfony1/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration
        extends sfProjectConfiguration
{

    public function setup()
    {
        $this->enablePlugins(array(
            'sfDoctrinePlugin',
            'sfDoctrineGuardPlugin',
        ));
//      $this->enablePlugins('sfDoctrineActAsTaggablePlugin');
  }

}
