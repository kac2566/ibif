<?php

declare(strict_types=1);

\defined('ABSPATH') || exit('File cannot be opened directly!');

/**
 * Add menu support 
 */

require_once __DIR__ . '/menu-support.php';

/**
 * Favicon support
 */

 require_once __DIR__ . '/favicon.php';

 /**
  * Enqueue styles and scripts
  */

require_once __DIR__ . '/Enqueue.php';

  /**
 * Add Custom block variations.
 */
require_once __DIR__ . '/block-variation/variations.php';