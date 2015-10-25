<?php

/**
 * @file
 * Contains Drupal\calculatrice\Controller\DefaultController.
 */

namespace Drupal\calculatrice\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\calculatrice\Controller
 */
class DefaultController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($param_1, $param_2) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Implement method: index with parameter(s): $param_1, $param_2')
    ];
  }


    public function indexAction(){
          
     
    return [
      '#theme' => 'index_page',
    ];
      
  }  

}
