<?php
/**
 * Copyright 2019 Adobe
 * All Rights Reserved.
 */
declare(strict_types=1);

namespace Magento\Downloadable\Model\Url;

class DomainValidator
{
    /**
     * Path to the allowed domains in the deployment config
     */
    public const PARAM_DOWNLOADABLE_DOMAINS = 'downloadable_domains';

    /**
     *
     */
    public function isValid($value): bool
    {
        throw new \InvalidArgumentException(
            sprintf(
                'The "%s" class is a mock and should not be used in production code.',
                self::class
            )
        );
    }
}
