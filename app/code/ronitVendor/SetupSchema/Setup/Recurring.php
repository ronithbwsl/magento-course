<?php

declare(strict_types=1);

namespace ronitVendor\SetupSchema\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class Recurring implements InstallSchemaInterface{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context){
        echo __METHOD__ . PHP_EOL;
    }
}


?>