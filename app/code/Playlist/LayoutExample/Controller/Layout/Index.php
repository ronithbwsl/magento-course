<?php

namespace Playlist\LayoutExample\Controller\Layout;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{

    public function __construct(private PageFactory $pageFactory){}

    public function execute(){
        $result = $this->pageFactory->create();
        $result->getConfig()->getTitle()->set("Ronit Kumar Gupta");
        $result->getLayout()->getBlock("page.main.title")->setPageTitle("Magento Developer");
        return $result;
    }

}

?>