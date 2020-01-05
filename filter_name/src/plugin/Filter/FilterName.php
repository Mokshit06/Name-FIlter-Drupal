<?php

namespace Drupal\filter_name\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
 * Replaces "[name:FIRSTNAME:LASTNAME"] with "Name:LASTNAME FIRSTNAME".
 *
 * @Filter(
 *   id = "filter_name",
 *   title = @Translation("Name Rearrange Filter"),
 *   description = @Translation("Replaces "[name:FIRSTNAME:LASTNAME"] with "Name:LASTNAME FIRSTNAME""),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_REVERSIBLE,
 * )
 */
class FilterName extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    // Detects pattern using Regular Expression.
    $regex = '/\[name\:(\w+)\:(\w+)\]/';
    $replacement = "Name: " . '$2 $1';
    // Replaces the text using RegEx and returns the new text formed.
    $new_text = preg_replace($regex, $replacement, $text);
    return new FilterProcessResult($new_text);
  }

}
