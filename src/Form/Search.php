<?php

namespace Drupal\search_override\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\google_appliance\Form\SearchForm;

class Search extends SearchForm {
  public function buildForm(array $form, FormStateInterface $form_state, $query = '') {
    $form = parent::buildForm($form, $form_state, $query);

    $prompt = $this->t('Rob overrode the search placeholder');

    $form['basic']['search_keys'] = [
      '#type' => 'textfield',
      '#default_value' => $query,
      '#attributes' => [
        'title' => $prompt,
        'placeholder' => $prompt,
      ],
      '#title' => $prompt,
      '#title_display' => 'invisible',
    ];

    return $form;
  }
}