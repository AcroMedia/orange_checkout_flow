<?php

namespace Drupal\orange_checkout_flow\Plugin\Commerce\CheckoutFlow;

use Drupal\commerce_checkout\Plugin\Commerce\CheckoutFlow\CheckoutFlowWithPanesBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a checkout flow that uses checkout panes.
 */
class OrangeCheckoutFlow extends CheckoutFlowWithPanesBase {

  /**
   * {@inheritdoc}
   */
  public function getSteps() {
    return [
      'checkout_as' => [
        'label' => $this->t('Checkout as'),
        'previous_label' => $this->t('Return to Checkout Selection'),
        'has_sidebar' => FALSE,
      ],
      'order_information' => [
        'label' => $this->t('Order Information'),
        'previous_label' => $this->t('Return to Order Information'),
        'has_sidebar' => TRUE,
      ],
      'review' => [
        'label' => $this->t('Review'),
        'previous_label' => $this->t('Return to Review'),
        'next_label' => $this->t('Continue to Review'),
        'has_sidebar' => TRUE,
      ],
    ] + parent::getSteps();
  }

}
