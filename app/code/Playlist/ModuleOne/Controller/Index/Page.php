<?php

declare(strict_types= 1);

namespace Playlist\ModuleOne\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\ActionInterface;

class Page implements ActionInterface{

    public function __construct(private PageFactory $pageFactory){}

    public function execute(){
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set("Example");
        return $page;
    }
}


?>