<?php

declare(strict_types= 1);

namespace Playlist\DependancyInjection\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{
    public function __construct(private PageFactory $pageFactory){}

    public function execute(){
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set("Dependancy Injection in Magento 2");
        return $page;
    }
}

?>