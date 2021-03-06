<?php
/**
 * product_music_info header_php.php
 *
 * @package page
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: mc12345678 2019 Apr 30 Modified in v1.5.6b $
 */

// This should be first line of the script:
$zco_notifier->notify('NOTIFY_HEADER_START_PRODUCT_MUSIC_INFO');

require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));

$product_info = zen_get_product_details($products_id_current = (int)$_GET['products_id']);

zen_product_set_header_response($products_id_current, $product_info);

// ensure navigation snapshot is set in order to "go back" in case must-be-logged-in-for-price is enabled
if (!zen_is_logged_in()) {
    $_SESSION['navigation']->set_snapshot();
}

// This should be last line of the script:
$zco_notifier->notify('NOTIFY_HEADER_END_PRODUCT_MUSIC_INFO');
