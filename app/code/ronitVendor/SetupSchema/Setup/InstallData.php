<?php

declare(strict_types=1);

namespace ronitVendor\SetupSchema\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallData implements InstallDataInterface{
    public function install(ModuleDataSetupInterface $setup,ModuleContextInterface $context){
        echo __METHOD__ . PHP_EOL;
    }
}

?>