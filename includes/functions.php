<?php
use ONSBKS_Slots\Includes\Admin\SlotBookPage;
/**
 * get all products ids and titles in an array
 *
 * @since 1.0.0
 *
 * @return array
 */
function onsbks_get_product_id_title(): array {
    return SlotBookPage::get_product_id_title();
}

