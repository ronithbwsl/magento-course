<?php

declare(strict_types=1);

namespace ronitVendor\SetupSchema\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
class InstallSchema implements InstallSchemaInterface{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context){
        echo __METHOD__ . PHP_EOL;
    }
}


?>