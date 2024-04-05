<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Downloadable\Model\Product;

class Type extends \Magento\Catalog\Model\Product\Type\Virtual
{
    /**
     *
     */
    public const TYPE_DOWNLOADABLE = 'downloadable';

    /**
     * @return []
     */
    public function getLinks($product)
    {
        return [];
    }

    /**
     * @return boolean
     */
    public function hasLinks($product)
    {
        return false;
    }

    /**
     * @return []
     */
    public function getSamples($product)
    {
        return [];
    }

    /**
     * @return boolean
     */
    public function hasSamples($product)
    {
        return false;
    }
}