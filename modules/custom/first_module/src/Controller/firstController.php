<?php

namespace Drupal\first_module\Controller; 

use \Drupal\Core\StringTranslation\StringTranslationTrait;

class FirstController {

  use StringTranslationTrait;

  public function first() {
    return array('#markup'=> 'Welcome to drupal website amigo :)');

  }

}


/// single thing but controllerbase includes all of them like log ect.