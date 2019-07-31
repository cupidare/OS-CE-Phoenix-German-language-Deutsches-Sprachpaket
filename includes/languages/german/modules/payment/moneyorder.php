<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2019 osCommerce CE Phoenix

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Check/Money Order');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Make Payable To:&nbsp;' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . '<br /><br />Send To:<br />' . STORE_NAME . '<br />' . nl2br(STORE_ADDRESS) . '<br /><br />' . 'Your order will not ship until we receive payment.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Make Payable To: " . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\n\nSend To:\n" . STORE_NAME . "\n" . STORE_ADDRESS . "\n\n" . 'Your order will not ship until we receive payment.');

  define('MODULE_PAYMENT_MONEYORDER_WARNING_SETUP', 'Please ensure you set up the \'Make Payable to\' parameter.');
