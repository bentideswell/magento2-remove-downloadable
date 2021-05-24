<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Downloadable\Model;

class Link
{
    const XML_PATH_LINKS_TITLE = 'catalog/downloadable/links_title';

    const XML_PATH_DEFAULT_DOWNLOADS_NUMBER = 'catalog/downloadable/downloads_number';

    const XML_PATH_TARGET_NEW_WINDOW = 'catalog/downloadable/links_target_new_window';

    const XML_PATH_CONFIG_IS_SHAREABLE = 'catalog/downloadable/shareable';

    const LINK_SHAREABLE_YES = 1;

    const LINK_SHAREABLE_NO = 0;

    const LINK_SHAREABLE_CONFIG = 2;

    /**#@+
     * Constants for field names
     */
    const KEY_TITLE = 'title';
    const KEY_SORT_ORDER = 'sort_order';
    const KEY_IS_SHAREABLE = 'is_shareable';
    const KEY_PRICE = 'price';
    const KEY_NUMBER_OF_DOWNLOADS = 'number_of_downloads';
    const KEY_LINK_TYPE = 'link_type';
    const KEY_LINK_FILE = 'link_file';
    const KEY_LINK_FILE_CONTENT = 'link_file_content';
    const KEY_LINK_URL = 'link_url';
    const KEY_SAMPLE_TYPE = 'sample_type';
    const KEY_SAMPLE_FILE = 'sample_file';
    const KEY_SAMPLE_FILE_CONTENT = 'sample_file_content';
    const KEY_SAMPLE_URL = 'sample_url';
    /**#@-*/
}
