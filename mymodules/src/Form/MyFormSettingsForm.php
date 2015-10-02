<?php

/**
 * @file
 * Contains Drupal\mymodules\Form\MyFormSettingsForm.
 */

namespace Drupal\mymodules\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class MyFormSettingsForm.
 *
 * @package Drupal\mymodules\Form
 */
class MyFormSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'mymodules.mysettings_config'
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'my_form_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('mymodules.mysettings_config');
    $form['nom'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('nom'),
      '#description' => $this->t('tapez votre nom'),
      '#default_value' => $config->get('nom'),
    );
    $form['pr_nom'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('prénom'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('pr_nom'),
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

    $this->config('mymodules.mysettings_config')
      ->set('nom', $form_state->getValue('nom'))
      ->set('pr_nom', $form_state->getValue('pr_nom'))
      ->save();
  }

}
