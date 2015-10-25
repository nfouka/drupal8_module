<?php

/**
 * @file
 * Contains Drupal\calculatrice\Plugin\Block\DefaultBlock.
 */

namespace Drupal\calculatrice\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\calculatrice\Plugin\Block\DefaultController  ; 
/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Default block"),
 * )
 */
class DefaultBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['field'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('field'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['field']) ? $this->configuration['field'] : '',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['field'] = $form_state->getValue('field');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
     return [
      '#theme' => 'index_page',
    ];
  }

}
