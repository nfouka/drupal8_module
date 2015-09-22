<?php

/**
 * @file
 * Contains Drupal\mymodules\Tests\DefaultController.
 */

namespace Drupal\mymodules\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the mymodules module.
 */
class DefaultControllerTest extends WebTestBase
{





  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "mymodules DefaultController's controller functionality",
      'description' => 'Test Unit for module mymodules and controller DefaultController.',
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
   * Tests mymodules functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module mymodules.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }
}
