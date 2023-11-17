<?php

declare(strict_types=1);

namespace ronitVendor\SetupSchema\Setup;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context){
        echo __METHOD__ . PHP_EOL;
    }
}

?>