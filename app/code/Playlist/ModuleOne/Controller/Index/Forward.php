<?php 

declare(strict_types=1);

namespace Playlist\ModuleOne\Controller\Index;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\App\ActionInterface;

class Forward implements ActionInterface{

    public function __construct(private ForwardFactory $forwardFactory){}

    public function execute(){
        return $this->forwardFactory->create()->forward('page');
    }
}

?>