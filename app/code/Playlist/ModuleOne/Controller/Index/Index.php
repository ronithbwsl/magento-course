<?php

declare(strict_types=1);

namespace Playlist\ModuleOne\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;

class Index implements ActionInterface{
    public function __construct(protected RawFactory $resultFactory){
        
    }
    public function execute(){
        return $this->resultFactory->create()->setContents('example');
    }
}

?>