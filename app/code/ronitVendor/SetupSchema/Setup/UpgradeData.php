<?php

declare(strict_types=1);

namespace ronitVendor\SetupSchema\Setup;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface{
    public function upgrade(ModuleDataSetupInterface $setup,ModuleContextInterface $context){
        echo __METHOD__ . PHP_EOL;
    }
}

?>