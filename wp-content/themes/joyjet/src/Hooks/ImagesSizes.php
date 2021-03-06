<?php

namespace Theme\Hooks;

use SolidPress\Core\Hook;

/**
 * ImageSizes
 */
class ImagesSizes extends Hook {

	/**
	 * Bind action
	 */
	public function __construct() {
        $this->add_action( 'after_setup_theme', 'images_sizes' );
	}

	/**
	 * Set thumbnail sizes
	 */
	public function images_sizes(): void {
		// SQUARE
		add_image_size( 'SIZE_200_200', 200, 200, true );

		add_image_size( 'SIZE_500_335', 500, 335, true );
	}
}