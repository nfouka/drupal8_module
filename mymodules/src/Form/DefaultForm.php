<?php

/**
 * @file
 * Contains Drupal\mymodules\Form\DefaultForm.
 */

namespace Drupal\mymodules\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class DefaultForm.
 *
 * @package Drupal\mymodules\Form
 */
class DefaultForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'mymodules.default_config'
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'default_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('mymodules.default_config');
    $form['firstname'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('FirstName'),
      '#description' => $this->t('Your last Name'),
      '#maxlength' => 25,
      '#size' => 25,
      '#default_value' => $config->get('firstname'),
    );
    $form['lastname'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('LastName'),
      '#description' => $this->t('Last Name'),
      '#maxlength' => 25,
      '#default_value' => $config->get('lastname'),
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('mymodules.default_config')
      ->set('firstname', $form_state->getValue('firstname'))
      ->set('lastname', $form_state->getValue('lastname'))
      ->save();
  }
 
}
