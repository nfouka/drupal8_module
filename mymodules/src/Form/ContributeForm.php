<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContributeForm
 *
 * @author nadir
 */

namespace Drupal\mymodules\Form;

class ContributeForm implements \Drupal\Core\Form\BaseFormIdInterface {
    
    
    public function buildForm(array $form, \Drupal\Core\Form\FormStateInterface $form_state) {
         $form['title'] = array(
      '#type' => 'textfield',
      '#title' => t('Title'),
      '#required' => TRUE,
    );
    $form['video'] = array(
      '#type' => 'textfield',
      '#title' => t('Youtube video'),
    );
    $form['video'] = array(
      '#type' => 'textfield',
      '#title' => t('Youtube video'),
    );
    $form['develop'] = array(
      '#type' => 'checkbox',
      '#title' => t('I would like to be involved in developing this material'),
    );
    $form['description'] = array(
      '#type' => 'textarea',
      '#title' => t('Description'),
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
    );
    return $form;
    }

    public function getBaseFormId() {
        
    }

    public function getFormId() {
        return 'amazing_forms_contribute_form';
    }

    public function submitForm(array &$form, \Drupal\Core\Form\FormStateInterface $form_state) {
        
    }

    public function validateForm(array &$form, \Drupal\Core\Form\FormStateInterface $form_state) {
        
    }

//put your code here
}
