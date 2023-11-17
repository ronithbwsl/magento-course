<?php

namespace ronitVendor\ronitModule\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class CreateDefaultBrands implements DataPatchInterface{

    private $moduleDataSetup;

    public function __construct(ModuleDataSetupInterface $moduleDataSetup){
        $this->moduleDataSetup = $moduleDataSetup;
    }


    public static function getDependencies(){
        return [];
    }

    public function getAliases(){
        return [];
    }

    public function apply(){
        $brands = [['name'=>'Sike', 'description'=>'Something cool'],
                    ['name'=>'Luma', 'description'=>'Something not so coll'],
                    ['name'=>'Badidas', 'description'=>'To cool to care']
        ];

        $records = array_map(function ($brand){
            return array_merge($brand,['is_enabled'=> 1,'website_id'=>1]);
        }, $brands);

        $this->moduleDataSetup->getConnection()->insertMultiple('ronitVendor_ronitModule',$records);
        return $this;

    }
}

?>