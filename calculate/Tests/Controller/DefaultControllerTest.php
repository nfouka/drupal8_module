<?php

/**
 * @file
 * Contains Drupal\calculatrice\Tests\DefaultController.
 */

namespace Drupal\calculatrice\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the calculatrice module.
 */
class DefaultControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "calculatrice DefaultController's controller functionality",
      'description' => 'Test Unit for module calculatrice and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests calculatrice functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module calculatrice.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
