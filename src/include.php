<?php
/**
 * @package   AllediaFramework
 * @contact   www.alledia.com, hello@alledia.com
 * @copyright 2014 Alledia.com, All rights reserved
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */

use Alledia\Framework\AutoLoader;

defined('_JEXEC') or die();

if (!defined('ALLEDIA_FRAMEWORK_LOADED')) {
    define('ALLEDIA_FRAMEWORK_LOADED', 1);

    define('ALLEDIA_FRAMEWORK_PATH', __DIR__);

    // Setup autoloaded libraries
    if (!class_exists('\\Alledia\\Framework\\AutoLoader')) {
        require_once ALLEDIA_FRAMEWORK_PATH . '/Framework/AutoLoader.php';
    }
    AutoLoader::register('Alledia\Framework', ALLEDIA_FRAMEWORK_PATH . '/Framework');
}
