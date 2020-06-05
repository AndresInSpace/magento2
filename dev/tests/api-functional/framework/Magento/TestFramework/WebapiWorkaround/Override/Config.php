<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\TestFramework\WebapiWorkaround\Override;

use Magento\Framework\App\ObjectManager;
use Magento\Framework\Config\ConverterInterface;
use Magento\Framework\Config\SchemaLocatorInterface;
use Magento\Framework\View\File\CollectorInterface;
use Magento\TestFramework\WebapiWorkaround\Override\Config\Converter;
use Magento\TestFramework\WebapiWorkaround\Override\Config\FileCollector;
use Magento\TestFramework\WebapiWorkaround\Override\Config\SchemaLocator;
use Magento\TestFramework\Workaround\Override\Config as IntegrationConfig;

/**
 * Provides api tests configuration.
 */
class Config extends IntegrationConfig
{
    /**
     * @inheritdoc
     */
    protected function getConverter(): ConverterInterface
    {
        return ObjectManager::getInstance()->create(Converter::class);
    }

    /**
     * @inheritdoc
     */
    protected function getSchemaLocator(): SchemaLocatorInterface
    {
        return ObjectManager::getInstance()->create(SchemaLocator::class);
    }

    /**
     * @inheritdoc
     */
    protected function getFileCollector(): CollectorInterface
    {
        return ObjectManager::getInstance()->create(FileCollector::class);
    }
}
