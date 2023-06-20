<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Downloadable\Helper;

class Download extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Link type for url
     */
    public const LINK_TYPE_URL = 'url';

    /**
     * Link type for file
     */
    public const LINK_TYPE_FILE = 'file';

    /**
     * Config path to content disposition
     */
    public const XML_PATH_CONTENT_DISPOSITION = 'catalog/downloadable/content_disposition';


    /**
     * @return int
     */
    public function getFileSize()
    {
        return 0;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return '';
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return '';
    }

    /**
     * @return $this
     */
    public function setResource($resourceFile, $linkType = self::LINK_TYPE_FILE)
    {
        return $this;
    }

    /**
     * @return void
     */
    public function output()
    {
    }

    /**
     * @return bool
     */
    public function getContentDisposition($store = null)
    {
        return true;
    }
}