<?php

namespace Drupal\search_override\Plugin\Block;

use Drupal\google_appliance\Plugin\Block\SearchBlock;
use Drupal\search_override\Form\Search;

/**
 * Provides a 'Google Appliance Search' block.
 *
 * @Block(
 *   id = "search_override_search",
 *   admin_label = @Translation("Google Appliance Search Override"),
 *   category = @Translation("Forms")
 * )
 */
class GoogleApplianceOverrideBlock extends SearchBlock {
  public function build() {

    return  $this->formBuilder->getForm(Search::class);
  }
}