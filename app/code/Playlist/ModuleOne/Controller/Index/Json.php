<?php

declare(strict_types= 1);

namespace Playlist\ModuleOne\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Json implements ActionInterface{

    public function __construct(private JsonFactory $jsonFactory){

    }

    public function execute(){
        return $this->jsonFactory->create()->setHeader("Content-Type","application/json")
            ->setData(['data1'=>"data1 value",'data2'=>"data2 value",'data3'=>"data3 value"]);
    }
}

?>