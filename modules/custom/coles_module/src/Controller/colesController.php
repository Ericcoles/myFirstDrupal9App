<?php

namespace Drupal\coles_module\Controller;

use \Drupal\core\Controller\ControllerBase;
// use \Drupal\Core\StringTranslation\StringTranslationTrait;

class ColesController extends ControllerBase {
  public function coles() {
    // return array('#markup' => 'Welcome to Cool Coles Drupal 9 websity Amigo, you dig?');
    return ['#markup' =>$this->t('Welcome to My drupal') ];
  }
}

/// single thing but controllerbase includes all of them like log ect.Controller base is King!