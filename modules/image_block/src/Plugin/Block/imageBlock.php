<?php

namespace Drupal\image_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an 'Image' Block.
 *
 * @Block(
 *   id = "image_block",
 *   admin_label = @Translation("Image block"),
 * )
 */
class imageBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */

  public function build() {
    $current_path = \Drupal::service('path.current')->getPath();
    $result = \Drupal::service('path.alias_manager')->getAliasByPath($current_path);

    return array(
      '#cache' => array( 'max-age' => 0 ),
      '#theme' => 'image_block',
      '#pageImgURL' => $result,
      '#attached' => array(
        'library' => array(
          'image_block/image-block',
        ),
      ),
    );
  }

}
